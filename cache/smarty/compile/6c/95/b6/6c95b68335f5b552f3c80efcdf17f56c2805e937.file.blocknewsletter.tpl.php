<?php /* Smarty version Smarty-3.1.14, created on 2013-12-12 07:39:24
         compiled from "F:\wamp\www\presta1_5_6_1\themes\default\modules\blocknewsletter\blocknewsletter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1147552a9682c796634-03011239%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c95b68335f5b552f3c80efcdf17f56c2805e937' => 
    array (
      0 => 'F:\\wamp\\www\\presta1_5_6_1\\themes\\default\\modules\\blocknewsletter\\blocknewsletter.tpl',
      1 => 1384787396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1147552a9682c796634-03011239',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'msg' => 0,
    'nw_error' => 0,
    'link' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52a9682c8393b0_88258816',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a9682c8393b0_88258816')) {function content_52a9682c8393b0_88258816($_smarty_tpl) {?>

<!-- Block Newsletter module-->

<div id="newsletter_block_left" class="block">
	<p class="title_block"><?php echo smartyTranslate(array('s'=>'Newsletter','mod'=>'blocknewsletter'),$_smarty_tpl);?>
</p>
	<div class="block_content">
	<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)&&$_smarty_tpl->tpl_vars['msg']->value){?>
		<p class="<?php if ($_smarty_tpl->tpl_vars['nw_error']->value){?>warning_inline<?php }else{ ?>success_inline<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
	<?php }?>
		<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index'), ENT_QUOTES, 'UTF-8', true);?>
" method="post">
			<p>
				<input class="inputNew" id="newsletter-input" type="text" name="email" size="18" value="<?php if (isset($_smarty_tpl->tpl_vars['value']->value)&&$_smarty_tpl->tpl_vars['value']->value){?><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'your e-mail','mod'=>'blocknewsletter'),$_smarty_tpl);?>
<?php }?>" />
				<input type="submit" value="ok" class="button_mini" name="submitNewsletter" />
				<input type="hidden" name="action" value="0" />
			</p>
		</form>
	</div>
</div>
<!-- /Block Newsletter module-->

<script type="text/javascript">
    var placeholder = "<?php echo smartyTranslate(array('s'=>'your e-mail','mod'=>'blocknewsletter','js'=>1),$_smarty_tpl);?>
";
        $(document).ready(function() {
            $('#newsletter-input').on({
                focus: function() {
                    if ($(this).val() == placeholder) {
                        $(this).val('');
                    }
                },
                blur: function() {
                    if ($(this).val() == '') {
                        $(this).val(placeholder);
                    }
                }
            });

            <?php if (isset($_smarty_tpl->tpl_vars['msg']->value)){?>
                $('#columns').before('<div class="clearfix"></div><p class="<?php if ($_smarty_tpl->tpl_vars['nw_error']->value){?>warning<?php }else{ ?>success<?php }?>"><?php echo smartyTranslate(array('s'=>"Newsletter:",'js'=>1,'mod'=>"blocknewsletter"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>');
            <?php }?>
        });
</script>
<?php }} ?>