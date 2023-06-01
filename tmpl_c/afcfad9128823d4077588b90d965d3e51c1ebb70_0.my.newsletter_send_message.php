<?php /* Smarty version 3.1.27, created on 2023-06-01 21:55:17
         compiled from "my:newsletter_send_message" */ ?>
<?php
/*%%SmartyHeaderCode:219741743647913c52703a0_94835588%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afcfad9128823d4077588b90d965d3e51c1ebb70' => 
    array (
      0 => 'my:newsletter_send_message',
      1 => 1685656517,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '219741743647913c52703a0_94835588',
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_647913c5345446_95507036',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_647913c5345446_95507036')) {
function content_647913c5345446_95507036 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '219741743647913c52703a0_94835588';
?>
 <?php echo '<script'; ?>
>document.getElementById("self_menu<?php echo $_smarty_tpl->tpl_vars['message']->value['no']-1;?>
").style.display="none";<?php echo '</script'; ?>
> <div id="self_menu<?php echo $_smarty_tpl->tpl_vars['message']->value['no'];?>
">Just sent to <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
<br>Total <?php echo $_smarty_tpl->tpl_vars['message']->value['no'];?>
 messages sent.</div> <?php echo '<script'; ?>
>var menu = document.getElementById("self_menu<?php echo $_smarty_tpl->tpl_vars['message']->value['no'];?>
"); document.getElementById("newsletterplace").appendChild(menu);<?php echo '</script'; ?>
> <?php }
}
?>