<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function foodBeverage()
    {
        $products = [
            ['name' => 'Kopi Hitam', 'price' => 15000],
            ['name' => 'Teh Hijau', 'price' => 12000],
            ['name' => 'Roti Gandum', 'price' => 20000],
        ];
        return view('products.food-beverage', compact('products'));
    }

    public function beautyHealth()
    {
        $products = [
            ['name' => 'Face Wash', 'price' => 25000],
            ['name' => 'Shampoo Herbal', 'price' => 30000],
            ['name' => 'Hand Sanitizer', 'price' => 10000],
        ];
        return view('products.beauty-health', compact('products'));
    }

    public function homeCare()
    {
        $products = [
            ['name' => 'Sabun Cuci Piring', 'price' => 18000],
            ['name' => 'Pewangi Ruangan', 'price' => 22000],
            ['name' => 'Pel Lantai', 'price' => 15000],
        ];
        return view('products.home-care', compact('products'));
    }

    public function babyKid()
    {
        $products = [
            ['name' => 'Popok Bayi', 'price' => 50000],
            ['name' => 'Susu Formula', 'price' => 75000],
            ['name' => 'Mainan Edukasi', 'price' => 30000],
        ];
        return view('products.baby-kid', compact('products'));
    }
}

