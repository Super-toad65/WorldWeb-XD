<?php
	if (Settings::get('maintenance') && !$loguser['root'] && (!isset($_GET['page']) || $_GET['page'] != 'login')) {
?>
<table class="outline margin center" style="width: 60%; overflow: auto; margin: auto; margin-top: 40px; margin-bottom: 40px;">
<tr><td class="cell0" style="padding:30px">
	The board is in maintenance mode, please try again later. Our apologies for the inconvenience.
</td></tr></table>
<?php
	}
?>