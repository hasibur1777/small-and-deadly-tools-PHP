<?php

$all_variable = ",username,name, age, item,,,, value,";
echo $all_variable;
	    $all_variable = trim($all_variable, ',');
        $all_variable_arr = explode(",", $all_variable);
        $res = '';
        $res .= '$field=array(';
        $ava_siz = count($all_variable_arr);
        
        for($i=0; $i<$ava_siz; $i++){
        	$all_variable_arr[$i] = trim($all_variable_arr[$i], ',');
        	$all_variable_arr[$i] = trim($all_variable_arr[$i]);
        
        	if ($all_variable_arr[$i] != "") {
        			if($i == $ava_siz-1){
        		    $res .= "'". $all_variable_arr[$i] . "'=>" . "'". $all_variable_arr[$i] . "'";
        			}else{
        		    $res .= "'". $all_variable_arr[$i] . "'=>" . "'". $all_variable_arr[$i] . "',";
        	}
        	}
        	
        
        }
        $res .= ');';
        
        echo "<div style='overflow-y: scroll; width: 980px; height: 80px; border: 1px solid black;'><h5 id='res_val'>" . $res . "</h5></div>";
        echo "<button class='btn btn-warning' style='margin-top: 5px' onclick='copyToClipboard()'>Copy</button>";
        echo "<h4 id='msg_id' style='display:none;'> Copied!!! </4>";
	
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
function copyToClipboard() {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($('#res_val').text()).select();
  document.execCommand("copy");
  $temp.remove();
  $("#msg_id").fadeIn();
  $("#msg_id").fadeOut(1000);
}
</script>
