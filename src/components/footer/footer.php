  <footer class="c-footer res--1 position-relative">
    <div class="c-footer__inner container-l container--min-w1 container--res1">
      <div class="c-footer__row c-footer__row--1">
        <div class="row">
          <div class="col-12 col-md-4 pb-4 pb-md-0">
            <a href="<?php echo $view_args['logo_url']; ?>" title="<?php echo $view_args['logo_alt']; ?>">
              <img class="c-footer__logo" src="<?php echo $view_args['logo_src']; ?>" width="322" height="60" alt="<?php echo $view_args['logo_alt']; ?>"/>
            </a>
          </div>
          <div class="col-12 col-md-2">
            <ul class="c-footer__links">
              <?php if( !empty($view_args['menu_entries_1'] ) ){ ?>
                <?php foreach( $view_args['menu_entries_1'] as $menu_entry ){ ?>
                    <li><a title="<?php echo $menu_entry['link']['title']; ?>" href="<?php echo $menu_entry['link']['url']; ?>"><?php echo $menu_entry['link']['title']; ?></a></li>
                <?php } ?>
              <?php } ?>
            </ul>
          </div>
          <div class="col-12 col-md-2">
            <ul class="c-footer__links">
                <?php if( !empty($view_args['menu_entries_2'] ) ){ ?>
                    <?php foreach( $view_args['menu_entries_2'] as $menu_entry ){ ?>
                        <li><a title="<?php echo $menu_entry['link']['title']; ?>" href="<?php echo $menu_entry['link']['url']; ?>"><?php echo $menu_entry['link']['title']; ?></a></li>
                    <?php } ?>
                <?php } ?>
            </ul>
          </div>
          <div class="col-12 col-md-4 text-right">
            <ul class="c-footer__social">
              <?php if( !empty( $view_args['social']) ){ ?>
                <?php foreach( $view_args['social'] as $key => $social ){ ?>
                    <?php if(!empty($social) ) { ?>
                        <li class="c-footer__social-item">
                            <a href="<?php echo $social ?>" title="<?php echo ucfirst($key); ?>">
                                <?php ZakiUIHelper::renderComponent("icon", array("icon" => "icon-" . $key ) ); ?>
                            </a>
                        </li>
                    <?php } ?>
                <?php } ?>
              <?php } ?>
            </ul>
          </div>
        </div>
        
        <div class="c-footer__slogan-row row">
          <div class="col-12">
            <span>
            <?php echo $view_args['website_pretty_url']; ?>
            </span>
          </div>
        </div>
      </div>
      <div class="c-footer__row c-footer__row--2">
        <span><?php echo $view_args['footer_deets']; ?></span>
      </div>
    </div>
    <div class="c-footer__credits position-relative">
      <div class="container-l container--min-w1 container--res1">
        <div class="row position-relative">
          <div class="col-12">
            <?php echo $view_args['copyright']; ?>
          </div>
        </div>  
      </div>
      <div class="c-footer__credits-icon">
        <a title="Made in Zaki" href="https://www.zaki.it">
            <?php ZakiUIHelper::renderComponent("icon", array("icon" => "icon-made-in-zaki")); ?>
        </a>
      </div>
    </div>
  </footer>