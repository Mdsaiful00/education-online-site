<?php

$conn = mysqli_connect('localhost', 'root', '', 'contact_db') or die('connection failed');

if (isset($_POST['send'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $msg = mysqli_real_escape_string($conn, $_POST['message']);

    $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');

    if (mysqli_num_rows($select_message) > 0) {
        $message[] = 'message sent already!';
    } else {
        mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
        $message[] = 'message sent successfully!';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="/js/sqript.js">

</head>

<body>



    <?php

    if (isset($message)) {
        foreach ($message as $message) {
            echo '
      <div class="message" data-aos="zoom-out">
         <span>' . $message . '</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
        }
    }

    ?>

    <header>
        <a href="home.html" class="logo"> <i class="fas fa-lightbulb"></i> educa</a>

        <div class="navbar">
            <div class="fas fa-times" id="bars-colse"></div>
            <a href="home.html">home</a>
            <a href="about.html">about</a>
            <a href="courses.html">cource</a>
            <a href="contact.html">contact</a>
        </div>


        <div class="icons">
            <div class="fas fa-user" id="user-btn"></div>
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-bars" id="bars-btn"></div>
        </div>


        <div class="search-box">
            <input type="search" name="search-box" placeholder="search here------" id="box">
            <i class="fas fa-search"></i>
        </div>


    </header>

    <div class="account-form">

        <div id="colse-form" class="fas fa-times"></div>

        <div class="buttons">
            <div class="btn active login-btn">login</div>
            <div class="btn register-btn">register</div>
        </div>

        <form class="login-form  active" action="">

            <h2>login now</h2>

            <input type="email" name="eamil" required placeholder="enter yuor email" id="box">
            <input type="password" name="password" placeholder="enter your password" id="box">
            <div class="flex">
                <input type="checkbox" name="" id="remember-me">
                <label for="remember-me">remember me</label>
                <a href="#">forgor password</a>
            </div>
            <input type="submit" value="login now " class="btn">
        </form>

        <form action="" class="register-form">
            <h2>register now</h2>
            <input type="email" name="eamil" required placeholder="enter your email" id="box">
            <input type="password" name="password" required placeholder="enter your password" id="box">
            <input type="password" name="password" required placeholder="conforam your password" id="box">
            <input type="submit" value="register now" class="btn">
        </form>

    </div>



    <section class="headding-link">
        <h2>contact us</h2>
        <p><a href="home.html">home</a> / contact</p>
    </section>


    <section class="get-tuch">

        <h3 class="headding">get in tuch</h3>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-clock"></i>
                <h2>opening hours</h2>
                <p>7:00am - 10:00pm</p>
            </div>

            <div class="box">
                <i class=" fas fa-phone"></i>
                <h2>phone :</h2>
                <p>+8801777458221</p>
                <p>+8801646792075</p>
            </div>

            <div class="box">
                <i class="fas fa-envelope"></i>
                <h2>send eamil :</h2>
                <p>saifulsylhet@gmal.com</p>
                <p>noobsaiul80@gmail.com</p>
            </div>

            <div class="box">
                <i class="fas fa-address-book"></i>
                <h2>address :</h2>
                <p>sylhet-chinagule, 3152</p>
            </div>
        </div>
    </section>




    <section class="contact-message ">
        <div class="box-container">
            <div class="image">
                <img src="images/contact-img.png" alt="">
            </div>


            <form action="" method="post">

                <input type="text" name="name" placeholder="enter your name" class="box" id="input-box-1" required>
                <input type="email" name="email" placeholder="enter your email" class="box" id="input-box-1" required>

                <input type="number" min="0" name="number" placeholder="enter your number" class="box" id="input-box-1" required>
                <textarea name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
                <input type="submit" value="send message" name="send" class="btn">
            </form>

        </div>
    </section>



    <section class="faq">

        <h3 class="headding">frequently asked question</h3>

        <div class="accordion-container">

            <div class="accordion active">

                <div class="accordion-headding">
                    <h3>how to contact for help?</h3>
                    <i class="fas fa-angle-down"></i>
                </div>
                <p class="accordion-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam ut error eligendi corrupti laboriosam iste quas perspiciatis culpa saepe dolorem libero magnam optio molestias reprehenderit pariatur, provident possimus quisquam molestiae!</p>
                </p>
            </div>



            <div class="accordion">
                <div class="accordion-headding">
                    <h3>what is the best creer in 2022</h3>
                    <i class="fas fa-angle-down"></i>
                </div>
                <p class="accordion-content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita
                    praesentium quod ipsam, aliquid neque possimus asperiores necessitatibus soluta veritatis a maiores
                    atque rem recusandae ipsum. Officia facere vero nesciunt praesentium.</p>
            </div>


            <div class="accordion">
                <div class="accordion-headding">
                    <h3>how much fees for web devolopment?</h3>
                    <i class="fas fa-angle-down"></i>
                </div>
                <p class="accordion-content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita
                    praesentium quod ipsam, aliquid neque possimus asperiores necessitatibus soluta veritatis a maiores
                    atque rem recusandae ipsum. Officia facere vero nesciunt praesentium.</p>
            </div>


            <div class="accordion">
                <div class="accordion-headding">
                    <h3>can i choose my one tutor?</h3>
                    <i class="fas fa-angle-down"></i>
                </div>
                <p class="accordion-content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita
                    praesentium quod ipsam, aliquid neque possimus asperiores necessitatibus soluta veritatis a maiores
                    atque rem recusandae ipsum. Officia facere vero nesciunt praesentium.</p>
            </div>



            <div class="accordion">
                <div class="accordion-headding">
                    <h3>whate payment methods are available?</h3>
                    <i class="fas fa-angle-down"></i>
                </div>
                <p class="accordion-content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita
                    praesentium quod ipsam, aliquid neque possimus asperiores necessitatibus soluta veritatis a maiores
                    atque rem recusandae ipsum. Officia facere vero nesciunt praesentium.</p>
            </div>



            <div class="accordion">
                <div class="accordion-headding">
                    <h3>can i have free trial for a month?</h3>
                    <i class="fas fa-angle-down"></i>
                </div>
                <p class="accordion-content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita
                    praesentium quod ipsam, aliquid neque possimus asperiores necessitatibus soluta veritatis a maiores
                    atque rem recusandae ipsum. Officia facere vero nesciunt praesentium.</p>
            </div>
        </div>
    </section>





    <section class="logo">

        <div class="swiper logo-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide "><img src="images/partner-logo-1.png" alt=""></div>
                <div class="swiper-slide "><img src="images/partner-logo-2.png" alt=""></div>
                <div class="swiper-slide "><img src="images/partner-logo-3.png" alt=""></div>
                <div class="swiper-slide "><img src="images/partner-logo-4.png" alt=""></div>
                <div class="swiper-slide "><img src="images/partner-logo-5.png" alt=""></div>
            </div>
        </div>
    </section>





































    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3><i class="fas fa-lightbulb"></i>educa</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur, aliquam accusantium!</p>
                <div class="icons">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <h3>quick links</h3>

                <a href="home.html">home</a>
                <a href="about.html">about</a>
                <a href="courses.html">courses</a>
                <a href="contact.html">contact</a>
            </div>

            <div class="box">
                <h3>useful links</h3>
                <a href="#">help center</a>
                <a href="#">ask quections</a>
                <a href="#">send feedback</a>
                <a href="#">private policy</a>
                <a href="#">terms of use</a>
            </div>

            <div class="box">
                <h3>newsletter</h3>
                <p class="p-text">subscribs for latest updates</p>
                <form action="">
                    <input type="email" name="eamil" placeholder="enter your emial" id="eamil-box">

                    <a href="#" value="submit" class="btn">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        submit</a>
                </form>

            </div>

        </div><br><br><br><br>
        <div class="created">created by <?php echo date('Y'); ?> <span>md saiful islam</span> !! <span>mizanur rahman mizan</span> !! <span>imtiyaj ahmed emon</span> !! <span>md lijuanul islam</span> all is well</div>

    </section>




    <!-- swiper js link  -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/sqript.js"></script>
</body>






















<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>
</body>

</html>