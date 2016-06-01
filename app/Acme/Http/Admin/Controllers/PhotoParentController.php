<?php
namespace Admin\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Input;

use Model\PhotoParent\ModelName as PhotoParent;
use Model\PhotoChild\ModelName as PhotoChild;
use Intervention\Image\ImageManagerStatic as Image;

class PhotoParentController extends Controller
{
<<<<<<< HEAD
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
=======

>>>>>>> 9912446fe5daa1d87038e6c8810b71aa0e9850be
    public function index()
    {
        $photoParents = PhotoParent::orderBy('id','desc')->get();

        return view('Admin::photoParent.index', [
            'photoParents' => $photoParents,
        ]);
    }

<<<<<<< HEAD
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
//        dd($request->watermark);

        $photoParent = PhotoParent::create($request->except('images','q','status','watermark'));

        // getting all of the post data

        $files = Input::file('images');
=======
    public function create()
    {
        $channels = \Model\Channel\ModelName::take(8)->skip(1)->get();
        $channels = $channels->lists('display','id')->toArray();
        return view('Admin::photoParent.create', [
            'photoParent' => new PhotoParent,
            'channels' => $channels,
        ]);
    }

    public function store(Request $request)
    {

        $photoParent = PhotoParent::create($request->except('images','q','status'));

        $files = $request->images;
>>>>>>> 9912446fe5daa1d87038e6c8810b71aa0e9850be

        $result = array();

        $file_count = count($files);

<<<<<<< HEAD

=======
>>>>>>> 9912446fe5daa1d87038e6c8810b71aa0e9850be
        if($request->hasFile('status'))
        {
            $file = $request->file('status');
            $dir  = 'img/thumbnail';
            $btw = time();

            $name = $photoParent->id().$btw.'.'.$file->getClientOriginalExtension();
            $name2 = $photoParent->id().$btw.'_big.'.$file->getClientOriginalExtension();

            $storage = \Storage::disk('public');
            $storage->makeDirectory($dir);

<<<<<<< HEAD
            if($request->watermark == 1){
                if($request->extracolumn == 1){
                    Image::make($_FILES['status']['tmp_name'])->fit(250, 150)->insert('http://ktrk.kg/images/wm_ktrk.png', 'bottom-right', 10, 10)->save($dir.'/'.$name);
                    Image::make($_FILES['status']['tmp_name'])->fit(500, 300)->insert('http://ktrk.kg/images/wm_ktrk.png', 'bottom-right', 10, 10)->save($dir.'/'.$name2);
                }
                elseif($request->birinchi == 1){
                    Image::make($_FILES['status']['tmp_name'])->fit(250, 150)->insert('http://ktrk.kg/images/wm_1radio.png', 'bottom-right', 10, 10)->save($dir.'/'.$name);
                    Image::make($_FILES['status']['tmp_name'])->fit(500, 300)->insert('http://ktrk.kg/images/wm_1radio.png', 'bottom-right', 10, 10)->save($dir.'/'.$name2);
                }
                elseif($request->muzkanal == 1){
                    Image::make($_FILES['status']['tmp_name'])->fit(250, 150)->insert('http://ktrk.kg/images/wm_music.png', 'bottom-right', 10, 10)->save($dir.'/'.$name);
                    Image::make($_FILES['status']['tmp_name'])->fit(500, 300)->insert('http://ktrk.kg/images/wm_music.png', 'bottom-right', 10, 10)->save($dir.'/'.$name2);
                }
                elseif($request->balastan == 1){
                    Image::make($_FILES['status']['tmp_name'])->fit(250, 150)->insert('http://ktrk.kg/images/wm_balastan.png', 'bottom-right', 10, 10)->save($dir.'/'.$name);
                    Image::make($_FILES['status']['tmp_name'])->fit(500, 300)->insert('http://ktrk.kg/images/wm_balastan.png', 'bottom-right', 10, 10)->save($dir.'/'.$name2);
                } else {
                    Image::make($_FILES['status']['tmp_name'])->fit(250, 150)->save($dir.'/'.$name);
                    Image::make($_FILES['status']['tmp_name'])->fit(500, 300)->save($dir.'/'.$name2);
                }
            } else {
                if($request->extracolumn == 1){
                    Image::make($_FILES['status']['tmp_name'])->fit(250, 150)->save($dir.'/'.$name);
                    Image::make($_FILES['status']['tmp_name'])->fit(500, 300)->save($dir.'/'.$name2);
                }
                elseif($request->birinchi == 1){
                    Image::make($_FILES['status']['tmp_name'])->fit(250, 150)->save($dir.'/'.$name);
                    Image::make($_FILES['status']['tmp_name'])->fit(500, 300)->save($dir.'/'.$name2);
                }
                elseif($request->muzkanal == 1){
                    Image::make($_FILES['status']['tmp_name'])->fit(250, 150)->save($dir.'/'.$name);
                    Image::make($_FILES['status']['tmp_name'])->fit(500, 300)->save($dir.'/'.$name2);
                }
                elseif($request->balastan == 1){
                    Image::make($_FILES['status']['tmp_name'])->fit(250, 150)->save($dir.'/'.$name);
                    Image::make($_FILES['status']['tmp_name'])->fit(500, 300)->save($dir.'/'.$name2);
                } else {
                    Image::make($_FILES['status']['tmp_name'])->fit(250, 150)->save($dir.'/'.$name);
                    Image::make($_FILES['status']['tmp_name'])->fit(500, 300)->save($dir.'/'.$name2);
                }
            }



=======
            if($request->watermark == 2){
                Image::make($_FILES['status']['tmp_name'])->fit(250, 150)->insert('http://ktrk.kg/images/wm_ktrk.png', 'bottom-right', 10, 10)->save($dir.'/'.$name);
                Image::make($_FILES['status']['tmp_name'])->fit(500, 300)->insert('http://ktrk.kg/images/wm_ktrk.png', 'bottom-right', 10, 10)->save($dir.'/'.$name2);
            } elseif($request->watermark == 3){
                Image::make($_FILES['status']['tmp_name'])->fit(250, 150)->insert('http://ktrk.kg/images/wm_music.png', 'bottom-right', 10, 10)->save($dir.'/'.$name);
                Image::make($_FILES['status']['tmp_name'])->fit(500, 300)->insert('http://ktrk.kg/images/wm_music.png', 'bottom-right', 10, 10)->save($dir.'/'.$name2);
            } elseif($request->watermark == 4){
                Image::make($_FILES['status']['tmp_name'])->fit(250, 150)->insert('http://ktrk.kg/images/wm_balastan.png', 'bottom-right', 10, 10)->save($dir.'/'.$name);
                Image::make($_FILES['status']['tmp_name'])->fit(500, 300)->insert('http://ktrk.kg/images/wm_balastan.png', 'bottom-right', 10, 10)->save($dir.'/'.$name2);
            } elseif($request->watermark == 7){
                Image::make($_FILES['status']['tmp_name'])->fit(250, 150)->insert('http://ktrk.kg/images/wm_1radio.png', 'bottom-right', 10, 10)->save($dir.'/'.$name);
                Image::make($_FILES['status']['tmp_name'])->fit(500, 300)->insert('http://ktrk.kg/images/wm_1radio.png', 'bottom-right', 10, 10)->save($dir.'/'.$name2);
            } else{
                Image::make($_FILES['status']['tmp_name'])->fit(250, 150)->save($dir.'/'.$name);
                Image::make($_FILES['status']['tmp_name'])->fit(500, 300)->save($dir.'/'.$name2);
            }

>>>>>>> 9912446fe5daa1d87038e6c8810b71aa0e9850be
            $photoParent->status = $dir.'/'.$name;
            $photoParent->thumbnail_big = $dir.'/'.$name2;
            $photoParent->save();
        }

        $uploadcount = 0;

<<<<<<< HEAD
//        if($request->input('images'))
//        {
=======
        if($files){
>>>>>>> 9912446fe5daa1d87038e6c8810b71aa0e9850be
            foreach($files as $key=>$file) {

                $storage = \Storage::disk('public');
                $destinationPath = 'froala/uploads';
                $storage->makeDirectory($destinationPath);

<<<<<<< HEAD
                $filename = time().$key.'.'.$file->getClientOriginalExtension();

                if($request->watermark == 1){
                    if($request->extracolumn == 1)
                        Image::make($_FILES['images']['tmp_name'][$key])->heighten(600)->insert('http://ktrk.kg/images/wm_ktrk.png', 'bottom-right', 0, 0)->save($destinationPath.'/'.$filename);
                    elseif($request->birinchi == 1)
                        Image::make($_FILES['images']['tmp_name'][$key])->heighten(600)->insert('http://ktrk.kg/images/wm_1radio.png', 'bottom-right', 10, 10)->save($destinationPath.'/'.$filename);
                    elseif($request->muzkanal == 1)
                        Image::make($_FILES['images']['tmp_name'][$key])->heighten(600)->insert('http://ktrk.kg/images/wm_music.png', 'bottom-right', 10, 10)->save($destinationPath.'/'.$filename);
                    elseif($request->balastan == 1)
                        Image::make($_FILES['images']['tmp_name'][$key])->heighten(600)->insert('http://ktrk.kg/images/wm_balastan.png', 'bottom-right', 10, 10)->save($destinationPath.'/'.$filename);
                    else
                        Image::make($_FILES['images']['tmp_name'][$key])->heighten(600)->save($destinationPath.'/'.$filename);
                } else {
                    if($request->extracolumn == 1)
                        Image::make($_FILES['images']['tmp_name'][$key])->heighten(600)->save($destinationPath.'/'.$filename);
                    elseif($request->birinchi == 1)
                        Image::make($_FILES['images']['tmp_name'][$key])->heighten(600)->save($destinationPath.'/'.$filename);
                    elseif($request->muzkanal == 1)
                        Image::make($_FILES['images']['tmp_name'][$key])->heighten(600)->save($destinationPath.'/'.$filename);
                    elseif($request->balastan == 1)
                        Image::make($_FILES['images']['tmp_name'][$key])->heighten(600)->save($destinationPath.'/'.$filename);
                    else
                        Image::make($_FILES['images']['tmp_name'][$key])->heighten(600)->save($destinationPath.'/'.$filename);
                }



                $file_array = array();
                $file_array = array_collapse([$file_array, [
                    'id' => $key+1,
                    'name' => $filename
=======
                $file_array = array();
                $file_array = array_collapse([$file_array, [
                    'id' => $key+1,
                    'name' => $file
>>>>>>> 9912446fe5daa1d87038e6c8810b71aa0e9850be
                ]]);

                $result = array_add($result, $key , $file_array);

                $jsonresult = json_encode($result);

                PhotoChild::create([
<<<<<<< HEAD
                    'file'=> $destinationPath.'/'.$filename,
=======
                    'file'=> $destinationPath.'/'.$file,
>>>>>>> 9912446fe5daa1d87038e6c8810b71aa0e9850be
                    'parentId' => $photoParent->id
                ]);

                $photoParent->images = $jsonresult;
                $photoParent->save();

                $uploadcount ++;
            }
<<<<<<< HEAD
//        }
=======
        }
>>>>>>> 9912446fe5daa1d87038e6c8810b71aa0e9850be

        return redirect()->route('admin.photoParent.index');
    }

<<<<<<< HEAD
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
=======
>>>>>>> 9912446fe5daa1d87038e6c8810b71aa0e9850be
    public function show(PhotoParent $photoParent)
    {
        $images = json_decode($photoParent->images);
        $photoChildren = PhotoChild::where('parentId','=',$photoParent->id)->get();

        return view('Admin::photoParent.show', [
            'photoParent' => $photoParent,
            'images' => $images,
            'photoChildren' => $photoChildren,
        ]);
    }

<<<<<<< HEAD
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
        $photoParent->update($request->except('images','q','status','watermark'));

//        dd($request->images);

//        dd($_FILES["images"]);

        if($request->hasFile('images')){
            $files = Input::file('images');
=======
    public function edit(PhotoParent $photoParent)
    {
        $channels = \Model\Channel\ModelName::take(8)->skip(1)->get();
        $channels = $channels->lists('display','id')->toArray();
        return view('Admin::photoParent.edit', [
            'photoParent' => $photoParent,
            'channels' => $channels
            ]);
    }

    public function update(Request $request, PhotoParent $photoParent)
    {
        $photoParent->update($request->except('images','q','status'));

        $files = $request->images;

        if($files){
>>>>>>> 9912446fe5daa1d87038e6c8810b71aa0e9850be

            $result = array();

            $uploadcount = 0;

            foreach($files as $key=>$file) {
<<<<<<< HEAD
//            if($key > 1)
//            {
                $storage = \Storage::disk('public');
                $destinationPath = 'froala/uploads';
                $storage->makeDirectory($destinationPath);
                $filename = time().$key.'.'.$file->getClientOriginalExtension();

                if($request->watermark == 1){
                    if($request->extracolumn == 1)
                        Image::make($_FILES['images']['tmp_name'][$key])->heighten(600)->insert('http://ktrk.kg/images/wm_ktrk.png', 'bottom-right', 0, 0)->save($destinationPath.'/'.$filename);
                    elseif($request->birinchi == 1)
                        Image::make($_FILES['images']['tmp_name'][$key])->heighten(600)->insert('http://ktrk.kg/images/wm_1radio.png', 'bottom-right', 10, 10)->save($destinationPath.'/'.$filename);
                    elseif($request->muzkanal == 1)
                        Image::make($_FILES['images']['tmp_name'][$key])->heighten(600)->insert('http://ktrk.kg/images/wm_music.png', 'bottom-right', 10, 10)->save($destinationPath.'/'.$filename);
                    elseif($request->balastan == 1)
                        Image::make($_FILES['images']['tmp_name'][$key])->heighten(600)->insert('http://ktrk.kg/images/wm_balastan.png', 'bottom-right', 10, 10)->save($destinationPath.'/'.$filename);
                    else
                        Image::make($_FILES['images']['tmp_name'][$key])->heighten(600)->save($destinationPath.'/'.$filename);
                } else {
                    if($request->extracolumn == 1)
                        Image::make($_FILES['images']['tmp_name'][$key])->heighten(600)->save($destinationPath.'/'.$filename);
                    elseif($request->birinchi == 1)
                        Image::make($_FILES['images']['tmp_name'][$key])->heighten(600)->save($destinationPath.'/'.$filename);
                    elseif($request->muzkanal == 1)
                        Image::make($_FILES['images']['tmp_name'][$key])->heighten(600)->save($destinationPath.'/'.$filename);
                    elseif($request->balastan == 1)
                        Image::make($_FILES['images']['tmp_name'][$key])->heighten(600)->save($destinationPath.'/'.$filename);
                    else
                        Image::make($_FILES['images']['tmp_name'][$key])->heighten(600)->save($destinationPath.'/'.$filename);
                }
=======

                $storage = \Storage::disk('public');
                $destinationPath = 'froala/uploads';
                $storage->makeDirectory($destinationPath);
>>>>>>> 9912446fe5daa1d87038e6c8810b71aa0e9850be

                $file_array = array();
                $file_array = array_collapse([$file_array, [
                    'id' => $key+1,
<<<<<<< HEAD
                    'name' => $filename
                ]]);
                $result = array_add($result, $key , $file_array);
                $jsonresult = json_encode($result);

                PhotoChild::create([
                    'file'=> $destinationPath.'/'.$filename,
=======
                    'name' => $file
                ]]);

                $result = array_add($result, $key , $file_array);

                $jsonresult = json_encode($result);

                PhotoChild::create([
                    'file'=> $destinationPath.'/'.$file,
>>>>>>> 9912446fe5daa1d87038e6c8810b71aa0e9850be
                    'parentId' => $photoParent->id
                ]);

                $photoParent->images = $jsonresult;
                $photoParent->save();

                $uploadcount ++;
<<<<<<< HEAD
//            } // end if

            }
        }


=======

            }
            
        }

>>>>>>> 9912446fe5daa1d87038e6c8810b71aa0e9850be
        if($request->hasFile('status'))
        {
            $file = $request->file('status');
            $dir  = 'img/thumbnail';
            $btw = time();

            $name = $photoParent->id().$btw.'.'.$file->getClientOriginalExtension();
            $name2 = $photoParent->id().$btw.'_big.'.$file->getClientOriginalExtension();

            $storage = \Storage::disk('public');
            $storage->makeDirectory($dir);

<<<<<<< HEAD
            if($request->watermark == 1){
                if($request->extracolumn == 1){
                    Image::make($_FILES['status']['tmp_name'])->fit(250, 150)->insert('http://ktrk.kg/images/wm_ktrk.png', 'bottom-right', 10, 10)->save($dir.'/'.$name);
                    Image::make($_FILES['status']['tmp_name'])->fit(500, 300)->insert('http://ktrk.kg/images/wm_ktrk.png', 'bottom-right', 10, 10)->save($dir.'/'.$name2);
                }
                elseif($request->birinchi == 1){
                    Image::make($_FILES['status']['tmp_name'])->fit(250, 150)->insert('http://ktrk.kg/images/wm_1radio.png', 'bottom-right', 10, 10)->save($dir.'/'.$name);
                    Image::make($_FILES['status']['tmp_name'])->fit(500, 300)->insert('http://ktrk.kg/images/wm_1radio.png', 'bottom-right', 10, 10)->save($dir.'/'.$name2);
                }
                elseif($request->muzkanal == 1){
                    Image::make($_FILES['status']['tmp_name'])->fit(250, 150)->insert('http://ktrk.kg/images/wm_music.png', 'bottom-right', 10, 10)->save($dir.'/'.$name);
                    Image::make($_FILES['status']['tmp_name'])->fit(500, 300)->insert('http://ktrk.kg/images/wm_music.png', 'bottom-right', 10, 10)->save($dir.'/'.$name2);
                }
                elseif($request->balastan == 1){
                    Image::make($_FILES['status']['tmp_name'])->fit(250, 150)->insert('http://ktrk.kg/images/wm_balastan.png', 'bottom-right', 10, 10)->save($dir.'/'.$name);
                    Image::make($_FILES['status']['tmp_name'])->fit(500, 300)->insert('http://ktrk.kg/images/wm_balastan.png', 'bottom-right', 10, 10)->save($dir.'/'.$name2);
                } else {
                    Image::make($_FILES['status']['tmp_name'])->fit(250, 150)->save($dir.'/'.$name);
                    Image::make($_FILES['status']['tmp_name'])->fit(500, 300)->save($dir.'/'.$name2);
                }
            } else {
                if($request->extracolumn == 1){
                    Image::make($_FILES['status']['tmp_name'])->fit(250, 150)->save($dir.'/'.$name);
                    Image::make($_FILES['status']['tmp_name'])->fit(500, 300)->save($dir.'/'.$name2);
                }
                elseif($request->birinchi == 1){
                    Image::make($_FILES['status']['tmp_name'])->fit(250, 150)->save($dir.'/'.$name);
                    Image::make($_FILES['status']['tmp_name'])->fit(500, 300)->save($dir.'/'.$name2);
                }
                elseif($request->muzkanal == 1){
                    Image::make($_FILES['status']['tmp_name'])->fit(250, 150)->save($dir.'/'.$name);
                    Image::make($_FILES['status']['tmp_name'])->fit(500, 300)->save($dir.'/'.$name2);
                }
                elseif($request->balastan == 1){
                    Image::make($_FILES['status']['tmp_name'])->fit(250, 150)->save($dir.'/'.$name);
                    Image::make($_FILES['status']['tmp_name'])->fit(500, 300)->save($dir.'/'.$name2);
                } else {
                    Image::make($_FILES['status']['tmp_name'])->fit(250, 150)->save($dir.'/'.$name);
                    Image::make($_FILES['status']['tmp_name'])->fit(500, 300)->save($dir.'/'.$name2);
                }
=======
            if($request->watermark == 2){
                Image::make($_FILES['status']['tmp_name'])->fit(250, 150)->insert('http://ktrk.kg/images/wm_ktrk.png', 'bottom-right', 10, 10)->save($dir.'/'.$name);
                Image::make($_FILES['status']['tmp_name'])->fit(500, 300)->insert('http://ktrk.kg/images/wm_ktrk.png', 'bottom-right', 10, 10)->save($dir.'/'.$name2);
            } elseif($request->watermark == 3){
                Image::make($_FILES['status']['tmp_name'])->fit(250, 150)->insert('http://ktrk.kg/images/wm_music.png', 'bottom-right', 10, 10)->save($dir.'/'.$name);
                Image::make($_FILES['status']['tmp_name'])->fit(500, 300)->insert('http://ktrk.kg/images/wm_music.png', 'bottom-right', 10, 10)->save($dir.'/'.$name2);
            } elseif($request->watermark == 4){
                Image::make($_FILES['status']['tmp_name'])->fit(250, 150)->insert('http://ktrk.kg/images/wm_balastan.png', 'bottom-right', 10, 10)->save($dir.'/'.$name);
                Image::make($_FILES['status']['tmp_name'])->fit(500, 300)->insert('http://ktrk.kg/images/wm_balastan.png', 'bottom-right', 10, 10)->save($dir.'/'.$name2);
            } elseif($request->watermark == 7){
                Image::make($_FILES['status']['tmp_name'])->fit(250, 150)->insert('http://ktrk.kg/images/wm_1radio.png', 'bottom-right', 10, 10)->save($dir.'/'.$name);
                Image::make($_FILES['status']['tmp_name'])->fit(500, 300)->insert('http://ktrk.kg/images/wm_1radio.png', 'bottom-right', 10, 10)->save($dir.'/'.$name2);
            } else{
                Image::make($_FILES['status']['tmp_name'])->fit(250, 150)->save($dir.'/'.$name);
                Image::make($_FILES['status']['tmp_name'])->fit(500, 300)->save($dir.'/'.$name2);
>>>>>>> 9912446fe5daa1d87038e6c8810b71aa0e9850be
            }

            $photoParent->status = $dir.'/'.$name;
            $photoParent->thumbnail_big = $dir.'/'.$name2;
            $photoParent->save();
        }

<<<<<<< HEAD
        // start count how many uploaded

        return redirect()->route('admin.photoParent.show', $photoParent);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
=======
        return redirect()->route('admin.photoParent.show', $photoParent);
    }

>>>>>>> 9912446fe5daa1d87038e6c8810b71aa0e9850be
    public function destroy(PhotoParent $photoParent)
    {
        $photoParent->delete();

        return redirect()->route('admin.photoParent.index');
    }

    public function photodelete(Request $request)
    {
        $photoDeleteId = $request->photoDeleteId;

        $photoParentId = $request->photoParentId;
        $photoParent = \Model\PhotoParent\ModelName::where('id','=',$photoParentId)->first();

        $files = json_decode($photoParent->images, true);

        $file = $files[$photoDeleteId-1];

        $name = $file['name'];

        $key = array_has($files, $photoDeleteId);

        if($key !== false) {
<<<<<<< HEAD
            $storage = \Storage::delete('/froala/uploads/'.$name);
=======
            $storage = \Storage::delete('/img/gallery/'.$name);
>>>>>>> 9912446fe5daa1d87038e6c8810b71aa0e9850be
        }

        unset($files[$photoDeleteId-1]);

        $jsonFiles = json_encode($files);

        $photoParent->images = $jsonFiles;

        $photoParent->save();

        return redirect()->route('admin.photoParent.show', $photoParent);
    }

<<<<<<< HEAD
    // Day video first
=======
>>>>>>> 9912446fe5daa1d87038e6c8810b71aa0e9850be
    public function publish(Request $request)
    {
        $id =$request->photoParentId;
        $photoParent = \Model\PhotoParent\ModelName::where('id','=', $id)->first();
        $photoParent->published = 1;
        $photoParent->save();
        return redirect()->route('admin.photoParent.index');
    }

    public function unpublish(Request $request)
    {
        $id =$request->photoParentId;
        $photoParent = \Model\PhotoParent\ModelName::where('id','=', $id)->first();
        $photoParent->published = 0;
        $photoParent->save();
        return redirect()->route('admin.photoParent.index');
    }

<<<<<<< HEAD
//    Destroy Child
=======
>>>>>>> 9912446fe5daa1d87038e6c8810b71aa0e9850be
    public function destroyChild(Request $request)
    {
        $photoDeleteId = $request->photoDeleteId;
        $photoChild = \Model\PhotoChild\ModelName::where('id','=',$photoDeleteId)->first();

        $photoParentId = $request->photoParentId;
        $photoChild->delete();
        $photoParent = \Model\PhotoParent\ModelName::where('id','=',$photoParentId)->first();

        return redirect()->route('admin.photoParent.show', $photoParent);
    }

}
