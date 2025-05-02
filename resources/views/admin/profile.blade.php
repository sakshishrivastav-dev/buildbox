@include('layouts/header')

	<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<h4 class="page-title">Profile</h4>
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Admin Profile</div>
									</div>
									<form method="post"action="{{'profileaction'}}"> 
										@csrf
									<div class="card-body">
										<div class="form-group">
											<label for="email">Email Address</label>
											<input type="email" class="form-control" id="email"  name="email"placeholder="Enter Email" value="{{$adminlogin->email}}">
												@error('email')
											    <span class="text-danger">{{ $message }}</span>
												@enderror

										
										</div>
										<div class="form-group">
											<label for="password">Password</label>
											<input type="password" class="form-control" name="password" id="password" placeholder="Password" value="{{$adminlogin->password}}">
												@error('password')
											    <span class="text-danger">{{ $message }}</span>
												@enderror
										</div>


											<div class="form-group">
											<label for="username">Username</label>
											<input type="text" class="form-control" name="username" id="username" placeholder="Username" value="{{$adminlogin->username}}">
												@error('username')
											    <span class="text-danger">{{ $message }}</span>
												@enderror
										</div>


							
										<div class="card-action">
											<button class="btn btn-success">Submit</button>
											<button class="btn btn-danger">Cancel</button>
										</div>
									</div>
									</form>
								</div>
							
							</div>
						</div>
					</div>
				
@include('layouts/footer')
