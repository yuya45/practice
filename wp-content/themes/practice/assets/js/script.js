// 360px未満対応
!(function () {
  const viewport = document.querySelector('meta[name="viewport"]');
  function switchViewport() {
    const value =
      window.outerWidth > 360
        ? "width=device-width,initial-scale=1"
        : "width=360";
    if (viewport.getAttribute("content") !== value) {
      viewport.setAttribute("content", value);
    }
  }
  addEventListener("resize", switchViewport, false);
  switchViewport();
})();
// ホバー表示切替（共通）
jQuery(function () {
  const triggerItems = jQuery(".js-hoverChangeTriggerList li");
  const cardItems = jQuery(".js-hoverChangeCardList li");
  const linkSelector = ".p-home__productListLink";

  triggerItems.hover(function () {
    const index = jQuery(this).index();

    cardItems.removeClass("current").eq(index).addClass("current");
    triggerItems.find(linkSelector).removeClass("current");
    triggerItems.eq(index).find(linkSelector).addClass("current");
  });
});
// スクロールで画像フェード
['upper', 'lower'].forEach((type) => {
  const triggerEl = document.querySelector(`.p-scrollFade__grid__right.jQuery{type}`);
  const images = document.querySelectorAll(`.p-scrollFade__grid__right--img.jQuery{type}`);

  if (!triggerEl || images.length < 2) return;

  ScrollTrigger.create({
    trigger: triggerEl,
    start: "top top",
    end: "bottom",
    pin: true,
    scrub: true,
    markers: true,
    onUpdate: (self) => {
      const progress = self.progress;
      // console.log(progress)
      images[0].style.opacity = progress > 0.5 ? 0 : 1;
      images[1].style.opacity = progress > 0.5 ? 1 : 0;
    }
  });
});