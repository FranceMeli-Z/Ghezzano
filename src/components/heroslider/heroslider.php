<div class="c-heroslider res--1<?php echo (!empty($view_args['className'])) ? " " . $view_args['className'] : ""; ?>">
    <div class="c-heroslider__inner container-l container--min-w1 container--res1">
        <?php if (!empty($view_args['slides'])) { ?>
            <div class="c-heroslider__slider-container">
                <div data-js-component="Slider" class="c-heroslider__slider c-slider swiper-container" data-config='{
                        "centeredSlides":false,
                        "speed":600,
                        "spaceBetween":0,
                        "slidesPerView":1,
                        "pagination":{
                            "el":".swiper-pagination",
                            "type":"bullets",
                            "clickable":true
                        }
                    }'>
                    <div class="c-slider__wrapper">
                        <div class="c-slider__instance swiper-container">
                            <div class="swiper-wrapper">
                                <?php foreach ($view_args['slides'] as $slide) { ?>
                                    <div class="c-heroslider__slide swiper-slide">
                                        <div class="c-heroslider__slide-inner">
                                            <?php
                                            ZakiUIHelper::renderComponent(
                                                "img",
                                                array(
                                                    "className" => "c-heroslider__bg",
                                                    "alt" => $slide['title'],
                                                    "mainSrc" => $slide['bg']
                                                )
                                            );
                                            ?>
                                            <div class="c-heroslider__slide-row c-heroslider__slide-row--1">
                                                <p class="c-heroslider__slide-pre-title"><?php echo $slide['eyelet']; ?></p>
                                                <h3 class="c-heroslider__slide-title"><?php echo $slide['title']; ?></h3>
                                                <p class="c-heroslider__slide-subtitle"><?php echo $slide['subtitle']; ?></p>
                                            </div>
                                            <div class="c-heroslider__slide-row c-heroslider__slide-row--2">
                                                <ul class="c-heroslider__slide-footer-list">
                                                    <?php if (!empty($slide['hasDiscount'])) { ?>
                                                        <li>
                                                            <div class="c-heroslider__badge"><span><?php echo $slide['discountPerc']; ?></span></div>
                                                        </li>
                                                    <?php } ?>
                                                    <?php if(!empty($slide['cta'])){ ?>
                                                    <li>
                                                        <a href="<?php echo $slide['cta']['url']; ?>" alt="<?php echo $slide['cta']['title']; ?>" class="c-btn c-btn--secondary">
                                                            <span class="c-btn__inner">
                                                                <span class="c-btn__label"><?php echo $slide['cta']['title']; ?></span>
                                                            </span>
                                                            <!-- .c-btn__inner -->
                                                        </a>
                                                    </li>
                                                    <?php } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="c-heroslider__pagination c-slider__pagination swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>