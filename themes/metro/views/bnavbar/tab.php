<?php $baseUrl=yii::app()->theme->baseUrl;?>
                
<ul id="profileTabs" class="nav nav-tabs">
    <li class="active"><a href="#profile" data-toggle="tab">Profile</a></li>
    <li><a href="#about" data-toggle="tab">About Me</a></li>
    <li><a href="#match" data-toggle="tab">My Match</a></li>
</ul>
<div class="tab-content profile-edit-tab-content">
    <div id="profile" class="tab-pane in active">profile<input type="submit" onclick="a()"/></div>
    <div id="about" class="tab-pane">about</div>
    <div id="match" class="tab-pane">match</div>
</div>
<script type="text/javascript">

$(document).ready(function() {
    
    //ใช้ได้*****************************
//    $(function(){
//          $('a[data-toggle="tab"]').on('click', function (e) {
//            //save the latest tab; use cookies if you like 'em better:
//            localStorage.setItem('lastTab', $(e.target).attr('href'));
//          });
//          
//          var lastTab = localStorage.getItem('lastTab');
//
//          if (lastTab) {
//            $('a[href="'+lastTab+'"]').click();
//          }
//
//    });
    //ใช้ได้*****************************
    
    
//    $(function() { 
//  //for bootstrap 3 use "shown.bs.tab" instead of "shown" in the next line
//  $("a[data-toggle="tab"]").on("click", function (e) {
//    //save the latest tab; use cookies if you like "em better:
//    localStorage.setItem("lastTab", $(e.target).attr("href"));
//  });
//
//  //go to the latest tab, if it exists:
//  var lastTab = localStorage.getItem("lastTab");
//
//  if (lastTab) {
//      $("a[href=""+lastTab+""]").click();
//  }
//});

});
</script>
<script type="text/javascript">
 function a(){
alert("xxxx");
}

//$(function() { 
//  $('a[data-toggle="tab"]').on('shown', function(e){
//    //save the latest tab using a cookie:
//    $.cookie('last_tab', $(e.target).attr('href'));
//  });
//
//  //activate latest tab, if it exists:
//  var lastTab = $.cookie('last_tab');
//  if (lastTab) {
//      $('ul.nav-tabs').children().removeClass('active');
//      $('a[href='+ lastTab +']').parents('li:first').addClass('active');
//      $('div.tab-content').children().removeClass('active');
//      $(lastTab).addClass('active');
//  }
//});



</script>
<?php
Yii::app()->clientScript->registerScript('xxxx','
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

    ',  CClientScript::POS_HEAD);
?>
<?php 
Yii::app()->clientScript->registerScriptFile($baseUrl."/assets/js/jquery-1.10.2.min.js",  CClientScript::POS_HEAD);
?>