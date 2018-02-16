<?php
/* Smarty version 3.1.30, created on 2018-02-16 15:08:17
  from "D:\xampp\htdocs\Views\new_note.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a86e5d15c0418_30296748',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d8507c1372ab40b42d9479dc141281d2fa7f602' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Views\\new_note.tpl',
      1 => 1518789366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a86e5d15c0418_30296748 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5454155535a86e5d15b8718_89532442', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1321564755a86e5d15bc595_11528107', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_5454155535a86e5d15b8718_89532442 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Guest Book<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_1321564755a86e5d15bc595_11528107 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h1>new entry</h1>
        <form method="POST" action="notes/new" style="  width: 800px; height: 300px;">
            <!-- <div class="form-group"> -->
                <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Name" name="author" required>
                    </div>
                  </div>
                 <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" placeholder="email" name="email" required>
                        </div>
                 </div>
                <div class="form-group row">
                    <label for="inputHomepage" class="col-sm-2 col-form-label">Homepage</label>
                        <div class="col-sm-10">
                            <input type="url" class="form-control" placeholder="http://" name="homepage" required>
                        </div>
                </div>
                <div class="form-group row">
                    <label for="inputText" class="col-sm-2 col-form-label">Text</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="some text" name="text" pattern="[/<\/?[a-z][a-z0-9]*>/i]" required>
                        </div>
                </div>
                <div class="form-group row">
                    <img src="../public/captcha.php" /></br>
                    <label for="inputCaptcha" class="col-sm-2 col-form-label">Enter captcha</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="captcha" name="captcha"required>
                        </div>
                </div> 
            <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </div>
        </form>

</form>

<?php
}
}
/* {/block 'body'} */
}
