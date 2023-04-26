
<?= $this->extend('layouts/masterAL') ?>
<?= $this->section('content') ?>
<section style="height: 600px; display: flex; margin-top:5%;" class="main">
      <div class="">
        <div class="zoom-box">
            <img style="margin-left: 70px; margin-top: 35px; width: 400px;" src="<?=base_url('public/images/dls.png')?>" alt="">
        </div>
      </div>
        <form action="<?=base_url('public/user/HomeAL/requestLegalservices')?>" method="post" style="margin-top: 80px; width:550px; margin-left: 70px; box-sizing: border-box;">
           <h3>Take our expert's help for legal and documentation services.</h3> <br>
           <?php if(session()->getFlashdata('msg')):?>
                        <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                        <?php endif;?>
           <div class="">
                <div class="">
                    <div class="form-group frm">
                        <input type="text" name="name" class="form-control" placeholder="Your Name *" value="" />
                    </div>
                    <div class="form-group frm">
                        <input type="text" name="email" class="form-control" placeholder="Your Email *" value="" />
                    </div>
                    <div class="form-group frm">
                      <input type="text" name="phone" class="form-control" placeholder="Your Phone Nnumber *" value="" />
                    </div>
                    <div class="form-group frm">
                      <div class="dropdown">
                        <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          List of Services we offer
                        </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <?php foreach($servicelist as $item) { ?>
                            <input type="checkbox" name="service[]" value="<?php echo $item->look_up_id ?>" style="padding: 5px; font-size:10px;"> <?php echo $item->look_up_name ?> <br>
                          <?php } ?> 
                          </div>
                      </div>
                    </div>
                    <div class="form-group frm">
                        <input  type="submit" name="btnSubmit" class="btn btn-success" value="Request for service" />
                    </div>
                </div>
            </div>
        </form>  
    </section>
<?= $this->endSection() ?>
  

    