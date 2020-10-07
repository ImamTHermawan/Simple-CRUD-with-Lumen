<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Validator;

class ProductController extends Controller
{
   /**
    * 
    * Create a new controller instance.
    *
    * @return void
    */
   public function __construct(Product $product)
   {
      $this->product = $product;
   }

   public function index()
   {
      $products = $this->product->getAll();
      
      return response()->json(['message'=>'success get data', 'data' => $products], 200);
   }

   public function create(Request $request)
   {
      $rules = [
         'name' => 'required|unique:products,name',
         'price' => 'required',
         'description' => 'required'
      ];

      $validator = Validator::make($request->all(), $rules);

      if($validator->fails()){
         return response()->json($validator->errors(), 400);
      }

      $product = $this->product->store($request->all());
     
      return response()->json(['message'=>'success create new product', 'data'=>$product], 201);
   }

   public function show(Request $request)
   {
      $product = $this->product->find('id', $request->id);
 
      if($product) 
         return response()->json($product, 200);
      else return response(['message'=>'Failed to get product'], 400);
   }
   
   public function update(Request $request, $id)
   { 

      $validator = Validator::make($request->all(), [
         'name' => 'unique:products,name',
         'description' => 'min:10' 
      ]);

      if($validator->fails()){
         return response()->json($validator->errors(), 400);
      }

      $data = $request->except('_token', 'method', 'id');

      $product = $this->product->patch($data, $request->id);

      return response()->json(['message'=>'Update success', 'data'=>$product], 200);
   }

   public function destroy($id)
   {
      $product = $this->product->find('id', $id);

      if(is_null($product)){
         return response()->json(["message"=>"Product not found"], 404);
      }
      
      $product = $this->product->deleteOne($id);

      return response()->json(["message"=>"Product removed successfully"], 200);
   }

}    