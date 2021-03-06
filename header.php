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
                width: 17%;
                position: absolute;
                z-index: 1;
                top: 0;
                left: 0;
                background-color: #111;
                overflow-x: hidden;
                padding-top: 1%;
                margin-top:62px;
                }

            .sidenav a {
                padding: 6px 8px 6px 16px;
                text-decoration: none;
                font-size: 35px;
                display: block;
                color:#50394c;
                }

            .sidenav h3 {
                padding: 6px 8px 6px 16px;
                text-decoration: none;
                font-size: 40px;
                display: block;
                color:#50394c;
                }    

            .sidenav a:hover {
                color: #b2b2b2;
                }

            .main {
                margin-left: 45%; /* Same as the width of the sidenav */
                font-size: 28px; /* Increased text to enable scrolling */
                padding: 0px 10px;
                }

            @media screen and (max-height: 450px) {
                .sidenav {padding-top: 15px;}
                .sidenav a {font-size: 18px;}
                }
            #link{
                padding-right:20px;
                font-size:20px;
            }
            .navbar-custom {
                background-color:#50394c;
            }
            .sidebar-custom{
                background-color: #ffef96;
                
            }

            .foot{
                padding-top:200px;
                color:#50394c;
            }

            .news{
                color:#50394c;
            }                
                            
            </style>
</head>
<body style = "background-color:#f4e1d2">
            
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
    <a class="navbar-brand" style="margin-left:45%" href="home.php"><b id = "logo">PESU-BANK</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" style="margin-left:20%" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a id = "link" class="nav-link" href="#">HOME<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a id = "link" class="nav-link" href="faq.php">FAQs</a>
        </li>
        <li class="nav-item">
        <a id = "link" class="nav-link" href="contact.php">Contact Us</a>
        </li>
        <li class="nav-item">
            <button id = "link" class="nav-link" style = "background-color:#ffef96; color:#50394c; font-weight:bold"><a href = "logout.php?logout=1">LOGOUT</a></button>
        </li>
        </ul>
    </div>
    </nav>
    <div align="right" class="news">
       <marquee style="font-size:20px"> <h4>News</h4>
        <a href = "https://economictimes.indiatimes.com/industry/banking/finance/banking/the-common-code-for-responsible-lending-crl-for-microfinance-has-a-few-big-names-missing/articleshow/72265943.cms" target="_blank">
        The common “Code for Responsible Lending” (CRL) for microfinance has a few big names missing       </a>||
        <a href = "https://economictimes.indiatimes.com/industry/banking/finance/banking/pmc-scam-court-gives-nod-to-sell-jets-yacht-of-wadhawans/articleshow/72261980.cms" target="_blank">
        PMC scam: Court gives nod to sell jets, yacht of Wadhawans      </a>||
        <a href = "https://economictimes.indiatimes.com/industry/banking/finance/banking/rbi-red-flags-rising-stress-in-mudra-loans-asks-banks-to-monitor-closely/videoshow/72251697.cms" target="_blank">
        RBI red-flags rising stress in Mudra loans, asks banks to monitor closely</a><br>
        </marquee></div>    
        
    <div class="sidenav sidebar-expand sidebar-custom">
        <h3><b>Quick Access</b></h3>    
        <a href="deposit.php">Deposit</a>
        <a href="withdraw.php">Withdraw</a>
        <a href="#clients">Check Balance</a>
        <a href="contact.php">Need help?</a>
        <a href="faq.php">FAQs</a>
    </div>    

</body>

</html>
