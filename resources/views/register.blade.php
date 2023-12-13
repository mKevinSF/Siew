<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS -->
<link
  href="https://cdn.jsdelivr.net/npm/mdbootstrap/css/bootstrap.min.css"
  rel="stylesheet"
/>
<link
  href="https://cdn.jsdelivr.net/npm/mdbootstrap/css/mdb.min.css"
  rel="stylesheet"
/>

<!-- JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/mdbootstrap/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/mdbootstrap/js/mdb.min.js"></script>

</head>
<body>

    <!-- Pills navs -->
<ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="tab-login" data-mdb-toggle="pill" href="/login" role="tab"
      aria-controls="pills-login" aria-selected="true">Login</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="tab-register" data-mdb-toggle="pill" href="#pills-register" role="tab"
      aria-controls="pills-register" aria-selected="false">Register</a>
  </li>
</ul>
<!-- Pills navs -->

<!-- Pills content -->
<div class="container">
  @if($errors->any())
    <div>
      @foreach($errors->all() as $error)
        <div class="alert alert-danger">{{$error}}</div>
      @endforeach
    </div>
  @endif
</div>
<div class="tab-content">
  <div class="tab-pane fade show active" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
      <form action="{{ route('register.post') }}" method="POST">
          @csrf <!-- Tambahkan CSRF Token -->

          <!-- Username input -->
          <div class="form-outline mb-4">
              <input type="text" id="RegisterUsername" class="form-control" name="user_name"/>
              <label class="form-label" for="RegisterUsername">Username</label>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
              <input type="email" id="RegisterEmail" class="form-control" name="email"/>
              <label class="form-label" for="RegisterEmail">Email</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
              <input type="password" id="RegisterPassword" class="form-control" name="password"/>
              <label class="form-label" for="RegisterPassword">Password</label>
          </div>

          <!-- Repeat Password input -->
          <div class="form-outline mb-4">
              <input type="password" id="RegisterRepeatPassword" class="form-control" name="password_confirmation"/>
              <label class="form-label" for="RegisterRepeatPassword">Repeat Password</label>
          </div>

          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-block mb-4">Sign Up</button>

          <!-- Register buttons -->
          <div class="text-center">
              <p>Already have an account? <a href="/login">Login</a></p>
          </div>
      </form>
  </div>
</div>
<!-- Pills content -->

    <script src="https://cdn.jsdelivr.net/npm/mdbootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/mdbootstrap/js/mdb.min.js"></script>
</body>
</html>