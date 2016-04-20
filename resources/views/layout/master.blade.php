<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
     <title>@yield('title')</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{asset('css/fileinput.css') }}" media="all" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/fileinput.css') }}" media="all" rel="stylesheet" type="text/css" />
    <!-- Custom CSS -->
    <link href="{{asset('css/shop-homepage.css') }}" rel="stylesheet">
    <link href="{{asset('css/bootstrap-datepicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap-toggle.css') }}" rel="stylesheet">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <nav class="navbar navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="."><i class="glyphicon glyphicon-home"></i></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-left">
                    <li><a href=".">ទំព័រដើម</a></li>
                    <li><a href="#">អំពីក្រុមហ៊ុន</a></li>
                    <li><a href="listuser.php">គ្រប់គ្រងអ្នកប្រើប្រាស់</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <?php
                    if(isset($_SESSION['login_user'])){
                        session_start();
                        ?>
                        <li>
                            <a href="#">
                            Welcome to :
                            <?php

                                echo $_SESSION['login_user'];
                            ?>
                            </a>
                        </li>
                        <li>
                            <a href="./logout.php" style="padding:10px 8px 8px 10px;">
                                ចាកចេញ <img src="./asset/logout.png"  alt="ចាកចេញ" title="ចាកចេញ"/>
                            </a>
                        </li>
                        <?php
                    }
                    if(!isset($_SESSION['login_user'])){
                        ?>
                        <li><a href="{{ route('user.create') }}">ចុះ​ឈ្មោះ​ទីនេះ!</a></li>
                        <li>
                            <a class="btn btn-warning btn-outline btn-circle collapsed"  data-toggle="collapse" href="#nav-collapse2" aria-expanded="false" aria-controls="nav-collapse2">ចូល​</a>
                        </li>
                    <?php }?>
                </ul>
                    <div class="collapse nav navbar-nav nav-collapse slide-down" id="nav-collapse2">
                        <form class="navbar-form navbar-right form-inline" role="form" action="./login.php" method="post">
                            <div class="input-group">
                                <span class="input-group-addon"><i
                                    class="glyphicon glyphicon-user"></i></span> <input id="user_name"
                                    type="text" class="form-control" name="user_name" value=""
                                    placeholder="បញ្ចូលឈ្មោះ​គណនេយ្យ" required>
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon"><i
                                    class="glyphicon glyphicon-lock"></i></span> <input
                                    id="password" type="password" class="form-control"
                                    name="password" value="" placeholder="បញ្ចូល​លេខ​សំងាត់​" required>
                            </div>
                          <button type="submit" class="btn btn-primary" name="btn_login" >ចូល​</button>
                        </form>
                      </div>
            </div>
        </div>
    </nav>
    <!-- Page Content -->
    <div class="container wrapper-container">
        @yield('content')
    </div>
    <!-- /.container -->

    <div class="container">
        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="{{asset('js/jquery.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
	<script src="{{asset('js/js/fileinput.js')}}" type="text/javascript"></script>
	<script src="{{asset('js/js/fileinput_locale_es.js')}}" type="text/javascript"></script>
	<script src="{{asset('js/js/fileinput_locale_es.js')}}" type="text/javascript"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>

    <script src="{{asset('tinymce/tinymce.min.js') }}"></script>
    <script src="{{asset('js/bootstrap-toggle.js') }}"></script>
    <script src="{{asset('js/bootstrap-datepicker.min.js') }}"></script>
    <script src="http://uguru-realestate-us-jun202013.businesscatalyst.com/3d-slider/sliderengine/amazingslider.js"></script>
    <script src="http://uguru-realestate-us-jun202013.businesscatalyst.com/3d-slider/sliderengine/initslider-1.js"></script>
    <script src="{{asset('js/bootstrap-toggle.js') }}"></script>
</body>
<script>
	    $('.btn-toggle').click(function() {
	        $(this).find('.btn').toggleClass('active');

	        if ($(this).find('.btn-primary').size()>0) {
	            $(this).find('.btn').toggleClass('btn-primary');
	        }
	        if ($(this).find('.btn-danger').size()>0) {
	            $(this).find('.btn').toggleClass('btn-danger');
	        }
	        if ($(this).find('.btn-success').size()>0) {
	            $(this).find('.btn').toggleClass('btn-success');
	        }
	        if ($(this).find('.btn-info').size()>0) {
	            $(this).find('.btn').toggleClass('btn-info');
	        }

	        $(this).find('.btn').toggleClass('btn-default');

	    });

        tinymce.init({
                selector: "textarea",
                theme: "modern",
                image_caption:true,
                language:'km_KH',
                plugins: [
                     "advlist autolink link image lists charmap print preview hr anchor pagebreak",
                     "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
                     "table contextmenu directionality emoticons paste textcolor responsivefilemanager code"
               ],
               toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
               toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
               image_advtab: true ,
               external_filemanager_path:"/filemanager/",
               filemanager_title:"Responsive Filemanager" ,
               external_plugins: { "filemanager" : "/filemanager/plugin.min.js"}
             });
    </script>
    <script>
      var firstDayOfMonth = function() {
            // your special logic...
            return 5;
        };

        var d = new Date();
        var currMonth = d.getMonth();
        var currYear = d.getFullYear();
        var startDate = new Date(currYear,currMonth,firstDayOfMonth());
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
            //For datepicker
            $('#married_date').datepicker({
                format: "yyyy-mm-dd",
                //todayBtn: true,
                clearBtn: true,
                orientation: "top auto",
                //daysOfWeekHighlighted: "0,6",
                calendarWeeks: true,
                autoclose: true,
                todayHighlight: true,
                //datesDisabled: ['03/06/2016', '03/21/2016'],
                toggleActive: true
            });
            $('#married_date').datepicker('setDate',startDate);
        });

        $('.btn-toggle').click(function() {
    		$(this).find('.btn').toggleClass('active');

    		if ($(this).find('.btn-primary').size()>0) {
    			$(this).find('.btn').toggleClass('btn-primary');
    		}
    		if ($(this).find('.btn-danger').size()>0) {
    			$(this).find('.btn').toggleClass('btn-danger');
    		}
    		if ($(this).find('.btn-success').size()>0) {
    			$(this).find('.btn').toggleClass('btn-success');
    		}
    		if ($(this).find('.btn-info').size()>0) {
    			$(this).find('.btn').toggleClass('btn-info');
    		}

    		$(this).find('.btn').toggleClass('btn-default');

    	});
 </script>
<script>
    $('#file-fr').fileinput({
        language: 'fr',
        uploadUrl: '#',
        allowedFileExtensions : ['jpg', 'png','gif'],
    });
    $('#file-es').fileinput({
        language: 'es',
        uploadUrl: '#',
        allowedFileExtensions : ['jpg', 'png','gif'],
    });
    $("#file-0").fileinput({
        'allowedFileExtensions' : ['jpg', 'png','gif'],
    });
    $("#file-1").fileinput({
        uploadUrl: '#', // you must set a valid URL here else you will get an error
        allowedFileExtensions : ['jpg', 'png','gif'],
        overwriteInitial: false,
        maxFileSize: 1000,
        maxFilesNum: 10,
        //allowedFileTypes: ['image', 'video', 'flash'],
        slugCallback: function(filename) {
            return filename.replace('(', '_').replace(']', '_');
        }
	});
    /*
    $(".file").on('fileselect', function(event, n, l) {
        alert('File Selected. Name: ' + l + ', Num: ' + n);
    });
    */
	$("#file-3").fileinput({
		showUpload: false,
		showCaption: false,
		browseClass: "btn btn-primary btn-lg",
		fileType: "any",
        previewFileIcon: "<i class='glyphicon glyphicon-king'></i>"
	});
	$("#file-4").fileinput({
		uploadExtraData: {kvId: '10'}
	});
    $(".btn-warning").on('click', function() {
        if ($('#file-4').attr('disabled')) {
            $('#file-4').fileinput('enable');
        } else {
            $('#file-4').fileinput('disable');
        }
    });
    $(".btn-info").on('click', function() {
        $('#file-4').fileinput('refresh', {previewClass:'bg-info'});
    });
    /*
    $('#file-4').on('fileselectnone', function() {
        alert('Huh! You selected no files.');
    });
    $('#file-4').on('filebrowse', function() {
        alert('File browse clicked for #file-4');
    });
    */
    $(document).ready(function() {
        $("#test-upload").fileinput({
            'showPreview' : false,
            'allowedFileExtensions' : ['jpg', 'png','gif'],
            'elErrorContainer': '#errorBlock'
        });
        /*
        $("#test-upload").on('fileloaded', function(event, file, previewId, index) {
            alert('i = ' + index + ', id = ' + previewId + ', file = ' + file.name);
        });
        */
    });
	</script>
</html>
