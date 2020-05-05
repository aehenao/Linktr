@extends('layouts.panel')

@section('content')

    <img id="userPhoto" src="{{asset('images/profile.jpg')}}" alt="User Photo">
    
    
    <a href="#" id="userName">
        @littlecory3
    </a>

    @if($exists)
    <a href="#" id="online" class="only">
    	<i class="mdi mdi-bomb"></i>
        Online
    </a>
    @endif


@endsection