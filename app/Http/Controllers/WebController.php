<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\City;
use App\Models\Product;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;

class WebController extends Controller
{
    public function admin(){
        return view("admin_views.home");
    }
    public function home(){

        $products = Product::with("Category","Brand")->paginate(12);
        return view("home",[
            'products'=>$products
        ]);

    }
    public function details($id){
        $details = Product::with("Category","Brand")->find($id);
        return view('user_views.details',[
            "products"=>$details,
        ]);
    }

    public function addToCart(Request $request,$id){
        $qty = $request->get("qty");
        // tim sp
        $product = Product::findOrFail($id);
        // cho sp vao gio hang - session
        $carts = [];// mac dinh ban dau la chua co sp nao
        if(Session::has("cartPr")){
            $carts = Session::get("cartPr");
        }
        // kiem tra xem gio hang da co sp nay hay chua
        if(!$this->checkCart($carts,$product)){// neu sp chua co trong gio hang
            $product->cart_qty = $qty;// them 1 thuoc tinh cart_qty
            $carts[] = $product; // nap vao gio hang
        }else{
            for ($i=0;$i<count($carts);$i++){
                if($carts[$i]->id==$product->id){
                    $carts[$i]->cart_qty = $carts[$i]->cart_qty+$qty;
                    break;
                }
            }
        }
        // gan tro lai cart vao session
        Session::put("cartPr",$carts);
        return redirect()->back();
    }

    // tim kiem xem sp co trong array ko
    private function checkCart(array $cart,Product $p){
        foreach ($cart as $item){
            if($item->id == $p->id)
                return true;
        }
        return false;
    }

    public function cart(){
        $cart = [];
        if(Session::has("cartPr"))
        $cart =Session::get("cartPr");
        $grandTotal = 0;
        foreach ($cart as $item){
            $grandTotal += $item->cart_qty * $item->price;
            }
        return view("user_views.cart",[
            "cartPr"=>$cart,
            "grandTotal" =>$grandTotal,
        ]);
    }


    public function updateCart(Request $request, $id){
        if(Session::has("cartPr")){
            $cart = Session::get("cartPr");
            for($a=0;$a<count($cart);$a++){
                if($cart[$a]->id == $id){
                    $cart[$a]->cart_qty = $request->get("quantity");
                    if($cart[$a]->cart_qty == 0){
                        unset($cart[$a]);
                    }
                    break;
                }
            }
            Session::put("cartPr",$cart);
        }
        return redirect()->back();

    }


    public function delCart($id)
    {
        if(Session::has("cartPr")){
            $cart = Session::get("cartPr");
            for($i=0;$i<count($cart);$i++){
                if($cart[$i]->id == $id){
                    unset($cart[$i]);
                    break;
                }
            }
            Session::put("cartPr",$cart);
        }
        return redirect()->back();
    }

    public function checkout()
    {
        if(!Session::has("cartPr")){
            return redirect()->to("/cart");
        }
        $cart = Session::get("cartPr");
        $grandTotal = 0;
        $shipping = 20;
        foreach ($cart as $item){
            $grandTotal += $item->cart_qty * $item->price;
        }
        $city = City::all();
       return view('user_views.checkout',[
           "cart"=>$cart,
           "grandTotal"=>$grandTotal,
           "shipping"=>$shipping,
           "cities" => $city
       ]);
    }


}
