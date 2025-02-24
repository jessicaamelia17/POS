<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index()
    {
        $categories = [
            'Food & Beverage' => [
                ['name' => 'Kopi Hitam', 'price' => 15000],
                ['name' => 'Teh Hijau', 'price' => 12000],
                ['name' => 'Roti Gandum', 'price' => 20000]
            ],
            'Beauty & Health' => [
                ['name' => 'Face Wash', 'price' => 25000],
                ['name' => 'Shampoo Herbal', 'price' => 30000],
                ['name' => 'Hand Sanitizer', 'price' => 10000]
            ],
            'Home Care' => [
                ['name' => 'Sabun Cuci Piring', 'price' => 18000],
                ['name' => 'Pewangi Ruangan', 'price' => 22000],
                ['name' => 'Pel Lantai', 'price' => 15000]
            ],
            'Baby & Kid' => [
                ['name' => 'Popok Bayi', 'price' => 50000],
                ['name' => 'Susu Formula', 'price' => 75000],
                ['name' => 'Mainan Edukasi', 'price' => 30000]
            ]
        ];

        return view('sales.index', compact('categories'));
    }
}

