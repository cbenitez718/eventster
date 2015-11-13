<?php
// We expect the ID requested to be on a variable named $requested_id

if( !isset($requested_id) || $requested_id == '' ){
    print("CANNOT FIND THE REQUESTED EVENT");
    exit;
}

    $mysql = new mysqli("localhost", "root", "root", "eventsdb", 3306);

    // If the connection didn't work out, there will be a connect_errno property on the $mysql object.  End
    // the script with a fancy message.
    if ($mysql->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysql->connect_error . ")";
    }

    $result = $mysql->query("select id, evtname, evtdescr, location,  city, state, evtdate from events where id=$requested_id");

    for ($i = 0; $i < $result->num_rows; $i++) {
          $result->data_seek($i);
          $aRow = $result->fetch_assoc();
    ?>
    <div class="eventDetails">
        <div class="eventName"><?php print($aRow['evtname']);?></div>
        <div class="eventDate"><?php print($aRow['evtdate']);?></div>
        <div class="eventLocation"><?php print($aRow['location']." ".$aRow['city']." ".$aRow['state']);?></div>
        <div class="eventDescription"><?php print($aRow['evtdescr']);?></div>
    </div>

    <?php } ?>
