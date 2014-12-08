<?php

/**
 * Description of profile
 *
 * @author Suton Charoensiri <prasuton_123@hotmail.com>
 */
?>
<?php $baseUrl=yii::app()->theme->baseUrl;?>
<?php $cs=  Yii::app()->clientScript;?>
<?php //<!--page specific plugin styles-->?>
<?php $cs->registerCssFile($baseUrl.'/assets/css/jquery-ui-1.10.3.custom.min.css'); ?>
<?php $cs->registerCssFile($baseUrl.'/assets/css/jquery.gritter.css'); ?>
<?php $cs->registerCssFile($baseUrl.'/assets/css/select2.css'); ?>
<?php $cs->registerCssFile($baseUrl.'/assets/css/bootstrap-editable.css'); ?>
<?php
$this->widget('ext.Hzl.toastr.HzlToastr', array(
                'flashMessagesOnly' => true, //default to false.  True will fetch setFlashes data
                'options' => array(
                    'timeOut' => 15000,
                ),
            ));
?>

<div class="main-content">
        <div class="breadcrumbs" id="breadcrumbs">
                <ul class="breadcrumb">
                        <li>
                                <i class="icon-home home-icon"></i>
                                <a href="#">Home</a>

                                <span class="divider">
                                        <i class="icon-angle-right arrow-icon"></i>
                                </span>
                        </li>

                        <li>
                                <a href="#">More Pages</a>

                                <span class="divider">
                                        <i class="icon-angle-right arrow-icon"></i>
                                </span>
                        </li>
                        <li class="active">User Profile</li>
                </ul><!--.breadcrumb-->

                <div class="nav-search" id="nav-search">
                        <form class="form-search" />
                                <span class="input-icon">
                                        <input type="text" placeholder="Search ..." class="input-small nav-search-input" id="nav-search-input" autocomplete="off" />
                                        <i class="icon-search nav-search-icon"></i>
                                </span>
                        </form>
                </div><!--#nav-search-->
        </div>

        <div class="page-content">
                <div class="page-header position-relative">
                        <h1>
                                User Profile Page
                                <small>
                                        <i class="icon-double-angle-right"></i>
                                        3 styles with inline editable feature
                                </small>
                        </h1>
                </div><!--/.page-header-->

                <div class="row-fluid">
                        <div class="span12">
                                <!--PAGE CONTENT BEGINS-->

                                        <div id="user-profile-3" class="user-profile row-fluid">
                                                <div class="offset1 span10">
                                                        <div class="well well-small">
                                                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                                &nbsp;
                                                                <div class="inline middle blue bigger-110"> Your profile is 70% complete </div>

                                                                &nbsp; &nbsp; &nbsp;
                                                                <div style="width:200px;" data-percent="70%" class="inline middle no-margin progress progress-success progress-striped active">
                                                                        <div class="bar" style="width:70%"></div>
                                                                </div>
                                                        </div><!--/well-->

                                                        <div class="space"></div>

                                                                <div class="tabbable">
                                                                        <ul class="nav nav-tabs padding-16" id="settingtab">
                                                                                <li class="active">
                                                                                        <a data-toggle="tab" href="#edit-basic">
                                                                                                <i class="green icon-edit bigger-125"></i>
                                                                                                ข้อมูลพื้นฐาน
                                                                                        </a>
                                                                                </li>

                                                                                <li>
                                                                                        <a data-toggle="tab" href="#edit-settings">
                                                                                                <i class="purple icon-cog bigger-125"></i>
                                                                                                ตั้งค่า
                                                                                        </a>
                                                                                </li>

                                                                                <li>
                                                                                        <a data-toggle="tab" href="#edit-password">
                                                                                                <i class="blue icon-key bigger-125"></i>
                                                                                                เปลี่ยนรหัสผ่าน
                                                                                        </a>
                                                                                </li>
                                                                        </ul>

                                                                        <div class="tab-content profile-edit-tab-content">
                                                                            
                                                                                <div id="edit-basic" class="tab-pane in active">
                                                                                    <?php $this->renderPartial('_basic',array('modelUser'=>$modelUser));?>
                                                                                </div> <!--edit-basic tab-->
                                                                            
                                                                                <div id="edit-settings" class="tab-pane">
                                                                                    <?php $form=$this->beginWidget('CActiveForm',array(
                                                                                        'id'=>'settingForm',
                                                                                        'enableClientValidation'=>true,
                                                                                        'clientOptions'=>array(
                                                                                          'validateOnSubmit'=>true,
                                                                                        ),
                                                                                        'htmlOptions'=>array('class'=>'form-horizontal'),
                                                                                        'action'=>array('bnavbar/settings')
                                                                                    ));?>
                                                                                        <div class="space-10"></div>

                                                                                        <div>
                                                                                                <label class="inline">
                                                                                                        <input type="checkbox" name="form-field-checkbox" />
                                                                                                        <span class="lbl"> Make my profile public</span>
                                                                                                </label>
                                                                                        </div>

                                                                                        <div class="space-8"></div>

                                                                                        <div>
                                                                                                <label class="inline">
                                                                                                        <input type="checkbox" name="form-field-checkbox" />
                                                                                                        <span class="lbl"> Email me new updates</span>
                                                                                                </label>
                                                                                        </div>

                                                                                        <div class="space-8"></div>

                                                                                        <div>
                                                                                                <label class="inline">
                                                                                                        <input type="checkbox" name="form-field-checkbox" />
                                                                                                        <span class="lbl"> Keep a history of my conversations</span>
                                                                                                </label>

                                                                                                <label class="inline">
                                                                                                        <span class="space-2 block"></span>

                                                                                                        for
                                                                                                        <input type="text" class="input-mini" maxlength="3" />
                                                                                                        days
                                                                                                </label>
                                                                                        </div>
                                                                                        <div class="form-actions">
                <!--                                                                        <button class="btn btn-info" type="submit">
                                                                                                <i class="icon-ok bigger-110"></i>
                                                                                                Save
                                                                                            </button>-->
                                                                                            <?php //echo CHtml::htmlButton('<i class="icon-ok bigger-110"></i>Save',array('class'=>'btn btn-info','type'=>'submit'));?>
                                                                                        </div>
                                                                                    <?php $this->endWidget(); ?>
                                                                                </div>

                                                                                <div id="edit-password" class="tab-pane">
                                                                                    <?php $this->renderPartial('_changepass',array('modelPass'=>$modelPass));?>
                                                                                </div>
                                                                        </div>
                                                                </div>

                                                                
                                                </div><!--/span-->
                                        </div><!--/user-profile-->

                                <!--PAGE CONTENT ENDS-->
                        </div><!--/.span-->
                </div><!--/.row-fluid-->
        </div><!--/.page-content-->

        <div class="ace-settings-container" id="ace-settings-container">
                <div class="btn btn-app btn-mini btn-warning ace-settings-btn" id="ace-settings-btn">
                        <i class="icon-cog bigger-150"></i>
                </div>

                <div class="ace-settings-box" id="ace-settings-box">
                        <div>
                                <div class="pull-left">
                                        <select id="skin-colorpicker" class="hide">
                                                <option data-class="default" value="#438EB9" />#438EB9
                                                <option data-class="skin-1" value="#222A2D" />#222A2D
                                                <option data-class="skin-2" value="#C6487E" />#C6487E
                                                <option data-class="skin-3" value="#D0D0D0" />#D0D0D0
                                        </select>
                                </div>
                                <span>&nbsp; Choose Skin</span>
                        </div>

                        <div>
                                <input type="checkbox" class="ace-checkbox-2" id="ace-settings-header" />
                                <label class="lbl" for="ace-settings-header"> Fixed Header</label>
                        </div>

                        <div>
                                <input type="checkbox" class="ace-checkbox-2" id="ace-settings-sidebar" />
                                <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                        </div>

                        <div>
                                <input type="checkbox" class="ace-checkbox-2" id="ace-settings-breadcrumbs" />
                                <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                        </div>

                        <div>
                                <input type="checkbox" class="ace-checkbox-2" id="ace-settings-rtl" />
                                <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
                        </div>
                </div>
        </div><!--/#ace-settings-container-->
</div><!--/.main-content-->
                        
<!--page specific plugin scripts-->
<?php //<!--page specific plugin scripts--> ?>
<?php $cs->registerScriptFile('/assets/js/excanvas.min.js', CClientScript::POS_END, array('media' => 'lte IE 8'));?>
<?php $cs->registerScriptFile($baseUrl.'/assets/js/jquery-ui-1.10.3.custom.min.js', CClientScript::POS_END);?>
<?php $cs->registerScriptFile($baseUrl.'/assets/js/jquery.ui.touch-punch.min.js', CClientScript::POS_END);?>
<?php $cs->registerScriptFile($baseUrl.'/assets/js/jquery.gritter.min.js', CClientScript::POS_END);?>
<?php $cs->registerScriptFile($baseUrl.'/assets/js/bootbox.min.js', CClientScript::POS_END);?>
<?php $cs->registerScriptFile($baseUrl.'/assets/js/jquery.slimscroll.min.js', CClientScript::POS_END);?>
<?php $cs->registerScriptFile($baseUrl.'/assets/js/jquery.easy-pie-chart.min.js', CClientScript::POS_END);?>
<?php $cs->registerScriptFile($baseUrl.'/assets/js/jquery.hotkeys.min.js', CClientScript::POS_END);?>
<?php $cs->registerScriptFile($baseUrl.'/assets/js/bootstrap-wysiwyg.min.js', CClientScript::POS_END);?>
<?php $cs->registerScriptFile($baseUrl.'/assets/js/select2.min.js', CClientScript::POS_END);?>
<?php //$cs->registerScriptFile($baseUrl.'/assets/js/date-time/bootstrap-datepicker.min.js', CClientScript::POS_END);?>
<?php $cs->registerScriptFile($baseUrl.'/assets/js/fuelux/fuelux.spinner.min.js', CClientScript::POS_END);?>
<?php $cs->registerScriptFile($baseUrl.'/assets/js/x-editable/bootstrap-editable.min.js', CClientScript::POS_END);?>
<?php $cs->registerScriptFile($baseUrl.'/assets/js/x-editable/ace-editable.min.js', CClientScript::POS_END);?>
<?php $cs->registerScriptFile($baseUrl.'/assets/js/jquery.maskedinput.min.js', CClientScript::POS_END);?>

<?php //<!--inline scripts related to this page-->?>
<?php
Yii::app()->clientScript->registerScript('elements',' 
$(function() {
			
                            //editables on first profile page
                            $.fn.editable.defaults.mode = "inline";
                            $.fn.editableform.loading = "<div class=\"editableform-loading\"><i class=\"light-blue icon-2x icon-spinner icon-spin\"></i></div>";
			    $.fn.editableform.buttons = "<button type=\"submit\" class=\"btn btn-info editable-submit\"><i class=\"icon-ok icon-white\"></i></button>"+
			                                "<button type=\"button\" class=\"btn editable-cancel\"><i class=\"icon-remove\"></i></button>";    
				
				//editables 
			    $("#username").editable({
			           type: "text",
			           name: "username"
			    });
			
				var countries = [];
			    $.each({ "CA": "Canada", "IN": "India", "NL": "Netherlands", "TR": "Turkey", "US": "United States"}, function(k, v) {
			        countries.push({id: k, text: v});
			    });
			
				var cities = [];
				cities["CA"] = [];
				$.each(["Toronto", "Ottawa", "Calgary", "Vancouver"] , function(k, v){
					cities["CA"].push({id: v, text: v});
				});
				cities["IN"] = [];
				$.each(["Delhi", "Mumbai", "Bangalore"] , function(k, v){
					cities["IN"].push({id: v, text: v});
				});
				cities["NL"] = [];
				$.each(["Amsterdam", "Rotterdam", "The Hague"] , function(k, v){
					cities["NL"].push({id: v, text: v});
				});
				cities["TR"] = [];
				$.each(["Ankara", "Istanbul", "Izmir"] , function(k, v){
					cities["TR"].push({id: v, text: v});
				});
				cities["US"] = [];
				$.each(["New York", "Miami", "Los Angeles", "Chicago", "Wysconsin"] , function(k, v){
					cities["US"].push({id: v, text: v});
				});
				
				var currentValue = "NL";
			    $("#country").editable({
					type: "select2",
					value : "NL",
			        source: countries,
					success: function(response, newValue) {
						if(currentValue == newValue) return;
						currentValue = newValue;
						
						var source = (!newValue || newValue == "") ? [] : cities[newValue];
						$("#city").editable("destroy").editable({
							type: "select2",
							source: source
						}).editable("setValue", null);
					}
			    });
			
				$("#city").editable({
					type: "select2",
					value : "Amsterdam",
			        source: cities[currentValue]
			    });
			
			
			
				$("#signup").editable({
					type: "date",
					format: "yyyy-mm-dd",
					viewformat: "dd/mm/yyyy",
					datepicker: {
						weekStart: 1
					}
				});
			
			    $("#age").editable({
			        type: "spinner",
					name : "age",
					spinner : {
						min : 16, max:99, step:1
					}
				});
				
				//var $range = document.createElement("INPUT");
				//$range.type = "range";
			    $("#login").editable({
			        type: "slider",//$range.type == "range" ? "range" : "slider",
					name : "login",
					slider : {
						min : 1, max:50, width:100
					},
					success: function(response, newValue) {
						if(parseInt(newValue) == 1)
							$(this).html(newValue + " hour ago");
						else $(this).html(newValue + " hours ago");
					}
				});
			
				$("#about").editable({
					mode: "inline",
			        type: "wysiwyg",
					name : "about",
					wysiwyg : {
						//css : {"max-width":"300px"}
					},
					success: function(response, newValue) {
					}
				});
				
				
				
				// *** editable avatar *** //
				try {//ie8 throws some harmless exception, so let"s catch it
			
					//it seems that editable plugin calls appendChild, and as Image doesn"t have it, it causes errors on IE at unpredicted points
					//so let"s have a fake appendChild for it!
					if( /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase()) ) Image.prototype.appendChild = function(el){}
			
					var last_gritter
					$("#avatar").editable({
						type: "image",
						name: "avatar",
						value: null,
						image: {
							//specify ace file input plugin"s options here
							btn_choose: "Change Avatar",
							droppable: true,
							/**
							//this will override the default before_change that only accepts image files
							before_change: function(files, dropped) {
								return true;
							},
							*/
			
							//and a few extra ones here
							name: "avatar",//put the field name here as well, will be used inside the custom plugin
							max_size: 110000,//~100Kb
							on_error : function(code) {//on_error function will be called when the selected file has a problem
								if(last_gritter) $.gritter.remove(last_gritter);
								if(code == 1) {//file format error
									last_gritter = $.gritter.add({
										title: "File is not an image!",
										text: "Please choose a jpg|gif|png image!",
										class_name: "gritter-error gritter-center"
									});
								} else if(code == 2) {//file size rror
									last_gritter = $.gritter.add({
										title: "File too big!",
										text: "Image size should not exceed 100Kb!",
										class_name: "gritter-error gritter-center"
									});
								}
								else {//other error
								}
							},
							on_success : function() {
								$.gritter.removeAll();
							}
						},
					    url: function(params) {
							// ***UPDATE AVATAR HERE*** //
							//You can replace the contents of this function with examples/profile-avatar-update.js for actual upload
			
			
							var deferred = new $.Deferred
			
							//if value is empty, means no valid files were selected
							//but it may still be submitted by the plugin, because "" (empty string) is different from previous non-empty value whatever it was
							//so we return just here to prevent problems
							var value = $("#avatar").next().find("input[type=hidden]:eq(0)").val();
							if(!value || value.length == 0) {
								deferred.resolve();
								return deferred.promise();
							}
			
			
							//dummy upload
							setTimeout(function(){
								if("FileReader" in window) {
									//for browsers that have a thumbnail of selected image
									var thumb = $("#avatar").next().find("img").data("thumb");
									if(thumb) $("#avatar").get(0).src = thumb;
								}
								
								deferred.resolve({"status":"OK"});
			
								if(last_gritter) $.gritter.remove(last_gritter);
								last_gritter = $.gritter.add({
									title: "Avatar Updated!",
									text: "Uploading to server can be easily implemented. A working example is included with the template.",
									class_name: "gritter-info gritter-center"
								});
								
							 } , parseInt(Math.random() * 800 + 800))
			
							return deferred.promise();
						},
						
						success: function(response, newValue) {
						}
					})
				}catch(e) {}
				
				
			
				//another option is using modals
				$("#avatar2").on("click", function(){
					var modal = 
					"<div class=\"modal hide fade\">\
						<div class=\"modal-header\">\
							<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>\
							<h4 class=\"blue\">Change Avatar</h4>\
						</div>\
						\
						<form class=\"no-margin\">\
						<div class=\"modal-body\">\
							<div class=\"space-4\"></div>\
							<div style=\"width:75%;margin-left:12%;\"><input type=\"file\" name=\"file-input\" /></div>\
						</div>\
						\
						<div class=\"modal-footer center\">\
							<button type=\"submit\" class=\"btn btn-small btn-success\"><i class=\"icon-ok\"></i> Submit</button>\
							<button type=\"button\" class=\"btn btn-small\" data-dismiss=\"modal\"><i class=\"icon-remove\"></i> Cancel</button>\
						</div>\
						</form>\
					</div>";
					
					
					var modal = $(modal);
					modal.modal("show").on("hidden", function(){
						modal.remove();
					});
			
					var working = false;
			
					var form = modal.find("form:eq(0)");
					var file = form.find("input[type=file]").eq(0);
					file.ace_file_input({
						style:"well",
						btn_choose:"Click to choose new avatar",
						btn_change:null,
						no_icon:"icon-picture",
						thumbnail:"small",
						before_remove: function() {
							//don"t remove/reset files while being uploaded
							return !working;
						},
						before_change: function(files, dropped) {
							var file = files[0];
							if(typeof file === "string") {
								//file is just a file name here (in browsers that don"t support FileReader API)
								if(! (/\.(jpe?g|png|gif)$/i).test(file) ) return false;
							}
							else {//file is a File object
								var type = $.trim(file.type);
								if( ( type.length > 0 && ! (/^image\/(jpe?g|png|gif)$/i).test(type) )
										|| ( type.length == 0 && ! (/\.(jpe?g|png|gif)$/i).test(file.name) )//for android default browser!
									) return false;
			
								if( file.size > 110000 ) {//~100Kb
									return false;
								}
							}
			
							return true;
						}
					});
			
					form.on("submit", function(){
						if(!file.data("ace_input_files")) return false;
						
						file.ace_file_input("disable");
						form.find("button").attr("disabled", "disabled");
						form.find(".modal-body").append("<div class=\"center\"><i class=\"icon-spinner icon-spin bigger-150 orange\"></i></div>");
						
						var deferred = new $.Deferred;
						working = true;
						deferred.done(function() {
							form.find("button").removeAttr("disabled");
							form.find("input[type=file]").ace_file_input("enable");
							form.find(".modal-body > :last-child").remove();
							
							modal.modal("hide");
			
							var thumb = file.next().find("img").data("thumb");
							if(thumb) $("#avatar2").get(0).src = thumb;
			
							working = false;
						});
						
						
						setTimeout(function(){
							deferred.resolve();
						} , parseInt(Math.random() * 800 + 800));
			
						return false;
					});
							
				});
			
				
			
				//////////////////////////////
				$("#profile-feed-1").slimScroll({
				height: "250px",
				alwaysVisible : true
				});
			
				$(".profile-social-links > a").tooltip();
			
				$(".easy-pie-chart.percentage").each(function(){
				var barColor = $(this).data("color") || "#555";
				var trackColor = "#E2E2E2";
				var size = parseInt($(this).data("size")) || 72;
				$(this).easyPieChart({
					barColor: barColor,
					trackColor: trackColor,
					scaleColor: false,
					lineCap: "butt",
					lineWidth: parseInt(size/10),
					animate:false,
					size: size
				}).css("color", barColor);
				});
			  
				///////////////////////////////////////////
			
				//show the user info on right or left depending on its position
				$("#user-profile-2 .memberdiv").on("mouseenter", function(){
					var $this = $(this);
					var $parent = $this.closest(".tab-pane");
			
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $this.offset();
					var w2 = $this.width();
			
					var place = "left";
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) place = "right";
					
					$this.find(".popover").removeClass("right left").addClass(place);
				}).on("click", function() {
					return false;
				});
			
			
				///////////////////////////////////////////
				$("#user-profile-3")
				.find("input[type=file]").ace_file_input({
					style:"well",
					btn_choose:"Change avatar",
					btn_change:null,
					no_icon:"icon-picture",
					thumbnail:"large",
					droppable:true,
					before_change: function(files, dropped) {
						var file = files[0];
						if(typeof file === "string") {//files is just a file name here (in browsers that don"t support FileReader API)
							if(! (/\.(jpe?g|png|gif)$/i).test(file) ) return false;
						}
						else {//file is a File object
							var type = $.trim(file.type);
							if( ( type.length > 0 && ! (/^image\/(jpe?g|png|gif)$/i).test(type) )
									|| ( type.length == 0 && ! (/\.(jpe?g|png|gif)$/i).test(file.name) )//for android default browser!
								) return false;
			
							if( file.size > 110000 ) {//~100Kb
								return false;
							}
						}
			
						return true;
					}
				})
				.end().find("button[type=reset]").on(ace.click_event, function(){
					$("#user-profile-3 input[type=file]").ace_file_input("reset_input");
				})
				.end().find(".date-picker").datepicker().next().on(ace.click_event, function(){
					$(this).prev().focus();
				})
				$(".input-mask-phone").mask("99 9999 9999");
			
			
			
				////////////////////
				//change profile
				$("[data-toggle=\"buttons-radio\"]").on("click", function(e){
					var target = $(e.target);
					var which = parseInt($.trim(target.text()));
					$(".user-profile").parent().hide();
					$("#user-profile-"+which).parent().show();
				});
			});
',  CClientScript::POS_END);
?>
<?php
//active current tab
Yii::app()->clientScript->registerScript('settingtab','
$(function(){
          $("a[data-toggle=\"tab\"]").on("click", function (e) {
            //save the latest tab; use cookies if you like em better:
            localStorage.setItem("lastTab", $(e.target).attr("href"));
          });
          
          var lastTab = localStorage.getItem("lastTab");

          if (lastTab) {
            $("a[href=\""+lastTab+"\"]").click();
          }

    });
',  CClientScript::POS_END);
?>