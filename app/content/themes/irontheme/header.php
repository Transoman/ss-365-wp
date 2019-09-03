<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="format-detection" content="telephone=no">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script>
  <![endif]-->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="wrapper">
  <header class="header">
    <div class="header__top">
      <div class="container">

        <div class="header__col header__col--phone">
          <?php if (get_field('phone', 'option')): ?>
            <a href="tel:<?php echo preg_replace( '![^0-9/+]+!', '', get_field('phone', 'option' )); ?>"><?php the_field('phone', 'option'); ?></a>
          <?php endif; ?>
        </div>

        <div class="header__col header__col--logo">
          <div class="logo header__logo">
            <a href="<?php echo home_url( '/' ); ?>" class="logo__link">С<span>лужба </span>Б<span>езопасности</span>-365</a>
            <p class="logo__descr">Обеспечение <br>безопасности <br>бизнеса</p>
          </div>
        </div>

        <div class="header__col header__col--city">
          <p class="city header__city">г.Москва</p>
        </div>

        <button type="button" class="nav-toggle">
          <span class="nav-toggle__line"></span>
        </button>

      </div>
    </div><!-- /.header__top -->

    <div class="header__bottom">
      <div class="container">
        <nav class="nav header__nav">
          <ul class="nav-list">
            <li><a href="#ally">Защитим от…</a></li>
            <li><a href="#about">Компания</a></li>
            <li><a href="#competence">Услуги</a></li>
            <li><a href="#portfolio">Примеры</a></li>
            <li><a href="#how-work">Схема работы</a></li>
            <li><a href="#contact">Контакты</a></li>
          </ul>

          <div class="nav-contact">
			      <?php if (get_field( 'email', 'option' )): ?>
              <a href="mailto:<?php the_field( 'email', 'option' ); ?>" class="small-contact small-contact--email">
					      <?php ith_the_icon( 'arroba-sign' ); ?>
					      <?php the_field( 'email', 'option' ); ?>
              </a>
			      <?php endif; ?>

			      <?php if (get_field( 'site_url', 'option' )): ?>
              <a href="<?php echo esc_url( get_field( 'site_url', 'option' ) ); ?>" class="small-contact small-contact--site">
					      <?php ith_the_icon( 'global' ); ?>
					      <?php echo preg_replace( '!^https?:\/\/!', '', get_field( 'site_url', 'option' ) ); ?>
              </a>
			      <?php endif; ?>

			      <?php if (get_field( 'phone', 'option' )): ?>
              <a href="tel:<?php echo preg_replace( '![^0-9/+]+!', '', get_field( 'phone', 'option' ) ); ?>" class="small-contact small-contact--phone">
					      <?php ith_the_icon( 'call-answer' ); ?>
					      <?php the_field( 'phone', 'option' ); ?>
              </a>
			      <?php endif; ?>
          </div>

        </nav>

        <div class="nav-overlay"></div>
      </div>
    </div>

  </header><!-- /.header-->

  <div class="content">