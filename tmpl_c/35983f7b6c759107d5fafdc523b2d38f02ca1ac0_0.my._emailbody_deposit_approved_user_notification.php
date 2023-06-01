<?php /* Smarty version 3.1.27, created on 2023-05-29 00:22:14
         compiled from "my:_emailbody_deposit_approved_user_notification" */ ?>
<?php
/*%%SmartyHeaderCode:20864739796473f0364a95d9_75573384%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35983f7b6c759107d5fafdc523b2d38f02ca1ac0' => 
    array (
      0 => 'my:_emailbody_deposit_approved_user_notification',
      1 => 1685319734,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '20864739796473f0364a95d9_75573384',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_6473f0364bfd74_05497572',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6473f0364bfd74_05497572')) {
function content_6473f0364bfd74_05497572 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '20864739796473f0364a95d9_75573384';
?>
Dear #name#

Your deposit has been approved:

Amount: $#amount# of #currency#
Plan: #plan#
#fields#<?php }
}
?>