<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //lấy ra danh sách sản phẩm
    public function all(){
//        $products = Product::with("Category","Brand")->paginate(20);;
         $products = Product::with("Category","Brand")->get();

//        $brands = Brand::all();

        $num = 1;
        return view("product.list",[
            "products"=>$products,
//            "brands"=>$brands,
            "num" =>$num
        ]);
    }

    public function save( Request $request)
    {
        try {
            Product::create([
                "image" => $request->get("fileImg"),
                "name" => $request->get("name"),
                "name_category" => $request->get("category"),
                "name_brand" => $request->get("brand"),
                "brand_id" => $request->get("brand_id"),
                "price" => $request->get("price"),
                "qty" => $request->get("qty"),
                "description" => $request->get("desc"),
                "category_id" => $request->get("category_id")
            ]);
            return redirect()->to("products");
        } catch (\Exception $e) {
            abort(404);
        }
    }

    public function delete($id){
        $product= Product::findOrFail($id);// neu ko tim dc se sang 404
        try {
            $product->delete();
            return redirect()->to("products");
        }catch (\Exception $e){
            abort(404);
        }
    }



    public function update(Request $request,$id){


        try{
            $product =Product::findOrFail($id);
            $product->update([
                "image"=>$request ->get("fileImg_edit"),
                "name"=>$request ->get("name_edit"),
                "price"=>$request ->get("price_edit"),
                "qty"=>$request ->get("qty_edit"),
                "description"=>$request ->get("desc_edit"),

            ]);
            return redirect()->to("/products");

        }catch (\Exception $e){
            abort(404);
        }

    }


    public function proCategories($id){
        //nó sẽ lấy ra sản phẩm của category đã chọn
        $products = Product::With("Category","Brand")->Where("category_id",$id)->get();
        $num = 1;
        return view("product.list",[
            "products"=>$products,
            "num" =>$num
        ]);
    }
    public function proBrands($id){
        //nó sẽ lấy ra sản phẩm của category đã chọn
        $products = Product::With("Category","Brand")->Where("brand_id",$id)->get();

        $num = 1;
        return view("product.list",[
            "products"=>$products,
            "num" =>$num
        ]);
    }

}
