<?php

namespace Modules\Gallery\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Traits\ImagesUtility;
use Modules\Gallery\Entities\Gallery;
use Modules\Gallery\Http\Requests\GalleryRequest;
use Modules\Gallery\Transformers\GalleryResource;

class GalleryController extends Controller
{
    use ImagesUtility;

    public function index()
    {
        $galleries = Gallery::paginate(10);

        return GalleryResource::collection($galleries);
    }

    public function show(Gallery $gallery)
    {
        return new GalleryResource($gallery);
    }

    public function store(GalleryRequest $request)
    {
        $data = $request->validated();

        $data['image'] = $this->storeImage($data['image'], 'gallery');
        Gallery::create($data);

        return response()->json([
            'message' => 'Gallery image created successfully'
        ], 201);
    }

    public function update(GalleryRequest $request, Gallery $gallery)
    {
        $data = $request->validated();
        (isset($data['image'])) ? $data['image'] = $this->storeImage($data['image'], 'gallery') : null;
        $gallery->update($data);
        return response()->json([
            'message' => 'Gallery image updated successfully'
        ], 200);
    }

    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        return response()->noContent();
    }
}
