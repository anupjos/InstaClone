@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-9 ml-auto mr-auto">
			  	<div class="card">
			    	<div class="card-body p-0">
			    		<div class="row">
			    			{{-- Image --}}
			    			<div class="col-md-7 p-0">
			    				<img src="/storage/{{ $post->photo }}" class="w-100">
			    			</div>
			    			{{-- Right Side of the image with details --}}
			    			<div class="col-md-5 pt-3 pl-0">
			    				<div class="d-flex align-items-center pl-3">
			    					<div class="pr-3">
			    						<img src="{{ $post->user->profile->profilePhoto() }}" class="w-100 rounded-circle" style="max-width: 35px;">
			    					</div>
			    					<div>
			    						<a href="/profile/{{ $post->user->id }}" class="font-weight-bold text-dark">{{ $post->user->username }}</a>
			    					</div>
			    					@auth
			    						{{-- Show Follow/Unfollow if logged in --}}
                        				@if($post->user->id != Auth::user()->id)
			    							<a href="javascript:void(0)" id="followBtn" class="font-weight-bold ml-1" data-user="{{ $post->user->id }}"><i class="fas fa-circle text-dark" style="font-size: 3px;"></i> {!! ($follows) ? 'Unfollow' : 'Follow' !!}</a>
			    					 	@endif
                    				@endauth
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
	    $(document).ready(function() {
	        // Follow - Unfollow Toggle and Action
	        $("#followBtn").click(function(){
	            var user = $(this).data("user");
	            $.ajax(
	                {
	                    data: {"_token": "{{ csrf_token() }}"},
	                    type: "POST",
	                    url: "/ajax/follow/"+user,
	                    success: function(response){
	                        var follows = (response) ? 'Unfollow' : 'Follow';
	                        $("#followBtn").html(follows);
	                    }
	                }
	            );
	        }); 
	    });
	</script>
@endsection