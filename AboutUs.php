<?php
include"header2.php";

if(isset($_POST['email_data'])){
	
	$msg = "User_Email = ".$_POST[email]."     Message : ".$_POST['message'];
	$sub=$_POST['subject'];
	
	try{
			if(mail("alamincse039@gmail.com",$sub,$msg)){
			    
		$message= "send success";
	}else{
     	$messag="send failed";
	}
	}catch(Exception $e){
		$messag=$e->getMessage();
	}

}
?>
<!--<!DOCTYPE html>
<html lang="en">
  <head>
 <meta charset="utf-8">    
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">!-->
<style type="text/css">
	*{
		margin:0;
		padding: 0;
	}
	body{
		font-family: arial;
	}
	#banner{
	    margin-top: 70px;
		width: 100%
		height:100%;
	}
	.container1{
		max-width: 57%;
		height: 100%;
		float: left;
	}
	.container1 img{
		max-width: 100%;
		height: 330px;
	}
	.container2{
		max-width: 35%;
		height: 250px;
		float:left ;
	}
	.container2 h4{
      margin-left: 90px;
      text-align: center;
	}
	#email_id{
	  margin-left: 130px;
      text-align: center;
	}
	.message{
	  margin-left: 130px;
      text-align: center;
	}

</style>

<!--</head>!-->
<body>
	
<div class="container-fluid" id="banner">
	<div class="container1">
			<img class="well" src="image/tt.jpg" width="100%">
         <h2>About Us</h2>
         <p class="well">
         	Information and communication technology (ICT), and specially the internet, have significantly changed many aspects of our social, political and economic environments. Now-a-days, the world is getting busy day by day. People are always moving with smart device. The knowledge of technology based devices like mobile, computer, tablet etc. can improve the daily life of our users. Using this device people can easily reduce their suffering. Our project highlight on the service that plays an important role in getting the query of the users (student/teacher) and provide more useful information about desired tuition service. Actually, it is a smart way of finding/providing tuition services. Our system follows the below techniques. They are- 
 
<br><br><b> User (tuition seeker / provider) Sign-up:</b> This section would be seen first whenever the user opens the website. If a user has not been signed up, he would have to create account. Later on, user can sign-in to his/her profile. Inform, all personal details, educational background, qualification, resumes, experience etc. 
 
<br><br><b>Search tuition:</b> In this section, the user search or provide tuitions through desirable queries. 
 
<br><br><b>Profile:</b>This is the main profile-page of the user (provider/seeker) account. User can check the status of his account here.Education: Here, the user gives his/her educational information. The database knows what you have studies, so you are given best suitable categories, courses, institutes with the details of different module.  

 </p>
	</div>

	<div class="container2">
		<h4 class="well">Contact with us Via Email</h4><br>
		<section class="message">
		    
		 	<?php
		if(isset($message)){
		    echo"<b>". $message."</b>";
		}
			
		?>
		</section>

	

<div class="well" id="email_id">
 <form class="form-horizontal" action=" " method="post">
    <div class="form-group">
      <label class="control-label col-sm-3" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="subject">Subject:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="subject" placeholder="subject" name="subject">
      </div>
    </div>

     <div class="form-group">
      <label class="control-label col-sm-4" for="message">Message:</label>
      <div class="col-sm-10">          
        <textarea cols="16" rows="6" class="form-control" id="message" placeholder="write your comment ..." name="message"></textarea> 
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-success" name="email_data" value="Send" >
      </div>
    </div>
  </form>
</div>

	</div>

</div>
<?php
include"footer.php";
?>
<!--</body>
</html>!-->


