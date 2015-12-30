<?php
namespace Admin\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Model\PhotoChild\ModelName as PhotoChild;

class PhotoChildController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photoChilds = PhotoChild::all();


        return view('Admin::photoChild.index', [
            'photoChilds' => $photoChilds,
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = \Model\Tag\Tag::lists('name', 'id');
        $PhotoParentList = \Model\PhotoParent\ModelName::lists('name', 'id')->toArray();

        return view('Admin::photoChild.create', [
            'PhotoParentList' => $PhotoParentList,
            'photoChild' => new PhotoChild,
            'tags' => $tags,
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
        $photoChild = PhotoChild::create($request->except('file','q'));

        if($request->hasFile('file'))
        {
            $file = $request->file('file');
            $time = time();
            $dir  = 'froala/uploads';
            $name = $photoChild->id().$time.'.'.$file->getClientOriginalExtension();

            $storage = \Storage::disk('public');
            $storage->makeDirectory($dir);
            // $storage->put($dir.'/'.$name, $file);

            $photoChild->file = $dir.'/'.$name;
            $photoChild->save();
            $file->move($dir, $name);
        }

        return redirect()->route('admin.photoChild.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(PhotoChild $photoChild)
    {
        $PhotoParentList = \Model\PhotoParent\ModelName::lists('name', 'id')->toArray();
        return view('Admin::photoChild.show', [
            'PhotoParentList' => $PhotoParentList,
            'photoChild' => $photoChild,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(PhotoChild $photoChild)
    {
        $PhotoParentList = \Model\PhotoParent\ModelName::lists('name', 'id')->toArray();
        return view(
            'Admin::photoChild.edit', ['photoChild' => $photoChild,
            'PhotoParentList' => $PhotoParentList,
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PhotoChild $photoChild)
    {
        $photoChild->update($request->except('file','q'));

        if($request->hasFile('file'))
        {
            $file = $request->file('file');
            $time = time();
            $dir  = 'froala/uploads';
            $name = $photoChild->id().$time.'.'.$file->getClientOriginalExtension();

            $storage = \Storage::disk('public');
            $storage->makeDirectory($dir);

            $photoChild->file = $dir.'/'.$name;
            $photoChild->save();
            $file->move($dir, $name);
        }

        return redirect()->route('admin.photoChild.show', $photoChild);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PhotoChild $photoChild)
    {
        $photoChild->delete();

        return redirect()->route('admin.photoChild.index');
    }
}
