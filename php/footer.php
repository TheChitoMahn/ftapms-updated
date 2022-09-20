<script src="../js/multistep.js"></script>
<script src="../js/drop-down-menu.js"></script>
<script src="../js/drop-down-bell.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#sortTable').DataTable();
        $('.mogotio').DataTable();
        $('#rednotify').DataTable();
        if ($('body').is('.motoo')) {
            $('.yeye2').on('click', function() {
                $tr = $(this).closest('tr');

                var record = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(record);
            });
        }
        $('.yeye').on('click', function() {
            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            document.getElementById('exampleModalLongTitle').innerHTML = data[1];
            document.getElementById('type').innerHTML = data[0];
            document.getElementById('compname').innerHTML = data[1];
            document.getElementById('location').innerHTML = data[2];
            document.getElementById('country').innerHTML = data[3];
            document.getElementById('address').innerHTML = data[4];
            document.getElementById('ftastaff').innerHTML = data[5];
            document.getElementById('principalname').innerHTML = data[6];
            document.getElementById('telephone').innerHTML = data[7];
            document.getElementById('email').innerHTML = data[8];
            document.getElementById('altemail').innerHTML = data[9];
            document.getElementById('partnershipAgreement').innerHTML = data[10];
            document.getElementById('agreementavailable').innerHTML = data[11];
            document.getElementById('Interests').innerHTML = data[12];
            document.getElementById('IndicateOrpotunities').innerHTML = data[13];
            document.getElementById('progress').innerHTML = data[14];
            document.getElementById('ps').innerHTML = data[15];
            document.getElementById('Implementationdate').innerHTML = data[16];
        });

// Assessments View More (.+)
        $('.scoresheetmore').on('click', function() {
            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            document.getElementById('Title').innerHTML = data[1];
            document.getElementById('addressM').innerHTML = data[2];
            document.getElementById('contact').innerHTML = data[3];
            document.getElementById('email').innerHTML = data[4];
            document.getElementById('phone').innerHTML = data[5];
            document.getElementById('das').innerHTML = data[6];
            document.getElementById('coby').innerHTML = data[7];
            document.getElementById('str').innerHTML = data[8];
            document.getElementById('cap').innerHTML = data[9];
            document.getElementById('rsk').innerHTML = data[10];
            document.getElementById('smr').innerHTML = data[11];
            document.getElementById('uid').innerHTML = data[12];
        });
        $('.ddmore').on('click', function() {
            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            document.getElementById('Title1').innerHTML = data[1];
            document.getElementById('address1').innerHTML = data[2];
            document.getElementById('contact1').innerHTML = data[3];
            document.getElementById('email1').innerHTML = data[4];
            document.getElementById('phone1').innerHTML = data[5];
            document.getElementById('das1').innerHTML = data[6];
            document.getElementById('coby1').innerHTML = data[7];
            document.getElementById('str1').innerHTML = data[8];
            document.getElementById('cap1').innerHTML = data[9];
            document.getElementById('rsk1').innerHTML = data[10];
            document.getElementById('smr1').innerHTML = data[11];
            document.getElementById('uid1').innerHTML = data[12];
        });
        $('.przzmore').on('click', function() {
            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            document.getElementById('Title2').innerHTML = data[1];
            document.getElementById('address2').innerHTML = data[2];
            document.getElementById('contact2').innerHTML = data[3];
            document.getElementById('email2').innerHTML = data[4];
            document.getElementById('phone2').innerHTML = data[5];
            document.getElementById('das2').innerHTML = data[6];
            document.getElementById('coby2').innerHTML = data[7];
            document.getElementById('str2').innerHTML = data[8];
            document.getElementById('cap2').innerHTML = data[9];
            document.getElementById('rsk2').innerHTML = data[10];
            document.getElementById('smr2').innerHTML = data[11];
            document.getElementById('uid2').innerHTML = data[12];
            document.getElementById('time').innerHTML = data[13];
            document.getElementById('total').innerHTML = data[14];
            document.getElementById('grandtotal').innerHTML = data[15];
            document.getElementById('Staff').innerHTML = data[16];
            document.getElementById('Additional').innerHTML = data[17];
            document.getElementById('Horizon').innerHTML = data[18];
            document.getElementById('Value').innerHTML = data[19];
            document.getElementById('Score').innerHTML = data[20];
            document.getElementById('gScore').innerHTML = data[21];
        });

// Agreements Update
        $('.updateservice').on('click', function() {
            $('#update-service').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#update_id').val(data[0]);
            $('#name').val(data[1]);
            $('#date').val(data[2]);
        });
        $('.updateother').on('click', function() {
            $('#update-other').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#update_id').val(data[0]);
            $('#name').val(data[1]);
            $('#date').val(data[2]);
        });

//Assessments Update
        $('.updatescoresheet').on('click', function() {
            $('#update-scoresheet').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#update_id').val(data[0]);
            $('#orgname').val(data[1]);
            $('#address').val(data[2]);
            $('#u-contact').val(data[3]);
            $('#u-email').val(data[4]);
            $('#u-phone').val(data[5]);
            $('#u-das').val(data[6]);
            $('#u-cob').val(data[7]);
            $('#u-str').val(data[8]);
            $('#u-cap').val(data[9]);
            $('#u-rsk').val(data[10]);
            $('#u-smry').val(data[11]);
        });
        $('.updatedd').on('click', function() {
            $('#update-dd').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#update_id3').val(data[0]);
            $('#orgname3').val(data[1]);
            $('#address3').val(data[2]);
            $('#u-contact1').val(data[3]);
            $('#u-email1').val(data[4]);
            $('#u-phone1').val(data[5]);
            $('#u-das1').val(data[6]);
            $('#u-cob1').val(data[7]);
            $('#u-str1').val(data[8]);
            $('#u-cap1').val(data[9]);
            $('#u-rsk1').val(data[10]);
            $('#u-smry1').val(data[11]);
            $('#chk-ftapers').val(data[12]);
        });
        $('.updateprzz').on('click', function() {
            $('#update-przz').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#update_id4').val(data[0]);
            $('#orgname4').val(data[1]);
            $('#address4').val(data[2]);
            $('#u-contact2').val(data[3]);
            $('#u-email2').val(data[4]);
            $('#u-phone2').val(data[5]);
            $('#u-das2').val(data[6]);
            $('#u-cob2').val(data[7]);
            $('#u-str2').val(data[8]);
            $('#u-cap2').val(data[9]);
            $('#u-rsk2').val(data[10]);
            $('#u-smry2').val(data[11]);
            $('#chk-ftapers1').val(data[12]);
            $('#przz1').val(data[13]);
            $('#przz2').val(data[14]);
            $('#przz3').val(data[15]);
            $('#przz4').val(data[16]);
            $('#przz5').val(data[17]);
            $('#przz6').val(data[18]);
            $('#przz7').val(data[19]);
            $('#przz8').val(data[20]);
            $('#przz9').val(data[21]);
        });
    });
</script>
<script>
    function printDiv(divName){
        var printcontets = document.getElementById(divName).innerHTML;
        var originalcontents = document.body.innerHTML;

        document.body.innerHTML = printcontets;

        window.print(printcontets);

        document.body.innerHTML = originalcontents;
    }
</script>
</body>
</html>