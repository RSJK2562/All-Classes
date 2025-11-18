<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $posts = Post::select('id', 'title', 'body')->get();
            return response()->json($posts);
        } catch (\Throwable $th) {
            return response()->json([
                'error' => 'Server error',
                'message' => $th->getMessage(),
            ], 500);
        }
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
        try {
            // Validation
            $data = $request->validate([
                'title' => 'required|string|max:255',
                'body'  => 'required|string',
            ]);

            $post = Post::create($data);

            return response()->json($post, 201);
        } catch (ValidationException $e) {
            return response()->json($e->errors(), 422);
        } catch (\Throwable $th) {
            return response()->json([
                'error' => 'Server error',
                'message' => $th->getMessage(),
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $post = Post::find($id);

            if (!$post) {
                return response()->json(['error' => 'Post not found'], 404);
            }

            return response()->json($post);
        } catch (\Throwable $th) {
            return response()->json([
                'error' => 'Server error',
                'message' => $th->getMessage(),
            ], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            // Validation
            $data = $request->validate([
                'title' => 'sometimes|required|string|max:255',
                'body'  => 'sometimes|required|string',
            ]);

            $post = Post::find($id);

            if (!$post) {
                return response()->json(['error' => 'Post not found'], 404);
            }

            $post->update($data);

            return response()->json($post);
        } catch (ValidationException $e) {
            return response()->json($e->errors(), 422);
        } catch (\Throwable $th) {
            return response()->json([
                'error' => 'Server error',
                'message' => $th->getMessage(),
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $deleted = Post::destroy($id);

            if (!$deleted) {
                return response()->json(['error' => 'Post not found'], 404);
            }

            return response()->json(['message' => 'Post deleted']);
        } catch (\Throwable $th) {
            return response()->json([
                'error' => 'Server error',
                'message' => $th->getMessage(),
            ], 500);
        }
    }
}
