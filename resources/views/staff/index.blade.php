@extends('layout.master')
@section('title')
    Welcome to my page
@endsection
@section('content')
   <!-- /.row -->
    <br />
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong> {{trans('menu.staff_list')}}</strong>
                    <div class="pull-right">
                        <input id="checkall" type="checkbox" name="staff[]" value="" />
                        <label for="checkall"> Check All</label>
                        <a href="{{route('staff.new')}}" class="btn btn-primary btn-xs"><i class="fa fa-plus" aria-hidden="true"></i> <strong>{{trans('menu.add')}}</strong></a>
                        <a href="{{route('staff.new')}}" class="btn btn-warning btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <strong>{{trans('menu.edit')}}</strong></a>
                        <a href="{{route('staff.new')}}" class="btn btn-danger btn-xs"><i class="fa fa-trash" aria-hidden="true"></i> <strong>{{trans('menu.delete')}}</strong></a>
                    </div>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr class="btn-primary">
                                    <th>Nº</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Team</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<?php $id = 1 ?>
                            	@foreach($stafflist as $list)
                            		<?php
                            			if($id % 2 == 0){
                            				$class="even";
                            			}else{
                            				$class="odd";
                            			}
                            		?>
    								<tr class="<?php echo $class;?>">
                                        <td class="center text-center">{{$id}}</td>
                                        <td class="center text-center">{{$list->lname.' '.$list->fname}}</td>
                                        <td class="center text-center">{{$list->position}}</td>
                                        <td class="center text-center">{{$list->team}}</td>
                                        <td class="center text-center">{{$list->phone}}</td>
                                        <td class="center text-center">{{$list->email}}</td>
                                        <td class="center text-center">
                                        	<a href="#" class="label label-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a> &nbsp; <a href="#" class="label label-danger"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
                                        </td>
                                    </tr>
                                   <?php $id++ ?>
                            	@endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
@endsection
@section('scripts')
   <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset('/js/bootstrap-toggle.js') }}"></script>
    <script src="{{asset('/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{asset('/startbootstrap-admin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{asset('/startbootstrap-admin/bower_components/metisMenu/dist/metisMenu.min.js') }}"></script>
    <!-- DataTables JavaScript -->
	<script src="{{asset('/startbootstrap-admin/bower_components/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{asset('/startbootstrap-admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js')}}"></script>

    <!-- Custom Theme JavaScript -->
	 <script src="{{asset('/startbootstrap-admin/dist/js/sb-admin-2.js') }}"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
@endsection