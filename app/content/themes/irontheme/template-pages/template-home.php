<?php
/**
 * Template Name: Главная
 */
get_header(); ?>

	<section class="hero">
		<div class="container">
      <div class="row">

        <div class="col-lg-7">
          <div class="hero__content">
            <span class="hero__subtitle">Аутсорсинг службы безопасности:</span>
            <h1>круглосуточно <br>365 дней в году <br>в любой точке страны</h1>

            <a href="#" class="link hero__link consultation-modal_open">Узнать подробнее</a>
          </div>
        </div>

        <div class="col-lg-5">
          <div class="hero__form-wrap">
            <h3>Получить бесплатную консультацию</h3>
            <?php echo do_shortcode( '[contact-form-7 id="5" title="Получить бесплатную консультацию"]' ); ?>
          </div>
        </div>

      </div>

    </div>
	</section>

  <section class="advantages">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="advantages-item">
            <div class="advantages-item__icon"><?php ith_the_icon( 'save-money' )?></div>
            <div class="advantages-item__content">
              <h3>Сохраняем</h3>
              <p>миллионы рублей</p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="advantages-item">
            <div class="advantages-item__icon"><?php ith_the_icon( 'team' )?></div>
            <div class="advantages-item__content">
              <h3>Команда</h3>
              <p>опытных профессионалов</p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="advantages-item">
            <div class="advantages-item__icon"><?php ith_the_icon( 'respect' )?></div>
            <div class="advantages-item__content">
              <h3>Спасаем</h3>
              <p>репутацию</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="statistic">
    <div class="container">

      <div class="section-header">
        <h2 class="section-title">Не потерять заработанное</h2>
        <p>Что говорит статистика об угрозах, с которыми  сталкивается сегодня любой руководитель:</p>
      </div>

      <div class="row statistic__row">
        <div class="col-lg-4">
          <div class="statistic__img">
            <img src="<?php echo THEME_URL; ?>/images/content/statistic-img.jpg" alt="">
          </div>
        </div>

        <div class="col-lg-8">

          <div class="row">
            <div class="col-lg-6">
              <div class="statistic-item">
                <div class="statistic-item__number">66%</div>
                <div class="statistic-item__content">
                  <p>из числа опрошенных российских компаний стали жертвами экономических преступлений в 2018 году, 46% ― в 2016. Прирост числа пострадавших за 2 года составил 20%
                  </p>
                  <span class="statistic-item__source">(PwC)</span>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="statistic-item">
                <div class="statistic-item__number">50%+</div>
                <div class="statistic-item__content">
                  <p>опрошенных работников коммерческих компаний хотя бы 1 раз были свидетелями коррупционных действий</p>
                  <span class="statistic-item__source">(Headhunter.ru)</span>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="statistic-item">
                <div class="statistic-item__number">5%</div>
                <div class="statistic-item__content">
                  <p>годового оборота теряют в год коммерческие компании в результате корпоративного мошенничества</p>
                  <span class="statistic-item__source">(Association of Certified Fraud Examiners)</span>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="statistic-item">
                <div class="statistic-item__number">50%+</div>
                <div class="statistic-item__content">
                  <p>преступлений против бизнеса совершаются с участием сотрудников компаний</p>
                  <span class="statistic-item__source">(http://crimestat.ru)</span>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="statistic-item">
                <div class="statistic-item__number">33%</div>
                <div class="statistic-item__content">
                  <p>сотрудников отделов продаж готовы взять «откат»</p>
                  <span class="statistic-item__source">(Headhunter.ru) </span>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>

      <p class="section-descr">Российская Торгово-Промышленная палата рекомендует собственникам и топ-менеджерам коммерческих фирм трезво оценивать бизнес-риски, связанные с корпоративным мошенничеством. Мы с этим полностью согласны.</p>

    </div>
  </section>

  <section class="ally" id="ally">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">Компания «СБ-365» ― ваш союзник в борьбе против:</h2>
      </div>

      <div class="row ally__row">
        <div class="col-lg-8">
          <div class="row">
            <div class="col-lg-6">
              <ul class="ally-list">
                <li>Краж, ограблений, разбойных нападений</li>
                <li>Мошеннических  действий клиентов, контрагентов и сотрудников</li>
                <li>Хищения и продажи конфиденциальной <br>информации</li>
                <li>Острых конфликтных ситуаций внутри коллектива</li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul class="ally-list">
                <li>Коммерческого подкупа сотрудников и злоупотребления полномочиями</li>
                <li>Противоправных действий сотрудников правоохранительных и контролирующих органов</li>
                <li>Рейдерских захватов и недружественных поглощений бизнеса</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="ally__img">
            <img src="<?php echo THEME_URL; ?>/images/content/ally-img.jpg" alt="">
          </div>
        </div>
      </div>

      <p class="section-descr">Иногда всего один инцидент в сфере безопасности способен разрушить бизнес</p>

    </div>
  </section>

  <section class="competence" id="competence">
    <div class="container">

      <div class="section-header">
        <h2 class="section-title">В нашей компетенции:</h2>
      </div>

      <div class="row">
        <div class="col-md-6">

          <div class="competence__col">

            <div class="competence-item">
              <div class="competence-item__icon-wrap">
                <?php ith_the_icon( 'job', 'competence-item__icon' ); ?>
                <svg viewBox="0 0 70 70" class="competence-item__icon-circle">
                  <circle r="34" cx="35" cy="35"></circle>
                </svg>
              </div>
              <div class="competence-item__content">
                <h3>Проверка кандидатов</h3>
                <p>при приеме на работу</p>
              </div>
            </div>

            <div class="competence-item">
              <div class="competence-item__icon-wrap">
                <?php ith_the_icon( 'businessman', 'competence-item__icon' ); ?>
                <svg viewBox="0 0 70 70" class="competence-item__icon-circle">
                  <circle r="34" cx="35" cy="35"></circle>
                </svg>
              </div>
              <div class="competence-item__content">
                <h3>Проверка лояльности</h3>
                <p>действующих отрудников (гласная/негласная)</p>
              </div>
            </div>

            <div class="competence-item">
              <div class="competence-item__icon-wrap">
                <?php ith_the_icon( 'detective', 'competence-item__icon' ); ?>
                <svg viewBox="0 0 70 70" class="competence-item__icon-circle">
                  <circle r="34" cx="35" cy="35"></circle>
                </svg>
              </div>
              <div class="competence-item__content">
                <h3>Внутрикорпоративные <br>расследования</h3>
              </div>
            </div>

            <div class="competence-item">
              <div class="competence-item__icon-wrap">
                <?php ith_the_icon( 'box', 'competence-item__icon' ); ?>
                <svg viewBox="0 0 70 70" class="competence-item__icon-circle">
                  <circle r="34" cx="35" cy="35"></circle>
                </svg>
              </div>
              <div class="competence-item__content">
                <h3>Участие в инвентаризациях <br>и ревизиях</h3>
              </div>
            </div>

            <div class="competence-item">
              <div class="competence-item__icon-wrap">
                <?php ith_the_icon( 'tasks', 'competence-item__icon' ); ?>
                <svg viewBox="0 0 70 70" class="competence-item__icon-circle">
                  <circle r="34" cx="35" cy="35"></circle>
                </svg>
              </div>
              <div class="competence-item__content">
                <h3>Аудит бизнес-процессов</h3>
                <p>на предмет их защищенности от мошенничества <br>и коррупционных угроз</p>
              </div>
            </div>

            <div class="competence-item">
              <div class="competence-item__icon-wrap">
                <?php ith_the_icon( 'clock', 'competence-item__icon' ); ?>
                <svg viewBox="0 0 70 70" class="competence-item__icon-circle">
                  <circle r="34" cx="35" cy="35"></circle>
                </svg>
              </div>
              <div class="competence-item__content">
                <h3>Разработка системы</h3>
                <p>физической безопасности и режимных мер</p>
              </div>
            </div>

            <div class="competence-item">
              <div class="competence-item__icon-wrap">
                <?php ith_the_icon( 'exit', 'competence-item__icon' ); ?>
                <svg viewBox="0 0 70 70" class="competence-item__icon-circle">
                  <circle r="34" cx="35" cy="35"></circle>
                </svg>
              </div>
              <div class="competence-item__content">
                <h3>Тренинги/обучение сотрудников</h3>
                <p>действиям при ЧС</p>
              </div>
            </div>

          </div><!-- /.competence__col -->

        </div>
        <div class="col-md-6">

          <div class="competence__col">

            <div class="competence-item">
              <div class="competence-item__icon-wrap">
                <?php ith_the_icon( 'mute', 'competence-item__icon' ); ?>
                <svg viewBox="0 0 70 70" class="competence-item__icon-circle">
                  <circle r="34" cx="35" cy="35"></circle>
                </svg>
              </div>
              <div class="competence-item__content">
                <h3>Организация/внедрение режима</h3>
                <p>коммерческой тайны</p>
              </div>
            </div>

            <div class="competence-item">
              <div class="competence-item__icon-wrap">
                <?php ith_the_icon( 'search', 'competence-item__icon' ); ?>
                <svg viewBox="0 0 70 70" class="competence-item__icon-circle">
                  <circle r="34" cx="35" cy="35"></circle>
                </svg>
              </div>
              <div class="competence-item__content">
                <h3>Изучение</h3>
                <p>контрагентов, партнеров, конкурентов</p>
              </div>
            </div>

            <div class="competence-item">
              <div class="competence-item__icon-wrap">
                <?php ith_the_icon( 'policeman', 'competence-item__icon' ); ?>
                <svg viewBox="0 0 70 70" class="competence-item__icon-circle">
                  <circle r="34" cx="35" cy="35"></circle>
                </svg>
              </div>
              <div class="competence-item__content">
                <h3>Взаимодействие</h3>
                <p>с правоохранительными органами</p>
              </div>
            </div>

            <div class="competence-item">
              <div class="competence-item__icon-wrap">
                <?php ith_the_icon( 'cardio', 'competence-item__icon' ); ?>
                <svg viewBox="0 0 70 70" class="competence-item__icon-circle">
                  <circle r="34" cx="35" cy="35"></circle>
                </svg>
              </div>
              <div class="competence-item__content">
                <h3>Тестирование сотрудников</h3>
                <p>с применением полиграфа</p>
              </div>
            </div>

            <div class="competence-item">
              <div class="competence-item__icon-wrap">
                <?php ith_the_icon( 'consultation', 'competence-item__icon' ); ?>
                <svg viewBox="0 0 70 70" class="competence-item__icon-circle">
                  <circle r="34" cx="35" cy="35"></circle>
                </svg>
              </div>
              <div class="competence-item__content">
                <h3>Организация/проведение <br>независимых экспертиз</h3>
              </div>
            </div>

            <div class="competence-item">
              <div class="competence-item__icon-wrap">
                <?php ith_the_icon( 'conversation', 'competence-item__icon' ); ?>
                <svg viewBox="0 0 70 70" class="competence-item__icon-circle">
                  <circle r="34" cx="35" cy="35"></circle>
                </svg>
              </div>
              <div class="competence-item__content">
                <h3>Проведение переговоров</h3>
                <p>для урегулирования конфликтов</p>
              </div>
            </div>

            <div class="competence-item">
              <div class="competence-item__icon-wrap">
                <?php ith_the_icon( 'research', 'competence-item__icon' ); ?>
                <svg viewBox="0 0 70 70" class="competence-item__icon-circle">
                  <circle r="34" cx="35" cy="35"></circle>
                </svg>
              </div>
              <div class="competence-item__content">
                <h3>Иные, не запрещенные законодательством мероприятия</h3>
              </div>
            </div>

          </div><!-- /.competence__col -->

        </div>
      </div>

    </div>
  </section>

  <section class="s-consultation">
    <div class="container">
      <div class="s-consultation__container">
        <div class="section-header">
          <h2 class="section-title">Получить бесплатную консультацию</h2>
        </div>

        <div class="s-consultation__wrap">
					<?php echo do_shortcode('[contact-form-7 id="13" title="Получить бесплатную консультацию 2"]'); ?>
        </div>
      </div>
    </div>
  </section>

  <section class="about" id="about">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">Доверьте безопасность Вашего бизнеса команде «СБ – 365»</h2>
        <p>Каждый из нас имеет многолетний опыт работы в силовых, правоохранительных структурах по линиям экономической <br>безопасности, борьбы с коррупцией, уголовного розыска.</p>
      </div>

      <div class="row">
        <div class="col-lg-6 col-xl-5">
          <div class="about__content">
            <p>Имеется обширный опыт реорганизации <br>и построения «с нуля» систем безопасности <br>в коммерческих и государственных организациях
              <br>в таких отраслях, как:</p>
          </div>
        </div>
        <div class="col-lg-6 col-xl-7">
          <ul class="ally-list">
            <li>торговля драгоценными камнями и ювелирными изделиями</li>
            <li>производство ювелирных украшений</li>
            <li>микрофинансирование и деятельность ломбардов</li>
            <li>банковская деятельность</li>
            <li>страхование</li>
            <li>инкассация и перевозка ценностей</li>
            <li>охрана объектов любой сложности</li>
          </ul>
        </div>
      </div>

    </div>
  </section>

  <section class="region">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">География нашей работы ― вся Россия</h2>
        <p>Приедем в любой регион или подберем проверенных исполнителей из числа наших партнеров</p>
      </div>
      
      <div class="region__map">
        <img src="<?php echo THEME_URL; ?>/images/content/map.png" alt="">
      </div>

    </div>
  </section>

  <section class="how-work" id="how-work">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">Как мы работаем</h2>
      </div>

      <div class="how-work-list">

        <div class="how-work-list__item">
          <div class="how-work-list__icon-wrap">
            <?php ith_the_icon( 'hw-1', 'how-work-list__icon' ); ?>
            <svg viewBox="0 0 70 70" class="how-work-list__icon-circle">
              <circle r="34" cx="35" cy="35"></circle>
            </svg>
            <span class="how-work-list__number">01</span>
          </div>
          <div class="how-work-list__content">
            <h3>Получаем заявку</h3>
            <p>на сотрудничество</p>
          </div>
        </div>

        <div class="how-work-list__item">
          <div class="how-work-list__icon-wrap">
            <?php ith_the_icon( 'hw-2', 'how-work-list__icon' ); ?>
            <svg viewBox="0 0 70 70" class="how-work-list__icon-circle">
              <circle r="34" cx="35" cy="35"></circle>
            </svg>
            <span class="how-work-list__number">02</span>
          </div>
          <div class="how-work-list__content">
            <h3>Определяем задачи,</h3>
            <p>бюджет и сроки, заключаем договор</p>
          </div>
        </div>

        <div class="how-work-list__item">
          <div class="how-work-list__icon-wrap">
            <?php ith_the_icon( 'hw-3', 'how-work-list__icon' ); ?>
            <svg viewBox="0 0 70 70" class="how-work-list__icon-circle">
              <circle r="34" cx="35" cy="35"></circle>
            </svg>
            <span class="how-work-list__number">03</span>
          </div>
          <div class="how-work-list__content">
            <h3>Назначаем персонального менеджера</h3>
            <p>консультируем Вас в онлайн-режиме 24/365</p>
          </div>
        </div>

        <div class="how-work-list__item">
          <div class="how-work-list__icon-wrap">
            <?php ith_the_icon( 'hw-4', 'how-work-list__icon' ); ?>
            <svg viewBox="0 0 70 70" class="how-work-list__icon-circle">
              <circle r="34" cx="35" cy="35"></circle>
            </svg>
            <span class="how-work-list__number">04</span>
          </div>
          <div class="how-work-list__content">
            <h3>Командируем сотрудника «СБ-365»</h3>
            <p>в Вашу компанию (опционально)</p>
          </div>
        </div>

        <div class="how-work-list__item">
          <div class="how-work-list__icon-wrap">
            <?php ith_the_icon( 'tasks', 'how-work-list__icon' ); ?>
            <svg viewBox="0 0 70 70" class="how-work-list__icon-circle">
              <circle r="34" cx="35" cy="35"></circle>
            </svg>
            <span class="how-work-list__number">05</span>
          </div>
          <div class="how-work-list__content">
            <h3>Проводим аудит</h3>
            <p>действующих мер/систем безопаcности</p>
          </div>
        </div>

        <div class="how-work-list__item">
          <div class="how-work-list__icon-wrap">
            <?php ith_the_icon( 'hw-6', 'how-work-list__icon' ); ?>
            <svg viewBox="0 0 70 70" class="how-work-list__icon-circle">
              <circle r="34" cx="35" cy="35"></circle>
            </svg>
            <span class="how-work-list__number">06</span>
          </div>
          <div class="how-work-list__content">
            <h3>Очно/удаленно интервьюируем</h3>
            <p>соискателей и сотрудников</p>
          </div>
        </div>

        <div class="how-work-list__item">
          <div class="how-work-list__icon-wrap">
            <?php ith_the_icon( 'hw-7', 'how-work-list__icon' ); ?>
            <svg viewBox="0 0 70 70" class="how-work-list__icon-circle">
              <circle r="34" cx="35" cy="35"></circle>
            </svg>
            <span class="how-work-list__number">07</span>
          </div>
          <div class="how-work-list__content">
            <h3>Оперативно выезжаем</h3>
            <p>к месту ЧС (опционально)</p>
          </div>
        </div>

        <div class="how-work-list__item">
          <div class="how-work-list__icon-wrap">
            <?php ith_the_icon( 'hw-8', 'how-work-list__icon' ); ?>
            <svg viewBox="0 0 70 70" class="how-work-list__icon-circle">
              <circle r="34" cx="35" cy="35"></circle>
            </svg>
            <span class="how-work-list__number">08</span>
          </div>
          <div class="how-work-list__content">
            <h3>Создаем «горячую линию»</h3>
            <p>для борьбы с внутренним мошенничеством</p>
          </div>
        </div>

        <div class="how-work-list__item">
          <div class="how-work-list__icon-wrap">
            <?php ith_the_icon( 'detective', 'how-work-list__icon' ); ?>
            <svg viewBox="0 0 70 70" class="how-work-list__icon-circle">
              <circle r="34" cx="35" cy="35"></circle>
            </svg>
            <span class="how-work-list__number">09</span>
          </div>
          <div class="how-work-list__content">
            <h3>Участвуем в расследовании</h3>
            <p> уголовных дел в качестве Вашего представителя (опционально)</p>
          </div>
        </div>

      </div>

    </div>
  </section>

<?php $args = array(
  'post_type' => 'portfolio',
  'posts_per_page' => -1,
  'order' => 'ASC'
);

$query = new WP_Query( $args );

if ($query->have_posts()): ?>

  <section class="portfolio" id="portfolio">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">Примеры нашей работы</h2>
      </div>

      <div class="portfolio-slider swiper-container">
        <div class="swiper-wrapper">
          <?php while ( $query->have_posts() ): $query->the_post(); ?>
            <div class="portfolio-slider__item swiper-slide">
              <div class="portfolio-slider__img">
                <?php the_post_thumbnail( 'portfolio' ); ?>
              </div>
              <div class="portfolio-slider__info">

                <div class="portfolio-slider__info-item">
                  <div class="portfolio-slider__info-icon-wrap">
                    <?php ith_the_icon( 'employes', 'portfolio-slider__info-icon' ); ?>
                  </div>
                  <div class="portfolio-slider__info-content">
                    <span class="portfolio-slider__info-title">Заказчик:</span>
                    <?php the_field( 'customer' ); ?>
                  </div>
                </div>

                <div class="portfolio-slider__info-item">
                  <div class="portfolio-slider__info-icon-wrap">
                    <?php ith_the_icon( 'question', 'portfolio-slider__info-icon' ); ?>
                  </div>
                  <div class="portfolio-slider__info-content">
                    <span class="portfolio-slider__info-title">Проблема:</span>
                    <?php the_field( 'problem' ); ?>
                  </div>
                </div>

                <div class="portfolio-slider__info-item">
                  <div class="portfolio-slider__info-icon-wrap">
                    <?php ith_the_icon( 'profiles', 'portfolio-slider__info-icon' ); ?>
                  </div>
                  <div class="portfolio-slider__info-content">
                    <span class="portfolio-slider__info-title">Объем работ:</span>
                    <?php the_field( 'scope_work' ); ?>
                  </div>
                </div>

              </div>
            </div>
          <?php endwhile; wp_reset_postdata();  ?>
        </div>
        <div class="swiper-button-prev">
          <?php ith_the_icon( 'left-arrow' ); ?>
        </div>
        <div class="swiper-button-next">
          <?php ith_the_icon( 'right-arrow' ); ?>
        </div>
      </div>

    </div>
  </section>

<?php endif; ?>

  <section class="s-consultation">
    <div class="container">
      <div class="s-consultation__container">
        <div class="section-header">
          <h2 class="section-title">Получите чек-лист из __ вопросов для предварительной оценки уровня безопасности вашей компании</h2>
        </div>

        <div class="s-consultation__wrap">
					<?php echo do_shortcode('[contact-form-7 id="22" title="ЧЕК-ЛИСТ"]'); ?>
        </div>
      </div>
    </div>
  </section>

  <section class="outsourcing">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">Почему десятки компаний выбирают аутсорсинг службы безопасности от «СБ-365»</h2>
      </div>

      <div class="row">
        <div class="col-md-6 col-lg-4 col-xl-3">

          <div class="outsourcing-item">
            <div class="outsourcing-item__icon-wrap">
              <?php ith_the_icon( 'a-1', 'outsourcing-item__icon' ); ?>
              <span class="outsourcing-item__plus"></span>
            </div>

            <div class="outsourcing-item__content">
              <h3>+ Экономия</h3>
              <p>Аутсорсинг службы безопасности поможет сэкономить ФОТ, минимизировать отчисления в фонды. Вы будете оплачивать только реальный объем работ ― официально, с уменьшением налогооблагаемой базы</p>
            </div>
          </div>

        </div>

        <div class="col-md-6 col-lg-4 col-xl-3">

          <div class="outsourcing-item">
            <div class="outsourcing-item__icon-wrap">
              <?php ith_the_icon( 'a-2', 'outsourcing-item__icon' ); ?>
              <span class="outsourcing-item__plus"></span>
            </div>

            <div class="outsourcing-item__content">
              <h3>+ высоко-квалифицированный персонал</h3>
              <p>Независимые специалисты с большим опытом объективно оценят уровень обеспечения безопасности в вашей компании и лояльность сотрудников</p>
            </div>
          </div>

        </div>

        <div class="col-md-6 col-lg-4 col-xl-3">

          <div class="outsourcing-item">
            <div class="outsourcing-item__icon-wrap">
              <?php ith_the_icon( 'a-3', 'outsourcing-item__icon' ); ?>
              <span class="outsourcing-item__plus"></span>
            </div>

            <div class="outsourcing-item__content">
              <h3>+ Повышение уровня безопасности</h3>
              <p>Компания с узкой специализацией и широкими компетенциями поможет поднять уровень безопасности на новую высоту</p>
            </div>
          </div>

        </div>

        <div class="col-md-6 col-lg-4 col-xl-3">

          <div class="outsourcing-item">
            <div class="outsourcing-item__icon-wrap">
              <?php ith_the_icon( 'a-4', 'outsourcing-item__icon' ); ?>
              <span class="outsourcing-item__plus"></span>
            </div>

            <div class="outsourcing-item__content">
              <h3>+ Игра на опережение</h3>
              <p>Не только выявляем существующие угрозы, но и предупреждаем возможные</p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section>

  <section class="s-consultation s-consultation--2">
    <div class="container">
      <div class="s-consultation__container">
        <div class="section-header">
          <h2 class="section-title">Получить бесплатную консультацию</h2>
        </div>

        <div class="s-consultation__wrap">
					<?php echo do_shortcode('[contact-form-7 id="13" title="Получить бесплатную консультацию 2"]'); ?>
        </div>
      </div>
    </div>
  </section>

<?php get_footer();