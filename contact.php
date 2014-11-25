<?php
if($_POST){
	$u_name = $_POST['u_name'];
	$u_email = $_POST['u_email'];
	$u_message = $_POST['u_message'];
	if($u_name!='' AND $u_email!='' AND $u_message!=''){
		$msg = "NAME: $u_name \n\n EMAIL: $u_email \n\n MESSAGE: $u_message";
		mail("devinsewell@gmail.com","Plaedio Partnerships, Advertising, or Sponsorship",$msg);
		$status = "Message sent, we will contact you shortly. Thanks. \n\n You Wrote: \n\n \"NAME: $u_name \n\n EMAIL: $u_email \n\n MESSAGE: $u_message\" \n\n <a href=''>Go Back</a>";
	}else{
		$err_status = "Please fillout form completely ";
	}
}else{

}
?><!DOCTYPE html>
<html>
<head>
	<title>Partnerships</title>
</head>
	<link rel="stylesheet" type='text/css' href='../styles.css' />
	<style>
	.btn_green{
		display:block;
		padding:10px 15px;
		background:#46a7b8;
		color:#fff;
		font-family:"HelveticaNeue-Bold", Arial, Sans-Serif;
		font-size:16px;
		border:none;
		cursor:pointer;
	}
	.i_text{
		width:380px;
		height:120px;
		border:1px solid #ededed;
		margin:0;
		padding:10px;
		font-family:"HelveticaNeue", Arial, Sans-Serif;
		font-size:16px;
	}
	.i_input{
		width:400px;
		border:1px solid #ededed;
		margin:0;
		padding:10px 0;
		font-family:"HelveticaNeue", Arial, Sans-Serif;
		font-size:16px;
	}
	.status{
		background:#f6e7c2;
		border:1px solid #c7ac6c;
		padding:10px;
		font-size:16px;
		text-align:center;
	}
	.err_status{
		background:#f6cfc2;
		border:1px solid #ad2e2e;
		padding:10px;
		font-size:16px;
		text-align:center;
		margin-bottom:10px;
	}
	.contact_form{
		width:400px;
		margin:0 auto;
	}
	</style>
<body>
	<h1 class='textCenter pb20'>Contact Us</h1>
	<div class='contact_form'>
	<?php if($status==''){ ?>
		<form action='index.php' method='post'>
			<?php if($err_status!=''){ 
				echo "<div class='err_status'>$err_status</div>";
			}
			?>
			<p>Your Name</p>
			<input type='text' name='u_name' class='i_input' value='<?php echo $u_name; ?>' />
			<p>Email</p>
			<input type='text' name='u_email' class='i_input' value='<?php echo $u_email; ?>' />
			<p>Message</p>
			<textarea name='u_message' class='i_text'><?php echo $u_message; ?></textarea>
			<input type='submit' value='Send' class='btn_green' />
		</form>
	<?php }else{ ?>
		<div class='status'><?php echo $status; ?></div>
	<?php } ?>
	</div>
</div>
</body>
</html>