@extends('layouts.shop')
@section('content')
	<div class="bg-gray-100">
		<header class="bg-indigo-500 text-white py-4">
			<div class="container mx-auto flex items-center justify-between px-4">
				<h1 class="text-2xl font-bold">Iconic E-Store</h1>
				<button class="bg-white text-indigo-500 px-4 py-2 rounded hover:bg-indigo-100">View Cart</button>
			</div>
		</header>

		<main class="container mx-auto py-8">
			<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
				@foreach ($products as $product)
					<x-product-item></x-product-item>
				@endforeach
			</div>
		</main>

		{{-- <footer class="bg-gray-800 text-white py-4">
			<div class="container mx-auto flex items-center justify-center">
				<p>&copy; 2023 Iconic-Store. All rights reserved.</p>
			</div>
		</footer> --}}
	</div>
@endsection()
