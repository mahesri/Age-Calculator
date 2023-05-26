<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Testimoni Swipe</title>
    <style>
      body {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
      }

      #testimonials-container {
        display: flex;
        overflow-x: auto;
        scroll-snap-type: x mandatory;
        -webkit-overflow-scrolling: touch; /* Untuk mendukung scroll di iOS */
        justify-content: center; /* Agar testimonial di tengah */
      }

      .testimonial {
        flex: 0 0 100%;
        scroll-snap-align: center;
        transform: translateX(0); /* Awalnya posisinya di tengah */
        transition: transform 0.3s ease-out;
        padding: 1rem;
        box-sizing: border-box;
        text-align: center; /* Agar teks di tengah */
      }

      /* Animasi saat dihover atau dishow */
      .testimonial:hover,
      .testimonial:focus-within,
      .testimonial:active {
        transform: translateX(-20%);
      }

      /* Atur ukuran container pada layar kecil */
      @media (max-width: 768px) {
        .testimonial {
          flex: 0 0 80%;
        }
      }
    </style>
  </head>
  <body>
    <div id="testimonials-container">
      <div class="testimonial">
        <p>Keren. layanannya.pertama nihh di Indo ada web kek gini <br> <em>Mahesta Riyadi P</em> </p>
      </div>
      <div class="testimonial">
        <p>Talentnya ramah-ramah <br> <em>Yuni</em> </p>
      </div>
      <div class="testimonial">
      <p>Bagus layananya <br> <em>Andi R</em> </p>
      </div>
      <div class="testimonial">
      <p>Nggak ada duanya<br> <em>Niken</em></em> </p>
      </div>
      <div class="testimonial">
      <p>Keren kak. boleh dicoba, pertama kali di Indo<br> <em>NOvita</em> </p>
      </div>
    </div>
  </body>
</html>
