<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link href="http://localhost:81/makan/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
     <!-- FontAwesome 4.3.0 -->
     <link href="http://localhost:81/makan/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
     <!-- Ionicons 2.0.0 -->
       <link href="http://localhost:81/makan/assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
     <!-- AdminLTE Skins. Choose a skin from the css/skins
          folder instead of downloading all of them to reduce the load. -->
     <link href="http://localhost:81/makan/assets/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
	<?php echo form_open('Coba/cekLoginCus'); ?>
    <form class="form-signin" method="post">
          <div class="text-center mb-4">
            <img src="<?php echo base_url(); ?>frontend/foot.PNG" width="120" height="120">
            <h1 class="h3 mb-3 font-weight-normal">user masuk</h1>
            <p>Build form controls with floating labels via the <code>:placeholder-shown</code> pseudo-element. <a href="https://caniuse.com/#feat=css-placeholder-shown">Works in latest Chrome, Safari, and Firefox.</a></p>
          </div>

          <div class="form-label-group">
            <input type="text" name="nama" id="nama" class="form-control" placeholder="" required autofocus>
            <label >masukkan nama</label>
          </div>

          <div class="form-label-group">
            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
            <label>Password</label>
          </div>

          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
          <p class="mt-5 mb-3 text-muted text-center">&copy; selamat menikmat</p>
    </form>

  	<?php echo form_close(); ?>
  </body>
</html>
