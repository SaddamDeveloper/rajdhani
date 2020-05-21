<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Event;
use App\Gallery;
use App\Blog;
class PagesController extends Controller
{
    public function index()
    {
      $news=News::OrderBy('id','DESC')->get();
      $events=Event::paginate(2);

      return view('welcome',compact('news','events'));
    }
    public function contact() {
      return view('frontend.contents.contact');
    }


    public function about()
     {
      return view('frontend.contents.about');
    }
    public function our_school()
     {
      return view('frontend.contents.our_school');
    }
    public function facilities()
     {
      return view('frontend.contents.facilities');
    }
    public function more()
     {
      return view('frontend.contents.more');
    }


    public function courses()
     {
      return view('frontend.contents.courses');
    }
    public function results()
     {
      return view('frontend.contents.results');
    }
    public function exam()
     {
      return view('frontend.contents.exam');
    }

    public function ad_procedure()
     {
      return view('frontend.contents.admission_procedure');
    }
    public function registration()
     {
      return view('frontend.contents.registration');
    }
    public function process()
     {
      return view('frontend.contents.process');
    }
    public function tour()
     {
      return view('frontend.contents.tour');
    }


    public function gallery() {

      $galleries=Gallery::orderby('id','DESC')->get();
     return view('frontend.contents.gallery', compact('galleries'));
    }

    public function blogs(){
      $blogs = Blog::limit(6)->where('status', 1)->get();
      return view("frontend.blog.blogs", compact('blogs'));
    }

    public function getBlogs($slug, $id){
      $single_blog = Blog::where('id', $id)->first();
      $latestBlog = Blog::latest()->limit(10)->get();
      return view('frontend.blog.blog_detail', compact('single_blog', 'latestBlog'));
    } 
}
