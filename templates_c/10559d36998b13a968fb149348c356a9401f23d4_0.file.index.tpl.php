<?php
/* Smarty version 4.1.0, created on 2022-04-18 20:35:32
  from 'C:\Users\User\Desktop\ContentManagementSystem\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_625daf74f34107_17429526',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10559d36998b13a968fb149348c356a9401f23d4' => 
    array (
      0 => 'C:\\Users\\User\\Desktop\\ContentManagementSystem\\index.tpl',
      1 => 1650306927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_625daf74f34107_17429526 (Smarty_Internal_Template $_smarty_tpl) {
?><html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Cinzel:wght@500&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:wght@500&family=Monoton&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="index.css" />
</head>

<body>
    <div class="body-container">
        <header class="header">
            <div class="header-top">
                <div class="lookup"><img class="lookup" src="lookup.jpeg" /></div>
                <div class="date"><?php echo (($tmp = $_smarty_tpl->tpl_vars['date']->value ?? null)===null||$tmp==='' ? "none" ?? null : $tmp);?>
</div>
                <a class="title" href="index.php">CMS BLOG</a>
                <div class="login"><?php echo $_smarty_tpl->tpl_vars['login']->value;?>
</div>
                
            </div>
            <nav class="navigation">
                <ul class="navigation-list">
                    <li class="nav-element"><a href="index.php">Home</a></li>
                    <li class="nav-element">
                        <a href="https://github.com/jkeezander/contentmanagementsystem">About</a></li>
                    <li class="nav-element"><a href="#newsTag">News</a></li>
                    <li class="nav-element">
                        <a href="#subscriptionsTag">Subscriptions</a>
                    </li>
                    <li class="nav-element"><a href="funplace.php">Fun place</a></li>
                    <?php if ((isset($_smarty_tpl->tpl_vars['user']->value))) {?>
                        <li class = 'addContent'><a href="addcontent.php"><img class = "addContentButton" src="button.jpeg"></a></li>
                    
                    <?php }?>
                </ul>
            </nav>
        </header>
        <main class="main">
            <div class="news" id="newsTag">
                <header style="
              grid-area: header;
              font-family: 'Abril Fatface', cursive;
              font-size: large;
            ">
                    News
                </header>
                
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['news']->value, 'element');
$_smarty_tpl->tpl_vars['element']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['element']->value) {
$_smarty_tpl->tpl_vars['element']->do_else = false;
?> <?php echo $_smarty_tpl->tpl_vars['element']->value;?>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <div class="subscriptions" id="subscriptionsTag">
                <header style="
              grid-area: header;
              font-family: 'Abril Fatface', cursive;
              font-size: large;">Subscriptions</header>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subscription']->value, 'element');
$_smarty_tpl->tpl_vars['element']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['element']->value) {
$_smarty_tpl->tpl_vars['element']->do_else = false;
?>  <?php echo $_smarty_tpl->tpl_vars['element']->value;?>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </main>
        <footer class="footer">
            <div class="footer-background"></div>
            <div class="copyright">#Copyright</div>
        </footer>
    </div>
</body>

</html><?php }
}
