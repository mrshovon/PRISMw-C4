<?= $this->extend('layouts/masterAdmin') ?>
    <?= $this->section('content') ?>
    
    <div class="main-body col">
    <?php if(session()->getFlashdata('msg')):?>
        <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
        <?php endif;?>
            <h1>Book Visit</h1> <br>
            
            <div class="table-responsive">
              <table class="table table-striped table-hover table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">SL #</th>
                      <th scope="col">Date</th>
                      <th scope="col">start_time</th>
                      <th scope="col">end_time</th>
                      <th scope="col">remarks</th>
                      <th scope="col">email</th>
                      <th scope="col">property ID</th>
                      <th scope="col">Make By</th>
                      <th scope="col">Create Date</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($visitlist as $index => $row) { ?> 
                    <tr>
                      <td><?php echo $index+1;?></td>
                      <td><?php echo $row->date?></td>
                      <td><?php echo $row->start_time?></td>
                      <td><?php echo $row->end_time?></td>
                      <td><?php echo $row->remarks?></td>
                      <td><?php echo $row->email?></td>
                      <td><?php echo $row->property_id?></td>
                      <td><?php echo $row->auth_id;?></td>
                      <td><?php echo $row->action_date;?></td>

                      <td>
                        <a href="<?= base_url('public/admin/bookvisit/delete/'.$row->property_id.'/'.$row->date)?>" class="btn btn-danger"><i class="fa-solid fa-trash" title="Delete"></i></a>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>      
            </div>
       </div>
    <?= $this->endSection() ?>
    