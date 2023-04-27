<?php 
   $path = $_SERVER['REQUEST_URI'];
   $path = explode('/',$path);
   $path = end($path);  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link href="https://unpkg.com/bootstrap-table@1.21.4/dist/bootstrap-table.min.css" rel="stylesheet">
    
    <title>Admin</title>
    <style>
        *{
            padding: 0px;
            margin: 0px;
            box-sizing: border-box;
        }
        body{
            height: 100vh;
        }
        nav{
            width: 100%;
            height: fit-content;
            /* border: 2px solid rgb(189, 189, 189); */
            background-color: rgb(214, 214, 214);
        }
        nav img{
            height: 50px;
            width: 100px;
        }
        nav a{
            box-sizing: border-box;
            margin-left: 10px;
            text-decoration: none;
            color: blue;
        }
        .footer{
            /* display: block;
            width: 100%;
            position: absolute;
            bottom: 0;
            height: 0; */
            text-align: center;
            background-color: rgb(214, 214, 214);
            display: block;   
        }
        .menu ul, .menu h6{
            list-style: none;
            background-color:  rgb(214, 214, 214);
            margin-bottom: 0;
        }
        .menu h6{
            box-sizing: border-box;
            margin-top: 30px;
            text-align: center;
        }
        .menu.col-2{
            padding-left: 0;
            height: 100;
            background-color:  rgb(214, 214, 214);
        }
        .main-body.col{
            padding-left: 0;
            height: fit-content;
            width: 80%;
            box-sizing: border-box;
            margin-left: 1%;
            overflow:auto;
            /* background-color:  rgb(33, 22, 22); */
        }
        .main-body.col a{
            margin-top: 2%;
            margin-bottom: 2%;
           
        }
        .menu li{
            margin: 10px;

        }
        .btn-outline-light {
            --bs-btn-color: #060606;
            --bs-btn-border-color: #0d0e0e;
        }
        .main{
            height: fit-content;
        }
        a{
            text-decoration: none;
            color:black;
            font-size: small;
        }
        th{
            background-color: white !important;
            position: sticky;
            top: 0; 
        }
    </style>
</head>
<body>
    <header>
        <nav style="display: flex">
            <a href="<?=base_url('public/home/signout')?>" class="btn btn-secondary" style="margin-top:3px;">LOGOUT</a>
            <h5 style="margin-left: 120px;margin-top: 9px;"><?php echo strtoupper(session()->get('name')).' ('.strtoupper(session()->get('user_type')).')'?></h5>  
        </nav>
    </header>
    <main class="container row" >
       <div class="menu col-2">
        <h6>Menu</h6>
        <ul>
            <li class="btn btn-outline-light <?= $path == 'looktype' ? 'active' : '' ?>"><a href="<?= base_url('public/admin/looktype')?>">Look Type</a></li>
            <li class="btn btn-outline-light <?= $path == 'lookup' ? 'active' : '' ?>"><a href="<?= base_url('public/admin/lookup')?>">Look Up</a></li>
            <li class="btn btn-outline-light <?= $path == 'property' ? 'active' : '' ?>"><a href="<?= base_url('public/admin/property')?>">Property</a></li>
            <li class="btn btn-outline-light <?= $path == 'user' ? 'active' : '' ?>"> <a href="<?= base_url('public/admin/user')?>">User</a></li>
            <li class="btn btn-outline-light <?= $path == 'companyprofile' ? 'active' : '' ?>"><a href="<?= base_url('public/admin/companyprofile')?>">Company Profile</a></li>
            <li class="btn btn-outline-light <?= $path == 'careers' ? 'active' : '' ?>"><a href="<?= base_url('public/admin/careers')?>">Careers</a></li>
            <li href="legalservice.html" class="btn btn-outline-light"><a href="<?= base_url('public/admin/legalservice')?>">Legal Service</a></li>
            <li href="renovation.html" class="btn btn-outline-light"><a href="<?= base_url('public/admin/renovation')?>">Renovation requests</a></li>
            <li href="homeloan.html" class="btn btn-outline-light">Home Loan</li>
            <li href="inquery.html" class="btn btn-outline-light"><a href="<?= base_url('public/admin/inquery')?>">Inquery</a></li>
            <li href="bookvisit.html" class="btn btn-outline-light"><a href="<?= base_url('public/admin/bookvisit')?>">Book Visit</a></li>
            <li href="slider.html" class="btn btn-outline-light">Slider</li>
            <li href="favourites.html" class="btn btn-outline-light">Favourites</li>

        </ul>
       </div>
        <?= $this->renderSection('content') ?>
        </main> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/34df789c41.js" crossorigin="anonymous"></script>


</body>
</html>