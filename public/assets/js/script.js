
let page = 1;
let id = 1;

let content = $("#content");

function getProducts(){
    
    axios.get(`http://localhost/mercadinho/category/show/${id}/${page}`)
    .then(response=>{
      if(!response.data){
        console.log('fim dos produtos');
        return;
      }
      content.append(response.data);
      page +=1;
    })
}

function inicializa_scroll(){
    $(window).scroll(function() {
      if(($(window).scrollTop() + $(window).height() ) >= $(document).height()) {
        $(window).unbind('scroll');
        getProducts();
        inicializa_scroll();
    }
    });
  }

  getProducts();
  inicializa_scroll();
  

