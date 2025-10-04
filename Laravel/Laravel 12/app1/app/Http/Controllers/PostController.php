<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all()->map(function ($post) {
            return [
                'id' => $post->id,
                'title' => $post->title,
                'contect' => $post->contect,
                // 'created_at' => $post->created_at->diffForHumans(),
                'created_at' => $post->created_at->format('Y-m-d H:i:s'),
                'image' => $post->image,
            ];
        });

        return Inertia::render('Posts/Index', [
            // 'posts' => Post::with('user')->get(),
            'posts' => $posts,
        ]);
    }

    public function create()
    {
        return Inertia::render('Posts/Create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'contect' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image ? $image->store('post', 'public') : null;
        }

        Post::create([
            'title' => $request->title,
            'contect' => $request->contect,
            'user_id' => $request->user()->id,
            'image' => $imagePath,
        ]);

        return back()->with('success', 'Post created successfully.');
    }

    public function edit(Post $post)
    {
        return Inertia::render('Posts/Edit', [
            'post' => $post,
        ]);
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'contect' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            if ($post->image) {
                Storage::disk('public')->delete($post->image);
            }
            $image = $request->file('image');
            $imagePath = $image ? $image->store('post', 'public') : null;
        }

        $post->update([
            'title' => $request->title,
            'contect' => $request->contect,
            'image' => $imagePath,
        ]);

        return back()->with('success', 'Post updated successfully.');
    }

    public function destroy(Post $post)
    {
        if ($post->image) {
            Storage::disk('public')->delete($post->image);
        }
        $post->delete();

        return back()->with('success', 'Post deleted successfully.');
    }
}

