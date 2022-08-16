<?php
    if (isset($_GET['id'])) {
    
        include "dbh.inc.php";
    
        // function validate($data){
        //     $data = trim($data);
        //     $data = stripslashes($data);
        //     $data = htmlspecialchars($data);
        //     return $data;
        // }
    
        $id = sanitize_input($_GET['id']);
    
        $sql = "SELECT * FROM newpartner WHERE id = $id";
        $resultzz = mysqli_query($conn, $sql);
    
        if (mysqli_num_rows($resultzz) > 0) {
            $row = mysqli_fetch_assoc($resultzz);
        }else {
            header("Location: ../php/listpartner.php?error=goneBack1");
        }
    }
?>
<title><?=$row['orgname']?></title>
<link rel="icon" type="image/gif" href="../images/FTA no cap.PNG" />
<link rel="stylesheet" href="../css/printALL.css">
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

    var data = google.visualization.arrayToDataTable([
        ['Task', 'Hours per Day'],
        ['[Done] Overall Progress',     <?=$row['progress']?>],
        ['Not Done',      100 - <?=$row['progress']?>],
    ]);

    var options = {
        title: 'Implimentation Progress Overall'
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data, options);
    }
</script>

<div class="picnheader">
    <div class="pic">
        <img src="../images/FTA.PNG" alt="fta_main">
    </div>
    <div class="hedtitle">
        <h4>Partner Progress Report</h4>
        <p><?=$row['orgname']?></p>
    </div>
</div>
<div class="rpBody">
    <div class="box1">
        <p class="title"><b>TYPE:</b> <?=$row['typeofpartner']?></p>
        <p class="title"><b>Company Name:</b> <?=$row['orgname']?></p>
        <p class="title"><b>Region:</b> <?=$row['location']?></p>
        <p class="title"><b>Country:</b> <?=$row['country']?></p>
        <p class="title"><b>Address:</b> <?=$row['Address']?></p>
        <p class="title"><b>Focal FTA Staff:</b> <?=$row['focalftastaff']?></p>
        <p class="title"><b>Principal Name:</b> <?=$row['principalname']?></p>
        <p class="title"><b>Telephone:</b> <?=$row['Telephone']?></p>
        <p class="title"><b>Email:</b> <?=$row['Email']?></p>
        <p class="title"><b>Alt Email:</b> <?=$row['altemail']?></p>
        <p class="title"><b>Partnership Agreement:</b> <?=$row['partnershipAgreement']?></p>
        <p class="title"><b>Agreement Available:</b> <?=$row['agreementavailable']?></p>
    </div>
    <div class="box2">
        <label><b>Interests:</b></label>
        <p class="title"><?=$row['Interests']?></p>
        <label><b>Indicate Orpotunities:</b></label>
        <p class="title"><?=$row['IndicateOrpotunities']?></p>
        <!-- <p class="title"><b>Indicate Partnership:</b> <?=$row['IndicatePartnership']?></p> -->
        <label><b>AREA OF ACTIVITIES</b></label>
        <!-- <p class="title"><b>DONE:</b> <?=$row['specify']?></p>
        <p class="title"><b>NOT DONE:</b> <?=$row['specify2']?></p> -->
        <p id="ps" class="title"><b>Overall Progress:</b> <?=$row['progress']?>%</p>
        <!-- <p class="title"><b>Key Challenges:</b> <?=$row['listkeychallenges']?></p> -->
        <p class="title"><b>Implementation Date:</b> <?=$row['Implementationdate']?></p>
    </div>
</div>
<div id="piechart" style="width: 900px; height: 500px;"></div>
<div class="print">
    <a onclick="window.print()"><i class="las la-print fa-lg"></i></a>
</div>