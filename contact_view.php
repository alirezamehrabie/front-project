<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/x-icon" href="assets/images/upload/favicon.ico">
    <link rel="stylesheet" href="style_contact.css" type="text/css">
    <title>صفحۀ تماس با ما</title>
</head>
<body>
    <div class="contact-us">
        <div class="title">
            <h2>صفحه تماس با ما</h2>
        </div>
        <div class="box">
            <!-- form -->
            <div class="contact form">
                <h3>از طریق ارسال پیام با ما در ارتباط باشید</h3>
                <form action="contact.php" method="POST">
                    <div class="formBox">
                        <div class="row50">
                            <div class="inputBox">
                                <span>نام خانوادگی </span>
                                <input type="text" placeholder="علوی" id="lastname_user" name="lastname_user">
                            </div>

                            <div class="inputBox">
                                <span>نام </span>
                                <input type="text" placeholder="علی" id="name_user" name="firstname_user">
                            </div>
                        </div>

                        <div class="row50">
                            <div class="inputBox">
                                <span>پست الکترونیک</span>
                                <input type="email" placeholder="alialavi@yahoo.com" id="email_user" name="email_user">
                            </div>

                            <div class="inputBox">
                                <span>تلفن همراه</span>
                                <input type="tel" placeholder="0990 858 2119" id="phone_user" name="phone_user">
                            </div>
                        </div>

                        <div class="row100">
                            <div class="inputBox">
                                <span>متن پیام</span>
                                <textarea placeholder="متن پیام را بنویسید" id="text_user" name="text_user"></textarea>   
                            </div>
                        </div>

                        <div class="row100">
                            <div class="inputBox">
                                <input type="submit" value="ارسال">
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <!-- info box -->
            <div class="contact info">
                <h3>اطلاعات تماس</h3>
                <div class="infoBox">
                    <div>
                        <span><ion-icon name="location"></ion-icon></span>
                        <p>ایران ، اصفهان ، خیابان شهید مدرس </p>
                    </div>

                    <div>
                        <span><ion-icon name="mail"></ion-icon></span>
                        <a href="mailto:alirezamehrabie@yahoo.com">alirezamehrabie@yahoo.com</a>
                    </div>

                    <div>
                        <span><ion-icon name="call"></ion-icon></span>
                        <a href="tell:+989908582119">+989908582119</a>
                    </div>

                    <!-- social media links -->
                    <ul class="sci">
                        <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
                        <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
                        <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
                        <li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
                    </ul>
                </div>
            </div>

            <!-- map -->
            <div class="contact map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3358.035978669176!2d51.725379585484404!3d32.68508879597556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fbc4b79983cfd7d%3A0x7bf7a42d0fea5708!2z2KjYp9i02q_Yp9mHINmI2LHYsti024wg2LTZh9uM2K8g2YXYr9ix2LM!5e0!3m2!1sfa!2s!4v1635166814866!5m2!1sfa!2s"
                  style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>