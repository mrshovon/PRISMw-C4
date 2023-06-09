<?= $this->extend('layouts/masterAdmin') ?>
    <?= $this->section('content') ?>
    <div class="main-body col">
    <?php if(session()->getFlashdata('msg')):?>
        <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
        <?php endif;?>
            <h1>User</h1> <br>
            <a href="<?= base_url('public/admin/user/add')?>" class="btn btn-success">ADD</a>
            <div class="table-responsive">
              <table class="table table-striped table-hover table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">SL #</th>
                      <th scope="col">User Type</th>
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Phone</th>
                      <th scope="col">NID</th>
                      <th scope="col">Address</th>
                      <th scope="col">DOB</th>
                      <th scope="col">Gender</th>
                      <th scope="col">Occupation</th>
                      <th scope="col">Division</th>
                      <th scope="col">District</th>
                      <th scope="col">Maker By</th>
                      <th scope="col">Create Date</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
              <?php foreach($userlist as $index => $row) { ?>     
                  <tr>
                      <td><?php echo $index+1; ?></td>
                      <td><?php echo ($row->user_type == 'customer' ? 'customer':'administrator'); ?></td>
                      <td><?php echo $row->title.' '.$row->name; ?></td>
                      <td><?php echo $row->email; ?></td>
                      <td><?php echo $row->phone; ?></td>
                      <td><?php echo $row->nid; ?></td>
                      <td><?php echo $row->address; ?></td>
                      <td><?php echo $row->dob; ?></td>
                      <td><?php echo $row->gender; ?></td>
                      <td><?php echo $row->occupation; ?></td>
                      <td><?php echo $row->division_name; ?></td>
                      <td><?php echo $row->district_name; ?></td>
                      <td><?php echo $row->maker_id; ?></td>
                      <td><?php echo $row->action_date; ?></td>
                      <td>
                          <a href="<?= base_url('public/admin/user/edit/'.$row->email)?>" class="btn btn-secondary"><i class="fa-solid fa-pen-to-square" title="Edit"></i></a>
                          <a href="<?= base_url('public/admin/user/delete/'.$row->email)?>" class="btn btn-danger"><i class="fa-solid fa-trash" title="Delete"></i></a>
                      </td>
                    </tr>
              <?php } ?>
            </tbody>
          </table>      
            </div>
       </div>
    <?= $this->endSection() ?>