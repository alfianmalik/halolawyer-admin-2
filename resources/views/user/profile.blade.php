@extends('layout.backend.app',[
	'title' => 'Welcome',
	'pageTitle' => 'Profile',
])
@section('content')
@include('layout.component.alert-dismissible')
<div class="row">
	<div class="col-xl-4">
		<!-- Profile picture card-->
		<div class="card mb-4 mb-xl-0">
			<div class="card-header">Profile Picture</div>
			<div class="card-body text-center">
				<!-- Profile picture image-->
				<img class="img-account-profile rounded-circle mb-2" src="assets/img/illustrations/profiles/profile-1.png" alt="">
				<!-- Profile picture help block-->
				<div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
				<!-- Profile picture upload button-->
				<button class="btn btn-primary" type="button">Upload new image</button>
			</div>
		</div>
	</div>
	<div class="col-xl-8">
		<!-- Account details card-->
		<div class="card mb-4">
			<div class="card-header">Account Details</div>
			<form method="POST" action="{{ route('profile.update',Auth::user()->id) }}">
				@csrf
				@method('PATCH')
				<div class="card-body">
					<form>
						<!-- Form Row-->
						<div class="row gx-3 mb-3">
							<!-- Form Group (first name)-->
							<div class="col-md-6">
								<label class="small mb-1" for="inputFirstName">First name</label>
								<input class="form-control" id="inputFirstName" type="text" name="first_name" placeholder="Enter your first name" value="{{ auth()->user()->first_name }}">
							</div>
							<!-- Form Group (last name)-->
							<div class="col-md-6">
								<label class="small mb-1" for="inputLastName">Last name</label>
								<input class="form-control" id="inputLastName" type="text" name="last_name" placeholder="Enter your last name" value="{{ Auth::user()->last_name }}">
							</div>
						</div>
						<!-- Form Row        -->
						<!-- Form Group (email address)-->
						<div class="mb-3">
							<label class="small mb-1" for="inputEmailAddress">Email address</label>
							<input class="form-control" id="inputEmailAddress" name="email" type="email" placeholder="Enter your email address" value="{{ Auth::user()->email }}">
						</div>
						<!-- Form Row-->
						<div class="row gx-3 mb-3 d-none">
							<!-- Form Group (phone number)-->
							<div class="col-md-6">
								<label class="small mb-1" for="inputPhone">Password</label>
								<input class="form-control" id="inputPhone" type="password" placeholder="Enter your phone number" value="">
							</div>
						</div>
						<!-- Save changes button-->
						<button class="btn btn-primary" type="submit">Save changes</button>
					</form>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection