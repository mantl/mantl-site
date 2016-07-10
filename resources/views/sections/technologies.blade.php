<section class="technologies">
	
	<h2 class="hd hd-black">Technologies</h2>

	<div class="row">
		
		<div class="columns small-12">
			
			<ul>

				@foreach ($technologies as $index => $tech)
		
				<li>
					
					<a href="{{ $tech['url'] }}" target="_blank">

						<img src="{{ asset('static/imgs/technologies/'.$tech['icon']) }}">
						
						<h3>{{ $tech['name'] }}</h3>

					</a>

				</li>

				@endforeach

			</ul>

		</div>	

	</div>

	<div class="row">
			
		<div class="columns small-12">
			
			<a class="button" href="{{ url('technologies') }}">And many more</a>	
	
		</div>
	
	</div>

</section>