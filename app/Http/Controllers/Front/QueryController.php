<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Query;
use RealRashid\SweetAlert\Facades\Alert;

class QueryController extends Controller
{

    public function queryForm(Request $request){
        if($request->isMethod('post')){
         $data = $request->all();
         //echo "<pre>"; print_r($data); die;
         $query = new Query;
         $query->name = $data['query_name'];
         $query->phone = $data['query_phone'];
         $query->save();

         Alert::success('Your Appointment Have Been Schedule', 'Our professional will get in touch with you soon');

         return redirect()->back();
        }

        return view('front.index');
    }
}
