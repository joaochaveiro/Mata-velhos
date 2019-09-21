<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Senioreye | Login Page</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/plugins/font-awesome/css/all.min.css" rel="stylesheet" />
	<link href="assets/plugins/animate/animate.min.css" rel="stylesheet" />
	<link href="assets/css/default/style.min.css" rel="stylesheet" />
	<link href="assets/css/default/style-responsive.min.css" rel="stylesheet" />
	<link href="assets/css/default/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	<!-- ================== BEGIN BASE JS ================== -->
    <link href="assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
	<script src="assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body class="pace-top">
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
		<!-- begin login -->
		<div class="login bg-black animated fadeInDown">
			<!-- begin brand -->
			<div class="login-header">
				<div class="brand">
				 <b>Senior</b>Eye
				</div>
				<div class="icon">
					<i class="fa fa-lock"></i>
				</div>
			</div>
			<!-- end brand -->
			<!-- begin login-content -->
			<div class="login-content">
					<div class="form-group m-b-20">
						<input type="text" id="utilizador" class="form-control form-control-lg inverse-mode" placeholder="Nome de utilizador" required />
					</div>
					<div class="form-group m-b-20">
						<input type="password" id="password" class="form-control form-control-lg inverse-mode" placeholder="Password" required />
					</div>
					<div class="checkbox checkbox-css m-b-20">
						<input type="checkbox" id="remember_checkbox" /> 
						<label for="remember_checkbox">
						Lembrar
						</label>
					</div>
					<div class="login-buttons">
						<button type="submit" onclick="login()" class="btn btn-success btn-block btn-lg">Entrar</button>
						<a href="javascript:;" data-click="swal-success" class="btn btn-success" hidden>Success</a>

					</div>
				</form>
			</div>
			<!-- end login-content -->
		</div>
		<!-- end login -->
	</div>
	<div id="myModal" class="modal fade" style="display: none;">
		<div class="modal-dialog modal-confirm">
			<div class="modal-content" >
				<div class="modal-header" style="background-color: rgb(153,204,50);">
					<div class="icon-box" style="width: 100%; height: auto; text-align: center;  ">
						<i class="fas fa-lg fa-fw m-r-10 fa-check-circle fa-10x" style="color: white;"></i>
						<br>
						<br>
				  </div>				
				</div>
				<div class="modal-body">
					<h4 class="modal-title" id="title">Bem-vindo!</h4>	
				</div>
				<div class="modal-footer">
				</div>
			</div>
		</div>
	</div>
	<div id="myModalerr" class="modal fade" style="display: none;">
		<div class="modal-dialog modal-confirm">
			<div class="modal-content" >
				<div class="modal-header" style="background-color: rgb(221, 70, 85);">
					<div class="icon-box" style="width: 100%; height: auto; text-align: center;  ">
						<i class="fas fa-lg fa-fw m-r-10 fa-times-circle fa-10x" style="color: white;"></i>
						<br>
						<br>
				  </div>				
				</div>
				<div class="modal-body">
					<h4 class="modal-title" id="title">Erro ao iniciar sessão. Tente novamente!</h4>	
				</div>
				<div class="modal-footer">
				</div>
			</div>
		</div>
	</div>
	<!-- end page container -->
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="assets/plugins/jquery/jquery-3.3.1.min.js"></script>
	<script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!--[if lt IE 9]>
		<script src="../assets/crossbrowserjs/html5shiv.js"></script>
		<script src="../assets/crossbrowserjs/respond.min.js"></script>
		<script src="../assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/plugins/js-cookie/js.cookie.js"></script>
	<script src="assets/js/theme/default.min.js"></script>
	<script src="assets/js/apps.min.js"></script>
	<script src="assets/plugins/gritter/js/jquery.gritter.js"></script>
	<script src="assets/js/demo/ui-modal-notification.demo.min.js"></script>
	<script src="assets/plugins/bootstrap-sweetalert/sweetalert.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<script>
		$(document).ready(function() {
			App.init();
			Notification.init();
		});

		$(document).on('keypress',function(e) {
		    if(e.which == 13) {
				login();
		    }
		});
				
		function login() {
			var utilizador= document.getElementById("utilizador").value;
			var password= document.getElementById("password").value;
			var data={};
			data["password"]=password;
			data["nome"]=utilizador;
			var xmlhttp = new XMLHttpRequest();
        
			xmlhttp.onreadystatechange=function(){
			if (this.readyState == 4 && this.status == 200) {
				var res= JSON.parse(this.responseText);
				if(res["val"]==1){
					swal ( "Sucesso!" ,  "Bem-vindo "+res["nome"]+"!" ,  "success" );
					setTimeout(function(){
						window.open("main.php", "_self");

					},1500);
				}else{
					swal ( "Erro!" ,  "Nome de utilizador ou palavra passe incorrectos!" ,  "error" );
					document.getElementById("utilizador").value="";
					document.getElementById("password").value="";
				}
			}
         }
        xmlhttp.open("POST", "php/logindb.php", true);
        xmlhttp.send(JSON.stringify(data));
		}
</script>
</body>
</html>
