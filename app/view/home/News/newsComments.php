<?php
foreach($coms as $com){

?>
<div class="comment_body_content">
    <div class="title_content news_flex">
        <h4><?=$com->author?></h4>
        <p>Publié le
            <span class="date">
                        <?php
                        $date = new DateTime($com->date);
                        echo $date->format('d/m/Y à H:i');
                        ?>
                    </span>
        </p>
    </div>
    <div class="block">
        <p><?=$com->comments?></p>
    </div>
</div>
<?php
}
?>