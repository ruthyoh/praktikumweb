<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display the product details.
     *
     * @param int|null $id
     * @return \Illuminate\View\View
     */
    public function listProduct($id = null)
    {
        // Default product data
        $product = $id ? "Product with ID $id" : "Default Product";
        
        // Pass data to the view
        return view('list_product', [
            'id' => $id ?? 'N/A',
            'product' => $product,
        ]);
    }
}