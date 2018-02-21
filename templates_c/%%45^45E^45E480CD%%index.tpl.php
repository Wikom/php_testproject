<?php /* Smarty version 2.6.31, created on 2018-02-21 16:39:45
         compiled from index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'index.tpl', 1, false),array('function', 'html_options', 'index.tpl', 7, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => "default.conf",'section' => 'setup'), $this);?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('title' => 'foo')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

Gebe uns noch ein paar Details mit<br><br>
<div id="sendform">

<b>Sendungstyp:</b><?php echo smarty_function_html_options(array('id' => 'types','name' => 'shipping_types','options' => $this->_tpl_vars['shipping_types']), $this);?>
<br>
<b>Absendedatum:</b><input type="text" id="datepicker"><br>
<b>TrackingId:</b><input type="text" id="trackingid"><br>
<b>Empf&auml;ngername:</b><input type="text" id="deliveryname"><br><br>
<b>Packetdetails</b><br>
<b>L&auml;nge</b><input type="float" id="size_l"><br>
<b>Breite</b><input type="float" id="size_w"><br>
<b>H&ouml;he</b><input type="float" id="size_h"><br>
<b>Gewicht (g)</b><input type="float" id="weight"><br>

<button id="submit">Absenden</button>
</div>

<div id="noticeresult"></div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>