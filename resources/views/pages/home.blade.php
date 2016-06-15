@extends('master')

@section('title', 'Home')

@section('content')

	<div class="hero">
	
		<p>Homepage.</p>	

	</div>

	<section class="features">
		
		<div class="tabs">
			
			<ul>
				
				<li class="active">DevOps Features</li>

				<li>Business Features</li>

			</ul>

		</div>
		
		<div class="tab-content">
			
			<div id="tab-1">
				
				<div class="row">

					@for ($i = 0; $i < 6; $i++)
				
						<div class="features__item columns small-12 medium-6 large-4">
							
							<div class="row collapse">
								
								<div class="columns small-3 medium-12">
									
									<img src="{{ asset('static/imgs/placeholder-features.svg') }}">

								</div>

								<div class="columns small-8 small-offset-1 medium-12 medium-offset-0">
									
									<h3>Runs on any cloud</h3>

									<p>No vendor lock-in. Mantl runs equally well on any cloud saving you time and energy.</p>

								</div>

							</div>

						</div>

					@endfor

				</div>

				<div class="row">
					
					<div class="columns small-12">
						
						<a class="button" href="#">Explore Mantl features</a>

					</div>

				</div>

			</div>


			<div id="tab-2" style="display:none">
			


			</div>

		</div>

	</section>

	<section class="use-cases">
		

		<div class="row">
				
			<div class="columns small-12 medium-10 medium-offset-1 large-12 large-offset-0">

				<h3 class="hd hd-black">Mantl Use Cases</h3>
				
				<p class="use-cases__lead">Mantl is used to solve DevOps, business and team challenges. <br>Here are a couple of the primary use cases.</p>	
		
			</div>
		
		</div>

		<div class="row">
				
			<div class="use-cases__item columns small-12 medium-10 medium-offset-1 large-6 large-offset-0">
				
				<img src="{{ asset('static/imgs/use-cases/happy-devops-team.svg') }}">

				<h3>Happy devops teams</h3>

				<p>The number of inter-operating tools and components required to run a modern container-based application can be overwhelming to say the least. By utilizing best-of-breed tools at each layer of the stack, Mantl provides an out-of-the-box experience for DevOps teams working in a microservices environment. We’ve written the glue code so you can focus on what really matters: writing, deploying, and securing seriously great code.	</p>
		
			</div>

			<div class="use-cases__item columns small-12 medium-10 medium-offset-1 large-6 large-offset-0 end">
					
				<img src="{{ asset('static/imgs/use-cases/data-analytics.svg') }}">

				<h3>Data Analytics</h3>

				<p>Demand for understanding big amounts of data is growing and we need to discover new and efficient ways of supporting, collecting, securing and analyzing it. This calls for a whole new set of tools that can also help you manage clusters of hosts, services and access, keep watch on uptime and health and get some useful data to improve overall performance. Mantl takes advantage of open source management components like Apache Mesos to run data services such as Hadoop or Spark, which can easily be deployed with mantl-api.</p>
		
			</div>
		
		</div>

		<div class="row">
				
			<div class="columns small-12 medium-10 medium-offset-1">
				
				<blockquote cite="#">
					“Mantl means that developers aren’t forced to care about how their applications are run; but if they do care, they can get under the hood and configure everything”
			
					<p><span>KENNETH OWENS</span>CTO, Cloud Infrastructure Services Cisco</p>
				</blockquote>
		
			</div>
		
		</div>

	</section>

@endsection