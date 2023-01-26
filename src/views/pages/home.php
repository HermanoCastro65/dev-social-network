<!DOCTYPE html>
<html>

<head>
    <title>Welcome, <?php echo $_SESSION['name']; ?></title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="<?php echo INCLUDE_PATH_STATIC ?>styles/feed.css" rel="stylesheet">
</head>

<body>
    <section class="main-feed">
        <?php
        include('includes/sidebar.php');
        ?>
        <div class="feed">
            <div class="feed-wraper">
                <div class="feed-form">
                    <form method="post">
                        <textarea name="post-content" placeholder="Your post here..."></textarea>
                        <input type="hidden" name="post-feed" />
                        <input type="submit" name="action" value="post" />
                    </form>
                </div>
                <div class="feed-single-post">
                    <div class="feed-single-post-author">
                        <div class="img-single-post-author">
                            <img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpeg" />
                        </div>
                        <div class="feed-single-post-author-info">
                            <h3>Hermano</h3>
                            <p>17:00 10/01/2023</p>
                        </div>
                    </div>
                    <div class="feed-single-post-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
                <div class="feed-single-post">
                    <div class="feed-single-post-author">
                        <div class="img-single-post-author">
                            <img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpeg" />
                        </div>
                        <div class="feed-single-post-author-info">
                            <h3>Hermano</h3>
                            <p>17:00 11/01/2023</p>
                        </div>
                    </div>
                    <div class="feed-single-post-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <img src="<?php echo INCLUDE_PATH_STATIC ?>images/image-test.jpg" />
                    </div>
                </div>

                <div class="feed-single-post">
                    <div class="feed-single-post-author">
                        <div class="img-single-post-author">
                            <img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpeg" />
                        </div>
                        <div class="feed-single-post-author-info">
                            <h3>Hermano</h3>
                            <p>17:00 12/01/2023</p>
                        </div>
                    </div>
                    <div class="feed-single-post-content">
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
                    </div>
                </div>
                <div class="feed-single-post">
                    <div class="feed-single-post-author">
                        <div class="img-single-post-author">
                            <img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpeg" />
                        </div>
                        <div class="feed-single-post-author-info">
                            <h3>Hermano</h3>
                            <p>17:00 13/01/2023</p>
                        </div>
                    </div>
                    <div class="feed-single-post-content">
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                    </div>
                </div>

                <div class="feed-single-post">
                    <div class="feed-single-post-author">
                        <div class="img-single-post-author">
                            <img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpeg" />
                        </div>
                        <div class="feed-single-post-author-info">
                            <h3>Hermano</h3>
                            <p>17:00 14/01/2023</p>
                        </div>
                    </div>
                    <div class="feed-single-post-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>

                <div class="feed-single-post">
                    <div class="feed-single-post-author">
                        <div class="img-single-post-author">
                            <img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpeg" />
                        </div>
                        <div class="feed-single-post-author-info">
                            <h3>Hermano</h3>
                            <p>17:00 15/01/2023</p>
                        </div>
                    </div>
                    <div class="feed-single-post-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>

            <div class="friends-request-feed">
                <h4>Friend requests</h4>
                <?php
                foreach (\src\models\CommunityModel::listPendingRequests() as $key => $value) {
                    $userInfo = \src\models\UsersModel::getUserById($value['requesting']);
                ?>
                    <div class="friend-request-single">
                        <img src="<?php echo INCLUDE_PATH_STATIC ?>images/denzel-washington.webp" />
                        <div class="friend-request-single-info">
                            <h3><?php echo $userInfo['name'] ?></h3>
                            <p>
                                <a href="<?php echo INCLUDE_PATH ?>?acceptFriendship=<?php echo $userInfo['id'] ?>">Accept</a> |
                                <a href="<?php echo INCLUDE_PATH ?>?refuseFriendship=<?php echo $userInfo['id'] ?>">Refuse</a>
                            </p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div><!--feed-->
    </section>


</body>


</html>

</html>