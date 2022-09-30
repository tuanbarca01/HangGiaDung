console.log('ok 1');
//header
function hideheader(){
    let $slider = document.querySelector('.slider')
    let $header = document.querySelector('header')
    let scrollTop = document.querySelector('html').scrollTop;
    if(scrollTop >($slider.offsetHeight/2 - $header.offsetHeight)){

        $header.style.transform = 'scaleY(1)'
        $header.style.transformOrigin = 'center top'
        // $header.style.display = 'block'
    }else{
        // $header.style.display = 'none'
        $header.style.transform = 'scaleY(0)'
        $header.style.transformOrigin = 'top center'
    }
}
//cart
let $cart = document.querySelector('.cart')
let $tab = document.querySelector('.cart-detail')
let $main = document.querySelector('main')
let $btn = document.querySelector('.btn-cart')
$cart.addEventListener('click',function(e) {
    if($tab.style.display == 'none'){
        $tab.style.display = 'block'
    }
    else{
        $tab.style.display = 'none'
    }
})
// $btn.addEventListener('click',function(e) {
//     if($tab.style.display == 'none'){
//             $tab.style.display = 'block'
//     }
//     else if($tab.style.display == 'block'){
//         $main.addEventListener('click',function() {
//             $tab.style.display = 'none'
//         })
//     }
// })
// $main.addEventListener('click',function() {
//     $tab.style.display = 'none'
// })

//remove-cart
var remove_cart = document.getElementsByClassName('btn-danger');
for(var i = 0;i< remove_cart.length;i++){
    var button = remove_cart[i]
    button.addEventListener('click',function(e) {
        var button_remove = e.target
        button_remove.parentElement.parentElement.remove() //parentElement dùng để gọi về lớp hiện tại --> 2ParentElement sẽ gọi về lớp cha của lớp hiện tại
        updatecart();
    })
}
// update cart
function updatecart() {
    var cart_item = document.getElementsByClassName("cart-items")[0];
    var cart_rows = cart_item.getElementsByClassName("cart-row");
    var total = 0;
    for (var i = 0; i < cart_rows.length; i++) {
      var cart_row = cart_rows[i]
      var price_item = cart_row.getElementsByClassName("cart-price ")[0]
      var quantity_item = cart_row.getElementsByClassName("cart-quantity-input")[0]
      var price = parseFloat(price_item.innerText)// chuyển một chuổi string sang number để tính tổng tiền.
      var quantity = quantity_item.value // lấy giá trị trong thẻ input
      total = total + (price * quantity)
    }
    document.getElementsByClassName("cart-total-price")[0].innerText = total + 'VNĐ'
  }
// thay đổi số lượng sản phẩm
var quantity_input = document.getElementsByClassName("cart-quantity-input");
for (var i = 0; i < quantity_input.length; i++) {
  var input = quantity_input[i];
  input.addEventListener("change", function (event) {
    var input = event.target
    if (isNaN(input.value) || input.value <= 0) {
      input.value = 1;
    }
    updatecart()
  })
}
// Thêm vào giỏ
// var add_cart = document.getElementsByClassName("btn-cart");
// for (var i = 0; i < add_cart.length; i++) {
//   var add = add_cart[i];
//   add.addEventListener("click", function (event) {
//     var button = event.target;
//     var product = button.parentElement.parentElement;
//     var img = product.parentElement.getElementsByClassName("img-product")[0].src
//     var title = product.getElementsByClassName("pro-details_main-info-h2")[0].innerText
//     var price = product.getElementsByClassName("price")[0].innerText
//     addItemToCart(title, price, img)
//     var modal = document.getElementById("myModal");
//     modal.style.display = "block";
//
//     updatecart()
//   })
// }
function addItemToCart(title, price, img) {
    var cartRow = document.createElement('div')
    cartRow.classList.add('cart-row')
    var cartItems = document.getElementsByClassName('cart-items')[0]
    var cart_title = cartItems.getElementsByClassName('cart-item-title')
    for (var i = 0; i < cart_title.length; i++) {
      if (cart_title[i].innerText == title) {
        alert('Sản Phẩm Đã Có Trong Giỏ Hàng')
        return
      }
    }
    var cartRowContents = `
    <div class="cart-item cart-column">
        <img class="cart-item-image" src="${img}" width="100" height="100">
        <span class="cart-item-title">${title}</span>
    </div>
    <span class="cart-price cart-column">${price}</span>
    <div class="cart-quantity cart-column">
        <input class="cart-quantity-input" type="number" value="1">
        <button class="btn btn-danger" type="button">Xóa</button>
    </div>`
    cartRow.innerHTML = cartRowContents
    cartItems.append(cartRow)
    cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click', function () {
    var button_remove = event.target
    button_remove.parentElement.parentElement.remove()
    updatecart()
    })
    cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change', function (event) {
        var input = event.target
        if (isNaN(input.value) || input.value <= 0) {
        input.value = 1;
        }
        updatecart()
    })
}
//
hideheader();
window.addEventListener('scroll',hideheader)

//nav2
// let $register = document.querySelector('.register')
// let $nav2 = document.querySelector('.nav2')
// let $table =document.querySelector('.table')
// $register.addEventListener('click',function(){
//     $nav2.style.display = 'block'
//     $table.style.display = 'flex'
// })
// $nav2.addEventListener('click',function(){
//     $nav2.style.display = 'none'
//     $table.style.display = 'none'
// })
// $nav.addEventListener('click',function(){
//     $menu_col.style.transform = 'scaleX(0)'
//     $menu_col.style.transformOrigin = 'center left'
//     setTimeout(function(){
//         $nav.style.display ='none'
//     },300)
// })
// //SliderTo
// let $menu= document.querySelectorAll('.body-menu ul li')
// let $slider1 = document.querySelector('.slider__image #id01')
// let $slider2 = document.querySelector('.slider__image #id02')
// let $slider3 = document.querySelector('.slider__image #id03')
// $menu.forEach((e) =>{
//     e.addEventListener('click',function(e){
//         console.log('click')
//         let menudata = this.getAttribute('data-menu')
//         if(menudata == 'id1'){
//             $slider1.classList.add('active')
//             $slider2.classList.remove('active')
//             $slider3.classList.remove('active')
//         }
//         else if(menudata == 'id2'){
//             $slider1.classList.remove('active')
//             $slider2.classList.add('active')
//             $slider3.classList.remove('active')
//         }
//         else if(menudata == 'id3'){
//             $slider1.classList.remove('active')
//             $slider2.classList.remove('active')
//             $slider3.classList.add('active')
//         }
//     })
// })
//backtop
let $backtop = document.querySelector('.back-to-top')
$backtop.addEventListener('click', function(e){
    e.preventDefault();
    window.scrollBy({
        top: -document.body.offsetHeight,
        behavior: 'smooth'
    })
})
//nav
let $btn_menu = document.querySelector('.head-active .logo-active')
let $nav = document.querySelector('.nav')
let $menu_col = document.querySelector('.nav .menu-col')
let $menu_close = document.querySelector('.body-logo .close-nav')

$btn_menu.addEventListener('click',function(){
    $nav.style.display = 'block'
    setTimeout(function(){
        $menu_col.style.transformOrigin = 'left center'
        $menu_col.style.transform = 'scaleX(1)'
    },0)

})
$menu_close.addEventListener('click',function(){
    $menu_col.style.transform = 'scaleX(0)'
    $menu_col.style.transformOrigin = 'center left'
    setTimeout(function(){
        $nav.style.display = 'none'
    },300)
})
//flickity
var elem = document.querySelector('.main-carousel');
var flkty = new Flickity( elem, {
  // options
  cellAlign: 'left',
  contain: true
});

// element argument can be a selector string
//   for an individual element
var flkty = new Flickity( '.main-carousel', {
  // options
});

