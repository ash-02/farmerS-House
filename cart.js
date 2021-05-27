var removeitem = document.getElementsByClassName('btn btn-danger');
// console.log(removeitem)
for (var i = 0; i < removeitem.length; i++) {
    var button = removeitem[i];
    button.addEventListener('click', function(event){
        var buttonclicked = event.target;
        buttonclicked.parentElement.parentElement.remove();
        // updatecarttotal();
    })
}

// function updatecarttotal(){
//     var cartitemcontainer = document.getElementsByClassName("table table-borderless")[0];
//     var crows = cartitemcontainer.getElementsByClassName("cart-items");
//     for (var i = 0; i < crows.length; i++) {
//         var cartcontent = crows[i];
//         var cartprice = cartcontent.getElementsByClassName("cart-price");
//         // var quantity = cartcontent.getElementById('cart-quantity')[0]
//         // console.log("hi")
//         var x = document.getElementById("cart-quantity");
//         var currentVal = x.value;
//         console.log(currentVal)
//     }
// }

// var quantity = document.getElementById("cart-quantity").rows[0];
// console.log(quantity);

// function cartquan(){
//     var table = document.getElementById("main-table");
//     for (let i = 0; i < table.rows.length; i++) {
//         var row = table.rows[i];
//         var quantity = row.getElementById("cart-quantity");
//         console.log(quantity);
//     }
// }