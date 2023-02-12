<?php

namespace App\Repositories\Product;

use App\Http\Requests\ProductRequest;

interface ProductInterface {
    public function findById($id);
    public function getAll();
    public function execute(array $data);
    
}