$(function () {

 let $appItem = $('.app-item');

 $appItem.on('click', function () {

   $deviceImage = $('#device-image');

   $selectedItem = $('.app-item-selected');
   $selectedItem.removeClass('app-item-selected');

   $(this).addClass('app-item-selected');

   let $img = $(this).data('img');

   $deviceImage.attr('src', $img);
 });
});