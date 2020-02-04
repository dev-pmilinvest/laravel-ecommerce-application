<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contracts\CategoryContract;



class CategoryController extends Controller
{
    protected $categoryRepository;
    protected $productRepository;

    public function __construct(CategoryContract $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function show($slug)
    {
        $category = $this->categoryRepository->findBySlug($slug);

        return view('site.pages.category', compact('category'));
    }

    // on n'utilise pas la home page car il n'y a qu'une seule catégorie.
    public function home()
    {
        $category = $this->categoryRepository->findBySlug('argel7');
        // $product = $this->productRepository->listProducts();

        return view('site.pages.category', compact('category'));
    }
}
