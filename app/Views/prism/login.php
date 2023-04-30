
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?=base_url('public/fonts/material-icon/css/material-design-iconic-font.min.css')?>">
    <!-- Main css -->
    <link rel="stylesheet" href="<?=base_url('public/css/style-ls.css')?>">
    <link href="<?=base_url('public/lib/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

</head>
<body>
    <div class="main" style="padding-top: 20px;">
        <div>
            <h3 class="sinse-title" style="text-align: center; color: #2eca6a">PRISM PROPERTIES
              <br>
              <p>Join us to experiance the best property buy,sell and rent service</p>
            </h3>
            
        </div>    
       <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="<?=base_url('public/img/signin-image.jpg')?>" alt="sing up image"></figure>
                        <a href="<?=base_url('public/home/signup')?>" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <a href="<?=base_url('public/home')?>" class="btn btn-info">Back</a><br><br>
                        <h2 class="form-title">Log In</h2>
                        <?php if(session()->getFlashdata('msg')):?>
                        <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                        <?php endif;?>
                        <form method="post" action="<?=base_url('public/login/signin')?>" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="email" id="your_name" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="your_pass" placeholder="Password"/>
                            </div>
                            <!-- <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div> -->
                            <div class="form-group form-button">

                                <button type="submit"id="signin" class="form-submit" style="border: none;">Log In</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- JS -->
    <script src="<?=base_url('public/js/main-ls.js')?>"></script>

</body>
</html>
      
    <!-- main -->
    