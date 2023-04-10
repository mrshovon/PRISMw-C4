<?= $this->extend('layouts/masterAdmin') ?>
    <?= $this->section('content') ?>
    <div class="main-body col">
            <h1>Company Profile</h1> <br>
             <a href="<?= base_url('public/admin/companyprofile/add')?>" class="btn btn-success">ADD</a>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">SL #</th>
                    <th scope="col">Company ID</th>
                    <th scope="col">Company Name</th>
                    <th scope="col">Company Vision</th>
                    <th scope="col">Company Address</th>
                    <th scope="col">Company Email</th>
                    <th scope="col">Privecy Policy</th>
                    <th scope="col">Terms and Condition</th>
                    <th scope="col">Make By</th>
                    <th scope="col">Create Date</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($companylist as $index => $row) { ?> 
                  <tr>
                    <td><?php $index+1?></td>
                    <td><?php echo $row->company_id?></td>
                    <td><?php echo $row->company_name?></td>
                    <td><?php echo $row->company_vision?></td>
                    <td><?php echo $row->company_address?></td>
                    <td><?php echo $row->company_email?></td>
                    <td><?php echo $row->privecy_policy?></td>
                    <td><?php echo $row->terms_and_condition?></td>
                    <td><?php echo $row->maker_id?></td>
                    <td><?php echo $row->action_date?></td>
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