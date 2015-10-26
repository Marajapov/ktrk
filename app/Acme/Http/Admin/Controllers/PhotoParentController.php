<?php
namespace Admin\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Model\PhotoParent\ModelName as PhotoParent;

class PhotoParentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photoParents = PhotoParent::all();

        return view('Admin::photoParent.index', [
            'photoParents' => $photoParents,
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin::photoParent.create', ['photoParent' => new PhotoParent]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $photoParent = PhotoParent::create($request->except('file'));

        if($request->hasFile('file'))
        {
            $file = $request->file('file');
            $dir  = 'img/photoParent';
            $name = $photoParent->id().'.'.$file->getClientOriginalExtension();

            $storage = \Storage::disk('public');
            $storage->makeDirectory($dir);
            // $storage->put($dir.'/'.$name, $file);

            $photoParent->file = $dir.'/'.$name;
            $photoParent->save();
            $file->move($dir, $name);
        }

        return redirect()->route('admin.photoParent.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(PhotoParent $photoParent)
    {
        return view('Admin::photoParent.show', [
            'photoParent' => $photoParent,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(PhotoParent $photoParent)
    {
        return view('Admin::photoParent.edit', ['photoParent' => $photoParent]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PhotoParent $photoParent)
    {
        $photoParent->update($request->except('file'));

        if($request->hasFile('file'))
        {
            $file = $request->file('file');
            $dir  = 'img/photoParent';
            $name = $photoParent->id().'.'.$file->getClientOriginalExtension();

            $storage = \Storage::disk('public');
            $storage->makeDirectory($dir);

            $photoParent->file = $dir.'/'.$name;
            $photoParent->save();
            $file->move($dir, $name);
        }

        return redirect()->route('admin.photoParent.show', $photoParent);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PhotoParent $photoParent)
    {
        $photoParent->delete();

        return redirect()->route('admin.photoParent.index');
    }
}
