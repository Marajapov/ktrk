<?php

namespace Admin\Controllers;

use Request;
use Input;
use App\Http\Requests;

use Validator;
use Response;
use Intervention\Image\ImageManagerStatic as Image;

class AjaxController extends Controller
{

    // AJAX CALL
    public function selectChange()
    {
        if(Request::ajax()) {
            $data = Input::all();
            return $data['id'];
        }

    }

    public function uploadFiles() {

    	$input = Input::all();
    	$id = $input['id'];

    	// dd($id);

        $rules = array(
            'file' => 'image|max:100000',
        );
 
        $validation = Validator::make($input, $rules);
 
        if ($validation->fails()) {
            return Response::make($validation->messages());
        }

        $file = Input::file('file');

        $extension = $file->getClientOriginalExtension();
        $time = time();
        $name = rand(11111, 99999).$time.'.'.$extension;

        $dir  = 'froala/uploads';
 		$storage = \Storage::disk('public');
        $storage->makeDirectory($dir);

        if($id == 2){
        	$upload_success = Image::make($file)->heighten(600)->insert('http://ktrk.kg/images/wm_ktrk.png', 'bottom', 0, 0)->save($dir.'/'.$name);
        } elseif($id == 3){
        	$upload_success = Image::make($file)->heighten(600)->insert('http://ktrk.kg/images/wm_music.png', 'bottom-right',10, 10)->save($dir.'/'.$name);
        } elseif($id == 4){
        	$upload_success = Image::make($file)->heighten(600)->insert('http://ktrk.kg/images/wm_balastan.png', 'bottom-right', 10, 10)->save($dir.'/'.$name);
        } elseif($id == 7){
        	$upload_success = Image::make($file)->heighten(600)->insert('http://ktrk.kg/images/wm_1radio.png', 'bottom-right', 10, 10)->save($dir.'/'.$name);
        } else {
        	$upload_success = Image::make($file)->heighten(600)->save($dir.'/'.$name);
        }

        if ($upload_success) {
        	return $name;
        } else {
            return Response::json('error', 400);
        }
    }

    public function postWatermark() {

            $input = Input::all();

            $rules = array(
                'file' => 'image|max:100000',
            );
            $validation = Validator::make($input, $rules);

            if ($validation->fails()) {
                return Response::make($validation->messages());
            }

            $file = $_FILES['file'];

            $path = $_FILES['file']['name'];
            $ext = pathinfo($path, PATHINFO_EXTENSION);

            $time = time();
            $name = $time.'.'.$ext;

            $dir  = 'froala/uploads';
            $storage = \Storage::disk('public');
            $storage->makeDirectory($dir);

            $upload_success = Image::make($_FILES['file']['tmp_name'])->heighten(600)->insert('http://ktrk.kg/images/wm_ktrk.png', 'center', 0, 0)->save($dir.'/'.$name);
            if ($upload_success) {
                return $name;
            } else {
                return Response::json('error', 400);
            }
    }
}
