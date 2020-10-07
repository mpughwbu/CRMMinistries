<!DOCTYPE HTML>
<html>
<head>

    <title>Team Tracker Report</title>
    <?php include 'civiCRM.php';?>
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

</head>
<body>
<header>
    <div class="container">
        <!-- Sorting Options -->
        <div class="box sort">
            <select class="select" id="selstatus">
                <option value=""<?php ?>>Select Status</option>
                <option value="1"<?php ?>>Missionary Candidate</option>
                <option value="2"<?php ?>>Mobilizer</option>
                <option value="3"<?php ?>>World Christian</option>
                <option value="4"<?php ?>>Potential</option>
            </select>

            <select class="select" id="selstaff">Select Staff Name
                <option value=""<?php ?>>Select Staff Name</option>
                <option value="sue"<?php ?>>Sue</option>
                <option value="joe"<?php ?>>Joe</option>
                <option value="matt"<?php ?>>Matthew</option>
                <option value="cally"<?php ?>>Cally</option>
            </select>

            <select class="select" id="selpooltracker">Select Pool/Tracker
                <option value="">Select Pool/Tracker</option>
                <option value="pool">Pool</option>
                <option value="tracker">Tracker</option>
            </select>
        </div>

        <!-- Login -->
        <div class="box login">
            <a href="#">Sign In</a>
        </div>

        <!-- Content Goes Here -->
        <div class="box content">
            <div class="spacer"></div>
            <table id="report">
                <tr>
                    <th>Notes</th>
                    <th>Pool Name</th>
                    <th>Key Leader</th>
                    <th>Rank</th>
                    <th>Status</th>
                    <th>Last Contact Date</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>CMM Lead</th>
                </tr>
                <?php
                // @TODO replace dummy table with functional table

                $contact_json = get_contact_civicrm( 'Lisandra.Meller@foomail.com', NULL );

                debug_to_console( $contact_json );

                if (!empty($contact_json)) { // If the email exists

                    $contact_address = $contact_json["street_address"].", ".$contact_json["city"].", ".$contact_json["state_province_name"].", ".$contact_json["postal_code"];
                    $contact = array(
                        "#dummy note#", //NOTE
                        "#ABC Church#", //POOL
                        "#Joe Pullis#", //KEY LEADER
                        "#A#", //RANK
                        "#World Christian#", //STATUS
                        $contact_json["custom_422"], //LAST CONTACT DATE
                        "#joe@foo.com#", //EMAIL
                        $contact_json["phone"], //PHONE
                        $contact_address, //ADDRESS
                        "#Manny Martinez#", //CMM LEAD
                    );
                }
                else {

                    echo "Not found.";
                }
                foreach ($contact as $value){
                    echo "<td>$value</td>";
                }
                ?>
            </table>
        </div>

    </div>
</header>

</body>
</html>
