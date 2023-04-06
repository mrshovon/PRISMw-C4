<?= $this->extend('layouts/masterAdmin') ?>
    <?= $this->section('content') ?>
    
    <div class="main-body col">
            <h1>Career</h1> <br>
            <a href="<?= base_url('public/admin/careers/add')?>" class="btn btn-success">ADD</a>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">maker_id</th>
                    <th scope="col">auth_id</th>
                    <th scope="col">action type</th>
                    <th scope="col">action date</th>
                    <th scope="col">look type id</th>
                    <th scope="col">look type name</th>
                    <th scope="col">action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1730020@iub.edu.bd</td>
                    <td>1</td>
                    <td>update</td>
                    <td>2023-03-22 17:33:16</td>
                    <td>1</td>
                    <td>Property Type</td>
                    <td>
                        <a href="" class="btn btn-secondary"><i class="fa-solid fa-pen-to-square" title="Edit"></i></a>
                        <a href="" class="btn btn-danger"><i class="fa-solid fa-trash" title="Delete"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1730020@iub.edu.bd</td>
                    <td>2</td>
                    <td>insert</td>
                    <td>2023-03-22 17:33:16</td>
                    <td>1</td>
                    <td>PropertySubType</td>
                    <td>
                        <a href="" class="btn btn-secondary"><i class="fa-solid fa-pen-to-square" title="Edit"></i></a>
                        <a href="" class="btn btn-danger"><i class="fa-solid fa-trash" title="Delete"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1730020@iub.edu.bd</td>
                    <td>3</td>
                    <td>insert</td>
                    <td>2023-03-22 17:33:16</td>
                    <td>1</td>
                    <td>Amenities</td>
                    <td>
                        <a href="" class="btn btn-secondary"><i class="fa-solid fa-pen-to-square" title="Edit"></i></a>
                        <a href="" class="btn btn-danger"><i class="fa-solid fa-trash" title="Delete"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1730020@iub.edu.bd</td>
                    <td>4</td>
                    <td>insert</td>
                    <td>2023-03-22 17:33:16</td>
                    <td>1</td>
                    <td>Renovation Type</td>
                    <td>
                        <a href="" class="btn btn-secondary"><i class="fa-solid fa-pen-to-square" title="Edit"></i></a>
                        <a href="" class="btn btn-danger"><i class="fa-solid fa-trash" title="Delete"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1730020@iub.edu.bd</td>
                    <td>5</td>
                    <td>insert</td>
                    <td>2023-03-22 17:33:16</td>
                    <td>1</td>
                    <td>Services</td>
                    <td>
                        <a href="" class="btn btn-secondary"><i class="fa-solid fa-pen-to-square" title="Edit"></i></a>
                        <a href="" class="btn btn-danger"><i class="fa-solid fa-trash" title="Delete"></i></a>
                    </td>
                  </tr>
                </tbody>
              </table>      
       </div>
    <?= $this->endSection() ?>