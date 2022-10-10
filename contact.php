<!DOCTYPE html>
<html>

<head>
    <meta charset=utf-8>
    <title>Impress Developer Contact</title>
    <?php include "common/style.php"?>

</head>

<body>
    <?php include "common/menu.php"?>

    <section class="second-header bg-color">
        <div class="container">
            <ul>
                <li><a href="index.php" style="color: #333; font-weight: 700;">HOME</a></li>
                <li style="color: #fff; font-weight: 700;">/ CONTACT</li>
            </ul>
        </div>

    </section>

    <section class="form bg-dark">
        <div class="container">
            <div class="text-center font-weight-bold mb-5">
                <h3>Drop Your Message</h3>
<!--                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
            </div>
            <form method="post" action="contact_form_email.php">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Name*</label>
                            <input type="text" name="name" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="emailAddress">Email*</label>
                            <input type="email" name="email" class="form-control" id="emailAddress">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" class="form-control" id="phone">
                        </div>
                        <div class="form-group">
                            <label for="country">Country</label>
                            <input type="text" class="form-control" name="country" id="country">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="subject">Subject*</label>
                            <input type="text" class="form-control" name="subject" id="subject">
                        </div>
                        <div class="form-group">
                            <label for="message">Message*</label>
                            <textarea class="form-control" name="message" id="message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-block" style="background-color: #1bbd36; color: #fff;" value="Submit Message">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <section class="map bg-dark">
        
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.0999456912577!2d90.36439181498126!3d23.743815084592583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf48bf3a7fd1%3A0xdb24e6b11920362c!2sRayer+Bazar+High+School!5e0!3m2!1sen!2sbd!4v1554186581893!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0" allowfullscreen>">
		</iframe>
                
    </section>

   
  
   <!--start footer area-->
   <?php include "common/footer.php"?>
<!--end footer area-->






    <!--    JS-->
 <?php include "common/script.php"?>





</body>

</html>
