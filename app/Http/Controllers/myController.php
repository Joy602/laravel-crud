<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class myController extends Controller
{
    
    // Product insert function
    function insert(Request $req){
        $name =  $req->get('pname');
        $price = $req->get('pprice');
        $img = $req->file('image')->getClientOriginalName();

        //move uploaded file
        $req->image->move(public_path('images'),$img);

        // return $req->input();;

        $prod = new product();
        $prod->PName = $name;
        $prod->PPrice = $price;
        $prod->PImage = $img;

        // save data to database
        $prod->save();
        return redirect('/read');
    }

    // product read function
    function readData(){
        // here 'product' is from model
        $pDadta = product::all();
        return view('read',['data'=>$pDadta]);
    }

    // update product function
    function updateOrDelete(Request $req){
        $id = $req->get('id');
        $name = $req->get('name');
        $price = $req->get('price');

        // if update button is pressed
        if($req->get('update')=='Update'){
            return view('update',['pid'=>$id,'pname'=>$name,'pprice'=>$price]);


        // if delete btn pressed
        }else{
             $prod = product::find($id);
             $prod->delete();
             return redirect('/read');
        }
    }
}
