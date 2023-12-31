<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Ekka - Admin Dashboard HTML Template.">

  <title>Ekka - Admin Dashboard HTML Template.</title>

  <!-- GOOGLE FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&family=Poppins:wght@300;400;500;600;700;800;900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

		<!-- Ekka CSS -->
		<link id="ekka-css" rel="stylesheet" href="{{ asset('adminTheme/assets/css/ekka.css') }}" />

		<!-- FAVICON -->
		<link href="{{ asset('adminTheme/assets/img/favicon.png') }}" rel="shortcut icon" />
</head>

<body class="sign-inup" id="body">
  <div class="container d-flex align-items-center justify-content-center form-height pt-24px pb-24px">
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-10">
        <div class="card">
          <div class="card-header bg-primary">
            <div class="ec-brand">
              <a href="{{ route('admin.dashboard') }}" title="Ekka">
                <img class="ec-brand-icon" src="assets/img/logo/logo-login.png" alt="" />
              </a>
            </div>
          </div>
          <div class="card-body p-5">
            <h4 class="text-dark mb-5">Sign Up</h4>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-12 mb-4">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    <div class="form-group col-md-12 mb-4">
                        <input type="email" placeholder="Email"  name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Username"   name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group col-md-12 ">
                        <input id="password" type="password" placeholder="Password"  class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group col-md-12 ">
                        <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="col-md-12">


                    <button type="submit" class="btn btn-primary btn-block mb-4" > Sign Up</button>

                    <p class="sign-upp">Already have an account?
                        <a class="text-blue" href="{{ route('login') }}">Sign in</a>
                    </p>
                    </div>
                </div>
                </form>
                </div>
            </div>
          </div>
        </div>
      </div>
      <script src="{{ asset('adminTheme/assets/plugins/jquery/jquery-3.5.1.min.js')}}"></script>
      <script src="{{ asset('adminTheme/assets/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{ asset('adminTheme/assets/plugins/jquery-zoom/jquery.zoom.min.js')}}"></script>
      <script src="{{ asset('adminTheme/assets/plugins/slick/slick.min.js')}}"></script>

      <!-- Ekka Custom -->
      <script src="{{ asset('adminTheme/assets/js/ekka.js')}}"></script>
    </body>

    </html>

