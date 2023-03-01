const getProduct = () => {
  $url = 'http://localhost:8080/gifts';
  $.ajax({
    url: $url,
    type: 'GET',
    success: function (data, status, xhr) {
      let products = data.data;
      if (products.length === 0) {
        let html = `<div class="py-4">
        <span>Data Empty</span>
        </div>`;
        $('.products').append(html);
      } else {
        products.map((v) => {
          sendCard(v);
        });
      }
    },
  });
};

const sendCard = (v) => {
  console.log(v);
  let html = `
  <button onClick="detailProduct(${v.id})">
        <div class="max-w-sm rounded overflow-hidden shadow-lg">
          <img class="w-full" src="${
            'http://localhost:8080/img/' + v.picture
          }" alt="image product">
          <div class="px-2 py-2">
            <div class="font-bold text-sm mb-2">${v.name}</div>
            <span class="flex space-x-1 items-center text-xs text-green-500">
              <img class="w-3 h-3" src="https://cdn-icons-png.flaticon.com/512/3334/3334338.png" alt="">
              <label for="">${v.point} Poins</label>
            </span>
          </div>
          <div class="flex items-center w-full px-2 pb-2">
            <div class="w-full">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span><br>
              <span class="text-xs text-gray-300">160 reviews</span>
            </div>
            <div class="">
              <img class="h-6 w-6" src="https://cdn-icons-png.flaticon.com/512/535/535285.png" alt="">
              <!-- https://cdn-icons-png.flaticon.com/512/535/535183.png -->
            </div>
          </div>
        </div>
    </button>
        
        `;
  $('.products').append(html);
};

const detailProduct = (id) => {
  let url = 'http://localhost:8080/detail/' + id;
  window.location.href = url;
};

$(document).ready(() => {
  getProduct();
});
