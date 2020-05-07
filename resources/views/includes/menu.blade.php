<div id="links">

	@foreach($links as $link)

	@if($link->status == 'on')
	<div class="link">
		<a class="openpop " href="/url/{{$link->id}}" target="_blank" data-link-id="" data-thumbnail="{{asset($link->preview)}}">

			<div class="icon-wrap icon-wrap--thumbnail @if($link->online == 'on') active @endif">

				<img src="{{asset($link->ico)}}" loading="lazy" alt="thumbnail">
			</div>

			{{-- <i class="mdi mdi-bomb ico"></i > --}}

			@if(strcasecmp($link->name, 'chaturbate') == 0 and $link->online == 'on')
			 <p class="textName chaturbate "></p>
			@elseif(strcasecmp($link->name, 'stripchat') == 0 and $link->online == 'on')
			  <p class="textName stripchat"></p>
			@else
			 <p class="textName">{{$link->name}} </p>

		@endif 

			
			
			
		</a>

	</div>
	@endif
	
	@endforeach

	{{-- <div class="link">
		<a class="openpop" href="https://m.chaturbate.com/little_cory/" target="_blank" data-link-id="" data-thumbnail="{{asset('images/chaturbate.png')}}">
			<div class="icon-wrap icon-wrap--thumbnail">
				<img src="https://d1fdloi71mui9q.cloudfront.net/uABMmyMKQY6wugMqVsnS_d277a7b04893f4584c39da5e84698190" loading="lazy" alt="thumbnail">
			</div>
			Chaturbate
		</a>

	</div> --}}
	


</div>
