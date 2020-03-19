<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Career;
use App\Contact;
use App\Blog;

class FrontEndController extends Controller
{
    public function index(){
        return view('home');
    }

    public function about(){
        return view('about')->with('about', About::first());
    }

    public function careers(){
        return view ('careers')->with('careers', Career::all());
    }

    public function contactus(){
        return view('contact')->with('contacts', Contact::all());
    }

    public function csr(){
        return view('csr')->with('blogs', Blog::all());
    }
}
