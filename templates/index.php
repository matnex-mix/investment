<?php include 'header.php'; ?>

<div class="body p-4 p-md-5">
	<div class="row">
		<div class="col-12 mb-4">
			<div class="row">
				<div class="col-12 col-sm-6 col-md-4">
					<div class="shadow p-3 mb-3" style="color: #900cec">
						<div class="d-flex justify-content-between">
							<div class="">
								<h6 class="text-dark">
									<b>Total Balance</b>
								</h6>
								<h2>
									<b>$220.00</b>
								</h2>
							</div>
							<div class="">
								<i class="fa fa-wallet fa-3x"></i>
							</div>
						</div>
						<div class="balance-thumb mt-4"></div>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4">
					<div class="shadow p-3 mb-3" style="color: tomato">
						<div class="d-flex justify-content-between">
							<div class="">
								<h6 class="text-dark">
									<b>Earnings</b>
								</h6>
								<h2>
									<b>$55.00</b>
								</h2>
							</div>
							<div class="">
								<i class="fa fa-coins fa-3x"></i>
							</div>
						</div>
						<div class="balance-thumb mt-4" style="background: tomato;"></div>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4">
					<div class="shadow p-3 mb-3" style="color: teal">
						<div class="d-flex justify-content-between">
							<div class="">
								<h6 class="text-dark">
									<b>Pending Withdrawal</b>
								</h6>
								<h2>
									<b>$15.70</b>
								</h2>
							</div>
							<div class="">
								<i class="fab fa-paypal fa-3x"></i>
							</div>
						</div>
						<div class="balance-thumb mt-4" style="background: teal"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 mb-4">
			<div class="shadow">
				<h5 class="my blue py-2 px-3 m-0 black-text">
					<b>Recent Investments</b>
				</h5>
				<div class="p-3">
					<table class="table table-striped table-highlight mb-0">
						<tr>
							<th>
								Status
							</th>
							<th>
								Investment Amount(₦)
							</th>
							<th>
								ROI(every 10 days)
							</th>
							<th>
								Duration
							</th>
						</tr>
						<tr>
							<td><font class="text-success"><b>RUNNING</b></font></td>
							<td>10,000</td>
							<td>20%</td>
							<td>40days</td>
						</tr>
						<tr>
							<td><font class="text-danger"><b>PAUSED</b></font></td>
							<td>10,000</td>
							<td>20%</td>
							<td>40days</td>
						</tr>
						<tr>
							<td><font class="text-primary"><b>FINISHED</b></font></td>
							<td>10,000</td>
							<td>20%</td>
							<td>40days</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<div class="col-12">
			<div class="shadow">
				<h5 class="my blue py-2 px-3 m-0 black-text">
					<b>You're looking great</b>
				</h5>
				<div class="p-3">
					<canvas id="myChart" class="w-10" style="max-height: 300px"></canvas>
					<script>
					var myChart = new Chart('myChart', {
						"type": "line",
						"data": {
							"labels": ["24/02","25/02","26/02","27/02","28/02","29/02","29/02","01/03","02/03"],
							"datasets": [{
								"label": "#RX2366 (₦5,500)",
								"data": [10,15,0,11.5,9.3,12.33,5.6,16.5,10.24],
								"fill": false,
								"borderColor": "teal",
								"lineTension": 0.1
							},{
								"label": "#RX2322 (₦15,500)",
								"data": [8,13,5,15.5,11.3,8.7,10,3.2,1],
								"fill": false,
								"borderColor": "tomato",
								"lineTension": 0.1
							},{
								"label": "#RX1145 (₦20,000)",
								"data": [4,10,8,14,14,16,18,8,8],
								"fill": false,
								"borderColor": "gold",
								"lineTension": 0.1
							}]
						},
						"options": {
						}
					});
					</script>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>