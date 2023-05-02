<?= $this->extend('layouts/master') ?>
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
        <div class="card w-75 mx-auto text-center border border-success">
          <div class="card-header border-bottom border-success">
            Vacancy <?= $index+1 ?>
          </div>
          <div class="card-body">
            <h5 class="card-title"><?= $row->job_title ?></h5>
            <p class="card-text"><?= $row->job_description ?></p>
          </div>
          <div class="card-footer border-top border-success">
             Please send your resume and cover letter to <b><?= $row->email ?></b>.
          </div>
        </div>
      <?php } ?>
    </main>
    <?= $this->endSection() ?>
    <!-- main -->
    