<?= $this->extend('layouts/masterAdmin') ?>
    <?= $this->section('content') ?>
    <!-- <?php /*echo '<pre>'; print_r($propertylist); echo '</pre>'; */?>  -->
    <div class="main-body col">
    <?php if(session()->getFlashdata('msg')):?>
        <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
        <?php endif;?>
              <h1>Property</h1> <br>
              <?php 
                $noOfData2 = sizeof($propertylist); 
              ?>
              <h4>Number of Listed Properties: <?php echo $noOfData2?></h4>
             <a href="<?= base_url('public/admin/property/add')?>" class="btn btn-success">ADD</a>
             <div class="table-responsive" style="height: 100vh;">
             <table class="table table-sm table-striped table-hover table-bordered"  style="overflow=auto;">
                <thead>
                  <tr>
                    <th scope="col">SL #</th>
                    <th scope="col">Property ID</th>
                    <th scope="col">Property Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">City</th>
                    <th scope="col">Area</th>
                    <th scope="col">Size</th>
                    <th scope="col">Beds</th>
                    <th scope="col">Baths</th>
                    <th scope="col">Price</th>
                    <th scope="col">Occupied</th>
                    <th scope="col">Floor Plan</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">Level</th>
                    <th scope="col">Email</th>
                    <th scope="col">Purpose</th>
                    <th scope="col">Property Type</th>
                    <th scope="col">Descriptive status</th>
                    <th scope="col">Amenities</th>
                    <th scope="col">Property Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody >
                  <?php foreach($propertylist as $index => $row) { ?> 
                  <tr>
                    <td><?php echo $index+1?></td>
                    <td><?php echo $row->property_id?></td>
                    <td><?php echo $row->property_name?></td>
                    <td  class="text-wrap"><?php echo $row->description?></td>
                    <td><?php echo $row->city?></td>
                    <td><?php echo $row->property_area?></td>
                    <td><?php echo $row->property_size?></td>
                    <td><?php echo $row->beds?></td>
                    <td><?php echo $row->baths?></td>
                    <td><?php echo $row->price?></td>
                    <td><?php echo ($row->is_occupied == true ? 'Yes' : 'No');?></td>
                    <td><img src="<?= base_url().$row->floor_plan?>" alt="" style="width:100px; height:100px;"></td>
                    <td><?php echo $row->phone_number?></td>
                    <td><?php echo $row->property_address?></td>
                    <td><?php echo $row->level?></td>
                    <td><?php echo $row->email?></td>
                    <td><?php echo $row->purpose_name?></td>
                    <td><?php echo $row->property_type_name?></td>
                    <td><?php echo $row->descriptive_status_name?></td>
                    <td><?php echo $row->amenities?></td>
                    <td><?php echo $row->property_status_name?></td>
                    <td>
                        <a href="<?= base_url('public/admin/property/edit/'.$row->property_id)?>" class="btn btn-secondary"><i class="fa-solid fa-pen-to-square" title="Edit"></i></a>
                        <a href="<?= base_url('public/admin/property/delete/'.$row->property_id)?>" class="btn btn-danger"><i class="fa-solid fa-trash" title="Delete"></i></a>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>      
             </div>
       </div>
    <?= $this->endSection() ?>