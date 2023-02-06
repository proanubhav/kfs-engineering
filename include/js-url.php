<!-- Essential JS -->
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!-- Form Validator JS -->
<!-- <script src="assets/js/form-validator.min.js"></script> -->
<!-- Contact JS -->
<script src="assets/js/contact-form-script.js"></script>
<!-- Meanmenu JS -->
<script src="assets/js/jquery.meanmenu.js"></script>
<!-- Owl Carousel -->
<script src="assets/js/owl.carousel.min.js"></script>
<!-- Appear JS --> 
<script src="assets/js/jquery.appear.js"></script>
<!-- Odometer JS --> 
<script src="assets/js/odometer.min.js"></script>
<!-- Magnific Popup JS -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!-- Custom JS -->
<script src="assets/js/custom.js"></script>

<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

<!-- contact form script start -->
<script>
    function submitForm(formId) {
        debugger
        try {

            if (!$("#" + formId).valid()) {
                return false
            }
            $("button").attr('disabled', true)
            var postData = $('#' + formId).serialize()

            $.ajax({
                type: 'POST',
                url: "mail.php",
                    data: postData,
                    success: function (data) {
                        $("button").attr('disabled', false)
                        if (data == 1) {
                            $("#" + formId)[0].reset();
                            var x = document.getElementById("snackbar");
                            x.className = "show";
                            setTimeout(function () {
                                x.className = x.className.replace("show", "");
                            }, 3000);
                            $("#myModalEnquiry").modal("hide");
                        } else {
                            alert(data)
                        }
                    },
                    error: function (error) {
                        
                        $("button").attr('disabled', false)
                        alert("Something went wrong, please try again later")
                    }
                });
            } catch (error) {
                console.log(error.message);
    
                $("button").attr('disabled', false)
                alert("Something went wrong, please try again later")
            }
        }
    </script>
    
    <div id="snackbar">Form Submitted Successfully</div>