<?php
include($prefix."static/connect_database.php");

$get_info = mysql_query("SELECT * from tbl_info",$con);
$info = array();

if(mysql_num_rows($get_info)!=null) {
	for (
	$counter=1;
	$counter<=mysql_num_rows($get_info);
	$counter++) {
		$get_info_array = mysql_fetch_array($get_info);
		$parameter = $get_info_array["parameter"];
		$info[$parameter] = $get_info_array["value"]; } }

?>

<footer>
    <div class="footer-content" style="font-size: .825em">
        <ul>
            <a href=""><li>© <?php echo $info["website_name"];?> Site by Antikode.</li></a>
        </ul>
    </div>
</footer>