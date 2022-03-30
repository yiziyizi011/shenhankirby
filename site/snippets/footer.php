<!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        centeredSlides: true,
        keyboard: {
          enabled: true,
        },
        on: {
              slideChangeTransitionStart: function () {
                  // Slide captions
                  var swiper = this;
                  var slideInfo = $(swiper.slides[swiper.activeIndex]).attr("data-info");
                  console.log(slideInfo);
                  $("#info2").first().html(function() {
                    return slideInfo;
                  });
              }
            }
      });

      var swiper = new Swiper(".mySwiperHome", {
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        keyboard: {
          enabled: true,
        },
        autoplay: {
        delay: 2500,
        disableOnInteraction: false,
        },
        centeredSlides: true,
        loop: true,
        on: {
              slideChangeTransitionStart: function () {
                  // Slide captions
                  var swiper = this;
                  var slideInfo = $(swiper.slides[swiper.activeIndex]).attr("data-info");
                  console.log(slideInfo);
                  $("#info1").first().html(function() {
                    return slideInfo;
                  });
              }
            }
      });


    </script>

    <?= js('assets/js/main.js') ?>

  </body>
</html>
