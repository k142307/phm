$(document).ready(function(){
		



$('div.alert > .close').on('click', function () {

    var $p = $(this).parent();
    $p.addClass('fadeOut');
    setTimeout(function () {
      $p.css({ height: $p.outerHeight(), overflow: 'hidden' }).animate({'padding-top': 0, height: $('#main-navbar').outerHeight()}, 500, function () {
        $p.remove();
      });
    }, 300);
    return false;
  });
  
  
});
