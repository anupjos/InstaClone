@extends('layouts.app')


@section('content')
	<div class="container">
		@foreach($posts as $post)
			<div class="row mb-5">
				<div class="col-md-6 ml-auto mr-auto">
				  	<div class="card">
				    	<div class="card-body">
				    		<div class="row">
				    			<div class="col">
				    				<div class="d-flex align-items-center">
				    					<div class="pr-3">
				    						<img src="{{ $post->user->profile->profilePhoto() }}" class="w-100 rounded-circle" style="max-width: 35px;">
				    					</div>
				    					<div>
				    						<a href="/profile/{{ $post->user->id }}" class="font-weight-bold text-dark">{{ $post->user->username }}</a>
				    					</div>
				    				</div>
				    				<hr>
				    				<img src="/storage/{{ $post->photo }}" class="w-100">
				    				<div class="d-none d-md-block">
				    					<hr>
					    				<div class="d-flex align-items-center">
					    					<div class="font-weight-bold">
					    						<a href="/profile/{{ $post->user->id }}" class="text-dark mr-1">{{ $post->user->username }}</a>
					    					</div> 
					    					<div>{{ $post->caption }}</div>
					    				</div>
				    				</div>
				    			</div>
				    		</div>
					    </div>
				  	</div>
				</div>
			</div>
		@endforeach
	</div>
@endsection

@section('javascript')
	<script>
		
	</script>
@endsection