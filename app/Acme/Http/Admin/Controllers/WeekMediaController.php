<?php
namespace Admin\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Model\WeekMedias\ModelName as WeekMedias;

class WeekMediaController extends Controller
{
    public function index()
    {
        $from_date = date('Y-m-d', strtotime(' -7 day'));
        $to_date = date('Y-m-d');
        $table = WeekMedias::where('from_date','=',$to_date)->where('to_date','=',$from_date)->orderBy('like_count','desc')->get();
        return view('Admin::weekMedias.index', [
            'table' => $table,
            'from_date' => $from_date,
            'to_date' => $to_date,
        ]);
    }
    public function create()
    {   
    }
    public function store(Request $request)
    {
    }
    public function show(Post $post)
    {
    }
    public function edit(Post $post)
    {
    }
    public function update(Request $request, Post $post)
    {
    }
    public function destroy(Post $post)
    {
    }

    // Number for list the rating
    public function weekMediaSearch(Request $request)
    {
        $to_date = date('Y-m-d',strtotime($request->from_date));
        $from_date = date('Y-m-d',strtotime($request->to_date));
        
        $table = WeekMedias::where('from_date','=',$from_date)->where('to_date','=',$to_date)->orderBy('like_count','desc')->get();
        return view('Admin::weekMedias.index', [
            'table' => $table,
            'from_date' => $from_date,
            'to_date' => $to_date,
        ]);
    }
}
