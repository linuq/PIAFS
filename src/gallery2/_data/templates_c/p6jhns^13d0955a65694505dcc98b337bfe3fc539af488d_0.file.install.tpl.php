<?php
/* Smarty version 3.1.29, created on 2017-02-21 10:50:50
  from "/var/www/html/src/admin/themes/default/template/install.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58ac61da55ec44_08793876',
  'file_dependency' => 
  array (
    '13d0955a65694505dcc98b337bfe3fc539af488d' => 
    array (
      0 => '/var/www/html/src/admin/themes/default/template/install.tpl',
      1 => 1486762421,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ac61da55ec44_08793876 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once '/var/www/html/src/include/smarty/libs/plugins/function.html_options.php';
?>
<!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['lang_info']->value['code'];?>
" dir="<?php echo $_smarty_tpl->tpl_vars['lang_info']->value['direction'];?>
">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['T_CONTENT_ENCODING']->value;?>
">
<meta http-equiv="Content-script-type" content="text/javascript">
<meta http-equiv="Content-Style-Type" content="text/css">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;
echo $_smarty_tpl->tpl_vars['themeconf']->value['icon_dir'];?>
/favicon.ico">

<!-- COMBINED_CSS -->
<?php
$_from = $_smarty_tpl->tpl_vars['themes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_theme_0_saved_item = isset($_smarty_tpl->tpl_vars['theme']) ? $_smarty_tpl->tpl_vars['theme'] : false;
$_smarty_tpl->tpl_vars['theme'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['theme']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['theme']->value) {
$_smarty_tpl->tpl_vars['theme']->_loop = true;
$__foreach_theme_0_saved_local_item = $_smarty_tpl->tpl_vars['theme'];
if ($_smarty_tpl->tpl_vars['theme']->value['load_css']) {
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('path'=>"admin/themes/".((string)$_smarty_tpl->tpl_vars['theme']->value['id'])."/theme.css",'order'=>-10),$_smarty_tpl);?>

<?php }
$_smarty_tpl->tpl_vars['theme'] = $__foreach_theme_0_saved_local_item;
}
if ($__foreach_theme_0_saved_item) {
$_smarty_tpl->tpl_vars['theme'] = $__foreach_theme_0_saved_item;
}
?>

<!--[if IE 7]>
  <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
admin/themes/default/fix-ie7.css">
<![endif]-->

<!-- BEGIN get_combined_scripts -->
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_combined_scripts'][0][0]->func_get_combined_scripts(array('load'=>'header'),$_smarty_tpl);?>

<!-- END get_combined_scripts -->

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'jquery','path'=>'themes/default/js/jquery.min.js'),$_smarty_tpl);?>


<?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(function() {
  $("a.externalLink").click(function() {
    window.open($(this).attr("href"));
    return false;
  });

  $("#admin_mail").keyup(function() {
    $(".adminEmail").text($(this).val());
  });
});
<?php echo '</script'; ?>
>

<style type="text/css">
body {
  font-size:12px;
}

#content {
  width: 800px;
  margin: auto;
  text-align: center;
  padding:0;
  background-color:transparent !important;
  border:none;
}

#theHeader {
  display: block;
  background:url("admin/themes/clear/images/piwigo_logo_big.png") no-repeat scroll center 20px transparent;
  height:100px;
}

fieldset {
  margin-top:20px;
  background-color:#f1f1f1;
}

legend {
  font-weight:bold;
  letter-spacing:2px;
}

.content h2 {
  display:block;
  font-size:20px;
  text-align:center;
  /* margin-top:5px; */
}

table.table2 {
  width: 100%;
  border:0;
}

table.table2 td {
  text-align: left;
  padding: 5px 2px;
}

table.table2 td.fieldname {
  font-weight:normal;
}

table.table2 td.fielddesc {
  padding-left:10px;
  font-style:italic;
}

input[type="submit"], input[type="button"], a.bigButton {
  font-size:14px;
  font-weight:bold;
  letter-spacing:2px;
  border:none;
  background-color:#666666;
  color:#fff;
  padding:5px;
  -moz-border-radius:5px;
  -webkit-border-radius:5px;
  border-radius:5px;
}

input[type="submit"]:hover, input[type="button"]:hover, a.bigButton:hover {
  background-color:#ff7700;
  color:white;
}

input[type="text"], input[type="password"], select {
  background-color:#ddd;
  border:2px solid #ccc;
  -moz-border-radius:5px;
  -webkit-border-radius:5px;
  border-radius:5px;
  padding:2px;
}

input[type="text"]:focus, input[type="password"]:focus, select:focus {
  background-color:#fff;
  border:2px solid #ff7700;
}

.sql_content, .infos a {
  color: #ff3363;
}

.errors {
  padding-bottom:5px;
}

</style>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'jquery.cluetip','load'=>'async','require'=>'jquery','path'=>'themes/default/js/plugins/jquery.cluetip.js'),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('footer_script', array('require'=>'jquery.cluetip')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array('require'=>'jquery.cluetip'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

jQuery().ready(function(){
	jQuery('.cluetip').cluetip({
		width: 300,
		splitTitle: '|',
		positionBy: 'bottomTop'
	});
});
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array('require'=>'jquery.cluetip'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>



<title>Piwigo <?php echo $_smarty_tpl->tpl_vars['RELEASE']->value;?>
 - <?php echo l10n('Installation');?>
</title>
</head>

<body>
<div id="the_page">
<div id="theHeader"></div>
<div id="content" class="content">

<h2><?php echo l10n('Version');?>
 <?php echo $_smarty_tpl->tpl_vars['RELEASE']->value;?>
 - <?php echo l10n('Installation');?>
</h2>

<?php if (isset($_smarty_tpl->tpl_vars['config_creation_failed']->value)) {?>
<div class="errors">
  <p style="margin-left:30px;">
    <strong><?php echo l10n('Creation of config file local/config/database.inc.php failed.');?>
</strong>
  </p>
  <ul>
    <li>
      <p><?php echo l10n('You can download the config file and upload it to local/config directory of your installation.');?>
</p>
      <p style="text-align:center">
          <input type="button" value="<?php echo l10n('Download the config file');?>
" onClick="window.open('<?php echo $_smarty_tpl->tpl_vars['config_url']->value;?>
');">
      </p>
    </li>
    <li>
      <p><?php echo l10n('An alternate solution is to copy the text in the box above and paste it into the file "local/config/database.inc.php" (Warning : database.inc.php must only contain what is in the textarea, no line return or space character)');?>
</p>
      <textarea rows="15" cols="70"><?php echo $_smarty_tpl->tpl_vars['config_file_content']->value;?>
</textarea>
    </li>
  </ul>
</div>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['errors']->value)) {?>
<div class="errors">
  <ul>
<?php
$_from = $_smarty_tpl->tpl_vars['errors']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_error_1_saved_item = isset($_smarty_tpl->tpl_vars['error']) ? $_smarty_tpl->tpl_vars['error'] : false;
$_smarty_tpl->tpl_vars['error'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['error']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
$__foreach_error_1_saved_local_item = $_smarty_tpl->tpl_vars['error'];
?>
    <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
<?php
$_smarty_tpl->tpl_vars['error'] = $__foreach_error_1_saved_local_item;
}
if ($__foreach_error_1_saved_item) {
$_smarty_tpl->tpl_vars['error'] = $__foreach_error_1_saved_item;
}
?>
  </ul>
</div>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['infos']->value)) {?>
<div class="infos">
  <ul>
<?php
$_from = $_smarty_tpl->tpl_vars['infos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_info_2_saved_item = isset($_smarty_tpl->tpl_vars['info']) ? $_smarty_tpl->tpl_vars['info'] : false;
$_smarty_tpl->tpl_vars['info'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['info']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
$__foreach_info_2_saved_local_item = $_smarty_tpl->tpl_vars['info'];
?>
    <li><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</li>
<?php
$_smarty_tpl->tpl_vars['info'] = $__foreach_info_2_saved_local_item;
}
if ($__foreach_info_2_saved_item) {
$_smarty_tpl->tpl_vars['info'] = $__foreach_info_2_saved_item;
}
?>
  </ul>
</div>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['install']->value)) {?>
<form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['F_ACTION']->value;?>
" name="install_form">

<fieldset>
  <legend><?php echo l10n('Basic configuration');?>
</legend>

  <table class="table2">
    <tr>
      <td style="width: 30%"><?php echo l10n('Default gallery language');?>
</td>
      <td>
    <select name="language" onchange="document.location = 'install.php?language='+this.options[this.selectedIndex].value;">
    <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['language_options']->value,'selected'=>$_smarty_tpl->tpl_vars['language_selection']->value),$_smarty_tpl);?>

    </select>
      </td>
    </tr>
  </table>
</fieldset>

<fieldset>
  <legend><?php echo l10n('Database configuration');?>
</legend>

  <table class="table2">
    <tr>
      <td style="width: 30%;" class="fieldname"><?php echo l10n('Host');?>
</td>
      <td><input type="text" name="dbhost" value="<?php echo $_smarty_tpl->tpl_vars['F_DB_HOST']->value;?>
"></td>
      <td class="fielddesc"><?php echo l10n('localhost or other, supplied by your host provider');?>
</td>
    </tr>
    <tr>
      <td class="fieldname"><?php echo l10n('User');?>
</td>
      <td><input type="text" name="dbuser" value="<?php echo $_smarty_tpl->tpl_vars['F_DB_USER']->value;?>
"></td>
      <td class="fielddesc"><?php echo l10n('user login given by your host provider');?>
</td>
    </tr>
    <tr>
      <td class="fieldname"><?php echo l10n('Password');?>
</td>
      <td><input type="password" name="dbpasswd" value=""></td>
      <td class="fielddesc"><?php echo l10n('user password given by your host provider');?>
</td>
    </tr>
    <tr>
      <td class="fieldname"><?php echo l10n('Database name');?>
</td>
      <td><input type="text" name="dbname" value="<?php echo $_smarty_tpl->tpl_vars['F_DB_NAME']->value;?>
"></td>
      <td class="fielddesc"><?php echo l10n('also given by your host provider');?>
</td>
    </tr>
    <tr>
      <td class="fieldname"><?php echo l10n('Database table prefix');?>
</td>
      <td><input type="text" name="prefix" value="<?php echo $_smarty_tpl->tpl_vars['F_DB_PREFIX']->value;?>
"></td>
      <td class="fielddesc"><?php echo l10n('database tables names will be prefixed with it (enables you to manage better your tables)');?>
</td>
    </tr>
  </table>

</fieldset>
<fieldset>
  <legend><?php echo l10n('Admin configuration');?>
</legend>

  <table class="table2">
    <tr>
      <td style="width: 30%;" class="fieldname"><?php echo l10n('Username');?>
</td>
      <td><input type="text" name="admin_name" value="<?php echo $_smarty_tpl->tpl_vars['F_ADMIN']->value;?>
"></td>
      <td class="fielddesc"><?php echo l10n('It will be shown to the visitors. It is necessary for website administration');?>
</td>
    </tr>
    <tr>
      <td class="fieldname"><?php echo l10n('Password');?>
</td>
      <td><input type="password" name="admin_pass1" value=""></td>
      <td class="fielddesc"><?php echo l10n('Keep it confidential, it enables you to access administration panel');?>
</td>
    </tr>
    <tr>
      <td class="fieldname"><?php echo l10n('Password [confirm]');?>
</td>
      <td><input type="password" name="admin_pass2" value=""></td>
      <td class="fielddesc"><?php echo l10n('verification');?>
</td>
    </tr>
    <tr>
      <td class="fieldname"><?php echo l10n('Email address');?>
</td>
      <td><input type="text" name="admin_mail" id="admin_mail" value="<?php echo $_smarty_tpl->tpl_vars['F_ADMIN_EMAIL']->value;?>
"></td>
      <td class="fielddesc"><?php echo l10n('Visitors will be able to contact site administrator with this mail');?>
</td>
    </tr>
    <tr>
      <td><?php echo l10n('Options');?>
</options>
      <td colspan="2">
        <label>
          <input type="checkbox" name="newsletter_subscribe"<?php if ($_smarty_tpl->tpl_vars['F_NEWSLETTER_SUBSCRIBE']->value) {?> checked="checked"<?php }?>>
          <span class="cluetip" title="<?php echo l10n('Piwigo Announcements Newsletter');?>
|<?php echo nl2br(htmlspecialchars(l10n('Keep in touch with Piwigo project, subscribe to Piwigo Announcement Newsletter. You will receive emails when a new release is available (sometimes including a security bug fix, it\'s important to know and upgrade) and when major events happen to the project. Only a few emails a year.')));?>
"><?php echo l10n('Subscribe %s to Piwigo Announcements Newsletter',$_smarty_tpl->tpl_vars['EMAIL']->value);?>
</span>
        </label>
        <br>
        <label>
          <input type="checkbox" name="send_password_by_mail" checked="checked">
          <?php echo l10n('Send my connection settings by email');?>

        </label>
      </td>
    </tr>
  </table>

</fieldset>

  <div style="text-align:center; margin:20px 0 10px 0">
    <input class="submit" type="submit" name="install" value="<?php echo l10n('Start Install');?>
">
  </div>
</form>
<?php } else { ?>
<p>
  <a class="bigButton" href="index.php"><?php echo l10n('Visit Gallery');?>
</a>
</p>
<?php }?>
</div> 
<div style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['L_INSTALL_HELP']->value;?>
</div>
</div> 

<!-- BEGIN get_combined_scripts -->
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_combined_scripts'][0][0]->func_get_combined_scripts(array('load'=>'footer'),$_smarty_tpl);?>

<!-- END get_combined_scripts -->

</body>
</html>
<?php }
}
