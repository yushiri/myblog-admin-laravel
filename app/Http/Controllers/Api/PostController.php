<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Post\StoreRequest;
use App\Http\Requests\Api\Post\UpdateRequest;
use App\Models\Image;
use App\Models\Post;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|Factory|View|Application
     */
    public function index()
    {
        $posts = Post::all();
        return view('api.post.index', compact('posts'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|Factory|View|Application
     */
    public function create()
    {
        return view('api.post.create');
    }

    /**
     * @param StoreRequest $request
     * @param Post $post
     * @param Image $image
     * @return RedirectResponse
     */
    public function store(StoreRequest $request, Post $post, Image $image)
    {
        $data = $request->validated();
        $previewImagePath = $request->file('preview_image')?->store('preview_image', ['disk' => 'public']);
        $post->update([$data, 'preview_image' => $previewImagePath]);
        $ImagesPath = $request->file('images[]')?->store('images', ['disk' => 'public']);
        $image->update(['path' => $ImagesPath]);

        return redirect()->route('posts.index');
    }

    public function edit(Post $post)
    {
        return view('api.post.edit', compact('post'));
    }

    public function update(UpdateRequest $request, Post $post)
    {
        $data = $request->validated();
        $post->update($data);
        return redirect()->route('posts.index');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}
