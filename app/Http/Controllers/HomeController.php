<?php

namespace App\Http\Controllers;

use App\Models\contact;
use App\Models\feedback;
use App\Models\latestBlog;
use App\Models\portfolio;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function Homeindex(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->validate([
                'name' => 'required|string|min:3',
                'email' => 'email|required',
                'subject' => 'required',
                'msg' => 'required|min:10'
            ]);
            contact::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'subject' => $data['subject'],
                'msg' => $data['msg'],
            ]);
            return back()->with('success', 'Thanks for connecting me! I will contact you soon');
        }
        $feed = feedback::get();
        $port = portfolio::get();
        $lblogs = latestBlog::get();
        return view('index', compact('feed', 'port', 'lblogs'));
    }
    public function feedback(Request $request)
    {
        try {
            $data = $request->validate([
                'name' => 'required|string|min:3',
                'image' => 'required|image|mimes:png,jpg,jpeg',
                'description' => 'required',
                'rating' => 'required',
            ]);
            if ($request->hasFile('image')) {
                $img = $request->file('image');
                $imgName = time() . '.' . $img->getClientOriginalExtension();
                $img->move(public_path('feedback'), $imgName);
                feedback::create([
                    'name' => $data['name'],
                    'image' => 'feedback/' . $imgName,
                    'description' => $data['description'],
                    'rating' => $data['rating'],
                ]);
                return back()->with('success', 'Thanks for your feedback');
            } else {
                return back()->with('error', 'Please Upload Your Image');
            }
        } catch (Exception $ex) {
            return back()->with('error', 'Somthing Went Wrong ' . $ex->getMessage());
        }
    }

    public function login(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);
            if(Auth::attempt($data)){
                return redirect()->route('index')->with('success','Welcome To Admin Dashboard');
            }else{
                return redirect()->route('login')->with('error','Invalid Credential');
            }
        }
        return view('login');
    }
}
