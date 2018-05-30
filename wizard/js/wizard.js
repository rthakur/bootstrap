var tab = 0;
controlWizardTabs(tab);
$('#wizard ul a').click(function(){
  controlWizardTabs($(this).data('step'));
});


function controlWizardTabs( tab )
{
  $('#wizard ul li').removeClass('active');
  $('#wizard ul li').eq(tab).addClass('active');

  if( tab == 0 )
    $('.btn-previous').hide();
  else
    $('.btn-previous').show();

  if( tab <= 2 )
  {
    $('.btn-finish').hide();
    $('.btn-next').show();
  }else{
    $('.btn-finish').show();
    $('.btn-next').hide();
  }

  $('.step').addClass('hide');
  $('.step').eq(tab).removeClass('hide');

  $('.steps-container').data('activetab', tab);
}

$('.btn-previous').click(function(){
  controlWizardTabs($('.steps-container').data('activetab') - 1);
});

$('.btn-next').click(function(){
  controlWizardTabs($('.steps-container').data('activetab') + 1);
});
