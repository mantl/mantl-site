@extends('master')

@section('title', 'FAQ')

@section('page-header')

	<form>
		<input type="text" name="" placeholder="Search">
	</form>

@endsection

@section('content')
    {!! $questions !!}
@endsection