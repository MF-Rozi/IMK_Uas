
<div class="well">
                    <?php
                    $get_last4_news_q = "SELECT * FROM `posts` ORDER BY `post_id` DESC LIMIT 4 ";
                    $get_last4_news_r = $con -> query($get_last4_news_q);
?>
                    <h4>Latest News</h4>
                    <ul class="list-unstyled">
                     <?php while($row = $get_last4_news_r->fetch_assoc()): ?>
                        <li><a href=""><?=$row['post_title']?></a></li>
                    <?php endwhile;?>
                    </ul>

                </div>