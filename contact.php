<!DOCTYPE html>
<html lang="zxx">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>KFS Engineering</title>
        
        <?php include "include/css-url.php"; ?>
    </head>
    <body>
        <!-- Pre Loader -->
        <div class="loader">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="spinner"></div>
                </div>
            </div>
        </div>
        <!-- End Pre Loader -->

        <?php include "include/header.php"; ?>

        <!-- Page Title -->
        <div class="page-title-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="title-item">
                            <h2>Contact</h2>
                            <ul>
                                <li>
                                    <a href="index.php">Home</a>
                                </li>
                                <li>
                                    <span>/</span>
                                </li>
                                <li>
                                    Contact
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Contact -->
        <section class="contact-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-item contact-left">
                            <h3>Our Located Place</h3>
                            <p>Started in 2004 Microns is an established name in manufacturing of wide range of precision machined components & assemblies.</p>
                            <ul>
                                <li>
                                    <i class='bx bx-location-plus'></i>
                                    Plot no-28, Bagh Compound, Near Om Dharam Kanta, Sector-58, Faridabad - 121004, Haryana
                                </li>
                                <li>
                                    <i class='bx bx-mail-send'></i>
                                    <a href="mailto:kfsengineeringworks@outlook.com">
                                        <span class="__cf_email__">kfsengineeringworks@outlook.com</span>
                                    </a>
                                </li>
                                <li>
                                    <i class='bx bx-phone-call'></i>
                                    <a href="tel:+918929292904">
                                        +91 8929 2929 04
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-item contact-right">
                            <h3>Get In Touch</h3>
                            <form id="contactForm" method="POST">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control" data-error="Please enter your name" placeholder="Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="phone" id="phone_number" data-error="Please enter your number" class="form-control" placeholder="Phone" onkeypress="if ( isNaN(this.value +
                          String.fromCharCode(event.keyCode) )) return false;" maxlength="10" minlength="10"  required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
    
                                    <div class="col-sm-12 col-lg-12">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control" data-error="Please enter your email" placeholder="Email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="8" data-error="Write your message" placeholder="Message"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
        
                                    <div class="col-md-12 col-lg-12">
                                        <button type="button" class="contact-btn btn" onclick="submitForm('contactForm')">
                                            Send Message
                                        </button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact -->

        <!-- Map -->
        <div class="map-area">
            <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d448819.1594559138!2d76.9499811857936!3d28.49762032284863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x390daeb224a6b617%3A0x5ab60e05903e4f9c!2sHari%20Om%20Dharam%20Kanta%2C%20Sector%2051%2C%20Bazidpur%20Saboli%2C%20Haryana%20131029!3m2!1d28.891082899999997!2d77.0891339!5e0!3m2!1sen!2sin!4v1675446532600!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- End Map -->
        
        <?php include "include/footer.php"; ?>

        <?php include "include/js-url.php"; ?>
    </body>

</html>