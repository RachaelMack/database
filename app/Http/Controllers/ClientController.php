<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use Input;

class ClientController extends Controller
{
    public function index(){
      return view('client');
    }

    public function autocomplete(Request $request){
      $term=$request->term;
      $data = Client::where('name','LIKE','%'.$term.'%')
      ->take(10)
      ->get();
      $results=array();
      foreach ($data as $key => $v) {
        $results[]=['id'=>$v->id,'value'=>$v->name];
      }
      return response()->json($results);
    }

}
