// Get the payment method dropdown and reference input elements
var paymentMethodDropdown = document.getElementById('payment_method_unique_id_1');
var referenceInput = document.querySelector('.reference-input');

// Add event listener to the payment method dropdown
paymentMethodDropdown.addEventListener('change', function() {
    if (this.value === 'gcash') {
        // If GCash is selected, show the reference input
        referenceInput.style.display = 'block';
    } else {
        // If any other option is selected, hide the reference input
        referenceInput.style.display = 'none';
    }
});





