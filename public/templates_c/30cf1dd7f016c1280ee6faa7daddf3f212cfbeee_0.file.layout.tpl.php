<?php
/* Smarty version 3.1.30, created on 2018-02-16 15:08:17
  from "D:\xampp\htdocs\Views\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a86e5d16068b3_48666040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30cf1dd7f016c1280ee6faa7daddf3f212cfbeee' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Views\\layout.tpl',
      1 => 1518707206,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a86e5d16068b3_48666040 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3866240855a86e5d15febc3_55935120', 'title');
?>
</title>
    <link rel="stylesheet" href="/public/css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/styles.css">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"><?php echo '</script'; ?>
>

</head>
<body>
<nav class="navbar navbar-default">
    <ul class="nav navbar-nav">
        <li><a class="navbar-brand" href="/main">HOME</a></li>
        <a class="navbar-brand" href="/notes">NEW</a>
    </ul> 
</nav>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21297164025a86e5d1602a41_15161369', 'body');
?>


</body>
</html>
<?php }
/* {block 'title'} */
class Block_3866240855a86e5d15febc3_55935120 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_21297164025a86e5d1602a41_15161369 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
