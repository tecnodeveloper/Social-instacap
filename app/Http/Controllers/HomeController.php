<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $post = Post::all();
        return view("Home.index",compact("post"));
    }
    public function upload(Request $request)
    {
        $data = new Post;
        $data->username = Auth::user()->name;
        $data->description=$request->description;
        $data->title=$request->title;
        $image=$request->image;
        if($image){
        $imagename= time().".".$image->getClientOriginalExtension();
        $request->image->move('post', $imagename);
        $data->image = $imagename;
        }
        $data->save();

        return redirect()->back();
    }
    public function viewPost(Request $request)
    {
        $name = Auth::user()->name;
        $post = Post::where('username',"=",$name)->get();
        return view("viewPost",compact('post'));
    }
    public function deletePost($id)
    {
        $data = post::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function updatePost(Request $request,$id)
    {
        $data = post::find($id);
        return view("updatePost",compact("data"));
    }
    public function confirmPost(Request $request, $id)
    {
        $post = post::find($id);
        $post->Description = $request->description;
        $post->title = $request->title;
        $image=$request->image;
        if($image){
        $imagename= time().".".$image->getClientOriginalExtension();
        $request->image->move('post', $imagename);
        $post->image = $imagename;
        }
        $post->save();
        $post->redirect()->back();
    }
}
