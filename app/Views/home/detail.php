<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      .checked {
        color: orange;
      }

      input[type='number']::-webkit-inner-spin-button,
      input[type='number']::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
      }

      .custom-number-input input:focus {
        outline: none !important;
      }

      .custom-number-input button:focus {
        outline: none !important;
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
        <span class="">Gift detail</span>
      </div>
      <!-- image of product -->
      <div id="image" class="flex justify-center">
        
      </div>
      <!-- product name -->
      <div class="block py-4 space-y-2">
        <span id="name" class="text-xl font-semibold"></span>
        <br />
        <span class="text-xs text-gray-500">lorem ipsum</span>
      </div>
      <hr />
      <div class="grid grid-cols-3 gap-3 py-3">
        <div class="space-y-1 border-r border-gray-200">
            <div class="flex justify-center">
                <div>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <br>
                </div>
            </div>
          <div class="block text-center text-xs text-gray-400">
            <div>160</div>
            <div>reviews</div>
          </div>
        </div>
        <div class="">
          <div class="w-full flex justify-center">
            <img class="h-6 w-6" src="https://cdn-icons-png.flaticon.com/512/3334/3334338.png" alt="">
          </div>
          <div class="text-center font-semibold text-green-500">
            <span id="point">0</span>
          </div>
          <div class="text-center text-xs text-gray-400">
            <span>Points</span>
          </div>
        </div>
        <div class="flex items-center justify-center border-l border-gray-200">
            <div class="">
                <div class="flex justify-center">
                  <img class="h-6 w-6" src="https://cdn-icons-png.flaticon.com/512/535/535285.png">
                </div>
                <div class="text-center text-gray-400">
                  <span>Add to Wishlist</span>
                </div>
            </div>
        </div>
      </div>
      <hr />
      <div class="pt-6 space-y-4">
        <span class="text-xl font-semibold">Info Produk</span>
        <div id="desc"></div>
      </div>

      <div class="">
        <div class="flex items-center justify-between py-6"> 
            <div class="custom-number-input h-10 w-32">
              <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-1">
                <button data-action="decrement" class=" bg-gray-200 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
                  <span class="m-auto text-2xl font-thin">−</span>
                </button>
                <input type="number" min="1" class="outline-none focus:outline-none text-center w-full bg-white font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none" name="custom-input-number" value="0"></input>
                <button data-action="increment" class="bg-gray-200 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer">
                  <span class="m-auto text-2xl font-thin">+</span>
                </button>
              </div>
            </div>
    
            <div>
                <button class="outline outline-offset-2 outline-1 py-2 px-6 rounded-full outline-green-500 text-green-500"> Add to cart </button>
            </div>
        </div>
        <div class="w-full flex justify-center py-4 ">
            <button class="outline outline-offset-2 outline-1 rounded-full w-full outline-green-500 py-4 bg-green-500 text-white">Redeem</button>
        </div>


    </div>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="<?= base_url('js/home/index.js') ?>"></script>
    <script src="<?= base_url('js/home/detail.js') ?>"></script>

  </body>
</html>