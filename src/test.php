<?php

function createProduct($is_logged_in, $name, $price) {
  $productName = $is_logged_in ? '<div class="col-md-10"><h4>'.$name.'</h4></div>' : '<div class="col-md-10"><h4>'.$name.'</h4></div>';
  $productName = $productName . ($is_logged_in ? '<div class="col-md-2"><div class="row"><div class="col-md-6"><span><a href="#">Edit</a></span></div><div class="col-md-6"><span><a href="#">Delete</a></span></div></div></div>': '');
  $product = '
  <div class="row shadow p-3 mb-5 bg-white rounded ">
  <div class="row">
      '.  $productName  .'
  </div>
  <div class="row">
      <div class="col-md-6 "><img src="/img/Unknown.png" class="img-fluid"></div>
      <div class="col-md-6">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</div>
  </div>
  <div class="row">
      <div class="col-md-6"></div>
      <div class="col-md-6"><h5>'.$price.'</h5></div>
  </div>
  </div>';
  return $product;
}


