<?= $this->extend('layouts/masterAdmin') ?>
    <?= $this->section('content') ?>
    
    <div class="main-body col">
    <form action="<?=base_url('public/admin/looktype/create')?>" method="post">
            <input type="hidden" name="actiontype" value="<?= isset($item) ? 'update' : 'insert' ?>"/>
            <fieldset>
              <legend><?= isset($item) ? 'Edit' : 'Add' ?> Look Type</legend>
              <div class="form-group">
                  <label for="looktypename"><i class="zmdi zmdi-account material-icons-name"></i>Look Type Name: </label>
                  <input type="text" name="looktypename" id="looktypename" placeholder="look type name" class="form-control" value="<?= isset($item) ? $item->name : '' ?>" />
              </div>
              <div class="form-group form-button">
                  <button type="submit" id="signup" class="btn btn-success" style="margin-top:2%;">Save</button> 
              </div>
             </fieldset>
          </form>
    </div>
    <?= $this->endSection() ?>