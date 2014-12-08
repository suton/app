<?php
//if ($model->galleryBehavior->getGallery() === null) {
//    echo '<p>Before add photos to product gallery, you need to save product</p>';
//} else {
//    $this->widget('application.extensions.galleryManager.GalleryManager', array(
//        'gallery' => $model->galleryBehavior->getGallery(),
//        'controllerRoute' => '/admin/user/gallery',
//    ));
//}

//$this->widget('GalleryManager', array(
//    'gallery' => $gallery,
//    'controllerRoute' => '/upload/g6', //route to gallery controller
//));

$this->widget('ext.galleryManager.GalleryManager', array(
                'gallery' => $gallery,
                'controllerRoute' => '/upload/g6', //route to gallery controller
            ));


?>
  <?php
//  if ($model->galleryBehavior->getGallery() === null) {
//      echo '<p>Before add photos to product gallery, you need to save product</p>';
//  } else {
//      $this->widget('GalleryManager', array(
//          'gallery' => $model->galleryBehavior->getGallery(),  
// 'controllerRoute' => '/gallery',
// 'gallerypath' => $model->alias,
//      ));
//  }
  ?>