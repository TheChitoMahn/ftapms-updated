<?php
    if (isset($_GET['id'])) {
    
        include "dbh.inc.php";
    
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    
        $id = validate($_GET['id']);
    
        $sql = "SELECT * FROM mou WHERE id = $id";
        $resultzz = mysqli_query($conn, $sql);
    
        if (mysqli_num_rows($resultzz) > 0) {
            $row = mysqli_fetch_assoc($resultzz);
        }else {
            header("Location: ./php/listMOU.php?error=goneBack1");
        }
    }
?>
<link rel="stylesheet" href="../css/newpartner.css">
<link rel="stylesheet" href="../css/dashboard.css">
<link rel="stylesheet" href="../css/index.css">
<link rel="stylesheet" href="../css/mou.css">
<title>MOU:<?=$row['orgname']?></title>
<link rel="icon" type="image/gif" href="../images/FTA no cap.PNG" />

<link rel="stylesheet" href="../css/printALL.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">

<div class="partnercontent">

    <div class="twopics">
        <div class="insertpic">
            Partner company logo will be here..
        </div>
        <div class="ftalogoprint">
            <img src="../images/FTA.PNG" alt="FTA Logo">   
        </div> 
    </div>

    <div class="mousection1">
        <div class="moutitle">
            <p>
                MEMORANDUM OF UNDERSTANDING (MOU)
            </p>
            <P>BETWEEN</P>
            <P>FAIRTRADE AFRICA (FTA)</P>
            <P>AND</P>
            <p><?=$row['orgname']?></p>
            <p>DATE</p>
            <p><?=$row['moudate']?></p>
        </div>
    </div>

</div>

<div class="rpbody">
    <div class="box1">
        <h4>PREAMBLE</h4>
        <p><?=$row['preamble']?></p>

        <h4>WHEREAS</h4>
        <p><?=$row['whereas']?></p>

        <h4>WHEREAS;</h4>
        <p><?=$row['whereas2']?></p>

        <p><b><a>THEREFORE,</a></b> the Parties have reached the following understanding;</p>

        <h4>ARTICLE 1</h4>
        <h4>OBJECTIVES OF THE MOU</h4>
        <p><?=$row['article1']?></p>

        <h4>ARTICLE 2</h4>
        <h4>SPECIFIC AREAS OF COLLABORATION</h4>
        <p><?=$row['article2']?></p>

        <h4>ARTICLE 3</h4>
        <h4>MODE OF CO-OPERATION</h4>
        <p><?=$row['article3']?></p>

        <h4>3.1 ROLE OF FTA</h4>
        <p><?=$row['article31']?></p>

        <h4>3.2 ROLE OF <?=$row['orgname']?></h4>
        <p><?=$row['article31']?></p>

        <h4>ARTICLE 4</h4>
        <h4>FUNDING AND RESOURCE MOBILIZATION ACTIVITIES</h4>
        <p><?=$row['article4']?></p>

        <h4>ARTICLE 5</h4>
        <h4>AMMENDMENTS</h4>
        <p><?=$row['article5']?></p>

        <h4>ARTICLE 6</h4>
        <h4>INTELLECTUAL PROPERTY RIGHTS ADN PUBLICATIONS</h4>
        <p><?=$row['article6']?></p>

        <h4>ARTICLE 7</h4>
        <h4>DURATION OF THE PARTNERSHIP</h4>
        <p><?=$row['article7']?></p>

        <h4>ARTICLE 8</h4>
        <h4>NOTICES AND AUTHORIZED REPRESENTATIVES</h4>
        <p><?=$row['article8']?></p>
        <p><?=$row['contacts']?></p>

        <h4>ARTICLE 9</h4>
        <h4>CONFIDENTIALITY</h4>
        <p><?=$row['article9']?></p>

        <h4>ARTICLE 10</h4>
        <h4>TERMINATION</h4>
        <p><?=$row['article10']?></p>

        <h4>ARTICLE 11</h4>
        <h4>LEGAL JURISDICTION</h4>
        <p><?=$row['article11']?></p>

        <h4>ARTICLE 12</h4>
        <h4>DISPUTE RESOLUTION</h4>
        <p><?=$row['article12']?></p>

        <h4>ARTICLE 13</h4>
        <h4>LEGAL STATUS OF THE MOU</h4>
        <p><?=$row['article13']?></p>

        <h4>ARTICLE 14</h4>
        <h4>FORCE MAJUERE</h4>
        <p><?=$row['article14']?></p>

        <P><B><a>IN WITNESS WHEREOF</a></B>, the Parties duly authorized have agreed and executed this MOU on the date of the last signature hereunder.</P>

        <p><?=$row['sign']?></p>

    </div>
</div>
<div class="print">
    <a onclick="window.print()"><i class="las la-print fa-lg"></i></a>
</div>