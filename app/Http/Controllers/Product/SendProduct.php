<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Repositories\Product\ProductInterface;
use Illuminate\Http\Request;

class SendProduct extends Controller
{
    private $productRepository;

    public function __construct(ProductInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function __invoke(ProductRequest $data)
    {
        try {
            return $product = $this->productRepository->execute($data->toArray());
            dd($product);
        } catch (\Throwable $th) {
            throw $th;
        }
       
    }
}
