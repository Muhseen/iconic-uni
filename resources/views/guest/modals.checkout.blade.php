<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<style>
		label {
			font-weight: bold !important;
		}
	</style>
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<input type="hidden" value="<?php echo rand(100000, 999999); ?>" id="transaction_id" name="transaction_id">
				<input type="hidden" id="total" value="0">
				<div class="row p-1 pb-3">
					<label for="">Customer Name</label>
					<input type="text" required class="form-control" name="customer_name" id="customerName"
						placeholder="Please enter your name">
					<div class="row p-0">

						<div class="col-6">

							<div class="form-control "><label for="">
									Email Address:
								</label>
								<input type="email" required name="email" id="email" class="form-control">
							</div>
						</div>
						<div class="col-6">
							<div class="form-control "><label for="">
									Phone No:
								</label>
								<input type="text" required name="phone_no" id="phone_no" class="form-control">
							</div>
						</div>
					</div>
				</div>
				<table class="text-center checkoutTable table table-striped table-bordered">
					<thead>
						<tr>
							<th>Item Name</th>
							<th>Qty Added</th>
							<th>Cost Per Unit</th>
							<th>Total</th>
						</tr>
					</thead>
					<tbody>

					</tbody>
				</table>
				<div class="row mx-2">

					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="1" name="delivery" id="delivery_check">
						<label class="form-check-label" for="flexCheckChecked">
							Home Delivery
						</label>
					</div>
				</div>
				<div class="row d-none my-2" id="delivery_deets">
					<div class="form-control my-1"><label for="">
							Delivery Address
						</label>
						<input type="text" required name="delivery_address" id="delivery_address" class="form-control">
					</div>

					<div class="row">
						<div class="col-6">
							<div class="form-check">
								<input class="form-check-input" type="radio" selected name="delivery_option" value="DHL"
									id="flexRadioDefault1">
								<label class="form-check-label" for="flexRadioDefault1">
									DHL
								</label>
								<img src="./images/dhl.png" alt="DHL Logo" width="80px" height="80px">

							</div>
						</div>
						<div class=" col-6">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="delivery_option" value="GIG" id="flexRadioDefault1">
								<label class="form-check-label" for="flexRadioDefault1">
									GIG
								</label>
								<img src="./images/gig.png" alt="GIG Logo" width="80px" height="80px">

							</div>

						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button class="btn btn-success " type="button" onclick="makePayment()">Make
					Payment</button>
			</div>
		</div>

	</div>
</div>
