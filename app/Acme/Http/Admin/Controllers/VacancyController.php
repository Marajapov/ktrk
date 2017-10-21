<?php
namespace Admin\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Model\Vacancy\ModelName as Vacancy;

class VacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vacancies = Vacancy::get();

        return view('Admin::vacancy.index', ['vacancies' => $vacancies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin::vacancy.create', ['vacancy' => new Vacancy()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vacancy = Vacancy::create($request->except('file','q'));

        if($request->hasFile('file'))
        {
            $file = $request->file('file');
            $dir  = 'img/vacancy';
            $name = $vacancy->id().'.'.$file->getClientOriginalExtension();

            $storage = \Storage::disk('public');
            $storage->makeDirectory($dir);
            // $storage->put($dir.'/'.$name, $file);

            $vacancy->file = $dir.'/'.$name;
            $vacancy->save();
            $file->move($dir, $name);
        }

        return redirect()->route('admin.vacancy.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Vacancy $vacancy)
    {
      
        return view('Admin::vacancy.show', [
            'vacancy' => $vacancy,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit(Vacancy $vacancy)
    {
        dd(34534);
        return view('Admin::vacancy.edit', [
            'vacancy' => $vacancy
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vacancy $vacancy)
    {

        $vacancy->update($request->except('file','q'));

        if($request->hasFile('file'))
        {
            $file = $request->file('file');
            $dir  = 'img/vacancy';
            $name = $vacancy->id().'.'.$file->getClientOriginalExtension();

            $storage = \Storage::disk('public');
            $storage->makeDirectory($dir);

            $vacancy->file = $dir.'/'.$name;
            $vacancy->save();
            $file->move($dir, $name);
        }

        return redirect()->route('admin.vacancy.show', $vacancy);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vacancy $vacancy)
    {
        $vacancy->delete();

        return redirect()->route('admin.vacancy.index');
    }
}
