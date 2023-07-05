<x-app-layout>
	<div class="container mx-auto py-8 ">
		@include('partials.messages')
		<form class="max-w-lg mx-auto" enctype="multipart/form-data" method="POST" action="{{ route('category.store') }}">
			@csrf
			<div class="mb-4    ">
				<label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
				<input id="name" type="text"
					class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-indigo-500"
					placeholder="Category Name" name="name">
			</div>

			<div class="flex justify-center">
				<button type="submit" class="bg-indigo-500 text-white px-4 py-2 rounded hover:bg-indigo-700">Create
					Category</button>
			</div>
		</form>
	</div>

</x-app-layout>
