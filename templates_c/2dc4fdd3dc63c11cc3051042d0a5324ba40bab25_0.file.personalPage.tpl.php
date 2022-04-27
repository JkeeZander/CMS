<?php
/* Smarty version 4.1.0, created on 2022-04-20 08:27:04
  from 'C:\Users\User\Desktop\ContentManagementSystem\personalPage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_625fa7b85f5717_89786503',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2dc4fdd3dc63c11cc3051042d0a5324ba40bab25' => 
    array (
      0 => 'C:\\Users\\User\\Desktop\\ContentManagementSystem\\personalPage.tpl',
      1 => 1650436020,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_625fa7b85f5717_89786503 (Smarty_Internal_Template $_smarty_tpl) {
?><html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <base href="//localhost/">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="profile.css" />
    
    <title><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</title>
</head>

<body>
    <div class="main-container">
    <div class="home"><a href = "index.php">Home</a></div>
        <div class="main">
        
            <div class="info-container">
                <nav class="left-navigation-bar-container">
                    <ul class="left-navigation-bar">
                        <li class="nav-element">My profile</li>
                        <li class="nav-element">Subscription</li>
                        <li class="nav-element">Messages</li>
                        <li class="nav-element">Settings</li>
                        <li class="nav-element"><a href = "logout.php">Log out</a></li>
                    </ul>
                </nav>
                <div class="info">
                    <div class = "avatar" style = "background:url(<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
);background-size:cover;"></div>
                    <div class="information">
                        <ul>
                            <li><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</li>
                        </ul>
                    </div>
                </div>
                <div class="subscriptions-container">
                    <ul class="subscriptions">
                        <main class="subscription-element">Subscriptions</main>
                        <?php echo $_smarty_tpl->tpl_vars['subscription']->value;?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>

</html><?php }
}
