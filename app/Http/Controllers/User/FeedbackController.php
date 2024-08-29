<?php

namespace App\Http\Controllers\User;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FeedbackController extends Controller
{
    function contact(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=> 'email',
            'phone'=>'required',
            'title'=>'required',
            'content'=>'required'
        ],[
            'name.required'=>'Tên không được để trống',
            'email.email'=>'Không đúng định dạng email',
            'phone.required'=>'SDT không được để trống',
            'title.required'=>'Tiêu đề không được để trống',
            'content.required'=>'Nội dung không được để trống',
        ]);
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->address = $request->address;
        $contact->phone = $request->phone;
        $contact->title = $request->title;
        $contact->content = $request->content;
        $contact->save();
        return redirect()->route('contact')->with('mess','Gửi thành công');
    }
}
