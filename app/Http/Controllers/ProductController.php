<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Product\ProductRepository;
class ProductController extends Controller
{
    //
    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function index()
    {
        $data = [
            'name' => 'Tivi 2',
            'price' => 4.5,
            'quantity' => 11,
            'status' => true,
            'description' => 'good'
        ];
        $data = [
            'product' => $this->productRepository->create($data)
        ];
        return view('welcome')->with($data);
    }
}
