<?php

namespace App\Http\Controllers;

use App\Models\contact;
use App\Models\feedback;
use App\Models\latestBlog;
use App\Models\portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index(){
        if(Auth::check()){
            return view('admin.index');
        }else{
            return view('login');
        }
    }

    public function contact(){
        $data = contact::get();
        return view('admin.all-contact',compact('data'));
    }

    public function deleteCon($id){
        $res = contact::find($id);
        $res->delete();
        return back()->with('success','Record Deleted');
    }

    public function addportfolio(Request $request){
        if($request->isMethod('post')){
            $data = $request->validate([
                'title' => 'required|string',
                'description' =>'required',
                'btnName' => 'required',
                'image' => 'image|required|mimes:png,jpg,jpeg'
            ]);
            if ($request->hasFile('image')) {
                $img = $request->file('image'); 
                $fileName = time().'.'.$img->getClientOriginalExtension();
                $img->move(public_path('portfolio'),$fileName);
                portfolio::create([
                    'title' => $data['title'],
                    'description' => $data['description'],
                    'btnName' => $data['btnName'],
                    'image' => 'portfolio/'.$fileName
                ]);
                return back()->with('success','Portfolio Added Successfully');
            }
            
        }
        return view('admin.addPortFolio');
    }
    public function allPortFolio(){
        $data = portfolio::get();
        return view('admin.all-portfolio',compact('data'));
    }

    public function deletePortfolio($id){
        $res = portfolio::find($id);
        $oldimage = $res->image;
        if ($oldimage && file_exists(public_path($oldimage))) {
            unlink(public_path($oldimage));
        }
        $res->delete();
        return back()->with('success','Portfolio Deleted');
    }

    public function addLatestBlog(Request $request){
        if($request->isMethod('post')){
            $data = $request->validate([
                'title' => 'required|string',
                'description' =>'required',
                'date' => 'required',
                'image' => 'image|required|mimes:png,jpg,jpeg'
            ]);
            if ($request->hasFile('image')) {
                $img = $request->file('image'); 
                $fileName = time().'.'.$img->getClientOriginalExtension();
                $img->move(public_path('latestBlog'),$fileName);
                latestBlog::create([
                    'title' => $data['title'],
                    'description' => $data['description'],
                    'date' => $data['date'],
                    'image' => 'latestBlog/'.$fileName
                ]);
                return back()->with('success','Blog Added Successfully');
            }
        }
        return view('admin.addLatestBlog');
    }

    public function allLatestBlogs(){
        $data = latestBlog::get();
        return view('admin.all-latest-blogs',compact('data'));
    }

    public function deleteBlogs($id){
        $res = latestBlog::find($id);
        $oldimage = $res->image;
        if($oldimage && file_exists(public_path($oldimage))){
            unlink(public_path($oldimage));
        }
        $res->delete();
        return back()->with('success','Blog Deleted');
    }

    public function allfeedback(){
        $data = feedback::get();
        return view('admin.all-feedback',compact('data'));
    }

    public function deleteFeed($id){
        $res = feedback::find($id);
        $oldimg = $res->image;
        if($oldimg && file_exists(public_path($oldimg))){
            unlink(public_path($oldimg));
        }
        $res->delete();
        return back()->with('success','Feedback Deleted');
    }

    public function approve(Request $request, $id) {
        $feedback = feedback::find($id);
        if (!$feedback) {
            return back()->with('error', 'Feedback not found!');
        }
        $feedback->update([
            'aprove' => $request->aprove
        ]);
        return back()->with('success', 'Feedback Updated!');
    }
    public function logout(){
        Session::flush();
        Auth::logout();
        return to_route("Homeindex")->with("success","Logout Successfully");
    }
}
