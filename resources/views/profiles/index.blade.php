@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-5 mb-5">
        <div class="col-md-3 pr-5">
           <img src="{{ $user->profile->profilePhoto() }}" class="w-100 rounded-circle img-fluid">
        </div>
        <div class="col-md-9">
            <div class="h4"> {{ $user->username }}
                    @can('update', $user->profile)
                        <a href="/profile/{{ $user->id }}/edit" class="text-dark font-weight-bold ml-3 btn btn-outline-secondary">Edit Profile</a>
                    @endcan
                    @auth
                        @if($user->id != Auth::user()->id)
                            <a href="javascript:void(0)" id="followBtn" class="btn btn-primary font-weight-bold ml-3" data-user="{{ $user->id }}">{!! ($follows) ? 'Unfollow' : 'Follow' !!}</a>
                        @endif
                    @endauth
            </div>
            
            <div class="d-flex mt-3">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> Posts</div>
                <div class="pr-5"><strong>{{ $user->profile->followers->count() }}</strong> Followers</div>
                <div class="pr-5"><strong>{{ $user->following->count() }}</strong> Following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->name }}</div>
            <div>{{ $user->profile->description }}</div>
            <div>
                <a href="{{ $user->profile->url }}" target="_blank" class="websiteLink font-weight-bold">{{ $user->profile->url }}</a>
            </div>
        </div>
    </div>

    <div class="row mb-5">
        @foreach($user->posts as $post)
        <div class="col-md-4 mb-4">
            <a href="/p/{{ $post->id }}">
                <img src="/storage/{{ $post->photo }}" class="w-100">
            </a>
        </div>
        @endforeach
    </div>

    <div class="footer">
        @can('update', $user->profile)
            <a href="/p/create" style="font-size: 30px;"><i class="far fa-plus-square text-dark"></i></a>
        @endcan
        </div>
    </div>
</div>
@endsection

@section('javascript')
<script>
    $(document).ready(function() {
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
