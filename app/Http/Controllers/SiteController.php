<?php

namespace App\Http\Controllers;
use Session;
use App\Http\Controllers\Str;

use App\Models\Schedule_list;
use Illuminate\Http\Request;




class SiteController extends Controller
{
    
    public function gethome(){
    
        
        return view('userSite.home');

    }

    public function getabout(){
            
        
        return view('userSite.about');
    }
    public function getroute(){
        $data=[
            'list'=>Schedule_list::all()
        ]; 
        return view('userSite.route', $data);
    }
    public function getgallery(){
        return view('gallery');
    }
    public function getcontact(){
        return view('userSite.contact');
    }


    public function getFindBus(Request $request){
        
        $from = $request->input('fromwhere');
        $to = $request->input('togoing');
        $date = $request->input('busdate');

        $data = [
            'find' => Schedule_list::where('from', $from)->where('to', $to)->where('date', $date)->get()
        ];
        // dd($data['find']);
        return view('pages.find.searchBus', $data);

    }



// test cart
    public function getTestCart(){
        return view ('testcart');
    }

    public function postTestCart(){
        // dd("osdfsaf");
        // how to save in session
        
        if(Session::get('sessionname')){
            dd('Session cha');

        }else{
            $code = Str::random(4);
            Session::put('sessionname', $code);

        }

    }
    
    
}
