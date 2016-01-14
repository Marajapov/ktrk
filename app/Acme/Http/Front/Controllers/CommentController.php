<?php
namespace Front\Controllers;

use Illuminate\Http\Request;
use \Model\Comment\ModelName as Comment;

class CommentController extends Controller
{
    public function __construct()
    {
    }


    public function store(Request $request)
    {
        $data = array(
            'secret' => '6LcBGBUTAAAAAIMMSwe-ebmOhgMO3c-vmXn_Yyfb',
            'response' => $_POST['g-recaptcha-response']
        );
        # Create a connection
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $ch = curl_init($url);
        # Form data string
        $postString = http_build_query($data, '', '&');
        # Setting our options
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        # Get the response
        $response = curl_exec($ch);
        curl_close($ch);

        if(!$response)
        {
            Comment::create($request->except('g-recaptcha-response','q'));

            return redirect()->route('front.post',$request->resourceId)->with('success','true');
        }
        else
        {
            return redirect()->route('front.post',$request->resourceId)->with('success','false');
        }

    }

    public function orphus(Request $request)
    {
        dd($request);
    }

}
