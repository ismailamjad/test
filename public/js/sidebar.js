

//    jQuery(document).ready(function(){
//        jquery('.left-wrapper').addClass('close');
//    });


  //  $( ".open-btn .openBtn" ).click(function() {
  //   $('.left-wrapper').addClass('open');
  //   $('.left-wrapper').animate({duration: 10000});
  //   $( ".open-btn .openBtn" ).remove();
  //   $(".open-btn" ).empty().append(`<button type="button" class="btn closeBtn" onclick="closeBtn()"> <i class="fas fa-time"></i> Close</button>`)
  // });
  function openBtn() {
    $('.left-wrapper').addClass('open');
    $('.left-wrapper').removeClass('close');
    $('.left-wrapper').animate({duration: 10000});
     $( ".open-btn .openBtn" ).css('visibility' , 'hidden');
    $(".close-btnn" ).empty().prepend(`<button type="button" class=" btn  closeBtn" onclick="closeBtn()"> <i class="fal fa-times"></i></button>`)
  }

  function closeBtn(){
    $( ".open-btn .closeBtn" ).remove();
    $('.left-wrapper').removeClass('open');
    $('.left-wrapper').addClass('close');
    // $(".open-btn" ).empty().prepend(`<button type="button" class=" btn openBtn" onclick="openBtn()"> <i class="fas fa-filters"></i> Filters</button>`);
    $( ".open-btn .openBtn" ).css('visibility' , 'visible');

  }


  // $( ".open-btn  .closeBtn" ).click(function() {
   
  

  // })

