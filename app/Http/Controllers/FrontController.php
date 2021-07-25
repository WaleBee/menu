<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function category($id){
        if ($id == 'all') {
            $sub = SubCategory::all();
            $data = Product::all();
        }
        else{
            $sub = SubCategory::where('category', $id)->get();
            $data = Product::where('category', $id)->get();
        }
        return response()->json([$data, $sub]);
    }
    
    public function subcategory($id){
        $data = Product::where('sub_category', $id)->get();
        return response()->json($data);
    }

    
    public function filter($id){
        if ($id == 'all') {
            $data = Product::all();
        }
        else{
            $data = Product::where('status', $id)->get();
        }
        
        return response()->json($data);
    }
    
    public function allcategory(){
        
        $data = Category::all();
        
        return response()->json($data);
    }
    public function search($id){
        
        $data = Product::where('name', 'Like', '%'.$id.'%')->get();
        
        return response()->json($data);
    }
    public function submit_data(Request $request){

        $mode = $request->mode;
        $total = $request->total;
        $tax = $request->tax;
        $customerName = $request->name;
        $customerPhone = $request->phone;
        $customerWhatsapp = $request->whatsapp;
        $customerEmail = $request->email;
        $address = $request->address;
        $order_note = $request->order_note;
        $name = [];

        foreach (array_combine($request->idname, $request->qt) as $value => $value1) {
                $name[] = $value. '*X' . $value1 .'* %0A';
        }
        $data = implode(' ' , $name);
        return json_encode('*_Delivery_ Order* From _'. $customerName .'_ %0A'.
        '******************************** %0A' .
        '*ORDERED ITEMS :* %0A ' .
        $data .
        '********************************' . "%0A" .
        'Order Amount QAR *'. $total .'* ' . "%0A" .
        'Delivery Fee = *0.00* ' . "%0A" .
        'Tax(0%) = QAR *'. $tax .'* '."%0A".
        'Amount Payable = QAR *'. $total .'*' . "%0A" .
        '*********************************'. "%0A".
        '*Name :* '. $customerName .  "%0A" .
        '*Phone :* '. $customerPhone ."%0A".
        '*Whatsaap :* '. $customerWhatsapp."%0A".
        '*Email :* '. $customerEmail."%0A".
        '*Address :* ' .$address."%0A".
        '*Option : *'.$mode."%0A".
        '*Order Note :* '.$order_note);
    }


}
