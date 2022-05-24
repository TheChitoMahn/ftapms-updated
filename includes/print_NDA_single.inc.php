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
    
        $sql = "SELECT * FROM nda WHERE id = $id";
        $resultzz = mysqli_query($conn, $sql);
    
        if (mysqli_num_rows($resultzz) > 0) {
            $row = mysqli_fetch_assoc($resultzz);
        }else {
            header("Location: ./php/listNDA.php?error=goneBack1");
        }
    }
?>
<title>NDA: <?=$row['proposal']?></title>
<link rel="icon" type="image/gif" href="../images/FTA no cap.PNG" />
<link rel="stylesheet" href="../css/printALL.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">

<div class="picnheader">
    <div class="pic">
        <img src="../images/FTA.PNG" alt="fta_main">
    </div>
    <div class="hedtitle">
        <h4>Non-Disclosure Agreement</h4>
        <p><?=$row['proposal']?></p>
    </div>
</div>

<div class="rpBody">
    <div class="box1">
        <p>
        THIS NON-DISCLOSURE AGREEMENT (“the Agreement") is entered this <i style="color:Tomato;"><?=$row['date']?></i> (the
        "Effective Date") by Africa Fairtrade Network known as Fairtrade Africa ("FTA"), a not for -profit organisation
        headquartered in Nairobi, Kenya, with a membership of 633 Fairtrade organisations in Africa and the Middle East
        representing over 1 million smallholder farmers and farm workers, certified against international Fairtrade standards
        and <i style="color:Tomato;"><?=$row['name']?></i>, hereinafter called <i style="color:Tomato;"><?=$row['partner']?></i> Delete one to make it appropriate. Collectively,
        they are referred to as the Parties.
        </p>
        <p>
        Witnesses:
        <br>
        <p>
        WHEREAS, each party to this Agreement has made a reasonable inquiry and determined for itself that the other
        party possesses valuable intellectual property, technical know-how, and other information (including cost and
        financial information) not reasonably available from other sources (hereinafter referred to collectively as
        "Confidential Information"); and 
        </p>
        <p>
        WHEREAS, each party to this Agreement has determined that the exchange of Confidential Information will
        mutually benefit the Parties; and 
        </p>
        <p>
        WHEREAS, the Parties have determined that Confidential Information would not be exchanged between them until
        and unless an agreement were in place restricting the use and further disclosure of the confidential information
        to be exchanged; and 
        </p>
        <p>
        WHEREAS, the Parties intend to utilize the confidential information to enhance their ability to negotiate and
        execute a partnership agreement for <i style="color:Tomato;"><?=$row['proposal']?></i> (hereinafter referred to as the "Project").
        </p>
        <p>
        NOW, THEREFORE, in consideration of the mutual covenants and undertakings herein set forth, including any access
        the Parties may obtain to each other's confidential information, it is agreed as follows:
        </p>
        <p class="tab">
        1.	Any confidential information exchanged by the Parties and entitled to protection hereunder shall be
            identified as such by (i) appropriate stamp or markings on the document, electronic disks or other
            information medium exchanged, or (ii) written notice, with attached listings of all material, copies of all
            documents, and complete summaries of all oral disclosures (under prior assertion of proprietorship)
            to which each notice relates, delivered within <i style="color:Tomato;"><?=$row['delivery']?></i> weeks of the disclosure. Such confidential
            information includes, but is not limited to, <i style="color:Tomato;"><?=$row['goals']?></i> will be referred to in the remainder of this Agreement as "Confidential Information."
        </p>
        <p class="tab">
        2.	The receiving party will hold Confidential Information in confidence and will use such information
            only for information and evaluation purposes concerning the Project and will make such information
            available only to its employees that have a "need to know" in order to carry out their functions
            concerning such effort. Unless authorized in writing by the party originally transmitting confidential
            information hereunder, the receiving party will not otherwise use, amend, alter or disclose such
            Confidential Information during the Non-Disclosure Period except that it may be disclosed to the
            Government for evaluation concerning the Project.
        </p>
        <p class="tab">
        3.	Confidential Information shall not be afforded the protection of this Agreement if, on the Effective
            Date hereof, such information is, or thereafter becomes:
        </p>
        <p class="tab2">
        3.1	information that is, at the time of the disclosure, in the public domain or available to the public
            ,  or enters the public domain at a later date by becoming available to the public through no fault, act
            or omission of the recipient, its directors, officers, employees, agents or consultants;
        </p>
        <p class="tab2">
        3.2	information that is in the possession or knowledge of recipient before disclosure under this Agreement;
        </p>
        <p class="tab2">
        3.3	information that is disclosed at any time to recipient by a third party who, to the best of the 
            knowledge of the recipient, has the right to make such disclosure;
        </p>
        <p class="tab2">
        3.4	information that is developed by or for either party, independent of, and without reference to,
            the Confidential Information being disclosed under this Agreement.
        </p>
        <p class="tab">
        4.	Neither party shall be liable for:
        </p>
        <p class="tab2">
        4.1	The inadvertent or accidental disclosure of information marked as Confidential Information if such
            disclosure occurs despite the exercise of the same degree of care such party normally takes to preserve
            and safeguard its own Confidential information; or <br>
        4.2	The disclosure of Confidential Information if the disclosure is pursuant to any order of any court
            of any country or pursuant to any other Governmental enforcement or investigative action, provided, however,
            that the party ordered to make disclosure shall provide the other party with prompt notice of receipt
            of (i) such order or (ii) information regarding a request for such an order or demand.
        </p>
        <p class="tab">
        5.	All Confidential Information furnished hereunder shall remain the property of the furnishing party
            and Confidential Information (including all copies), at the termination of this Agreement, shall be 
            returned to the furnishing party or, if so directed by the furnishing party, destroyed, provided, 
            however, that each party may retain one (1) archival copy of such Confidential Information.  Each party
            shall transmit to the other party within <i style="color:Tomato;"><?=$row['termination']?></i>, a letter from an officer of the
            party certifying that except as permitted, herein, all Confidential Information were returned or 
            destroyed as directed by the furnishing party. The confidentiality and restrictions on use of Confidential
            Information contained in this Agreement shall remain in effect on the archival copy, if any, 
            until such time as the archival copy of the Confidential Information is destroyed.
        </p>
        <p class="tab">
        6.	No license under any patent is granted or conveyed by one party's transmission of Confidential Information
            to the other party hereunder, nor shall such a transmission constitute any representation, warranty, assurance,
            guaranty or inducement by the transmitting party to the other party with respect to infringement of patent
            or other rights of others.
        </p>
        <p class="tab">
        7.	All notices hereunder shall be deemed to have been duly given upon the mailing of it, postpaid, to the party
            entitled thereto at the addresses located at the end of this agreement, unless such addresses are changed by 
            written notice.
        </p>
        <p class="tab">
        8.	This Agreement shall be construed according to, and governed by, the laws and regulations of the republic
             of <i style="color:Tomato;"><?=$row['country']?></i>. If any part, term or provision of this Agreement shall be held illegal or in conflict with any law
            of a Federal, State, or local government having jurisdiction over this Agreement, the validity of the remaining
            portions or provisions shall not be affected thereby.
        </p>
        <p class="tab">
        9.	This Agreement shall continue in force for a term of <i style="color:Tomato;"><?=$row['time']?></i> year from the Effective Date of the Agreement, 
            but before the expiration of such term, may be terminated any time by either party giving <i style="color:Tomato;"><?=$row['timelimit']?></i> days written notice
            to the other party, provided, however, the obligations to protect, return and dispose of Confidential 
            Information contained herein shall survive such expiration or termination.
        </p>
        <p class="tab">
        10.	This Agreement is not intended to constitute, create, give effect to, or otherwise recognize a joint venture,
            partnership, or formal business organization of any kind, and the rights and obligations of the parties 
            shall be only those expressly set forth herein. Nothing herein shall be construed as providing for the sharing
            of profits or losses arising out of the efforts of any of the parties.
        </p>
        <p class="tab">
        11.	Each party agrees to comply with applicable provisions of all Federal, state, and local laws and ordinances
            and all orders, rules, and regulations promulgated thereunder and to require any and all consultants retained 
            in conjunction with the activities described in this Agreement to do likewise; and such compliance shall be a
            material obligation of this Agreement.
        </p>
        <p class="tab">
        12.	With respect to any invention or discovery which is or may be patentable 
        </p> 
        <p class="tab2">
        12.1	If an invention is made exclusively by the employees of one party in connection with its efforts under
                this Program, title to said invention and to any patent issuing thereon shall be in said one party. <br>
        12.2	Each invention jointly made or conceived by employees of both parties arising out of this Agreement will
                be jointly owned by both parties without accounting to each other. Filing and prosecution of patent applications
                of such joint inventions will be handled on a mutually agreed- upon basis.
        </p>
        <p class="tab">
        13.	Neither party shall make a news release, public announcement, advertising or publicity statement pertaining
            to the Agreement without the express prior written approval of the other party, except that this Agreement and
            the terms thereof may be made known to the Government.
        </p>
        <p class="tab">
        14.	Neither party shall assign this Agreement or any interest herein, in whole or in part, without the prior 
            written consent of the other party.
        </p>
        <p class="tab">
        15.	Each party shall bear all of the costs and expenses entailed in its own performance of its activities under
            this Agreement.
        </p>
        <p class="tab">
        16.	This Agreement embodies the entire understanding between the parties, respecting the subject matter hereof
            , and there are no prior representations, warranties or agreements between the parties relating hereto, and 
            this Agreement shall not be modified except by a writing duly executed by or on behalf of the party against 
            whom such modification is sought to be enforced.
        </p>
        <p>
        IN WITNESS WHEREOF, the parties have executed this Agreement as of the day and year written above ;
        </p> 
        <p>
        PARTNER NAME <br>
        By(Name)<i style="color:Tomato;"><?=$row['w_name']?></i><br>
        Address:<i style="color:Tomato;"><?=$row['w_address']?></i><br>
        _______________________________________<br>
        _______________________________________<br>
        Date:<i style="color:Tomato;"><?=$row['date']?></i><br>
        </p>
        <p>
        Fairtrade Africa <br>                                                                         
        By: (Name)<i style="color:Tomato;"><?=$row['fta_name']?></i> <br>                                             
        Address: Westcom Point, Block C,<br>
        6th Floor Mahiga Mairu Road,<br>
        Off Rhapta Road Westlands,<br>
        Date: <br> 
        </p>            
    </div>
</div>
<div class="print">
    <a onclick="window.print()"><i class="las la-print fa-lg"></i></a>
</div>