<div class="c-displayblock1 res--1">
    <?php 
        $img = array(
            "className" => "c-displayblock1__bg",
            "mainSrc" => $view_args['bg'], //Preferable with 1x and 2x
        ); 
        ZakiUIHelper::renderComponent("img", $img); 
    ?>
    <?php /*
    {{
        Img.content({
            "className" : [componentClassName + "__bg"],
            "mainSrc" :  displayBg.mainSrc1x + " 1x,  " + displayBg.mainSrc2x + " 2x" or '',
            "sourceList" : displayBg.sourceList or ''
        })
    }}
    */ ?>
    <div class="container-l container--min-w1 container--res1 gx-0">
        <div class="c-displayblock1__inner d-flex">
            <div class="c-displayblock1__row c-displayblock1__row--1 row justify-content-center flex-column">
                <div class="c-displayblock1__col c-displayblock1__col--1 col-12 col-sm-7">
                    <h3 class="c-displayblock1__title"><?php echo $view_args['title']; ?></h3>
                    <h5 class="c-displayblock1__subtitle"><?php echo $view_args['title']; ?></h5>
                    <p class="c-displayblock1__abstract"><?php echo $view_args['abstract']; ?></p>
                    <ul class="c-displayblock1__ctas">
                        <li class="c-displayblock1__ctas-item">
                            <a href="<?php echo $view_args['cta']['url']; ?>" class="c-btn c-btn--primary">
                                <span class="c-btn__inner">
                                    <span class="c-btn__label"><?php echo $view_args['cta']['title']; ?></span>
                                </span>
                                <!-- .c-btn__inner -->
                            </a>
                        </li>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>