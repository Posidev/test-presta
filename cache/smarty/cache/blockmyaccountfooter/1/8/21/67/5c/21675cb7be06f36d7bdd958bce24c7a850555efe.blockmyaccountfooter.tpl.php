<?php /*%%SmartyHeaderCode:1978852a990fb337d87-30300172%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21675cb7be06f36d7bdd958bce24c7a850555efe' => 
    array (
      0 => 'F:\\wamp\\www\\presta1_5_6_1\\themes\\default\\modules\\blockmyaccountfooter\\blockmyaccountfooter.tpl',
      1 => 1384787396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1978852a990fb337d87-30300172',
  'variables' => 
  array (
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_BLOCK_MY_ACCOUNT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52a990fb4da1b7_85715704',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a990fb4da1b7_85715704')) {function content_52a990fb4da1b7_85715704($_smarty_tpl) {?>
<!-- Block myaccount module -->
<div class="block myaccount">
	<p class="title_block"><a href="http://localhost/presta1_5_6_1/index.php?controller=my-account" title="Gérer mon compte client" rel="nofollow">Mon compte</a></p>
	<div class="block_content">
		<ul class="bullet">
			<li><a href="http://localhost/presta1_5_6_1/index.php?controller=history" title="Voir mes commandes" rel="nofollow">Mes commandes</a></li>
						<li><a href="http://localhost/presta1_5_6_1/index.php?controller=order-slip" title="Voir mes avoirs" rel="nofollow">Mes avoirs</a></li>
			<li><a href="http://localhost/presta1_5_6_1/index.php?controller=addresses" title="Voir mes adresses" rel="nofollow">Mes adresses</a></li>
			<li><a href="http://localhost/presta1_5_6_1/index.php?controller=identity" title="Gérer mes informations personnelles" rel="nofollow">Mes informations personnelles</a></li>
						
		</ul>
		<p class="logout"><a href="http://localhost/presta1_5_6_1/index.php?mylogout" title="Se déconnecter" rel="nofollow">Se déconnecter</a></p>
	</div>
</div>
<!-- /Block myaccount module -->
<?php }} ?>