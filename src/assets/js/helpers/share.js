//Share dei pulsanti social
export class Share {

  static cssClass = "c-share";
  static windowOpenTarget = "_blank";
  static windowOpenParams = "toolbar=0, status=0, width=626, height=436";

  constructor(el = null) {
    this.el = el;
  }

  static init() {

    // $(document).on('click', `.${Share.cssClass}__btn-trigger`, (e) => {
    //   e.preventDefault();
    //   const $btn = $(Dom.getTarget(e.target, `.${Share.cssClass}__btn-trigger`));
    //   $btn.next('[class*="__box"]').fadeToggle(300);
    //   $btn.toggleClass("active");
    // });

    const component = document.getElementsByClassName('c-share');
    const shareTitle = component[0].dataset.title;
    const shareUrl = component[0].dataset.url;
    const url = 'mailto:?subject=I wanted you to see this site&amp;body=Check out this site ' + shareUrl;

    $(document).on('click', `.${Share.cssClass}--fb`, (e) => {
      e.preventDefault();

      const component = e.currentTarget.closest(`.${Share.cssClass}`);
      const shareTitle = component.dataset.title;
      const shareUrl = component.dataset.url;

      const queryString = new URLSearchParams({
        'u': shareUrl
      }).toString();

      window.open('http://www.facebook.com/sharer.php?' + queryString, Share.windowOpenTarget, Share.windowOpenParams);

    });

    $(document).on('click', `.${Share.cssClass}--tw`, (e) => {
      e.preventDefault();

      const component = e.currentTarget.closest(`.${Share.cssClass}`);
      const shareTitle = component.dataset.title;
      const shareUrl = component.dataset.url;

      const queryString = new URLSearchParams({
        'text': shareTitle,
        'url': shareUrl
      }).toString();

      window.open('https://twitter.com/intent/tweet?' + queryString, Share.windowOpenTarget, Share.windowOpenParams);
    });

    $(document).on('click', `.${Share.cssClass}--ln`, (e) => {
      e.preventDefault();

      const component = e.currentTarget.closest(`.${Share.cssClass}`);
      const shareTitle = component.dataset.title;
      const shareUrl = component.dataset.url;

      const queryString = new URLSearchParams({
        'title': shareTitle,
        'url': shareUrl,
      }).toString();

      window.open('https://www.linkedin.com/shareArticle?' + queryString, Share.windowOpenTarget, Share.windowOpenParams);
    });

    $(document).on('click', `.${Share.cssClass}--wa`, (e) => {
      e.preventDefault();

      const component = e.currentTarget.closest(`.${Share.cssClass}`);
      const shareTitle = component.dataset.title;
      const shareUrl = component.dataset.url;

      const queryString = new URLSearchParams({
        'text': shareTitle,
        'url': shareUrl,
      }).toString();

      window.open('https://api.whatsapp.com/send?' + queryString, Share.windowOpenTarget, Share.windowOpenParams);
    });

    $(document).on('click', `.${Share.cssClass}--tl`, (e) => {
      e.preventDefault();

      const component = e.currentTarget.closest(`.${Share.cssClass}`);
      const shareTitle = component.dataset.title;
      const shareUrl = component.dataset.url;

      const queryString = new URLSearchParams({
        'url': shareUrl,
        'text': shareTitle
      }).toString();

      window.open('https://t.me/share/url?' + queryString, Share.windowOpenTarget, Share.windowOpenParams);
    });

  }

}
