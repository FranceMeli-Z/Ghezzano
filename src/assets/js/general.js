// Common
import { Modal } from "bootstrap";

// Common
import { default as init } from "./common/base";

// Helpers
import { Component } from "./helpers/component";

// Components
import { Slider } from "../../components/slider/slider";
import { Share } from "../../components/share/share";
import { Menu } from "../../components/menu/menu";
import { HeroVideo } from "../../components/herovideo/herovideo";

//import { Header } from "../../components/header/header";
import Swiper, { EffectFade, Navigation, Pagination, Autoplay, FreeMode, Mousewheel, EffectCoverflow } from "swiper";

// Registering components
//Component.register("Header", Header);
Component.register("Slider", Slider);
Component.register("Share", Share);
Component.register("Menu", Menu);
Component.register("HeroVideo", HeroVideo);

init();

// document.addEventListener('DOMContentLoaded', () => {
  $(document).ready(function() {

// Gestione Menu
$(`.c-menu__btn--open`).on('click', function(){
  $('body').addClass('zaux-menu-active');
  $('.c-menu').addClass('open');
});

$(`.c-menu__btn--close`).on('click', function(){
  $('body').removeClass('zaux-menu-active');
  $('.c-menu').removeClass('open');
});

 // On resize
  $(window).resize(function(){

  });

 // On Scroll
  $(window).scroll(function(){
    const currentScroll = $(window).scrollTop();
    var viewportWidth = $(window).width();
    if ( viewportWidth > 992) {
      if (currentScroll > 118) {
        $(".c-header__inner").addClass("zaux-header-scroll");
        $(".c-hero").addClass("zaux-hero-scroll");
      }
      else {
        $(".c-header__inner").removeClass("zaux-header-scroll");
        $(".c-hero").removeClass("zaux-hero-scroll");
      }
    } else {
      if (currentScroll > 60) {
        $(".c-header__inner").addClass("zaux-header-scroll");
        $(".c-hero").addClass("zaux-hero-scroll");
      }
      else {
        $(".c-header__inner").removeClass("zaux-header-scroll");
        $(".c-hero").removeClass("zaux-hero-scroll");
      }
    }
  });

    //Attivo la prima tab della modale
    // ModalTabActive();
    // Modifica il contenuto della modale al click sulla tab
    $(`.c-modale__tab--item`).click(function(){
      event.preventDefault();
      if (!$(this).hasClass('active')){
        $(`.c-modale.show .c-modale__tab--item`).removeClass('active');
        $(this).addClass('active');
      }
      var activeTab = $(`.c-modale.show .c-modale__tab--item.active`).attr("data-tab");
      $(`div[class*="c-modsection"]`).each(function(e){
        var sliderattr = $(this).attr("data-value");
        if ( sliderattr == activeTab ) {
          $(this).addClass("open");
        }
        else {
          $(this).removeClass("open");
        }
      });
    });


var box = $(".c-modale__tab"), x;
$(".c-modale__arrowtab .arrow").click(function() {
  if ($(this).hasClass("arrow-right")) {
    x = ((box.width() / 2)) + box.scrollLeft();
    box.animate({
      scrollLeft: x,
    })
  } else {
    x = ((box.width() / 2)) - box.scrollLeft();
    box.animate({
      scrollLeft: -x,
    })
  }
});

//ScrollTop ancore
var viewportWidth = $(window).width();
$('a[data-menu-value="Info"]').click(function(){
    // event.preventDefault();
    var offset = $('#Info').offset();
    var scrollto = offset.top - 60;
    $('html, body').animate({scrollTop:scrollto}, 1000);
});
$('a[data-menu-value="Tipologie"]').click(function(){
  // event.preventDefault();
  var offset = $('#Tipologie').offset();
  var scrollto = offset.top - 60;
  $('html, body').animate({scrollTop:scrollto}, 1000);
});
$('a[data-menu-value="Appuntamento"]').click(function(){
  // event.preventDefault();
  var offset = $('#Appuntamento').offset();
  var scrollto = offset.top - 60;
  $('html, body').animate({scrollTop:scrollto}, 1000);
});

$('a[data-menu-value]').click(function(){
  if ($('body').hasClass('zaux-menu-active')){
  $('.c-menu').removeClass('open');
  $('body').removeClass('zaux-menu-active');
  }
});


$("a[data-modal-click").click(function() {
  var id = $(this).attr("data-bs-target");
  var post = $(this).attr("data-id");
  $.ajax({
    type: "GET",
    dataType: 'html',
    async:true,
    url: 'components/modal-content.html',
    // type: "POST",
    // dataType: 'html',
    // async:true,
    // data: { postID : post },
    // url: 'wp-content/themes/zaki/components/modal-content.php',
    success: function(data){
        $('.c-modale' + id + ' div[data-content]').html(data);
        $(`.c-modale.show .c-modale__tab--item`).each(function(i,el){
          if ( i==0 ) {
            $(this).addClass("active");
          }
        })
        var activeTab = $(`.c-modale.show .c-modale__tab--item.active`).attr("data-tab");
        $(`.c-modale.show div[class*="c-modsection"]`).each(function(e){
          var sliderattr = $(this).attr("data-value");
          if ( sliderattr == activeTab ) {
            $(this).addClass("open");
          }
          else {
            $(this).removeClass("open");
          }
        });
         Swiper.use([EffectFade, Navigation, Pagination, Autoplay, FreeMode, Mousewheel, EffectCoverflow]);

         const swiper1 = new Swiper('.swiper1', {
          speed: 600,
          spaceBetween: 16,
          slidesPerView: 1,
          allowTouchMove: true,
          loop: true,
          effect: "coverflow",
          navigation: {
            nextEl: ".modimg-swiper-button-next",
            prevEl: ".modimg-swiper-button-prev"
          },
          breakpoints: {
            992: {
              centeredSlides: true,
              loop: true,
              spaceBetween: 16,
              effect: "coverflow",
              grabCursor: true,
              slidesPerView: "auto",
              coverflowEffect: {
                  rotate: 0,
                  stretch: 180,
                  depth: 200,
                  modifier: 1,
                  slideShadows: false,
                  spaceBetween: 0
              }
            }
          },
          on: {
            beforeInit: function(){
              let numOfSlides = this.wrapperEl.querySelectorAll(".swiper-slide").length;
              $("#allSlides").text(numOfSlides);
              },
            slideChange: function(){
              var currentSlide = this.realIndex + 1;
              var slide = this.slides[this.realIndex];
              var currentSlideTitle = "";
              if ( slide != undefined ) {
                currentSlideTitle = slide.querySelector("img").getAttribute("alt");
              }
              else {
               currentSlideTitle = this.el.querySelector("img").getAttribute("title");
              }
              console.log(slide);
              console.log(currentSlideTitle);
              // var currentSlideTitle = $(".swiper-slide.swiper-slide-next[data-image]").find("img").attr("title");
              $("#currentSlide").text(currentSlide);
              $("#currentSlideName").text(currentSlideTitle);
            },
            init: function(){
              $("#currentSlide").text("1");
              var currentSlideTitle = this.el.querySelector("img").getAttribute("alt");
              $("#currentSlideName").text(currentSlideTitle);
            }
          }

        });

        const swiper2 = new Swiper('.swiper2', {
          freeMode: true,
          loop: false,
          centeredSlides: false,
          speed: 600,
          spaceBetween: 16,
          slidesPerView: 1,
          allowTouchMove: true,
          breakpoints: {
            650: {
              slidesPerView: 2,
              spaceBetween: 16
            },
            992: {
              slidesPerView: 4,
              spaceBetween: 16
            }
          }
        });

         $("[data-planimetria-form]").each(function(e){
          var form_select = $(this).find("[name=planimetria]");
          form_select.change(function(){
          var activeId = $(this).find("option:selected").attr("data-option-id");
            $(`.c-modsection4__img--item`).each(function(e){
              var sliderattr = $(this).attr("data-planimetria-id");
              if ( sliderattr == activeId ) {
                $(this).addClass("active");
              }
              else {
                $(this).removeClass("active");
              }
            });
          });

        });

        $("[data-lotto-id]").click(function(){
          event.preventDefault();
          var lottoId = $(this).attr("data-lotto-id");

          $(`.c-modale__tab--item.active`).removeClass('active');
          $(`.c-modale__tab--item[data-tab="Sezione_Planimetria"]`).addClass('active');

          var activeTab = $(`.c-modale__tab--item.active`).attr("data-tab");
        $(`div[class*="c-modsection"]`).each(function(e){
          var sliderattr = $(this).attr("data-value");
          if ( sliderattr == activeTab ) {
            $(this).addClass("open");
          }
          else {
            $(this).removeClass("open");
          }
        });

          $(".c-modale.show [data-planimetria-form]").each(function(e){
            var form_select = $(this).find("[name=planimetria]");
            form_select.find("option").each(function(e) {
              var activeTab = $(this).attr("data-option-id");
              if ( lottoId == activeTab ) {
                $(this).prop("selected",true);
                var activeId = activeTab;
                $(`.c-modale.show .c-modsection4__img--item`).each(function(e){
                  var sliderattr = $(this).attr("data-planimetria-id");
                  console.log(sliderattr);
                  console.log(activeId);
                  if ( sliderattr == activeId ) {
                    $(this).addClass("active");
                  }
                  else {
                    $(this).removeClass("active");
                  }
                });
              }
            });
          });
        });

        $(".c-modale.show a[data-bs-dismiss]").on('click',function(e){
          $(`.c-modale__tab--item.active`).removeClass('active');
          $('.c-modale div[data-content]').html("");
        })
    }
});

});


});
