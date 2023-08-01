<?php include 'headers/header2.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lucy Mememorial</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>
    <div class="greet">
        <h1>
            Welcome to Lucy Mememorial!
        </h1>
        <p>Kindly log into respective module to access information.</p>
        <button class="scroll">
            scroll down for more
        </button>
    </div>
    
    <div class="Centered-container">
        <div class="logs-container">
            <div class="log-items">
                <div>
                    <span  class="material-symbols-outlined">
                        person
                    </span>
                    <h3>Patients</h3>
                </div>
                <div class="button-container">
                    <button data-bs-toggle="modal" data-bs-target="#exampleModal">Log in</button>
                </div>
            </div>
            <div class="log-items">
                <div>
                    <span  class="material-symbols-outlined">
                        stethoscope
                    </span>
                    <h3>Doctor</h3>
                </div>
                <div class="button-container">
                    <button >Log in</button>
                </div>
            </div>
            <div class="log-items">
                <div>
                    <span  class="material-symbols-outlined">
                        clinical_notes
                    </span>
                    <h3>Nurse</h3>
                </div>
                <div class="button-container">
                    <button >Log in</button>
                </div>
            </div>
            <div class="log-items">
                <div>
                    <span  class="material-symbols-outlined">
                        medication
                    </span>
                    <h3>Pharmacist</h3>
                </div>
                <div class="button-container">
                    <button >Log in</button>
                </div>
            </div>
            <div class="log-items">
                <div>
                    <span  class="material-symbols-outlined">
                        biotech
                    </span>
                    <h3>Laboratorist</h3>
                </div>
                <div class="button-container">
                    <button >Log in</button>
                </div>
            </div>
            <div class="log-items">
                <div>
                    <span  class="material-symbols-outlined">
                        account_balance
                    </span>
                    <h3>Accountant</h3>
                </div>
                <div class="button-container">
                    <button >Log in</button>
                </div>
            </div>
            <div class="log-items">
                <div>
                    <span  class="material-symbols-outlined">
                        shield_person
                    </span>
                    <h3>Admin</h3>
                </div>
                <div id="loginAdmin" class="button-container">
                    <button >Log in</button>
                </div>
            </div>
            

        </div>
    </div>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Log in</h5>
                <button type="button" class="btn border-0" data-bs-dismiss="modal" aria-label="Close"><span class="material-symbols-outlined">
                close
                </span>
                </button>
            </div>
            <div class="modal-body">
                <form class="register-form">
                    <input type="text" placeholder="email address"/>
                    <input type="password" placeholder="password"/>
                    <button class="ins">Sign in 
                    </button>  
                    <div class="message">
                    <div>Not registered?</div>
                    <div class="ab" data-bs-toggle="modal" data-bs-target="#signinModal">sign up</div>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>




    <div class="logs-container2">
            <div class="log-items">
                <div>
                    <span  class="material-symbols-outlined">
                        person
                    </span>
                    <h3>Patients</h3>
                </div>
                <div class="button-container">
                    <button >Log in</button>
                </div>
            </div>
            <div class="log-items">
                <div>
                    <span  class="material-symbols-outlined">
                        stethoscope
                    </span>
                    <h3>Doctor</h3>
                </div>
                <div class="button-container">
                    <button >Log in</button>
                </div>
            </div>
            <div class="log-items">
                <div>
                    <span  class="material-symbols-outlined">
                        clinical_notes
                    </span>
                    <h3>Nurse</h3>
                </div>
                <div class="button-container">
                    <button >Log in</button>
                </div>
            </div>
            <div class="log-items">
                <div>
                    <span  class="material-symbols-outlined">
                        medication
                    </span>
                    <h3>Pharmacist</h3>
                </div>
                <div class="button-container">
                    <button >Log in</button>
                </div>
            </div>
            <div class="log-items">
                <div>
                    <span  class="material-symbols-outlined">
                        biotech
                    </span>
                    <h3>Laboratorist</h3>
                </div>
                <div class="button-container">
                    <button >Log in</button>
                </div>
            </div>
            <div class="log-items">
                <div>
                    <span  class="material-symbols-outlined">
                        account_balance
                    </span>
                    <h3>Accountant</h3>
                </div>
                <div class="button-container">
                    <button >Log in</button>
                </div>
            </div>
            <div class="log-items">
                <div>
                    <span  class="material-symbols-outlined">
                        shield_person
                    </span>
                    <h3>Admin</h3>
                </div>
                <div id="loginAdmin" class="button-container">
                    <button >Log in</button>
                </div>
            </div>
            

        </div>
</body>
    
    
</html>