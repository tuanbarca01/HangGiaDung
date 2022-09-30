<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Http\Requests\AddCateRequest;
use App\Http\Requests\EditCateRequest;
class CategoryController extends Controller
{
    //
    public function getCate(){
        $productcategory = ProductCategory::all();
        return view('back.category', compact('productcategory'));
    }
    public function postCate(AddCateRequest $request){
        $category = new ProductCategory;
        $category-> name = $request -> name;
        $category->save();
        return back();
    }
    public function getEditCate($id){
        $productcategory2 = ProductCategory::find($id);
        return view('back.editcategory',compact('productcategory2'));
    }
    public function postEditCate(EditCateRequest $request,$id){
        $category = ProductCategory::find($id);
        $category-> name = $request -> name;
        $category->save();
        return redirect()->intended('admin/category');
    }
    public function getDeleteCate($id){
        ProductCategory::destroy($id);
        return back();
    }
}
