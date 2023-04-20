<?= $this->extend('layouts/masterAdmin') ?>
    <?= $this->section('content') ?>
    
    <div class="main-body col">
    <?php if(session()->getFlashdata('msg')):?>
        <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
        <?php endif;?>
            <h1>Inquery List</h1> <br>
            <!-- <a href="<?= base_url('public/admin/careers/add')?>" class="btn btn-success">ADD</a> -->
            <div class="table-responsive">
              <table class="table table-striped table-hover table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">SL #</th>
                      <th scope="col">Inquery ID</th>
                      <th scope="col">Name</th>
                      <th scope="col">Phone</th>
                      <th scope="col">Address</th>
                      <th scope="col">Message</th>
                      <th scope="col">Make By</th>
                      <th scope="col">Create Date</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($inquerylist as $index => $row) { ?> 
                    <tr>
                      <td><?php echo $index+1;?></td>
                      <td><?php echo $row->inquery_id;?></td>
                      <td><?php echo $row->customer_name;?></td>
                      <td><?php echo $row->phone;?></td>
                      <td><?php echo $row->address;?></td>
                      <td><?php echo $row->query;?></td>
                      <td><?php echo $row->maker_id;?></td>
                      <td><?php echo $row->action_date;?></td>

                      <td>
                          <!-- <a href="<?= base_url('public/admin/careers/edit/'.$row->inquery_id)?>" class="btn btn-secondary"><i class="fa-solid fa-pen-to-square" title="Edit"></i></a> -->
                          <a href="<?= base_url('public/admin/inquery/delete/'.$row->inquery_id)?>" class="btn btn-danger"><i class="fa-solid fa-trash" title="Resolve"></i></a>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>      
            </div>
       </div>
    <?= $this->endSection() ?>