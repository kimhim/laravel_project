<?php 
include('phpmailer/PHPMailerAutoload.php');
?>
@extends('layout.master')
@section('title')
    Welcome to my page
@endsection
@section('content')
<?php 
 if(isset($_POST['btn-submit'])){
 		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
 		phpmailer($email,$name,$subject,$message);
 }

 function phpmailer($email,$name,$subject,$message){
 	//Create a new PHPMailer instance
	$mail = new PHPMailer();
	$mail->CharSet = 'UTF-8';
	$mail->IsSMTP(); // telling the class to use SMTP
	$mail->Host       = "mail.yourdomain.com"; // SMTP server
	$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing),1 = errors and messages
	                                           // 2 = messages only
	$mail->SMTPAuth   = true;                  // enable SMTP authentication
	$mail->SMTPSecure = "tls";                 // sets the prefix to the servier
	$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
	$mail->Port       = 587;          
	$mail->Host = "smtp.gmail.com";
	$mail->Username = "kimhim.hom@gmail.com";
	$mail->Password = "homkimhim093240717";
	//Set who the message is to be sent from
	$mail->setFrom($email, $name);
	//Set who the message is to be sent to
	$mail->addAddress('kimhim.hom@gmail.com', 'KIMHIM HOM');
	//Set the subject line
	$mail->Subject = $subject;
	//Read an HTML message body from an external file, convert referenced images to embedded,
	//convert HTML into a basic plain-text alternative body
	//Replace the plain text body with one created manually
	$mail->IsHTML(true);
	$mail->Body = $message;
	//Attach an image file

	//send the message, check for errors
	if (!$mail->send()) {
	    echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
	    echo "Message sent!";
	}

 }
?>
   <div class="row">
   		<h1>Registration Form</h1>
	   		<div class="col-lg-10">
	   			<h1 class="text-center">ផ្ញើរអ៊ីម៉ែល</h1>
				<form class="form-horizontal" role="form" action="{{route('user.submitmail')}}" method="post" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
					<div class="form-group">
						<label for="name" class="col-sm-4 control-label">Name :</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="name" name="name"
								placeholder="Name" />
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-4 control-label">Email :</label>
						<div class="col-sm-8">
							<input type="email" class="form-control" id="email" name="email"
								placeholder="Email">
						</div>
					</div>

					<div class="form-group">
						<label for="subject" class="col-sm-4 control-label">Subject :</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="subject" name="subject">
						</div>
					</div>
					<div class="form-group">
						<label for="message" class="col-sm-4 control-label">Message :</label>
						<div class="col-sm-8">
							<textarea  id="message" name="message"></textarea>
						</div>
					</div>
					<div class="form-group text-center">
						<div class="col-sm-offset-4 col-sm-8">
							<a href="." class="btn icon-btn btn-warning text-left"><span class="glyphicon glyphicon-arrow-left glyphicon btn-glyphicon glyphicon-plus img-circle text-danger"></span> ត្រលប់ក្រោយ</a>
							<button type="submit" class="btn icon-btn btn-primary" name="btn-submit"><span class="glyphicon btn-glyphicon glyphicon-plus img-circle text-success"></span>ផ្ញើរអ៊ីម៉ែល</button>
						</div>
					</div>
				</form>
	   		</div>
   		</div>
   </div>
@endsection