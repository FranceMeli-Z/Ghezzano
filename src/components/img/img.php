<?php $srcAttr="src"; $isLazy = false; ?>
<?php if( !empty($view_args['lazyload']) && $view_args['lazyload'] == true ){ $srcAttr="data-src"; } ?>
<picture class="c-img<?php echo (!empty($view_args['className'])) ? " " . $view_args['className'] : ""; ?>">
    <?php if( !empty($view_args['sourceList'] ) ){ ?>
        <?php foreach($view_args['sourceList'] as $src ){ ?>
            <source media="(min-width: <?php echo $src['breakpoint']; ?>)" <?php echo $srcAttr; ?>="<?php echo $src['src1x']; ?> 1x, <?php echo $src['src2x']; ?> 2x">
        <?php } ?>
    <?php } ?>
    <img 
        <?php if( !empty($view_args['height']) ){ ?> height="<?php echo $view_args['height']; ?>"
        <?php } ?> <?php if( !empty($view_args['width']) ){ ?> width="<?php echo $view_args['width']; ?>" <?php } ?>
        <?php echo $srcAttr; ?>="<?php echo $view_args['mainSrc']; ?>" alt="<?php echo (!empty($view_args['alt'])); ?>"/>
</picture>