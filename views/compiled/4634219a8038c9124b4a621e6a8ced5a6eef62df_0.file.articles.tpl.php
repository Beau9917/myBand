<?php
/* Smarty version 3.1.30, created on 2017-06-29 07:58:14
  from "C:\MAMP\htdocs\bap\MyBand\views\articles.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5954b316af6414_85561850',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4634219a8038c9124b4a621e6a8ced5a6eef62df' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\bap\\MyBand\\views\\articles.tpl',
      1 => 1498723091,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5954b316af6414_85561850 (Smarty_Internal_Template $_smarty_tpl) {
?>
<content class="wrap">

<section>




        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
            <center>
                    <img id="banksy" src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
">
                    <h1><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h1>
                    <p id ="content"> <?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
</p>


        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


    <p id="pagenumber">Page <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</p>

    <table id="pagechanger">
        <tr><td id="left">
        <?php if ($_smarty_tpl->tpl_vars['page']->value > 1) {?>
        <a href="?url=articles&page=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
">Previous</a>
        <?php }?>
            </td>
            <td id="right">
        <?php if ($_smarty_tpl->tpl_vars['page']->value < $_smarty_tpl->tpl_vars['number_of_pages']->value) {?>
        <a href="?url=articles&page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
">Next</a>
        <?php }?>
            </td></tr>
    </table>
            </center>
</section>
</content>

<?php }
}
