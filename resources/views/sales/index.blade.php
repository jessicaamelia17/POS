@extends('layouts.layout')

@section('title', 'Sales Transaction')

@section('content')
<div class="container">
    <h2 class="text-center">Sales Transaction</h2>
    <p class="text-center">Select a category and product you want to buy.</p>

    <!-- Category Dropdown -->
    <div class="mb-3">
        <label for="categorySelect" class="form-label">Select Category</label>
        <select id="categorySelect" class="form-select">
            <option value="" selected disabled>Choose a category</option>
            @foreach($categories as $category => $products)
                <option value="{{ $category }}">{{ $category }}</option>
            @endforeach
        </select>
    </div>

    <!-- Product Dropdown (Hidden Initially) -->
    <div class="mb-3" id="productSection" style="display: none;">
        <label for="productSelect" class="form-label">Select Product</label>
        <select id="productSelect" class="form-select">
            <option value="" selected disabled>Choose a product</option>
        </select>
    </div>

    <!-- Payment Button (Hidden Initially) -->
    <div class="text-center">
        <button id="proceedPayment" class="btn btn-success btn-lg" style="display: none;">Proceed to Payment</button>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const categorySelect = document.getElementById("categorySelect");
        const productSection = document.getElementById("productSection");
        const productSelect = document.getElementById("productSelect");
        const proceedPayment = document.getElementById("proceedPayment");

        // Data Produk dari Blade ke JavaScript
        const categories = @json($categories);

        categorySelect.addEventListener("change", function() {
            const selectedCategory = this.value;
            productSelect.innerHTML = '<option value="" selected disabled>Choose a product</option>';

            if (categories[selectedCategory]) {
                categories[selectedCategory].forEach(product => {
                    let option = document.createElement("option");
                    option.value = product.name;
                    option.textContent = `${product.name} - Rp${product.price.toLocaleString()}`;
                    productSelect.appendChild(option);
                });

                productSection.style.display = "block";
                proceedPayment.style.display = "none";
            }
        });

        productSelect.addEventListener("change", function() {
            proceedPayment.style.display = "block";
        });
    });
</script>
@endsection
