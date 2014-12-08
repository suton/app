<?php foreach($comments as $comment): ?>
<div class="well" id="c<?php echo $comment->id; ?>">

	<?php echo CHtml::link("#{$comment->id}", $comment->getUrl($post), array(
		'style'=>'float: right',
		'title'=>'Permalink to this comment',
	)); ?>

        <h4 class="blue">
		<?php echo $comment->authorLink; ?> ได้แสดงความคิดเห็นเมื่อเวลา:
                <?php echo date('j F Y,H:i:s', strtotime($comment->create_time)); ?>
	</h4>
    
        <?php echo nl2br(CHtml::encode($comment->content)); ?>

</div><!-- comment -->
<?php endforeach; ?>
