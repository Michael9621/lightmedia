<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('manage.blog.view')->with('blogs', Blog::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $featured = $request->featured;
        $featured_new_name = time().$featured->getClientOriginalName();
        $featured-> move('uploads/csr', $featured_new_name); 

        Blog::create([
            "title" => $request->title,   
            "slug" => str_slug($request->title),
            "featured" => 'uploads/csr/'.$featured_new_name,
            "posts" => $request->posts

        ]);

        return redirect()->route('view_csr');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('manage.blog.edit')->with('blog', $blog);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);

        if ($request->hasFile('featured')){
            $featured= $request->featured;
            $featured_new_name = time() . $featured->getClientOriginalName();
            $featured->move('uploads/csr', $featured_new_name);
            $blog->featured = 'uploads/csr/'.$featured_new_name;
        }

        $blog->title = $request->title;
        $blog->slug = str_slug($request->title);
        $blog->posts = $request->posts;
        $blog->save();

        return redirect()->route('view_csr');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect()->route('view_csr');
    }
}
