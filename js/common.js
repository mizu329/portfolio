document.addEventListener('DOMContentLoaded', function() {
  const currentUrl = window.location.href;

  // 「/contact」を含むURLだけ
  if (currentUrl.includes('/contact')) {
    const popup = document.getElementById('custom-popup');
    const closeBtn = document.getElementById('close-popup');

    popup.style.display = 'block';

    // ✅ 表示イベントをGAに送信
    gtag('event', 'popup_view', {
      event_category: 'Popup',
      event_label: currentUrl
    });

    closeBtn.addEventListener('click', function() {
      popup.style.display = 'none';

      // ✅ 閉じるボタンクリックをGAに送信
      gtag('event', 'popup_close_click', {
        event_category: 'Popup',
        event_label: currentUrl
      });
    });
  }
});

// メニュー展開時に背景を固定
const backgroundFix = (bool) => {
    const scrollingElement = () => {
      const browser = window.navigator.userAgent.toLowerCase();
      if ("scrollingElement" in document) return document.scrollingElement;
      return document.documentElement;
    };
  
    const scrollY = bool
      ? scrollingElement().scrollTop
      : parseInt(document.body.style.top || "0");
  
    const fixedStyles = {
      height: "100vh",
      position: "fixed",
      top: `${scrollY * -1}px`,
      left: "0",
      width: "100vw"
    };
  
    Object.keys(fixedStyles).forEach((key) => {
      document.body.style[key] = bool ? fixedStyles[key] : "";
    });
  
    if (!bool) {
      window.scrollTo(0, scrollY * -1);
    }
  };
  
  // 変数定義
  const CLASS = "-active";
  let flg = false;
  let accordionFlg = false;
  
  let hamburger = document.getElementById("js-hamburger");
  let focusTrap = document.getElementById("js-focus-trap");
  let menu = document.querySelector(".js-nav-area");
  let accordionTrigger = document.querySelectorAll(".js-sp-accordion-trigger");
  let accordion = document.querySelectorAll(".js-sp-accordion");
  
  // メニュー開閉制御
  hamburger.addEventListener("click", (e) => { //ハンバーガーボタンが選択されたら
    e.currentTarget.classList.toggle(CLASS);
    menu.classList.toggle(CLASS);
    if (flg) {// flgの状態で制御内容を切り替え
      backgroundFix(false);
      hamburger.setAttribute("aria-expanded", "false");
      hamburger.focus();
      flg = false;
    } else {
      backgroundFix(true);
      hamburger.setAttribute("aria-expanded", "true");
      flg = true;
    }
  });
  window.addEventListener("keydown", () => { //escキー押下でメニューを閉じられるように
    if (event.key === "Escape") {
      hamburger.classList.remove(CLASS);
      menu.classList.remove(CLASS);
  
      backgroundFix(false);
      hamburger.focus();
      hamburger.setAttribute("aria-expanded", "false");
      flg = false;
    }
  });
  
  // メニュー内アコーディオン制御
  accordionTrigger.forEach((item) => {
    item.addEventListener("click", (e) => {
      e.currentTarget.classList.toggle(CLASS);
      e.currentTarget.nextElementSibling.classList.toggle(CLASS);
      if (accordionFlg) {
        e.currentTarget.setAttribute("aria-expanded", "false");
        accordionFlg = false;
      } else {
        e.currentTarget.setAttribute("aria-expanded", "true");
        accordionFlg = true;
      }
    });
  
  });
  
  // フォーカストラップ制御
  focusTrap.addEventListener("focus", (e) => {
    hamburger.focus();
  });


  document.addEventListener('scroll', function() {
    const elements = document.querySelectorAll('.animationElement'); // すべてのアニメーション対象要素を取得

    elements.forEach(element => {
        const position = element.getBoundingClientRect();

        // 要素がビューポートに入ったかどうかをチェック
        if (position.top < window.innerHeight && position.bottom >= 0) {
            element.classList.add('slideinTop'); // アニメーションを適用
        }
    });
});
