<?php
$mysql = new mysqli("localhost", "root", "root", "eventsdb", 3306);

// If the connection didn't work out, there will be a connect_errno property on the $mysql object.  End
// the script with a fancy message.
if ($mysql->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysql->connect_error . ")";
}

$result = $mysql->query("select id, evtname, evtdescr, location,  city, state, evtdate from events");
?>

<div id="eventList" class="table">

<?php
    for ($i = 0; $i < $result->num_rows; $i++) {
          $result->data_seek($i);
          $aRow = $result->fetch_assoc();
    ?>
        <div class="eventRow tableRow">
            <div class="eventDate tableCell"><?php print($aRow['evtdate']); ?></div>
            <div class="eventState tableCell"><?php print($aRow['state']); ?></div>
            <div class="eventCity tableCell"><?php print($aRow['city']); ?></div>
            <div class="eventName tableCell"><?php print($aRow['evtname']); ?></div>
            <div class="eventDescr tableCell"><?php print($aRow['evtdescr']); ?></div>
            <div class="eventLocation tableCell"><?php print($aRow['location']); ?></div>
        </div>

    <?php } ?>
</div>