<?= $this->extend('layouts/masterAdmin') ?>
    <?= $this->section('content') ?>
    
    <div class="main-body col">
             <!-- <a href="" class="btn btn-success">ADD</a> -->
             <h1>Home Loan Request List</h1>
            <table class="table">
                <thead>
                  <tr>
                      <th scope="col">SL #</th>
                      <th scope="col">Name</th>
                      <th scope="col">Phone</th>
                      <th scope="col">Email</th>
                      <th scope="col">Property_ID</th>
                      <th scope="col">Make By</th>
                      <th scope="col">Create Date</th>
                      <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($loanreqlist as $index => $row) { ?> 
                    <tr>
                      <td><?php echo $index+1;?></td>
                      <td><?php echo $row->name;?></td>
                      <td><?php echo $row->phone_number;?></td>
                      <td><?php echo $row->email;?></td>
                      <td><?php echo $row->property_id;?></td>
                      <td><?php echo $row->auth_id;?></td>
                      <td><?php echo $row->action_date;?></td>

                      <td>
                          <!-- <a href="<?= base_url('public/admin/careers/edit/'.$row->email)?>" class="btn btn-secondary"><i class="fa-solid fa-pen-to-square" title="Edit"></i></a> -->
                          <a href="<?= base_url('public/admin/homeloan/delete/'.$row->email.'/'.$row->action_date)?>" class="btn btn-danger"><i class="fa-solid fa-trash" title="Resolve"></i></a>
                      </td>
                    </tr>
                    <?php } ?>
                </tbody>
              </table>      
       </div>
    <?= $this->endSection() ?>