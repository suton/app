<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
echo "Gallery";

?>
 <?php
$this->widget('ext.galleryManager.GalleryManager', array(
                'gallery' => $gallery,
                //'controllerRoute' => '/gallery', //route to gallery controller
            ));
?>