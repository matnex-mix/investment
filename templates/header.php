<div class="navbar navbar-light navbar-expand-md grey lighten-2 fixed-top z-depth-0 my blue">
	<span href="#" class="navbar-brand text-white">
		<h4 class="">
			<b>Dashboard</b>
		</h4>
	</span>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
		<span class="fa fa-2x fa-bars"></span>
	</button>
	<div class="collapse navbar-collapse align-items-lg-start" id="navbar">
		<ul class="navbar-nav ml-auto align-items-center flex-lg-column ml-lg-0 align-items-lg-start justify-content-lg-start">
			<li class="nav-item ml-lg-0">
				<a href="?f=index" class="nav-link text-white text-uppercase">
					<i class="fa fa-tachometer-alt"></i> &nbsp;&nbsp;Home
				</a>
			</li>
			<li class="nav-item ml-sm-5 ml-lg-0 dropdown">
				<a href="#" data-toggle="dropdown" data-target="inv" class="nav-link text-white text-uppercase">
					<i class="fa fa-truck-loading"></i> &nbsp;&nbsp;Investments
					<small class="ml-2 ml-lg-0 float-lg-right mt-md-1">
						<i class="fa fa-chevron-down"></i>
					</small>
				</a>
				<div id="inv" class="dropdown-menu rounded-0">
					<a href="?f=newinvestment" class="dropdown-item text-uppercase">
						<i class="fa fa-plus"></i>
						&nbsp;&nbsp;
						<b>NEW</b>
					</a>
					<a href="?f=forex" class="dropdown-item text-uppercase">
						<i class="fa fa-superscript"></i>
						&nbsp;&nbsp;
						<b>Forex</b>
					</a>
					<a href="" class="dropdown-item text-uppercase">
						<i class="fa fa-building"></i>
						&nbsp;&nbsp;
						<b>Real estate</b>
					</a>
				</div>
			</li>
			<li class="nav-item ml-sm-5 ml-lg-0 dropdown">
				<a href="#" data-toggle="dropdown" data-target="acc" class="nav-link text-uppercase text-white">
					<i class="fa fa-user"></i> &nbsp;&nbsp;Account
					<small class="ml-2 ml-lg-0 float-lg-right mt-md-1">
						<i class="fa fa-chevron-down"></i>
					</small>
				</a>
				<div id="acc" class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left rounded-0 position-lg-static">
					<a href="" class="dropdown-item text-uppercase">
						<i class="far fa-user-circle"></i>
						&nbsp;&nbsp;
						<b>Profile</b>
					</a>
					<a href="" class="dropdown-item text-uppercase">
						<i class="fa fa-money-check"></i>
						&nbsp;&nbsp;
						<b>Payments</b>
					</a>
				</div>
			</li>
		</ul>
	</div>
	<ul class="navbar-nav align-items-center ml-auto">
		<li class="nav-item ml-sm-5">
			<a href="" class="nav-link text-white">
				<i class="fa fa-power-off"></i> &nbsp;Logout
			</a>
		</li>
	</ul>
</div>