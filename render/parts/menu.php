</head>

<body>

    <nav id="top_nav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" id="home_button" href="<?= $config["url"] ?>">
                    <?php if(empty($config["logo"])) { ?>
                    <?= $config["title"] ?>
                    <?php } else { ?>
                    <img src="<?= $config["url"].$config["logo"] ?>" height="200%" style="margin-top:-9px" alt="<?= $config["title"] ?>" title="<?= $config["title"]." - ".$config["slogan"] ?>">
                    <?php } ?>
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav" id="nav_links">
                    <li class="<?php if($page==$lang["menu"]["releases"]) { echo "active"; } ?>" id="titles">
                        <a href="<?php echo $config["url"]; ?>"><?= glyph("th-list",$lang["menu"]["releases"]) ?> <?= $lang["menu"]["releases"] ?></a>
                    </li>
                    <li class="<?php if($page==$lang["menu"]["titles"]) { echo "active"; } ?>" id="titles">
                        <a href="<?php echo $config["url"]; ?>titles"><?= glyph("book",$lang["menu"]["titles"]) ?> <?= $lang["menu"]["titles"] ?></a>
                    </li>
                    <li class="<?php if($page==$lang["menu"]["bookmarks"]) { echo "active"; } ?>" id="titles">
                        <a href="<?php echo $config["url"]; ?>bookmarks"><?= glyph("bookmark",$lang["menu"]["bookmarks"]) ?> <?= $lang["menu"]["bookmarks"] ?></a>
                    </li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right" id="pm">
                    <li class="dropdown">
                        <?php if($loggedin==false) { ?>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= glyph("user",$lang["menu"]["account"]) ?> <span class="nav-label-1440"><?= $lang["menu"]["account"] ?></span> <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="<?php if($page==$lang["menu"]["login"]) { echo "active"; } ?>">
                                <a href="<?= $config["url"] ?>login"><?= glyph("log-in",$lang["menu"]["login"]) ?> <?= $lang["menu"]["login"] ?></a>
                            </li>
                            <li class="<?php if($page==$lang["menu"]["signup"]) { echo "active"; } ?>">
                                <a href="<?= $config["url"] ?>signup"><?= glyph("log-in",$lang["menu"]["signup"]) ?> <?= $lang["menu"]["signup"] ?></a>
                            </li>
                        </ul>
                        <?php } elseif($user["active"]==1) { ?>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= glyph("user",$lang["menu"]["account"]) ?> <span class="nav-label-1440"><?= $user["username"] ?></span> <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <!-- <li class="<?php if($page==$lang["menu"]["profile"]) { echo "active"; } ?>">
                                <a href="<?= $config["url"] ?>profile/<?= $user["id"] ?>"><?= glyph("user",$lang["menu"]["profile"]) ?> <?= $lang["menu"]["profile"] ?></a>
                            </li> -->
                            <!-- <li class="<?php if($page==$lang["menu"]["settings"]) { echo "active"; } ?>">
                                <a href="<?= $config["url"] ?>settings"><?= glyph("wrench",$lang["menu"]["settings"]) ?> <?= $lang["menu"]["settings"] ?></a>
                            </li> -->
                            <li class="<?php if($page==$lang["menu"]["add_new"]) { echo "active"; } ?>">
                                <a href="<?= $config["url"] ?>admin/new_title"><?= glyph("log-out",$lang["menu"]["add_new"]) ?> <?= $lang["menu"]["add_new"] ?></a>
                            </li>
                            <li class="<?php if($page==$lang["menu"]["logout"]) { echo "active"; } ?>">
                                <a href="<?= $config["url"] ?>logout"><?= glyph("log-out",$lang["menu"]["logout"]) ?> <?= $lang["menu"]["logout"] ?></a>
                            </li>
                        </ul>
                        <?php } else { ?>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= glyph("user",$lang["menu"]["account"]) ?> <span class="nav-label-1440"><?= $user["username"] ?></span> <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="<?php if($page==$lang["menu"]["logout"]) { echo "active"; } ?>">
                                <a href="<?= $config["url"] ?>logout"><?= glyph("log-out",$lang["menu"]["logout"]) ?> <?= $lang["menu"]["logout"] ?></a>
                            </li>
                        </ul>
                        <?php } ?>
                    </li>
                </ul>
                <form role="search" class="navbar-form navbar-right nav-label-992" action="titles" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control quick_search_input" placeholder="<?= $lang["menu"]["quicksearch"] ?>" name="mtitle" value="<?php if(isset($_GET["mtitle"])) echo mysqli_real_escape_string($conn, $_GET["mtitle"]); ?>">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit" id="quick_search_button"><?= glyph("search",$lang["menu"]["search"]) ?></button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
