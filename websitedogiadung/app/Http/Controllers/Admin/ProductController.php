<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AddProductRequest;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductImage;
use App\Models\Brand;
use DB;
class ProductController extends Controller
{
    //
    public function getProduct() {
        $productlist = Product::all();
        $productcategory = ProductCategory::all();
        return view('back.product',compact('productlist','productcategory'));
    }

    public function getAddProduct(){
        $productcategory = ProductCategory::all();
        $brands = Brand::all();
        return view('back.addproduct',compact('productcategory','brands'));
    }

    public function postAddProduct(AddProductRequest $request){
        $filename = $request->img->getClientOriginalName();
        $product = new Product;
        $product->brand_id = $request->brand;
        $product->product_category_id = $request->cate;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->qty = $request->qty;
        $product->discount = $request->discount;
        $product->description = $request->description;
        $product->featured = $request->featured;
        $product->tag = $request->tag;
        $productimg = new ProductImage([
            "path" => $request->$filename
        ]);
//        $productimg->path = $request->$filename;
        $product->save();
        $request->img->storeAs('avatar',$filename);
    }

    public function getEditProduct($id){
        $data['product'] = Product::find($id);

        return view('back.editproduct',$data);
    }

    public function postEditProduct(Request $request,$id){
        $product = new Product;
        $arr['name'] = $request->name;
        $arr['price'] = $request->price;
        $arr['qty'] = $request->qty;
        $arr['discount'] = $request->discount;
        $arr['description'] = $request->description;
        $arr['featured'] = $request->featured;

        $product::where('id',$id)->update($arr);
    }

    public function getDeleteProduct($id){
        Product::destroy($id);
        return back();
    }
}
