<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash; 
use Illuminate\Http\Request;

class RegController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function register(){
        return view('auth.register');
    }
    public function user(){
        $id=Session('loggeduser');
        $data=['data'=>User::find($id)];
        return view('auth.user',$data);
    }
    public function save(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|max:8|confirmed',
            'password_confirmation'=>'required|min:5|max:8',
            
        ]); 

        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=hash::make($request->password);
        $user->save(); 
        return view('auth/login') ;
        
        // return redirect('/');         
    }
    public function check(Request $request){
        //     return $request->input();
        // }
            $request->validate([
                'email'=>'required|email',
                'password'=>'required|min:5|max:8',
            ]);      
            
        $userinfo=User::where('email',"=",$request->email)->first();
        if(!$userinfo){
            return back()->with('fail','invalid email');
        }
        else{
            if(Hash::check($request->password,$userinfo->password))
            $request->Session()->put('loggeduser',$userinfo->id);
            return redirect('auth/user');
            // if($userinfo->role==0)
            // {
            //     return redirect('admin/dashboard');
            // }
            // else{
            //     return redirect('user/dashboard');

            // }

        }
    }

    public function logout(){
        if(session()->has('loggeduser')){
            session()->pull('loggeduser');
        
        return redirect('auth/login');
        }
    }


}
