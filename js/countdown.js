if ($('body').is('.motoo')) {
    $(document).ready(function() {
        $tr = $(this).closest('tr');

        var record = $tr.children("td").map(function() {
            return $(this).text();
        }).get();

        console.log(record);
    });
}
