<?php /* Smarty version 3.1.27, created on 2023-05-28 01:05:14
         compiled from "/home/quickass/domains/easycryptotrading.ltd/public_html/tmpl/index_last_withdrawals.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:15592397806472a8cacd78d1_87430505%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '830b89540f0b2668fa6e7997bec4603edf74a01b' => 
    array (
      0 => '/home/quickass/domains/easycryptotrading.ltd/public_html/tmpl/index_last_withdrawals.tpl',
      1 => 1559319312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15592397806472a8cacd78d1_87430505',
  'variables' => 
  array (
    'last_withdrawals' => 0,
    's' => 0,
    'currency_sign' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_6472a8cacfd475_25328387',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6472a8cacfd475_25328387')) {
function content_6472a8cacfd475_25328387 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/quickass/domains/easycryptotrading.ltd/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '15592397806472a8cacd78d1_87430505';
if ($_smarty_tpl->tpl_vars['last_withdrawals']->value) {?>
<!-- Image Table: Start -->
<table cellspacing=0 cellpadding=2 border=0 width=100<?php echo '%>';?>
<tr>
 <th colspan=4><img src=images/q.gif width=1 height=3></th>
</tr>
<tr>
  <th colspan=4 class=title>Last Withdrawals</th>
</tr>
<?php
$_from = $_smarty_tpl->tpl_vars['last_withdrawals']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['s'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['s']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
$foreach_s_Sav = $_smarty_tpl->tpl_vars['s'];
?>
<tr>
 <td class=menutxt><img src="images/<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['s']->value['ec']);?>
.gif"></td>
 <td class=menutxt><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['s']->value['amount']);?>
</td>
 <td class=menutxt><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['s']->value['date']);?>
</td>
 <td class=menutxt><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['s']->value['username']);?>
</td>
 </td>
</tr>
<?php
$_smarty_tpl->tpl_vars['s'] = $foreach_s_Sav;
}
?>
</table>
<?php }

}
}
?>