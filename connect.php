<?php
require_once ('config.php');

mysqli_report(MYSQLI_REPORT_OFF);

$dbc = mysqli_connect('localhost', 'root', '', 'holiday');
if (!$dbc) {
	echo '<p class="error">Không thể kết nối đến CSDL vì:<br>' .
		mysqli_connect_error() . '.</p>';
	exit();
}
mysqli_set_charset($dbc,'utf8mb4_general_ci');

?>