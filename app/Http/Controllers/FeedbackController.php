<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function all(){
        $feedback =Feedback::all();
        $num = 1;
        return view('admin_views.feedback.list',[
            'feedback'=>$feedback,
            "num" =>$num
        ]);
    }
    public function feedback(Request $request)
    {
        try{
            Feedback::create([
                "name"=>$request->get("name"),
                "phone"=>$request->get("phone"),
                "email"=>$request->get("email"),
                "feedback"=>$request->get("feedback")
            ]);
            return redirect()->to("/success");
        }catch (\Exception $e){
            return redirect()->to("/fail");
        }

    }

}
