<?php
namespace Admin\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Model\VacancyNews\ModelName as VacancyNews;
use Intervention\Image\ImageManagerStatic as Image;

class VacancyNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vacanciesnews = VacancyNews::get();
        // $streams = VacancyNews::where('published','=','1')->get();

        return view('Admin::vacancynews.index', ['vacanciesnews' => $vacanciesnews]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin::vacancynews.create', ['vacancynews' => new VacancyNews()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vacancynews = VacancyNews::create($request->except('thumbnail','q'));
        $thumb_author = ($request->input('thumb_author'));

        if($request->hasFile('thumbnail'))
        {
            $file = $request->file('thumbnail');
            $dir  = 'img/thumbnail';
            $btw = time();

            $name = $vacancynews->id().$btw.'.'.$file->getClientOriginalExtension();
            $name2 = $vacancynews->id().$btw.'_big.'.$file->getClientOriginalExtension();

//            $manager = new ImageManager(array('driver' => 'imagick'));

            $storage = \Storage::disk('public');
            $storage->makeDirectory($dir);

            Image::make($_FILES['thumbnail']['tmp_name'])->fit(250, 150)->save($dir.'/'.$name);

            if($request->input('thumb_author')){
                Image::make($_FILES['thumbnail']['tmp_name'])->fit(500, 300)->insert('http://www.ktrk.kg/stringtoimg.php?string='.urlencode($thumb_author).'&font_size=4&R=FF&G=FF&B=FF', 'bottom-right', 0, 0)->save($dir.'/'.$name2);
            } else {
                Image::make($_FILES['thumbnail']['tmp_name'])->fit(500, 300)->save($dir.'/'.$name2);
            }

            $vacancynews->thumbnail = $dir.'/'.$name;
            $vacancynews->thumbnail_big = $dir.'/'.$name2;
            $vacancynews->save();
        }

        return redirect()->route('admin.vacancynews.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(VacancyNews $vacancynews)
    {
        return view('Admin::vacancynews.show', ['vacancynews' => $vacancynews]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit(VacancyNews $vacancynews)
    {
        
        return view('Admin::vacancynews.edit', [
            'vacancynews' => $vacancynews
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VacancyNews $vacancynews)
    {

        $vacancynews->update($request->except('thumbnail','q'));
        $thumb_author = ($request->input('thumb_author'));

        if($request->hasFile('thumbnail'))
        {
            $file = $request->file('thumbnail');
            $dir  = 'img/thumbnail';
            $btw = time();

            $name = $vacancynews->id().$btw.'.'.$file->getClientOriginalExtension();
            $name2 = $vacancynews->id().$btw.'_big.'.$file->getClientOriginalExtension();

            $storage = \Storage::disk('public');
            $storage->makeDirectory($dir);

            Image::make($_FILES['thumbnail']['tmp_name'])->fit(250, 150)->save($dir.'/'.$name);
            if($request->input('thumb_author')){
                Image::make($_FILES['thumbnail']['tmp_name'])->fit(500, 300)->insert('http://www.ktrk.kg/stringtoimg.php?string='.urlencode($thumb_author).'&font_size=4&R=FF&G=FF&B=FF', 'bottom-right', 0, 0)->save($dir.'/'.$name2);
            } else {
                Image::make($_FILES['thumbnail']['tmp_name'])->fit(500, 300)->save($dir.'/'.$name2);
            }

            $vacancynews->thumbnail = $dir.'/'.$name;
            $vacancynews->thumbnail_big = $dir.'/'.$name2;
            $vacancynews->save();
        }



        return redirect()->route('admin.vacancynews.show', $vacancynews);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(VacancyNews $vacancynews)
    {
        $vacancynews->delete();

        return redirect()->route('admin.vacancynews.index');
    }
}
