<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

@extends('layouts.frontLayout.front_design')

@section('content')

	<!-- header-section-starts -->
	<div class="full">
	
		@include('layouts.frontLayout.front_menu')
		
			<div class="main">

			<div class="contact-content">

				<div class="top-header span_top">

						<div class="logo">

							<a href="index.html"><img src="{{ asset('images/frontend_images/logo.png') }}" alt="" /></a>
							<p>FOR ALL EVENTS</p>
							
						</div>

						<div class="search v-search">
								
								@guest
							
									<a href="{{ route('login') }}"><button type="button" class="btn btn-default" style="margin-bottom: 15px;">Login</button></a>
									<a href="{{ route('register') }}"><button type="button" class="btn btn-default" style="margin-bottom: 15px;">Register</button></a>
										
								@else
										<a href="{{ route('home') }}"><p>Welcome {{ Auth::user()->name }} <span class="glyphicon glyphicon-envelope"></span></p></a>  
										<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><button type="button" class="btn btn-default" style="margin-bottom: 15px;">Logout</button></a>
										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										@csrf
										</form>

								@endif 
						
						</div>
						
						<div class="clearfix"></div>
				
				</div>
			
				<!---contact-->
				<div class="main-contact">
					
					<h3 class="head">CONTACT</h3>
					<p>WE'RE ALWAYS HERE TO HELP YOU</p>
					<br><br>
				
				<div id="app">

					<div class="contact-form">
					
						
							<vue-contactform-component></vue-contactform-component>
				
					
					</div>
	
				</div>

			</div>
	
		<!--Displays all the categories available-->
		@include('layouts.frontLayout.front_categories')

	    @include('layouts.frontLayout.front_footer')
		 	</div>

			<div class="clearfix"></div>
	
	</div>

@endsection