const incrementButton = document.querySelectorAll(".increment");
const decrementButton = document.querySelectorAll(".decrement");
const quantityInput = document.querySelectorAll(".quantity");
const tickets_qte = document.querySelectorAll(".tickets_qte");


    for (let i = 0; i < tickets_qte.length; i++) {
        incrementButton[i].addEventListener("click", () => {
            quantityInput[i].value = parseInt(quantityInput[i].value) + 1;
            TotalPrice();
        });
        decrementButton[i].addEventListener("click", () => {
            var qte = parseInt(quantityInput[i].value) - 1;
            if(qte<0) qte=0;
            quantityInput[i].value =qte;
            TotalPrice();
        });
    }
function TotalPrice(){
        var total_price=0;
        total_price+=quantityInput[0].value*30;
        total_price+=quantityInput[1].value*40;
        total_price+=quantityInput[2].value*50;
        $("#price_total").text(total_price+"$");
    }

