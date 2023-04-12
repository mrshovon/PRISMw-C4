<?= $this->extend('layouts/masterAdmin') ?>
    <?= $this->section('content') ?>
    
    <div class="main-body col">
            <form action="<?=base_url('public/admin/careers/create')?>" method="post">
            <input type="hidden" name="actiontype" value="<?= isset($item) ? 'update' : 'insert' ?>"/>
            <input type="hidden" name="careerid" value="<?= isset($item) ? $item->career_id : '' ?>"/>
            <fieldset>
              <legend><?= isset($item) ? 'Edit' : 'Add' ?> Job</legend>
              <div class="form-group">
                  <label for="job_title"><i class="zmdi zmdi-account material-icons-name"></i>Job Title: </label>
                  <input type="text" name="job_title" id="job_title" placeholder="Job Title" class="form-control" value="<?= isset($item) ? $item->job_title : '' ?>" />
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
                  <label for="job_description"><i class="zmdi zmdi-account material-icons-name"></i>Job Description: </label>
                  <textarea name="job_description" cols="30" rows="3" class="form-control" value="" ><?= isset($item) ? $item->job_description : '' ?></textarea>
                  <!-- <input type="text" name="password" id="password" placeholder="password" class="form-control" value="" /> -->
              </div>
              <div class="form-group form-button">
                  <button type="submit" id="signup" class="btn btn-success" style="margin-top:2%;">Save</button> 
              </div>
             </fieldset>
          </form>      
       </div>
    <?= $this->endSection() ?><textarea name="jobdescription" cols="30" rows="3"></textarea>