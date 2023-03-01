const getDetail = () => {
  var url = window.location.pathname;
  let idprod = url.substring(url.lastIndexOf('/') + 1);

  $url = 'http://localhost:8080/gifts/' + idprod;
  $.ajax({
    url: $url,
    type: 'GET',
    success: function (data, status, xhr) {
      let products = data.data;
      $('#name').html(products.name);
      $('#point').html(products.point);
      $('#desc').html(products.description);
      $('#image').html(
        `<img src="http://localhost:8080/img/${products.picture}" alt=""></img>`
      );
    },
  });
};
// dummyimage.com/300

https: function decrement(e) {
  const btn = e.target.parentNode.parentElement.querySelector(
    'button[data-action="decrement"]'
  );
  const target = btn.nextElementSibling;
  let value = Number(target.value);
  value--;
  target.value = value;
}

function increment(e) {
  const btn = e.target.parentNode.parentElement.querySelector(
    'button[data-action="decrement"]'
  );
  const target = btn.nextElementSibling;
  let value = Number(target.value);
  value++;
  target.value = value;
}
const decrementButtons = document.querySelectorAll(
  `button[data-action="decrement"]`
);
const incrementButtons = document.querySelectorAll(
  `button[data-action="increment"]`
);
decrementButtons.forEach((btn) => {
  btn.addEventListener('click', decrement);
});
incrementButtons.forEach((btn) => {
  btn.addEventListener('click', increment);
});

$(document).ready(() => {
  getDetail();
});
