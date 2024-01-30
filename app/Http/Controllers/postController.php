<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Gate;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function posts()
    {
        $posts = Post::all();
        return view('blog', compact('posts'));
    }

    public function create()
    {
        if (Gate::denies('accessPost')) {
            abort(403, 'Unauthorized');
        }
        return view('create');
    }

    public function store(Request $request)
    {
        if (Gate::denies('accessPost')) {
            abort(403, 'Unauthorized');
        }

        $validatedData = $request->validate([
            'title' => 'required',
            'author'=>'required',
            'description' => 'required',
            'image_url' => 'required|url',
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images', $imageName);
            $validatedData['image'] = $imageName;
        }
        $post = new Post($validatedData);
        $post->save();

        return redirect()->route('blog')->with('success', 'Post has been created.');
    }

    public function edit(Post $post)
    {
        if (Gate::denies('accesspost')) {
            abort(403, 'Unauthorized');
        }

        return view('edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {

        if (Gate::denies('accessPosts')) {
            abort(403, 'Unauthorized');
        }

        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
            'image_url' => 'required|url',
        ]);

        $post->update($request->all());

        return redirect()->route('blog')->with('success', 'post has been updated.');
    }

    public function destroy(Post $post)
    {
        if (Gate::denies('accessPost')) {
            abort(403, 'Unauthorized');
        }

        $post->delete();

        return redirect()->route('blog')->with('success', 'post has been deleted.');
    }
}