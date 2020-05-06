@extends('layouts.panel')

@section('content')

    <img id="userPhoto" src="@if(isset($user->img)) {{asset($user->img)}} @else 
      {{asset('assets/images/users/1.jpg')}} @endif" alt="User Photo">
    
    
    <a href="#" id="userName">
       @if(isset($user->user)) <span>@</span>{{$user->user}} @else @usuario 
       @endif
    </a>

    @if($exists)
    <a href="#" id="online" class="only">
    	<i class="mdi mdi-bomb"></i>
        Online
    </a>
    @endif


@endsection