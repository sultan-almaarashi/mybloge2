<?php

namespace App\Http\Controllers;

use App\Http\Requests\OfferRequest;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CrudController extends Controller
{
    public function __construct()
    {
        
    }

    public function getOffers(){
        // return Offer::get();
        return Offer::select(['id','name'])->get();
    }

    // public function store(){
    //     Offer::create([
    //         'name'=>'offer4',
    //         'price'=>'4000',
    //         'details'=>'offer detials',
    //     ]);
    // }

    public function create(){
        return view('offers.create');
    }

    public function store(OfferRequest $request){

        //vaildation of data before insert in database
        // $rules = $this->getRules(); 
        // $messages =$this-> getMessages();
        // $validator=Validator::make($request->all(),$rules,$messages);

        // if($validator->fails()){
        //     // return $validator->errors();
        //     return redirect()->back()->withErrors($validator)->withInputs($request->all());
        // }

        //insert data into database

        Offer::create([
            'name'=>$request->name,
            'price'=>$request->price,
            'details'=>$request->details,
        ]);

        return redirect()->back()->with(['success'=>__('messages.add offer success')]);

    }

    // protected function getRules(){
    //     return $rules=[
    //         'name'=>'required|max:100|unique:offers,name',
    //         'price'=>'required|numeric',
    //         'details'=>'required',
    //     ];
    // }

    // protected function getMessages(){
    //     return $messages=[
    //         'name.required'=> __('messages.offer name required'), 
    //         'name.max'=> __('messages.offer name max'), 
    //         'name.unique'=> trans('messages.offer name unique'), 
    //         'price.required'=> __('messages.offer price required'), 
    //         'price.numeric'=>  __('messages.offer price numeric'), 
    //         'details.required'=>  __('messages.offer details required'), 
    //     ];
    // }


    public function getAllOffers(){
        $offers=Offer::select('id','name','price','details')->get();//return collaction
        return view('offers.all',compact('offers'));
    }

    public function editOffer($offer_id){

      $offer = Offer::find($offer_id);
      if(!$offer)
      return redirect()->back();

      $offers = Offer::select('name','price','details')->find($offer_id);
      return view('offers.edit',compact('offers'));
    // return $offer_id;
    } 
    public function show($offer_id ,Request $request){
      //validation 
      //chek if offer exists
      
       $offer = Offer::find($offer_id);
     if(!$offer)
     return "لا يوجد بيانات";

     return $request->all();
    }
    public function updateOffer(OfferRequest $request,$offer_id){
       //validation 
       //chek if offer exists
       return 'sultan';
        $offer = Offer::find($offer_id);
      if(!$offer)
      return redirect()->back();

      //update data

      $offer->update($request->all());

        // $offer->update([
        //     'name'=>$request->name,
        //     'price'=>$request->price,
        //     'details'=>$request->details,
        // ]);
        // return "Updated successfly";
      return redirect()->back()->with(['success'=>'تم التحديث بنجاح']);
    }
}
