<?php

namespace Admin\Controllers;

use Request;
use Input;
use App\Http\Requests;

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
}
