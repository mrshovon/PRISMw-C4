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
            height: fit-content;
            background-color:  rgb(214, 214, 214);
        }
        .main-body.col{
            padding-left: 0;
            height: 100vh;
            width: 100%;
            box-sizing: border-box;
            margin-left: 1%;
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
    </style>
</head>
<body>
    <header>
        <nav>
            <a href="index.html" class="btn btn-secondary" style="margin-top:3px;">LOGOUT</a>  
        </nav>
    </header>
    <main class="container row" >
       <div class="menu col-2">
        <h6>Menu</h6>
        <ul>
            <li href="Looktype.html" class="btn btn-outline-light">Look Type</li>
            <li href="Lookup.html" class="btn btn-outline-light">Look up</li>
            <li href="Property.html" class="btn btn-outline-light">Property</li>
            <li href="User.html" class="btn btn-outline-light">User</li>
            <li href="companyprofile.html" class="btn btn-outline-light">Company Profile</li>
            <li href="careers.html" class="btn btn-outline-light">Careers</li>
            <li href="legalservice.html" class="btn btn-outline-light">Legal Service</li>
            <li href="renovation.html" class="btn btn-outline-light">Renovation</li>
            <li href="homeloan.html" class="btn btn-outline-light">Home Loan</li>
            <li href="inquery.html" class="btn btn-outline-light">Inquery</li>
            <li href="bookvisit.html" class="btn btn-outline-light">Book visit</li>
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