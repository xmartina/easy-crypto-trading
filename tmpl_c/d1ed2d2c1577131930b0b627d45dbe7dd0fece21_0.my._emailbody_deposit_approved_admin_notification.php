<?php /* Smarty version 3.1.27, created on 2023-05-29 00:22:14
         compiled from "my:_emailbody_deposit_approved_admin_notification" */ ?>
<?php
/*%%SmartyHeaderCode:5669851556473f0365fde34_57728328%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1ed2d2c1577131930b0b627d45dbe7dd0fece21' => 
    array (
      0 => 'my:_emailbody_deposit_approved_admin_notification',
      1 => 1685319734,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '5669851556473f0365fde34_57728328',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_6473f0365ffd32_41482380',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6473f0365ffd32_41482380')) {
function content_6473f0365ffd32_41482380 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5669851556473f0365fde34_57728328';
?>
Deposit has been approved:

User: #username# (#name#)
Amount: $#amount# of #currency#
Plan: #plan#
Date: #deposit_date#
#fields#<?php }
}
?>