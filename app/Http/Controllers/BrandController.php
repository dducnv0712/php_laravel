<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    //
    public function all(){
        $brands = Brand::all();
        $num = 1;
        return view("admin_views.brand.list",[
            "brands"=>$brands,
            "num"=>$num
        ]);
    }

    public function save(Request $request)
    {
        try{
            Brand::create([
                "logo"=>$request->get("imgLogo"),
                "name"=>$request->get("name")
            ]);
            return redirect()->to("admin/brands");
        }catch (\Exception $e){
            abort(404);
        }

    }

    public function delete($id){
        $brands = Brand::findOrFail($id);// neu ko tim dc se sang 404
        try {
            $brands->delete();
            return redirect()->to("brands");
        }catch (\Exception $e){
            abort(404);
        }
    }

    public function update(Request $request,$id){

        try{
            $brand =Brand::findOrFail($id);
            $brand->update([
                "logo"=>$request ->get("imgLogo"),
                "name"=>$request ->get("name_edit"),
            ]);
            return redirect()->to("admin/brands");
        }catch (\Exception $e){
            abort(404);
        }

    }
}
