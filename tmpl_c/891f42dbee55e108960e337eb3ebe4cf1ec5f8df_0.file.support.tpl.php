<?php /* Smarty version 3.1.27, created on 2023-05-30 23:12:13
         compiled from "/home/quickass/domains/easycryptotrading.ltd/public_html/tmpl/support.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1396300769647682cd46dcc3_53530811%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '891f42dbee55e108960e337eb3ebe4cf1ec5f8df' => 
    array (
      0 => '/home/quickass/domains/easycryptotrading.ltd/public_html/tmpl/support.tpl',
      1 => 1685232596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1396300769647682cd46dcc3_53530811',
  'variables' => 
  array (
    'sitePhone' => 0,
    'siteEmail' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_647682cd4f57b9_71699252',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_647682cd4f57b9_71699252')) {
function content_647682cd4f57b9_71699252 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/quickass/domains/easycryptotrading.ltd/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '1396300769647682cd46dcc3_53530811';
$_smarty_tpl->tpl_vars['siteEmail'] = new Smarty_Variable("info@easycryptotrading.ltd", null, 0);?>
<?php $_smarty_tpl->tpl_vars['sitePhone'] = new Smarty_Variable("+1234455", null, 0);?>

<?php $_smarty_tpl->tpl_vars['pageName'] = new Smarty_Variable("Contact Us", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("auth_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


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

                    <?php echo '<script'; ?>
 language=javascript>

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

                    <?php echo '</script'; ?>
>

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
                        <a href="tel:<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['sitePhone']->value);?>
"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['sitePhone']->value);?>
</a> <a href="#"></a>
                    </li>

                    <li>

                        <span class="icon fa fa-envelope-open"></span>
                        <strong>Email Us</strong>
                        <a href="mailto:<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['siteEmail']->value);?>
"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['siteEmail']->value);?>
</a>
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

<?php echo $_smarty_tpl->getSubTemplate ("auth_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>