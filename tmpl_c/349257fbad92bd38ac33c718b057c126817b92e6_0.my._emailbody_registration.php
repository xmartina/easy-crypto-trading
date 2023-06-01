<?php /* Smarty version 3.1.27, created on 2023-06-01 21:43:41
         compiled from "my:_emailbody_registration" */ ?>
<?php
/*%%SmartyHeaderCode:7863502046479110d4b8193_78091025%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '349257fbad92bd38ac33c718b057c126817b92e6' => 
    array (
      0 => 'my:_emailbody_registration',
      1 => 1685655821,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '7863502046479110d4b8193_78091025',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_6479110d687fc6_29921580',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6479110d687fc6_29921580')) {
function content_6479110d687fc6_29921580 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7863502046479110d4b8193_78091025';
?>
Hello #name#,

Thank you for registration on our site.

Your login information:

Login: #username#
Password: #password#

You can login here: #site_url#

Contact us immediately if you did not authorize this registration.

Thank you.<?php }
}
?>