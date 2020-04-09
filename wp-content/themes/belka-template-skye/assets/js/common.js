$(function () {

  let usd = $('.select-button');
  let $dropdown = $('#main-select-dropdown');

  usd.on('click', function () {

    $(this).toggleClass('select-active');

    $dropdown.toggleClass('dropdown-active');
  });

  let $dropel = $('#main-select-dropdown li span');

  $dropel.click(function () {

    let $showSelected = $('#selected-val');

    const $currentValCur = $(this)[0].innerText.toLowerCase();

    $showSelected.text($(this)[0].innerText);

    //$showSelected.data('selected-cur', $(this).data('cur'));

    let $currency = $('.currency');

    $currency.text($(this).data('cur'));

    let $money1 = $('.money1');
    let $money2 = $('.money2');
    let $money3 = $('.money3');

    $money1.text( $money1.data($currentValCur) );
    $money2.text( $money2.data($currentValCur) );
    $money3.text( $money3.data($currentValCur) );

    $dropdown.removeClass('dropdown-active');
    usd.removeClass('select-active');
  });

  $(document).click(function (e) {



    if ( !usd.is(e.target) && usd.has(e.target).length === 0 ) {

      $dropdown.removeClass('dropdown-active');
      usd.removeClass('select-active');
    }
  });
});