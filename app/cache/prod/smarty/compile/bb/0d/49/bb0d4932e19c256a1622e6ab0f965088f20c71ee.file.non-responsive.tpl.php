<?php /* Smarty version Smarty-3.1.19, created on 2018-04-22 02:24:10
         compiled from "C:\xampp\htdocs\prestashop\admin352qqmkrj\themes\new-theme\template\components\layout\non-responsive.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150525adc389a520b22-85024449%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb0d4932e19c256a1622e6ab0f965088f20c71ee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin352qqmkrj\\themes\\new-theme\\template\\components\\layout\\non-responsive.tpl',
      1 => 1523009718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150525adc389a520b22-85024449',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'default_tab_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5adc389a528839_71039272',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5adc389a528839_71039272')) {function content_5adc389a528839_71039272($_smarty_tpl) {?>
<div id="non-responsive" class="js-non-responsive">
  <h1><?php echo smartyTranslate(array('s'=>'Oh no!'),$_smarty_tpl);?>
</h1>
  <p class="mt-3">
    <?php echo smartyTranslate(array('s'=>'The mobile version of this page is not available yet.'),$_smarty_tpl);?>

  </p>
  <p class="mt-2">
    <?php echo smartyTranslate(array('s'=>'Please use a desktop computer to access this page, until is adapted to mobile.'),$_smarty_tpl);?>

  </p>
  <p class="mt-2">
    <?php echo smartyTranslate(array('s'=>'Thank you.'),$_smarty_tpl);?>

  </p>
  <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['default_tab_link']->value,'html','UTF-8');?>
" class="btn btn-primary py-1 mt-3">
    <i class="material-icons">arrow_back</i>
    <?php echo smartyTranslate(array('s'=>'Back'),$_smarty_tpl);?>

  </a>
</div>
<div class="mobile-layer"></div>
<?php }} ?>
