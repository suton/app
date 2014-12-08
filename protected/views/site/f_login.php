<?php
$baseUrl=  Yii::app()->request->baseUrl;
/**
 * Description of f_login
 *
 * @author Suton Charoensiri <prasuton_123@hotmail.com>
 */
?>

  <!-- Site Showcase -->
  <div class="site-showcase">
  <!-- Start Page Header -->
  <div class="parallax page-header" style="background-image:url(<?php echo $baseUrl;?>/images/page-header1.jpg);">
  		<div class="container">
        	<div class="row">
            	<div class="col-md-12">
                    <h1>Login/Register</h1>
                </div>
           </div>
       </div>
  </div>
  <!-- End Page Header -->
  </div>
  <!-- Start Content -->
<div class="main" role="main">
    <div id="content" class="content full">
          <div class="container">
              <div class="page">
                  <div class="row">

                      <div class="col-md-4 col-sm-4">
                          <div class="alert alert-default fade in">
                              <h4>กรุณาอ่านก่อน Login/Register!</h4>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam euismod sollicitudin nunc, eget pretium massa. Ut sed adipiscing enim, pellentesque ultrices erat. Integer placerat felis neque, et semper augue ullamcorper in. Pellentesque iaculis leo iaculis aliquet ultrices. Suspendisse potenti. Aenean ac magna faucibus, consectetur ligula vel, feugiat est. Nullam imperdiet semper neque eget euismod. Nunc commodo volutpat semper.</p>
                          </div>
                      </div>

                      <div class="col-md-4 col-sm-4 login-form">
                            <h3>Login</h3>
                         
                            <?php 
                                $form=$this->beginWidget('CActiveForm', array(
                                    'id'=>'login-form',
                                )); 
                            ?>
                            <?php if($model->hasErrors()): ?>
                                <div class="alert alert-block alert-danger fade in">
                                <?php echo CHtml::errorSummary($model); ?>
                                </div>
                            <?php endif; ?>
                          
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <?php echo $form->textField($model,'username',array(
                                                'class'=>'form-control',
                                                'placeholder'=>'กรุณากรอกชื่อผู้ใช้ของคุณ'
                                    ));
                                    //echo $form->error($model,'username');
                                ?>
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <?php 
                                    echo $form->passwordField($model,'password',array(
                                                'class'=>'form-control',
                                                'placeholder'=>'กรุณากรอกรหัสผ่านของคุณ'
                                    ));
                                    //echo $form->error($model,'password');
                                ?>
                            </div>
                            <br>
                            <div class="checkbox">
                                    <?php echo $form->checkBox($model,'rememberMe'); ?>
                                    <?php echo $form->label($model,'rememberMe'); ?>
                                    <?php echo $form->error($model,'rememberMe'); ?>
                            </div>
                            
                            <div class="input-group">
                                <?php echo CHtml::submitButton('Login Now',array('class'=>'btn btn-primary')); ?>
                                <hr>
                                <p><a title="Recover your username or password" style="text-decoration: none;">ลืมรหัสผ่าน / Recover your username or password</a></p>
                            </div>
                            <?php $this->endWidget(); ?>
                         
                      </div>

                      <div class="col-md-4 col-sm-4 register-form">
                          <h3>Register</h3>
                          
                              <?php $form=$this->beginWidget('CActiveForm', array(
                                    'id'=>'register-form',
                                    'enableAjaxValidation'=>true
                              )); ?>
                              
                            <?php if($modelRegis->hasErrors()): ?>
                                <div class="alert alert-block alert-danger fade in">
                                <?php echo CHtml::errorSummary($modelRegis); ?>
                                </div>
                            <?php endif; ?>
                          
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <?php 
                                          echo $form->textField($modelRegis,'username',array(
                                              'class'=>'form-control',
                                              'placeholder'=>'กรุณากรอกชื่อผู้ใช้'
                                              
                                    ));
                                    ?>
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <?php 
                                          echo $form->textField($modelRegis,'email',array(
                                              'class'=>'form-control',
                                              'placeholder'=>'กรุณากรอกอีเมลล์ของคุณ'
                                    ));?>
                                </div>
                                <br>
                                
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <?php 
                                          echo $form->passwordField($modelRegis,'password',array(
                                              'class'=>'form-control',
                                              'placeholder'=>'กรุณากรอกรหัสผ่านของคุณ'
                                    ));?>
                                </div>
                                <br>
                                
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-refresh"></i></span>
                                    <?php 
                                          echo $form->passwordField($modelRegis,'repeatpassword',array(
                                              'class'=>'form-control',
                                              'placeholder'=>'ยืนยันรหัสผ่าน'
                                    ));?>
                                </div>
                                <br>
                                <?php echo CHtml::submitButton('Register Now',array('class'=>'btn btn-primary')); ?>
                              <?php $this->endWidget(); ?>
                      </div>
                  </div>
              </div>
          </div>
      </div>
</div>
  
<!--<script src="http://maps.google.com/maps/api/js?sensor=false"></script>  Google Map  
<script type="text/javascript">
        function PropertiesMap() {

            /* Properties Array */
            var properties = [
                { title:"116 Waverly Place",  price:"<strong>$</strong><span>2,800 monthly</span>",  lat:40.73238,  lng:-73.99948,  thumb:"images/property1-map.jpg",  url:"property-details.html",  icon:"images/map-marker.png", }
				
				];

            /* Map Center Location - From Theme Options */
            var location_center = new google.maps.LatLng(properties[0].lat,properties[0].lng);

            var mapOptions = {
                zoom: 5,
                scrollwheel: false
            }

            var map = new google.maps.Map(document.getElementById("gmap"), mapOptions);

            var bounds = new google.maps.LatLngBounds();

            var markers = new Array();
            var info_windows = new Array();

            for (var i=0; i < properties.length; i++) {

                markers[i] = new google.maps.Marker({
                    position: new google.maps.LatLng(properties[i].lat,properties[i].lng),
                    map: map,
                    icon: properties[i].icon,
                    title: properties[i].title,
                    animation: google.maps.Animation.DROP
                });

                bounds.extend(markers[i].getPosition());

                info_windows[i] = new google.maps.InfoWindow({
                    content:    '<div class="map-property">'+
                        '<h4 class="property-title"><a class="title-link" href="'+properties[i].url+'">'+properties[i].title+'</a></h4>'+
                        '<a class="property-featured-image" href="'+properties[i].url+'"><img class="property-thumb" src="'+properties[i].thumb+'" alt="'+properties[i].title+'"/></a>'+
                        '<p><span class="price">'+properties[i].price+'</span></p>'+
                        '<a class="btn btn-primary btn-sm" href="'+properties[i].url+'">Details</a>'+
                        '</div>'
                });

                attachInfoWindowToMarker(map, markers[i], info_windows[i]);
            }

            map.fitBounds(bounds);

            /* function to attach infowindow with marker */
            function attachInfoWindowToMarker( map, marker, infoWindow ){
                google.maps.event.addListener( marker, 'click', function(){
                    infoWindow.open( map, marker );
                });
            }

        }

        google.maps.event.addDomListener(window, 'load', PropertiesMap);
    </script> -->