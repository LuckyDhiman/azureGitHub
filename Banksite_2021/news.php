<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <link rel="stylesheet" type="text/css" href ="css/header.css">
    <style>
          .maindiv{
            width:1200px;
            height:1000px;
            margin-top:20px;
            margin-left:150px;
            margin-right:150px;
        }
         .newsdiv{
            height:40px;
            background-color:#ae285d;
            border-radius:15px;
            padding-top:0px;
            color:white;
            font-family:Calibri light;
            font-size:30px;
            text-align:center;
        }
        .newshead{
            height:60px;
            border:2px solid white;

            margin-top:10px;
            text-align:center;
            color:#ae285d;
            text-decoration:underline;

        }
        .content{
            height:110px;
        }
        .imgdiv{
            width:400px;
            height:300px;
            background-image:url(img/axis17.png);
            object-fit:cover;
                margin-top:15px;
            margin-left:800px;
        }
        .sidediv{
            width:800px;
            height:300px;
            background-color:white;
            margin-top:-300px;
        }
        p {
            font-size: 20px;
            font-weight: bold;
        }
        </style>
</head>
<body>
<div class="header">

<h1>AXIS BANK Pvt Ltd</h1>

<p style="color: white;">बढ़ती का नाम ज़िन्दगी</p>
<div class="menubar">
                
                <a href="index.php" class=" active">HOME</a>
                <a href="news.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NEWS</a>
                <a href="aboutus.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ABOUT US</a>
                <a href="contactus.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CONTACT US</a>
                <?php require 'partials/nav.php' ?>
 
            </div>
</div>
<img src="img/axis16.png" width="1519" />
<div class="maindiv">
<div class="newsdiv">
    LATEST AXIS NEWS
</div>
<div class="newshead">
    <h3> Clarification regarding false reports concerning Brady House operations</h3>
</div>
<div class="content">
    Contrary to false reports, AXIS has no plans to close operations in the Brady House branch in Mumbai.
    The Brady House branch continues to operate as normal and remains fully operational.
    Reallocation of some of the large value accounts is part of the regular restructuring process
    at AXIS to strengthen internal systems and processes and centralize
    certain critical functions. Retail operations for AXIS customers continue to operate from the branch.
</div>
<div class="newshead">
    <h3>Precautions for Inland Letter of Guarantee (ILG)</h3>

</div>
<div class="content">
    “A message containing details of Inland Letter of Guarantee (ILG), issued in paper form by our offices,
    is also transmitted electronically through Structured Financial Messaging System (SFMS) platform to beneficiary’s Bank.
    Beneficiaries may therefore, in their own interest, verify the genuineness of Inland Letter of Guarantee (ILG)
    issued by our offices, from their Bank/Branch. Also, the genuineness of guarantee may be got verified from the
    Branch’s controlling office (Details of controlling office are available on AXIS’s website under About us-> Organisational Structure->Circle Offices)”.
</div>
<div class="newshead">
    <h3>Precautions for Inland Letter of Guarantee (ILG)</h3>

</div>
<div class="imgdiv">

</div>
<div class="sidediv content ">
    Mission Parivartan, a transformational exercise for Business Excellence,
    spells various focus areas and strategies of our Bank for ensuring
    greater Efficiency, Productivity and Profitability for long term sustenance,
    helping transform PNB into a Preferred National Bank.A message containing details of Inland Letter of Guarantee (ILG), issued in paper form by our offices,
    is also transmitted electronically through Structured Financial Messaging System (SFMS) platform to beneficiary’s Bank.
    Beneficiaries may therefore, controlling office are available on AXIS’s website under About us-> Organisational Structure->Circle Offices)”.Also,
   

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