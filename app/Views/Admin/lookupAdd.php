<?= $this->extend('layouts/masterAdmin') ?>
    <?= $this->section('content') ?>
    
    <div class="main-body col">
    <form action="<?=base_url('public/admin/lookup/create')?>" method="post">
            <input type="hidden" name="actiontype" value="<?= isset($item) ? 'update' : 'insert' ?>"/>
            <fieldset>
              <legend><?= isset($item) ? 'Edit' : 'Add' ?> Look Up</legend>
              <div class="form-group">
                  <label for="lookupname"><i class="zmdi zmdi-account material-icons-name"></i>Look Up Name: </label>
                  <input type="text" name="lookupname" id="lookupname" placeholder="look up name" class="form-control" value="<?= isset($item) ? $item->name : '' ?>" />
              </div>
              <div class="form-group">
                  <label for="shortname"><i class="zmdi zmdi-account material-icons-name"></i>Short Name: </label>
                  <input type="text" name="shortname" id="shortname" placeholder="short name" class="form-control" value="<?= isset($item) ? $item->phone : '' ?>" />
              </div>
              <div class="form-group">
                  <label for="sortorder"><i class="zmdi zmdi-account material-icons-name"></i>Sort Order: </label>
                  <input type="text" name="sortorder" id="sortorder" placeholder="sort order" class="form-control" value="" />
              </div>
              <div class="form-group">
                  <label for="looktypeid"><i class="zmdi zmdi-account material-icons-name"></i>Look Type ID: </label>
                  <input type="text" name="looktypeid" id="looktypeid" placeholder="look type id" class="form-control" value="" />
              </div>
              <div class="form-group form-button">
                  <button type="submit" id="signup" class="btn btn-success" style="margin-top:2%;">Save</button> 
              </div>
             </fieldset>
          </form>
       </div>
    <?= $this->endSection() ?>