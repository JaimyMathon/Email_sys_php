<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Including other files / library's  -->
    <link rel="stylesheet" href="style/style.css?v=<?php echo time(); ?>">
</head>
<body>
    <!-- Begin of the contact me section -->
    <section>
        <div class="po-contact-me" id=section-contact-me>
            <div class="button" id="openPopup">
                <button><span>Reach out</span></button>
            </div>
        </div>
        <div id="overlay"></div>
        <div class="loginPopup" id="loginPopup">
            <div class="loginText">
                <h5>Contact Form</h5>
                <h6>Contact Me</h6>
                <p>Leave me your message and I will get back to you shortly.</p>
            </div>
            <?php if(isset($message)): ?>
                <div><?php echo $message; ?></div>
            <?php endif; ?>
            <form action="sendMail.php" method="post">
                <div class="userInformation">
                    <!-- Full Name -->
                    <div class="input">
                        <!-- <label for="fullName">Full Name:</label> -->
                        <input type="text" name="fullName" id="fullName" placeholder="Full name">
                    </div>
                    <!-- Company -->
                    <div class="input">
                        <!-- <label for="company">Company Name:</label> -->
                        <input type="text" name="company" id="company" placeholder="Company name">
                    </div>
                    <!-- Phone Number -->
                    <div class="input">
                        <!-- <label for="phoneNumber">Phone Number:</label> -->
                        <input type="number" name="phoneNumber" id="phoneNumber" placeholder="Phone number">
                    </div>
                    <!-- Email -->
                    <div class="input">
                        <!-- <label for="email">Email:</label> -->
                        <input type="text" name="email" id="email" placeholder="E-mail">
                    </div>
                </div>
                <div class="emailInformation">
                    <!-- Subject -->
                    <!-- <label for="subject">Subject:</label> -->
                    <input type="text" name="subject" id="subject" placeholder="Subject">
                    <!-- Body -->
                    <!-- <label for="body">Body:</label> -->
                    <textarea rows="7" cols="30" name="body" placeholder="Message"></textarea>
                    <input class="send" type="submit" name="submit" value="Send">
                </div>
            </form>
            <button id="closePopup">X</button>
        </div>
    </section>

    <script>
        const openButton = document.getElementById('openPopup');
        const popup = document.getElementById('loginPopup');
        const closeButton = document.getElementById('closePopup');
        const overlay = document.getElementById('overlay');

        openButton.addEventListener('click', function() {
            overlay.style.display = 'block';

            popup.style.display = "block";
            // document.body.classList.add('blur-background');
            document.body.style.overflow = 'hidden';
        });

        closeButton.addEventListener('click', function() {
            overlay.style.display = 'none';

            popup.style.display = 'none';
            // document.body.classList.remove('blur-background');
            document.body.style.overflow = 'auto';
        });
    </script>
    <!-- End the contact me section -->
</body>
</html>