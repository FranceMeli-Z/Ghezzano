// Vendors
import AOS from "aos";
import { Animation } from "../helpers/animation";

// Helpers
import { Component } from "../helpers/component";
import { Device } from "../helpers/device";
import { Lazyload } from "../helpers/lazyload";
import { Observe } from "../helpers/observe";
import { Utils } from "../helpers/utils";
import { UI } from "../helpers/ui";

function onScreenChange(e) {
  e = e || Utils.getNS().mqoMd;
  Utils.getNS().isMobile = !e.matches;
  document.body.classList.remove(`${Utils.getVarNS()}-trans-active`);
  setTimeout(() => document.body.classList.add(`${Utils.getVarNS()}-trans-active`), 500);
}

const Base = () => {

  Utils.credits();

  if (Utils.isDebug) {
    console.log("isIOS: ", Device.isIOS);
    console.log("isSafari: ", Device.isSafari);
  }

  if (Device.isIOS) {
    document.body.classList.add(`is-ios`);
  }

  if (Device.isSafari) {
    document.body.classList.add(`is-safari`);
  }

  if (Device.isTouch) {
    document.body.classList.add(`is-touch`);
  }

  // Creates a general purpose  "InView" observer (runs once per element when attached)
  Observe.handlers.InViewOnce = Observe.create();

  // Inits simple animation lib
  AOS.init();

  // Converts breakpoint config value strings to numbers
  ((bp) => {
    Object.keys(bp).forEach((k) => (bp[k] = parseFloat(bp[k])));
  })(Utils.getNS().config.breakpoints);

  Utils.getNS().mqoMd = matchMedia(
    `(min-width:${Utils.getNS().config.breakpoints.md}px)`
  );

  Utils.getNS().isMobile = !Utils.getNS().mqoMd.matches;

  document.addEventListener("DOMContentLoaded", () => {

    Animation.init();

    // Forces scrollY = 0
    window.scrollTo(0, 0);

    // Inits the helper module who lazy-load the images
    Lazyload.init();

    // Moves/Clones elements in DOM
    Utils.prependChildrens();

    // Inits the components in page
    Component.initAll();


    Utils.onMqChange(Utils.getNS().mqoMd, onScreenChange);
    onScreenChange();
    Animation.updateAll();

    if (Utils.isDebug) {
      console.log(`DOM LOAD END`);
    }
  });

  window.addEventListener('resize', () => {
    Animation.updateAll();

    if (Utils.isDebug) {
      console.log("WINDOW RESIZE");
    }
  }, true);

  window.addEventListener("load", () => {
    Animation.updateAll();

    if (Utils.isDebug) {
      console.log(`WINDOW LOAD END`);
    }
  });

  // UI.stickyFooter();
};

export default Base;
