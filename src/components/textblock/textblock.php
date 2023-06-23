<?php $titleTag = (!empty($view_args['titleTag'])) ? $view_args['titleTag'] : "h2"; ?>
<div class="c-textblock res--1<?php echo ( !empty( $view_args['className'] ) ) ? " " . $view_args['className'] : ""; ?>">
    <div class="c-textblock__inner">
        <div class="container-l container--min-w1 container--res1">
            <?php if(!empty($view_args['title'] ) ){ ?>
                <div class="c-textblock__head">
                    <<?php echo $titleTag; ?> class="c-textblock__title">
                        <?php echo $view_args['title']; ?>
                    </<?php echo $titleTag; ?>>
                </div>
            <?php } ?>
            <div class="c-textblock__body c-typo-style1-9">
                <?php echo $view_args['content']; ?>
            </div>
        </div>
    </div>
</div>