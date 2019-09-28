<!DOCTYPE html>
<html lang="en">
<head>

    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrarse en Mercado Nuestra Herencia</title>
</head>
<body>

    <div class="container" id="wrap">
	  
        <div class="col-md-6 col-md-offset-3">
            <form action="r" method="post" accept-charset="utf-8" class="form" role="form">
                <legend>Registrarse en Mercado Nuestra Herencia</legend>
                    <h4></h4>
                    <div >
                        <div class="col-xs-6 col-md-6">
                            <input type="text" name="firstname" value="" class="form-control input-lg" placeholder="Nombres" />
                            <input type="text" name="lastname" value="" class="form-control input-lg" placeholder="Apellidos"/>
                        </div>
                        <div class="col-xs-6 col-md-6">
                            <input type="text" name="email" value="" class="form-control input-lg" placeholder="Your Email"/>
                        </div>
                        <div class="col-xs-6 col-md-6">
                            <input type="password" name="password" value="" class="form-control input-lg" placeholder="Contraseña"/>
                            <input type="password" name="confirm_password" value="" class="form-control input-lg" placeholder="Confirma tu contraseña"/>
                        </div>               
                    </div>
        
              <span class="help-block">By clicking Create my account, you agree to our Terms and that you have read our Data Use Policy, including our Cookie Use.</span>
                <button class="btn btn-lg btn-primary btn-block signup-btn" type="submit">Crear cuenta</button>
            </form>          
        
</div>            



    
</body>

<style>
#wrap{
background-image: -ms-linear-gradient(top, #FFFFFF 0%, #D3D8E8 100%);
/* Mozilla Firefox */ 
background-image: -moz-linear-gradient(top, #FFFFFF 0%, #D3D8E8 100%);
/* Opera */ 
background-image: -o-linear-gradient(top, #FFFFFF 0%, #D3D8E8 100%);
/* Webkit (Safari/Chrome 10) */ 
background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #FFFFFF), color-stop(1, #D3D8E8));
/* Webkit (Chrome 11+) */ 
background-image: -webkit-linear-gradient(top, #FFFFFF 0%, #D3D8E8 100%);
/* W3C Markup, IE10 Release Preview */ 
background-image: linear-gradient(to bottom, #FFFFFF 0%, #D3D8E8 100%);
background-repeat: no-repeat;
background-attachment: fixed;
width: 524px;

border: 40%;
}
legend{
	color:#141823;
	font-size:25px;
	font-weight:bold;
}
.signup-btn {
  background-image: linear-gradient(to bottom, #39ace7, #39ace7);
  -webkit-border-radius: 4;
  -moz-border-radius: 4;
  border-radius: 4px;
  text-shadow: 0px 1px 0px #898a88;
  -webkit-box-shadow: 0px 0px 0px #a4e388;
  -moz-box-shadow: 0px 0px 0px #a4e388;
  box-shadow: 0px 0px 0px #a4e388;
  font-family: Arial;
  color: #ffffff;
  font-size: 20px;
  padding: 10px 20px 10px 20px;
  border: solid #3b6e22  1px;
  text-decoration: none;
}

.navbar-default .navbar-brand{
		color:#fff;
		font-size:30px;
		font-weight:bold;
	}
.form .form-control { margin-bottom: 10px; }
@media (min-width:768px) {
	#home{
		margin-top:50px;
	}
	#home .slogan{
		color: #0e385f;
		line-height: 29px;
		font-weight:bold;
	}
}
</style>

</html>