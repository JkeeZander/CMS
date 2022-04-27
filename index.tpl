<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home page</title>
     <base href="//localhost/">
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
                <div class="date">{$date|default:"none"}</div>
                <a class="title" href="index.php">CMS BLOG</a>
                <div class="login">{$login}</div>
                
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
                    {if isset($user)}
                        <li class = 'addContent'><a href="addcontent.php"><img class = "addContentButton" src="button.jpeg"></a></li>
                    
                    {/if}
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
                
                {foreach $news as $element} {$element}  {/foreach}
            </div>
            <div class="subscriptions" id="subscriptionsTag">
                <header style="
              grid-area: header;
              font-family: 'Abril Fatface', cursive;
              font-size: large;">Subscriptions</header>
                {foreach $subscription as $element} {strip} {$element} {/strip} {/foreach}
            </div>
        </main>
        <footer class="footer">
            <div class="footer-background"></div>
            <div class="copyright">#Copyright</div>
        </footer>
    </div>
</body>

</html>