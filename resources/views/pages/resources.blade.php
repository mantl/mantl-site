@extends('master')

@section('title', 'Resources')

@section('page-header')

	<h1>Welcome to our ever-growing resources page</h1>

	<div id="youtube"></div>

@endsection

@section('content')
    

@endsection

@section('scripts')

<script type="text/javascript" src="{{ asset('static/vendor/jquery.spidochetube.min.js') }}"></script>

<script>
	$(function($){
        $('#youtube').spidochetube({
            key         : 'AIzaSyC7aG-1FmGP7HJmSa-CrizRQytTHG14mok',
            id          : 'PLaORKu0arXYCXAtbPFLbIj9yN48hKJGeS', // add the youtube playlist id of your choice
            max_results : 50,
            complete : function() {

            }
        });
    });
	
</script>

@endsection