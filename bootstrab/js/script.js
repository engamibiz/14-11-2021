$(document).scroll(function(){
 
    if($(window).scrollTop() > 50){
    $('header').css('background-color','white')
    $('header').removeClass('p-3')
    $('header').addClass('p-1')
    }else{
    $('header').css('background-color','transparent')
    $('header').removeClass('p-1')
    $('header').addClass('p-3')
    }

   /* $('.addTo').click(function(){
        console.log($(this).siblings('.card-title').html())
        fruits.push("Kiwi");
    })  */
})


$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    
    responsive:{
        0:{
            items:2,
            dots:false,
        },
        600:{
            items:3,
            dots:false,
        },
        1000:{
            items:6
        }
    }
})


$(document).ready(function(){
    setTimeout(function(){
        $('.cartIcon').css({'left':"20px",'transform':'rotate(360deg)'})
    },2000)
    setTimeout(function(){
        $('.cartIcon span').css({"transform":'scale(1)','opacity':"1"})
    },2800)
    
})

$('.cartIcon').click(function(){
    $('.cartbox .row').hide()
    $('.cartbox').toggle(500)
    setTimeout(function(){
        $('.cartbox .row').show(200)
    },500)
})

let products=[]
$(".addTo").click(function(){
    let title=$(this).siblings(".card-title").html()
    let price=$(this).siblings("p").find("ins").html()
    let img=$(this).attr("data-img")
    let product={title:title,price:price,img:img}
    products.push(product)

    $(".cartbox .container-fluid").html("")
    $.each(products,function(index , pro){
        $(".cartbox .container-fluid").append(
            '<div class="row py-1">'
            + '<div class="col-2">'
                +'<img src="' + pro.img + '" width="35" height="35">'
            +'</div>'
            +'<div class="col-4">'
              + pro.title
            +'</div>'
            +'<div class="col-2">'
              + '1 x'
            +'</div>'
            +'<div class="col-2">'
             + pro.price
            +'</div>'
            +'<div class="col-2">'
            + pro.price
            +'</div>'
          +'</div>'
        )
    })

})