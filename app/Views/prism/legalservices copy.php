
<?= $this->extend('layouts/masterAL') ?>
<?= $this->section('content') ?>
<section style="height: 600px; display: flex; margin-top:5%;" class="main">
      <div class="">
        <div>
            <img style="margin-left: 70px; margin-top: 35px; width: 400px;" src="<?=base_url('public/images/dls.png')?>" alt="">
        </div>
      </div>
        <form method="post" style="margin-top: 80px; width:550px; margin-left: 70px; box-sizing: border-box;">
           <h3>Take our expert's help for legal and documentation services.</h3> <br>
           <div class="">
                <div class="">
                    <div class="form-group frm">
                        <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" />
                    </div>
                    <div class="form-group frm">
                        <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" value="" />
                    </div>
                    <div class="form-group frm">
                      <input type="text" name="txtEmail" class="form-control" placeholder="Your Phone Nnumber *" value="" />
                    </div>
                    <div class="form-group frm">
                      <label for="renovate">Documentation and Legal Services Offered:</label>
                      <select class="btn btn-warning" name="renovate" id="renovate">
                        <option value="service 1">Service 1</option>
                        <option value="service 2">Service 2</option>
                        <option value="service 3">Service 3</option>
                        <option value="service 4">Service 4</option>
                        <option value="service 5">Service 5</option>
                        <option value="service 6">Service 6</option>
                        <option value="service 7">Service 7</option>
                        <option value="service 8">Service 8</option>
                      </select>
                    </div>
                    <div class="form-group frm">
                        <input  type="submit" name="btnSubmit" class="btn btn-success" value="Request for service" />
                    </div>
                </div>
            </div>
        </form>  
    </section>
<?= $this->endSection() ?>
  

    