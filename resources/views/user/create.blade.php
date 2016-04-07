@extends('layout.master')
@section('title')
    Welcome to my page
@endsection
@section('content')
   <div class="row">
   		<h1>Registration Form</h1>
   		<div class="col-lg-10">
   			<h1 class="text-center">ចុះឈ្មោះ​គូរស្មាមីភរិយាថ្មី</h1>
			<form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="user_name" class="col-sm-4 control-label">ឈ្មោះ​អ្នក​ប្រើប្រាស់​</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="user_name" name="user_name"
							placeholder="បញ្ចូល​ឈ្មោះ​អ្នក​ប្រើប្រាស់​" />
					</div>
				</div>

				<div class="form-group">
					<label for="password" class="col-sm-4 control-label">លេខសំងាត់</label>
					<div class="col-sm-8">
						<input type="password" class="form-control" id="password" name="password"
							placeholder="បញ្ចូល​លេខសំងាត់">
					</div>
				</div>

				<div class="form-group">
					<label for="groom_name" class="col-sm-4 control-label">ឈ្មោះ​កូន​កំលោះ</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="groom_name" name="groom_name">
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
<!--    		<div class="row"> -->
<!--    			<div class="col-lg-12"> -->
<!-- 				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> -->
<!-- 				<section> -->
<!-- 				  <div class="container gal-container"> -->
<!-- 				    <div class="col-md-8 col-sm-12 co-xs-12 gal-item"> -->
<!-- 				      <div class="box"> -->
<!-- 				        <a href="#" data-toggle="modal" data-target="#1"> -->
<!-- 				          <img src="http://placemi.com/i3xhd/1000x750" class="img-responsive"> -->
<!-- 				        </a> -->
<!-- 				        <div class="modal fade" id="1" tabindex="-1" role="dialog"> -->
<!-- 				          <div class="modal-dialog" role="document"> -->
<!-- 				            <div class="modal-content"> -->
<!-- 				                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button> -->
<!-- 				              <div class="modal-body"> -->
<!-- 				                <img src="http://placemi.com/i3xhd/1000x750" class="img-responsive"> -->
<!-- 				              </div> -->
<!-- 				                <div class="col-md-12 description"> -->
<!-- 				                  <h4>This is the first one on my Gallery</h4> -->
<!-- 				                </div> -->
<!-- 				            </div> -->
<!-- 				          </div> -->
<!-- 				        </div> -->
<!-- 				      </div> -->
<!-- 				    </div> -->
<!-- 				    <div class="col-md-4 col-sm-6 co-xs-12 gal-item"> -->
<!-- 				      <div class="box"> -->
<!-- 				        <a href="#" data-toggle="modal" data-target="#2"> -->
<!-- 				          <img src="http://placemi.com/gut3z/1000x750" class="img-responsive"> -->
<!-- 				        </a> -->
<!-- 				        <div class="modal fade" id="2" tabindex="-1" role="dialog"> -->
<!-- 				          <div class="modal-dialog" role="document"> -->
<!-- 				            <div class="modal-content"> -->
<!-- 				                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button> -->
<!-- 				              <div class="modal-body"> -->
<!-- 				                <img src="http://placemi.com/gut3z/1000x750" class="img-responsive"> -->
<!-- 				              </div> -->
<!-- 				                <div class="col-md-12 description"> -->
<!-- 				                  <h4>This is the second one on my Gallery</h4> -->
<!-- 				                </div> -->
<!-- 				            </div> -->
<!-- 				          </div> -->
<!-- 				        </div> -->
<!-- 				      </div> -->
<!-- 				    </div> -->
<!-- 				    <div class="col-md-4 col-sm-6 co-xs-12 gal-item"> -->
<!-- 				      <div class="box"> -->
<!-- 				        <a href="#" data-toggle="modal" data-target="#3"> -->
<!-- 				          <img src="http://placemi.com/yggpo/1000x750" class="img-responsive"> -->
<!-- 				        </a> -->
<!-- 				        <div class="modal fade" id="3" tabindex="-1" role="dialog"> -->
<!-- 				          <div class="modal-dialog" role="document"> -->
<!-- 				            <div class="modal-content"> -->
<!-- 				                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button> -->
<!-- 				              <div class="modal-body"> -->
<!-- 				                <img src="http://placemi.com/yggpo/1000x750" class="img-responsive"> -->
<!-- 				              </div> -->
<!-- 				                <div class="col-md-12 description"> -->
<!-- 				                  <h4>This is the third one on my Gallery</h4> -->
<!-- 				                </div> -->
<!-- 				            </div> -->
<!-- 				          </div> -->
<!-- 				        </div> -->
<!-- 				      </div> -->
<!-- 				    </div> -->
<!-- 				    <div class="col-md-4 col-sm-6 co-xs-12 gal-item"> -->
<!-- 				      <div class="box"> -->
<!-- 				        <a href="#" data-toggle="modal" data-target="#4"> -->
<!-- 				          <img src="http://placemi.com/49zqo/1000x750" class="img-responsive"> -->
<!-- 				        </a> -->
<!-- 				        <div class="modal fade" id="4" tabindex="-1" role="dialog"> -->
<!-- 				          <div class="modal-dialog" role="document"> -->
<!-- 				            <div class="modal-content"> -->
<!-- 				                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button> -->
<!-- 				              <div class="modal-body"> -->
<!-- 				                <img src="http://placemi.com/49zqo/1000x750" class="img-responsive"> -->
<!-- 				              </div> -->
<!-- 				                <div class="col-md-12 description"> -->
<!-- 				                  <h4>This is the fourth one on my Gallery</h4> -->
<!-- 				                </div> -->
<!-- 				            </div> -->
<!-- 				          </div> -->
<!-- 				        </div> -->
<!-- 				      </div> -->
<!-- 				    </div> -->
<!-- 				    <div class="col-md-4 col-sm-6 co-xs-12 gal-item"> -->
<!-- 				      <div class="box"> -->
<!-- 				        <a href="#" data-toggle="modal" data-target="#5"> -->
<!-- 				          <img src="http://placemi.com/k2mjk/1000x750" class="img-responsive"> -->
<!-- 				        </a> -->
<!-- 				        <div class="modal fade" id="5" tabindex="-1" role="dialog"> -->
<!-- 				          <div class="modal-dialog" role="document"> -->
<!-- 				            <div class="modal-content"> -->
<!-- 				                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button> -->
<!-- 				              <div class="modal-body"> -->
<!-- 				                <img src="http://placemi.com/k2mjk/1000x750" class="img-responsive"> -->
<!-- 				              </div> -->
<!-- 				                <div class="col-md-12 description"> -->
<!-- 				                  <h4>This is the fifth one on my Gallery</h4> -->
<!-- 				                </div> -->
<!-- 				            </div> -->
<!-- 				          </div> -->
<!-- 				        </div> -->
<!-- 				      </div> -->
<!-- 				    </div> -->
<!-- 				    <div class="col-md-4 col-sm-6 co-xs-12 gal-item"> -->
<!-- 				      <div class="box"> -->
<!-- 				        <a href="#" data-toggle="modal" data-target="#6"> -->
<!-- 				          <img src="http://placemi.com/lv0ga/1000x750" class="img-responsive"> -->
<!-- 				        </a> -->
<!-- 				        <div class="modal fade" id="6" tabindex="-1" role="dialog"> -->
<!-- 				          <div class="modal-dialog" role="document"> -->
<!-- 				            <div class="modal-content"> -->
<!-- 				                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button> -->
<!-- 				              <div class="modal-body"> -->
<!-- 				                <img src="http://placemi.com/lv0ga/1000x750" class="img-responsive"> -->
<!-- 				              </div> -->
<!-- 				                <div class="col-md-12 description"> -->
<!-- 				                  <h4>This is the sixth one on my Gallery</h4> -->
<!-- 				                </div> -->
<!-- 				            </div> -->
<!-- 				          </div> -->
<!-- 				        </div> -->
<!-- 				      </div> -->
<!-- 				    </div> -->
<!-- 				    <div class="col-md-4 col-sm-6 co-xs-12 gal-item"> -->
<!-- 				      <div class="box"> -->
<!-- 				        <a href="#" data-toggle="modal" data-target="#7"> -->
<!-- 				          <img src="http://placemi.com/3rezh/1000x750" class="img-responsive"> -->
<!-- 				        </a> -->
<!-- 				        <div class="modal fade" id="7" tabindex="-1" role="dialog"> -->
<!-- 				          <div class="modal-dialog" role="document"> -->
<!-- 				            <div class="modal-content"> -->
<!-- 				                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button> -->
<!-- 				              <div class="modal-body"> -->
<!-- 				                <img src="http://placemi.com/3rezh/1000x750" class="img-responsive"> -->
<!-- 				              </div> -->
<!-- 				                <div class="col-md-12 description"> -->
<!-- 				                  <h4>This is the seventh one on my Gallery</h4> -->
<!-- 				                </div> -->
<!-- 				            </div> -->
<!-- 				          </div> -->
<!-- 				        </div> -->
<!-- 				      </div> -->
<!-- 				    </div> -->
<!-- 				    <div class="col-md-4 col-sm-6 co-xs-12 gal-item"> -->
<!-- 				      <div class="box"> -->
<!-- 				        <a href="#" data-toggle="modal" data-target="#8"> -->
<!-- 				          <img src="http://placemi.com/nfjhz/1000x750" class="img-responsive"> -->
<!-- 				        </a> -->
<!-- 				        <div class="modal fade" id="8" tabindex="-1" role="dialog"> -->
<!-- 				          <div class="modal-dialog" role="document"> -->
<!-- 				            <div class="modal-content"> -->
<!-- 				                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button> -->
<!-- 				              <div class="modal-body"> -->
<!-- 				                <img src="http://placemi.com/nfjhz/1000x750" class="img-responsive"> -->
<!-- 				              </div> -->
<!-- 				                <div class="col-md-12 description"> -->
<!-- 				                  <h4>This is the eighth one on my Gallery</h4> -->
<!-- 				                </div> -->
<!-- 				            </div> -->
<!-- 				          </div> -->
<!-- 				        </div> -->
<!-- 				      </div> -->
<!-- 				    </div> -->
<!-- 				    <div class="col-md-4 col-sm-6 co-xs-12 gal-item"> -->
<!-- 				      <div class="box"> -->
<!-- 				        <a href="#" data-toggle="modal" data-target="#9"> -->
<!-- 				          <img src="http://placemi.com/59h1p/1000x750" class="img-responsive"> -->
<!-- 				        </a> -->
<!-- 				        <div class="modal fade" id="9" tabindex="-1" role="dialog"> -->
<!-- 				          <div class="modal-dialog" role="document"> -->
<!-- 				            <div class="modal-content"> -->
<!-- 				                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button> -->
<!-- 				              <div class="modal-body"> -->
<!-- 				                <img src="http://placemi.com/59h1p/1000x750" class="img-responsive"> -->
<!-- 				              </div> -->
<!-- 				                <div class="col-md-12 description"> -->
<!-- 				                  <h4>This is the ninth one on my Gallery</h4> -->
<!-- 				                </div> -->
<!-- 				            </div> -->
<!-- 				          </div> -->
<!-- 				        </div> -->
<!-- 				      </div> -->
<!-- 				    </div> -->
<!-- 				    <div class="col-md-8 col-sm-12 co-xs-12 gal-item"> -->
<!-- 				      <div class="box"> -->
<!-- 				        <a href="#" data-toggle="modal" data-target="#10"> -->
<!-- 				          <img src="http://placemi.com/lybbn/1000x750" class="img-responsive"> -->
<!-- 				        </a> -->
<!-- 				        <div class="modal fade" id="10" tabindex="-1" role="dialog"> -->
<!-- 				          <div class="modal-dialog" role="document"> -->
<!-- 				            <div class="modal-content"> -->
<!-- 				                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button> -->
<!-- 				              <div class="modal-body"> -->
<!-- 				                <img src="http://placemi.com/lybbn/1000x750" class="img-responsive"> -->
<!-- 				              </div> -->
<!-- 				                <div class="col-md-12 description"> -->
<!-- 				                  <h4>This is the tenth one on my Gallery</h4> -->
<!-- 				                </div> -->
<!-- 				            </div> -->
<!-- 				          </div> -->
<!-- 				        </div> -->
<!-- 				      </div> -->
<!-- 				    </div> -->
<!-- 				    <div class="col-md-4 col-sm-6 co-xs-12 gal-item"> -->
<!-- 				      <div class="box"> -->
<!-- 				        <a href="#" data-toggle="modal" data-target="#11"> -->
<!-- 				          <img src="http://placemi.com/vnatq/1000x750" class="img-responsive"> -->
<!-- 				        </a> -->
<!-- 				        <div class="modal fade" id="11" tabindex="-1" role="dialog"> -->
<!-- 				          <div class="modal-dialog" role="document" class="img-responsive"> -->
<!-- 				            <div class="modal-content"> -->
<!-- 				                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button> -->
<!-- 				              <div class="modal-body"> -->
<!-- 				                <img src="http://placemi.com/vnatq/1000x750" class="img-responsive"> -->
<!-- 				              </div> -->
<!-- 				                <div class="col-md-12 description"> -->
<!-- 				                  <h4>This is the leventh one on my Gallery</h4> -->
<!-- 				                </div> -->
<!-- 				            </div> -->
<!-- 				          </div> -->
<!-- 				        </div> -->
<!-- 				      </div> -->
<!-- 				    </div> -->
<!-- 				    <div class="col-md-4 col-sm-6 co-xs-12 gal-item"> -->
<!-- 				      <div class="box"> -->
<!-- 				        <a href="#" data-toggle="modal" data-target="#12"> -->
<!-- 				          <img src="http://placemi.com/wbjov/1000x750" class="img-responsive"> -->
<!-- 				        </a> -->
<!-- 				        <div class="modal fade" id="12" tabindex="-1" role="dialog"> -->
<!-- 				          <div class="modal-dialog" role="document"> -->
<!-- 				            <div class="modal-content"> -->
<!-- 				                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button> -->
<!-- 				              <div class="modal-body"> -->
<!-- 				                <img src="http://placemi.com/wbjov/1000x750" class="img-responsive"> -->
<!-- 				              </div> -->
<!-- 				                <div class="col-md-12 description"> -->
<!-- 				                  <h4>This is the 12th one on my Gallery</h4> -->
<!-- 				                </div> -->
<!-- 				            </div> -->
<!-- 				          </div> -->
<!-- 				        </div> -->
<!-- 				      </div> -->
<!-- 				    </div> -->
<!-- 				    <div class="col-md-4 col-sm-6 co-xs-12 gal-item"> -->
<!-- 				      <div class="box"> -->
<!-- 				        <a href="#" data-toggle="modal" data-target="#13"> -->
<!-- 				          <img src="http://placemi.com/ts4a8/1000x750" class="img-responsive"> -->
<!-- 				        </a> -->
<!-- 				        <div class="modal fade" id="13" tabindex="-1" role="dialog"> -->
<!-- 				          <div class="modal-dialog" role="document"> -->
<!-- 				            <div class="modal-content"> -->
<!-- 				                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button> -->
<!-- 				              <div class="modal-body"> -->
<!-- 				                <img src="http://placemi.com/ts4a8/1000x750" class="img-responsive"> -->
<!-- 				              </div> -->
<!-- 				                <div class="col-md-12 description"> -->
<!-- 				                  <h4>This is the 13th one on my Gallery</h4> -->
<!-- 				                </div> -->
<!-- 				            </div> -->
<!-- 				          </div> -->
<!-- 				        </div> -->
<!-- 				      </div> -->
<!-- 				    </div> -->
<!-- 				    <div class="col-md-4 col-sm-6 co-xs-12 gal-item"> -->
<!-- 				      <div class="box"> -->
<!-- 				        <a href="#" data-toggle="modal" data-target="#14"> -->
<!-- 				          <img src="http://placemi.com/i8yd4/1000x750" class="img-responsive"> -->
<!-- 				        </a> -->
<!-- 				        <div class="modal fade" id="14" tabindex="-1" role="dialog"> -->
<!-- 				          <div class="modal-dialog" role="document"> -->
<!-- 				            <div class="modal-content"> -->
<!-- 				                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button> -->
<!-- 				              <div class="modal-body"> -->
<!-- 				                <img src="http://placemi.com/i8yd4/1000x750" class="img-responsive"> -->
<!-- 				              </div> -->
<!-- 				                <div class="col-md-12 description"> -->
<!-- 				                  <h4>This is the 14th one on my Gallery</h4> -->
<!-- 				                </div> -->
<!-- 				            </div> -->
<!-- 				          </div> -->
<!-- 				        </div> -->
<!-- 				      </div> -->
<!-- 				    </div> -->
<!-- 				    <div class="col-md-4 col-sm-6 co-xs-12 gal-item"> -->
<!-- 				      <div class="box"> -->
<!-- 				        <a href="#" data-toggle="modal" data-target="#15"> -->
<!-- 				          <img src="http://placemi.com/ak6mk/1000x750" class="img-responsive"> -->
<!-- 				        </a> -->
<!-- 				        <div class="modal fade" id="15" tabindex="-1" role="dialog"> -->
<!-- 				          <div class="modal-dialog" role="document"> -->
<!-- 				            <div class="modal-content"> -->
<!-- 				                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button> -->
<!-- 				              <div class="modal-body"> -->
<!-- 				                <img src="http://placemi.com/ak6mk/1000x750" class="img-responsive"> -->
<!-- 				              </div> -->
<!-- 				                <div class="col-md-12 description"> -->
<!-- 				                  <h4>This is the 15th one on my Gallery</h4> -->
<!-- 				                </div> -->
<!-- 				            </div> -->
<!-- 				          </div> -->
<!-- 				        </div> -->
<!-- 				      </div> -->
<!-- 				    </div> -->
<!-- 				    <div class="col-md-4 col-sm-6 co-xs-12 gal-item"> -->
<!-- 				      <div class="box"> -->
<!-- 				        <a href="#" data-toggle="modal" data-target="#16"> -->
<!-- 				          <img src="http://placemi.com/pgco7/1000x750" class="img-responsive"> -->
<!-- 				        </a> -->
<!-- 				        <div class="modal fade" id="16" tabindex="-1" role="dialog"> -->
<!-- 				          <div class="modal-dialog" role="document"> -->
<!-- 				            <div class="modal-content"> -->
<!-- 				                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button> -->
<!-- 				              <div class="modal-body"> -->
<!-- 				                <img src="http://placemi.com/pgco7/1000x750" class="img-responsive"> -->
<!-- 				              </div> -->
<!-- 				                <div class="col-md-12 description"> -->
<!-- 				                  <h4>This is the 16th one on my Gallery</h4> -->
<!-- 				                </div> -->
<!-- 				            </div> -->
<!-- 				          </div> -->
<!-- 				        </div> -->
<!-- 				      </div> -->
<!-- 				    </div> -->
<!-- 				  </div> -->
<!-- 				</section> -->
<!--    			</div> -->
   		</div>
		<footer>
		    <div class="container">
		        <div class="col-md-10 col-md-offset-1 text-center">

		            <h6>Coded with <i class="fa fa-heart red"></i> by <a href="http://www.nabeel.co.in" target="_blank">Nabeel Kondotty</a></h6>
		        </div>
		    </div>
		</footer>
   </div>
@endsection