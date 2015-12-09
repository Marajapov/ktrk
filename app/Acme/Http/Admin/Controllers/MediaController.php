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

    public function dayVideo(Request $request)
    {
        $mediaStars = \Model\Media\ModelName::where('dayVideo','=','1')->get();
        foreach($mediaStars as $mediaStar)
        {
            $mediaStar->dayVideo = 0;
            $mediaStar->status = 1;
            $mediaStar->save();
        }

        $media = \Model\Media\ModelName::where('id','=',$request->media)->first();
        $media->dayVideo = 1;

        $media->save();

        return redirect()->route('admin.media.index');
    }

    public function destroy(Media $media)
    {
        $media->delete();

        return redirect()->route('admin.media.index');
    }
}
