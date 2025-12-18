<?php

namespace Modules\Tour\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Category\Entities\Category;
use Modules\Category\Services\CategoryService;
use Modules\Review\Entities\Review;
use Modules\Tour\Entities\Tour;
use Modules\Tour\Service\TourService;
use Modules\Tour\Traits\TourUtility;

class TourPackageController extends Controller
{
    use TourUtility;

    public function __construct(protected TourService $tourService, protected CategoryService $categoryService) {}

    public function index()
    {
        $categories = $this->categoryService->getCategoriesByType('tour-packages');
        return view('tour::tour-package-index', compact('categories'));
    }


    public function view($category)
    {
        [$tours, $category] = $this->tourService->getToursAndCategoryByCategoryType($category);
        return view('tour::view', compact('tours', 'category'));
    }


    public function show($category, $tour)
    {
        $tour = $this->tourService->getTourBySlug($tour);
        return view('tour::tour', compact('tour'));
    }
}
