<?php
if (!defined('BLARG')) die();

CheckPermission('admin.editusers');

if ($_POST['submit']) {
	if ($_POST['userid'] && $_POST['groupid']) {
		Query("DELETE FROM {secondarygroups} (userid,groupid) VALUES ({0},{1})",
			$_POST['userid'], $_POST['groupid']);
		Report("[b]".$loguser['name']."[/] successfully removed a secondary group (ID: ".$_POST['groupid'].") from user ID #".$_POST['userid']."", false);
		Alert(__("Secondary group successfully removed."), __("Notice"));
	} else if (!$_POST['userid'] && $_POST['groupid']) {
		Report("[b]".$loguser['name']."[/] tried to remove a secondary group (ID: ".$_POST['groupid'].")", false);
		Alert(__("Please enter a User ID and try again."), __("Notice"));
	} else if ($_POST['userid'] && !$_POST['groupid']) {
		Report("[b]".$loguser['name']."[/] tried to remove a secondary group from user ID #".$_POST['userid'].".", false);
		Alert(__("Please enter a Group ID and try again."), __("Notice"));
	} else if (!$_POST['userid'] && !$_POST['groupid']) {
		Report("[b]".$loguser['name']."[/] tried to remove a secondary group.", false);
		Alert(__("Please enter a Group ID and a User ID and try again."), __("Notice"));
	}
} else {
	Alert(__("Please enter a Group ID and a User ID."), __("Notice"));
}
?>
<table class="outline"><tr class="header1"><th colspan="2" class="center">Remove secondary groups</th></tr>
<form action="" method="POST">
<tr class="cell2"><td>User ID</td><td><input type="text" name="userid"></td></tr>
<tr class="cell1"><td>Group ID</td><td><input type="text" name="groupid"></td></tr>
<tr><td colspan="2" class="cell2"><input type="submit" name="submit" value="Remove"></td></tr>
</form>
</table>
