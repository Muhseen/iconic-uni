<x-app-layout>
	<div class="container mx-auto py-8 ">
		@include('partials.messages')
		<form class="max-w-lg mx-auto" enctype="multipart/form-data" method="POST" action="{{ route('product.store') }}">
			@csrf
			<div class="mb-4    ">
				<label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
				<input id="name" type="text"
					class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-indigo-500"
					placeholder="Product Name" name="name">
			</div>
			<div class="mb-4">
				<label for="category_id" class="block text-gray-700 text-sm font-bold mb-2">Category ID:</label>
				<select id="category_id" type="text" name="category_id"
					class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-indigo-500"
					placeholder="Category ID">
					@foreach ($categories as $c)
						<option value="{{ $c->id }}">{{ $c->name }}</option>
					@endforeach
				</select>
			</div>
			<div class="mb-4">
				<label for="quantity" class="block text-gray-700 text-sm font-bold mb-2">Quantity:</label>
				<input id="quantity" type="number" name="quantity"
					class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-indigo-500"
					placeholder="Quantity">
			</div>
			<div class="mb-4">
				<label for="price" class="block text-gray-700 text-sm font-bold mb-2">Price:</label>
				<input id="price" type="text" name="price"
					class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-indigo-500"
					placeholder="Price">
			</div>
			<div class="mb-4">
				<label for="cost_price" class="block text-gray-700 text-sm font-bold mb-2">Cost Price:</label>
				<input id="cost_price" type="text" name="cost_price"
					class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-indigo-500"
					placeholder="Cost Price">
			</div>
			<div class="mb-4">
				<label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
				<textarea id="description" name="description"
				 class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-indigo-500"
				 placeholder="Product Description"></textarea>
			</div>
			<div class="mb-4">
				<label for="colors" class="block text-gray-700 text-sm font-bold mb-2">Colors:</label>
				<input id="colors" type="text" name="colors"
					class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-indigo-500"
					placeholder="Colors">
			</div>
			<div class="mb-4">
				<label for="keywords" class="block text-gray-700 text-sm font-bold mb-2">Keywords:</label>
				<input id="keywords" type="text" name="keywords"
					class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-indigo-500"
					placeholder="Keywords">
			</div>
			<div class="flex justify-center">
				<button type="submit" class="bg-indigo-500 text-white px-4 py-2 rounded hover:bg-indigo-700">Create
					Product</button>
			</div>
		</form>
	</div>

</x-app-layout>
