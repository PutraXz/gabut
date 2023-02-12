<?php

namespace App\Http\Controllers;

use App\Repositories\Product\ProductInterface;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $productRepository;

    public function __construct(ProductInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }
    public function index()
    {
        return $product = $this->productRepository->getAll();
    }
    public function find($id)
    {
        return $product = $this->productRepository->findById($id);
    }
}
