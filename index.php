<?php include './Lnav.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AMC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./styles.css"> 
    <script src="./style.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body class="body1">
    <h1 class="ayao">AYAO MEDICAL CENTER</h1>
    <p class="ayao1">Dedicated to providing multidisciplinary medical care and backed by state of the-art facilities.</p>

    <div class="divs">
        <div class="div1">
        <span class="material-symbols-outlined">call</span>
        <h3>EMERGENCY CONTACT</h3>
        <h2>+233 20 4868 516</h2>
        </div>
        <div class="div2">
        <span class="material-symbols-outlined">calendar_month</span>
        <h3>DOCTOR APPOINTMENT</h3>
        <a href="./land.php">BOOK AN APPOINTMENT</a>
        </div>
        <div class="div3">
        <span class="material-symbols-outlined">schedule</span>
        <h3>OPENING HOURS</h3>
        <h2>24/7 SERVICE DELIVERY</h2>
        </div>
    </div>
    <div class="body2">
    <div class="p2">
        <div class="p24">
            <img class="" src="./images/docs.png" alt="">
        </div>
        <div class="p21">
            
            <p class="p23">
            <span class="p22">Welcome To Ayao Medical Center</span> <br>
            At AMC, we believe that every individual deserves the highest quality of care and attention when it comes to their health. Our state-of-the-art medical facility is dedicated to providing comprehensive and compassionate healthcare services to our community. With a legacy of medical excellence spanning decades, we have evolved into a trusted healthcare partner for patients from all walks of life. <br>
            </p>
            
        </div>
    </div>
    <h3 class="service">Our World Class Service</h3>
    <div class="serve1">
        <div>
            <p class="p24">
            <span class="p22">Our Commitment to Excellence</span> <br>
            Our commitment to excellence is at the heart of everything we do. From our team of experienced and skilled medical professionals to the cutting-edge technology we employ, we strive to ensure that each patient receives personalized care tailored to their unique needs. We understand that health concerns can be both physically and emotionally challenging, which is why we place a strong emphasis on open communication, empathy, and holistic support throughout your medical journey.<br>
            </p>
        </div>
        <div>
            <p class="p24">
            <span class="p22">Comprehensive Medical Services</span> <br>
            At AMC, we offer a wide range of medical services that cover everything from routine check-ups to complex surgical procedures. Our multidisciplinary team of doctors, surgeons, nurses, and support staff work collaboratively to deliver the best possible outcomes for our patients. Whether you require preventive care, diagnostics, specialized treatment, or rehabilitation services, we have you covered.
            <br>
            </p>
        </div>
        <div>
            <p class="p24">
            <span class="p22">Cutting-edge Technology</span> <br>
            We are proud to be at the forefront of medical innovation. Our hospital is equipped with the latest advancements in medical technology, allowing us to provide accurate diagnoses and effective treatments. Our commitment to staying updated with the latest medical developments ensures that you receive the highest standard of care available.
            <br>
            </p>
        </div>
        <div>
            <p class="p24">
            <span class="p22">Patient-Centered Approach</span> <br>
            At AMC, you are not just a patient; you are a valued member of our healthcare family. We prioritize your comfort, safety, and well-being at every step of your healthcare journey. Our patient-centered approach means that your preferences and concerns are taken into consideration, fostering a trusting and supportive relationship between you and our medical team.
            <br>
            </p>
        </div>
    </div>
    </div>
    <div class="body--3">
    <h3 class="departs">Departments</h3>

<div class="depart">
    <div>
        <span class="material-symbols-outlined">
        surgical
        </span>
        <h4>Surgery</h4>
    </div>
    <div>
        <span class="material-symbols-outlined">
        pediatrics
        </span>
        <h4>Pediatrics</h4>
    </div>
    <div>
        <span class="material-symbols-outlined">
        pregnant_woman
        </span>
        <h4>Obstetrics & Gynecology</h4>
    </div>
    <div>
        <span class="material-symbols-outlined">
        cardiology
        </span>
        <h4>Cardiology</h4>
    </div>
    <div>
        <span class="material-symbols-outlined">
        local_hospital
        </span>
        <h4>Emergency</h4>
    </div>
    <div>
        <span class="material-symbols-outlined">
        radiology
        </span>
        <h4>Radiology</h4>
    </div>
    <div>
        <span class="material-symbols-outlined">
        local_pharmacy
        </span>
        <h4>Pharmacy</h4>
    </div>
    <div>
        <span class="material-symbols-outlined">
        fitness_center
        </span>
        <h4>Physical Theraphy</h4>
    </div>
</div>

<p class="depart--para">These are just a few of the specialized departments at Ayao Medical Hospital. We are dedicated to providing you with the highest standard of medical care across a broad spectrum of specialties. Our expert teams collaborate to ensure that you receive comprehensive and holistic treatment tailored to your specific needs.</p>
    </div>
    <div class="body--4">
    <h2>Get In Touch With Our Professionals</h2>
    <p>Kindly fill this form, our team will gt back to you ASAP!</p>
    <form  class="forms4" action="./contact+.php" method="POST">
        <div class="item5">
            <label for="name">Full name</label>
            <input  type="text" name="name" id="name">
        </div>
        <div>
            <label for="email">Email address</label>
            <input type="text" name="email" id="email" >
        </div>
        <div>
            <label for="phone">Phone number</label>
            <input type="text" name="phone" id="phone" >
        </div>
        <div class="item5">
            <label for="message">Message</label>
            <textarea  name="message" id="message" cols="25" rows="10" ></textarea>
        </div>
        <input class="item6" type="submit" value="Send message">
    </form>
    </div>
</body>
</html>
<?php include './footer.php'?>



