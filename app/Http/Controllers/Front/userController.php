<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class userController extends Controller
{
    public function showUserName(){
        return "Sultan ali";
    }
    
    public function showWelcome()
    {
        # code...
        $data =['sultan','male','23'];
        // $data['name']='sultan';
        // $data['age']=23;
        // $data['gender']='male';

        $obj=new \stdClass();
        $obj->name='Nasser';
        $obj->age=23;
        $obj->gender='male';

        //return view('front\welcome2')->with(['name'=>'sultan','age'=>23]);
        return view('front\welcome2',compact('data'));
        //return view('front\welcome2',compact('obj'));

    }
}
