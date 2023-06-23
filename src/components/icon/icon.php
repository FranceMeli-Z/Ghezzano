<i class="c-icon icon-<?php echo $view_args['icon'];?>-wrapper<?php echo (!empty($view_args['className'])) ? " " . $view_args['className'] : "";?>" aria-hidden="true">
    <svg class="icon-<?php echo $view_args['icon']; ?>">
        <use xlink:href="<?php echo ZakiUIHelper::getMainIconSetSvgURI(); ?>#<?php echo $view_args['icon']; ?>"></use>
    </svg>
</i>