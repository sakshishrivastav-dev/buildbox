@include('layouts/header')

	<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<h4 class="page-title">Courses</h4>
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Add Courses</div>
									</div>
									@if(session('success'))
										    <div class="alert alert-success">
										        {{ session('success') }}
										    </div>
										@endif


									<form method="post"action="{{route('addcourseaction')}}"> 
										@csrf
									<div class="card-body">
										<div class="form-group">
											<label for="email">Course Name</label>
											<input type="text" class="form-control" id="course_name" name="course_name"placeholder="Enter Course name">
											@error('course_name')
											    <span class="text-danger">{{ $message }}</span>
												@enderror 

										
										</div>
										<div class="form-group">
											<label for="text">Course Code</label>
											<input type="text" class="form-control" name="course_code" id="course_code" placeholder="Enter Course Code">
												@error('course_code')
											    <span class="text-danger">{{ $message }}</span>
												@enderror 
										</div>


											<div class="form-group">
											<label for="username">Course Duration</label>
											<select class="form-control" name="couse_duration" id="couse_duration" >
												<option value="">Select Duration</option>
												<option value="1">1 year</option>
												<option value="2"> 2 Years</option>
												<option value="3">3 Years</option>
												<option value="4">4 Years</option>
												<option value="5">5 Years</option>
											</select>
									
											@error('couse_duration')
											    <span class="text-danger">{{ $message }}</span>
												@enderror 
										</div>



												<div class="form-group">
											<label for="username">Department / Faculty</label>
											<select class="form-control" name="Department" id="Department" >
												<option value="">Select Department</option>
												<option value="Science">Science</option>
												<option value="Maths">Maths</option>
												<option value="English">English</option>
												<option value="Hindi">Hindi</option>
												<option value="Bio">Bio</option>
											</select>
									
									@error('Department')
											    <span class="text-danger">{{ $message }}</span>
												@enderror 
										</div>

									<div class="form-group">
											<label for="password">Course Description</label>
											<input type="text" class="form-control" name="course_description" id="course_description" placeholder="Enter Course Description">
											@error('course_description')
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
