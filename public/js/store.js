$(document).ready(function() {
  // Quantity increment and decrement
  $(document).on('click', '.quantity-increment, .quantity-decrement', function() {
    var input = $(this).siblings('.quantity-input');
    var increment = $(this).hasClass('quantity-increment') ? 1 : -1;
    var currentValue = parseInt(input.val());
    var newValue = currentValue + increment;

    if (!isNaN(newValue) && newValue >= 1) {
      input.val(newValue);
      calculateSubtotalAndTotal();
      updateQuantity(input);
    }
  });

  // Calculate and update subtotal and total
  function calculateSubtotalAndTotal() {
    var subtotals = document.querySelectorAll('[data-subtotal]');
    var totalElement = document.querySelector('[data-total-price]');
    var subtotal = 0;

    if (subtotals.length === 0 || totalElement === null) {
      console.log('Elements not found.');
      return;
    }

    subtotals.forEach(function(subtotalElement) {
      var row = subtotalElement.closest('tr');
      var quantityInput = row.querySelector('.quantity-input');
      var basePriceInput = row.querySelector('[data-base-price]');

      if (row && quantityInput && basePriceInput) {
        var quantity = parseInt(quantityInput.value);
        var price = parseFloat(basePriceInput.value);
        var subtotalPerItem = price * quantity;
        subtotal += subtotalPerItem;
        subtotalElement.textContent = '₱ ' + subtotalPerItem.toFixed(2);
      }
    });

    totalElement.textContent = '₱ ' + subtotal.toFixed(2);
  }

  // Update quantity through AJAX
  function updateQuantity(input) {
    var productId = input.data('product-id');
    var newQuantity = input.val();
    var csrfToken = $('meta[name="csrf-token"]').attr('content');

    $.ajax({
      url: '/update-quantity',
      method: 'POST',
      data: {
        _token: csrfToken,
        productId: productId,
        newQuantity: newQuantity
      },
      success: function(response) {
        console.log('Quantity updated successfully.');
        calculateSubtotalAndTotal();
      },
      error: function(xhr) {
        console.log('Error updating quantity: ' + xhr.status);
      }
    });
  }

  // Call the calculate function initially
  calculateSubtotalAndTotal();
});
