<?php
get_header();
?>
<main>
  <section class="hero">
    <div class="wrap hero-content">
      <h1>Obraz opowiada<br>Dźwięk przekonuje</h1>
      <p>Profesjonalna postprodukcja dźwięku<br>dla twórców filmowych i marek</p>

      <a class="button gradient-box" href="#kontakt">Porozmawiajmy o projekcie</a>
      <div class="clients" aria-label="Wybrani klienci">
          <img
              src="<?= esc_url(get_template_directory_uri() . '/assets/images/clients/logo 3.webp'); ?>"
              alt=""
              aria-hidden="true"
          >
          <img
              src="<?= esc_url(get_template_directory_uri() . '/assets/images/clients/logo 4.svg'); ?>"
              alt=""
              aria-hidden="true"
          >
          <img
              src="<?= esc_url(get_template_directory_uri() . '/assets/images/clients/logo 5.webp'); ?>"
              alt=""
              aria-hidden="true"
          >
          <img
              src="<?= esc_url(get_template_directory_uri() . '/assets/images/clients/logo 6.svg'); ?>"
              alt=""
              aria-hidden="true"
          >
          <img
              src="<?= esc_url(get_template_directory_uri() . '/assets/images/clients/logo 7.webp'); ?>"
              alt=""
              aria-hidden="true"
          >
      </div>
    </div>
  </section>
  <section class="mosaic" aria-label="Kadry z pracy na planie">
    <div class="tile t1">
      <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/mosaic/left-1.png'); ?>" alt="" loading="lazy" decoding="async">
    </div>
    <div class="tile t2">
      <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/mosaic/middle-1.png'); ?>" alt="" loading="lazy" decoding="async">
    </div>
    <div class="tile t3">
      <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/mosaic/right-1.png'); ?>" alt="" loading="lazy" decoding="async">
    </div>
    <div class="tile t4">
      <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/mosaic/left-2.png'); ?>" alt="" loading="lazy" decoding="async">
    </div>
    <div class="tile t5">
      <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/mosaic/middle-2.png'); ?>" alt="" loading="lazy" decoding="async">
    </div>
    <div class="tile t6">
      <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/mosaic/right-2.png'); ?>" alt="" loading="lazy" decoding="async">
    </div>
    <div class="tile t7">
      <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/mosaic/left-3.png'); ?>" alt="" loading="lazy" decoding="async">
    </div>
    <div class="tile t8">
      <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/mosaic/middle-3.png'); ?>" alt="" loading="lazy" decoding="async">
    </div>
    <div class="tile t9">
      <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/mosaic/right-3.png'); ?>" alt="" loading="lazy" decoding="async">
    </div>
  </section>
  <section class="statement">
    <div class="statement-track">
        <span>Widz decyduje w kilka sekund:<br>zostać albo kliknąć dalej</span>
        <span class="middle">Obraz wprowadza<br><b class="green">Dźwięk wciąga</b></span>
        <span>W reklamie liczy się każda sekunda<br><b class="green">Dobry dźwięk</b> wykorzystuje każdą z nich</span>
    </div>
  </section>
  <section class="content-block">
    <div class="wrap">

    <?php get_template_part('parts/carousel', args: ['id' => 'kim-jestem']) ?>

    <?php get_template_part('parts/carousel', args: ['id' => 'jak-pracuje']) ?>

    </div>
  </section>

<section class="statement">
    <div class="statement-track">
        <span>Dźwięk imersyjny sprawia,<br>że historia staje się <b class="green">doświadczeniem</b></span>
        <span class="middle">To, czego nie widać w obrazie,<br>często <b class="green">słychać w dźwięku</b></span>
        <span>Dźwięk buduje<br>wiarygodność obrazu</span>
    </div>
</section>

  <section class="content-block">
    <div class="wrap">

    <?php get_template_part('parts/carousel', args: ['id' => 'co-robie']) ?>

    <?php get_template_part('parts/carousel', args: ['id' => 'mix']) ?>

    </div>
  </section>
  <section id="przed-i-po" class="portfolio">
    <div class="wrap">
      <h2 class="eyebrow">Przed i po</h2>
      <div class="portfolio-grid">
        <div>
          <p>Posłuchaj transformacji surowego nagrania w dopracowany materiał. Każdy projekt wymaga indywidualnego podejścia.</p>
          <ol class="projects">
            <li class="active">01 &nbsp; Dźwięk surowy i finalny miks</li>
            <li>02 &nbsp; Dialog przed i po czyszczeniu</li>
            <li>03 &nbsp; Atmosfera planu filmowego</li>
            <li>04 &nbsp; Efekty i przestrzeń</li>
          </ol>
        </div>
        <div>
          <div class="player">
            <b class="player-title">Przed</b>
            <div class="player-row">
                <img
                    src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/sample.svg'); ?>"
                    alt=""
                    aria-hidden="true"
                >
            </div>
          </div>
          <div class="player">
            <b class="player-title">Po</b>
            <div class="player-row">
                <img
                    src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/sample.svg'); ?>"
                    alt=""
                    aria-hidden="true"
                >
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="kontakt" class="contact">
    <div class="wrap contact-inner">
      <h2>Porozmawiajmy</h2>
      <div class="contact-box gradient-box">Zachęcam do kontaktu. Porozmawiajmy o materiale,
          który już masz, o problemach z dźwiękiem
          albo o
          planach związanych z produkcją filmu. Nawet jeśli
          ostatecznie nie zdecydujesz się na współpracę,
          chętnie podzielę się doświadczeniem, doradzę i
          pomogę znaleźć dobre rozwiązanie.<br>
      </div>
        <a class="button button-border" href="#" data-toggle="modal" data-target="#modal-contact">Porozmawiajmy o projekcie</a>
      <div class="person">
        <strong>Krzysztof Bąk</strong>
        <a class="person-link" href="tel:+48601234927">
          <img
            class="person-link-icon"
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/contact.svg'); ?>"
            alt=""
            aria-hidden="true"
          >
          <span>+48 601 234 927 <span class="contact-separator"></span> +48 501 555 307</span>
        </a>
        <a class="person-link" href="mailto:k.bak@dzwiekwfilmie.pl">
          <img
            class="person-link-icon"
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/Envelope.svg'); ?>"
            alt=""
            aria-hidden="true"
          >
          <span>k.bak@dzwiekwfilmie.pl</span>
        </a>
      </div>
      <div class="socials">
        <a href="#" aria-label="Facebook">
            <img
                class="social-link-icon"
                src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/ic_baseline-facebook.svg'); ?>"
                alt=""
                aria-hidden="true"
            >
        </a>
          <span class="contact-separator"></span>
        <a href="#" aria-label="Instagram">
            <img
                class="social-link-icon"
                src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/InstagramLogo.svg'); ?>"
                alt=""
                aria-hidden="true"
            >
        </a>
      </div>
    </div>

  </section>
</main>
<?php get_footer(); ?>
