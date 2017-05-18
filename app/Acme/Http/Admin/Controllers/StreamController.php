<?php
namespace Admin\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Model\Stream\ModelName as Stream;

class StreamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $streams = Stream::get();
        // $streams = Stream::where('published','=','1')->get();

        return view('Admin::stream.index', ['streams' => $streams]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin::stream.create', ['stream' => new Stream()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stream = Stream::create($request->except('file','file_big','q'));

        if($request->hasFile('file') && $request->hasFile('file_big'))
        {
            $file = $request->file('file');
            $file_big = $request->file('file_big');
            $dir  = 'img/stream';
            $name = $stream->id().'.'.$file->getClientOriginalExtension();
            $nameBig = $stream->id().'_big.'.$file_big->getClientOriginalExtension();

            $storage = \Storage::disk('public');
            $storage->makeDirectory($dir);

            $stream->file = $dir.'/'.$name;
            $stream->file_big = $dir.'/'.$nameBig;
            $stream->save();
            $file->move($dir, $name);
            $file_big->move($dir, $nameBig);
        }

        return redirect()->route('admin.stream.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Stream $stream)
    {
        return view('Admin::stream.show', ['stream' => $stream]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit(Stream $stream)
    {
        
        return view('Admin::stream.edit', [
            'stream' => $stream
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stream $stream)
    {

        $stream->update($request->except('file','file_big','q'));

        if($request->hasFile('file') && $request->hasFile('file_big'))
        {
            $file = $request->file('file');
            $file_big = $request->file('file_big');
            $dir  = 'img/stream';
            $name = $stream->id().'.'.$file->getClientOriginalExtension();
            $nameBig = $stream->id().'_big.'.$file_big->getClientOriginalExtension();

            $storage = \Storage::disk('public');
            $storage->makeDirectory($dir);

            $stream->file = $dir.'/'.$name;
            $stream->file_big = $dir.'/'.$nameBig;
            $stream->save();
            $file->move($dir, $name);
            $file_big->move($dir, $nameBig);
        }



        return redirect()->route('admin.stream.show', $stream);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stream $stream)
    {
        $stream->delete();

        return redirect()->route('admin.stream.index');
    }
}
