<?php
/* Smarty version 3.1.30, created on 2017-06-28 12:01:52
  from "C:\MAMP\htdocs\bap\MyBand\views\home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59539ab09a2af5_94910489',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff3123bd3fc7e3551139c17ebd811cf9e874cb88' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\bap\\MyBand\\views\\home.tpl',
      1 => 1498651309,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59539ab09a2af5_94910489 (Smarty_Internal_Template $_smarty_tpl) {
?>
<content class="wrap">


    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result_list']->value, 'home');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['home']->value) {
?>
        <center>
            <img id="" src="<?php echo $_smarty_tpl->tpl_vars['home']->value['image'];?>
">
            <article>
                <h1><?php echo $_smarty_tpl->tpl_vars['home']->value['title'];?>
</h1>

                <p id ="content"> <?php echo $_smarty_tpl->tpl_vars['home']->value['content'];?>
</p>
            </article>
        </center>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>



</content>
<?php }
}
