<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href ="css/header.css">
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
        <div class="content">
            <img  src="img/axis6.png" width="1519" height="300"/>
            <center>  <h1 style="color:#ae285d"><b>PRODUCT</b> to meet your life goals</h1></center>
            <axisdata>
                <center>
                    <table width="70%">
                        <tr>
                            <td width="1%">
                                <center>
                                    <div class="axis">
                                        <img style="padding-top:8px;" src="img/axis10.png" />
                                        <p style="margin:auto">Saving Account</p>
                                    </div>
                                </center>
                            </td>
                            <td width="1%">
                                <center>
                                    <div class="axis">
                                        <img style="padding-top:10px;"src="img/axis11.png" />
                                        <p style="margin:auto">Salary Account</p>

                                    </div>
                                </center>
                            </td>
                            <td width="1%">
                                <center>
                                    <div class="axis">
                                        <img style="padding-top:1px;" src="img/axis12.png" />
                                        <p style="margin:auto">Axis Direct Account</p>

                                    </div>
                                </center>
                            </td>
                            <td width="1%">
                                <center>
                                    <div class="axis">
                                        <img style="padding-top:5px;" src="img/axis13.png" />
                                        <p style="margin:auto">Fixed Deposite</p>

                                    </div>
                                </center>
                            </td>
                        </tr>

                    </table>
                </center>
            </axisdata>

        </div>
        <img src="img/axis8.png" width="1518"/>
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