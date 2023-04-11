<?= $this->extend('layouts/masterAdmin') ?>
    <?= $this->section('content') ?>
    
    <div class="main-body col">
    <form action="<?=base_url('public/admin/property/create')?>" method="post">
            <input type="hidden" name="actiontype" value="<?= isset($item) ? 'update' : 'insert' ?>"/>
            <fieldset>
              <legend><?= isset($item) ? 'Edit' : 'Add' ?> Property</legend>
              <div class="form-group">
                  <label for="name"><i class="zmdi zmdi-account material-icons-name"></i>Name: </label>
                  <input type="text" name="name" id="name" placeholder="name" class="form-control" value="<?= isset($item) ? $item->name : '' ?>" />
              </div>
              <div class="form-group">
                  <label for="description"><i class="zmdi zmdi-account material-icons-name"></i>Description: </label>
                  <textarea name="description" cols="30" rows="3" class="form-control" value="" ></textarea>
                  <!-- <input type="text" name="shortname" id="shortname" placeholder="short name" class="form-control" value="<?= isset($item) ? $item->phone : '' ?>" /> -->
              </div>
              <div class="form-group">
                  <label for="city"><i class="zmdi zmdi-account material-icons-name"></i>City: </label>
                  <input type="text" name="city" id="city" placeholder="city" class="form-control" value="" />
              </div>
              <div class="form-group">
                  <label for="area"><i class="zmdi zmdi-account material-icons-name"></i>Area: </label>
                  <input type="text" name="area" id="area" placeholder="area" class="form-control" value="" />
              </div>              <div class="form-group">
                  <label for="propertysize"><i class="zmdi zmdi-account material-icons-name"></i>Property Size: </label>
                  <input type="text" name="propertysize" id="propertysize" placeholder="propertysize" class="form-control" value="<?= isset($item) ? $item->name : '' ?>" />
              </div>
              <div class="form-group">
                  <label for="beds"><i class="zmdi zmdi-account material-icons-name"></i>Beds: </label>
                  <input type="text" name="beds" id="beds" placeholder="beds" class="form-control" value="<?= isset($item) ? $item->phone : '' ?>" />
              </div>
              <div class="form-group">
                  <label for="baths"><i class="zmdi zmdi-account material-icons-name"></i>Baths: </label>
                  <input type="text" name="baths" id="baths" placeholder="baths" class="form-control" value="" />
              </div>
              <div class="form-group">
                  <label for="price"><i class="zmdi zmdi-account material-icons-name"></i>Price: </label>
                  <input type="text" name="price" id="price" placeholder="price" class="form-control" value="" />
              </div>              <div class="form-group">
                  <label for="occupied"><i class="zmdi zmdi-account material-icons-name"></i>Occupied: </label>
                  <SELECT name="occupied" id="occupied" class="form-control">
                      <option value="1">Yes</option>
                      <option value="0">No</option>
                  </SELECT>
                  
              </div>
              <div class="form-group">
                  <label for="floorplan"><i class="zmdi zmdi-account material-icons-name"></i>Floor Plan: </label>
                  <input type="file" name="floorplan" id="floorplan" placeholder="floor plan" class="form-control" value="<?= isset($item) ? $item->phone : '' ?>" />
              </div>
              <div class="form-group">
                  <label for="phone"><i class="zmdi zmdi-account material-icons-name"></i>Phone: </label>
                  <input type="text" name="phone" id="phone" placeholder="phone" class="form-control" value="" />
              </div>
              <div class="form-group">
                  <label for="address"><i class="zmdi zmdi-account material-icons-name"></i>Address: </label>
                  <input type="text" name="address" id="address" placeholder="address" class="form-control" value="" />
              </div>
              <div class="form-group">
                  <label for="level"><i class="zmdi zmdi-account material-icons-name"></i>Level: </label>
                  <input type="text" name="level" id="level" placeholder="Level" class="form-control" value="<?= isset($item) ? $item->phone : '' ?>" />
              </div>
              <div class="form-group">
                  <label for="email"><i class="zmdi zmdi-account material-icons-name"></i>Email: </label>
                  <input type="text" name="email" id="email" placeholder="email" class="form-control" value="" />
              </div>
              <div class="form-group">
                  <label for="purposecode"><i class="zmdi zmdi-account material-icons-name"></i>Purpose Code: </label>
                  <SELECT name="purposecode" id="purposecode" class="form-control">
                    <?php foreach($purposelist as $item) { ?>
                      <option value="<?php echo $item->look_up_id ?>"><?php echo $item->look_up_name ?></option>
                     <?php } ?> 
                  </SELECT>
              </div>
              <div class="form-group">
                  <label for="propertytypecode"><i class="zmdi zmdi-account material-icons-name"></i>Property Type Code: </label>
                  <SELECT name="propertytypecode" id="propertytypecode" class="form-control">
                    <?php foreach($propertytypelist as $item) { ?>
                      <option value="<?php echo $item->look_up_id ?>"><?php echo $item->look_up_name ?></option>
                     <?php } ?> 
                  </SELECT>
              </div>
              <div class="form-group">
                  <label for="descriptivestatuscode"><i class="zmdi zmdi-account material-icons-name"></i>Descriptive Status Code: </label>
                  <SELECT name="descriptivestatuscode" id="descriptivestatuscode" class="form-control">
                    <?php foreach($descriptivelist as $item) { ?>
                      <option value="<?php echo $item->look_up_id ?>"><?php echo $item->look_up_name ?></option>
                     <?php } ?> 
                  </SELECT>
              </div>
              <div class="form-group">
                  <label for="amenitiescode"><i class="zmdi zmdi-account material-icons-name"></i>Amenities Code: </label>
                  <SELECT name="amenitiescode" id="amenitiescode" class="form-control" multiple="multiple">
                    <?php foreach($amenitylist as $item) { ?>
                      <option value="<?php echo $item->look_up_id ?>"><?php echo $item->look_up_name ?></option>
                     <?php } ?> 
                  </SELECT>
              </div>
              <div class="form-group">
                  <label for="propertystatuscode"><i class="zmdi zmdi-account material-icons-name"></i>Property Status Code: </label>
                  <SELECT name="propertystatuscode" id="propertystatuscode" class="form-control">
                    <?php foreach($propertystslist as $item) { ?>
                      <option value="<?php echo $item->look_up_id ?>"><?php echo $item->look_up_name ?></option>
                     <?php } ?> 
                  </SELECT>
              </div>
              <div class="form-group form-button">
                  <button type="submit" id="signup" class="btn btn-success" style="margin-bottom:2%; margin-top:2%;">Save</button> 
              </div>
             </fieldset>
          </form>
       </div>
    <?= $this->endSection() ?>