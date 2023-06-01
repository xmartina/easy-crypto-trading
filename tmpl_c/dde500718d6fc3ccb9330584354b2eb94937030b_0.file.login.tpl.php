<?php /* Smarty version 3.1.27, created on 2023-06-01 21:44:24
         compiled from "/home/quickass/domains/easycryptotrading.ltd/public_html/tmpl/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:46735872064791138f42221_31713068%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dde500718d6fc3ccb9330584354b2eb94937030b' => 
    array (
      0 => '/home/quickass/domains/easycryptotrading.ltd/public_html/tmpl/login.tpl',
      1 => 1685226660,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46735872064791138f42221_31713068',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_647911390bab58_10495746',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_647911390bab58_10495746')) {
function content_647911390bab58_10495746 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '46735872064791138f42221_31713068';
$_smarty_tpl->tpl_vars['pageName'] = new Smarty_Variable("Login Page", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("auth_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<!--Page Title-->
<section class="page-title" style="background-image:url(../images1/background/8.html);">
    <div class="auto-container">
        <h1>Login Here</h1>

    </div>
    <!--Page Info-->
    <div class="page-info">
        <div class="auto-container clearfix">
            <ul class="bread-crumb">
                <li><a href="/">Home</a></li>
                <li>Login</li>
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
            <span class="title">Enter Your Username and password</span>
            <h2>Login Here</h2>
        </div>
        <!--            Style-->
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
                            if (document.mainform.username.value=='') {
                                alert("Please type your username!");
                                document.mainform.username.focus();
                                return false;
                            }
                            if (document.mainform.password.value=='') {
                                alert("Please type your password!");
                                document.mainform.password.focus();
                                return false;
                            }
                            return true;
                        }
                    <?php echo '</script'; ?>
>
					

                    <h3>Login:</h3>
                    <br>
                    <form method=post name=mainform onsubmit="return checkform()"><input type="hidden" name="form_id" value="16843401956746"><input type="hidden" name="form_token" value="2b0b0fb43a89d70f9263bc96e00d17d8">
                        <input type=hidden name=a value='do_login'>
                        <input type=hidden name=follow value=''>
                        <input type=hidden name=follow_id value=''>
                        <table cellspacing=0 cellpadding=2 border=0>
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type=text name=username value='' class=inpts size=30 autofocus="autofocus" placeholder="Enter Username">
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type=password name=password value='' class=inpts size=30 placeholder="Enter Password">
                                </div>


                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <button class="theme-btn btn-style-two" type=submit value="Login"><span class="btn-title">Log In</span></button>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <a href="?a=forgot_password" class="theme-btn btn-style-two"> <span class="btn-title">Recover Password</span></a>
                                </div>
                            </div>
                        </table>
                    </form>

                </div>
                <!--End Contact Form -->
            </div>

        </div>
    </div>

</section>


<?php echo $_smarty_tpl->getSubTemplate ("auth_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>