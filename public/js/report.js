$(document).ready(function() {
    var table = $('#example').DataTable();

    // Function to calculate the total amount
    function calculateTotalAmount() {
        var totalAmount = 0;
        table.column(3, { search: 'applied' }).data().each(function(value) {
            totalAmount += parseFloat(value.replace(/[^\d.-]/g, ''));
        });
        return totalAmount;
    }

    // Display the initial total amount with number formatting
    $('#totalAmount').text('Total: PHP ' + formatNumber(calculateTotalAmount().toFixed(2)));

    // Update the total amount when searching or filtering
    table.on('search.dt', function() {
        $('#totalAmount').text('Total: PHP ' + formatNumber(calculateTotalAmount().toFixed(2)));
    });

    // Function to format numbers with commas
    function formatNumber(number) {
        return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }

});