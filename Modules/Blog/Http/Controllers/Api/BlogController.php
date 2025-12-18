<?php

namespace Modules\Blog\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Traits\ImagesUtility;
use Illuminate\Support\Facades\Storage;
use Modules\Blog\Entities\Blog;
use Modules\Blog\Http\Requests\BlogRequest;
use Modules\Blog\Transformers\BlogResource;

class BlogController extends Controller
{
    use ImagesUtility;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return BlogResource::collection($blogs);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogRequest $request)
    {
        $validatedRequestData = $request->validated();
        $storedBlogImage = $this->storeImage($validatedRequestData['image'], 'blog');
        $validatedRequestData['image'] = $storedBlogImage;
        $validatedRequestData['blog'] = str_replace('target="_blank"', '', $validatedRequestData['blog']);
        $createdBlog = Blog::create($validatedRequestData);
        return new BlogResource($createdBlog);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $blog)
    {
        return $blog ? new BlogResource(Blog::findOrFail($blog)) :  response(['message' => 'Blog Not Found'], 404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BlogRequest $request, string $blog)
    {
        $blog = Blog::findOrFail($blog);
        $blogValidatedData = $request->validated();
        if ($blogValidatedData['image'] ?? false) {
            if ($blog->image ?? false) {
                $relativePath = $this->getRelativePath($blog->image);
                Storage::delete($relativePath);
            }
            $blogValidatedData['image'] = $this->storeImage($blogValidatedData['image'], 'blog');
        } else {
            $blogValidatedData['image'] = $blog['image'];
        }
        $blogValidatedData['blog'] = str_replace('target="_blank"', '', $blogValidatedData['blog']);
        $blog->update($blogValidatedData);
        return new BlogResource($blog);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $blog)
    {
        Blog::findOrFail($blog)->delete();
        return response(['message' => 'Blog deleted successfully'], 200);
    }
}
