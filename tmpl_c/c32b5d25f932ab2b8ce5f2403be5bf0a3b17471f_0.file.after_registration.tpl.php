<?php /* Smarty version 3.1.27, created on 2023-06-01 21:43:42
         compiled from "/home/quickass/domains/easycryptotrading.ltd/public_html/tmpl/after_registration.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:13092901916479110ef194b2_48568349%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c32b5d25f932ab2b8ce5f2403be5bf0a3b17471f' => 
    array (
      0 => '/home/quickass/domains/easycryptotrading.ltd/public_html/tmpl/after_registration.tpl',
      1 => 1684712083,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13092901916479110ef194b2_48568349',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_6479110f05acc1_86325601',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6479110f05acc1_86325601')) {
function content_6479110f05acc1_86325601 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '13092901916479110ef194b2_48568349';
$_smarty_tpl->tpl_vars['pageName'] = new Smarty_Variable("Registration Completed", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



          <h3>Registration completed:</h3><br>

          Thank you for joining our program.<br>
          You are now an official member of this program. You can login to your account to start investing with us and use all the services that are available for our members.
          <br>
          <br>

          <b>Important:</b> Do not provide your login and password to anyone!
          <div class="btn py-1 px-4 bg-info text-white">
          <a href="?a=login" class="text-white">
          	login
            </a>
          </div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>