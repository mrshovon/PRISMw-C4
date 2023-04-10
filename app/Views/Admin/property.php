<?= $this->extend('layouts/masterAdmin') ?>
    <?= $this->section('content') ?>
    
    <div class="main-body col">
              <h1>Property</h1> <br>
             <a href="<?= base_url('public/admin/property/add')?>" class="btn btn-success">ADD</a>
            <table class="table"  style="overflow-x=auto;">
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
                    <th scope="col">Purpose Code</th>
                    <th scope="col">Property Type Code</th>
                    <th scope="col">Des sts code</th>
                    <th scope="col">Amenities code</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($propertylist as $index => $row) { ?> 
                  <tr>
                    <td><?php $index+1?></td>
                    <td><?php echo $row->property_id?></td>
                    <td><?php echo $row->property_name?></td>
                    <td><?php echo $row->description?></td>
                    <td><?php echo $row->city?></td>
                    <td><?php echo $row->property_area?></td>
                    <td><?php echo $row->property_status?></td>
                    <td><?php echo $row->beds?></td>
                    <td><?php echo $row->baths?></td>
                    <td><?php echo $row->price?></td>
                    <td><?php echo $row->is_occupied?></td>
                    <td><?php echo $row->floor_plan?></td>
                    <td><?php echo $row->phone_number?></td>
                    <td><?php echo $row->property_address?></td>
                    <td><?php echo $row->level?></td>
                    <td><?php echo $row->email?></td>
                    <td><?php echo $row->purpose_code?></td>
                    <td><?php echo $row->property_type_code?></td>
                    <td><?php echo $row->amenities_code?></td>
                    <td><?php echo $row->property_status_code?></td>
                    <td>
                        <a href="" class="btn btn-secondary"><i class="fa-solid fa-pen-to-square" title="Edit"></i></a>
                        <a href="" class="btn btn-danger"><i class="fa-solid fa-trash" title="Delete"></i></a>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>      
       </div>
    <?= $this->endSection() ?>