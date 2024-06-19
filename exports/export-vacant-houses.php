<?php
include '../session.php';

//header("Content-Type: application/xls; charset=us-ascii");
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=\"KRA EMS All Vacant Houses Report - $datestamp.xls\"");
header("Pragma: no-cache");
header("Expires: 0");

$queryH = "SELECT * FROM vacant_houses";
$resultsH = mysqli_query($conn, $queryH);
$countH = mysqli_num_rows($resultsH);


echo "<table style='border: 1px solid;'>";
//make the column headers what you want in whatever order you want
echo "<p><b>KRA Estates Management System</b><br><b>All Vacant Houses Report</b><br><b>Generated on:</b> $timestamp by $admin_name<br><b>$countH records</b></b></p>";

?>
    <tr style='border: 1px solid; background: lightgrey'>
        <th>House no</th>
        <th>Available To</th>
        <th>Declared On</th>
        <th>Expiry</th>
        <th>Declared By</th>
    </tr>
<?php
if ($countH> 0) {
    while ($row = mysqli_fetch_assoc($resultsH)) {
//        $hid = $row['house_id'];
//
//        require_once 'functions.php';
//        $estateid_ = getProperties('houses', 'estate_id', 'id', $hid);
//        $estatename_ = getProperties('estates', 'estate_name', 'id', $estateid_);



        echo "<tr style='border: 1px solid;'>";
        echo "<td>" . $row['house_no'] . "</td>";
//        echo "<td>" . $estatename_ . "</td>";
        echo "<td>" . $row['available_to_job_grade'] . "</td>";
        echo "<td>" . $row['declared_on_date'] . "</td>";
        echo "<td>" . $row['expiry_date'] . "</td>";
        echo "<td>" . $row['declared_by'] . "</td>";
        echo "</tr>";

    }
} else {
    echo "<tr style='border: 1px solid;'>";
    echo "<td colspan='5'>No records found</td>";
    echo "</tr>";
}
echo '</table>';

//log action
$_user = $admin_name;
$_userid = $admin_uid;
$_action = "Exported vacant houses database.";
require '../addlog.php';

exit();
