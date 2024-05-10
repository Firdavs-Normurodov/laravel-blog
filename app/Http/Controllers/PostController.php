<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $posts = Post::all();
        // $posts = Post::where('id', '1')->get();
        // $posts = Post::where('id', '1')->first();
        // $posts = Post::find(2);
        // dd($posts);

        // $newPost = new Post();
        // $newPost->title = 'new post';
        // $newPost->short_content = 'new short_content';
        // $newPost->content = 'new content';
        // $newPost->photo = '/storage/new_post.jpg';
        // $newPost->save();


        // $newUser = Post::create([
        //     'title' => 'sarlavha ',
        //     'short_content' => 'show_content 21',
        //     'content' => 'content 54',
        //     'photo' => '/image/post.jpg',
        // ]);

        // $post = Post::find(7);
        // $post->title = "o'zgartirilgan sarlavha";
        // $post->save();

        // $post = Post::find(7)->update(['title' => "yangilanish"]);

        //delete
        // $flight = Post::find(12); //1-yo'l
        // $flight = Post::where('id', 11)->first();


        // $flight->delete();
        // Post::destroy(3);
        Post::withTrashed()->find(3)->restore();
        $posts = Post::all();
        dd($posts);
        return 'deleted';
        // return view('posts.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
