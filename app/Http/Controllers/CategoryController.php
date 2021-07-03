<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function all(){
        $categories = Category::all(); // tra ve 1 list object
        $num = 1;
        return view("category.list",[
            "categories"=>$categories,
            "num" =>$num
        ]);
    }

//này dùng để lưu thông tin category
    public function save(Request $request)
    {
        try{
            Category::create([
                "name"=>$request->get("name")
            ]);
            return redirect()->to("admin/categories");
        }catch (\Exception $e){
            abort(404);
        }

    }

    public function delete($id){
        $category = Category::findOrFail($id);// neu ko tim dc se sang 404
        try {
            $category->delete();
            return redirect()->to("admin/categories");
        }catch (\Exception $e){
            abort(404);
        }
    }

    public function update(Request $request,$id){

        try{
            $category =Category::findOrFail($id);
            $category->update([
                "name"=>$request ->get("name_edit"),
            ]);
            return redirect()->to("admin/categories");
        }catch (\Exception $e){
            abort(404);
        }

    }

}
