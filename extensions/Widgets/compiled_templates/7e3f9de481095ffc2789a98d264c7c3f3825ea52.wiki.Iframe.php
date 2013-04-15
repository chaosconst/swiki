<?php /* Smarty version Smarty-3.1.7, created on 2013-03-22 12:57:42
         compiled from "wiki:Iframe" */ ?>
<?php /*%%SmartyHeaderCode:789073212514be4c6ea8c44-65157868%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e3f9de481095ffc2789a98d264c7c3f3825ea52' => 
    array (
      0 => 'wiki:Iframe',
      1 => 20130322045720,
      2 => 'wiki',
    ),
  ),
  'nocache_hash' => '789073212514be4c6ea8c44-65157868',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'border' => 0,
    'width' => 0,
    'height' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_514be4c6f3e74',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514be4c6f3e74')) {function content_514be4c6f3e74($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_validate')) include '/var/www/mediawiki/extensions/Widgets/smarty_plugins/modifier.validate.php';
?><iframe src="<?php echo smarty_modifier_validate($_smarty_tpl->tpl_vars['url']->value,'url');?>
" frameborder="<?php echo (($tmp = @smarty_modifier_validate($_smarty_tpl->tpl_vars['border']->value,'int'))===null||$tmp==='' ? 0 : $tmp);?>
" width="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['width']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? 400 : $tmp);?>
" height="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['height']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? 300 : $tmp);?>
"></iframe><?php }} ?>