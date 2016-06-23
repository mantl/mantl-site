<div class="row">

	@foreach ($features as $index => $feature)

		<div class="features__item columns small-12 medium-6 large-4">
			
			<div class="row collapse">
				
				<div class="columns small-2 medium-12">
					
					<img src="{{ asset('static/imgs/features/' . $feature['icon']) }}">

				</div>

				<div class="columns small-9 small-offset-1 medium-12 medium-offset-0">
					
					<h3>{{ $feature['title'] }}</h3>

					<p>{{ $feature['excerpt'] }}</p>

				</div>

			</div>

		</div>

	@endforeach

</div>