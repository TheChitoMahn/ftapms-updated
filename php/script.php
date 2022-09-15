<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">

    // FTA Scoresheets Global
    let a = 0;
    let b = 0;
    let c = 0;

    // FTA Prz Globals
    let d = 0;
    let e = 0;
    let f = 0;
    let g = 0;

    function submitData(action){
        $(document).ready(function(){
            var data = {
                action: action,
                no_1: $("#sf-1").val(),
                no_2: $("#sf-2").val(),
                no_3: $("#sf-3").val(),
                no_4: $("#sf-4").val(),
                no_5: $("#sf-5").val(),
                no_6: $("#sf-6").val(),
                no_7: $("#sf-7").val(),
                no_8: $("#sf-8").val(),
                no_9: $("#sf-9").val(),
                no_10: $("#sf-10").val(),
            };

            $.ajax({
                url: 'functionAVG.php',
                type: 'post',
                data: data,
                success: function(response1){
                   alert(response1);
                   a = response1;
                   var ans = document.getElementById("valoutput");
                   ans.value = response1.toString();
                   document.getElementById('valoutput1').innerHTML = response1.toString();
                   document.getElementById('valoutputFNL').innerHTML = response1.toString();
                }
            });
        });
    }
    function submitCap(action){
        $(document).ready(function(){
            var data = {
                action: action,
                no_1: $("#cp-1").val(),
                no_2: $("#cp-2").val(),
                no_3: $("#cp-3").val(),
                no_4: $("#cp-4").val(),
                no_5: $("#cp-5").val(),
                no_6: $("#cp-6").val(),
                no_7: $("#cp-7").val(),
                no_8: $("#cp-8").val(),
            };

            $.ajax({
                url: 'functionAVG.php',
                type: 'post',
                data: data,
                success: function(response2){
                    alert(response2);
                    b = response2;
                    var ans = document.getElementById("capoutput");
                    ans.value = response2.toString();
                     document.getElementById('capoutput1').innerHTML = response2.toString();
                    document.getElementById('capoutputFNL').innerHTML = response2.toString();
                }
            });
        });
    }
    function submitRisk(action){
        $(document).ready(function(){
            var data = {
                action: action,
                no_1: $("#rk-1").val(),
                no_2: $("#rk-2").val(),
                no_3: $("#rk-3").val(),
                no_4: $("#rk-4").val(),
                no_5: $("#rk-5").val(),
                no_6: $("#rk-6").val(),
            };

            $.ajax({
                url: 'functionAVG.php',
                type: 'post',
                data: data,
                success: function(response3){
                    alert(response3);
                    c = response3;
                    var ans = document.getElementById("riskoutput");
                    ans.value = response3.toString();
                    document.getElementById('riskoutput1').innerHTML = response3.toString();
                    document.getElementById('riskoutputFNL').innerHTML = response3.toString();
                }
            });
        });
    }
    function submitFNL(action){
        $(document).ready(function(){
            var data = {
                action: action,
                no_1: a,
                no_2: b,
                no_3: c,
            };

            $.ajax({
                url: 'functionAVG.php',
                type: 'post',
                data: data,
                success: function(response4){
                    alert(response4);
                    var ans = document.getElementById("allFNL");
                    ans.value = response4.toString();
                    document.getElementById('allFNL1').innerHTML = response4.toString();
                }
            });
        });
    }

// Partnership Prioritization Tool ------------------------------------------------------
    function PRZdevData(action){
        $(document).ready(function(){
            var data = {
                action: action,
                no_1: $("#pr-1").val(),
                no_2: $("#pr-2").val(),
                no_3: $("#pr-3").val(),
                no_4: $("#pr-4").val(),
                no_5: $("#pr-5").val(),
            };

            $.ajax({
                url: 'functionAVG.php',
                type: 'post',
                data: data,
                success: function(response5){
                    alert(response5);
                    d = response5;
                    var ans = document.getElementById("devtotal");
                    ans.value = response5.toString();
                    // document.getElementById('devtotal').innerHTML = response5.toString();
                }
            });
        });
    }
    function PRZbizData(action){
        $(document).ready(function(){
            var data = {
                action: action,
                no_1: $("#pr-6").val(),
                no_2: $("#pr-7").val(),
                no_3: $("#pr-8").val(),
            };

            $.ajax({
                url: 'functionAVG.php',
                type: 'post',
                data: data,
                success: function(response6){
                    alert(response6);
                    e = response6;
                    var ans = document.getElementById("biztotal");
                    ans.value = response6.toString();
                    // document.getElementById('biztotal').innerHTML = response6.toString();
                }
            });
        });
    }
    function PRZgovData(action){
        $(document).ready(function(){
            var data = {
                action: action,
                no_1: $("#pr-9").val(),
                no_2: $("#pr-10").val(),
            };

            $.ajax({
                url: 'functionAVG.php',
                type: 'post',
                data: data,
                success: function(response7){
                    alert(response7);
                    f = response7;
                    var ans = document.getElementById("govtotal");
                    ans.value = response7.toString();
                    // document.getElementById('govtotal').innerHTML = response7.toString();
                }
            });
        });
    }
    function PRZrskData(action){
        $(document).ready(function(){
            var data = {
                action: action,
                no_1: $("#pr-11").val(),
                no_2: $("#pr-12").val(),
                no_3: $("#pr-13").val(),
                no_4: $("#pr-14").val(),
                no_5: $("#pr-15").val(),
            };

            $.ajax({
                url: 'functionAVG.php',
                type: 'post',
                data: data,
                success: function(response8){
                    alert(response8);
                    g = response8;
                    var ans = document.getElementById("rsktotal");
                    ans.value = response8.toString();
                    // document.getElementById('rsktotal').innerHTML = response8.toString();
                }
            });
        });
    }
    function PRZavgData(action){
        $(document).ready(function(){
            var data = {
                action: action,
                no_1: d,
                no_2: e,
                no_3: f,
                no_4: g,
            };

            $.ajax({
                url: 'functionAVG.php',
                type: 'post',
                data: data,
                success: function(response9){
                    alert(response9);
                    var ans = document.getElementById("avgtotal");
                    ans.value = response9.toString();
                    // document.getElementById('avgtotal').innerHTML = response9.toString();
                }
            });
        });
    }
</script>