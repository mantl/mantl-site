@extends('master')

@section('title', 'Download')

@section('content')
	
	<section class="download">
		
		<div class="row">
			
			<div class="columns small-12">
				
				<h1 class="hd hd-black">Download Mantl</h1>

			</div>

		</div>
		
		<div class="row">	

			<div class="columns small-12 medium-9 medium-centered large-10 xlarge-9">	

				<p class="lead">Mantl is a microservices platform which harnesses the best-of-breed open source tooling, packaged as a single intuitive runtime environment for microservices.</p>

				<div class="button-group">
					
					<a class="button button-gradient" href="https://github.com/CiscoCloud/mantl/archive/master.zip" target="_blank">Download .zip</a>

					<a class="button" href="https://github.com/CiscoCloud/mantl/tree/master/docs">View docs</a>

				</div>

			</div>

		</div>

	</section>

	<section class="download__example">
				
		<div class="row">
	
			<div class="columns small-12 medium-6 large-4 large-offset-2">
				
				<div class="flex-video">

					<iframe width="560" height="315" src="https://www.youtube.com/embed/FYoAQeQmvMU" frameborder="0" allowfullscreen></iframe>
				
				</div>					

			</div>

			<div class="columns small-12 medium-6 large-4 end">
				
				<h3>Installing Mantl</h3>					

				<p>A walkthrough on installing Mantl with Terraform & Ansible.</p>

			</div>

		</div>
			
	</section>

@endsection