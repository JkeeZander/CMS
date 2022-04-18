<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="profile.css" />
    <title>{$name}</title>
</head>

<body>
    <div class="main-container">
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
                    <div class = "avatar" style = "background:url({$image});background-size:cover;"></div>
                    <div class="information">
                        <ul>
                            <li>{$name}</li>
                        </ul>
                    </div>
                </div>
                <div class="subscriptions-container">
                    <ul class="subscriptions">
                        <main class="subscription-element">Subscriptions</main>
                        {$subscription}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>

</html>