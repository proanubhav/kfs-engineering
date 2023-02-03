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
                                    <a href="mailto:efsengineeringworks@outlook.com">
                                        <span class="__cf_email__">efsengineeringworks@outlook.com</span>
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
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
        
                                    <div class="col-sm-6 col-lg-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Phone">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
            
                                    <div class="col-sm-6 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Subject">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
        
                                    <div class="col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message" placeholder="Message"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
        
                                    <div class="col-md-12 col-lg-12">
                                        <button type="submit" class="contact-btn btn">
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
            <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59791272.948469065!2d62.57506029141487!3d23.84100284788009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3663f18a24cbe857%3A0xa9416bfcd3a0f459!2sAsia!5e0!3m2!1sen!2sbd!4v1594975629033!5m2!1sen!2sbd" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <!-- End Map -->
        
        <?php include "include/footer.php"; ?>

        <?php include "include/js-url.php"; ?>
    </body>

</html>