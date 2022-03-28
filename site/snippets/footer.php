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
        loop: true,
      });

      var swiper = new Swiper(".mySwiperHome", {
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        autoplay: {
        delay: 2500,
        disableOnInteraction: false,
        },
        centeredSlides: true,
        loop: true,
      });
    </script>

    <?= js('assets/js/main.js') ?>

  </body>
</html>
