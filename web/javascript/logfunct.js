$('.tabs').on('click', 'li a', function(e)
{
  e.preventDefault();
  var tab = $(this);
  var href = tab.attr('href');
  //Acciones
   $('.active').removeClass('active');
   tab.addClass('active');
   $('.show').removeClass('show').addClass('hide').hide();
   $(href).removeClass('hide').addClass('show').hide().fadeIn(550);
});

$('.phantlinker').on('click',function(e)
{
  e.preventDefault();
  var href = $(this).attr('href');
  //Acciones
  $('.active').removeClass('active');
  $('.show').removeClass('show').addClass('hide').hide();
  $(href).removeClass('hide').addClass('show').hide().fadeIn(550);
});
