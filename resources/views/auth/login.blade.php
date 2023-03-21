<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Login</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="assets/img/icon.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Open+Sans:300,400,600,700"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"], urls: ['assets/css/fonts.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/azzara.min.css">
</head>
<body class="login">
    
	<div class="wrapper wrapper-login">
		<div class="container container-login animated fadeIn">
            <div class="row">
                <div class="col-md-8"></div>
                <div class="col-md-2 text-end"><img src="/assets/img/oficial.png" style="width: 80px; height: 80px;margin-top: -70px; margin-right: -70px;" alt=""></div>
            </div>

            <h1 class="text-center" style="margin-top: 50px;">SGRH</h1>
            <h4 class="text-center text-primary" style="">PAP 2022-2023</h4>
			<div class="login-form">
				<form action="" method="post">
					@csrf

                        <div class="col-md-12">
                            <div class="form-group form-floating-label">
                                <input id="username" type="text" class="form-control input-border-bottom"  @error('username') is-invalid @enderror"   name="username" required>
                                <label for="username" class="placeholder">Username</label>
                            </div>

                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-12">
                            <div class="form-group form-floating-label">
                                <input id="senha" name="password" type="password" class="form-control input-border-bottom" @error('password') is-invalid @enderror" required>
                                <label for="senha" class="placeholder">Senha</label>
                                <div class="show-password">
                                    <i class="flaticon-interface"></i>
                                </div>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

			        <div class="row form-sub m-0">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="rememberme">
                            <label class="custom-control-label" for="rememberme">Lembrar de Mim</label>
                        </div>

                        <a href="#" id="show-signup" class="link float-right">Esquece a senha ?</a>
                    </div>

                    <div class="form-action mt-3">
                        <div class="col-md-8 offset-md-2">
                            <button type="submit" class="btn btn-primary btn-rounded btn-login">
                                {{ __('Entrar') }}
                            </button>
                        </div>
                        </form>
                    </div>

                    <div class="container container-signup animated fadeIn">
                        <h3 class="text-center">Recuperando o acesso</h3>
                        <div class="login-form">
                            <div class="form-group form-floating-label">
                                <input id="email" name="email" type="email" class="form-control input-border-bottom" required>
                                <label for="email" class="placeholder">Email</label>
                            </div>
                            <div class="form-action">
                                <a href="#" id="show-signin" class="btn btn-danger btn-rounded btn-login mr-3">Voltar</a>
                                <a href="#" class="btn btn-primary btn-rounded btn-login">Recuperar senha</a>
                            </div>
                        </div>
                    </div>
         </div>
	</div>
	<script src="assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="assets/js/core/popper.min.js"></script>
	<script src="assets/js/core/bootstrap.min.js"></script>
	<script src="assets/js/ready.js"></script>
</body>
</html>
