<?php
$str = '{ "name":"Weerachai Nukitram", "email":"is_php@hotmail.com"} ';
$str2 = '[ {"CustomerID":"C001", "Name":"Weerachai Nukitram", "Email":"win.weerachai@thaicreate.com", "CountryCode":"TH", "Budget":"1000000", "Used":"600000"},{"CustomerID":"C001", "Name":"Weerachai Nukitram", "Email":"win.weerachai@thaicreate.com", "CountryCode":"TH", "Budget":"1000000", "Used":"600000"} ] ';
$arr1='{"a":"1","b":"2","c":"3"}';
$arr2='[{"x1":"y1","x2":"y2","x3":"y3","x4":"y4"},{"x1":"b1","x2":"b2","x3":"b3","x4":"b4"}]';
?>
<html>
    <head>
        <script type="text/javascript">
            $(document).ready(function(){
                var obj = jQuery.parseJSON('<?=$str;?>');
                  $.each(obj, function(key, val) {
                           $("#div1").append(key +' = '+ val +'<br />');
                  });

            });

            $(document).ready(function(){
                var obj = jQuery.parseJSON('<?=$str2;?>');
                  $.each(obj, function(key, val) {
                           $("#div2").append('[' + key + '] ' + 'CustomerID=' + val["CustomerID"] +'<br />');
                           $("#div2").append('[' + key + '] ' + 'Name=' + val["Name"] +'<br />');
                           $("#div2").append('[' + key + '] ' + 'Email=' + val["Email"] +'<br />');
                           $("#div2").append('[' + key + '] ' + 'CountryCode=' + val["CountryCode"] +'<br />');
                           $("#div2").append('[' + key + '] ' + 'Budget=' + val["Budget"] +'<br />');
                           $("#div2").append('[' + key + '] ' + 'Used=' + val["Used"] +'<br />');
                  });

            });
            $(document).ready(function (){
                var obj=jQuery.parseJSON('<?=$arr1?>');
                $.each(obj,function(x,v){
                    $("#div3").append(x+'='+v+'<br>');
                });
            });
            $(document).ready(function(){
                var obj=jQuery.parseJSON('<?=$arr2?>');
                $.each(obj,function(key,val){
                    $("#div4").append('['+key+']'+'key x1 ='+val["x1"]+'<br>');
                    $("#div4").append('['+key+']'+'key x2 ='+val["x2"]+'<br>');
                    $("#div4").append('['+key+']'+'key x3 ='+val["x3"]+'<br>');
                    $("#div4").append('['+key+']'+'key x4 ='+val["x4"]+'<br>');
                });
            });
        </script>
    </head>
    <body>
        <span id="div1"></span>
        <br>
        <span id="div2"></span>
        <br>
        <span id="div3"></span>
        <br>
        <span id="div4"></span>
    </body>
</html>