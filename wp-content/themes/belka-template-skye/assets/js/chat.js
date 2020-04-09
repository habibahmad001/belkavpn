$(function () {

  $chat = $('.chat-widget-container');
  $chatBtn = $('.chat-btn');
  $mailBtn = $('.svg-mail-btn');
  $closeBtn = $('.svg-close-btn');

  let flag = 0;

  $chatBtn.on('click', function () {

    if (flag === 0) {

      $closeBtn.show(100);
      $mailBtn.hide(100);
      $chat.show(200);
      flag = 1;


    } else {

      $closeBtn.hide(100);
      $mailBtn.show(100);
      $chat.hide(200);
      flag = 0;
    }

  })
});