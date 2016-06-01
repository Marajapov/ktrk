<?php
namespace Admin\Controllers;
use Input;
use Illuminate\Http\Request;

use Model\Test\ModelName as Test;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('Admin::test', [
            'test' => new Test,
            ]);
    }

    public function store(Request $request)
    {
        if(Request::ajax()) {
            $file = $request->file('photos');
            die($file);
        }        
    }

    public function show()
    {
        $test = \Model\Test\ModelName::where('id','=','30')->first();
        $images = json_decode($test->images);
        
        return view('Admin::show', [
            'test' => $test,
            'images' => $images,
        ]);
    }
}
