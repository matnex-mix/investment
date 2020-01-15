<?php include 'header.php'; ?>

<div class="body p-4 p-md-5">
	<h4>
		<b>New Investment</b>
	</h4>
	<hr/>
	<div class="row mt-4">
		<div class="col-12 col-sm-6 col-xl-3 px-2 mb-3">
			<a href="#" class="block-link block-check-group shadow-sm rounded p-3 text-white selected" style="background-color: purple">
				<i class="block-check-icon fa fa-check"></i>
				<div class="d-flex">
					<h3>Basic</h3>
					<h4 class="d-inline-block ml-auto">
						<b>5%</b>
					</h4>
					<small>&nbsp;ROI</small>
				</div>
				<div class="d-inline-block">
					5,000 - 50,000
				</div>
				<small>&nbsp;amount(₦)</small><br/>
				<div class="d-inline-block">
					15 - 40
				</div>
				<small>&nbsp;days</small>
			</a>
		</div>
		<div class="col-12 col-sm-6 col-xl-3 px-2 mb-3">
			<a href="#" class="block-link block-check-group shadow-sm rounded p-3 text-white" style="background-color: orange">
				<i class="block-check-icon fa fa-check"></i>
				<div class="d-flex">
					<h3>Hustler</h3>
					<h4 class="d-inline-block ml-auto">
						<b>10%</b>
					</h4>
					<small>&nbsp;ROI</small>
				</div>
				<div class="d-inline-block">
					50,000 - 500,000
				</div>
				<small>&nbsp;amount(₦)</small><br/>
				<div class="d-inline-block">
					15 - 40
				</div>
				<small>&nbsp;days</small>
			</a>
		</div>
		<div class="col-12 col-sm-6 col-xl-3 px-2 mb-3">
			<a href="#" class="block-link block-check-group shadow-sm rounded p-3 text-white" style="background-color: teal">
				<i class="block-check-icon fa fa-check"></i>
				<div class="d-flex">
					<h3>Worker</h3>
					<h4 class="d-inline-block ml-auto">
						<b>15%</b>
					</h4>
					<small>&nbsp;ROI</small>
				</div>
				<div class="d-inline-block">
					500,000 - 2,000,000
				</div>
				<small>&nbsp;amount(₦)</small><br/>
				<div class="d-inline-block">
					15 - 40
				</div>
				<small>&nbsp;days</small>
			</a>
		</div>
		<div class="col-12 col-sm-6 col-xl-3 px-2 mb-3">
			<a href="#" class="block-link block-check-group shadow-sm rounded p-3 text-white" style="background-color: royalblue">
				<i class="block-check-icon fa fa-check"></i>
				<div class="d-flex">
					<h3>Agba</h3>
					<h4 class="d-inline-block ml-auto">
						<b>20%</b>
					</h4>
					<small>&nbsp;ROI</small>
				</div>
				<div class="d-inline-block">
					2,000,000 up
				</div>
				<small>&nbsp;amount(₦)</small><br/>
				<div class="d-inline-block">
					15 - 40
				</div>
				<small>&nbsp;days</small>
			</a>
		</div>
	</div>
	<hr/><br/>
	<form onsubmit="return false;" id="investment-form" class="form" method="post" novalidate="">
        <div class="box-body">
            <h4 class="box-title my blue-text"><i class="fa fa-card mr-15"></i> Investment Details</h4>
            <hr class="my-15">
            <div class="row">
              	<div class="col-md-6">
	              	<div class="form-group">
	                 	<div class="controls">
	                		<label>Investment Amount <span class="text-warning"><i class="fa fa-info-circle"></i> minimum: ₦100,000</span></label>
			                <div class="input-group mb-3">
			                  	<div class="input-group-prepend">
				                  	<span class="input-group-text">₦</span>
				                </div>
			                	<input name="amount" type="number" class="form-control" placeholder=".......enter the amount you wish to invest" required="" data-validation-required-message="Please enter an amount from 50000 and above" minlength="6" maxlength="10">
			                </div>
               				<div class="help-block"></div>
               			</div>
              		</div>
              	</div>
              	<div class="col-md-6">
              		<div class="form-group">
                		<label>Duration of investment <span class="text-warning"><i class="fa fa-info-circle"></i> minimum: 1  month</span></label>
                		<select name="duration" class="form-control">
		                    <option value="1">30 Days (1 Month)</option>
		                    <option value="2">60 Days (2 Months)</option>
		                    <option value="3">90 Days (3 Months)</option>
		                    <option value="4">120 Days (4 Months)</option>
			                <option value="5">150 Days (5 Months)</option>
			                <option value="6">180 Days (6 Months)</option>
			                <option value="7">210 Days (7 Months)</option>
			                <option value="8">240 Days (8 Months)</option>
			                <option value="9">270 Days (9 Months)</option>
			                <option value="10">300 Days (10 Months)</option>
			                <option value="11">330 Days (11 Months)</option>
			                <option value="12">360 Days (12 Months)</option>
			                <option value="13">540 Days (18 Months)</option>
			                720 Days (24 Months)
               			</select>
             		</div>
              	</div>
            </div>
            <div class="form-group">
                <div class="controls">
                    <label>Amount In Words <span class="my blue-text"><i class="fa fa-question-circle"></i> e.g: One Hundred Thousand Naira</span></label>
                    <input name="amount_words" class="form-control" type="text" placeholder="Please enter amount in words" required="" data-validation-required-message="Please enter amount in words" minlength="12">
                    <div class="help-block"></div>
                </div>
            </div>
            <br/>
            <h4 class="box-title my blue-text"><i class="fa fa-university mr-15"></i> Bank Details</h4>
            <small><i class="fa fa-info-circle"></i>&nbsp;The bank account you want your monthly investment income to be paid into.</small>
            <hr class="my-15">
            <div class="row">
              	<div class="col-md-6">
              		<div class="form-group">
                 		<div class="controls">
                			<label>Bank Name</label>
                			<input name="bank_name" type="text" class="form-control" placeholder="...enter your bank name" required="" data-validation-required-message="Please enter the name of your bank" minlength="5">
              				<div class="help-block"></div>
              			</div>
              		</div>
              	</div>
              	<div class="col-md-6">
              		<div class="form-group">
                 		<div class="controls">
                			<label>Account Name</label>
                			<input name="account_name" type="text" class="form-control" placeholder="...enter full account name" required="" data-validation-required-message="Please enter your account name" minlength="5">
              				<div class="help-block"></div>
              			</div>
              		</div>
              	</div>
              	<div class="col-md-6">
              		<div class="form-group">
                 		<div class="controls">
	                		<label>Account Number</label>
	                		<input name="account_number" type="text" class="form-control" placeholder="...enter your account number" required="" data-validation-required-message="Please enter your account number" minlength="10">
	              			<div class="help-block"></div>
	              		</div>
	              	</div>
              	</div>
              	<div class="col-md-6">
              		<div class="form-group validate">
                		<label>Account Type</label>
                		<select name="account_type" class="form-control" aria-invalid="false">
			                <option value="Savings">Savings</option>
			                <option value="Current">Current</option>
                		</select>
              		</div>
              	</div>
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer mt-2">
           	<button name="do_add_investment" type="submit" class="btn btn-primary">
           		Continue
           	</button>
        </div>
       	<br/>
    </form>
</div>

<script type="text/javascript">
	block_check_group = $('.block-check-group');
	block_check_group.on('click', function(){
		block_check_group.removeClass('selected');
		this.classList.add('selected');
	});
</script>

<?php include 'footer.php'; ?>