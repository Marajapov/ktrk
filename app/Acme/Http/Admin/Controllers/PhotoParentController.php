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
    public function index()
    {
        $photoParents = PhotoParent::orderBy('id','desc')->get();

        return view('Admin::photoParent.index', [
            'photoParents' => $photoParents,
        ]);
    }


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

        $result = array();

        $file_count = count($files);


        if($request->hasFile('status'))
        {
            $file = $request->file('status');
            $dir  = 'img/thumbnail';
            $btw = time();

            $name = $photoParent->id().$btw.'.'.$file->getClientOriginalExtension();
            $name2 = $photoParent->id().$btw.'_big.'.$file->getClientOriginalExtension();

            $storage = \Storage::disk('public');
            $storage->makeDirectory($dir);


            if($request->watermark == 2){
                Image::make($_FILES['status']['tmp_name'])->fit(250, 150)->insert('http://ktrk.kg/images/wm_ktrk.png', 'bottom', 0, 0)->save($dir.'/'.$name);
                Image::make($_FILES['status']['tmp_name'])->fit(500, 300)->insert('http://ktrk.kg/images/wm_ktrk.png', 'bottom', 0, 0)->save($dir.'/'.$name2);
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

            $photoParent->status = $dir.'/'.$name;
            $photoParent->thumbnail_big = $dir.'/'.$name2;
            $photoParent->save();
        }

        $uploadcount = 0;


        if($files){

            foreach($files as $key=>$file) {

                $storage = \Storage::disk('public');
                $destinationPath = 'froala/uploads';
                $storage->makeDirectory($destinationPath);


                $file_array = array();
                $file_array = array_collapse([$file_array, [
                    'id' => $key+1,
                    'name' => $file

                ]]);

                $result = array_add($result, $key , $file_array);

                $jsonresult = json_encode($result);

                PhotoChild::create([

                    'file'=> $destinationPath.'/'.$file,
                    'parentId' => $photoParent->id
                ]);

                $photoParent->images = $jsonresult;
                $photoParent->save();

                $uploadcount ++;
            }

        }

        return redirect()->route('admin.photoParent.index');
    }


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

            $result = array();

            $uploadcount = 0;

            foreach($files as $key=>$file) {


                $storage = \Storage::disk('public');
                $destinationPath = 'froala/uploads';
                $storage->makeDirectory($destinationPath);

                $file_array = array();
                $file_array = array_collapse([$file_array, [
                    'id' => $key+1,
                    'name' => $file
                ]]);

                $result = array_add($result, $key , $file_array);

                $jsonresult = json_encode($result);

                PhotoChild::create([
                    'file'=> $destinationPath.'/'.$file,
                    'parentId' => $photoParent->id
                ]);

                $photoParent->images = $jsonresult;
                $photoParent->save();

                $uploadcount ++;

            }
            
        }

        if($request->hasFile('status'))
        {
            $file = $request->file('status');
            $dir  = 'img/thumbnail';
            $btw = time();

            $name = $photoParent->id().$btw.'.'.$file->getClientOriginalExtension();
            $name2 = $photoParent->id().$btw.'_big.'.$file->getClientOriginalExtension();

            $storage = \Storage::disk('public');
            $storage->makeDirectory($dir);


            if($request->watermark == 2){
                Image::make($_FILES['status']['tmp_name'])->fit(250, 150)->insert('http://ktrk.kg/images/wm_ktrk.png', 'bottom', 0, 0)->save($dir.'/'.$name);
                Image::make($_FILES['status']['tmp_name'])->fit(500, 300)->insert('http://ktrk.kg/images/wm_ktrk.png', 'bottom', 0, 0)->save($dir.'/'.$name2);
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

            $photoParent->status = $dir.'/'.$name;
            $photoParent->thumbnail_big = $dir.'/'.$name2;
            $photoParent->save();
        }

        return redirect()->route('admin.photoParent.show', $photoParent);
    }

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

        $dir  = 'froala/uploads/';
        $storage = \Storage::disk('public');
        $storage->makeDirectory($dir);

        if($key !== false) {

            $storage = \Storage::delete($dir.$name);
        }

        unset($files[$photoDeleteId-1]);

        $jsonFiles = json_encode($files);

        $photoParent->images = $jsonFiles;

        $photoParent->save();

        return redirect()->route('admin.photoParent.show', $photoParent);
    }

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

    public function destroyChild(Request $request)
    {
        $photoDeleteId = $request->photoDeleteId;
        $photoChild = \Model\PhotoChild\ModelName::where('id','=',$photoDeleteId)->first();

        $photoParentId = $request->photoParentId;
        $photoChild->delete();
        $photoParent = \Model\PhotoParent\ModelName::where('id','=',$photoParentId)->first();

        return redirect()->route('admin.photoParent.show', $photoParent);
    }

    public function addImages(Request $request, PhotoParent $photoParent)
    {
        $files = $request->file('images');

        if($files){

            $images = json_decode($photoParent->images);
            $count = count($images);

            $uploadcount = 0;

            foreach($files as $key=>$file) {

                $storage = \Storage::disk('public');
                $destinationPath = 'froala/uploads';
                $storage->makeDirectory($destinationPath);

                $extension = $file->getClientOriginalExtension();
                $time = time();
                $name = rand(11111, 99999).$time.'.'.$extension;

                if($photoParent->watermark == 2){
                    Image::make($file)->heighten(600)->insert('http://ktrk.kg/images/wm_ktrk.png', 'bottom', 0, 0)->save($destinationPath.'/'.$name);
                } elseif($photoParent->watermark == 3){
                    Image::make($file)->heighten(600)->insert('http://ktrk.kg/images/wm_music.png', 'bottom-right', 10, 10)->save($destinationPath.'/'.$name);
                } elseif($photoParent->watermark == 4){
                    Image::make($file)->heighten(600)->insert('http://ktrk.kg/images/wm_balastan.png', 'bottom-right', 10, 10)->save($destinationPath.'/'.$name);
                } elseif($photoParent->watermark == 7){
                    Image::make($file)->heighten(600)->insert('http://ktrk.kg/images/wm_1radio.png', 'bottom-right', 10, 10)->save($destinationPath.'/'.$name);
                } else{
                    Image::make($file)->heighten(600)->save($destinationPath.'/'.$name);
                }

                $file_array = array();
                $file_array = array_collapse([$file_array, [
                    'id' => $count+$key+1,
                    'name' => $name
                ]]);

                $images = array_add($images, $count+$key , $file_array);


                PhotoChild::create([
                    'file'=> $destinationPath.'/'.$file,
                    'parentId' => $photoParent->id
                ]);

                $uploadcount ++;
            }

            $jsonresult = json_encode($images);

            $photoParent->images = $jsonresult;
            $photoParent->save();
        }

        return redirect()->route('admin.photoParent.show', $photoParent);
    }

}
