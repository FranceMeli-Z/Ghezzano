import { on } from "delegated-events";
import { Utils } from "../../assets/js/helpers/utils";

export class Header {
  static cssClass = "c-header";
  static cssClassNavMainActive = "zaux-navmain-active";

  constructor(el = null) {
    this.el = el;
  }

  static get navMainActive() {
    return document.body.classList.contains(this.cssClassNavMainActive);
  }

  static set navMainActive(value) {
    document.body.classList[value === true ? 'add' : 'remove'](this.cssClassNavMainActive);
  }

  /**
   * Return the Header's height
   *
   * @readonly
   * @static
   * @memberof Header
   */
  static get height() {
    return document.querySelector(`.${this.cssClass}`).instance.height;
  }

  /**
   * Return the Header's height
   *
   * @readonly
   * @memberof Header
   */
  get height() {
    return this.el.offsetHeight;
  }

  static onBoot() {

    /*
    on("click", `.${this.cssClass}__btn-open-navmain`, (e) => {
      e.preventDefault();

      let component = e.currentTarget.closest(`[data-js-component]`);
      let _class = component.instance.constructor;

      _class.navMainActive = !_class.navMainActive;
      e.currentTarget.classList[_class.navMainActive ? 'add' : 'remove']('is-active');
    });

    // Removes (if any) some CSS rules added by the mobile accordion logic on NavMain.
    Utils.onMqChange(Utils.getNS().mqoMd, (e) => {
      const isMobile = !e.matches;
      if (!isMobile) {
        [...document.querySelectorAll('.c-nav__nav-wrapper[style*="height"]')].forEach(el => {
          el.style.height = null;
          el.style.opacity = null;
        })
      }
    });
    */
  }

}
