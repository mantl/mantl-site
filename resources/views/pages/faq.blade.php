@extends('master')

@section('title', 'FAQ')

@section('page-header')
	
	<div class="row">

		<div class="columns small-12 large-11 large-offset-1 xlarge-10 xlarge-offset-2">
	
			<form>
		
				<input id="filter-faq" type="text" name="" placeholder="Search">
	
			</form>

		</div>

	</div>

@endsection

@section('content')

	<section class="faq @if(count($faqs) % 2 === 0) odd @else even @endif">

		@foreach($faqs as $index => $faq)

			<div class="faq__item">

				<div class="row">

					<div class="columns small-12 large-11 large-offset-1 xlarge-10 xlarge-offset-2">
						
						<h2>{{ $faq['question'] }}</h2>

						<div class="answer">{!! $faq['answer'] !!}</div>

					</div>
					
				</div>

			</div>

		@endforeach

	</section>

	<section class="faq__no-results">
		
		<div class="row">

			<div class="columns small-12 large-11 large-offset-1 xlarge-10 xlarge-offset-2">

				<h4>No results available</h4>

			</div>

		</div>
	
	</section>

	<section class="faq__more-questions">
		
		<div class="row">

			<div class="columns small-12">
				
				<i></i>

				<h3>Have more questions?<br>Contact us <a href="https://gitter.im/CiscoCloud/mantl" target="_blank">here</a></h3>

			</div>
		
		</div>

	</section>

@endsection