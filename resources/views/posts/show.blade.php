@extends('layouts.app')


@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-9 ml-auto mr-auto">
			  	<div class="card">
			    	<div class="card-body p-0">
			    		<div class="row">
			    			<div class="col-md-7 p-0">
			    				<img src="/storage/{{ $post->photo }}" class="w-100">
			    			</div>
			    			<div class="col-md-5 pt-3 pl-0">
			    				<div class="d-flex align-items-center pl-3">
			    					<div class="pr-3">
			    						<img src="{{ $post->user->profile->profilePhoto() }}" class="w-100 rounded-circle" style="max-width: 35px;">
			    					</div>
			    					<div>
			    						<a href="/profile/{{ $post->user->id }}" class="font-weight-bold text-dark">{{ $post->user->username }}</a>
			    					</div>
			    					@can('update', !$post->user->profile)
			    						<a href="#" class="font-weight-bold ml-1"><i class="fas fa-circle text-dark" style="font-size: 3px;"></i> Follow</a>
			    					@endcan
			    				</div>
			    				
			    				<div class="d-none d-md-block">
			    					<hr>
				    				<div class="d-flex align-items-center pl-3">
				    					<div class="pr-3">
				    						<img src="{{ $post->user->profile->profilePhoto() }}" class="w-100 rounded-circle" style="max-width: 35px;">
				    					</div>
				    					<div>
				    						<a href="/profile/{{ $post->user->id }}" class="text-dark font-weight-bold mr-1">{{ $post->user->username }}</a>
				    						{{ $post->caption }}
				    					</div> 
				    					
				    				</div>
			    				</div>
			    			</div>
			    		</div>
				    </div>
			  	</div>
			</div>
		</div>
	</div>
@endsection

@section('javascript')
	<script>
		
	</script>
@endsection