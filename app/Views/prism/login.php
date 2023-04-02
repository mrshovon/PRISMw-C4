
    <!-- main -->
    <?= $this->extend('layouts/master') ?>
    <?= $this->section('content') ?>
    <section style="height: 600px;" class="main">
        <form method="post">
           <h3>Login</h3>
           <div class="row">
                <div class="col-md-6">
                    <div class="form-group frm">
                        <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" value="" />
                    </div>
                    <div class="form-group frm">
                        <input type="password" name="pass" class="form-control" placeholder="Your password*" value="" />
                    </div>
                    <div>
                      <input type="checkbox" id="remember-me" name="remember-me" value="remember me">
                      <label for="remember-me"> Remeber Me</label><br><br>
                    </div>
                    <div class="form-group frm ">
                       <a href="<?=base_url('public/home/userdash')?>" class="btn btn-primary">Login</a>
                    </div>
                    <div>
                        <br><h5><a style="text-decoration:none;" href="">Forgot Password.</a></h5>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <?= $this->endSection() ?>
 
      
    <!-- main -->
    