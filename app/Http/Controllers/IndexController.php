<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Genre;
use App\Models\Country;
use App\Models\Movie;
use App\Models\Episode;

class IndexController extends Controller
{
        public function home(){
            $category = Category::orderBy('id','DESC')->where('status',1)->get();
            $genre = Genre::orderBy('id','DESC')->get();
            $country = Country::orderBy('id','DESC')->get();
            $category_home = Category::with('movie')->orderBy('id','DESC')->where('status',1)->get();

            return view('pages.home',compact('category','genre','country','category_home'));
        }
        public function category($slug){
            $category = Category::orderBy('id','DESC')->where('status',1)->get();
             $genre = Genre::orderBy('id','DESC')->get();
             $country = Country::orderBy('id','DESC')->get();
             $cate_slug = Category::where('slug',$slug)->first();
            return view('pages.category',compact('category','genre','country','cate_slug'));
        }public function genre($slug){
             $category = Category::orderBy('id','DESC')->where('status',1)->get();
             $genre = Genre::orderBy('id','DESC')->get();
             $country = Country::orderBy('id','DESC')->get();
             $genre_slug = Genre::where('slug',$slug)->first();
            return view('pages.genre',compact('category','genre','country','genre_slug'));
        }public function country($slug){
             $category = Category::orderBy('id','DESC')->where('status',1)->get();
             $genre = Genre::orderBy('id','DESC')->get();
             $country = Country::orderBy('id','DESC')->get();
             $country_slug = Country::where('slug',$slug)->first();
            return view('pages.country',compact('category','genre','country','country_slug'));
        }public function movie(){
            return view('pages.movie');
        }public function watch(){
            return view('pages.watch');}
        public function episode(){
            return view('pages.episode');
}
}
