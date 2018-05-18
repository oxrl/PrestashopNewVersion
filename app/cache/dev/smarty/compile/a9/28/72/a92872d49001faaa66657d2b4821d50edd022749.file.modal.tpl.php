<?php /* Smarty version Smarty-3.1.19, created on 2018-05-18 01:55:26
         compiled from "C:\xampp\htdocs\prestashop\admin066yi9hms\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150365afe78dee57fe6-68436478%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a92872d49001faaa66657d2b4821d50edd022749' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin066yi9hms\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1523009718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150365afe78dee57fe6-68436478',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5afe78dee5c139_24365576',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5afe78dee5c139_24365576')) {function content_5afe78dee5c139_24365576($_smarty_tpl) {?>
<div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('.fancybox-quick-view').fancybox({
			type: 'ajax',
			autoDimensions: false,
			autoSize: false,
			width: 600,
			height: 'auto',
			helpers: {
				overlay: {
					locked: false
				}
			}
		});
	});
</script>
<?php }} ?>
