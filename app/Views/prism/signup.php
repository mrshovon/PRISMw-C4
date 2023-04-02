
    <!-- main -->
    <?= $this->extend('layouts/master') ?>
    <?= $this->section('content') ?>
    <section style="height: 600px;"class="main">
        <form method="post">
           <h3>Sign Up</h3>
           <div class="row">
                <div class="col-md-6">
                    <div class="form-group frm">
                        <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" />
                    </div>
                    <div class="form-group frm">
                        <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" value="" />
                    </div>
                    <div class="form-group frm">
                        <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value="" />
                    </div>
                    <div class="form-group frm">
                        <input type="password" name="pass" class="form-control" placeholder="Your password*" value="" />
                    </div>
                    <div class="form-group frm">
                        <input type="password" name="rpass" class="form-control" placeholder="Retype your password *" value="" />
                    </div>
                    <div class="form-group frm">
                        <input  type="submit" name="btnSubmit" class="btn btn-success" value="Sign up" />
                    </div>
                    <div>
                      <br><h5><a style="text-decoration:none;" href="login.html">Login, if already registered.</a></h5>
                  </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <img  class="hide" style="margin-left: 100px;" src="<?=base_url('public/images/sign-up.jpg')?>" alt="">
                    </div>
                </div>
            </div>
        </form>
    </section>  
    <?= $this->endSection() ?>
 
      
    <!-- main -->
    