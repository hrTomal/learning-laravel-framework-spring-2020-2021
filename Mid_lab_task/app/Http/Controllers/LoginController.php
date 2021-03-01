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

        $user = DB::table('user')
                    ->where('password', $req->password)
                    ->where('email', $req->email)
                    ->get();

        if($req->email == "" || $req->password == ""){
           $req->session()->flash('msg', 'null email or password...');
           return redirect('/login');

        }elseif(count($user) > 0 ){
            //$req->session()->put('email', $req->email);
            //return redirect('/home');
            $user = User::find($req->email);

            $req->session()->put('name', $user->name);

            if($user->role == "Admin"){
                return redirect('/home/adminIndex');

            }
            else if($user->role == "Customer"){
                return redirect('/home/customerIndex');
            }
            else if($user->role == "Accountant"){
                return redirect('/home/accountantIndex');
            }
            else if($user->role == "Sales and Marketing"){
                return redirect('/home/salesIndex');
            }
            else if($user->role == "Business Partner"){
                return redirect('/home/partnerIndex');
            }
            else{
                return redirect('/home');

            }
            
        }else{

            $req->session()->flash('msg', 'Invalid username or password...');
            return redirect('/login');
        }
    }
}
