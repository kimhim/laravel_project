@extends('layout.master')
@section('title')
    Welcome to my page
@endsection
@section('content')
   <div class="row">
   		<h1>Registration Form</h1>
	   		<div class="col-lg-10">
	   			<h1 class="text-center">ចុះឈ្មោះ​គូរស្មាមីភរិយាថ្មី</h1>
				<form class="form-horizontal" role="form" action="{{route('user.submit')}}" method="post" enctype="multipart/form-data">
				<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
					<div class="form-group">
						<label for="user_name" class="col-sm-4 control-label">ឈ្មោះ​អ្នក​ប្រើប្រាស់​</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="name" name="name"
								placeholder="បញ្ចូល​ឈ្មោះ​អ្នក​ប្រើប្រាស់​" />
						</div>
						<div class="col-sm-4">
							@if ($errors->has('name'))
								    <div class = "alert alert-danger alert-dismissable" style="padding-top:5px;padding-bottom:2px;margin-bottom:2px;">
									   <div class = "close" data-dismiss = "alert" aria-hidden = "true">
									      &times;
									   </div>
										 <span class="glyphicon glyphicon-user"></span> {{ $errors->first('name') }}
									</div>
								@endif
						</div>
					</div>
					<div class="form-group">
						<label for="password" class="col-sm-4 control-label">លេខសំងាត់</label>
						<div class="col-sm-4">
							<input type="password" class="form-control" id="password" name="password"
								placeholder="បញ្ចូល​លេខសំងាត់">
						</div>
						<div class="col-sm-4">
							@if ($errors->has('password'))
								    <div class = "alert alert-danger alert-dismissable" style="padding-top:5px;padding-bottom:3px;margin-bottom:3px;">
									   <div class = "close" data-dismiss = "alert" aria-hidden = "true">
									      &times;
									   </div>
										 <span class="glyphicon glyphicon-user"></span> {{ $errors->first('password') }}
									</div>
								@endif
						</div>
					</div>

					<div class="form-group">
						<label for="groom_name" class="col-sm-4 control-label">ឈ្មោះ​កូន​កំលោះ</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="groom_name" name="groom_name">
						</div>
						<div class="col-sm-4">
							@if ($errors->has('groom_name'))
								    <div class = "alert alert-danger alert-dismissable" style="padding-top:5px;padding-bottom:3px;margin-bottom:3px;">
									   <div class = "close" data-dismiss = "alert" aria-hidden = "true">
									      &times;
									   </div>
										 <span class="glyphicon glyphicon-user"></span> {{ $errors->first('groom_name') }}
									</div>
								@endif
						</div>
					</div>

					<div class="form-group">
						<label for="groom_pic" class="col-sm-4 control-label">រូប​ថត​​កូន​កំលោះ</label>
						<div class="col-sm-8">
							<div style="position:relative;">
								<a class='btn btn-primary' href='javascript:;'>
									ជ្រើសរើស​រូបថតកូនកំលោះ...
									<input id="groom_pic" type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' size="40"  onchange='$("#upload-file-info").html($(this).val());' name="groom_pic" >
								</a>
								&nbsp;
								<span class='label label-info' id="upload-file-info"></span>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="groom_father_name" class="col-sm-4 control-label">ឪពុក</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="groom_father_name" name="groom_father_name">
						</div>
					</div>
					<div class="form-group">
						<label for="groom_father_status" class="col-sm-4 control-label">ស្ថានភាព</label>
						<div class="col-lg-8 form-inline">
							<input type="checkbox" name="groom_father_status" value="1" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-on="នៅ​រស់" data-off="ស្លាប់​">
						</div>
					</div>

					<div class="form-group">
						<label for="groom_mother_name" class="col-sm-4 control-label">ម្ដាយ</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="groom_mother_name" name="groom_mother_name" />
						</div>
					</div>
					<div class="form-group">
						<label for="groom_mother_status" class="col-sm-4 control-label">ស្ថានភាព</label>
						<div class="col-lg-8 form-inline">
							<input type="checkbox" name="groom_mother_status" value="1" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-on="នៅ​រស់" data-off="ស្លាប់​">
						</div>
					</div>

					<div class="form-group">
						<label for="bride_name" class="col-sm-4 control-label">ឈ្មោះកូនក្រមុំ</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="bride_name" name="bride_name">
						</div>
					</div>
					<div class="form-group">
						<label for="bride_pic" class="col-sm-4 control-label">រូប​ថត​​កូន​ក្រមុំ</label>
						<div class="col-sm-8">
							<div style="position:relative;">
								<a class='btn btn-primary' href='javascript:;'>
									ជ្រើសរើស​រូបថតកូនក្រមុំ...
									<input id="bride_pic" type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' size="40"  onchange='$("#upload-file-infos").html($(this).val());' name="bride_pic">
								</a>
								&nbsp;
								<span class='label label-info' id="upload-file-infos"></span>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="bride_father_name" class="col-sm-4 control-label">ឪពុក</label>

						<div class="col-sm-8">
							<input type="text" class="form-control" id="bride_father_name" name="bride_father_name">
						</div>
					</div>
					<div class="form-group">
						<label for="bride_father_status" class="col-sm-4 control-label">ស្ថានភាព</label>
						<div class="col-lg-8 form-inline">
							<input type="checkbox" name="bride_father_status" value="1" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-on="នៅ​រស់" data-off="ស្លាប់​">
						</div>
					</div>

					<div class="form-group">
						<label for="bride_mother_name" class="col-sm-4 control-label">ម្ដាយ</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="bride_mother_name" name="bride_mother_name">
						</div>
					</div>
					<div class="form-group">
						<label for="bride_mother_status	" class="col-sm-4 control-label">ស្ថានភាព</label>
						<div class="col-lg-8 form-inline">
							<input type="checkbox" name="bride_mother_status" value="1" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-on="នៅ​រស់" data-off="ស្លាប់​">
						</div>
					</div>
					<div class="form-group">
						<label for="married_date" class="col-sm-4 control-label">ថ្ងៃរៀបអាពាហ៏ពិពាហ៏</label>
						<div class="col-sm-4">
							 <div class="input-group date">
							  <input type="text" class="form-control" id="married_date" name="married_date"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="married_place" class="col-sm-4 control-label">ទីកន្លែង</label>
						<div class="col-sm-8">
							<textarea name="married_place" id="married_place" cols="56" rows="5"></textarea>
						</div>
					</div>

					<div class="form-group text-center">
						<div class="col-sm-offset-4 col-sm-8">
							<a href="." class="btn icon-btn btn-warning text-left"><span class="glyphicon glyphicon-arrow-left glyphicon btn-glyphicon glyphicon-plus img-circle text-danger"></span> ត្រលប់ក្រោយ</a>
							<button type="submit" class="btn icon-btn btn-primary" name="btn_register"><span class="glyphicon btn-glyphicon glyphicon-plus img-circle text-success"></span>បង្កើត​គណនេយ្យថ្មី</button>
						</div>
					</div>
				</form>
	   		</div>
   		</div>
   </div>
@endsection