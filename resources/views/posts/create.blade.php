@extends('layouts.app')

@section('content')
	<div class="container">
		<form action="/p/create" enctype="multipart/form-data" method="post">
			@csrf
			<div class="row">
				<div class="col-8 offset-2">
					<div class="card">
						<div class="card-body">
							<h2 class="mb-4 text-center font-weight-bold">Add a New Post</h2>
							{{-- Caption Field --}}
							<div class="form-group row">
			                    <label for="caption" class="col-md-4 col-form-label text-md-right">Caption</label>
			                    <div class="col-md-6">
			                        <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" autofocus>

			                        @error('caption')
			                            <strong class="text-danger">{{ $message }}</strong>
			                        @enderror
			                    </div>
			                </div>

			                {{-- Upload Image Field --}}
			                <div class="form-group row">
			                    <label for="photo" class="col-md-4 col-form-label text-md-right">Photo</label>

			                    <div class="col-md-6">
			                        <input id="photo" type="file" class="form-control-file @error('photo') is-invalid @enderror" name="photo">

			                        @error('photo')
			                            <strong class="text-danger">{{ $message }}</strong>
			                        @enderror
			                    </div>
			                </div>
						</div>
						<div class="card-footer bg-white">
							{{-- Submit Button --}}
			                <div class="col-md-12 text-center">
			               		<button class="btn btn-success">Post</button>
			               	</div>
						</div>
					</div>
					
				</div>
			</div>
		</form>
	</div>
@endsection