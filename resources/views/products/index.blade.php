<x-app-layout>
	@include('partials.messages')
	<div class="grid bg-white border-b mx-auto my-auto px-4 py-4">
		<div class="grid grid-cols-6">
			<h1 class="text-bold lg:text-4xl col-span-5">My Products</h1>
			<a href="{{ route('product.create') }}" data-modal-target="staticModal" data-modal-toggle="staticModal"
				class="col-span-1 text-center inline-flex items-center px-4 py-2 bg-primary-600 dark:bg-gray-400 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
				Add New Product</a>
		</div>
		<hr>
		<div class="gird grid-cols-12 mt-2">

			<div class="relative overflow-x-auto">
				<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
					<thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
						<tr>
							<th scope="col-3" class="px-6 py-3">
								Product Name
							</th>
							<th scope="col" class="px-6 py-3">
								Cateegory
							</th>
							<th scope="col" class="px-6 py-3">
								Available Quantity
							</th>
							<th scope="col" class="px-6 py-3">
								Cost Price
							</th>
							<th scope="col" class="px-6 py-3">
								Selling Price
							</th>
							<th scope="col" class="px-6 py-3">
								Description
							</th>


							<th scope="col" class="px-6 py-3">
								Colors
							</th>
							<th scope="col" class="px-6 py-3">
								Keywords
							</th>
							<th scope="col" class="px-6 py-3">
								Edit
							</th>
						</tr>
					</thead>
					<tbody>
						@forelse ($products as $product)
							<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
								<th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
									{{ $product->name }}
								</th>
								<td class="px-6 py-4">
									{{ $product->category->name }}
								</td>
								<td class="px-6 py-4">
									{{ $product->quantity }}
								</td>
								<td class="px-6 py-4">
									{{ $product->cost_price }}
								</td>
								<td>
									{{ $product->price }}
								</td>
								<td class="px-6 py-4">
									{{ $product->description }}
								</td>

								<td class="px-6 py-4">
									{{ $product->colors }}
								</td>

								<td class="px-6 py-4">
									{{ $product->keywords }}
								</td>

								<td class="px-6 py-4">
									<a href="{{ route('product.edit', $product) }}" data-modal-target="staticModal" data-modal-toggle="staticModal"
										class="col-span-1 text-center inline-flex items-center px-4 py-2 bg-primary-600 dark:bg-gray-400 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
										Edit Product</a>
								</td>
							</tr>



						@empty
							<tr>
								<td colspan="7">
									<p class="text my-2 text-5xl mx-auto text-center w-full col-span-full text-black"> You have 0 Products
									</p>
								</td>
							</tr>
						@endforelse
					</tbody>
				</table>






			</div>
		</div>
	</div>
</x-app-layout>
