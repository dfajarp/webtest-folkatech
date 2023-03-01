const inserProduct = () => {};

$('#submit').on('click', () => {
  let name = $('#name').val();
  let point = $('#point').val();
  let stock = $('#stock').val();
  let description = $('#desc').val();

  data = new FormData();
  data.append('name', name);
  data.append('point', point);
  data.append('stock', stock);
  data.append('picture', $('#file')[0].files[0]);
  data.append('description', description);

  $url = 'http://localhost:8080/gifts';
  $.ajax({
    url: $url,
    type: 'POST',
    data: data,
    processData: false,
    contentType: false,
    cache: false,
    enctype: 'multipart/form-data',
    success: function (data) {
      $('#notif')
        .append(`<div  class="bg-green-200 text-center p-2 rounded-md my-2">
            <span>Data inserted!</span>
        </div>`);

      window.location.href = 'http://localhost:8080/';
    },
  });
});

// $('form').submit(function (event) {
// //   var formData = {
// //     name: $('#name').val(),
// //     point: $('#point').val(),
// //     stock: $('#stock').val(),
// //     picture: $('#picture').val(),
// //     description: $('#desc').val(),
// //   };

//   console.log(formData);
//   url = 'http://localhost:8080/gifts';

//   $.ajax({
//     type: 'POST',
//     url: url,
//     data: formData,
//     dataType: 'json',
//     encode: true,
//   }).done(function (data) {
//     console.log(data);
//   });

//   event.preventDefault();
// });
