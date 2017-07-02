<?php
/* Smarty version 3.1.30, created on 2017-06-27 09:28:56
  from "C:\MAMP\htdocs\bap\MyBand\views\about.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59522558dc7012_29169707',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4a777a38a4224b38da23d05688bdcdbd47f1027' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\bap\\MyBand\\views\\about.tpl',
      1 => 1498555733,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59522558dc7012_29169707 (Smarty_Internal_Template $_smarty_tpl) {
?>
<content class="wrap">

    <section>


        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['about_list']->value, 'x');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['x']->value) {
?>
           <center>
            <img id="banksy" src="<?php echo $_smarty_tpl->tpl_vars['x']->value['image'];?>
">
               <p>
            <p id="content"> <?php echo $_smarty_tpl->tpl_vars['x']->value['about'];?>
</p>
           </center>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


    </section>
</content><?php }
}
