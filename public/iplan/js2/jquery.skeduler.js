(function ( $ ) {

  $.fn.skeduler = function( options ) {
    settings = $.extend(defaultSettings, options);

    if (settings.debug) {
      console.time('skeduler');
    }

    var skedulerEl = $(this);

    skedulerEl.empty();
    skedulerEl.addClass(settings.containerCssClass);
	
    var div = $('<div></div>');
	
    var headerContainer = div.clone().addClass(settings.headerContainerCssClass);
    settings.headers.forEach(function(element) {
      div.clone().text(element).appendTo(headerContainer);
    }, this);
    skedulerEl.append(headerContainer);

    var scheduleEl = div.clone().addClass(settings.schedulerContainerCssClass);
    var scheduleTimelineEl = div.clone().addClass(settings.schedulerContainerCssClass + '-timeline');
    var scheduleBodyEl = div.clone().addClass(settings.schedulerContainerCssClass + '-body');
    var gridColumnElement = div.clone();
	gridColumnElement.prop('class', 'droppable');
	
    for (var i = calendar_startHour, x=calendar_startHour; x < calendar_endHour; x++) {
		i = x % 24;
		div.clone()
			.text(toTimeString(i))
			.appendTo(scheduleTimelineEl);

		gridColumnElement.append(div.clone().addClass(settings.cellCssClass));
    }
	
    for (var j = 0; j < settings.headers.length; j++) {
      var el = gridColumnElement.clone();
      
      var placeholder = div.clone().addClass(settings.taskPlaceholderCssClass);
	  placeholder.prop('id', 'colum_place_holder'+j);
      el.prepend(placeholder);
	  
      el.appendTo(scheduleBodyEl);
    }
	
    scheduleEl.append(scheduleTimelineEl);
    scheduleEl.append(scheduleBodyEl);
    skedulerEl.append(scheduleEl);

    if (settings.debug) {
      console.timeEnd('skeduler');
    }

    return skedulerEl;
  }; 
	
  
}( jQuery ));