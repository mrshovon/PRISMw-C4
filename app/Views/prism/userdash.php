    <?= $this->extend('layouts/masterAL') ?>
    <?= $this->section('content') ?>
    <section style="width:fit-content">
      <div style="display: inline-flex;">
        <div class="search-container">
          <form action="/search" style="width: 600px ;">
            <input type="text" placeholder="Search Property for Buy/rent/sell..." id="input">
            <a  onclick="searchResult()" class="btn btn-success" id="clkbtn"><i class="fa fa-search" ></i></a>
          </form>
        </div>
      </div>
     </section>
     <section class="searchResult" id="searchResult"></section>
     <?= $this->endSection() ?>