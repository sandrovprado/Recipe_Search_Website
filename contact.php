<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="contactstyless.css">
</head>
<body>
<div class ="backgroundImage">
        <div class="navbar">
            
            <img src="navLogo.jpeg" alt="navLogo" class="navLogo">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="aboutMe.php">About</a></li>
                <li><a href="allcategories.php">Categories</a></li>
                <li><a href="recipes.php"> All Recipes</a></li>
                <li><a href="contact.php">Contact</a></li>
                
            </ul>
        </div>
        <section>
                <div class="Container">
                <div class="contactinfo">
                    <div>
                        <h2> Contact info</h2>
                        <ul class = "info">
                            <li>
                                <p> <a href="https://www.google.com/maps/place/Kean+University/@40.6801699,-74.2352987,17z/data=!4m5!3m4!1s0x89c3ad5b6a0b3391:0x76c486324be28e94!8m2!3d40.6801659!4d-74.23311"><img src="location.png"></a></p>
                                <p> 1000 Morris Ave<br>
                                     Union, NJ<br>
                                      07083</p>
                            </li>
                            <li>
                                <p> <a href="mailto:admitme@kean.edu"><img src="mail.png"></a></p>
                                <p> admitme@kean.edu</p>
                            </li>
                              <li>
                                <p> <a href="callto:908-737-5326"><img src="phone.png"></a></p>
                                <p>(908) 737-5326</p>
                            </li>
                        </ul>
                        </div>
                        <ul class="sci">
                            <li><a href="https://www.facebook.com/keanuniversity/"><img src="facebooks.png"></a></li>
                            <li><a href="https://twitter.com/KeanUniversity"><img src="twitters.png"></a></li>
                            <li><a href="https://www.instagram.com/keanuniversity/"><img src="instagrams.png"></a></li>
                        </ul>
               </div>
               <div class="contactForm">
                   <h2>Send us a message!</h2>
                   <form class="formBox">
                       <div class="inputBox w50">
                           <input id="name"type="text" name="" required="required">
                           <span>First Name</span>
                       </div>
                       <div class="inputBox w50">
                           <input id="lname" type="text" name="" required="required">
                           <span>Last Name</span>
                       </div>
                       <div class="inputBox w50">
                           <input id="email" type="text" name="" required="required">
                           <span>Email Address</span>
                       </div>
                       <div class="inputBox w50">
                           <input id="subject" type="text" name="" required="required">
                           <span>Subject</span>
                       </div>
                       <div class="inputBox w100">
                           <textarea id="body" name = "" required></textarea>
                           <span>Write your message here...</span>
                       </div>
                       <div class="inputBox w100">
                           <input type="submit" onclick="sendEmail()" value="Send">
                       </div>
                   </form>
               </div>
            </div>
        </section>
    </div>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            var subject = $("#subject");
            var body = $("#body");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                $.ajax({
                   url: 'contactform.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       subject: subject.val(),
                       body: body.val()
                   }, success: function (response) {
                        $('#formBox')[0].reset();
                        $('.sent-notification').text("Message Sent Successfully.");
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>
                 
                </form>
               </div>
        </div>
        </section>
    </div>
</body>
</html>

