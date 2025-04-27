<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.min.css') }}">

  <style>
    .login-box {
      width: 400px;
    }

    .card {
      border-radius: 12px;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
    }

    .login-card-body {
      padding: 2rem;
    }

    .form-control {
      border-radius: 8px;
    }

    .btn-primary {
      border-radius: 8px;
      font-weight: 600;
    }

    .login-logo a {
      font-weight: bold;
      font-size: 28px;
    }
  </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <p style="font-size: 20px; color: #555; margin-bottom: 10px;">Selamat datang kembali</p>
    <a href="{{ route('dashboard') }}"><b>Sendezt</b>Clinica</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <h4 class="text-center mb-4 font-weight-bold">Login untuk mengakses akun Anda.</h4>
      <form action="login" method="POST">
        @csrf
        <div class="input-group mb-3">
          <input type="email" class="form-control" id="email" name="email" placeholder="Email Anda" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" id="password" name="password" placeholder="Password Anda" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span id="togglePassword" class="fas fa-eye" style="cursor: pointer"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary" style="width: 150px;">Sign In</button>
          </div>
        </div>
        
        <div class="row mt-3">
          <div class="col-12 text-center">
            <p class="mb-0">
              Belum punya akun? <a href="{{ route('register') }}">Daftar di sini</a>
            </p>
          </div>
        </div>        
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('lte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('lte/dist/js/adminlte.min.js') }}"></script>

<script>
  $(document).ready(function() {
    $('#togglePassword').on('click', function() {
      const passwordInput = $('#password');
      const icon = $(this);

      // toggle tipe input
      const type = passwordInput.attr('type') === 'password' ? 'text' : 'password';
      passwordInput.attr('type', type);

      // toggle icon
      if (type === 'text') {
        icon.removeClass('fa-eye').addClass('fa-eye-slash');
      } else {
        icon.removeClass('fa-eye-slash').addClass('fa-eye');
      }
    });
  });
</script>
</body>
</html>
