{$tAndCUrl = "?a=rules"}
{$loginUrl = "?a=login"}

{$pageName = "Register"}
{include file="auth_header.tpl"}

<!--Page Title-->
<section class="page-title" style="background-image:url(home/images1/background/8.jpg);">
    <div class="auto-container">

        <h1>Register Here</h1>

    </div>
    <!--Page Info-->
    <div class="page-info">
        <div class="auto-container clearfix">
            <ul class="bread-crumb">
                <li><a href="/">Home</a></li>
                <li>Sign Up</li>
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
            <span class="title">Fill the registration form below:</span>
            <h2>Sign Up Here</h2>
        </div>

        <style>

            input[type=password]
            {
                position: relative;
                display: block;
                width: 100%;
                font-size: 14px;
                line-height: 28px;
                color: #bbbbbb;
                font-weight: 400;
                height: 60px;
                padding: 15px 30px;
                background-color: transparent;
                border: 1px solid #dddddd;
                border-radius: 30px;
                -webkit-transition: all 300ms ease;
                -moz-transition: all 300ms ease;
                -ms-transition: all 300ms ease;
                -o-transition: all 300ms ease;
                transition: all 300ms ease;
            }
        </style>

        <div class="row clearfix">
            <!--Column-->
            <div class="column col-lg-12 col-md-12 col-sm-12">
                <!-- Contact Form -->
                <div class="contact-form">
                    <!--Contact Form-->



                    {literal}
                    <script language=javascript>
                        function checkform() {
                            if (document.regform.fullname.value == '') {
                                alert("Please enter your full name!");
                                document.regform.fullname.focus();
                                return false;
                            }


                            if (document.regform.username.value == '') {
                                alert("Please enter your username!");
                                document.regform.username.focus();
                                return false;
                            }
                            if (!document.regform.username.value.match(/^[A-Za-z0-9_\-]+$/)) {
                                alert("For username you should use English letters and digits only!");
                                document.regform.username.focus();
                                return false;
                            }
                            if (document.regform.password.value == '') {
                                alert("Please enter your password!");
                                document.regform.password.focus();
                                return false;
                            }
                            if (document.regform.password.value != document.regform.password2.value) {
                                alert("Please check your password!");
                                document.regform.password2.focus();
                                return false;
                            }


                            if (document.regform.email.value == '') {
                                alert("Please enter your e-mail address!");
                                document.regform.email.focus();
                                return false;
                            }
                            if (document.regform.email.value != document.regform.email1.value) {
                                alert("Please retupe your e-mail!");
                                document.regform.email.focus();
                                return false;
                            }

                            for (i in document.regform.elements) {
                                f = document.regform.elements[i];
                                if (f.name && f.name.match(/^pay_account/)) {
                                    if (f.value == '') continue;
                                    var notice = f.getAttribute('data-validate-notice');
                                    var invalid = 0;
                                    if (f.getAttribute('data-validate') == 'regexp') {
                                        var re = new RegExp(f.getAttribute('data-validate-regexp'));
                                        if (!f.value.match(re)) {
                                            invalid = 1;
                                        }
                                    } else if (f.getAttribute('data-validate') == 'email') {
                                        var re = /^[^\@]+\@[^\@]+\.\w{2,4}$/;
                                        if (!f.value.match(re)) {
                                            invalid = 1;
                                        }
                                    }
                                    if (invalid) {
                                        alert('Invalid account format. Expected '+notice);
                                        f.focus();
                                        return false;
                                    }
                                }
                            }

                            if (document.regform.agree.checked == false) {
                                alert("You have to agree with the Terms and Conditions!");
                                return false;
                            }

                            return true;
                        }

                        function IsNumeric(sText) {
                            var ValidChars = "0123456789";
                            var IsNumber=true;
                            var Char;
                            if (sText == '') return false;
                            for (i = 0; i < sText.length && IsNumber == true; i++) {
                                Char = sText.charAt(i);
                                if (ValidChars.indexOf(Char) == -1) {
                                    IsNumber = false;
                                }
                            }
                            return IsNumber;
                        }
                    </script>
                    {/literal}

                    {if $errors}
                    <ul style="color:red">
                        {section name=e loop=$errors}
                        {if $errors[e] eq 'full_name'}
                        <li>Please enter your full name!
                            {/if}
                            {if $errors[e] eq 'address'}
                        <li>Please enter your address!
                            {/if}
                            {if $errors[e] eq 'city'}
                        <li>Please enter your city!
                            {/if}
                            {if $errors[e] eq 'state'}
                        <li>Please enter your state!
                            {/if}
                            {if $errors[e] eq 'zip'}
                        <li>Please enter your zip!
                            {/if}
                            {if $errors[e] eq 'country'}
                        <li>Please choose your country!
                            {/if}
                            {if $errors[e] eq 'username'}
                        <li>Please enter valid username! It should contains English letters and digits only.
                            {/if}
                            {if $errors[e] eq 'username_exists'}
                        <li>Sorry, such user already exists! Please try another username.
                            {/if}
                            {if $errors[e] eq 'email_exists'}
                        <li>Sorry, such email already exists! Please try another email.
                            {/if}
                            {if $errors[e] eq 'password'}
                        <li>Please enter a password!
                            {/if}
                            {if $errors[e] eq 'password_confirm'}
                        <li>Please check your password!
                            {/if}
                            {if $errors[e] eq 'password_too_small'}
                        <li>The password you provided is too small, please enter at least {$settings.min_user_password_length} characters!
                            {/if}
                            {if $errors[e] eq 'transaction_code'}
                        <li>Please enter the Transaction Code!
                            {/if}
                            {if $errors[e] eq 'transaction_code_confirm'}
                        <li>Please check your Transaction Code!
                            {/if}
                            {if $errors[e] eq 'transaction_code_too_small'}
                        <li>The Transaction Code you provided is too small, please enter at least {$settings.min_user_password_length} characters!
                            {/if}
                            {if $errors[e] eq 'transaction_code_vs_password'}
                        <li>The Transaction Code should differ from the Password!
                            {/if}
                            {if $errors[e] eq 'egold'}
                        <li>Please enter your e-gold account number!
                            {/if}
                            {if $errors[e] eq 'invalid_perfectmoney_account'}
                        <li>Please enter USD PerfectMoney account number!
                            {/if}
                            {if $errors[e] eq 'email'}
                        <li>Please enter your e-mail!
                            {/if}
                            {if $errors[e] eq 'agree'}
                        <li>You have to agree with the Terms and Conditions!
                            {/if}
                            {if $errors[e] eq 'turing_image'}
                        <li>Enter the verification code as it is shown in the corresponding box.
                            {/if}
                            {if $errors[e] eq 'no_upline'}
                        <li>The system requires an upline to register. {if $settings.get_rand_ref}You have to be agreed to random one or found a referral link in the net.{/if}
                            {/if}
                            {if $errors[e] eq 'ip_exists_in_database'}
                        <li>Your IP already exists in our database. Sorry, but registration impossible.
                            {/if}

                            {if $errors[e] eq 'invalid_account_format'}
                            {foreach from=$account_errors item=err}
                        <li>{$err}
                            {/foreach}
                            {/if}

                            <br>
                            {/section}
                    </ul>
                    {/if}



                    <form method=post onsubmit="return checkform()" name="regform">
                        <input type=hidden name=a value="signup">
                        <input type=hidden name=action value="signup">

                        <table cellspacing=0 cellpadding=2 border=0>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type=text name=fullname value="{$frm.fullname|escape:" quotes"}" class="form-control" size=30 placeholder="Your Full Name">
                                    </div>
                                    <div class="form-group">
                                        <input type=text name=username value="{$frm.username|escape:" quotes"}" class="form-control" size=30 placeholder="Your Username">
                                    </div>
                                    <div class="form-group">
                                        <input type=password name=password value="{$frm.password|escape:" quotes"}" class="form-control" size=30 placeholder="Define Password">
                                    </div>
                                    <div class="form-group">
                                        <input type=password name=password2 value="{$frm.password2|escape:" quotes"}" class="form-control" size=30 placeholder="Retype Password">
                                    </div>
                                    <div class="form-group">
                                        <input type=text name=email value="{$frm.email|escape:" quotes"}" class="form-control" size=30 placeholder="Your E-mail Address">
                                    </div>
                                    <div class="form-group">
                                        <input type=text name=email1 value="{$frm.email1|escape:" quotes"}" class="form-control" size=30 placeholder="Retype Your E-mail">
                                    </div>
                                </div>
                                <!--
                                <div class="col-md-6">

                                <div class="form-group">
                                        <input type=text class="form-control" name="pay_account[1000][Bitcoin wallet:]" value="" placeholder="Bitcoin Bitcoin wallet:">
                                 </div>
                                <div class="form-group">
                                        <input type=text class="form-control" name="pay_account[1006][Account ID]" value="" placeholder="Litecoin Account ID">
                                 </div>
                                <div class="form-group">
                                        <input type=text class="form-control" name="pay_account[1007][Account ID]" value="" placeholder="Dogecoin Account ID">
                                 </div>
                                <div class="form-group">
                                        <input type=text class="form-control" name="pay_account[1008][Account ID]" value="" placeholder="XRP Account ID">
                                 </div>
                                <div class="form-group">
                                        <input type=text class="form-control" name="pay_account[1009][Account ID]" value="" placeholder="Ethereum Account ID">
                                 </div>
                                <div class="form-group">
                                        <input type=text class="form-control" name="pay_account[1010][Account ID]" value="" placeholder="Bitcoin Cash Account ID">
                                 </div>
                                <div class="form-group">
                                        <input type=text class="form-control" name="pay_account[1015][Account ID]" value="" placeholder="XLM Account ID">
                                 </div>
                                <div class="form-group">
                                        <input type=text class="form-control" name="pay_account[1013][Account ID]" value="" placeholder="TETHER USDT Account ID">
                                 </div>
                                <div class="form-group">
                                        <input type=text class="form-control" name="pay_account[1014][Account ID]" value="" placeholder="Yearn Finance Account ID">
                                 </div>
                                </div>
                                -->
                                <div class="form-group">
                                    <input type=text name=sq value="{$frm.sq|escape:" quotes"}" class="form-control" size=30 placeholder="Secret question">
                                </div>
                                <div class="form-group">
                                    <input type=text name=sa value="{$frm.sa|escape:" quotes"}" class="form-control" size=30 placeholder="Secret answer">
                                </div>
                                <div class="form-group">
                                    <!--                                    Your Upline: N/A (n/a)-->
                                </div>

                                <div class="form-group">
                                    {if $ti.check.signup}
                                    <tr>

                                        <td><label> Code: <img src="{" ?a=show_validation_image&`$ti.session.name`=`$ti.session.id`&rand=`$ti.session.rand`"|encurl}"> </label> <input type=text name=validation_number class=inpts size=30></td>
                                    </tr>
                                    {/if}
                                    <div class="checkbox-group">
                                        <input type=checkbox name=agree value=1  > <label for="terms" class="checkbox-group__label"> I agree with <a href="{$tAndCUrl}">Terms and conditions</a>
                                    </label>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <button class="theme-btn btn-style-two" type="submit" value="Register" class=sbmt>Register</button>
                                </div>

                                <div class="text-center">
                                    <a href="{$loginUrl}" class="link">Login</a>
                                </div>
                            </div>
                </div>

                </table>
                </form>
            </div>
            <!--End Contact Form -->
        </div>
        <!--Column-->

    </div>

</section>

</div>

{include file="auth_footer.tpl"}