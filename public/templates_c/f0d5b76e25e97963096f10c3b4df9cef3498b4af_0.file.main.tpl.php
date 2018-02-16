<?php
/* Smarty version 3.1.30, created on 2018-02-16 15:08:17
  from "D:\xampp\htdocs\Views\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a86e5d1e0c9e3_44578061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0d5b76e25e97963096f10c3b4df9cef3498b4af' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Views\\main.tpl',
      1 => 1518788734,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a86e5d1e0c9e3_44578061 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19127041845a86e5d1df52f7_10433664', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8991476065a86e5d1e08b63_60264236', 'body');
?>
                      <?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_19127041845a86e5d1df52f7_10433664 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Login<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_8991476065a86e5d1e08b63_60264236 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<form action="main" method="POST">
    <div class="form-check">
        <p><b>Sorting</b></p>
        <div class="form-check">
            <label class="checkbox-inline"><input type="checkbox" name="order1" value="author">by author</label>
            <label class="checkbox-inline"><input type="checkbox" name="order2" value="email">by email</label>
            <label class="checkbox-inline"><input type="checkbox" name="order3" value="date">by date</label>
        <br>
            <label class="radio-inline"><input type="radio" name="sort" value="DESC" checked>DESC</label>
            <label class="radio-inline"><input type="radio" name="sort" value="ASC">ASC</label>
        </div>
        <button type="submit" class="btn btn-success">Sort</button>    
    </div>        
  </form> 

<table class="table" >
    <thead class="thead-light">
        <th><p>ID</p></th>
        <th><p>author</p></th>
        <th><p>email</p></th>
        <th><p>homepage</p></th>
        <th><p>text</p></th>
        <th><p>ip</p></th>
        <th><p>browser</p></th>
        <th><p>date</p></th>
    </thead>
    <tbody>
    <?php if (!empty($_smarty_tpl->tpl_vars['notes']->value)) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notes']->value, 'note');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['note']->value) {
?>
        <div class="panel-body">
        <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['note']->value['id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['note']->value['author'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['note']->value['email'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['note']->value['homepage'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['note']->value['text'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['note']->value['ip'];?>
</td>                 
        <td><?php echo $_smarty_tpl->tpl_vars['note']->value['browser'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['note']->value['date'];?>
</td>
        </tr>
        </div> 
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <?php } else { ?>
        <b>There are no notes</b>
    <?php }?>     
    </tbody>
</table>                            

<?php
}
}
/* {/block 'body'} */
}
