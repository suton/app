<ol class="comments">
    <?php foreach($comments as $comment): ?>
    <li>
      <div class="post-comment-block">
        <h5><?php echo $comment->authorLink; ?> ได้แสดงความคิดเห็น : </h5>
        <span class="meta-data"><?php echo date('j F Y,H:i:s', strtotime($comment->create_time)); ?></span>
        <p><?php echo nl2br(CHtml::encode($comment->content)); ?></p>
      </div>
    </li>
    <?php endforeach; ?>
</ol>                          
