import { Dom } from "../../assets/js/helpers/dom";
import { Utils } from "../../assets/js/helpers/utils";

export class Menu {
  static cssClass = "c-menu";

  constructor(el = null) {
    this.$el = $(el);
    this.setupEvents();
  }

  setupEvents() {

    var viewportWidth = $(window).width();

    $(window).on('resize', (e) => {
      var viewportWidth = $(window).width();
      const $navItem = $(`.${Menu.cssClass}__nav--item--haschild`);
      if (viewportWidth < 1286) {
        if ( !$navItem.hasClass('mobile-menu') ) {
          $navItem.addClass('mobile-menu');
        }
      }
      else {
        $navItem.removeClass('mobile-menu');
      }
    });

    // $(document).on('click', `.${Menu.cssClass}__btn--open`, (e) => {
    //   e.preventDefault();
    //   const _this = $(`.${Menu.cssClass}`)[0].instance;
    //   _this.toggleMenu();
    // });
    // $(document).on('click', `.${Menu.cssClass}__btn--close`, (e) => {
    //   e.preventDefault();
    //   const _this = $(`.${Menu.cssClass}`)[0].instance;
    //   _this.closeMenu();
    // });


  }

  toggleMenu(doOpen) {
    const $btns = $(`.${Menu.cssClass}__btn-toggle`);
    const $menu = $(`.${Menu.cssClass}`);
    const cssClassActive = `${Utils.getVarNS()}-menu-active`;
    const cssMenuActive = `open`;
    const bodyClassList = document.body.classList;

    if (doOpen === undefined) {
      doOpen = !bodyClassList.contains(cssClassActive);
    }

    if (doOpen) {
      $btns.addClass('is-active');
      bodyClassList.add(cssClassActive);
      $menu.addClass(cssMenuActive);

    } else if (!doOpen) {
      $btns.removeClass('is-active');
      bodyClassList.remove(cssClassActive);
      // $menu.removeClass(cssMenuActive);
    }
  }

}
