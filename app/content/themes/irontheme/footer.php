  </div><!-- /.content -->

  <footer class="footer" id="contact">
    <div class="container">
      <div class="footer__col footer__col--1">
        <a href="#" class="footer__term modal-term_open">Политика конфиденциальности</a>

        <?php if (get_field( 'email', 'option' )): ?>
          <a href="mailto:<?php the_field( 'email', 'option' ); ?>" class="small-contact small-contact--email">
            <?php ith_the_icon( 'arroba-sign' ); ?>
            <?php the_field( 'email', 'option' ); ?>
          </a>
        <?php endif; ?>
      </div>

      <div class="footer__col footer__col--2">
        <div class="logo footer__logo">
          <a href="<?php echo home_url( '/' ); ?>" class="logo__link">СБ-365</a>
          <p class="logo__descr">Обеспечение <br>безопасности <br>бизнеса</p>
        </div>
      </div>

      <div class="footer__col footer__col--3">
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

        <p class="city footer__city">г.Москва</p>
      </div>
    </div>

    <p class="dev"><a href="">Сделано в bestslide.pro</a></p>

  </footer><!-- #colophon -->

</div><!-- /.wrapper -->

  <div id="consultation-modal" class="modal">
    <button type="button" class="modal__close consultation-modal_close"></button>

    <h3 class="modal__title">Получить бесплатную консультацию</h3>

    <div class="modal__content">
	    <?php echo do_shortcode( '[contact-form-7 id="5" title="Получить бесплатную консультацию"]' ); ?>
    </div>

  </div>

  <div id="modal-term" class="modal">
    <button type="button" class="modal__close modal-term_close"></button>

    <h3 class="modal__title">Политика конфиденциальности</h3>

    <div class="modal__content">

      <?php $post = get_post(3);
      echo apply_filters( 'content', $post->post_content ); ?>

    </div>

  </div>

  <svg style="position: absolute; z-index: -100; height: 1px; width: 1px;">
    <defs>
      <linearGradient id="gradient" x1="0" y1="0%" x2="0" y2="100%">
        <stop offset="0%" style="stop-color: #EB862C"></stop>
        <stop offset="100%" style="stop-color: #E35930"></stop>
      </linearGradient>
    </defs>
  </svg>

<?php wp_footer(); ?>

</body>
</html>
