<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Store;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->hasRole('Shop')) {
            $store_data = Store::where('user_id',Auth::user()->id)->first();//check shop user is present in store table or not
            if(empty($store_data)){
                $store_data = new Store();
                $store_data->name = Auth::user()->name;
                $store_data->email = Auth::user()->email;
                $store_data->user_id = Auth::user()->id;
                $store_data->save();
                
            }
            // dd('I am shop user');
        }else{
            // dd('I am admin user');
        }
        
        return view('home');
    }

    public function profile(){
        $data = User::where('id',Auth::user()->id)->first();
        return view('profile',compact('data'));
    }
    
    public function profileUpdate(Request $request){
        $validatedData = $request->validate([
            'mobile' =>'required|regex:/^[6-9][0-9]{9}$/|digits:10|unique:users,mobile,'.Auth::user()->id 
            // 'email' =>'required|email|unique:users', 
        ]);
        $data = User::where('id',Auth::user()->id)->first();
        $data->mobile = $request->mobile;
        $data->l_name = $request->l_name;
        $data->name = $request->name;
        $data->save();
        $store_data = Store::where('user_id',Auth::user()->id)->first();
        $store_data->mobile = $request->mobile;
        $store_data->name = $request->name.' '.$request->l_name;
        $store_data->save();
        // return view('profile',compact('data'));

        return redirect()->route('home')->with('message',"profile updated succesfully");

    }

    public function setting(){
        $data = Store::where('user_id',Auth::user()->id)->first();
        return view('setting',compact('data'));
    }
}
