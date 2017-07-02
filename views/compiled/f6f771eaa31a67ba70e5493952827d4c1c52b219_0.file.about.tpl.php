<?php
/* Smarty version 3.1.30, created on 2017-06-21 11:52:42
  from "C:\MAMP\htdocs\bap\smarty\views\about.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594a5e0aedcd40_61607831',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6f771eaa31a67ba70e5493952827d4c1c52b219' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\bap\\smarty\\views\\about.tpl',
      1 => 1498045959,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_594a5e0aedcd40_61607831 (Smarty_Internal_Template $_smarty_tpl) {
?>
<content class="wrap">

    <section>


        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['about_list']->value, 'x');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['x']->value) {
?>
           <center>
            <img src="<?php echo $_smarty_tpl->tpl_vars['x']->value['image'];?>
">
               <p>
            <?php echo $_smarty_tpl->tpl_vars['x']->value['about'];?>

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
