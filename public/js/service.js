var paymentMethodDropdown = document.getElementById('payment_method_unique_id_1');
var referenceInput = document.querySelector('.reference-input');

paymentMethodDropdown.addEventListener('change', function() {
    if (this.value === '2') { // GCash option value
        referenceInput.style.display = 'block';
    } else {
        referenceInput.style.display = 'none';
    }
});