<title>{{ config('chatify.name') }}</title>

{{-- Meta tags --}}
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="id" content="{{ $id }}">
<meta name="messenger-color" content="{{ $messengerColor }}">
<meta name="messenger-theme" content="{{ $dark_mode }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="url" content="{{ url('').'/'.config('chatify.routes.prefix') }}" data-user="{{ Auth::user()->id }}">

{{-- scripts --}}
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('js/chatify/font.awesome.min.js') }}"></script>
<script src="{{ asset('js/chatify/autosize.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src='https://unpkg.com/nprogress@0.2.0/nprogress.js'></script>

{{-- styles --}}
<link rel='stylesheet' href='https://unpkg.com/nprogress@0.2.0/nprogress.css'/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
<link href="{{ asset('css/chatify/style.css') }}" rel="stylesheet" />
<link href="{{ asset('css/chatify/'.$dark_mode.'.mode.css') }}" rel="stylesheet" />
<link href="{{ asset('css/app.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/css/main.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/css/variables.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('assets/css/chatbox.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/css/citizen_dashboard.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/css/app.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/css/portfolio.css')}}"/>
<link rel="stylesheet" href=" {{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}"/>
<link rel="stylesheet" href=" {{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}"/>
<link rel="stylesheet" href=" {{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}"/>
<link rel="stylesheet" href=" {{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}"/>
<link rel="stylesheet" href=" {{ asset('assets/css/adminlte.min.css') }}"/>
<link rel="stylesheet" href=" {{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}"/>
	    <link rel = "icon" href = "{{ asset('assets/images/logo.png') }}">


{{-- Setting messenger primary color to css --}}
<style>
    :root {
        --primary-color: {{ $messengerColor }};
    }
</style>
