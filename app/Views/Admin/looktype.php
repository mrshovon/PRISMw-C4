<?= $this->extend('layouts/masterAdmin') ?>
    <?= $this->section('content') ?>
     
    <div class="main-body col">
            <h1>Look Type</h1> <br>
            <a href="<?= base_url('public/admin/looktype/add')?>" class="btn btn-success">ADD</a>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">SL #</th>
                    <th scope="col">Look Type ID</th>
                    <th scope="col">Look Type Name</th>
                    <th scope="col">Make By</th>
                    <th scope="col">Action date</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($looktypelist as $index => $row) { ?>
                  <tr>
                    <td><?php echo $index+1; ?></td>
                    <td><?php echo $row->look_type_id ?></td>
                    <td><?php echo $row->look_type_name ?></td>
                    <td><?php echo $row->maker_id ?></td>
                    <td><?php echo $row->action_date ?></td>
                    <td>
                        <a href="<?= base_url('public/admin/looktype/edit/'.$row->look_type_id)?>" class="btn btn-secondary"><i class="fa-solid fa-pen-to-square" title="Edit"></i></a>
                        <a href="" class="btn btn-danger"><i class="fa-solid fa-trash" title="Delete"></i></a>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>      
       </div>

    <?= $this->endSection() ?>
