<?php
namespace Admin\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Model\Media\ModelName as Media;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medias = Media::get();

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

        Media::create($request->except('q'));

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

        return view('Admin::media.show', ['media' => $media]);
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
        $media->update($request->except('q'));

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

    // video5
    public function dayVideo5(Request $request)
    {
        $id = $request->media;
        $mediaStars = \Model\Media\ModelName::where('dayVideo','=','5')->get();
        foreach($mediaStars as $mediaStar)
        {
            $mediaStar->dayVideo = 0;
            $mediaStar->save();
        }

        $row = \Model\Media\ModelName::where('id','=',$id)->first();
        $row->dayVideo = 5;
        $row->save();
        
        return redirect()->route('admin.media.index');
    }
}
