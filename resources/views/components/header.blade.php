<header>
            
    <button class="menu-toggle toggle-button--htx"><span>Toggle Menu</span></button>

    <a class="logo" href="{{ url('/') }}">Home</a>
	
	<nav class="menu">

	    <ul class="main">
	                        
	        <li><a href="{{ url('/features') }}" @if($pageID == 1) class="active" @endif>Features</a></li>
	        
	        <li><a href="{{ url('/technologies') }}" @if($pageID == 2) class="active" @endif>Technologies</a></li>
	        
	        <li><a href="{{ url('/resources') }}" @if($pageID == 3) class="active" @endif>Resources</a></li>
	        
	        <li><a href="{{ url('/faq') }}" @if($pageID == 4) class="active" @endif>FAQ</a></li>
	        
	        <li><a href="{{ url('/download') }}" @if($pageID == 5) class="active" @endif>Download</a></li>
	        
	    </ul>

	    @include('components.icons-menu')

	</nav>

</header>