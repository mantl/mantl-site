<section class="features">
		
	<div class="tabs">
		
		<ul>
			
			<li class="active" data-tab-group-target="business-devops-features" data-tab-target="devops-features">DevOps Features</li>

			<li data-tab-group-target="business-devops-features" data-tab-target="business-features">Business Features</li>

		</ul>

	</div>

	<div class="tab-content" data-tab-group-name="business-devops-features">
		
		<div 
			id="tab-1" 
			class="tab active" 
			data-tab-name="devops-features" 
			class="active"
		>
			
			@include('components.feature-home', ['features' => $devops_features])

		</div>


		<div 
			id="tab-2"
			class="tab" 
			data-tab-name="business-features" 
		>
		
			@include('components.feature-home', ['features' => $business_features])

		</div>

	</div>

	<div class="row text-center">
					
		<div class="columns small-12">
			
			<a class="button" href="{{ url('features') }}">Explore Mantl features</a>

		</div>

	</div>

</section>