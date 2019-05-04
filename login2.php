<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <style type="text/css">
    	
    #login{
    
    }
    </style>
<body>
<div class="well" id="login" style="	max-width: 35%;min-height: 100%;">
	<form class="form-group">
	<table>
		<label for="email"></label>
		<input type="email" class="form-control" name="email" placeholder="Email" id="email">

		<label for="password"></label>
		<input type="password" class="form-control" name="password" placeholder="Password" id="password"><br>

		<label ></label>
		<input type="submit" class="btn btn-success" name="submit" value="Submit">
	</table>
</form>
</div>

</body>
</html>
 <?php
 include"connection.php";
                            if(isset($_REQUEST[' submit'])){

                                $email=$_REQUEST['email'];
                                $password=$_REQUEST['password'];
                                $statement=$conn->prepare("select * from tutor where and email=? and password=?");
                                $statement->execute(array($email,$password));
                                header("location:tutorprofile.php");
                            }
                        ?>