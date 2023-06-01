{$siteEmail = "info@easycryptotrading.ltd"}
{$sitePhone = "+1234455"}

{$pageName = "Contact Us"}
{include file="auth_header.tpl"}

<!--Page Title-->
<section class="page-title" style="background-image:url(home/images1/background/8.jpg);">
    <div class="auto-container">
        <h1>Contact Us</h1>
        <div class="text">For Enquiries</div>
    </div>
    <!--Page Info-->
    <div class="page-info">
        <div class="auto-container clearfix">
            <ul class="bread-crumb">
                <li><a href="/">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
    <!--End Page Info-->
</section>
<!--End Page Title-->

<!--Services Section-->
<section class="contact-page-section">
    <div class="auto-container">
        <div class="sec-title">

            <h2>Contact Us</h2>
        </div>

        <div class="row clearfix">
            <!--Column-->
            <div class="column col-lg-8 col-md-12 col-sm-12">
                <!-- Contact Form -->
                <div class="contact-form">
                    <!--Contact Form-->
                    <h3>Support Form:</h3><br>

                    <script language=javascript>

                        function checkform() {
                            if (document.mainform.name.value == '') {
                                alert("Please type your full name!");
                                document.mainform.name.focus();
                                return false;
                            }
                            if (document.mainform.email.value == '') {
                                alert("Please enter your e-mail address!");
                                document.mainform.email.focus();
                                return false;
                            }
                            if (document.mainform.message.value == '') {
                                alert("Please type your message!");
                                document.mainform.message.focus();
                                return false;
                            }
                            return true;
                        }

                    </script>

                    <form method=post name=mainform onsubmit="return checkform()"><input type="hidden" name="form_id" value="16843401949826"><input type="hidden" name="form_token" value="a002e3734ccc78b84fd66e8ca8030d8f">
                        <input type=hidden name=a value=support>
                        <input type=hidden name=action value=send>


                        <table cellspacing=0 cellpadding=2 border=0>
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="name" value="" size=30 class=inpts placeholder="Name">
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="email" value="" size=30 class=inpts placeholder="Email">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name=message class=inpts cols=45 rows=4 placeholder="Message"></textarea>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <button class="theme-btn btn-style-two" type=submit value="Send"><span class="btn-title">Send Massage</span></button>
                                </div></div>
                        </table>
                    </form>

                </div>
                <!--End Contact Form -->
            </div>
            <!--Column-->
            <div class="column col-lg-4 col-md-12 col-sm-12">
                <div class="text">Feel free to get in touch with us. </div>

                <ul class="contact-info">
                    <li>
                        <span class="icon fa fa-globe"></span>
                        <strong>
                    </li>

                    <li>
                        <span class="icon fa fa-phone-volume"></span>
                        <strong>Call Center</strong>
                        <a href="tel:{$sitePhone}">{$sitePhone}</a> <a href="#"></a>
                    </li>

                    <li>

                        <span class="icon fa fa-envelope-open"></span>
                        <strong>Email Us</strong>
                        <a href="mailto:{$siteEmail}">{$siteEmail}</a>
                    </li>
                </ul>



                <ul class="social-icon-three">
                    <li class="title">Follow Us</li>
                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                    <li><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fab fa-skype"></span></a></li>
                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                </ul>


            </div>
        </div>
    </div>        </section>
<!--End Services Section-->

{include file="auth_footer.tpl"}