const btn_plus = document.querySelector('.btn-plus')
const btn_minus = document.querySelector('.btn-minus')
const total_product = document.getElementById('total-product')
const total_price = document.getElementById('total-price')
const cost_product = document.getElementById('cost')
const input_quantity = document.getElementById('input_1')
const checkbox_1 = document.getElementById('checkbox_1')
var quantity = 1
var price_item = 1
btn_plus.addEventListener('click', function() {
    quantity++
    input_quantity.value = quantity
    price_item = quantity * Number.parseFloat(cost_product.innerText)
    total_product.innerText = price_item + 'đ'

})
btn_minus.addEventListener('click', function() {
    quantity--
    if (quantity <= 0) {
        quantity = 0
    }
    input_quantity.value = quantity
    price_item = quantity * Number.parseFloat(cost_product.innerText)
    total_product.innerText = price_item + 'đ'
})