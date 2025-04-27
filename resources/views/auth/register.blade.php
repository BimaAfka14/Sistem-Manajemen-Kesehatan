<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registrasi</title>
  
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.min.css') }}">

  <style>
    .register-box {
      width: 400px;
    }

    .card {
      border-radius: 12px;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
    }

    .register-card-body {
      padding: 2rem;
    }

    .form-control {
      border-radius: 8px;
    }

    .btn-primary {
      border-radius: 8px;
      font-weight: 600;
    }

    .register-logo a {
      font-weight: bold;
      font-size: 28px;
      color: #343a40;
    }

    .input-group-text {
      background-color: #f8f9fa;
      border-radius: 0 8px 8px 0;
    }

    .input-group .form-control:first-child {
      border-radius: 8px 0 0 8px;
    }

    @media (max-width: 576px) {
      .register-box {
        width: 90%;
      }
    }
  </style>
</head>

<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <p style="font-size: 20px; color: #555; margin-bottom: 10px;">Selamat Datang</p>
    <a href="{{ url('/') }}"><b>Sendezt</b>Clinica</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <h4 class="text-center mb-4 font-weight-bold">Buat Akun Anda</h4>
      <form action="register" method="POST">
        @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Full name" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-map-marker-alt"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span id="togglePassword" class="fas fa-eye" style="cursor: pointer;"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-4">
          <input type="tel" class="form-control" id="no_hp" name="no_hp" placeholder="Phone number" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
        </div>
      </form>

      <div class="mt-3 text-center">
        <p>Sudah punya akun? <a href="{{ route('login') }}">Login di sini</a></p>
      </div>
    </div>
  </div>
</div>

<!-- Scripts -->
<script src="{{ asset('lte/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('lte/dist/js/adminlte.min.js') }}"></script>

<!-- Show/Hide Password Script -->
<script>
  const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#password');

  togglePassword.addEventListener('click', function (e) {
    // Toggle type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // Toggle eye icon
    this.classList.toggle('fa-eye-slash');
  });
</script>
</body>
</html>
