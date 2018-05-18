<?php /* Smarty version Smarty-3.1.19, created on 2018-05-18 03:05:09
         compiled from "C:\xampp\htdocs\prestashop\admin352qqmkrj\themes\new-theme\template\components\layout\employee_dropdown.tpl" */ ?>
<?php /*%%SmartyHeaderCode:207845afe89356819b4-32325550%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f7709fec83ff894d8e004f58f9c4ce87a925c1e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin352qqmkrj\\themes\\new-theme\\template\\components\\layout\\employee_dropdown.tpl',
      1 => 1523009718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207845afe89356819b4-32325550',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee' => 0,
    'link' => 0,
    'login_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5afe8935690e51_63171741',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5afe8935690e51_63171741')) {function content_5afe8935690e51_63171741($_smarty_tpl) {?>
<div class="employee-dropdown dropdown">
  <?php if (isset($_smarty_tpl->tpl_vars['employee']->value)) {?>
    <div class="person" data-toggle="dropdown">
      <i class="material-icons">account_circle</i>
    </div>
  <?php }?>
  <div class="dropdown-menu dropdown-menu-right">
    <div class="text-xs-center employee_avatar">
      <img class="avatar rounded-circle" src="<?php echo $_smarty_tpl->tpl_vars['employee']->value->getImage();?>
" /><br>
      <span><?php echo $_smarty_tpl->tpl_vars['employee']->value->firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['employee']->value->lastname;?>
</span>
    </div>
    <div>
      <a class="employee-link profile-link" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminEmployees'),'html','UTF-8');?>
&amp;id_employee=<?php echo intval($_smarty_tpl->tpl_vars['employee']->value->id);?>
&amp;updateemployee">
        <i class="material-icons">settings_applications</i> <?php echo smartyTranslate(array('s'=>'Your profile'),$_smarty_tpl);?>

      </a>
    </div>
    <div>
      <a class="employee-link" id="header_logout" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['login_link']->value,'html','UTF-8');?>
&amp;logout">
        <i class="material-icons">power_settings_new</i> <?php echo smartyTranslate(array('s'=>'Sign out'),$_smarty_tpl);?>

      </a>
    </div>
  </div>
</div>
<?php }} ?>
