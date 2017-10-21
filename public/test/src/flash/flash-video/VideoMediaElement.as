﻿package {	import flash.display.*;	import flash.events.*;	import flash.media.*;	import flash.net.*;	import flash.system.*;	import flash.external.*;	import flash.utils.Timer;	import flash.external.*;	public class VideoMediaElement extends Sprite {		private var _connection:NetConnection = new NetConnection();		private var _stream:NetStream;		private var _video:Video;		private var _display:Sprite;		private var _soundTransform:SoundTransform;		private var _oldVolume:Number = 1;		private var _autoplay:Boolean = false;		private var _preload:String = "";		private var _timerRate:Number;		private var _isPaused:Boolean = true;		private var _isLoaded:Boolean = false;		private var _isEnded:Boolean = false;		private var _isMuted:Boolean = false;		private var _isSeekInProgress:Boolean = false;		private var _isConnected:Boolean = false;		private var _playWhenConnected:Boolean = false;		private var _hasStartedPlaying:Boolean = false;		private var _isPreloading:Boolean = false;		private var _framerate:Number = 0;		private var _bytesLoaded:Number = 0;		private var _bytesTotal:Number = 0;		private var _bufferEmpty:Boolean = false;		private var _seekOffset:Number = 0;		private var _currentTime:Number = 0;		private var _videoWidth:Number = -1;		private var _videoHeight:Number = -1;		private var _timer:Timer;		private var _currentUrl:String = '';		private var _volume:Number = 1;		private var _duration:Number = 0;		private var _readyState:Number = 0;		private var _id:String;		private var _isRTMP:Boolean = false;		private var _rtmpInfo:Object = null;		private var _streamer:String = "";		private var _pseudoStreamingEnabled:Boolean = false;		private var _pseudoStreamingStartQueryParam:String = "start";		private var _pseudoStreamingType:String = "time";		private var _pseudoStreamingBytePositions:Array = [];		private var _nativeVideoWidth:Number = 0;		private var _nativeVideoHeight:Number = 0;		private var _stageWidth:Number;		private var _stageHeight:Number;		private var _setUpSrc:String;		/**		 * @constructor		 */		public function VideoMediaElement() {			var flashVars:Object = LoaderInfo(this.root.loaderInfo).parameters;			// Use this for CDN			if (flashVars.allowScriptAccess == 'always') {				Security.allowDomain(['*']);				Security.allowInsecureDomain(['*']);			}			_id = flashVars.uid;			_setUpSrc = flashVars.src;			_autoplay = (flashVars.autoplay == true);			_preload = flashVars.preload;			_streamer = (flashVars.flashstreamer != undefined) ? (String(flashVars.flashstreamer)) : "";			_timerRate = (flashVars.timerrate != undefined) ? (parseInt(flashVars.timerrate, 10)) : 250;			if (isNaN(_timerRate)) {				_timerRate = 250;			}			_pseudoStreamingEnabled = flashVars.pseudostreamstart != null;			_pseudoStreamingStartQueryParam = flashVars.pseudostreamstart != null ? flashVars.pseudostreamstart : 'start';			_pseudoStreamingType = flashVars.pseudostreamtype != null ? flashVars.pseudostreamtype : 'time';			// stage setup			stage.align = StageAlign.TOP_LEFT;			stage.scaleMode = StageScaleMode.NO_SCALE;			_stageWidth = stage.stageWidth;			_stageHeight = stage.stageHeight;			stage.addEventListener(MouseEvent.MOUSE_DOWN, stageClickHandler);			stage.addEventListener(MouseEvent.MOUSE_OVER , stageMouseOverHandler);			stage.addEventListener(Event.MOUSE_LEAVE, stageMouseLeaveHandler);			stage.addEventListener(Event.RESIZE, fire_setSize);			stage.addEventListener(Event.ENTER_FRAME, onEnterFrame);			// video setup			_display = new Sprite();			addChild(_display);			_video = new Video();			(_video as Video).smoothing = true;			_display.addChild(_video);			_timer = new Timer(_timerRate);			_timer.addEventListener("timer", timerHandler);			_display.addEventListener(MouseEvent.MOUSE_OVER, stageMouseOverHandler);			_display.x = _video.x = 0;			_display.y = _video.y = 0;			_display.width = _video.width = _stageWidth;			_display.height = _video.height = _stageHeight;			if (_setUpSrc) {				set_src(_setUpSrc);				fire_load();			}			if (ExternalInterface.available) {				// Getters				ExternalInterface.addCallback('get_src', get_src);				ExternalInterface.addCallback('get_volume',get_volume);				ExternalInterface.addCallback('get_currentTime', get_currentTime);				ExternalInterface.addCallback('get_muted', get_muted);				ExternalInterface.addCallback('get_buffered', get_buffered);				ExternalInterface.addCallback('get_duration', get_duration);				ExternalInterface.addCallback('get_paused', get_paused);				ExternalInterface.addCallback('get_ended', get_ended);				ExternalInterface.addCallback('get_readyState', get_readyState);				// Setters				ExternalInterface.addCallback('set_src', set_src);				ExternalInterface.addCallback('set_volume', set_volume);				ExternalInterface.addCallback('set_currentTime', set_currentTime);				ExternalInterface.addCallback('set_muted', set_muted);				// Methods				ExternalInterface.addCallback('fire_load', fire_load);				ExternalInterface.addCallback('fire_play', fire_play);				ExternalInterface.addCallback('fire_pause', fire_pause);				ExternalInterface.addCallback('fire_setSize', fire_setSize);				ExternalInterface.addCallback('fire_stop', fire_stop);				ExternalInterface.call('(function(){window["__ready__' + _id + '"]()})()', null);			}		}		//		// Javascript bridged methods		//		private function fire_load():void {			if (_currentUrl) {				// disconnect existing stream and connection				if (_isConnected && _stream) {					_connection.removeEventListener(NetStatusEvent.NET_STATUS, netStatusHandler);					_connection.removeEventListener(SecurityErrorEvent.SECURITY_ERROR, securityErrorHandler);					try {						_stream.pause();						_stream.close();						_connection.close();					}					catch (error:Error) {}					_connection = new NetConnection();				}				_isConnected = true;				_isPreloading = false;				_isPaused = true;				_isEnded = false;				_bufferEmpty = false;				_connection.client = { onBWDone: function():void{} };				_connection.addEventListener(NetStatusEvent.NET_STATUS, netStatusHandler);				_connection.addEventListener(SecurityErrorEvent.SECURITY_ERROR, securityErrorHandler);				if (_isRTMP) {					_connection.connect(_rtmpInfo.server);				} else {					_connection.connect(null);				}				sendEvent('loadstart');				if (_autoplay) {					fire_play();					return;				}			}		}		private function fire_play():void {			if (!_hasStartedPlaying && !_isConnected) {				_playWhenConnected = true;				fire_load();			}			if (_hasStartedPlaying) {				if (_isPaused) {					_stream.resume();					_timer.start();					_isPaused = false;					sendEvent('play');					sendEvent('playing');				}			} else {				if (_isRTMP) {					_stream.play(_rtmpInfo.stream);				} else {					_stream.play(getUrlPosition(0));				}				_timer.start();			}		}		private function fire_pause():void {			if (_stream == null) {				return;			}			_stream.pause();			if (_bytesLoaded == _bytesTotal) {				_timer.stop();			}		}		private function fire_stop():void {			if (_stream == null) {				return;			}			_stream.close();			_timer.stop();			sendEvent("stop");		}		private function fire_setSize(width: Number=-1, height: Number=-1): void {			var fill:Boolean = false;			var contWidth:Number;			var contHeight:Number;			var stageRatio:Number;			var nativeRatio:Number;			_video.x = 0;			_video.y = 0;			contWidth = stage.stageWidth;			contHeight = stage.stageHeight;			if(width == -1){				width = _video.width;			}			if(height == -1){				height = _video.height;			}			if (width <= 0 || height <= 0) {				fill = true;			}			if (fill) {				_video.width = width;				_video.height = height;			} else {				stageRatio = contWidth/contHeight;				nativeRatio = _videoWidth/_videoHeight;				// adjust size and position				if (nativeRatio > stageRatio) {					_video.width = contWidth;					_video.height =  _videoHeight * contWidth / _videoWidth;					_video.y = contHeight/2 - _video.height/2;				} else if (stageRatio > nativeRatio) {					_video.width = _videoWidth * contHeight / _videoHeight;					_video.height =  contHeight;					_video.x = contWidth/2 - _video.width/2;				} else if (stageRatio == nativeRatio) {					_video.width = contWidth;					_video.height = contHeight;				}			}		}		//		// Setters		//		private function set_src(value:String = ''):void {			if (_isConnected && _stream) {				_stream.pause();			}			_currentUrl = value;			_isConnected = false;			_hasStartedPlaying = false;			_isLoaded = false;			_isRTMP = !!_currentUrl.match(/^rtmp(s|t|e|te)?\:\/\//) || _streamer != "";			if (_isRTMP) {				_rtmpInfo = parseRTMP(_currentUrl);			}		}		private function set_muted(value:Boolean):void {			if (_isConnected && _stream) {				if (_isMuted == value) {					return;				}				if (value == true) {					_oldVolume = (_stream == null) ? _oldVolume : _stream.soundTransform.volume;					set_volume(0);				} else {					set_volume(_oldVolume);				}				_isMuted = value;			}		}		private function set_volume(value:Number = NaN):void {			if (!isNaN(value)) {				if (_stream != null) {					_soundTransform = new SoundTransform(value);					_stream.soundTransform = _soundTransform;				}				_volume = value;				_isMuted = (_volume == 0);				sendEvent("volumechange");			}		}		private function set_currentTime(pos:Number = NaN):void {			if (_stream == null) {				return;			}			_timer.stop();			// Calculate the position of the buffered video			var bufferPosition:Number = _bytesLoaded / _bytesTotal * _duration;			sendEvent('seeking');			if (_pseudoStreamingEnabled) {				// Normal seek if it is in buffer and this is the first seek				if (pos < bufferPosition && _seekOffset == 0) {					_stream.seek(pos);				}				else {					// Uses server-side pseudo-streaming to seek					_stream.play(getUrlPosition(pos));					_seekOffset = pos;				}			} else {				_stream.seek(pos);			}			_currentTime = pos;			sendEvent('seeked');		}		//		// Getters		//		private function get_src():String {			return _currentUrl;		}		private function get_paused():Boolean {			return _isPaused;		}		private function get_muted():Boolean {			return _isMuted;		}		private function get_volume():Number {			return _isMuted ? 0 : _volume;		}		private function get_currentTime():Number {			var currentTime:Number = 0;			if (_stream != null) {				currentTime = _stream.time;				if (_pseudoStreamingEnabled && "time" == _pseudoStreamingType) {					currentTime += _seekOffset;				}			}			return currentTime;		}		private function get_duration():Number {			return _duration;		}		private function get_buffered():Number {			if (_bytesTotal > 0) {				return _bytesLoaded / _bytesTotal * _duration;			} else {				return 0;			}		}		private function get_ended():Boolean {			return _isEnded;		}		private function get_readyState():Number {			return _readyState;		}		//		// Event handlers		//		private function ioErrorHandler(event:Event):void {			sendEvent("error");		}		private function metaDataHandler(info:Object):void {			// store main info			// Only set the duration when we first load the video			if (_duration == 0) {				_duration = info.duration;			}			_framerate = info.framerate;			_videoWidth = info.width;			_videoHeight = info.height;			// reposition			_nativeVideoWidth = _video.videoWidth;			_nativeVideoHeight = _video.videoHeight;			// For byte based pseudo-streaming, find seekpoints from metadata			if (_pseudoStreamingEnabled && _pseudoStreamingType == 'byte') {				findBytePosition(info);			}			sendEvent("loadedmetadata");			_readyState = 4;			if (_isPreloading) {				_isPaused = false;				_isPreloading = false;				sendEvent("play");			}		}		private function timerHandler(e:TimerEvent):void {			_bytesLoaded = _stream.bytesLoaded;			_bytesTotal = _stream.bytesTotal;			if (!_isPaused) {				sendEvent('timeupdate');			}			if (_bytesLoaded < _bytesTotal) {				sendEvent('progress');			}		}		private function netStatusHandler(event:NetStatusEvent):void {			switch (event.info.code) {				case "NetStream.Buffer.Flush":				case "NetStream.Buffer.Empty":					_bufferEmpty = true;					var currTime:Number = uint(get_currentTime());					if (currTime >= uint(get_duration()) || (currTime == 0 && _hasStartedPlaying)) {						_isEnded = true;						fire_pause();						_hasStartedPlaying = false;						sendEvent("ended");					}					break;				case "NetStream.Buffer.Full":					_bytesLoaded = _stream.bytesLoaded;					_bytesTotal = _stream.bytesTotal;					_bufferEmpty = false;					sendEvent("progress");					break;				case "NetConnection.Connect.Success":					connectStream();					break;				case "NetStream.Play.StreamNotFound":					sendEvent('error', 'Unable to locate video');					break;				case "NetStream.SeekStart.Notify":					_isSeekInProgress = true;					break;				case "NetStream.Seek.Complete":					_isSeekInProgress = false;					break;				case "NetStream.Play.Start":					if(!_isSeekInProgress) {						_isPaused = false;						_hasStartedPlaying = true;						if (_hasStartedPlaying) {							sendEvent("play");							_timer.start();						} else {							fire_play();						}					}					break;				case "NetConnection.Connect.Closed":					_isConnected = false;					break;				case "NetStream.Pause.Notify":					if (_hasStartedPlaying) {						_isPaused = true;						sendEvent("pause");						_timer.stop();					} else {						fire_load();					}					break;				case "NetStream.Play.Stop":					if (_hasStartedPlaying && uint(get_currentTime()) >= uint(get_duration())) {						_isEnded = true;						fire_pause();						_isPaused = true;						_hasStartedPlaying = false;						sendEvent("ended");					}					break;			}		}		private function securityErrorHandler(event:SecurityErrorEvent):void {			trace("securityErrorHandler: " + event);		}		private function asyncErrorHandler(event:AsyncErrorEvent):void {			// ignore AsyncErrorEvent events.		}		private function stageClickHandler(e:MouseEvent):void {			sendEvent("click");		}		private function stageMouseOverHandler(e:MouseEvent):void {			sendEvent("mouseover");		}		private function stageMouseLeaveHandler(e:Event):void {			sendEvent("mouseout");			sendEvent("mouseleave");		}		private function onEnterFrame(e:Event):void {			_bytesLoaded = _stream.bytesLoaded;			_bytesTotal = _stream.bytesTotal;			if (_hasStartedPlaying) {				sendEvent("timeupdate");			}			if (_bytesLoaded < _bytesTotal) {				sendEvent("progress");			}		}		//		// Utilities		//		private function sendEvent(eventName: String, eventMessage: String = ''): void {			ExternalInterface.call('(function(){window["__event__' +  _id + '"]("' + eventName + '", "' + eventMessage + '")})()', null);		}		private function log(): void {			if (ExternalInterface.available) {				ExternalInterface.call('console.log', arguments);			} else {				trace(arguments);			}		}		private function connectStream():void {			_stream = new NetStream(_connection);			// explicitly set the sound since it could have come before the connection was made			_soundTransform = new SoundTransform(_volume);			_stream.soundTransform = _soundTransform;			// set the buffer to ensure nice playback			_stream.inBufferSeek = true;			_stream.bufferTime = 1;			_stream.bufferTimeMax = 3;			_stream.addEventListener(NetStatusEvent.NET_STATUS, netStatusHandler); // same event as connection			_stream.addEventListener(AsyncErrorEvent.ASYNC_ERROR, asyncErrorHandler);			var customClient:Object = new Object();			customClient.onMetaData = metaDataHandler;			_stream.client = customClient;			_video.attachNetStream(_stream);			// start downloading without playing )based on preload and play() hasn't been called)			// I wish flash had a load() command to make this less awkward			if (_preload != "none" && !_playWhenConnected) {				_isPaused = true;				_isPreloading = true;				stream.bufferTime = 20;				_stream.play(getCurrentUrl(0), 0, 0);				_stream.pause();			}			_isConnected = true;			if (_playWhenConnected && !_hasStartedPlaying) {				fire_play();				_playWhenConnected = false;			}		}		private function parseRTMP(url:String):Object {			var match:Array = url.match(/(.*)\/((flv|mp4|mp3):.*)/);			var rtmpInfo:Object = {				server: null,				stream: null			};			if (match) {				rtmpInfo.server = match[1];				rtmpInfo.stream = match[2];			} else {				rtmpInfo.server = url.replace(/\/[^\/]+$/,"/");				rtmpInfo.stream = url.split("/").pop();			}			return rtmpInfo;		}		private function getUrlPosition(pos:Number):String {			var url:String = _currentUrl;			if (_pseudoStreamingEnabled) {				url += (url.indexOf('?') > -1) ? '&' : '?';				url += _pseudoStreamingStartQueryParam + '=';				url += ("byte" == _pseudoStreamingType) ? getBytePosition(pos).toString() : pos.toString();			}			return url;		}		private function findBytePosition(info:Object):void {			_pseudoStreamingBytePositions.splice(0);			var i:int;			if (info.keyframes) {				for (i=0; i<info.keyframes.times.length; i++) {					var seekpoint:Object = { time:Number, offset:Number };					seekpoint.time = info.keyframes.times[i];					seekpoint.offset = info.keyframes.filepositions[i];					_pseudoStreamingBytePositions.push(seekpoint);				}			}			if (info.seekpoints) {				for (i=0; i<info.seekpoints.length; i++) {					_pseudoStreamingBytePositions.push(info.seekpoints[i]);				}			}			_pseudoStreamingBytePositions.sortOn('time', Array.NUMERIC);		}		private function getBytePosition(time:Number):Number {			var i:int;			for (i=0; i<_pseudoStreamingBytePositions.length; i++) {				if (_pseudoStreamingBytePositions[i].time >= time && time <= _pseudoStreamingBytePositions[i + 1].time) {					return _pseudoStreamingBytePositions[i].offset;				}			}			return 0;		}	}}