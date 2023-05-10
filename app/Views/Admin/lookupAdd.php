<?= $this->extend('layouts/masterAdmin') ?>
    <?= $this->section('content') ?>
    
    <div class="main-body col">
    <form action="<?=base_url('public/admin/lookup/create')?>" method="post">
            <input type="hidden" name="actiontype" value="<?= isset($item) ? 'update' : 'insert' ?>"/>
            <input type="hidden" name="lookupid" value="<?= isset($item) ? $item->look_up_id : '' ?>"/>
            <fieldset>
              <legend><?= isset($item) ? 'Edit' : 'Add' ?> Look Up</legend>
              <div class="form-group">
                  <label for="lookupname"><i class="zmdi zmdi-account material-icons-name"></i>Look Up Name: </label>
                  <input type="text" name="lookupname" id="lookupname" placeholder="look up name" class="form-control" value="<?= isset($item) ? $item->look_up_name : '' ?>" />
              </div>
              <div class="form-group">
                  <label for="shortname"><i class="zmdi zmdi-account material-icons-name"></i>Short Name: </label>
                  <input type="text" name="shortname" id="shortname" placeholder="short name" class="form-control" value="<?= isset($item) ? $item->short_name : '' ?>" />
              </div>
              <div class="form-group">
                  <label for="sortorder"><i class="zmdi zmdi-account material-icons-name"></i>Sort Order: </label>
                  <input type="text" name="sortorder" id="sortorder" placeholder="sort order" class="form-control" value="<?= isset($item) ? $item->sort_order : '' ?>" />
              </div>
              <div class="form-group">
                  <label for="looktypeid"><i class="zmdi zmdi-account material-icons-name"></i>Look Type ID: </label>
                  <SELECT name="looktypeid" id="looktypeid" class="form-control" onchange="getReflookup(this,'<?php echo base_url(); ?>')">
                  <option value="">Select...</option>
                    <?php foreach($looktypelist as $item) { ?>
                      <option value="<?php echo $item->look_type_id ?>"><?php echo $item->look_type_name ?></option>
                     <?php } ?> 
                  </SELECT>
              </div>
              <div class="form-group">
                  <label for="reflookupid"><i class="zmdi zmdi-account material-icons-name"></i>Ref Lookup ID: </label>
                  <SELECT name="reflookupid" id="reflookupid" class="form-control">
                    <option value="">Select...</option>
                    
                  </SELECT>
                </div>
              <div class="form-group form-button">
                  <button type="submit" id="signup" class="btn btn-success" style="margin-top:2%;">Save</button> 
              </div>
             </fieldset>
          </form>
       </div>
    <?= $this->endSection() ?>