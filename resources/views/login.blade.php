<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Login Template</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
  <style>
    body {
  font-family: "Karla", sans-serif;
  background-color: #fff;
  min-height: 100vh;
}

.brand-wrapper {
  padding-top: 7px;
  padding-bottom: 8px;
}
.brand-wrapper .logo {
  height: 25px;
}

.login-section-wrapper {
  display: -webkit-box;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  flex-direction: column;
  padding: 68px 100px;
  background-color: #fff;
}
@media (max-width: 991px) {
  .login-section-wrapper {
    padding-left: 50px;
    padding-right: 50px;
  }
}
@media (max-width: 575px) {
  .login-section-wrapper {
    padding-top: 20px;
    padding-bottom: 20px;
    min-height: 100vh;
  }
}

.login-wrapper {
  width: 300px;
  max-width: 100%;
  padding-top: -20px;
  padding-bottom: 24px;
}
@media (max-width: 575px) {
  .login-wrapper {
    width: 100%;
  }
}
.login-wrapper label {
  font-size: 14px;
  font-weight: bold;
  color: #b0adad;
}
.login-wrapper .form-control {
  border: none;
  border-bottom: 1px solid #e7e7e7;
  border-radius: 0;
  padding: 9px 5px;
  min-height: 40px;
  font-size: 18px;
  font-weight: normal;
}
.login-wrapper .form-control::-webkit-input-placeholder {
  color: #b0adad;
}
.login-wrapper .form-control::-moz-placeholder {
  color: #b0adad;
}
.login-wrapper .form-control:-ms-input-placeholder {
  color: #b0adad;
}
.login-wrapper .form-control::-ms-input-placeholder {
  color: #b0adad;
}
.login-wrapper .form-control::placeholder {
  color: #b0adad;
}
.login-wrapper .login-btn {
  padding: 13px 20px;
  background-color: black;
  border-radius: 0;
  font-size: 20px;
  font-weight: bold;
  color: #fff;
  margin-bottom: 14px;
}
.login-wrapper .login-btn:hover {
  border: 1px solid black;
  background-color: #fff;
  color: black;
}
.login-wrapper a.forgot-password-link {
  color: #080808;
  font-size: 14px;
  text-decoration: underline;
  display: inline-block;
  margin-bottom: 14px;
}
@media (max-width: 575px) {
  .login-wrapper a.forgot-password-link {
    margin-bottom: 16px;
  }
}
.login-wrapper-footer-text {
  font-size: 16px;
  color: #000;
  margin-bottom: 0;
}

.login-title {
  font-family: "Karla", sans-serif;
  font-size: 30px;
  color: #000;
  font-weight: bold;
  margin-bottom: 25px;
}

.login-img {
  width: 100%;
  height: 100vh;
  -o-object-fit: cover;
  object-fit: cover;
  -o-object-position: left;
  object-position: left;
}

.login-btn[disabled] {
  background-color: #5c5a5a;
  cursor: not-allowed;
}

  </style>
</head>

<body>
  <main>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 login-section-wrapper">
          <div class="brand-wrapper">
            <h1 class="logo login-title"><img src="{{asset('assets/album4.png')}}" alt="logo" class="logo">
              Collabo <b>Album</b></h1>
          </div>
          <div class="login-wrapper my-auto">
            <h1 class="login-title">Log <b>In</b></h1>
            <!-- <form >
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="email@example.com"
                   />
              </div>
              <div class="form-group mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control"
                  placeholder="enter your passsword" />
              </div>
              <button class="btn btn-block login-btn login-title" >Login</button>
             
            </form> -->
            <a  class="text-reset">Forgot password?</a>
            <p class="login-wrapper-footer-text">
              Don't have an account?
              <a class="text-reset">Register here</a>
            </p>
          </div>
        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
          <img  src="{{asset('assets/album3.jpg')}}" alt="login image" class="login-img" />
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>