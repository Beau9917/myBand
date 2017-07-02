<?php
/* Smarty version 3.1.30, created on 2017-06-21 11:56:39
  from "C:\MAMP\htdocs\bap\smarty\views\articles.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594a5ef71d2f62_74724730',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e821724489358119d2fb984255a44fe503bbca5' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\bap\\smarty\\views\\articles.tpl',
      1 => 1498046192,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_594a5ef71d2f62_74724730 (Smarty_Internal_Template $_smarty_tpl) {
?>
<content class="wrap">

<section>


        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result_list']->value, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
            <center>
        <article>
        <h1><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h1>
        <content><?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
</content>
        </article>
            </center>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


</section>
</content>

<?php }
}
