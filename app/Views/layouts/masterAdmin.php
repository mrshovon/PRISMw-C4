<?php 
   $path = $_SERVER['REQUEST_URI'];
   $path = explode('/',$path);
   $path = end($path);  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= strtoupper($path) ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link href="https://unpkg.com/bootstrap-table@1.21.4/dist/bootstrap-table.min.css" rel="stylesheet">
    
    <link rel="icon" href="<?=base_url('public/images/favicon.ico')?>">
    <style>
        *{
            padding: 0px;
            margin: 0px;
            box-sizing: border-box;
        }
        body{
            height: 110vh;
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
            margin-left: -50px;
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
            padding-left: 0px;
        }
        .menu h6{
            box-sizing: border-box;
            margin-top: 30px;
            text-align: center;
        }
        .menu.col-2{
            padding-left: 0;
            height: 100vh;
            background-color:  rgb(214, 214, 214);
            padding-right: 0px;
        }
        .main-body.col{
            padding-left: 0;
            height: 100vh;
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
            margin-left: 0px;
            margin-right: 0px;

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
            padding-left: 60px;
        }
        th{
            background-color: white !important;
            position: sticky;
            top: 0; 
        }
        li.selected{
            background-color: white;
            font-weight:bold;
        }
        li:hover{
            background-color: white;
            font-weight:bold;
        }
        @media (min-width: 1200px){
        .container, .container-lg, .container-md, .container-sm, .container-xl {
            max-width: 100vw;
            }
         }
    </style>
</head>
<body>
    <header>
        <nav style="display: flex">
            <a href="<?=base_url('public/home/signout')?>"><i class="fa-solid fa-right-from-bracket fa-flip-both fa-2xl" title="LOGOUT" style="margin-top:3px; line-height: 1.50em; margin-left: 60px;"></i></a>
            <!-- <a href="" class="btn btn-secondary" style="margin-top:3px;">LOGOUT</a> -->
            <a href="<?= base_url('public/admin/dashboard')?>"><i class="fa-solid fa-house fa-2xl" title="HOME" style="color: #388a3a; margin-top:3px; line-height: 1.50em;"></i></a>
            <h5 style="margin-left: 90px;margin-top: 9px;"><i class="fa-solid fa-user-tie fa-xl" title="<?= strtoupper(session()->get('user_type')) ?>" style="color: #45b593;"></i>  <?php echo strtoupper(session()->get('name')).' ('.strtoupper(session()->get('user_type')).')'?></h5>  
        </nav>
    </header>
    <main class="container row" >
       <div class="menu col-2">
        <h6 style="background-color:#45b593; font-weight:bold;">Menu</h6>
        <ul>
            <li class=" <?= $path == 'looktype' ? 'selected' : '' ?>"><a href="<?= base_url('public/admin/looktype')?>">Look Type</a></li>
            <li class=" <?= $path == 'lookup' ? 'selected' : '' ?>"><a href="<?= base_url('public/admin/lookup')?>">Look Up</a></li>
            <li class=" <?= $path == 'property' ? 'selected' : '' ?>"><a href="<?= base_url('public/admin/property')?>">Property</a></li>
            <li class=" <?= $path == 'user' ? 'selected' : '' ?>"> <a href="<?= base_url('public/admin/user')?>">User</a></li>
            <li class=" <?= $path == 'companyprofile' ? 'selected' : '' ?>"><a href="<?= base_url('public/admin/companyprofile')?>">Company Profile</a></li>
            <li class=" <?= $path == 'careers' ? 'selected' : '' ?>"><a href="<?= base_url('public/admin/careers')?>">Careers</a></li>
            <li class=" <?= $path == 'legalservice' ? 'selected' : '' ?>"><a href="<?= base_url('public/admin/legalservice')?>">Legal Service</a></li>
            <li class=" <?= $path == 'renovation' ? 'selected' : '' ?>"><a href="<?= base_url('public/admin/renovation')?>">Renovation</a></li>
            <li class=" <?= $path == 'inquery' ? 'selected' : '' ?>"><a href="<?= base_url('public/admin/inquery')?>">Inquery</a></li>
            <li class=" <?= $path == 'bookvisit' ? 'selected' : '' ?>"><a href="<?= base_url('public/admin/bookvisit')?>">Book Visit</a></li>
            <li class=" <?= $path == 'homeloan' ? 'selected' : '' ?>"><a href="<?= base_url('public/admin/homeloan')?>">Home Loan</a></li>
            <li class=" <?= $path == 'favourites' ? 'selected' : '' ?>"><a href="<?= base_url('public/admin/favourites')?>">Favourites</a></li>
            <li class=" <?= $path == 'slider' ? 'selected' : '' ?>"><a href="">Slider</a></li>
            

        </ul>
       </div>
        <?= $this->renderSection('content') ?>
        </main> 
        <h6 style="text-align:center; background-color: rgb(214, 214, 214); padding-bottom:10px; padding-top:10px;">All rights reserved @PRISM 2023</h6>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/34df789c41.js" crossorigin="anonymous"></script>


</body>
</html>