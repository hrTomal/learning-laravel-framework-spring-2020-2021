<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function verify(Request $req){

        $user = DB::table('login')
        ->where('password', $req->password)
        ->where('user_id', $req->username)
        ->get();

        if($req->username == "" || $req->password == ""){
           $req->session()->flash('msg', 'null username or password...');
           return redirect('/login');
        }elseif(count($user) > 0){
            $req->session()->put('username', $req->username);
            return redirect('/home');
        }else{
            $req->session()->flash('msg', 'Invalid username or password or both');
            return redirect('/login');
        }

        // }elseif($req->username == $req->password){

        //     $req->session()->put('username', $req->username);
        //     return redirect('/home');
        // }else{

        //     $req->session()->flash('msg', 'Invalid username or password...');
        //     return redirect('/login');
        // }
    }
}
