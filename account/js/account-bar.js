// ---------------hidden nav---------------------
$('.account-open-bar').click(function(){
   $(this).addClass('fade')
   $('.acount-nav').addClass('show-nav')
})

$('.acount-bar-item').click(function(){
        let $new_src=''
        let $all_src=$(this).find('img').attr('src')
        $('.acount-nav').removeClass('show-nav')
        $('.account-open-bar').removeClass('fade')
        $('.acount-bar-item').each(function(){
            let $src=$(this).attr('data-name')
            $(this).find('img').attr('src', 'icons/'+$src+'.png')
        })
         if($(this).hasClass('active')){
            
            $new_src=$all_src
         }
         else{
          let $extention=$all_src.split('.')
           $new_src=$extention[0]+'-active.png'
         }

        $(this).find('img').attr('src', $new_src)
   })

// -----------------when open modal-------------------
$('.go-to-product').click(function(){
        $('#product-a').addClass('active')
    
        $('.acount-bar-item').each(function(){
            let $src=$(this).attr('data-name')
            $(this).removeClass('active')
            $(this).find('img').attr('src', 'icons/'+$src+'.png')
        })
            $('#product-a').addClass('active')

        $('#product-a').find('img').attr('src', 'icons/products-active.png')
  })
  // ---------------------------
function fff(){
  $('.acount-bar-item').removeClass('active')
}

// ----------------cheng-buyer in seller-----------------

   $('.acount-bar-type-item').removeClass('d-flex')
   $('.acount-bar-type-item').hide()
      
   $('.acount-type').each(function(){
      
      if($(this).hasClass('acount-type-active')){
         var $type=$(this).attr('id')
      }

        $('[data-type="'+$type+'"]').addClass('d-flex')
        $('[data-type="'+$type+'"]').show()
   })

  $('.acount-type').click(function(){
    $('.acount-type').each(function(){
       $(this).removeClass('acount-type-active')
    })

    $(this).addClass('acount-type-active')
    var $type=$(this).attr('id')
        $('.acount-bar-type-item').removeClass('d-flex')
        $('.acount-bar-type-item').hide()
        $('[data-type="'+$type+'"]').addClass('d-flex')
        $('[data-type="'+$type+'"]').show()
  })