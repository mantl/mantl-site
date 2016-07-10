@extends('master')

@section('title', 'Resources')

@section('page-header')

	<h1>Below you will find our ever-growing list of Mantl resources.</h1>

@endsection

@section('content')
    
<section class="resources @if(count($resources) % 2 === 0) odd @else even @endif">
    
    <div class="row">
        
        <div class="columns small-12">
        
            <h2 class="hd hd-black">More Resources</h2>

        </div>

    </div>

    <div class="row">
        
        <div class="columns small-12">
            
            <nav class="resources__filter">

                <ul>
                    
                    <li><a href="#" class="button button-border" data-filter="all">All</a></li>

                    <li><a href="#" class="button button-border" data-filter="video">Videos</a></li>

                    <li><a href="#" class="button button-border" data-filter="docs">Docs</a></li>

                    <li><a href="#" class="button button-border" data-filter="slides">Slides</a></li>

                </ul>

            </nav>

        </div>

    </div>

    <div class="row">
        
    @foreach($resources as $index => $resource)

        <div class="resources__item columns small-12 large-4 @if($index === (count($resources)) -1) end @endif" data-filter-target="{{ $resource['tags'] }}">

            <div class="row">
                
                <div class="columns small-12 medium-6 large-12">
                    
                    <a class="resource__thumbnail" href="{{ $resource['url']}}" target="_blank">

                        @if(strpos($resource['tags'], 'video') !== false)

                            <i></i>

                        @endif

                        <span>{{ $resource['title']}}</span>

                    </a>

                </div>

                <div class="columns small-12 medium-6 large-12">
                    
                    <h2>{{ $resource['title']}}</h2>

                    <p>{{ $resource['summary']}}</p>                   

                </div>

            </div>


        </div>

    @endforeach     

    </div>

</section>

@endsection

@section('scripts')
    
    <script type="text/javascript">
        
        $(function(){
            
            $(window).on("DOMContentLoaded load resize", function() {

                var $resources = $(".resources");
                var rHeight = $resources.outerHeight();
                $resources.css("height", rHeight);

                $(".resources__filter a").on("click", function(e) {

                    e.preventDefault();

                    $(".resources__filter a").removeClass("active");

                    var $this = $(this);
                    var filter = $this.data('filter');
                    var $resources = $(".resources__item");

                    $this.addClass("active");

                    $resources.each(function(index) {
                        
                        if ($(this).data("filter-target").toLowerCase().indexOf(filter) >= 0 || filter === "all") {
                            $(this).velocity({opacity: 1}, {display: "block"});
                        }
                        else {
                            $(this).velocity({opacity: 0}, {display: "none"});
                        }
                    });
                });
            });
        });

    </script>

@endsection