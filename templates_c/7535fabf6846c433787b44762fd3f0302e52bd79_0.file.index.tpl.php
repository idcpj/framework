<?php
/* Smarty version 3.1.31, created on 2017-03-12 18:33:20
  from "D:\phpStudy\WWW\framework\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58c523f06b6ac9_77469077',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7535fabf6846c433787b44762fd3f0302e52bd79' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\framework\\templates\\index.tpl',
      1 => 1489314312,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c523f06b6ac9_77469077 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1>hello </h1>
<p><?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value;
$_prefixVariable1=ob_get_clean();
echo $_prefixVariable1;?>
</p>
4<?php }
}
