<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="stylesheet" type="text/css" href ="css/header.css">
    <style>
        .map{
            width:auto;
            height:400px;
            background-image:url(img/axis14.jpg);
        }
        .contact{width:300px;
                 height:200px;
                 background:white;
                 border:1px solid #d2d0d0;
                 border-radius:10px;
                 position:relative;
                 left:180px;
                 top:50px;
                 
                 
        }
        .font{
            font-family:Calibri light;
            text-align:center;
            color:#808080
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
    <img src="img/axis9.png" width="1518" height="250" />
    <div class="map">
        <div class="contact">
            <h3 class="font">CORPORATE OFFICE</h3>
            <h5 class="font">
                Axis Bank Limited,'Axis House'.
                C-2 wadia International center.
                Pandurang Budhkar Marg Worli.
                Andheri Mumbai East-400025 (India)
                <b>Ph No. 9876543210</b>
            </h5>
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