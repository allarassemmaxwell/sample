<html>
    <head>
        <style>
            .dropbtn {
                width:160px;
                height:30px;
                background-color: #d4d4d4;
                color: black;
                padding: 8px;
                font-size: 15px;
                border: none;
                cursor: pointer;
            }
            .dropdown {
                position: relative;
                display: inline-block;
            }
            .dropdown:hover .dropbtn {
                background-color: #3e8e41;
                color: white;
            }
        </style>
    </head>
<body>

    <img class="logo" onclick="window.location.href='index.php'" src="images/logo.jpg" >

    <p><h1 style="text-align: left; color: #3e8e41;"> &nbsp;LIFELINK CLINIC</h1></p>

    &nbsp;
    <div class="dropdown">
        <button class="dropbtn" onclick="window.location.href='index.php'">HOME</a></button>
    </div>

    <div class="dropdown">
        <button class="dropbtn" onclick="window.location.href='about.php'">ABOUT US</button>
    </div>

    <div class="dropdown">
        <button class="dropbtn" onclick="window.location.href='faq.php'">FAQ</button>
    </div>

    <div class="dropdown">
        <button class="dropbtn" onclick="window.location.href='appointment.php'">APPOINTMENT</button>
    </div>

    <div class="dropdown">
        <button class="dropbtn" onclick="window.location.href='contact.php'">CONTACT US</button>
    </div>

    <br /><br />

</body>

</html>