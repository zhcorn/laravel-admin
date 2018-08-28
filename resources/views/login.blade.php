<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{config('admin.title')}} | {{ trans('admin.login') }}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="{{ admin_asset("/vendor/laravel-admin/AdminLTE/bootstrap/css/bootstrap.min.css") }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ admin_asset("/vendor/laravel-admin/font-awesome/css/font-awesome.min.css") }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ admin_asset("/vendor/laravel-admin/login/css/login.min.css") }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ admin_asset("/vendor/laravel-admin/AdminLTE/plugins/iCheck/square/blue.css") }}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="//oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="login">
<div class="form-signin">
  <div class="text-center">
    <!--<img src="assets/img/logo.png" alt="Metis Logo"> LOGO-->
    <h1>
      <a href="{{ admin_base_path('/') }}"><b>{{config('admin.name')}}</b></a>
    </h1>
  </div>
  <hr>
  <div class="tab-content">
    <div id="login" class="tab-pane active">
      <p class="text-muted text-center">
        {{ trans('admin.login') }}
      </p>
      <form action="{{ admin_base_path('auth/login') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group field-loginform-username">
          <label class="control-label" for="loginform-username">{{trans('admin.username')}}</label>
          <input type="text" id="loginform-username" value="{{ old('username') }}" placeholder="{{trans('admin.username')}}" class="form-control {{ $errors->has('username') ? ' is-invalid' : '' }}" name="username">
          @if ($errors->has('username'))
            <div class="invalid-feedback">
              {{ $errors->first('username') }}
            </div>
          @endif
        </div>
        <div class="form-group field-loginform-password">
          <label class="control-label" for="loginform-password">{{ trans('admin.password') }}</label>
          <input type="password" id="loginform-password" class="form-control {{ $errors->has('username') ? ' is-invalid' : '' }}" name="password" placeholder="{{trans('admin.password')}}">
          @if ($errors->has('password'))
            <div class="invalid-feedback">
              {{ $errors->first('password') }}
            </div>
          @endif
        </div>
        <button type="submit" class="btn btn-lg btn-primary btn-block" name="login-button">{{ trans('admin.login') }}</button>
      </form>
    </div>
  </div>
  <hr>
</div>
</body>
<!-- jQuery 2.1.4 -->
<script src="{{ admin_asset ("/vendor/laravel-admin/AdminLTE/plugins/jQuery/jQuery-3.3.1.min.js") }}"></script>
<!-- Bootstrap 4.0.0 -->
<script src="{{ admin_asset ("/vendor/laravel-admin/AdminLTE/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
<!-- iCheck -->
<script src="{{ admin_asset("/vendor/laravel-admin/AdminLTE/plugins/iCheck/icheck.min.js")}}"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
