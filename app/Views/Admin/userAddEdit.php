<?= $this->extend('layouts/masterAdmin') ?>
    <?= $this->section('content') ?>
    
    <div class="main-body col">
        <?php if(session()->getFlashdata('msg')):?>
        <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
        <?php endif;?>
        <?php if(isset($validation)):?>
        <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
      <?php endif;?>
            <form action="<?=base_url('public/admin/user/create')?>" method="post">
            <input type="hidden" name="actiontype" value="<?= isset($item) ? 'update' : 'insert' ?>"/>
            <fieldset>
              <legend><?= isset($item) ? 'Edit' : 'Add' ?> User</legend>
              <div class="form-group">
                  <label for="name"><i class="zmdi zmdi-account material-icons-name"></i>Name: </label>
                  <input type="text" name="name" id="name" placeholder="Your Name" class="form-control" value="<?= isset($item) ? $item->name : '' ?>" />
              </div>
              <div class="form-group">
                  <label for="phone"><i class="zmdi zmdi-account material-icons-name"></i>Phone: </label>
                  <input type="text" name="phone" id="phone" placeholder="Phone" class="form-control" value="<?= isset($item) ? $item->phone : '' ?>" />
              </div>
              <div class="form-group">
                  <label for="email"><i class="zmdi zmdi-account material-icons-name"></i>Email: </label>
                  <input type="text" name="email" id="email" placeholder="email" class="form-control" value="<?= isset($item) ? $item->email : '' ?>" />
              </div>
              <div class="form-group">
                  <label for="password"><i class="zmdi zmdi-account material-icons-name"></i>Password: </label>
                  <input type="text" name="password" id="password" placeholder="password" class="form-control" value="" />
              </div>
              <div class="form-group">
                  <label for="confpassword"><i class="zmdi zmdi-account material-icons-name"></i>Confirm Password: </label>
                  <input type="text" name="confpassword" id="confpassword" placeholder="confirm password" class="form-control" value="" />
              </div>
              <div class="form-group form-button">
                  <button type="submit" id="signup" class="btn btn-success" style="margin-top:2%;">Save</button> 
              </div>
             </fieldset>
          </form>      
       </div>
    <?= $this->endSection() ?>