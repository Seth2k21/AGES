let visibility = true

function setCheckout(param) {
    const checkout = document.getElementById(param)
    if (visibility == true) {
        checkout.style.display = "block"
        visibility = false

    } else {
        checkout.style.display = "none"
        visibility = true
     
    }
}