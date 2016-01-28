<?php
namespace Front\Controllers;
use Illuminate\Http\Request;
class AuthController extends Controller
{
    public function __construct()
    {
    }
    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function Login()
    {
        return view('Front::auth.login');
    }

    public function postLogin(Request $request)
    {

        if(auth()->attempt(['email' => $request->input('email'), 'password' => $request->input('password')]))
        {
            if(auth()->user()->isAdmin()){
                return redirect()->route('admin.home');
            }elseif(auth()->user()->isNs()){
                return redirect()->route('admin.home');
            }elseif(auth()->user()->isManager()){
                return redirect()->route('admin.home');
            }elseif(auth()->user()->isDirector()){
                return redirect()->route('admin.home');
            }elseif(auth()->user()->isBirinchi()){
                return redirect()->route('admin.home');
            }elseif(auth()->user()->isMuzkanal()){
                return redirect()->route('admin.home');
            }else{
                return redirect()->route('front.home');
            }
            

            App::after(function($request, $response)
            {
              if ( Auth::check()){
                  $ckname=Auth::getRecallerName(); //Get the name of the cookie, where remember me expiration time is stored
                  $ckval=Cookie::get($ckname); //Get the value of the cookie
                  return $response->withCookie(Cookie::make($ckname,$ckval,360)); //change the expiration time
              }
            });

        }

        return redirect()->route('front.login')->with('danger-message', 'Email же сырсөз туура эмес');
    }

    public function postLogout()
    {
        auth()->logout();

        return redirect()->route('front.home');
    }
}
