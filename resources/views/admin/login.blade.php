<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin login &middot; Shipped.</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/css/admin.css">
</head>
<body class="admin">
<div class="login-wrap">
  <div class="card login-card">
    <div class="login-brand">
      <span class="brand-mark">S</span>
      <div>
        <h1>Shipped<span class="accent-dot">.</span> Admin</h1>
        <p>Sign in to manage your site</p>
      </div>
    </div>

    @if ($errors->any())
      <div class="errors">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form method="POST" action="{{ route('admin.login') }}">
      @csrf
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="text" style="display:none" tabindex="-1" autocomplete="off">
        <div class="input-wrap">
          <input type="password" id="password" name="password" required autocomplete="current-password">
          <button type="button" class="input-toggle" id="togglePassword" aria-label="Show password" aria-pressed="false">
            <svg class="icon-on" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="M1.5 12S5 5 12 5s10.5 7 10.5 7-3.5 7-10.5 7S1.5 12 1.5 12Z"/>
              <circle cx="12" cy="12" r="3"/>
            </svg>
            <svg class="icon-off" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="M17.94 17.94A10.94 10.94 0 0 1 12 19c-7 0-10.5-7-10.5-7a19.4 19.4 0 0 1 4.22-5.19M9.9 4.24A9.6 9.6 0 0 1 12 5c7 0 10.5 7 10.5 7a19.5 19.5 0 0 1-2.16 3.19M14.12 14.12a3 3 0 1 1-4.24-4.24"/>
              <path d="M1 1l22 22"/>
            </svg>
          </button>
        </div>
      </div>
      <div class="form-group form-check">
        <input type="checkbox" id="remember" name="remember">
        <label for="remember" style="margin:0;">Remember me</label>
      </div>
      <button type="submit" class="btn btn-primary" style="width:100%;">Log in</button>
    </form>
  </div>
</div>
<script>
  document.getElementById('togglePassword').addEventListener('click', function () {
    var input = document.getElementById('password');
    var isVisible = input.type === 'text';
    input.type = isVisible ? 'password' : 'text';
    this.classList.toggle('is-visible', !isVisible);
    this.setAttribute('aria-pressed', String(!isVisible));
    this.setAttribute('aria-label', isVisible ? 'Show password' : 'Hide password');
  });
</script>
</body>
</html>
