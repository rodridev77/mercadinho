
function productPage() 
{

    let productId = document.querySelector("#product-id").value

    window.location = BASE_URL + "/product/show/"+productId;
}

function addToCart()
{
    let productId = parseInt(document.querySelector("#product-id").value);
    let countProduct = parseInt(document.querySelector("#count-product").value);

    const data = {
        "productId": productId,
        "countProduct": countProduct
    }

    axios.post(BASE_URL + "/cart/add", data)
        .then(response => {
            console.log('response :>> ', response.data);
            
        }).catch(error => console.log(error));
}

$('.add_to_cart span').on('click', function(event) {
    event.preventDefault();

    var countProduct = parseInt(document.querySelector("#count-product").value);
    var action = $(this).attr('data-action');

    if (action === 'decrease') {
        if ((countProduct > 1)) {
            countProduct--;
        }
    } else if (action === 'increase') {
        countProduct++;
    }

    $('.product-qtty').val(countProduct);
    $('input[name=count-product]').val(countProduct);

    addToCart();
});

function addToCart2()
{
    let productId = parseInt(document.querySelector("#product-id").value);

    const data = {
        "productId": productId,
    }

    axios.post(BASE_URL + "/cart/add", data)
        .then(response => {
            console.log('response :>> ', response.data);
            
        }).catch(error => console.log(error));
}
