<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aboutus</title>
    <link rel="stylesheet" type="text/css" href ="css/header.css">
    <style>
        .margin{
                padding-left:1000px;
                padding-top:50px;

            }

            .about {
                margin-left: 270px;
                margin-top: -220px;
                width: 450px;
                height: 200px;
                background: white;
                border: 1px solid #d2d0d0;
                border-radius: 10px;

            }

            .maindiv{
                width:1500px;
                height:450px;
                background:white;
            }
            .divimg{
                width:475px;
                height:346px;
                background:green;
                position: relative;
                left: 975px;
                top: 50px;
                background-image:url(img/axis15.jpg);

            }
            .font{
                font-family:Calibri light;
                text-align:center;
                color:#808080;
                font-weight:200;
            }
            p{
                font-size:20px;
                font-weight:bold;

            }
        </style>
</head>
<body>
        <div class="header">

            <h1>AXIS BANK Pvt Ltd</h1>

            <p style="color:white;">बढ़ती का नाम ज़िन्दगी</p>
            <div class="menubar">
                
                <a href="index.php" class=" active">HOME</a>
                <a href="news.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NEWS</a>
                <a href="aboutus.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ABOUT US</a>
                <a href="contactus.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CONTACT US</a>
                <?php require 'partials/nav.php' ?>
 
            </div>
        </div>

        <img src="img/axis7.png" width="1519" height="300" />
        <div class="maindiv">
            <div class="divimg"></div>

            <div class="about">

                <h2 style="font-weight:900; font-family:Calibri light; text-align:center;color:#808080;">
                    Our Corporate Office
                </h2>
                <h4 class="font">
                    Axis Bank Limited, Corporate Office, Bombay Dyeing Mills Compound, Pandurang Budhkar Marg,Worli, Mumbai - 400 025
                    Tel: (022) 2425 2525
                </h4>
            </div>
        </div>
        <div class="footerdiv">
            <footer style="background-color:#808080">
                <div class="coloumn">
                    <p>CONTACT US</p>
                    <ul>
                        <li>Call: 1800-19-5959</li>
                        <li>Find your Nearest Branch</li>
                        <li>Banking Scheme</li>
                        <li>Noice Board</li>
                    </ul>
                </div>
                <div class="coloumn">
                    <p>SHAREHOLDERS'CORNER</p>
                    <ul>
                        <li>Stock Information</li>
                        <li>Corporate Governace</li>
                        <li>Investor FAQs</li>
                        <li>Investor Contacts</li>
                        <li>Financial Results</li>
                    </ul>
                </div>
                <div class="coloumn">
                    <p>MEDIA CENTER</p>
                    <ul>
                        <li>Corporate Profile</li>
                        <li>Vision and Values</li>
                        <li>Press Release</li>
                        <li>Gallery</li>
                    </ul>
                </div>
            </footer>
        </div>
    </body> 
</html>