const inputBtn = document.querySelectorAll('[data-input-btn]')
const basePrice = document.querySelectorAll('[data-base-price]')
const subTotal = document.querySelectorAll('[data-subtotal]')
const totalPrice = document.querySelector('[data-total-price]')


inputBtn.forEach((button, index) => {
  button.addEventListener('click', () => {

    var price = parseInt(basePrice[index].innerHTML.split(' ')[1]);
    var quantity = parseInt(button.value);
    var total = price * quantity;

    subTotal[index].innerHTML = '\u20B1 ' + total;

    totalPrice.innerHTML = '\u20B1 ' + getTotal()
    console.log('Total:' + getTotal());

    console.log(price * quantity);

    console.log(basePrice[index].innerHTML.split(' ')[1])
    console.log(button.value)
  })
})

function getTotal(){
  var total = 0;
  subTotal.forEach((price) => {

    total += parseInt(price.innerHTML.split(' ')[1]);

    console.log(price.innerHTML.split(' ')[1])
  })

  return total;
}



