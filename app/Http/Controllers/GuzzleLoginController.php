<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class GuzzleLoginController extends Controller
{
    //use AuthenticatesUsers;

    public function store(Request $request){

        $email = $request->input('email');
        $password = $request->input('password');
        $token = $request->input('_token');

        $client = new Client(['base_uri' => 'http://depeloper.com/']);

        $data = $client->request('POST', '/api/login',
            [
                'headers' => [
                    'content-type' => 'application/x-www-form-urlencoded',
                    'Authorization' => 'Basic'
                ],

                'form_params' => [

                    'email' => $email,
                    'password' => $password,
                    'api_token' => $token,
                    'submit' => 'login'
                ]
            ]
        );
        //$dat = $client->send();

        $body = $data->getBody();
        $content = $body->getContents();
        $login = json_decode($content,TRUE);

        if ($login){
            $res['error'] = false;
            $res['message'] = 'sucess';
            return response($res);

        } else {
            $res['error'] = true;
            $res['message'] = 'password salah';
            return response($res);
        }


        //return view('/home')->with('email',$login);
    }
    public function index(){
        return view('auth.login');
    }
}
