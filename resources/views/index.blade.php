@extends('layout.app')
@section('title')
Travel Managment SoftWare
@endsection
@section('content')
@include('include.menu')
@include('include.slide')
<div class=" welcome-section-top" >
	<div class="container">
	<div class="section-title welcome-section"><h2>Book Your Ideal Hotel with <span> JNGTRAVELPRO.COM</span></h2></div>
		<p>Are you a budget travel looking for a comfortable bed & breakfast arrangement for your holiday or are you a luxury traveler looking for a super luxurious hotel to wash off all that stress and rejuvenate you in its folds? You could be any one of these or anywhere between these two extremes of the spectrum or have any niche needs, eTravel.com will always have the perfect solution .</p>
	</div>
</div>
<div class="container margin-top">
    <div class="">
        <!-- Boxes de Acoes -->
    	<div class="col-xs-12 col-sm-6 col-lg-4">
			<div class="box">							
				<div class="icon">
					<div class="image"><i class="glyphicon glyphicon-credit-card"></i></div>
					<div class="info">
						<h3 class="title">PRODUCT OVERVIEW </h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in lobortis nisl, vitae iaculis sapien. Phasellus ultrices gravida massa luctus ornare. Suspendisse blandit quam elit, eu imperdiet neque semper.
						</p>
						<div class="more">
							<a href="#" title="Title Link">
								View Detail <i class="fa fa-angle-double-right"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div>			
        <div class="col-xs-12 col-sm-6 col-lg-4">
			<div class="box">							
				<div class="icon">
					<div class="image"><i class="glyphicon glyphicon-blackboard"></i></div>
					<div class="info">
						<h3 class="title">OUR SERVICES</h3>
    					<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in lobortis nisl, vitae iaculis sapien. Phasellus ultrices gravida massa luctus ornare. Suspendisse blandit quam elit, eu imperdiet neque semper.
						</p>
						<div class="more">
							<a href="#" title="Title Link">
								View Detail <i class="fa fa-angle-double-right"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div>
        <div class="col-xs-12 col-sm-6 col-lg-4">
			<div class="box">							
				<div class="icon">
					<div class="image"><i class="glyphicon glyphicon-education"></i></div>
					<div class="info">
						<h3 class="title">KNOWLEDGE</h3>
    					<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in lobortis nisl, vitae iaculis sapien. Phasellus ultrices gravida massa luctus ornare. Suspendisse blandit quam elit, eu imperdiet neque semper.
						</p>
						<div class="more">
							<a href="#" title="Title Link">
								View Detail <i class="fa fa-angle-double-right"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div>		    
		<!-- /Boxes de Acoes -->
	</div>
</div>
<div class="container-fluid margin-top welcome-section-top ">
	<div class="container margin-bottom">
		<div class="section-title welcome-section"><h2><span>Solutions for your business</span></h2></div>
		<div class="col-md-3">
			<div class="well img-circle text-center">	
				<div class="image">
					<i class="fa fa-plane"></i>
				</div>
				<span>Flights</span>	
			</div>
			<div class="space"></div>
		</div>
		<div class="col-md-3">
			<div class="well img-circle text-center">	
				<div class="image">
					<i class="fa fa-bed"></i>
				</div>
				<span>Hotels</span>	
			</div>
			<div class="space"></div>
		</div>
		<div class="col-md-3">
			<div class="well img-circle text-center">	
				<div class="image">
					<i class="fa fa-globe"></i>
				</div>
				<span>Tours</span>	
			</div>
			<div class="space"></div>
		</div>
		<div class="col-md-3">
			<div class="well img-circle text-center">	
				<div class="image">
					<i class="fa fa-flag-checkered"></i>
				</div>
				<span>River Cruises</span>	
			</div>
			<div class="space"></div>
		</div>
		<div class="clear"></div>
	</div>
</div>
<div class="container margin-top ">
	<div class="col-md-6 ">
		<div class="monitor">
			@include('include.monitor')
		</div>		
	</div>
	<div class="col-md-6">
		<div class="section-title"><center><h3>What We Do</h3></center></div>
		<p>As a distributor of the Travelport GDS system Galileo for 12 countries in Central and Eastern 		Europe, we know how to help travel agencies grow their business.
			We carefully listen to the needs of the travel industry and tirelessly create solutions that save your time, money and bring you more and more satisfied customers.
		</p>
	</div>
	<div class="clear"></div>
</div>
@include('include.footer')
@endsection