<?php
function colect_data(){     //en funktion som kollar om dagen är fridag

    $date= date('d-m-Y-H-i-s');
    $friday=" -Äntligen fredag";
    if(date("l")=="Friday"){
        return $date." ".$friday;
    }
    return $date;
}
?>

<form method="post" id="data_info">
    <div id="info_id">
    <h1 id="information">Information</h1>
    <ul id="out_put_id">
        <li>Datum/klockan: <?php print colect_data()?></li>
        <li>Din IP-adress: <?php print $_SERVER['REMOTE_ADDR'];?></li>
        <li>Sökväg/filnamn: <?php print getcwd();?></li>
        <li>User agent-sträng:<?php print $_SERVER['HTTP_USER_AGENT'];?></li>
    </ul>



    </div>
</form>
