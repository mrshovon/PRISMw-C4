<?= $this->extend('layouts/masterAdmin') ?>
    <?= $this->section('content') ?>
    
    <div class="main-body col">
            <h1>Career</h1> <br>
            <a href="<?= base_url('public/admin/careers/add')?>" class="btn btn-success">ADD</a>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">SL #</th>
                    <th scope="col">Career ID</th>
                    <th scope="col">Job Title</th>
                    <th scope="col">Job Description</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Make By</th>
                    <th scope="col">Create Date</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($joblist as $index => $row) { ?> 
                  <tr>
                    <td><?php echo $index+1;?></td>
                    <td><?php echo $row->career_id;?></td>
                    <td><?php echo $row->job_title;?></td>
                    <td><?php echo $row->job_description;?></td>
                    <td><?php echo $row->phone;?></td>
                    <td><?php echo $row->email;?></td>
                    <td><?php echo $row->maker_id;?></td>
                    <td><?php echo $row->action_date;?></td>

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