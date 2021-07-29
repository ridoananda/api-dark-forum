<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Http\Requests\PostRequest;
use App\Http\Resources\PostResource;

class PostController extends Controller
{
  public function index()
  {
    return PostResource::collection(Post::all());
  }

  public function store(PostRequest $request)
  {
    $attr = $request->all();
    $thumbnail = request()->file('thumbnail')->store('/img/post/thumbnail');
    $attr['thumbnail'] = $thumbnail;
    $attr['slug'] = \Str::slug(request('title'));
    $post = Post::create($attr);
    return response()->json($post, 201);
  }

  public function show(Post $post)
  {
    return new PostResource($post);
  }

  public function update(PostRequest $request, Post $post)
  {
    $attr = $request->all();
    if (request()->file('thumbnail')) {
      \Storage::delete($post->thumbnail);
      $thumbnail = request()->file('thumbnail')->store('img/post/thumbnail');
    } else {
      $thumbnail = $post->thumbnail;
    }
    $attr['thumbnail'] = $thumbnail;
    $post = $post->update($attr);
    return response()->json($post, 200);
  }

  public function destroy(Post $post)
  {
    \Storage::delete($post->thumbnail);
    Post::where('slug', $post->slug)->delete();
    return response()->json(['message' => 'The post was deleted.'], 200);
  }
}
