document
  .querySelector("#js-drawer-button")
  .addEventListener("click", function (e) {
    e.preventDefault();

    document.querySelector("#js-drawer-button").classList.toggle("is-checked");
    document.querySelector("#js-drawer-content").classList.toggle("is-checked");
  });

document
  .querySelectorAll('#js-drawer-content a[href^="#"]')
  .forEach(function (link) {
    link.addEventListener("click", function (e) {
      document
        .querySelector("#js-drawer-button")
        .classList.remove("is-checked");
      document
        .querySelector("#js-drawer-content")
        .classList.remove("is-checked");
    });
  });

const swiper = new Swiper("#js-works-swiper", {
  spaceBetween: 82, // スライド間に20pxの余白を設定

  // Optional parameters
  loop: true,

  // If we need pagination
  pagination: {
    el: "#js-works-pagination",
    clickable: true,
  },

  // Navigation arrows
  navigation: {
    nextEl: "#js-works-next",
    prevEl: "#js-works-prev",
  },

  // 自動再生
  autoplay: {
    delay: 1500,
    disableOnInteraction: false,
  },
  speed: 3000,
});

document.addEventListener("DOMContentLoaded", () => {
  const emailElement = document.querySelector(".contact__e-mail");
  const hiddenText = document.querySelector(".is-hidden-text");
  const contactImg = document.querySelector(".contact-img");

  // ホバー時に .is-hidden-text を表示
  emailElement.addEventListener("mouseenter", () => {
    hiddenText.style.opacity = "1";
    hiddenText.style.visibility = "visible";
    contactImg.style.opacity = "0.6";
  });

  // ホバーが外れたら .is-hidden-text を非表示
  emailElement.addEventListener("mouseleave", () => {
    hiddenText.style.opacity = "0";
    hiddenText.style.visibility = "hidden";
    contactImg.style.opacity = "1";
  });
});

jQuery(function () {
  const pagetop = jQuery("#pageTop");
  pagetop.hide();
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 80) {
      pagetop.fadeIn(300);
    } else {
      pagetop.fadeOut(300);
    }
  });
  pagetop.click(function () {
    jQuery("body,html").animate({ scrollTop: 0 }, 500);
    return false;
  });
});

jQuery("#js-drawer-button").on("click", function (e) {
  e.preventDefault();
  jQuery("body").toggleClass("is-fixed");
});
