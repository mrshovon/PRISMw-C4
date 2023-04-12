<?= $this->extend('layouts/masterAdmin') ?>
    <?= $this->section('content') ?>
    
    <div class="main-body col">
    <form action="<?=base_url('public/admin/companyprofile/create')?>" method="post">
    <?php if(session()->getFlashdata('msg')):?>
        <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
        <?php endif;?>
        <?php if(isset($validation)):?>
        <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
      <?php endif;?>
            <input type="hidden" name="actiontype" value="<?= isset($item) ? 'update' : 'insert' ?>"/>
            <input type="hidden" name="companyid" value="<?= isset($item) ? $item->company_id : '' ?>"/>
            <fieldset>
              <legend><?= isset($item) ? 'Edit' : 'Add' ?> Company Profile</legend>
              <div class="form-group">
                  <label for="company_name"><i class="zmdi zmdi-account material-icons-name"></i>Company Name: </label>
                  <input type="text" name="company_name" id="company_name" placeholder="company name" class="form-control" value="<?= isset($item) ? $item->company_name : '' ?>" />
              </div>
              <div class="form-group">
                  <label for="company_vision"><i class="zmdi zmdi-account material-icons-name"></i>Company Vision: </label>
                  <textarea name="company_vision" cols="30" rows="3" class="form-control" value="" ><?= isset($item) ? $item->company_vision : '' ?></textarea>
                  <!-- <input type="text" name="company_vision" id="company_vision" placeholder="company vision" class="form-control" value="" /> -->
              </div>
              <div class="form-group">
                  <label for="company_address"><i class="zmdi zmdi-account material-icons-name"></i>Company Address: </label>
                  <input type="text" name="company_address" id="company_address" placeholder="company address" class="form-control" value="<?= isset($item) ? $item->company_address : '' ?>" />
              </div>
              <div class="form-group">
                  <label for="company_email"><i class="zmdi zmdi-account material-icons-name"></i>Company Email: </label>
                  <!-- <textarea name="company_email" cols="30" rows="3" class="form-control" value="" ></textarea> -->
                  <input type="text" name="company_email" id="company_email" placeholder="company email" class="form-control" value="<?= isset($item) ? $item->company_email : '' ?>" />
              </div>
              <div class="form-group form-button">
                  <button type="submit" id="signup" class="btn btn-success" style="margin-top:2%;">Save</button> 
              </div>
             </fieldset>
          </form>      
       </div>
    <?= $this->endSection() ?>