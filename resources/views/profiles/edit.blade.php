@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="card overflow-auto" style="height: 600px;">
			<div class="card-body">
				<div class="row">
					<div class="col-md-3 border-right">
						<ul class="nav nav-tabs border-0 flex-column profile-edit-nav">
						  <li class="nav-item">
						    <a class="nav-link active border-0 text-dark" id="edit-tab" data-toggle="tab" href="#edit" role="tab" aria-controls="edit" aria-selected="true">Edit Profile</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link border-0 text-dark" id="security-tab" data-toggle="tab" href="#security" role="tab" aria-controls="security" aria-selected="false">Emails From Instagram</a>
						  </li>
						</ul>
					</div>
					<div class="col-md-8 mt-3 ml-5">
						<div class="tab-content" id="myTabContent">
				            <div class="tab-pane fade show active" id="edit" role="tabpanel" aria-labelledby="edit-tab">
				            	<form action="/profile/{{ $user->id }}/edit" enctype="multipart/form-data" method="post">
								@csrf
					            	<div class="form-group row">
						                <label for="photo" class="col-md-2 col-form-label  font-weight-bold">Photo</label>
						                
						                <div class="col-md-8">
						                    <input id="photo" type="file" class="form-control-file @error('photo') is-invalid @enderror" name="photo">

						                    @error('photo')
						                        <strong class="text-danger">{{ $message }}</strong>
						                    @enderror
						                </div>
					                </div>

									<div class="form-group row">
						                <label for="name" class="col-md-2 col-form-label  font-weight-bold">Name</label>

						                <div class="col-md-8">
						                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" placeholder="Name" autofocus>

						                    @error('name')
						                        <strong class="text-danger">{{ $message }}</strong>
						                    @enderror
						                    <p class="text-secondary mt-1"><small>Help people discover your account by using the name you're known by: either your full name, nickname, or business name. <br>You can only change your name twice within 14 days.</small></p>
						                </div>
					                </div>

					                <div class="form-group row">
						                <label for="username" class="col-md-2 col-form-label  font-weight-bold">Username</label>

						                <div class="col-md-8">
						                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ $user->username }}" placeholder="Username" autofocus>

						                    @error('username')
						                        <strong class="text-danger">{{ $message }}</strong>
						                    @enderror
						                    <p class="text-secondary mt-1"><small>In most cases, you'll be able to change your username back to anupjos for another 14 days. <a href="https://help.instagram.com/876876079327341">Learn More</a></small></p>
						                </div>
					                </div>

					                <div class="form-group row">
						                <label for="url" class="col-md-2 col-form-label  font-weight-bold">Website</label>

						                <div class="col-md-8">
						                    <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ $user->profile->url }}" placeholder="Website" autofocus>

						                    @error('url')
						                        <strong class="text-danger">{{ $message }}</strong>
						                    @enderror
						                </div>
					                </div>

					                <div class="form-group row">
						                <label for="description" class="col-md-2 col-form-label  font-weight-bold">Bio</label>

						                <div class="col-md-8">
						                    <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" autofocus rows="3">{{ $user->profile->description }}</textarea>

						                    @error('description')
						                        <strong class="text-danger">{{ $message }}</strong>
						                    @enderror
						                </div>
					                </div>

					                <div class="form-group row">
					                	<div class="col-md-2">
					                		
					                	</div>
					                	<div class="col-md-8">
					                		<p class="text-secondary"><strong>Personal Information</strong><br><small>Provide your personal information, even if the account is used for a business, a pet or something else. This won't be a part of your public profile.</small></p>
					                	</div>
					                </div>

					                <div class="form-group row">
						                <label for="email" class="col-md-2 col-form-label  font-weight-bold">Email</label>

						                <div class="col-md-8">
						                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" placeholder="Email" autofocus>

						                    @error('email')
						                        <strong class="text-danger">{{ $message }}</strong>
						                    @enderror
						                </div>
					                </div>

					                <div class="form-group row">
						                	<div class="col-md-2 ml-auto">
						                		<button class="btn btn-primary font-weight-bold">Submit</button>
						                	</div>
						                	<div class="col-md-5 mr-auto">
						                		<a href="#" class="btn text-primary font-weight-bold">Temporarily disable my account</a>
						                	</div>
					                </div>
				            	</form>
				            </div>
				            <div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
				            	<h5>Emails From Instagram</h5>
				            	<p>This is a list of emails Instagram has sent you about security and login in the last 14 days. You can use it to verify which emails are real and which are fake.</p>
				            </div>
				        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection