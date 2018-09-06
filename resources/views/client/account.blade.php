@extends('layouts.cli')

@section('page-section')

	<nav class="navbar navbar-expand-sm  bg-light border">
	  <div class="container">
	  </a>
	   <!-- Toggler/collapsibe Button -->
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
	    <span class="navbar-toggler-icon"></span>
	  </button>

		<div class="content py-5  bg-light">
		<div class="container">
			<div class="row">
				 <div class="col-md-8 offset-md-2">
		                    <span class="anchor"></span>
		                   <!-- form user info -->
		                    <div class="card card-outline-secondary">
		                        <div class="card-header">
		                            <h3 class="mb-0">User Information</h3>
		                        </div>
		                        <div class="card-body">
		                            <form class="form" role="form" autocomplete="off">
		                                <div class="form-group row">
		                                    <label class="col-lg-3 col-form-label form-control-label">First name</label>
		                                    <div class="col-lg-9">
		                                        <input class="form-control" type="text" value="Sabrina">
		                                    </div>
		                                </div>
		                                <div class="form-group row">
		                                    <label class="col-lg-3 col-form-label form-control-label">Last name</label>
		                                    <div class="col-lg-9">
		                                        <input class="form-control" type="text" value="Lopez">
		                                    </div>
		                                </div>
		                                <div class="form-group row">
		                                    <label class="col-lg-3 col-form-label form-control-label">Email</label>
		                                    <div class="col-lg-9">
		                                        <input class="form-control" type="email" value="therapeace@gmail.com">
		                                    </div>
		                                </div>
		                                <div class="form-group row">
		                                    <label class="col-lg-3 col-form-label form-control-label">Birthday</label>
		                                    <div class="col-lg-9">
		                                        <input class="form-control" type="text" value="September 5, 2018">
		                                    </div>
		                                </div>
		                                <div class="form-group row">
		                                    <label class="col-lg-3 col-form-label form-control-label">Gender</label>
		                                    <div class="col-lg-9">
		                                        <input class="form-control" type="url" value="Female">
		                                    </div>
		                                </div>
<!-- 		                                <div class="form-group row">
		                                    <label class="col-lg-3 col-form-label form-control-label">Time Zone</label>
		                                    <div class="col-lg-9">
		                                        <select id="user_time_zone" class="form-control" size="0">
		                                            <option value="Hawaii">(GMT-10:00) Hawaii</option>
		                                            <option value="Alaska">(GMT-09:00) Alaska</option>
		                                            <option value="Pacific Time (US & Canada)">(GMT-08:00) Pacific Time (US & Canada)</option>
		                                            <option value="Arizona">(GMT-07:00) Arizona</option>
		                                            <option value="Mountain Time (US & Canada)">(GMT-07:00) Mountain Time (US & Canada)</option>
		                                            <option value="Central Time (US & Canada)" selected="selected">(GMT-06:00) Central Time (US & Canada)</option>
		                                            <option value="Eastern Time (US & Canada)">(GMT-05:00) Eastern Time (US & Canada)</option>
		                                            <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
		                                        </select>
		                                    </div>
		                                </div> -->
		                                <div class="form-group row">
		                                    <label class="col-lg-3 col-form-label form-control-label">Username</label>
		                                    <div class="col-lg-9">
		                                        <input class="form-control" type="text" value="janeuser">
		                                    </div>
		                                </div>
		                                <div class="form-group row">
		                                    <label class="col-lg-3 col-form-label form-control-label">Password</label>
		                                    <div class="col-lg-9">
		                                        <input class="form-control" type="password" value="11111122333">
		                                    </div>
		                                </div>
		                                <div class="form-group row">
		                                    <label class="col-lg-3 col-form-label form-control-label">Confirmation Password</label>
		                                    <div class="col-lg-9">
		                                        <input class="form-control" type="password" value="11111122333">
		                                    </div>
		                                </div>
		                                <div class="form-group row">
		                                    <label class="col-lg-3 col-form-label form-control-label"></label>
		                                    <div class="col-lg-9">
		                                        <input type="reset" class="btn btn-secondary" value="Cancel">
		                                        <input type="button" class="btn btn-primary" value="Save Changes">
		                                    </div>
		                                </div>
		                            </form>
		                        </div>
		                    </div>
		                    <!-- /form user info -->

		                </div>
			</div>
		</div>
	</div>

@endsection

