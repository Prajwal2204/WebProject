<!DOCTYPE html>
<html>
    <head>  
        <title> 
            Welcome To PESU-BANK!
        </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


        <style>
            *{
                margin :0px;
                padding:0px;
            }
            #logo{
                font-size:30px;
                color:white;
            }
            body {
                font-family: "Lato", sans-serif;
                }

            .sidenav {
                height: 100%;
                width: 160px;
                position: fixed;
                z-index: 1;
                top: 0;
                left: 0;
                background-color: #111;
                overflow-x: hidden;
                padding-top: 20px;
                }

            .sidenav a {
                padding: 6px 8px 6px 16px;
                text-decoration: none;
                font-size: 25px;
                color: #818181;
                display: block;
                }

            .sidenav a:hover {
                color: #f1f1f1;
                }

            .main {
                margin-left: 160px; /* Same as the width of the sidenav */
                font-size: 28px; /* Increased text to enable scrolling */
                padding: 0px 10px;
                }

            @media screen and (max-height: 450px) {
                .sidenav {padding-top: 15px;}
                .sidenav a {font-size: 18px;}
                }
                            
                            
            </style>
</head>
<body>
            
        <nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <a class="navbar-brand" style="margin-left:45%" href="#"><b id = "logo">PESU-BANK</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" style="margin-left:30%" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="#">LOGIN <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">asfafafa</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Disabled</a>
        </li>
        </ul>
    </div>
    </nav>
    <div class="sidenav sidebar-expand bg-info">
    <a href="#about">About</a>
    <a href="#services">Services</a>
    <a href="#clients">Clients</a>
    <a href="#contact">Contact</a>
</div>
</body>

</html>
