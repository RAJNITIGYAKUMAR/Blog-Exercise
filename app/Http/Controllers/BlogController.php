<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class BlogController extends Controller
{
    function BlogSubmit(Request $req)
    {
        $blog=new Blog;
        $blog->title=$req->title;
        $blog->desc=$req->desc;
        $blog->userid=$req->userid;
        $blog->save();
        return redirect('blog');
    }
    function delete($id){
        blog::find($id)->delete();

        return redirect('/blog');
    }

    function home()
    {
       $data=DB::table('blogs')->paginate(8);
        return view("welcome",['blogs'=>$data]);
    }

    function profile()
    {
        if(session()->has('user'))
        {
            $data= DB::table('blogs')
            ->where('userid',123)
            ->paginate(8);
            return view("profile",['blogs'=>$data]);
        }
        else{
            return redirect ('login');
        }
        
       
    }
}
