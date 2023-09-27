<?php
/* Smarty version 4.3.2, created on 2023-09-27 06:51:16
  from 'C:\xampp\htdocs\Learn_smarty\template\example.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6513b4c45ec1e3_16264450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '106e683b6bbedb4d3795cf9d96fafbda5a30d950' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Learn_smarty\\template\\example.tpl',
      1 => 1695790272,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6513b4c45ec1e3_16264450 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Learn_smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'C:\\xampp\\htdocs\\Learn_smarty\\libs\\plugins\\modifier.mb_wordwrap.php','function'=>'smarty_modifier_mb_wordwrap',),2=>array('file'=>'C:\\xampp\\htdocs\\Learn_smarty\\libs\\plugins\\function.counter.php','function'=>'smarty_function_counter',),3=>array('file'=>'C:\\xampp\\htdocs\\Learn_smarty\\libs\\plugins\\function.html_checkboxes.php','function'=>'smarty_function_html_checkboxes',),4=>array('file'=>'C:\\xampp\\htdocs\\Learn_smarty\\libs\\plugins\\function.html_radios.php','function'=>'smarty_function_html_radios',),));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'title');?>
</title>
</head>
<body>
<select name="dropdown">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['options']->value, 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['option']->value['value'];?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value['label'];?>
</option>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select>
<br>
 <br>

<table>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['table']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value*5;?>
</td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
<br>

<?php echo ($_smarty_tpl->tpl_vars['greeting']->value).(" World!");?>

<br>

<?php $_smarty_tpl->_assignInScope('string1', "uCertify LEARN is specifically designed to deliver Higher Ed, vocational, workforce development & readiness, and corporate training programs to diverse audiences with different proficiency levels.");
$_smarty_tpl->_assignInScope('string2', "At uCertify, we believe that assessments are the key to both engaging learners and effective, focused learning.");?>

<?php echo smarty_modifier_mb_wordwrap(smarty_modifier_replace(mb_strtolower((string) $_smarty_tpl->tpl_vars['string1']->value, 'UTF-8'),'ucertify','uCertify'),30,"\n",false);?>

<br>
<?php echo smarty_modifier_mb_wordwrap(smarty_modifier_replace(mb_strtolower((string) $_smarty_tpl->tpl_vars['string2']->value, 'UTF-8'),'ucertify','uCertify'),30,"\n",false);?>

<br>
<?php echo smarty_modifier_mb_wordwrap(smarty_modifier_replace(mb_strtolower((string) (smarty_modifier_mb_wordwrap(smarty_modifier_replace(mb_strtolower((string) $_smarty_tpl->tpl_vars['string1']->value, 'UTF-8'),'ucertify','uCertify'),30,"\n",false)).($_smarty_tpl->tpl_vars['string2']->value), 'UTF-8'),'ucertify','uCertify'),30,"\n",false);?>

<br>

<?php echo smarty_function_counter(array('name'=>'sequence','start'=>5,'skip'=>2),$_smarty_tpl);?>


<?php echo smarty_function_counter(array('name'=>'sequence'),$_smarty_tpl);?>


<?php echo smarty_function_counter(array('name'=>'sequence'),$_smarty_tpl);?>


<?php echo smarty_function_counter(array('name'=>'sequence'),$_smarty_tpl);?>

<br>

<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Contacts']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
        <li><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<br>


<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['our_culture']->value, 'list');
$_smarty_tpl->tpl_vars['list']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->do_else = false;
?>
         <li><?php echo $_smarty_tpl->tpl_vars['list']->value;?>
</li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<br>

<table>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, range(1,10), 'i');
$_smarty_tpl->tpl_vars['i']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->do_else = false;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['i']->value*$_smarty_tpl->tpl_vars['number']->value;?>
</td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
<?php if ($_smarty_tpl->tpl_vars['number']->value%2 == 0) {?>
    The number is even.
<?php } else { ?>
    The number is odd.
<?php }?>


<form>
    <h3>Checkboxes:</h3>
    <?php echo smarty_function_html_checkboxes(array('name'=>"colors",'values'=>$_smarty_tpl->tpl_vars['checkbox_values']->value,'selected'=>$_smarty_tpl->tpl_vars['selected_colors']->value),$_smarty_tpl);?>

    
    <h3>Radios:</h3>
    <?php echo smarty_function_html_radios(array('name'=>"gender",'values'=>$_smarty_tpl->tpl_vars['radio_values']->value,'selected'=>$_smarty_tpl->tpl_vars['selected_gender']->value),$_smarty_tpl);?>

</form>
<br>




</body>
</html><?php }
}
