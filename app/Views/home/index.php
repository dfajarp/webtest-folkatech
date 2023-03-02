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
  <!-- <a href="<?php site_url('Home/detail') ?>">add product</a>  -->
    <div class="container mx-auto px-4">
       <div class="flex items-center justify-center w-full relative py-4">
         <span class="">Gifts</span>
         <button onClick="location.href='<?= site_url('/create')?>'" class="absolute left-0">
           <span class="outline outline-offset-2 outline-blue-500 rounded-md p-1">Add Gifts</span>
         </button>
      </div>

      <div class="products grid gap-4 grid-cols-2  md:grid-cols-3 grid-rows-2"></div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="<?= base_url('js/home/index.js') ?>"></script>
    <script src="<?= base_url('js/home/detail.js') ?>"></script>

</body>
</html>