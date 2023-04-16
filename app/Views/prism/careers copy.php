
<?= $this->extend('layouts/masterAL') ?>
    <?= $this->section('content') ?>
    <!-- main -->
    <main style="height: 600px; margin-top:10%;">
    
        <div class="career">
          <h3>Careers</h3>
          <p>Join the team</p>
        </div>
        <div class="career">
          <h3>Available Jobs Offers</h3>
        </div>
        <?php foreach($joblist as $index => $row) { ?>
        <div class="job-list">
          <div>
            <h2><?php echo $row->job_title;?></h2>
            <p> <span> <b>Description: </b></span><?php echo $row->job_description;?>
            </p>
            <input class="btn btn-info btnn-right" type="button" value="Apply">
          </div>
        </div>
      <?php } ?>
    </main>
    <?= $this->endSection() ?>
    <!-- main -->
    