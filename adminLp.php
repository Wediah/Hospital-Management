<?php include 'headers/header.php'?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lucy Mememorial</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

</head>
<body id="admin--page">
    <div class="body-body">
    <h1 id="greeting"></h1>
    <p class="text-welcome">Welcome to the admin dashboard</p>

    <div class="first-container">
        <div class="reports--container">
            <div class="reports" >
                <p class="first--p">Total Patients</p>
                <div class="icon-con">
                    <span id="icon-pa" class="material-symbols-outlined">
                        person
                    </span>
                    <h2>10</h2>
                </div>
            </div>
            <div class="reports">
                <p class="first--p">Inpatients</p>
                <div class="icon-con">
                    <span id="icon-pa1" class="material-symbols-outlined">
                        inpatient
                    </span>
                    <h2>10</h2>
                </div>
            </div>
            <div class="reports">
                <p class="first--p">Outpatients</p>
                <div class="icon-con">
                    <span id="icon-pa2" class="material-symbols-outlined">
                        outpatient
                    </span>
                    <h2>10</h2>
                </div>
            </div>
            <div class="reports">
                <p class="first--p">Doctors Available</p>
                <div class="icon-con">
                    <span id="icon-doc" class="material-symbols-outlined">
                        stethoscope
                    </span>
                    <h2>10</h2>
                </div>
            </div>
            <div class="reports">
                <p class="first--p">Beds Available</p>
                <div class="icon-con">
                    <span id="icon-pa1" class="material-symbols-outlined">
                        hotel
                    </span>
                    <h2>10</h2>
                </div>
            </div>
            <div class="reports">
                <p class="first--p">Wards Available</p>
                <div class="icon-con">
                    <span id="icon-pa1" class="material-symbols-outlined">
                        ward
                    </span>
                    <h2>10</h2>
                </div>
            </div>
            <div class="reports">
                <p class="first--p">Nurses Available</p>
                <div class="icon-con">
                    <span id="icon-pa2" class="material-symbols-outlined">
                        home_health
                    </span>
                    <h2>10</h2>
                </div>
            </div>
            <!--<div class="reports">
                <p class="first--p">Nurses Available</p>
                <div class="icon-con">
                    <span id="icon-2" class="material-symbols-outlined">
                        home_health
                    </span>
                    <h2>10</h2>
                </div>
            </div>-->
            <div class="reports">
                <p class="first--p">Lab Techs Available</p>
                <div class="icon-con">
                    <span id="icon-doc" class="material-symbols-outlined">
                        biotech
                    </span>
                    <h2>10</h2>
                </div>
            </div>
            <div class="reports1" id="bal-report">
                <p class="first--p">Balance</p>
                <div class="bals">
                    <div class="icon-con1">
                        <span id="icon-bal" class="material-symbols-outlined">
                            arrow_downward
                        </span>
                        <h3>₵</h3>
                    </div>
                    
                    <div class="icon-con1">
                        <span id="icon-bal1" class="material-symbols-outlined">
                            arrow_upward
                        </span>
                        <h3>₵</h3>
                    </div>
                </div>
                
            </div>
            
        </div>

        <div class="balance-cont">
            <p class="first--p">Balance</p>
            <div class="bals">
                    <div class="icon-con">
                        <span id="icon-bal" class="material-symbols-outlined">
                            arrow_downward
                        </span>
                        <h3>₵</h3>
                    </div>
                    <hr>
                    <div class="icon-con">
                        <span id="icon-bal1" class="material-symbols-outlined">
                            arrow_upward
                        </span>
                        <h3>₵</h3>
                    </div>
                </div>
        </div>
        
    </div>


    <h1>Reports</h1>
    

    </div>
    <script src="script.js"></script>
</body>
</html>