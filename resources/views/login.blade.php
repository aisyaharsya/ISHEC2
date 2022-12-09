<!doctype html>
<html lang="en">
  <head>
  	<title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/style-login.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(assets/img/coba3.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">

                    @if (session()->has('success'))
						<script type="text/javascript">
							alert('{{ session('success') }}')
						</script>
                    @endif

                    @if (session()->has('error'))
					<script type="text/javascript">
						alert('{{ session('error') }}')
					</script>
                    @endif

					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Have an account?</h3>
		      	<form action="/login" method="post" class="signin-form">
                    @csrf
		      		<div class="form-group">
		      			<input type="text" value="{{ session('email') }}" name="email" class="form-control" placeholder="Email" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" name="password" type="password" class="form-control" placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Sign in</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Forgot Password tes</a>
								</div>
	            </div>
	          </form>
	          <p class="text-center">Belum memiliki akun? <a href="/register">Daftar</a></p>
	          </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min-log.js"></script>
  <script src="js/popper-log.js"></script>
  <script src="js/bootstrap-log.min.js"></script>
  <script src="js/main-log.js"></script>

	</body>
</html>

