<?php

/**
 * Description of _listComments
 *
 * @Suton Charoensiri <prasuton_123@hotmail.com>
 */
?>
<li>
    <div class="post-comment-block">
      <h5><?php echo $data->authorLink; ?> ได้แสดงความคิดเห็น : </h5>
      <span class="meta-data"><?php echo date('j F Y,H:i:s', strtotime($data->create_time)); ?></span>
      <p><?php echo nl2br(CHtml::encode($data->content)); ?></p>
    </div>
</li>