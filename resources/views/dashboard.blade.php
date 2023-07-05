<x-app-layout>
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 leading-tight">
			{{ __('Dashboard') }}
		</h2>
	</x-slot>

	<div class="py-12">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
				<div class="p-6 text-gray-900">
					{{ __("You're logged in!") }}

					<div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
						<div class="md:flex">
							<div class="md:flex-shrink-0">
								<img class="h-48 w-full object-cover md:w-48" src="product-image.jpg" alt="Product Image">
							</div>
							<div class="p-8">
								<div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Product Category</div>
								<a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Product
									Title</a>
								<p class="mt-2 text-gray-500">Product Description</p>
								<div class="mt-4 flex items-center">
									<div class="flex items-center">
										<svg class="h-5 w-5 fill-current text-yellow-500" viewBox="0 0 20 20">
											<path
												d="M10 12.585L16.242 16l-1.455-6.005L18 7.054l-6.05-.523L10 1 7.05 6.531 1 7.055l3.213 2.94L3.758 16 10 12.585z">
											</path>
										</svg>
										<svg class="h-5 w-5 fill-current text-yellow-500" viewBox="0 0 20 20">
											<path
												d="M10 12.585L16.242 16l-1.455-6.005L18 7.054l-6.05-.523L10 1 7.05 6.531 1 7.055l3.213 2.94L3.758 16 10 12.585z">
											</path>
										</svg>
										<svg class="h-5 w-5 fill-current text-yellow-500" viewBox="0 0 20 20">
											<path
												d="M10 12.585L16.242 16l-1.455-6.005L18 7.054l-6.05-.523L10 1 7.05 6.531 1 7.055l3.213 2.94L3.758 16 10 12.585z">
											</path>
										</svg>
										<svg class="h-5 w-5 fill-current text-gray-400" viewBox="0 0 20 20">
											<path
												d="M10 12.585L16.242 16l-1.455-6.005L18 7.054l-6.05-.523L10 1 7.05 6.531 1 7.055l3.213 2.94L3.758 16 10 12.585z">
											</path>
										</svg>
										<svg class="h-5 w-5 fill-current text-gray-400" viewBox="0 0 20 20">
											<path
												d="M10 12.585L16.242 16l-1.455-6.005L18 7.054l-6.05-.523L10 1 7.05 6.531 1 7.055l3.213 2.94L3.758 16 10 12.585z">
											</path>
										</svg>
									</div>
									<div class="ml-2 text-sm text-gray-500">4.5 (250)</div>
								</div>
								<div class="mt-4 flex items-center">
									<div class="text-2xl font-semibold text-gray-900">$29.99</div>
									<div class="ml-2 text-sm text-gray-500">In stock</div>
								</div>
								<div class="mt-4 flex items-center">
									<div class="flex items-center">
										<label for="quantity" class="mr-2">Quantity:</label>
										<input id="quantity" type="number"
											class="rounded-lg px-3 py-1 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500">
									</div>
									<button
										class="ml-4 bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
										Add to Cart
									</button>
								</div>
							</div>
						</div>
					</div>
					<div class="container mx-auto">
						<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
							<div class="max-w-full sm:max-w-md bg-white rounded-xl shadow-md overflow-hidden">
								<div class="md:flex">
									<div class="md:flex-shrink-0">
										<img class="h-48 w-full object-cover md:w-48" src="product-image.jpg" alt="Product Image">
									</div>
									<div class="p-8">
										<div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Product Category</div>
										<a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Product
											Title</a>
										<p class="mt-2 text-gray-500">Product Description</p>
										<div class="mt-4 flex items-center">
											<div class="flex items-center">
												<svg class="h-5 w-5 fill-current text-yellow-500" viewBox="0 0 20 20">
													<path
														d="M10 12.585L16.242 16l-1.455-6.005L18 7.054l-6.05-.523L10 1 7.05 6.531 1 7.055l3.213 2.94L3.758 16 10 12.585z">
													</path>
												</svg>
												<svg class="h-5 w-5 fill-current text-yellow-500" viewBox="0 0 20 20">
													<path
														d="M10 12.585L16.242 16l-1.455-6.005L18 7.054l-6.05-.523L10 1 7.05 6.531 1 7.055l3.213 2.94L3.758 16 10 12.585z">
													</path>
												</svg>
												<svg class="h-5 w-5 fill-current text-yellow-500" viewBox="0 0 20 20">
													<path
														d="M10 12.585L16.242 16l-1.455-6.005L18 7.054l-6.05-.523L10 1 7.05 6.531 1 7.055l3.213 2.94L3.758 16 10 12.585z">
													</path>
												</svg>
												<svg class="h-5 w-5 fill-current text-gray-400" viewBox="0 0 20 20">
													<path
														d="M10 12.585L16.242 16l-1.455-6.005L18 7.054l-6.05-.523L10 1 7.05 6.531 1 7.055l3.213 2.94L3.758 16 10 12.585z">
													</path>
												</svg>
												<svg class="h-5 w-5 fill-current text-gray-400" viewBox="0 0 20 20">
													<path
														d="M10 12.585L16.242 16l-1.455-6.005L18 7.054l-6.05-.523L10 1 7.05 6.531 1 7.055l3.213 2.94L3.758 16 10 12.585z">
													</path>
												</svg>
											</div>
											<div class="ml-2 text-sm text-gray-500">4.5 (250)</div>
										</div>
										<div class="mt-4 flex items-center">
											<div class="text-2xl font-semibold text-gray-900">$29.99</div>
											<div class="ml-2 text-sm text-gray-500">In stock</div>
										</div>
										<div class="mt-4 flex items-center">
											<div class="flex items-center">
												<label for="quantity" class="mr-2">Quantity:</label>
												<input id="quantity" type="number"
													class="rounded-lg px-3 py-1 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500">
											</div>
											<button
												class="ml-4 bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
												Add to Cart
											</button>
										</div>
									</div>
								</div>
							</div>
							<!-- Repeat the above product card for other products -->
						</div>
					</div>

				</div>
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<img class="img-fluid" src="product-image.jpg" alt="Product Image">
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<span class="text-uppercase text-primary">Product Category</span>
							</div>
							<h2 class="fw-bold">Product Title</h2>
							<p class="text-muted">Product Description</p>
							<div class="mb-3">
								<div class="d-flex align-items-center">
									<span class="text-warning">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
											class="bi bi-star-fill" viewBox="0 0 16 16">
											<path
												d="M11.201 15.568l-4.773-2.833L1.954 15.7c-.622.308-1.36-.235-1.263-.94l.957-5.286L.128 6.21C-.175 5.648.287 5 1.01 5h5.892l2.627-5.314C9.78-.233 10.394.175 10.493.94l.957 5.286 5.062.732c.723.105.976.754.506 1.315l-3.467 3.42 1.43 5.236c.193.705-.628 1.248-1.263.94L11.2 15.568z" />
										</svg>
									</span>
									<span class="text-warning">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
											class="bi bi-star-fill" viewBox="0 0 16 16">
											<path
												d="M11.201 15.568l-4.773-2.833L1.954 15.7c-.622.308-1.36-.235-1.263-.94l.957-5.286L.128 6.21C-.175 5.648.287 5 1.01 5h5.892l2.627-5.314C9.78-.233 10.394.175 10.493.94l.957 5.286 5.062.732c.723.105.976.754.506 1.315l-3.467 3.42 1.43 5.236c.193.705-.628 1.248-1.263.94L11.2 15.568z" />
										</svg>
									</span>
									<span class="text-warning">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
											class="bi bi-star-fill" viewBox="0 0 16 16">
											<path
												d="M11.201 15.568l-4.773-2.833L1.954 15.7c-.622.308-1.36-.235-1.263-.94l.957-5.286L.128 6.21C-.175 5.648.287 5 1.01 5h5.892l2.627-5.314C9.78-.233 10.394.175 10.493.94l.957 5.286 5.062.732c.723.105.976.754.506 1.315l-3.467 3.42 1.43 5.236c.193.705-.628 1.248-1.263.94L11.2 15.568z" />
										</svg>
									</span>
									<span class="text-secondary">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
											class="bi bi-star-fill" viewBox="0 0 16 16">
											<path
												d="M11.201 15.568l-4.773-2.833L1.954 15.7c-.622.308-1.36-.235-1.263-.94l.957-5.286L.128 6.21C-.175 5.648.287 5 1.01 5h5.892l2.627-5.314C9.78-.233 10.394.175 10.493.94l.957 5.286 5.062.732c.723.105.976.754.506 1.315l-3.467 3.42 1.43 5.236c.193.705-.628 1.248-1.263.94L11.2 15.568z" />
										</svg>
									</span>
									<span class="text-secondary">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
											class="bi bi-star-fill" viewBox="0 0 16 16">
											<path
												d="M11.201 15.568l-4.773-2.833L1.954 15.7c-.622.308-1.36-.235-1.263-.94l.957-5.286L.128 6.21C-.175 5.648.287 5 1.01 5h5.892l2.627-5.314C9.78-.233 10.394.175 10.493.94l.957 5.286 5.062.732c.723.105.976.754.506 1.315l-3.467 3.42 1.43 5.236c.193.705-.628 1.248-1.263.94L11.2 15.568z" />
										</svg>
									</span>
								</div>
								<span class="text-muted">4.5 (250)</span>
							</div>
							<div class="mb-3">
								<h3 class="text-primary">$29.99</h3>
								<span class="text-muted">In stock</span>
							</div>
							<div class="mb-3">
								<div class="input-group">
									<label for="quantity" class="input-group-text">Quantity:</label>
									<input id="quantity" type="number" class="form-control">
								</div>
							</div>
							<button class="btn btn-primary">Add to Cart</button>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</x-app-layout>
