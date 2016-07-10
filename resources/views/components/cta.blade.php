<section class="cta @if ($pageID != 0) alt @endif">
	
	<div class="row">
		
		<div class="columns small-12">
			
			<h2>Open Source. Integrated.<br>Cloud Agnostic.</h2>

			@if ($pageID === 0)

			<a class="button button-gradient" href="{{ url('download') }}">Download now for free</a>

			@else 

			<a class="button button-alt" href="{{ url('download') }}">Download now for free</a>			

			@endif

		</div>

	</div>

</section>