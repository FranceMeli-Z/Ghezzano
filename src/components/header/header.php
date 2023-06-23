<?php /* <header>
    <div class="c-header res--1" data-js-component="Header">
        <div class="container-l container--res1 container--min-w1 gx-0">
            <div class="c-header__inner">
                <div class="c-header__row c-header__row--1 gx-0 row">
                    <div class="c-header__col c-header__col--1 col-6">
                        <?php if( !empty($view_args['wraph1']) ){ ?>
                        <h1>
                        <?php } ?>
                        <a href="<?php echo $view_args['logo_url']; ?>" title="<?php echo $view_args['logo_title']; ?>">
                            <img class="c-header__logo" src="<?php echo $view_args['logo_img_url']; ?>" width="361" height="68" alt="<?php echo $view_args['logo_title']; ?>">
                        </a>
                        <?php if( !empty($view_args['wraph1']) ){ ?>
                        </h1>
                        <?php } ?>
                    </div>
                    <div class="c-header__col c-header__col--2 col-6">
                        <div class="d-flex align-items-center justify-content-end h-100">
                            <div class="d-none d-sm-block w-60 w-lg-60 px-4 px-lg-0">
                                <form class="c-form w-100" method="GET" action="<?php echo $view_args['search_form_action_url']; ?>">
                                    <div class="c-form__field-wrap c-form__field-wrap--has-icon">
                                        <input placeholder="<?php echo $view_args['search_field_ph']; ?>" class="c-form__field c-form__field--type1 c-form__field--size-s w-100" type="text" name="s">
                                        <?php ZakiUIHelper::renderComponent("icon",array("icon" => "icon-search", "className" => "c-form__field-icon c-form__field-icon--sm c-form__field-icon--r c-typo-fs-6")); ?>
                                    </div>
                                </form>
                            </div>
                            <div class="w-20 w-lg-40 justify-content-end align-items-center d-flex">
                                <ul class="c-header__quick-links d-flex align-items-center">
                                    <li class="c-header__quick-links-item d-none d-lg-block">
                                        <a href="<?php echo $view_args['login_url']; ?>" title="<?php echo esc_attr($view_args['login_label']); ?>">
                                            <span class="mx-1"><?php echo $view_args['login_label']; ?></span>
                                            <?php ZakIUIHelper::renderComponent("icon", array("icon" => "icon-user", "className" => "c-icon--size-4")); ?>
                                        </a>
                                    </li>
                                    <li class="c-header__quick-links-item d-none d-lg-block">
                                        <a href="<?php echo $view_args['cart_url']; ?>" title="<?php echo esc_attr($view_args['cart_label']);?>">
                                            <span class="mx-1"><?php echo $view_args['cart_label'] ?></span>
                                            <?php ZakIUIHelper::renderComponent("icon", array("icon" => "icon-cart", "className" => "c-icon--size-4")); ?>
                                            <div class="c-header__badge c-header__badge--size-sm d-inline-block">
                                                <span><?php echo $view_args['cart_amount']; ?></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="c-header__quick-links-item d-block d-lg-none">
                                        <button data-offcanvas-trigger="offcanvas1" class="hamburger hamburger--spin" type="button">
                                            <span class="hamburger-box">
                                                <span class="hamburger-inner"></span>
                                            </span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if( !empty( $view_args['menu']) ){ ?>
                    <div class="c-header__row c-header__row--2 row">
                        <nav class="c-header__menu">
                            <ul>
                                <?php foreach( $view_args['menu'] as $menu_entry){ ?>
                                    <li class="c-header__menu-item">
                                        <span>
                                            <a href="<?php echo $menu_entry['url']; ?>" title="<?php echo $menu_entry['title']; ?>">
                                                <?php echo $menu_entry['title']; ?>
                                            </a>
                                        </span>
                                    </li>
                                <?php } ?>
                            </ul>
                        </nav>
                    </div>
                <?php } ?>
            </div>
            <!-- .c-header__inner -->
        </div>
        <!-- .container-* -->
    </div>
    <!-- .c-header -->
</header>
*/ ?>



<header class="c-header res--1" data-js-component="Header">
        <div class="c-header__inner">
          <div class="c-header__section"></div>
          <div class="c-header__content d-flex justify-content-between align-items-end zaux-theme--light1 position-relative">
            <div class="c-header__logo">
              <a href="home.html" title="TIL - front-end" rel="home">
                <span class="visually-hidden"> TIL - front-end </span>
                <picture class="c-img">
                  <img src="assets/img/Logo.svg" width="168" height="72" title="TIL - front-end" alt="">
                </picture>
              </a>
              <div class="c-header__logo--full position-absolute top-0">
                <picture class="c-img">
                  <img src="assets/img/FullLogo.svg" width="168" height="122" title="TIL - front-end" alt="">
                </picture>
              </div>
            </div>
            <!-- .c-header__logo -->
            <div class="">
              <div class="d-flex">
                <form class="c-form me-5 d-none d-md-block ">
                  <div class="c-form__field2 c-form__field2--select deco-blur">
                    <i class="c-icon c-typo-fs-3 language-wrapper" aria-hidden="true">
                      <svg class="icozaux1-language">
                        <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-language"></use>
                      </svg>
                    </i>
                    <span class="c-form__field2-label visually-hidden"> Seleziona la lingua </span>
                    <select name="sitelang" class="form-select fw-medium">
                      <option value="it" data-link="#" class="active" title="Italiano" selected="">Ita</option>
                      <option value="en" data-link="#" class="" title="English">En</option>
                    </select>
                  </div>
                </form>
                <a href="#defaultLink" class="c-btn c-btn--secondary c-btn2 c-btn2--has-icon c-btn2--size-m me-3 me-md-5 deco-blur">
                  <span class="c-btn__inner d-flex align-items-center">
                    <i class="c-icon c-icon-size-md c-icon-size-md-res1 login-wrapper" aria-hidden="true">
                      <svg class="icozaux1-login">
                        <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-login"></use>
                      </svg>
                    </i>
                    <span class="c-btn__label ps-2">Area Clienti</span>
                  </span>
                  <!-- .c-btn__inner -->
                </a>
                <a href="#defaultLink" class="c-menu__btn-toggle c-btn c-btn--secondary c-btn2 c-btn2--has-icon c-btn2--size-m me-4 me-md-5 deco-blur">
                  <span class="c-btn__inner d-flex align-items-center">
                    <i class="c-icon c-icon-size-md c-icon-size-md-res1 c-icon-menu-open menu-open-wrapper" aria-hidden="true">
                      <svg class="icozaux1-menu-open">
                        <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-menu-open"></use>
                      </svg>
                    </i>
                    <i class="c-icon c-icon-size-md c-icon-size-md-res1 c-icon-menu-close d-none menu-close-wrapper" aria-hidden="true">
                      <svg class="icozaux1-menu-close">
                        <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-menu-close"></use>
                      </svg>
                    </i>
                    <span class="c-btn__label c-menu__btn-open ps-2">Menu</span>
                    <span class="c-btn__label c-menu__btn-close ps-2 d-none">Chiudi</span>
                  </span>
                  <!-- .c-btn__inner -->
                </a>
              </div>
            </div>
          </div>
        </div>
        <?php if( !empty( $view_args['menu']) ){ ?>
        <div class="c-menu" data-current-level="1" data-js-component="Menu">
          <div class="c-menu__inner c-wrapper--w1--light zaux-theme--light1">
            <div class="c-menu__content ">
              <div class="c-menu__nav w-100 h-100">
                <nav>
                  <ul>
                    <li class="c-menu__nav--item">
                      <a href="#" class="d-flex justify-content-between w-100">
                        <span class="c-menu__nav--item--label">About</span>
                        <span class="c-menu__nav--item--icon">
                          <i class="c-icon  pag-bottom-right-wrapper" aria-hidden="true">
                            <svg class="icozaux1-pag-bottom-right">
                              <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-pag-bottom-right"></use>
                            </svg>
                          </i>
                        </span>
                      </a>
                      <div class="c-menu__nav--item--show pt-5 pe-6">
                        <div class="c-nav d-flex flex-column flex-md-row flex-wrap">
                          <div class="c-nav__list ">
                            <a href="#defaultLink" class="c-nav__list--first c-btn c-btn1 c-btn--primary c-btn1--has-icon c-btn1--size-m">
                              <span class="c-btn__inner d-flex align-items-center">
                                <span class="c-btn__label pe-3">Profilo</span>
                                <i class="c-icon c-icon-current-md c-icon-size-md arrow-top-right-wrapper" aria-hidden="true">
                                  <svg class="icozaux1-arrow-top-right">
                                    <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                  </svg>
                                </i>
                                <i class="c-icon c-icon-hover-md c-icon-size-md arrow-top-right-wrapper" aria-hidden="true">
                                  <svg class="icozaux1-arrow-top-right">
                                    <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                  </svg>
                                </i>
                              </span>
                              <!-- .c-btn__inner -->
                            </a>
                            <ul class="zaux-theme--dark1">
                            </ul>
                          </div>
                          <div class="c-nav__list ">
                            <a href="#defaultLink" class="c-nav__list--first c-btn c-btn1 c-btn--primary c-btn1--has-icon c-btn1--size-m">
                              <span class="c-btn__inner d-flex align-items-center">
                                <span class="c-btn__label pe-3">Approccio e valori</span>
                                <i class="c-icon c-icon-current-md c-icon-size-md arrow-top-right-wrapper" aria-hidden="true">
                                  <svg class="icozaux1-arrow-top-right">
                                    <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                  </svg>
                                </i>
                                <i class="c-icon c-icon-hover-md c-icon-size-md arrow-top-right-wrapper" aria-hidden="true">
                                  <svg class="icozaux1-arrow-top-right">
                                    <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                  </svg>
                                </i>
                              </span>
                              <!-- .c-btn__inner -->
                            </a>
                            <ul class="zaux-theme--dark1">
                            </ul>
                          </div>
                          <div class="c-nav__list ">
                            <a href="#defaultLink" class="c-nav__list--first c-btn c-btn1 c-btn--primary c-btn1--has-icon c-btn1--size-m">
                              <span class="c-btn__inner d-flex align-items-center">
                                <span class="c-btn__label pe-3">Impegno</span>
                                <i class="c-icon c-icon-current-md c-icon-size-md arrow-top-right-wrapper" aria-hidden="true">
                                  <svg class="icozaux1-arrow-top-right">
                                    <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                  </svg>
                                </i>
                                <i class="c-icon c-icon-hover-md c-icon-size-md arrow-top-right-wrapper" aria-hidden="true">
                                  <svg class="icozaux1-arrow-top-right">
                                    <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                  </svg>
                                </i>
                              </span>
                              <!-- .c-btn__inner -->
                            </a>
                            <ul class="zaux-theme--dark1">
                            </ul>
                          </div>
                          <div class="c-nav__list ">
                            <a href="#defaultLink" class="c-nav__list--first c-btn c-btn1 c-btn--primary c-btn1--has-icon c-btn1--size-m">
                              <span class="c-btn__inner d-flex align-items-center">
                                <span class="c-btn__label pe-3">Team</span>
                                <i class="c-icon c-icon-current-md c-icon-size-md arrow-top-right-wrapper" aria-hidden="true">
                                  <svg class="icozaux1-arrow-top-right">
                                    <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                  </svg>
                                </i>
                                <i class="c-icon c-icon-hover-md c-icon-size-md arrow-top-right-wrapper" aria-hidden="true">
                                  <svg class="icozaux1-arrow-top-right">
                                    <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                  </svg>
                                </i>
                              </span>
                              <!-- .c-btn__inner -->
                            </a>
                            <ul class="zaux-theme--dark1">
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="c-menu__nav--item">
                      <a href="#" class="d-flex justify-content-between w-100">
                        <span class="c-menu__nav--item--label">Dipartimenti e Lab</span>
                        <span class="c-menu__nav--item--icon">
                          <i class="c-icon  pag-bottom-right-wrapper" aria-hidden="true">
                            <svg class="icozaux1-pag-bottom-right">
                              <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-pag-bottom-right"></use>
                            </svg>
                          </i>
                        </span>
                      </a>
                      <div class="c-menu__nav--item--show pt-5 pe-6">
                        <div class="c-nav d-flex flex-column flex-md-row flex-wrap">
                          <div class="c-nav__list  c-nav__list--haschild ">
                            <a href="#defaultLink" class="c-nav__list--first c-btn c-btn1 c-btn--primary c-btn1--has-icon c-btn1--size-m">
                              <span class="c-btn__inner d-flex align-items-center">
                                <span class="c-btn__label pe-3">Dipartimenti</span>
                                <i class="c-icon c-icon-current-md c-icon-size-md arrow-top-right-wrapper" aria-hidden="true">
                                  <svg class="icozaux1-arrow-top-right">
                                    <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                  </svg>
                                </i>
                                <i class="c-icon c-icon-hover-md c-icon-size-md arrow-top-right-wrapper" aria-hidden="true">
                                  <svg class="icozaux1-arrow-top-right">
                                    <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                  </svg>
                                </i>
                              </span>
                              <!-- .c-btn__inner -->
                            </a>
                            <ul class="zaux-theme--dark1">
                              <li class="c-nav__list--child">
                                <a href="#defaultLink" class="c-btn c-btn1 c-btn--secondary c-btn1--has-icon c-btn1--size-s">
                                  <span class="c-btn__inner d-flex align-items-center">
                                    <span class="c-btn__label pe-3">Customer Service</span>
                                    <i class="c-icon c-icon-current-sm c-icon-size-sm arrow-top-right-wrapper" aria-hidden="true">
                                      <svg class="icozaux1-arrow-top-right">
                                        <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                      </svg>
                                    </i>
                                    <i class="c-icon c-icon-hover-sm c-icon-size-sm arrow-top-right-wrapper" aria-hidden="true">
                                      <svg class="icozaux1-arrow-top-right">
                                        <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                      </svg>
                                    </i>
                                  </span>
                                  <!-- .c-btn__inner -->
                                </a>
                              </li>
                              <li class="c-nav__list--child">
                                <a href="#defaultLink" class="c-btn c-btn1 c-btn--secondary c-btn1--has-icon c-btn1--size-s">
                                  <span class="c-btn__inner d-flex align-items-center">
                                    <span class="c-btn__label pe-3">Controllo qualità</span>
                                    <i class="c-icon c-icon-current-sm c-icon-size-sm arrow-top-right-wrapper" aria-hidden="true">
                                      <svg class="icozaux1-arrow-top-right">
                                        <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                      </svg>
                                    </i>
                                    <i class="c-icon c-icon-hover-sm c-icon-size-sm arrow-top-right-wrapper" aria-hidden="true">
                                      <svg class="icozaux1-arrow-top-right">
                                        <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                      </svg>
                                    </i>
                                  </span>
                                  <!-- .c-btn__inner -->
                                </a>
                              </li>
                              <li class="c-nav__list--child">
                                <a href="#defaultLink" class="c-btn c-btn1 c-btn--secondary c-btn1--has-icon c-btn1--size-s">
                                  <span class="c-btn__inner d-flex align-items-center">
                                    <span class="c-btn__label pe-3">Ricerca e sviluppo</span>
                                    <i class="c-icon c-icon-current-sm c-icon-size-sm arrow-top-right-wrapper" aria-hidden="true">
                                      <svg class="icozaux1-arrow-top-right">
                                        <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                      </svg>
                                    </i>
                                    <i class="c-icon c-icon-hover-sm c-icon-size-sm arrow-top-right-wrapper" aria-hidden="true">
                                      <svg class="icozaux1-arrow-top-right">
                                        <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                      </svg>
                                    </i>
                                  </span>
                                  <!-- .c-btn__inner -->
                                </a>
                              </li>
                            </ul>
                          </div>
                          <div class="c-nav__list  c-nav__list--haschild ">
                            <a href="#defaultLink" class="c-nav__list--first c-btn c-btn1 c-btn--primary c-btn1--has-icon c-btn1--size-m">
                              <span class="c-btn__inner d-flex align-items-center">
                                <span class="c-btn__label pe-3">Laboratori</span>
                                <i class="c-icon c-icon-current-md c-icon-size-md arrow-top-right-wrapper" aria-hidden="true">
                                  <svg class="icozaux1-arrow-top-right">
                                    <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                  </svg>
                                </i>
                                <i class="c-icon c-icon-hover-md c-icon-size-md arrow-top-right-wrapper" aria-hidden="true">
                                  <svg class="icozaux1-arrow-top-right">
                                    <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                  </svg>
                                </i>
                              </span>
                              <!-- .c-btn__inner -->
                            </a>
                            <ul class="zaux-theme--dark1">
                              <li class="c-nav__list--child">
                                <a href="#defaultLink" class="c-btn c-btn1 c-btn--secondary c-btn1--has-icon c-btn1--size-s">
                                  <span class="c-btn__inner d-flex align-items-center">
                                    <span class="c-btn__label pe-3">Customer Service</span>
                                    <i class="c-icon c-icon-current-sm c-icon-size-sm arrow-top-right-wrapper" aria-hidden="true">
                                      <svg class="icozaux1-arrow-top-right">
                                        <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                      </svg>
                                    </i>
                                    <i class="c-icon c-icon-hover-sm c-icon-size-sm arrow-top-right-wrapper" aria-hidden="true">
                                      <svg class="icozaux1-arrow-top-right">
                                        <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                      </svg>
                                    </i>
                                  </span>
                                  <!-- .c-btn__inner -->
                                </a>
                              </li>
                              <li class="c-nav__list--child">
                                <a href="#defaultLink" class="c-btn c-btn1 c-btn--secondary c-btn1--has-icon c-btn1--size-s">
                                  <span class="c-btn__inner d-flex align-items-center">
                                    <span class="c-btn__label pe-3">Controllo qualità</span>
                                    <i class="c-icon c-icon-current-sm c-icon-size-sm arrow-top-right-wrapper" aria-hidden="true">
                                      <svg class="icozaux1-arrow-top-right">
                                        <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                      </svg>
                                    </i>
                                    <i class="c-icon c-icon-hover-sm c-icon-size-sm arrow-top-right-wrapper" aria-hidden="true">
                                      <svg class="icozaux1-arrow-top-right">
                                        <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                      </svg>
                                    </i>
                                  </span>
                                  <!-- .c-btn__inner -->
                                </a>
                              </li>
                              <li class="c-nav__list--child">
                                <a href="#defaultLink" class="c-btn c-btn1 c-btn--secondary c-btn1--has-icon c-btn1--size-s">
                                  <span class="c-btn__inner d-flex align-items-center">
                                    <span class="c-btn__label pe-3">Ricerca e sviluppo</span>
                                    <i class="c-icon c-icon-current-sm c-icon-size-sm arrow-top-right-wrapper" aria-hidden="true">
                                      <svg class="icozaux1-arrow-top-right">
                                        <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                      </svg>
                                    </i>
                                    <i class="c-icon c-icon-hover-sm c-icon-size-sm arrow-top-right-wrapper" aria-hidden="true">
                                      <svg class="icozaux1-arrow-top-right">
                                        <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                      </svg>
                                    </i>
                                  </span>
                                  <!-- .c-btn__inner -->
                                </a>
                              </li>
                            </ul>
                          </div>
                          <div class="c-nav__list  c-nav__list--haschild ">
                            <a href="#defaultLink" class="c-nav__list--first c-btn c-btn1 c-btn--primary c-btn1--has-icon c-btn1--size-m">
                              <span class="c-btn__inner d-flex align-items-center">
                                <span class="c-btn__label pe-3">Accreditamenti</span>
                                <i class="c-icon c-icon-current-md c-icon-size-md arrow-top-right-wrapper" aria-hidden="true">
                                  <svg class="icozaux1-arrow-top-right">
                                    <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                  </svg>
                                </i>
                                <i class="c-icon c-icon-hover-md c-icon-size-md arrow-top-right-wrapper" aria-hidden="true">
                                  <svg class="icozaux1-arrow-top-right">
                                    <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                  </svg>
                                </i>
                              </span>
                              <!-- .c-btn__inner -->
                            </a>
                            <ul class="zaux-theme--dark1">
                              <li class="c-nav__list--child">
                                <a href="#defaultLink" class="c-btn c-btn1 c-btn--secondary c-btn1--has-icon c-btn1--size-s">
                                  <span class="c-btn__inner d-flex align-items-center">
                                    <span class="c-btn__label pe-3">Customer Service</span>
                                    <i class="c-icon c-icon-current-sm c-icon-size-sm arrow-top-right-wrapper" aria-hidden="true">
                                      <svg class="icozaux1-arrow-top-right">
                                        <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                      </svg>
                                    </i>
                                    <i class="c-icon c-icon-hover-sm c-icon-size-sm arrow-top-right-wrapper" aria-hidden="true">
                                      <svg class="icozaux1-arrow-top-right">
                                        <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                      </svg>
                                    </i>
                                  </span>
                                  <!-- .c-btn__inner -->
                                </a>
                              </li>
                              <li class="c-nav__list--child">
                                <a href="#defaultLink" class="c-btn c-btn1 c-btn--secondary c-btn1--has-icon c-btn1--size-s">
                                  <span class="c-btn__inner d-flex align-items-center">
                                    <span class="c-btn__label pe-3">Controllo qualità</span>
                                    <i class="c-icon c-icon-current-sm c-icon-size-sm arrow-top-right-wrapper" aria-hidden="true">
                                      <svg class="icozaux1-arrow-top-right">
                                        <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                      </svg>
                                    </i>
                                    <i class="c-icon c-icon-hover-sm c-icon-size-sm arrow-top-right-wrapper" aria-hidden="true">
                                      <svg class="icozaux1-arrow-top-right">
                                        <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                      </svg>
                                    </i>
                                  </span>
                                  <!-- .c-btn__inner -->
                                </a>
                              </li>
                              <li class="c-nav__list--child">
                                <a href="#defaultLink" class="c-btn c-btn1 c-btn--secondary c-btn1--has-icon c-btn1--size-s">
                                  <span class="c-btn__inner d-flex align-items-center">
                                    <span class="c-btn__label pe-3">Ricerca e sviluppo</span>
                                    <i class="c-icon c-icon-current-sm c-icon-size-sm arrow-top-right-wrapper" aria-hidden="true">
                                      <svg class="icozaux1-arrow-top-right">
                                        <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                      </svg>
                                    </i>
                                    <i class="c-icon c-icon-hover-sm c-icon-size-sm arrow-top-right-wrapper" aria-hidden="true">
                                      <svg class="icozaux1-arrow-top-right">
                                        <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                      </svg>
                                    </i>
                                  </span>
                                  <!-- .c-btn__inner -->
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="c-menu__nav--item">
                      <a href="#" class="d-flex justify-content-between w-100">
                        <span class="c-menu__nav--item--label">Servizi</span>
                        <span class="c-menu__nav--item--icon">
                          <i class="c-icon  pag-bottom-right-wrapper" aria-hidden="true">
                            <svg class="icozaux1-pag-bottom-right">
                              <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-pag-bottom-right"></use>
                            </svg>
                          </i>
                        </span>
                      </a>
                      <div class="c-menu__nav--item--show pt-5 pe-6">
                        <div class="c-nav d-flex flex-column flex-md-row flex-wrap">
                          <div class="c-nav__list  c-nav__list--haschild ">
                            <a href="#defaultLink" class="c-nav__list--first c-btn c-btn1 c-btn--primary c-btn1--has-icon c-btn1--size-m">
                              <span class="c-btn__inner d-flex align-items-center">
                                <span class="c-btn__label pe-3">Specializzazioni</span>
                                <i class="c-icon c-icon-current-md c-icon-size-md arrow-top-right-wrapper" aria-hidden="true">
                                  <svg class="icozaux1-arrow-top-right">
                                    <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                  </svg>
                                </i>
                                <i class="c-icon c-icon-hover-md c-icon-size-md arrow-top-right-wrapper" aria-hidden="true">
                                  <svg class="icozaux1-arrow-top-right">
                                    <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                  </svg>
                                </i>
                              </span>
                              <!-- .c-btn__inner -->
                            </a>
                            <ul class="zaux-theme--dark1">
                              <li class="c-nav__list--child">
                                <a href="#defaultLink" class="c-btn c-btn1 c-btn--secondary c-btn1--has-icon c-btn1--size-s">
                                  <span class="c-btn__inner d-flex align-items-center">
                                    <span class="c-btn__label pe-3">Customer Service</span>
                                    <i class="c-icon c-icon-current-sm c-icon-size-sm arrow-top-right-wrapper" aria-hidden="true">
                                      <svg class="icozaux1-arrow-top-right">
                                        <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                      </svg>
                                    </i>
                                    <i class="c-icon c-icon-hover-sm c-icon-size-sm arrow-top-right-wrapper" aria-hidden="true">
                                      <svg class="icozaux1-arrow-top-right">
                                        <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                      </svg>
                                    </i>
                                  </span>
                                  <!-- .c-btn__inner -->
                                </a>
                              </li>
                              <li class="c-nav__list--child">
                                <a href="#defaultLink" class="c-btn c-btn1 c-btn--secondary c-btn1--has-icon c-btn1--size-s">
                                  <span class="c-btn__inner d-flex align-items-center">
                                    <span class="c-btn__label pe-3">Controllo qualità</span>
                                    <i class="c-icon c-icon-current-sm c-icon-size-sm arrow-top-right-wrapper" aria-hidden="true">
                                      <svg class="icozaux1-arrow-top-right">
                                        <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                      </svg>
                                    </i>
                                    <i class="c-icon c-icon-hover-sm c-icon-size-sm arrow-top-right-wrapper" aria-hidden="true">
                                      <svg class="icozaux1-arrow-top-right">
                                        <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                      </svg>
                                    </i>
                                  </span>
                                  <!-- .c-btn__inner -->
                                </a>
                              </li>
                              <li class="c-nav__list--child">
                                <a href="#defaultLink" class="c-btn c-btn1 c-btn--secondary c-btn1--has-icon c-btn1--size-s">
                                  <span class="c-btn__inner d-flex align-items-center">
                                    <span class="c-btn__label pe-3">Ricerca e sviluppo</span>
                                    <i class="c-icon c-icon-current-sm c-icon-size-sm arrow-top-right-wrapper" aria-hidden="true">
                                      <svg class="icozaux1-arrow-top-right">
                                        <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                      </svg>
                                    </i>
                                    <i class="c-icon c-icon-hover-sm c-icon-size-sm arrow-top-right-wrapper" aria-hidden="true">
                                      <svg class="icozaux1-arrow-top-right">
                                        <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                      </svg>
                                    </i>
                                  </span>
                                  <!-- .c-btn__inner -->
                                </a>
                              </li>
                            </ul>
                          </div>
                          <div class="c-nav__list  c-nav__list--haschild ">
                            <a href="#defaultLink" class="c-nav__list--first c-btn c-btn1 c-btn--primary c-btn1--has-icon c-btn1--size-m">
                              <span class="c-btn__inner d-flex align-items-center">
                                <span class="c-btn__label pe-3">Ricerca e sviluppo</span>
                                <i class="c-icon c-icon-current-md c-icon-size-md arrow-top-right-wrapper" aria-hidden="true">
                                  <svg class="icozaux1-arrow-top-right">
                                    <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                  </svg>
                                </i>
                                <i class="c-icon c-icon-hover-md c-icon-size-md arrow-top-right-wrapper" aria-hidden="true">
                                  <svg class="icozaux1-arrow-top-right">
                                    <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                  </svg>
                                </i>
                              </span>
                              <!-- .c-btn__inner -->
                            </a>
                            <ul class="zaux-theme--dark1">
                              <li class="c-nav__list--child">
                                <a href="#defaultLink" class="c-btn c-btn1 c-btn--secondary c-btn1--has-icon c-btn1--size-s">
                                  <span class="c-btn__inner d-flex align-items-center">
                                    <span class="c-btn__label pe-3">Customer Service</span>
                                    <i class="c-icon c-icon-current-sm c-icon-size-sm arrow-top-right-wrapper" aria-hidden="true">
                                      <svg class="icozaux1-arrow-top-right">
                                        <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                      </svg>
                                    </i>
                                    <i class="c-icon c-icon-hover-sm c-icon-size-sm arrow-top-right-wrapper" aria-hidden="true">
                                      <svg class="icozaux1-arrow-top-right">
                                        <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                      </svg>
                                    </i>
                                  </span>
                                  <!-- .c-btn__inner -->
                                </a>
                              </li>
                              <li class="c-nav__list--child">
                                <a href="#defaultLink" class="c-btn c-btn1 c-btn--secondary c-btn1--has-icon c-btn1--size-s">
                                  <span class="c-btn__inner d-flex align-items-center">
                                    <span class="c-btn__label pe-3">Controllo qualità</span>
                                    <i class="c-icon c-icon-current-sm c-icon-size-sm arrow-top-right-wrapper" aria-hidden="true">
                                      <svg class="icozaux1-arrow-top-right">
                                        <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                      </svg>
                                    </i>
                                    <i class="c-icon c-icon-hover-sm c-icon-size-sm arrow-top-right-wrapper" aria-hidden="true">
                                      <svg class="icozaux1-arrow-top-right">
                                        <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                      </svg>
                                    </i>
                                  </span>
                                  <!-- .c-btn__inner -->
                                </a>
                              </li>
                              <li class="c-nav__list--child">
                                <a href="#defaultLink" class="c-btn c-btn1 c-btn--secondary c-btn1--has-icon c-btn1--size-s">
                                  <span class="c-btn__inner d-flex align-items-center">
                                    <span class="c-btn__label pe-3">Ricerca e sviluppo</span>
                                    <i class="c-icon c-icon-current-sm c-icon-size-sm arrow-top-right-wrapper" aria-hidden="true">
                                      <svg class="icozaux1-arrow-top-right">
                                        <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                      </svg>
                                    </i>
                                    <i class="c-icon c-icon-hover-sm c-icon-size-sm arrow-top-right-wrapper" aria-hidden="true">
                                      <svg class="icozaux1-arrow-top-right">
                                        <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                      </svg>
                                    </i>
                                  </span>
                                  <!-- .c-btn__inner -->
                                </a>
                              </li>
                            </ul>
                          </div>
                          <div class="c-nav__list  c-nav__list--haschild ">
                            <a href="#defaultLink" class="c-nav__list--first c-btn c-btn1 c-btn--primary c-btn1--has-icon c-btn1--size-m">
                              <span class="c-btn__inner d-flex align-items-center">
                                <span class="c-btn__label pe-3">Consulenza</span>
                                <i class="c-icon c-icon-current-md c-icon-size-md arrow-top-right-wrapper" aria-hidden="true">
                                  <svg class="icozaux1-arrow-top-right">
                                    <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                  </svg>
                                </i>
                                <i class="c-icon c-icon-hover-md c-icon-size-md arrow-top-right-wrapper" aria-hidden="true">
                                  <svg class="icozaux1-arrow-top-right">
                                    <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                  </svg>
                                </i>
                              </span>
                              <!-- .c-btn__inner -->
                            </a>
                            <ul class="zaux-theme--dark1">
                              <li class="c-nav__list--child">
                                <a href="#defaultLink" class="c-btn c-btn1 c-btn--secondary c-btn1--has-icon c-btn1--size-s">
                                  <span class="c-btn__inner d-flex align-items-center">
                                    <span class="c-btn__label pe-3">Customer Service</span>
                                    <i class="c-icon c-icon-current-sm c-icon-size-sm arrow-top-right-wrapper" aria-hidden="true">
                                      <svg class="icozaux1-arrow-top-right">
                                        <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                      </svg>
                                    </i>
                                    <i class="c-icon c-icon-hover-sm c-icon-size-sm arrow-top-right-wrapper" aria-hidden="true">
                                      <svg class="icozaux1-arrow-top-right">
                                        <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                      </svg>
                                    </i>
                                  </span>
                                  <!-- .c-btn__inner -->
                                </a>
                              </li>
                              <li class="c-nav__list--child">
                                <a href="#defaultLink" class="c-btn c-btn1 c-btn--secondary c-btn1--has-icon c-btn1--size-s">
                                  <span class="c-btn__inner d-flex align-items-center">
                                    <span class="c-btn__label pe-3">Controllo qualità</span>
                                    <i class="c-icon c-icon-current-sm c-icon-size-sm arrow-top-right-wrapper" aria-hidden="true">
                                      <svg class="icozaux1-arrow-top-right">
                                        <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                      </svg>
                                    </i>
                                    <i class="c-icon c-icon-hover-sm c-icon-size-sm arrow-top-right-wrapper" aria-hidden="true">
                                      <svg class="icozaux1-arrow-top-right">
                                        <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                      </svg>
                                    </i>
                                  </span>
                                  <!-- .c-btn__inner -->
                                </a>
                              </li>
                              <li class="c-nav__list--child">
                                <a href="#defaultLink" class="c-btn c-btn1 c-btn--secondary c-btn1--has-icon c-btn1--size-s">
                                  <span class="c-btn__inner d-flex align-items-center">
                                    <span class="c-btn__label pe-3">Ricerca e sviluppo</span>
                                    <i class="c-icon c-icon-current-sm c-icon-size-sm arrow-top-right-wrapper" aria-hidden="true">
                                      <svg class="icozaux1-arrow-top-right">
                                        <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                      </svg>
                                    </i>
                                    <i class="c-icon c-icon-hover-sm c-icon-size-sm arrow-top-right-wrapper" aria-hidden="true">
                                      <svg class="icozaux1-arrow-top-right">
                                        <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                      </svg>
                                    </i>
                                  </span>
                                  <!-- .c-btn__inner -->
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="c-menu__nav--item">
                      <a href="#" class="d-flex justify-content-between w-100">
                        <span class="c-menu__nav--item--label">Corporate</span>
                        <span class="c-menu__nav--item--icon">
                          <i class="c-icon  pag-bottom-right-wrapper" aria-hidden="true">
                            <svg class="icozaux1-pag-bottom-right">
                              <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-pag-bottom-right"></use>
                            </svg>
                          </i>
                        </span>
                      </a>
                      <div class="c-menu__nav--item--show pt-5 pe-6">
                        <div class="c-nav d-flex flex-column flex-md-row flex-wrap">
                          <div class="c-nav__list ">
                            <a href="#defaultLink" class="c-nav__list--first c-btn c-btn1 c-btn--primary c-btn1--has-icon c-btn1--size-m">
                              <span class="c-btn__inner d-flex align-items-center">
                                <span class="c-btn__label pe-3">Termini e condizioni</span>
                                <i class="c-icon c-icon-current-md c-icon-size-md arrow-top-right-wrapper" aria-hidden="true">
                                  <svg class="icozaux1-arrow-top-right">
                                    <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                  </svg>
                                </i>
                                <i class="c-icon c-icon-hover-md c-icon-size-md arrow-top-right-wrapper" aria-hidden="true">
                                  <svg class="icozaux1-arrow-top-right">
                                    <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                  </svg>
                                </i>
                              </span>
                              <!-- .c-btn__inner -->
                            </a>
                            <ul class="zaux-theme--dark1">
                            </ul>
                          </div>
                          <div class="c-nav__list ">
                            <a href="#defaultLink" class="c-nav__list--first c-btn c-btn1 c-btn--primary c-btn1--has-icon c-btn1--size-m">
                              <span class="c-btn__inner d-flex align-items-center">
                                <span class="c-btn__label pe-3">Codice etico</span>
                                <i class="c-icon c-icon-current-md c-icon-size-md arrow-top-right-wrapper" aria-hidden="true">
                                  <svg class="icozaux1-arrow-top-right">
                                    <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                  </svg>
                                </i>
                                <i class="c-icon c-icon-hover-md c-icon-size-md arrow-top-right-wrapper" aria-hidden="true">
                                  <svg class="icozaux1-arrow-top-right">
                                    <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                  </svg>
                                </i>
                              </span>
                              <!-- .c-btn__inner -->
                            </a>
                            <ul class="zaux-theme--dark1">
                            </ul>
                          </div>
                          <div class="c-nav__list ">
                            <a href="#defaultLink" class="c-nav__list--first c-btn c-btn1 c-btn--primary c-btn1--has-icon c-btn1--size-m">
                              <span class="c-btn__inner d-flex align-items-center">
                                <span class="c-btn__label pe-3">Informazioni Legali</span>
                                <i class="c-icon c-icon-current-md c-icon-size-md arrow-top-right-wrapper" aria-hidden="true">
                                  <svg class="icozaux1-arrow-top-right">
                                    <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                  </svg>
                                </i>
                                <i class="c-icon c-icon-hover-md c-icon-size-md arrow-top-right-wrapper" aria-hidden="true">
                                  <svg class="icozaux1-arrow-top-right">
                                    <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                                  </svg>
                                </i>
                              </span>
                              <!-- .c-btn__inner -->
                            </a>
                            <ul class="zaux-theme--dark1">
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </nav>
              </div>
              <div class="c-menu__foot pt-4 pb-4 pb-md-6">
                <div class="c-menu__foot--info d-flex justify-content-between align-items-center">
                  <ul>
                    <li class="me-5 me-md-7">
                      <a href="#defaultLink" class="c-btn c-btn1 c-btn--primary c-btn1--has-icon c-btn1--size-l c-btn1--size-l-res1">
                        <span class="c-btn__inner d-flex align-items-center">
                          <span class="c-btn__label pe-3">News</span>
                          <i class="c-icon c-icon-current-lg c-icon-size-lg c-icon-size-lg-res1 arrow-top-right-wrapper" aria-hidden="true">
                            <svg class="icozaux1-arrow-top-right">
                              <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                            </svg>
                          </i>
                          <i class="c-icon c-icon-hover-lg c-icon-size-lg c-icon-size-lg-res1 arrow-top-right-wrapper" aria-hidden="true">
                            <svg class="icozaux1-arrow-top-right">
                              <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                            </svg>
                          </i>
                        </span>
                        <!-- .c-btn__inner -->
                      </a>
                    </li>
                    <li>
                      <a href="#defaultLink" class="c-btn c-btn1 c-btn--primary c-btn1--has-icon c-btn1--size-l c-btn1--size-l-res1">
                        <span class="c-btn__inner d-flex align-items-center">
                          <span class="c-btn__label pe-3">Contatti</span>
                          <i class="c-icon c-icon-current-lg c-icon-size-lg c-icon-size-lg-res1 arrow-top-right-wrapper" aria-hidden="true">
                            <svg class="icozaux1-arrow-top-right">
                              <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                            </svg>
                          </i>
                          <i class="c-icon c-icon-hover-lg c-icon-size-lg c-icon-size-lg-res1 arrow-top-right-wrapper" aria-hidden="true">
                            <svg class="icozaux1-arrow-top-right">
                              <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-arrow-top-right"></use>
                            </svg>
                          </i>
                        </span>
                        <!-- .c-btn__inner -->
                      </a>
                    </li>
                  </ul>
                  <div class="c-menu__foot--social zaux-theme--dark2">
                    <ul class="d-none d-md-inline-block">
                      <li class="">
                        <a href="#fb" title="Facebook">
                          <i class="c-icon facebook-wrapper" aria-hidden="true">
                            <svg class="icozaux1-facebook">
                              <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-facebook"></use>
                            </svg>
                          </i>
                        </a>
                      </li>
                      <li class="">
                        <a href="#li" title="Linkedin">
                          <i class="c-icon linkedin-wrapper" aria-hidden="true">
                            <svg class="icozaux1-linkedin">
                              <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-linkedin"></use>
                            </svg>
                          </i>
                        </a>
                      </li>
                      <li class="">
                        <a href="#in" title="Instagram">
                          <i class="c-icon instagram-wrapper" aria-hidden="true">
                            <svg class="icozaux1-instagram">
                              <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-instagram"></use>
                            </svg>
                          </i>
                        </a>
                      </li>
                    </ul>
                    <form class="c-form d-block d-md-none">
                      <div class="c-form__field2 c-form__field2--select">
                        <i class="c-icon c-typo-fs-3 language-wrapper" aria-hidden="true">
                          <svg class="icozaux1-language">
                            <use xlink:href="/assets/icon/icozaux1/symbol-defs.svg#icozaux1-language"></use>
                          </svg>
                        </i>
                        <span class="c-form__field2-label visually-hidden"> Seleziona la lingua </span>
                        <select name="sitelang" class="form-select fw-medium">
                          <option value="it" data-link="#" class="active" title="Italiano" selected="">Ita</option>
                          <option value="en" data-link="#" class="" title="English">En</option>
                        </select>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- .c-menu__inner -->
        </div>
        <?php } ?>
        <!-- .c-menu -->
        <!-- .c-header__inner -->
      </header>
