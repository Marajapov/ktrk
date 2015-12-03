<?php
namespace Admin\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Input;

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
        $photoParent = PhotoParent::create($request->except('images','q'));
        
        // getting all of the post data

        $files = Input::file('images');

        $result = array();

        $file_count = count($files);


        // start count how many uploaded
        $uploadcount = 0;

        foreach($files as $key=>$file) {

          // $rules = array('file' => 'required'); //'required|mimes:png,gif,jpeg,txt,pdf,doc'
          // $validator = Validator::make(array('file'=> $file), $rules);
          // if($validator->passes()){
            $storage = \Storage::disk('public');
            $destinationPath = 'froala/uploads';
            $storage->makeDirectory($destinationPath);
            $filename = time().$key.'.'.$file->getClientOriginalExtension();

            $upload_success = $file->move($destinationPath, $filename);

            $file_array = array();
            $file_array = array_collapse([$file_array, [
                    'id' => $key+1,
                    'name' => $filename
                ]]);

            $result = array_add($result, $key , $file_array);
            
            $jsonresult = json_encode($result);
            //$files_ser = serialize($result);
            
            $photoParent->images = $jsonresult;
            $photoParent->save();

            $uploadcount ++;

          // } // endif
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
        $images = json_decode($photoParent->images);
        return view('Admin::photoParent.show', [
            'photoParent' => $photoParent,
            'images' => $images,
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
        $photoParent->update($request->except('images','q'));

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

    public function photodelete(Request $request)
    {
        $delete = $request->photoDeleteId;


        $photoParentId = $request->photoParentId;
        $photoParent = \Model\PhotoParent\ModelName::where('id','=',$photoParentId)->first();

        $files = json_decode($photoParent->images);

        $file = array_only($files, $delete-1);
        $name = last(last($file));
        
        
        $key = array_has($files, $delete);

        if($key !== false) {
            unset($files[$delete-1]);
            $storage = \Storage::delete('/froala/uploads/'.$name);
        }
        unset($files[$delete-1]);

        $jsonFiles = json_encode($files);
        //dd($photoParent->images,$files,$jsonFiles);

        $photoParent->images = $jsonFiles;

        $photoParent->save();

        return redirect()->route('admin.photoParent.index');
    }        
    
}
