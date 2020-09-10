
function productPage() {

    let productId = document.querySelector("#product-id").value

    window.location = BASE_URL + "/product/show/"+productId;
}