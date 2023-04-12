<?= $this->extend('layouts/masterAdmin') ?>
    <?= $this->section('content') ?>
    <!-- <?php echo '<pre>'; print_r($lookuplist); echo '<pre>'; ?> -->
    <div class="main-body col">
              <h1>Look Up</h1> <br>
             <a href="<?= base_url('public/admin/lookup/add')?>" class="btn btn-success">ADD</a>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">SL #</th>
                    <th scope="col">Look up ID</th>
                    <th scope="col">Look up Name</th>
                    <th scope="col">Short Name</th>
                    <th scope="col">Sort Order</th>
                    <th scope="col">Look Type ID</th>
                    <th scope="col">Make By</th>
                    <th scope="col">Create Date</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($lookuplist as $index => $row) { ?>
                  <tr>
                    <td><?php echo $index+1; ?></td>
                    <td><?php echo $row->look_up_id?></td>
                    <td><?php echo $row->look_up_name?></td>
                    <td><?php echo $row->short_name?></td>
                    <td><?php echo $row->sort_order?></td>
                    <td><?php echo $row->look_type_id?></td>
                    <td><?php echo $row->maker_id?></td>
                    <td><?php echo $row->action_date?></td>
                  <td>
                        <a href="<?= base_url('public/admin/lookup/edit/'.$row->look_up_id)?>" class="btn btn-secondary"><i class="fa-solid fa-pen-to-square" title="Edit"></i></a>
                        <a href="" class="btn btn-danger"><i class="fa-solid fa-trash" title="Delete"></i></a>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>      
       </div>
    <?= $this->endSection() ?>