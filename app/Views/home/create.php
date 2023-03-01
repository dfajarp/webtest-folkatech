<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link href="<?= base_url('css/app.css'); ?>" rel="stylesheet">
  <script href="<?= base_url('js/app.js'); ?>" ></script> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.tailwindcss.com"></script>

<style>
.checked {
  color: orange;
}
</style>
</head>
<body>
    <div class="container mx-auto px-8 py-6">
      <!-- button back and title -->
      <div class="flex items-center justify-center w-full relative pb-4">
        <button onClick="location.href='<?= site_url('/')?>'" class="absolute left-0">
          <img class="h-5 w-5" src="https://cdn-icons-png.flaticon.com/512/271/271220.png" alt="">
        </button>
        <span class="">Insert Gift</span>
      </div>

      <div>
        <div id="notif"></div>
        <form id="create_product" >
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="">
                    Product Name
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Name">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="">
                    Point
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="point" type="number" placeholder="Point">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="">
                    Stock
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="stock" type="number" placeholder="Stock">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="">
                    Image
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="file" type="file" >
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="">
                    Description
                </label>
                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="desc" ></textarea>
            </div>
             <div class="mb-4">
                <div class="w-full flex justify-center ">
                    <button type="button" id="submit" class="outline outline-offset-2 outline-1 rounded-full w-full outline-green-500 py-4 bg-green-500 text-white">Submit</button>
                </div>
             </div>

        </form>
      </div>


    </div>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="<?= base_url('js/home/create.js') ?>"></script>

</body>
</html>