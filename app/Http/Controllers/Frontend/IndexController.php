<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feedback;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
// use \Illuminate\Http\Response;
use Mail;
 
use App\Mail\NotifyMail;


class IndexController extends Controller
{

    public function index()
    {
        return view('frontend/index');
    }


     public function contact()
    {
        return view('frontend/contact');
    }


 /**Store Profile */
    public function contactStore(Request $request){

          $rules = [
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|integer|digits:10'
        ];

        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {
            return redirect()->route('contact.store')->withErrors($validator);
        }
        else{
            $data = $request->input();
            try{
                $datas = new Feedback;
                $datas->name = $data['name'];
                $datas->email = $data['email'];
                $datas->phone = $data['phone'];
                $datas->subject = $data['subject'];
                $datas->message = $data['message'];
                $datas->save();
                /**Notify Mail  */
                Mail::to($data['email'])->send(new NotifyMail());

                $notification =array(
                    'message' => 'Contact Updated Successfully',
                    'alert-type' => 'success'
                );
                 return redirect()-> route('contact.store')->with($notification);
            }
            catch(Exception $e){
                // return redirect()->route('contact.store')->with('failed',"operation failed");
                return redirect()-> route('contact.store')->with($notification);
            }

        }//End of else Method

    }//End of Method


}
