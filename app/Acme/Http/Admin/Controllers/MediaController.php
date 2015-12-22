<?php
namespace Admin\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Model\Media\ModelName as Media;
use Intervention\Image\ImageManagerStatic as Image;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medias = Media::orderby('id','desc')->get();

        return view('Admin::media.index', ['medias' => $medias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projectList = \Model\Project\ModelName::lists('name', 'id')->toArray();

        return view('Admin::media.create', [
            'media' => new Media,
            'projectList' => $projectList,
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $media = Media::create($request->except('q', 'thumbnail'));


        if($request->hasFile('thumbnail'))
        {
            $file = $request->file('thumbnail');
            $dir  = 'img/thumbnail';
            $btw = time();

            $name = $media->id().$btw.'.'.$file->getClientOriginalExtension();

//            $manager = new ImageManager(array('driver' => 'imagick'));

            $storage = \Storage::disk('public');
            $storage->makeDirectory($dir);

            Image::make($_FILES['thumbnail']['tmp_name'])->fit(250, 150)->save($dir.'/'.$name);

            $media->thumbnail = $dir.'/'.$name;
            $media->save();
        }

        return redirect()->route('admin.media.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Media $media)
    {
        if($media->videoType)
        {
            $mediaCategory = \Model\MediaCategory\ModelName::where('videoType','=',$media->videoType)->first();
        }
        else
        {
            $mediaCategory = '';
        }

        if($media->program)
        {
            $project = \Model\Project\ModelName::where('id','=',$media->program)->first();
        }
        else
        {
            $project = '';
        }

        return view('Admin::media.show', [
            'media' => $media,
            'mediaCategory' => $mediaCategory,
            'project' => $project,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Media $media)
    {
        $projectList = \Model\Project\ModelName::lists('name', 'id')->toArray();

        return view('Admin::media.edit', [
            'media' => $media,
            'projectList' => $projectList,
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Media $media)
    {
        $media->update($request->except('q', 'thumbnail'));

        if($request->hasFile('thumbnail'))
        {
            $file = $request->file('thumbnail');
            $dir  = 'img/thumbnail';
            $btw = time();

            $name = $media->id().$btw.'.'.$file->getClientOriginalExtension();

            Image::make($_FILES['thumbnail']['tmp_name'])->fit(250, 150)->save($dir.'/'.$name);

            $storage = \Storage::disk('public');
            $storage->makeDirectory($dir);

            $media->thumbnail = $dir.'/'.$name;
            $media->save();
        }

        return redirect()->route('admin.media.show', $media);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy(Media $media)
    {
        $media->delete();

        return redirect()->route('admin.media.index');
    }

    // video1
    public function dayVideo1(Request $request)
    {
        $id = $request->media;
        $mediaStars = \Model\Media\ModelName::where('dayVideo','=','1')->get();
        foreach($mediaStars as $mediaStar)
        {
            $mediaStar->dayVideo = 0;
            $mediaStar->save();
        }

        $row = \Model\Media\ModelName::where('id','=',$id)->first();
        $row->dayVideo = 1;
        $row->save();
        return redirect()->route('admin.media.index');
    }

    // video2
    public function dayVideo2(Request $request)
    {
        $id = $request->media;
        $mediaStars = \Model\Media\ModelName::where('dayVideo','=','2')->get();
        foreach($mediaStars as $mediaStar)
        {
            $mediaStar->dayVideo = 0;
            $mediaStar->save();
        }

        $row = \Model\Media\ModelName::where('id','=',$id)->first();
        $row->dayVideo = 2;
        $row->save();
        return redirect()->route('admin.media.index');
    }

    // video3
    public function dayVideo3(Request $request)
    {
        $id = $request->media;
        $mediaStars = \Model\Media\ModelName::where('dayVideo','=','3')->get();
        foreach($mediaStars as $mediaStar)
        {
            $mediaStar->dayVideo = 0;
            $mediaStar->save();
        }

        $row = \Model\Media\ModelName::where('id','=',$id)->first();
        $row->dayVideo = 3;
        $row->save();
        
        return redirect()->route('admin.media.index');
    }

    // video4
    public function dayVideo4(Request $request)
    {
        $id = $request->media;
        $mediaStars = \Model\Media\ModelName::where('dayVideo','=','4')->get();
        foreach($mediaStars as $mediaStar)
        {
            $mediaStar->dayVideo = 0;
            $mediaStar->save();
        }

        $row = \Model\Media\ModelName::where('id','=',$id)->first();
        $row->dayVideo = 4;
        $row->save();
        
        return redirect()->route('admin.media.index');
    }
}
