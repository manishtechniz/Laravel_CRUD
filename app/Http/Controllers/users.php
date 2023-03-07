<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;

class users extends Controller
{
     
    public function index()
    {
        //
    }

     
    public function create()
    {
        //
    }

     
    public function store(Request $request)
    {
        //
    }

     
    public function show($id)
    {
        //
    }

     
    public function edit($id)
    {
        //
    }

     
    public function update(Request $request, $id)
    {
        //
    }

     
    public function destroy($id)
    {
        //
    }

    public function reg_form(Request $req){

            $req->validate([
                'email'=>'required|email',
                'password'=>'required',
                'name'=>'required'
            ]);

            $reg=new User;
            $reg->name=$req->input('name');
            $reg->email=$req->input('email');
            $reg->password=Hash::make($req->input('password'));
            $check=$reg->save();
            if($check){

                
                Session::flash('success',"You Have Registered Successfully");
                return redirect('login');
                
            }else{
                Session::flash('fail',"Registration has been failed");
                // $req->session()->flash('msg',"Registration has been failed");
                 return redirect()->back();
            }

    
    }

    public function dashboard(Request $req){
        return view('dashboard');
    }  

    public function registration(Request $request){
        
        if(Session::get('login')){
          return redirect('dashboard');
        }
        return view('registration');
    }  
    public function login(Request $req){

        if(Session::get('login')){
            return redirect('dashboard');
          }
        return view('login');
    }  
    public function logout(Request $req){

        Session::flush();
        return redirect('login');
    }  


    
    public function user_login(Request $req){
        $req->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        // Session::forget('fail');
        $getDetails=User::where('email',$req->input('email'))->get()->first();
        // return Hash::make($req->input('password'));
        // return $getDetails;
        // if( ! Hash::check( $data->password , Input::get('currPassword') ) )
        // return $getDetails->password.' = '.$req->input('password');
        // return Hash::check($req->input('password'),$getDetails->password).' = '.Hash::check($getDetails->password,$req->input('password'));
         
       
        if(!$getDetails || !Hash::check($req->input('password'),$getDetails->password)){
            Session::flash('fail',"Email / Password does'nt match ");
            return redirect()->back();
        }else{
            Session::flash('success',"You are login successfully");
            Session::put('login',true);
            Session::put('username',$getDetails->name);
            return redirect('dashboard');
        }

        // $2y$10$p0GyA0tzItO2BoIk320rs.oTCEqUsZPQm4ODz8rGd4wTP.X5oKJ1m
        // $2y$10$qH7LH6Jftd4YnZOvW7ExI.xdoYkI5JXwu87Mxet2YDOqX8twML2Uu

    } 
  
 
}
