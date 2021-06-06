<?php

namespace App\Http\Controllers;
// model
use App\Models\Admin;
// hash password
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class MainController extends Controller
{
    function login(){
        return view('auth.login');
    }
    function register(){
        return view('auth.register');
    }
    function save(Request $request){
        
        //Validate requests
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:admins',
            'password'=>'required|min:5|max:12'
        ]);

         //Insert data into database
         $admin = new Admin;
         $admin->name = $request->name;
         $admin->email = $request->email;
         $admin->password = Hash::make($request->password);
         $save = $admin->save();

         if($save){
            return back()->with('success','New User has been successfuly added to database');
         }else{
             return back()->with('fail','Something went wrong, try again later');
         }
}
function chack(Request $request)
{
   $request->validate([
       "email"=>"required|email",
       "password"=>"required|min:5|max:12"
   ]);
    $userInfo = Admin::where("email","=",$request->email)->first();
    if(!$userInfo){
        return back()->with("fail","We do not recognize your email address");
    }else{
        
        if(Hash::check($request->password,$userInfo->password)){
            $request->session()->put('LoggedUser', $userInfo->id);
            return redirect('admin/dashboard');
        }else{
            return back()->with('fail','Incorrect password');
        }
    }
}
}
