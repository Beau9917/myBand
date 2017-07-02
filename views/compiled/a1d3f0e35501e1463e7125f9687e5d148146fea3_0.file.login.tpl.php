<?php
/* Smarty version 3.1.30, created on 2017-06-30 09:35:16
  from "C:\MAMP\htdocs\bap\MyBand\views\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59561b54be17e4_43232933',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1d3f0e35501e1463e7125f9687e5d148146fea3' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\bap\\MyBand\\views\\login.tpl',
      1 => 1498815303,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59561b54be17e4_43232933 (Smarty_Internal_Template $_smarty_tpl) {
?>

<body>
    <center>
        <form method="post">
<div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required><br>
    <br>
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required><br>
    <br>
    <button type="submit">Login</button>
</div>
        </form>
    </center>

</body>
<?php }
}
