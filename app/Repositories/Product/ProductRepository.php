<?php

namespace App\Repositories\Product;

use App\Http\Requests\ProductRequest;
use App\Repositories\Product\ProductInterface as ProductInterface;
use App\Models\Product;

class ProductRepository implements ProductInterface{
    
    protected $product;
    
    public function __construct(Product $product)
    {
        $this->product = $product;
    }
    public function findById($id)
    {
        return $this->product->find($id);
    }
    public function getAll()
    {
        return $this->product->all();
    }
    public function execute(array $data): Product
    {
        try {
            return Product::create($data); 
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}