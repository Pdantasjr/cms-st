<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Inertia\Inertia;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Blog::all();
        return Inertia::render('Blog/Index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Blog/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());


        $validated = $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'post_content' => 'required',
            'author' => 'required',
            'category' => 'required',
        ]);

        if(!$validated) {
            dd($validated);
//            return Redirect::route('blog.create');
        }

        $post = New Blog();
        $slug = $this->setSlug($request->title);

        $post->title = $request->title;
        $post->slug = $slug;
        $post->subtitle = $request->subtitle;
        $post->post_content = $request->post_content;
        $post->author = $request->author;
        $post->category = $request->category;
        $post->post_image_name = 'kjasjdlskaj/alguma.jpg';
        $post->save();

//        Blog::create($request->all());

        return Redirect::route('blog.index');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function setSlug($title) {
        $titleSlug = Str::slug($title);

        $query = Blog::all();

        $t = 0;
        foreach ($query as $post) {
            if (Str::slug($post->title) === $titleSlug) {
                $t++;
            }
        }

        if ($t > 0) {
            $titleSlug = $titleSlug . '-' . $t;
        }

        return $titleSlug;
    }
}
