<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In</title>
    <link rel="icon" href="<?=base_url('public/images/favicon.ico')?>">
    <!-- Font Icon -->
    <link rel="stylesheet" href="<?=base_url('public/fonts/material-icon/css/material-design-iconic-font.min.css')?>">
    <!-- Main css -->
    <link rel="stylesheet" href="<?=base_url('public/css/style-ls.css')?>">
    <link href="<?=base_url('public/lib/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
   <style>
     button:focus {
        outline: 1px dotted;
        outline: none -webkit-focus-ring-color;
        }
    .hover{
        background: #ffffff !important;
        color: #2eca6a !important;
        border: 1px solid #2eca6a !important;
        border-radius: 20px;
        font-family: revert;
    }
    .hover:hover{
        background: #2eca6a !important;
        color: #ffffff !important;
        border-radius: 20px;
    }
   </style>
</head>
<body>
    <div class="main" style="padding-top: 20px;">
        <div>
            <h3 class="sinse-title" style="text-align: center; color: #2eca6a">PRISM PROPERTIES
              <br>
              <p>Log in to experiance the best property buy,sell and rent service</p>
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
                        <form method="post" action="<?=base_url('public/login/signin')?>" class="register-form-withemail" id="login-form" style="display:none;">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="email" id="your_name" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="your_pass" placeholder="Password"/>
                            </div>
                            <div class="form-group form-button">
                                <button type="submit" id="signin" class="form-submit" style="border: none;">Log In</button>
                            </div>
                        </form>
                        <form method="post" action="<?=base_url('public/login/phonesignin')?>" class="register-form-withphone" id="" style="display:block;">
                            <div class="form-group">
                                <label for="phone"><i class="zmdi zmdi-phone"></i><span> (+880) </span></label>
                                <input style="padding-left: 65px;" type="text" name="phone" id="phone" placeholder="1XXXXXXXXX"/>
                            </div>
                            <div class="form-group form-button">
                                <button type="submit" class="form-submit" style="border: none;">Log In</button>
                            </div>
                        </form>
                        <button type="button" id="switch" class="form-submit hover" style="border: none;" onclick="switchlogin()"><i class="zmdi zmdi-email" id="iconswitch"></i> LOGIN with Email</button>
                        <button type="button" id="switch" class="form-submit hover" style="border: none;"><i class="fa-brands fa-google" id="iconswitch"></i> LOGIN with Gmail</button>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- JS -->
    <script src="<?=base_url('public/js/main-ls.js')?>"></script>
    <script src="<?=base_url('public/js/custom.js')?>"></script>
    <script src="https://kit.fontawesome.com/34df789c41.js" crossorigin="anonymous"></script>
</body>
</html>
