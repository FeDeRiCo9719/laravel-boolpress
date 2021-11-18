<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Str;


class PostController extends Controller
{
    
    /** ----------------------------------------------------------------------
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }

    /** ----------------------------------------------------------------------
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /** ----------------------------------------------------------------------
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation
        $request->validate([
            'title' => 'string|required|max:100',
            'content' => 'string|required'
        ]);

        $data = new Post();
        $data->fill($request->all());
        $slug = Str::of($request->title)->slug('-');
        $data->slug = $slug;
        $data->save();

        return redirect()->route("admin.posts.index");
        
    }

    /** ----------------------------------------------------------------------
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }

    /** ----------------------------------------------------------------------
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    /** ----------------------------------------------------------------------
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        // dd($request->all());
        // validation
        $request->validate([
            'title' => 'string|required|max:100',
            'content' => 'string|required'
        ]);


        $data = $request->all();
        $post->update($data);

        // return view('admin.posts.show', $post->id);
        return redirect()->route("admin.posts.show", $post->id);
    }

    /** ----------------------------------------------------------------------
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.posts.index')->with('info',"Post {$post['id']} has been removed.");
    }
}
