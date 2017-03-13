<?php
/* Smarty version 3.1.31, created on 2017-03-12 18:46:56
  from "D:\phpStudy\WWW\framework\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58c527205e4848_81836839',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7535fabf6846c433787b44762fd3f0302e52bd79' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\framework\\templates\\index.tpl',
      1 => 1489315615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_58c527205e4848_81836839 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '741758c527205a2dc8_45387510';
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>"网站标题",'table_bgcolor'=>"#ccc"), 0, false);
?>


<h1>hello </h1>

<?php echo $_smarty_tpl->tpl_vars['data_1']->value;?>


<?php }
}
