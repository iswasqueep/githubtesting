<html>
<?php
error_reporting(E_ALL);
require 'Post_request.php';
$one_month_ago = date("Y-m-d", strtotime(date("Y-m-d", strtotime(date("Y-m-d"))) . "-1 month"));
$rent_header = 'Search: and[][created][greater]=' . $one_month_ago . '%and[][created][less]=' . date('Y-m-d') . '%';

//the actual call with custom search header
$make_call = callAPI('GET', 'https://api.example.com/get_url/', false, $rent_header);
?>
</html>
