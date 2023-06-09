<!-- main -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
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
              <p>Join us to experiance the best property buy,sell and rent service</p>
            </h3>
        </div>    
    <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <a href="<?=base_url('public/home')?>" class="btn btn-info">Back</a> <br><br>
                        <h2 class="form-title">Sign up</h2>
                        <?php if(session()->getFlashdata('msg')):?>
                        <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                        <?php endif;?>
                        <?php if(isset($validation)):?>
                        <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                        <?php endif;?>
                        <form action="<?=base_url('public/signup/create')?>" method="post" class="register-form-withemail" id="register-form" style="display:none;">
                        <input type="hidden" name="signup_type" value="email"/>
                            <div class="form-group">
                                <SELECT name="title" id="title" class="form-control">
                                    <option value="MR.">Mr.</option>
                                    <option value="MRs.">Mrs.</option>
                                </SELECT>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="Phone"><i class="zmdi zmdi-phone"></i></label>
                                <input type="text" name="phone" id="email" placeholder="Your Phone"/>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="confpassword"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="confpassword" id="re_pass" placeholder="Repeat your password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <button type="submit" id="signup" class="form-submit" style="border: none;">Sign Up</button> 
                            </div>
                        </form>
                        <form action="<?=base_url('public/signup/create')?>" method="post" class="register-form-withphone" id="register-form" style="display:block;">
                        <input type="hidden" name="signup_type" value="phone"/>    
                            <div class="form-group">
                                <label for="Phone"><i class="zmdi zmdi-phone"></i><span> (+880) </span></label>
                                <input style="padding-left: 65px;" type="text" name="phone" id="email" placeholder="1XXXXXXXXX"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term-phone" id="agree-term-phone" class="agree-term" />
                                <label for="agree-term-phone" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <button type="submit" id="signup" class="form-submit" style="border: none;">Sign Up</button> 
                            </div>
                        </form>
                        <button type="button" id="switch" class="form-submit hover" style="border: none;" onclick="switchsignup()"><i class="zmdi zmdi-email" id="iconswitch"></i> SIGN UP with Email</button>
                        <button type="button" id="switch" class="form-submit hover" style="border: none;" onclick="switchsignup()"><i class="fa-brands fa-google" id="iconswitch"></i> SIGN UP with G-mail</button>
                    </div>
                    <div class="signup-image">
                        <figure><img src="<?=base_url('public/img/signup-image.jpg')?>" alt="sing up image"></figure>
                        <a href="<?=base_url('public/login')?>" class="signup-image-link">I am already member</a>
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
<!-- main -->
    