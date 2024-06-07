@extends('/layouts.app')
@section('content')
{{-- top area uses component 'personal_nav' and pass 2 arguments,
	 (note: don't SPACE after attributes, ex: :user = $friend (error))
--}}
<!-- top area -->
 
<x-personal_nav :user=$user :friend=$friend></x-personal_nav>

<section>
	<div class="gap gray-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="row" id="page-contents">
						<div class="col-lg-3">
							<aside class="sidebar static">
								<div class="widget" style ="height: 30%">
									<h4 class="widget-title">Edit info</h4>
									<ul class="naves">
		
										<li>
											<i class="ti-lock"></i>
											<a title="" href="{{ route('password.change') }}">Change password</a>
										</li>

									</ul>
								</div>
								 
							</aside>
						</div><!-- sidebar -->
						<div class="col-lg-6">
							<div class="central-meta">
								<div class="editing-info">
									<h5 class="f-title"><i class="ti-info-alt"></i> Edit Basic Information</h5>

									<form method="post" action="{{ url('update-Info-User/'.$user->user_id)}}">
										@csrf
										@method('PUT')
										<div class="form-group half">
											<input type="text" id="first_name" name="first_name" required="required" value="{{ $user->first_name}}" maxlength="10"/>
											<label class="control-label" for="first_name">First Name</label><i class="mtrl-select"></i>
										</div>
										<div class="form-group half">
											<input type="text" id="last_name" name="last_name" required="required" value="{{ $user->last_name}} " maxlength="10"/>
											<label class="control-label" for="last_name">Last Name</label><i class="mtrl-select"></i>
										</div>
										<div class="form-group">
											<input type="text" required="required" value="{{$user->email}}" name="email" id="email" maxlength="20"/>
											<label class="control-label" for="input">Email</label>
												<i class="mtrl-select"></i>
										</div>
										<!-- <div class="form-group">	
											  <input type="text" required="required"/>
											  <label class="control-label" for="input">Phone No.</label><i class="mtrl-select"></i>
											</div> -->
										<div class="dob">
											<div class="form-group">
												<select name="day">
													<option value="" selected disabled>Day</option> <!-- Removed the text "Day" -->
													@for ($i = 1; $i <= 31; $i++)
														<option {{ date('d', strtotime($user->DOB)) == $i ? 'selected' : '' }}>{{ $i }}</option>
													@endfor
												</select>
											</div>
											<div class="form-group">
												<select name="month">
													<option value="" selected disabled>Month</option> <!-- Removed the text "Month" -->
													@for ($m = 1; $m <= 12; $m++)
														<option {{ date('m', strtotime($user->DOB)) == $m ? 'selected' : '' }}>{{ $m }}</option>
													@endfor
												</select>
											</div>
											<div class="form-group">
												<select name="year">
													<option value="" selected disabled>Year</option> <!-- Removed the text "Year" -->
													@php
													$currentYear = date('Y');
													@endphp
													@for ($y = $currentYear; $y >= 1900; $y--)
														<option {{ date('Y', strtotime($user->DOB)) == $y ? 'selected' : '' }}>{{ $y }}</option>
													@endfor
												</select>
											</div>
										</div>
										<div class="form-radio">
											<div class="radio">
												<label>
													<input type="radio" name="gender" value="0" {{ $user->gender == 0 ? 'checked' : '' }}>
													<i class="check-box"></i>Male
												</label>
											</div>
											<div class="radio">
												<label>
													<input type="radio" name="gender" value="1" {{ $user->gender == 1 ? 'checked' : '' }}>
													<i class="check-box"></i>Female
												</label>
											</div>
										</div>
										<div class="form-group">
											<textarea rows="4" id="description" name="description" required="required" maxlength="20">{{ $user->description }}</textarea> <!-- Updated maxlength to 20 -->
											<label class="control-label" for="description">About Me (maximum 20 characters)</label><i class="mtrl-select"></i>
											<span id="char-count">20 characters remaining</span>
										</div>
										<div class="submit-btns">
											<button type="button" class="mtr-btn"><span> <a href="{{ url('time-line/user-profile/' .$user->user_id) }}" class="mtr-btn"><span>Cancel</span></a></span></button>
											<button type="submit" class="mtr-btn" onclick="return validateEmail()"><span>Update</span></button>
										</div>
									</form>
								</div>
							</div>
						</div><!-- centerl meta -->
						<div class="col-lg-3">
						
						</div><!-- sidebar -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
<script>
	function validateEmail() {
		var email = document.getElementById('email').value;
		if (!email.includes('@') || !email.includes('.')) {
			alert("Please enter a valid email address.");
			return false;
		}
		return true;
	}
</script>