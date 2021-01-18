$(document).ready(function() {

  $('li.plot > span').click(function() {
    $(this).addClass('hide');
    $(this).siblings('span').addClass('show');
    $(this).siblings('span').removeClass('hide');
    $(this).siblings('.plot-text').toggleClass('active');
  });
});
