function printReceipt() {
    var receiptContent = document.getElementById('receipt').innerHTML;
    var printWindow = window.open('', '_blank');
    printWindow.document.open();
    printWindow.document.write('<html><head><title>Receipt</title></head><body>' + receiptContent + '</body></html>');
    printWindow.document.close();
    printWindow.onload = function() {
      printWindow.print();
      printWindow.close();
    };
  }
  