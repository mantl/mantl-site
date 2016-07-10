<div class="row-fluid">

	@foreach ($features as $index => $feature)

		<div class="features__item columns small-12 @if($index === (count($features)) -1) end @endif @if($index % 2 === 0) alt @endif">
			
			<div class="row collapse">
				
				<div class="blue columns match small-12 large-3 @if($index % 2 != 0) large-push-8 @else large-offset-1 @endif">
					
					<img src="{{ asset('static/imgs/features/' . $feature['icon']) }}">

				</div>

				<div class="red columns match small-12 large-7 @if($index % 2 != 0) large-pull-4 @else end @endif">
					
					<h3>{{ $feature['title'] }}</h3>

					<p>{{ $feature['content'] }}</p>


					@if($feature['cta_text'] != '' && $feature['cta_url'] != '')

						<a href="{{ $feature['cta_url'] }}" class="button features__button">{{ $feature['cta_text'] }}</a>

					@endif

				</div>

			</div>

		</div>

	@endforeach

</div>