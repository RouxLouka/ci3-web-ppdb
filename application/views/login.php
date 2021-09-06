

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Masuk</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144808195-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-144808195-1');
	</script>
    <script src="jquery.min.js"></script>
	<style>body{background-color:#17a2b8;}
	@media screen and (max-width: 600px) {
h4{font-size:85%;}
}
.container{
	background-color:#2c3e50;
	width:70%;
	border: 3px white;
	border-style:solid;
	border-radius:30px;
	padding-left:10%;
	padding-right:10%;
	padding-top:3%;
	padding-bottom:2%;
}
.btn{
	width:40%;
}
	</style>
	<link rel="icon" 
      type="image/png" 
      href="favicon.png">
  </head>
  <body>
  
  <div align="center">
  
  
  

  <a href="<?php echo base_url('dashboard'); ?>"><img src="<?php echo base_url(); ?>assets/images/logo.png" width="30%" style="margin-top:2%" \></a>

	<br \><br \>
			<div class="container">
					<div style="color:white">
					<label>Login</label><br \>
					</div>
                <form method="post">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" name="email" autofocus required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary" name="btn-login">Masuk</button>
					<a class="btn btn-info text-light" href="<?php echo base_url('register'); ?>">Daftar</a>
                </form>
			
			<br \>
        </div></div>
       
     
	
	
  </body>
</html>
