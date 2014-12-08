<?php

/**
 * Description of _search_index
 *
 * @author Suton Charoensiri <prasuton_123@hotmail.com>
 */
?>
<!--<input type="text" id="q" name="q" />-->
<?php
    $form=$this->beginWidget('CActiveForm',array(
        'id'=>'search_index',
        'action'=>  Yii::app()->createUrl('site/search'),
        'method'=>'get'
    ));
?>
    <div class="form-group">
        <div class="row">
          <div class="col-md-2">
              <?php
                    echo CHtml::dropDownList('building_type_id',
                            (isset($_GET['building_type_id']))?$_GET['building_type_id']:'',
                            CHtml::listData(BuildingType::model()->findAll(), 'id', 'typename'),
                                array('class'=>'form-control input-lg'));
                    
              ?>
          </div>
          <div class="col-md-3">
              <?php
                    echo CHtml::dropDownList(
                            'province_id',
                            (isset($_GET['province_id'])?$_GET['province_id']:''),
                            CHtml::listData(
                                    Province::model()->findAll(
                                            array('order'=>'PROVINCE_NAME')),
                                            'PROVINCE_ID', 
                                            'PROVINCE_NAME'
                            ),
                            array(
                                'class'=>'form-control input-lg',
                                'prompt'=>'--กรุณาเลือกจังหวัด--',
                                'ajax'=>array(
                                        'type'=>'POST',
                                        'url'=>  Controller::createUrl('Ajax/UpdateAmphur'),
                                        'data'=>array('PROVINCE_ID'=>'js:this.value'),
                                        'update'=>'#amphur_id'
                                    )
                                ));
              ?>
<!--            <select name="propery contract type" class="form-control input-lg">
                <option selected>Contract</option>
              <option>Rent</option>
              <option>Buy</option>
            </select>-->
          </div>
          <div class="col-md-3">
              <?php
                    echo CHtml::dropDownList(
                            'amphur_id',
                            (isset($_GET['amphur_id'])?$_GET['amphur_id']:''),
                            CHtml::listData(
                                    Amphur::model()->findAll(
                                            'PROVINCE_ID=:PROVINCE_ID',
                                            array(':PROVINCE_ID'=>(isset($_GET['province_id'])?$_GET['province_id']:''))
                                    ),
                                    'AMPHUR_ID',
                                    'AMPHUR_NAME'
                            ),
                            array(
                                'prompt'=>'--กรุณาเลือกอำเภอ--',
                                'class'=>'form-control input-lg'
                            ));
              ?>
<!--            <select name="propery location" class="form-control input-lg">
                <option selected>Location</option>
              <option>New York</option>
            </select>-->
          </div>
          <div class="col-md-2"> 
<!--              <button type="submit" class="btn btn-primary btn-block btn-lg">
                  <i class="fa fa-search"></i> Search</button> -->
              <?php// echo CHtml::submitButton('Search'); ?>
              <?php
                echo CHtml::htmlButton('<i class="fa fa-search"></i> Search',array('class'=>'btn btn-primary btn-block btn-lg','type'=>'submit'));
              ?>
          </div>
          <div class="col-md-2"> 
              <a href="#" id="ads-trigger" class="btn btn-default btn-block">
                  <i class="fa fa-plus"></i> 
                  <span>Advanced</span>
              </a> 
          </div>
        </div>
        
        <div class="row hidden-xs hidden-sm">
          <div class="col-md-2">
            <label>Min Beds</label>
            <select name="beds" class="form-control input-lg">
              <option>Any</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
              <option>10</option>
            </select>
          </div>
          <div class="col-md-2">
            <label>Min Baths</label>
            <select name="beds" class="form-control input-lg">
              <option>Any</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
              <option>10</option>
            </select>
          </div>
          <div class="col-md-2">
            <label>Min Price</label>
            <select name="beds" class="form-control input-lg">
              <option>Any</option>
              <option>$1000</option>
              <option>$5000</option>
              <option>$10000</option>
              <option>$50000</option>
              <option>$100000</option>
              <option>$500000</option>
              <option>$1000000</option>
              <option>$3000000</option>
              <option>$5000000</option>
              <option>$10000000</option>
            </select>
          </div>
          <div class="col-md-2">
            <label>Max Price</label>
            <select name="beds" class="form-control input-lg">
              <option>Any</option>
              <option>$1000</option>
              <option>$5000</option>
              <option>$10000</option>
              <option>$50000</option>
              <option>$100000</option>
              <option>$500000</option>
              <option>$1000000</option>
              <option>$3000000</option>
              <option>$5000000</option>
              <option>$10000000</option>
            </select>
          </div>
          <div class="col-md-2">
            <label>Min Area (Sq Ft)</label>
            <input type="text" class="form-control input-lg" placeholder="Any">
          </div>
          <div class="col-md-2">
            <label>Max Area (Sq Ft)</label>
            <input type="text" class="form-control input-lg" placeholder="Any">
          </div>
        </div>
    </div>
<?php  $this->endWidget(); ?>
<!--<form action="#">
            <div class="form-group">
              <div class="row">
                <div class="col-md-2">
                  <select name="propery type" class="form-control input-lg">
                      <option selected>Type</option>
                    <option>Villa</option>
                    <option>Family House</option>
                    <option>Single Home</option>
                    <option>Cottage</option>
                    <option>Apartment</option>
                  </select>
                </div>
                <div class="col-md-3">
                  <select name="propery contract type" class="form-control input-lg">
                      <option selected>Contract</option>
                    <option>Rent</option>
                    <option>Buy</option>
                  </select>
                </div>
                <div class="col-md-3">
                  <select name="propery location" class="form-control input-lg">
                      <option selected>Location</option>
                    <option>New York</option>
                  </select>
                </div>
                <div class="col-md-2"> <button type="submit" class="btn btn-primary btn-block btn-lg"><i class="fa fa-search"></i> Search</button> </div>
                <div class="col-md-2"> <a href="#" id="ads-trigger" class="btn btn-default btn-block"><i class="fa fa-plus"></i> <span>Advanced</span></a> </div>
              </div>
              <div class="row hidden-xs hidden-sm">
                <div class="col-md-2">
                  <label>Min Beds</label>
                  <select name="beds" class="form-control input-lg">
                    <option>Any</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                  </select>
                </div>
                <div class="col-md-2">
                  <label>Min Baths</label>
                  <select name="beds" class="form-control input-lg">
                    <option>Any</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                  </select>
                </div>
                <div class="col-md-2">
                  <label>Min Price</label>
                  <select name="beds" class="form-control input-lg">
                    <option>Any</option>
                    <option>$1000</option>
                    <option>$5000</option>
                    <option>$10000</option>
                    <option>$50000</option>
                    <option>$100000</option>
                    <option>$500000</option>
                    <option>$1000000</option>
                    <option>$3000000</option>
                    <option>$5000000</option>
                    <option>$10000000</option>
                  </select>
                </div>
                <div class="col-md-2">
                  <label>Max Price</label>
                  <select name="beds" class="form-control input-lg">
                    <option>Any</option>
                    <option>$1000</option>
                    <option>$5000</option>
                    <option>$10000</option>
                    <option>$50000</option>
                    <option>$100000</option>
                    <option>$500000</option>
                    <option>$1000000</option>
                    <option>$3000000</option>
                    <option>$5000000</option>
                    <option>$10000000</option>
                  </select>
                </div>
                <div class="col-md-2">
                  <label>Min Area (Sq Ft)</label>
                  <input type="text" class="form-control input-lg" placeholder="Any">
                </div>
                <div class="col-md-2">
                  <label>Max Area (Sq Ft)</label>
                  <input type="text" class="form-control input-lg" placeholder="Any">
                </div>
              </div>
            </div>
          </form>-->