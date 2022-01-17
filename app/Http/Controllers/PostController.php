<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Cviebrock\EloquentSluggable\Services\SlugService;
use App\Models\Post;

class PostController extends Controller
{
    public function post(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        $post->user_id = $request->user_id;
        $post->save();
        return response()->json($post);
    }
}
