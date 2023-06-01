<?php /* Smarty version 3.1.27, created on 2023-06-01 21:41:27
         compiled from "/home/quickass/domains/easycryptotrading.ltd/public_html/tmpl/signup.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:181141013264791087a0f195_48362410%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3606e6dd04ccf7e5cb539c1adacd512ae2e0158f' => 
    array (
      0 => '/home/quickass/domains/easycryptotrading.ltd/public_html/tmpl/signup.tpl',
      1 => 1685234298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181141013264791087a0f195_48362410',
  'variables' => 
  array (
    'errors' => 0,
    'settings' => 0,
    'account_errors' => 0,
    'err' => 0,
    'frm' => 0,
    'ti' => 0,
    'tAndCUrl' => 0,
    'loginUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64791087c51783_99869576',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64791087c51783_99869576')) {
function content_64791087c51783_99869576 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/quickass/domains/easycryptotrading.ltd/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';
if (!is_callable('smarty_modifier_escape')) require_once '/home/quickass/domains/easycryptotrading.ltd/public_html/inc/libs/smarty3/plugins/modifier.escape.php';

$_smarty_tpl->properties['nocache_hash'] = '181141013264791087a0f195_48362410';
$_smarty_tpl->tpl_vars['tAndCUrl'] = new Smarty_Variable("?a=rules", null, 0);?>
<?php $_smarty_tpl->tpl_vars['loginUrl'] = new Smarty_Variable("?a=login", null, 0);?>

<?php $_smarty_tpl->tpl_vars['pageName'] = new Smarty_Variable("Register", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("auth_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


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



                    
                    <?php echo '<script'; ?>
 language=javascript>
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
                    <?php echo '</script'; ?>
>
                    

                    <?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
                    <ul style="color:red">
                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['e'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['e']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['name'] = 'e';
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['errors']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total']);
?>
                        <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'full_name') {?>
                        <li>Please enter your full name!
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'address') {?>
                        <li>Please enter your address!
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'city') {?>
                        <li>Please enter your city!
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'state') {?>
                        <li>Please enter your state!
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'zip') {?>
                        <li>Please enter your zip!
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'country') {?>
                        <li>Please choose your country!
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'username') {?>
                        <li>Please enter valid username! It should contains English letters and digits only.
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'username_exists') {?>
                        <li>Sorry, such user already exists! Please try another username.
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'email_exists') {?>
                        <li>Sorry, such email already exists! Please try another email.
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'password') {?>
                        <li>Please enter a password!
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'password_confirm') {?>
                        <li>Please check your password!
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'password_too_small') {?>
                        <li>The password you provided is too small, please enter at least <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['min_user_password_length']);?>
 characters!
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'transaction_code') {?>
                        <li>Please enter the Transaction Code!
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'transaction_code_confirm') {?>
                        <li>Please check your Transaction Code!
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'transaction_code_too_small') {?>
                        <li>The Transaction Code you provided is too small, please enter at least <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['min_user_password_length']);?>
 characters!
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'transaction_code_vs_password') {?>
                        <li>The Transaction Code should differ from the Password!
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'egold') {?>
                        <li>Please enter your e-gold account number!
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'invalid_perfectmoney_account') {?>
                        <li>Please enter USD PerfectMoney account number!
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'email') {?>
                        <li>Please enter your e-mail!
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'agree') {?>
                        <li>You have to agree with the Terms and Conditions!
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'turing_image') {?>
                        <li>Enter the verification code as it is shown in the corresponding box.
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'no_upline') {?>
                        <li>The system requires an upline to register. <?php if ($_smarty_tpl->tpl_vars['settings']->value['get_rand_ref']) {?>You have to be agreed to random one or found a referral link in the net.<?php }?>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'ip_exists_in_database') {?>
                        <li>Your IP already exists in our database. Sorry, but registration impossible.
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'invalid_account_format') {?>
                            <?php
$_from = $_smarty_tpl->tpl_vars['account_errors']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['err'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['err']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->_loop = true;
$foreach_err_Sav = $_smarty_tpl->tpl_vars['err'];
?>
                        <li><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['err']->value);?>

                            <?php
$_smarty_tpl->tpl_vars['err'] = $foreach_err_Sav;
}
?>
                            <?php }?>

                            <br>
                            <?php endfor; endif; ?>
                    </ul>
                    <?php }?>



                    <form method=post onsubmit="return checkform()" name="regform">
                        <input type=hidden name=a value="signup">
                        <input type=hidden name=action value="signup">

                        <table cellspacing=0 cellpadding=2 border=0>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type=text name=fullname value="<?php echo smarty_modifier_myescape(smarty_modifier_escape($_smarty_tpl->tpl_vars['frm']->value['fullname'], " quotes"));?>
" class="form-control" size=30 placeholder="Your Full Name">
                                    </div>
                                    <div class="form-group">
                                        <input type=text name=username value="<?php echo smarty_modifier_myescape(smarty_modifier_escape($_smarty_tpl->tpl_vars['frm']->value['username'], " quotes"));?>
" class="form-control" size=30 placeholder="Your Username">
                                    </div>
                                    <div class="form-group">
                                        <input type=password name=password value="<?php echo smarty_modifier_myescape(smarty_modifier_escape($_smarty_tpl->tpl_vars['frm']->value['password'], " quotes"));?>
" class="form-control" size=30 placeholder="Define Password">
                                    </div>
                                    <div class="form-group">
                                        <input type=password name=password2 value="<?php echo smarty_modifier_myescape(smarty_modifier_escape($_smarty_tpl->tpl_vars['frm']->value['password2'], " quotes"));?>
" class="form-control" size=30 placeholder="Retype Password">
                                    </div>
                                    <div class="form-group">
                                        <input type=text name=email value="<?php echo smarty_modifier_myescape(smarty_modifier_escape($_smarty_tpl->tpl_vars['frm']->value['email'], " quotes"));?>
" class="form-control" size=30 placeholder="Your E-mail Address">
                                    </div>
                                    <div class="form-group">
                                        <input type=text name=email1 value="<?php echo smarty_modifier_myescape(smarty_modifier_escape($_smarty_tpl->tpl_vars['frm']->value['email1'], " quotes"));?>
" class="form-control" size=30 placeholder="Retype Your E-mail">
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
                                    <input type=text name=sq value="<?php echo smarty_modifier_myescape(smarty_modifier_escape($_smarty_tpl->tpl_vars['frm']->value['sq'], " quotes"));?>
" class="form-control" size=30 placeholder="Secret question">
                                </div>
                                <div class="form-group">
                                    <input type=text name=sa value="<?php echo smarty_modifier_myescape(smarty_modifier_escape($_smarty_tpl->tpl_vars['frm']->value['sa'], " quotes"));?>
" class="form-control" size=30 placeholder="Secret answer">
                                </div>
                                <div class="form-group">
                                    <!--                                    Your Upline: N/A (n/a)-->
                                </div>

                                <div class="form-group">
                                    <?php if ($_smarty_tpl->tpl_vars['ti']->value['check']['signup']) {?>
                                    <tr>

                                        <td><label> Code: <img src="<?php echo smarty_modifier_myescape(encurl(" ?a=show_validation_image&".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['name'])."=".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['id'])."&rand=".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['rand'])));?>
"> </label> <input type=text name=validation_number class=inpts size=30></td>
                                    </tr>
                                    <?php }?>
                                    <div class="checkbox-group">
                                        <input type=checkbox name=agree value=1  > <label for="terms" class="checkbox-group__label"> I agree with <a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['tAndCUrl']->value);?>
">Terms and conditions</a>
                                    </label>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <button class="theme-btn btn-style-two" type="submit" value="Register" class=sbmt>Register</button>
                                </div>

                                <div class="text-center">
                                    <a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['loginUrl']->value);?>
" class="link">Login</a>
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

<?php echo $_smarty_tpl->getSubTemplate ("auth_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>