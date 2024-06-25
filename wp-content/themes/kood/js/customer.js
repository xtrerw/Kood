jQuery(document).ready(function () {
    // 制作动画
    var tarjetas=document.querySelectorAll('.woocommerce ul.products li.product');
    var tiempo=0;
    jQuery(tarjetas).each(function (index, tarjeta) { 
         console.log('tarjetas');
         tiempo+=0.5
        //  使用gsap
         gsap.fromTo(tarjeta,{
            y:100
         },{
            opacity: 1,
            y: 0,
            duration: 1,
            delay: tiempo,
        });
    });
});

