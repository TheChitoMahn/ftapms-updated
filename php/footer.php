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
        $('.scoresheetmore').on('click', function() {
            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            document.getElementById('Title').innerHTML = data[0];
            document.getElementById('address').innerHTML = data[1];
            document.getElementById('contact').innerHTML = data[2];
            document.getElementById('email').innerHTML = data[3];
            document.getElementById('phone').innerHTML = data[4];
            document.getElementById('das').innerHTML = data[5];
            document.getElementById('coby').innerHTML = data[6];
            document.getElementById('str').innerHTML = data[7];
            document.getElementById('cap').innerHTML = data[8];
            document.getElementById('rsk').innerHTML = data[9];
            document.getElementById('smr').innerHTML = data[10];
            document.getElementById('uid').innerHTML = data[11];
        });
        $('.ddmore').on('click', function() {
            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            document.getElementById('Title1').innerHTML = data[0];
            document.getElementById('address1').innerHTML = data[1];
            document.getElementById('contact1').innerHTML = data[2];
            document.getElementById('email1').innerHTML = data[3];
            document.getElementById('phone1').innerHTML = data[4];
            document.getElementById('das1').innerHTML = data[5];
            document.getElementById('coby1').innerHTML = data[6];
            document.getElementById('str1').innerHTML = data[7];
            document.getElementById('cap1').innerHTML = data[8];
            document.getElementById('rsk1').innerHTML = data[9];
            document.getElementById('smr1').innerHTML = data[10];
            document.getElementById('uid1').innerHTML = data[11];
        });
        $('.przzmore').on('click', function() {
            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            document.getElementById('Title2').innerHTML = data[0];
            document.getElementById('address2').innerHTML = data[1];
            document.getElementById('contact2').innerHTML = data[2];
            document.getElementById('email2').innerHTML = data[3];
            document.getElementById('phone2').innerHTML = data[4];
            document.getElementById('das2').innerHTML = data[5];
            document.getElementById('coby2').innerHTML = data[6];
            document.getElementById('str2').innerHTML = data[7];
            document.getElementById('cap2').innerHTML = data[8];
            document.getElementById('rsk2').innerHTML = data[9];
            document.getElementById('smr2').innerHTML = data[10];
            document.getElementById('uid2').innerHTML = data[11];
            document.getElementById('time').innerHTML = data[12];
            document.getElementById('total').innerHTML = data[13];
            document.getElementById('grandtotal').innerHTML = data[14];
            document.getElementById('Staff').innerHTML = data[15];
            document.getElementById('Additional').innerHTML = data[16];
            document.getElementById('Horizon').innerHTML = data[17];
            document.getElementById('Value').innerHTML = data[18];
            document.getElementById('Score').innerHTML = data[19];
        });


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