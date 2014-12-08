<?php
/**
 * Description of _view
 *
 * @author Suton Charoensiri <prasuton_123@hotmail.com>
 */
?>
<?php $baseUrl=yii::app()->theme->baseUrl;?>
<div id="home" class="tab-pane in active">
    <div class="row-fluid">

        <div class="span3 center">
            <span class="profile-picture">
                <!--<img id="avatar" class="editable" alt="Alex's Avatar" src="<?php echo $baseUrl?>/assets/avatars/profile-pic.jpg" />-->
                <?php
                        if ($data->coverBehavior->hasImage()){
                            echo CHtml::image($data->coverBehavior->getUrl("small"),"",array("class"=>"editable"));
                        }  else {
                            echo CHtml::image("$baseUrl/assets/avatars/profile-pic.jpg","",array("class"=>"editable"));
                        }
                ?>
            </span>

            <div class="space space-4"></div>

        </div><!--/span-->

        <div class="span9">
            <h4 class="blue">
                <span class="middle"><?php echo CHtml::encode($data->name); ?></span>

                <span class="label label-purple arrowed-in-right">
                    <i class="icon-circle smaller-80"></i>
                    online
                </span>
            </h4>

            <div class="profile-user-info">
                <div class="profile-info-row">
                    <div class="profile-info-name"><?php echo $data->getAttributeLabel('address');?></div>

                    <div class="profile-info-value">
                        <span><?php echo CHtml::encode($data->address);?></span>
                    </div>
                </div>

                <div class="profile-info-row">
                    <div class="profile-info-name"> <?php echo $data->getAttributeLabel('amphur_id');?> </div>

                    <div class="profile-info-value">
                        <span><?php echo CHtml::encode($data->amphur->AMPHUR_NAME);?></span>
                    </div>
                </div>
                
                <div class="profile-info-row">
                    <div class="profile-info-name"> <?php echo $data->getAttributeLabel('province_id');?> </div>

                    <div class="profile-info-value">
                        <span><?php echo CHtml::encode($data->province->PROVINCE_NAME);?></span>
                    </div>
                </div>
                
                <div class="profile-info-row">
                    <div class="profile-info-name"> <?php echo $data->getAttributeLabel('zipcode');?> </div>

                    <div class="profile-info-value">
                        <span><?php echo CHtml::encode($data->zipcode);?></span>
                    </div>
                </div>
                
                <div class="profile-info-row">
                    <div class="profile-info-name"> <?php echo $data->getAttributeLabel('phone');?> </div>

                    <div class="profile-info-value">
                        <span><?php echo CHtml::encode($data->phone);?></span>
                    </div>
                </div>
                
                <div class="profile-info-row">
                    <div class="profile-info-name"> <?php echo $data->getAttributeLabel('fax');?> </div>

                    <div class="profile-info-value">
                        <span><?php echo (!empty($data->fax))? CHtml::encode($data->fax) : '-'; ?></span>
                    </div>
                </div>
                
                <div class="profile-info-row">
                    <div class="profile-info-name"> <?php echo $data->getAttributeLabel('email');?> </div>

                    <div class="profile-info-value">
                        <span><?php echo CHtml::encode($data->email);?></span>
                    </div>
                </div>
                
                <div class="profile-info-row">
                    <div class="profile-info-name"> <?php echo $data->getAttributeLabel('author_id');?> </div>

                    <div class="profile-info-value">
                        <span><?php echo CHtml::encode($data->author->fname)." : เมื่อ".  date("j F Y",  strtotime($data->create_time));?></span>
                    </div>
                </div>
                
                <div class="profile-info-row">
                    <div class="profile-info-name"><?php echo $data->getAttributeLabel('view'); ?></div>
                    <div class="profile-info-value">
                        <span><?php echo $data->view;?></span>
                    </div>
                </div>
                
                <div class="profile-info-row">
                    <div class="profile-info-name"> <?php echo $data->getAttributeLabel('title');?></div>

                    <div class="profile-info-value">
                        <span><?php echo $data->title;?></span>
                    </div>
                </div>
                
                <div class="profile-info-row">
                    <div class="profile-info-name"> <?php echo $data->getAttributeLabel('content');?></div>

                    <div class="profile-info-value">
                        <span><?php echo $data->content;?></span>
                    </div>
                </div>
                
                <div class="profile-info-row">
                    <div class="profile-info-name">  </div>

                    <div class="profile-info-value">
                        <span>Tags:<?php echo implode(', ', $data->tagLinks); ?> |
                            <?php echo CHtml::link('Permalink', $data->url); ?> |
                            <?php echo CHtml::link("Comments ({$data->commentCount})", $data->url . '#comments'); ?> |
                            <span><?php echo $data->getAttributeLabel('update_time');?> <?php echo date('j F Y', strtotime($data->update_time)); ?></span>
                        </span>
                    </div>
                </div>
                
 
                            
            </div>
        </div>

        <div class="hr hr-8 dotted"></div>


    </div><!--/row-fluid-->

    <div class="space-20"></div>
    
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box transparent">
                <div class="widget-header widget-header-small">
                    <h4 class="smaller">
                        <i class="icon-check bigger-110"></i>
                        Gallery
                    </h4>
                </div>

                <div class="widget-body">
                    <div class="widget-main">
                        <!--PAGE CONTENT BEGINS-->

                        <div class="row-fluid">
                            <ul class="ace-thumbnails">
                                <?php $photos = $data->galleryBehavior->getGalleryPhotos(); ?>
                                <?php if (count($photos)): ?>
                                    <?php foreach ($photos as $photo): ?>
                                        <li>
                                            <?php echo CHtml::link(
                                                            CHtml::image($photo->getUrl('small'),'150x150').
                                                                CHtml::tag('div',array('class'=>'tags'),'
                                                                    <span class="label label-info">breakfast</span>
                                                                    <span class="label label-important">fruits</span>
                                                                    <span class="label label-success">toast</span>
                                                                    <span class="label label-warning arrowed-in">diet</span>
                                                                ').
                                                                CHtml::tag('div',array('class'=>'text'),'<div class="inner">Sample Caption on Hover</div>'),
                                                            $photo->getUrl('medium'),//url img
                                                            array(//link options
                                                                'title' => 'Photo Title',
                                                                "data-rel"=>"colorbox"
                                                            )
                                                        ); 
                                            ?>
                                        </li>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>
                        </div><!--PAGE CONTENT ENDS-->

                    </div>
                </div>
            </div>
        </div>
    </div><!--/row-fluid-->
    
    
    
</div><!--#home-->
