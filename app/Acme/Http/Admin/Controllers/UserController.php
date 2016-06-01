<?php
namespace Admin\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Model\User\ModelName as User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perPage = 15;

        $users = User::paginate($perPage);

        return view('Admin::user.index', [
            'users' => $users,
            'perPage' => $perPage,
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin::user.create', ['user' => new User()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create($request->except('q'));

        $user->password = bcrypt($request->input('password'));
        $user->save();

        return redirect()->route('admin.user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('Admin::user.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('Admin::user.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->update($request->except('q','password'));

        return redirect()->route('admin.user.show', $user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('admin.user.index');
    }

    public function changePassword(Request $request, $id)
    {
        $user = User::where('id','=',$id)->first();
        return view('Admin::user.password', [
            'user' => $user,
            'userId' => $user->id,
            ]);
    }

    public function newPassword(Request $request)
    {
        $pass1 = $request->input('password');
        $pass2 = $request->input('password2');
        $userId = $request->input('userId');

        if($pass1 == $pass2)
        {
            $password = bcrypt($pass1);
            $user = User::where('id','=',$userId)->first();
            $user->password = $password;
            $user->save();

            return redirect()->route('admin.user.show', $user);

        }
    }
}
