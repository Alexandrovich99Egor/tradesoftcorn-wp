jQuery(document).ready(function ($) {
  var owl = $(".project_carousel").owlCarousel({
    loop: false,
    margin: 15,
    center: true,
    startPosition: 2,
    autoplay: false,
    navText: [
      '<i class="fa fa-angle-left" aria-hidden="true"></i>',
      '<i class="fa fa-angle-right" aria-hidden="true"></i>',
    ],
    autoplayHoverPause: true,
    responsive: {
      0: {
        center: false,
        items: 1,
        margin: 0,
      },
      769: {
        items: 2,
      },
      992: {
        center: true,
        items: 3,
      },
    },
  });

  owl.owlcarousel2_filter;

  $(".owl-filter-bar").on("click", ".item", function (e) {
    var $items = $(".owl-filter-bar a");
    var $item = $(this);
    var filter = $item.data("owl-filter");
    $items.removeClass("active");
    $item.addClass("active");
    owl.owlcarousel2_filter(filter);

    e.preventDefault();
  });
  let contentOut = document.querySelector(".canculator__content");
  let inpSelect = document.querySelector(".form__select");
  let inpEnterHumidity = document.querySelector(".input__select-humidity");
  let inpEnterImpurity = document.querySelector(".input__select-impurity");
  // переменные ауты ведут на вычисление влажности зерна
  let discountResult = document.querySelector(".discount-result");
  let discountResultPercentOut = document.querySelector(".percent-discount");
  let discountTotalHrivna = document.querySelector(".total-discount");
  // переменніе для вычисления засорения зерна
  discountImpurityHrivnaOut = document.querySelector(".discount-result-int");
  let discountImpurityPercentOut = document.querySelector(
    ".percent-discount-int"
  );
  let discountImpurityHrivnaTotalOut = document.querySelector(
    ".total-discount-int"
  );

  // Элемент для вывода результата

  // Показатели влажности зерна
  let wheatHumidity = 14;
  let sunflowerHumidity = 8;
  let cornHumidity = 14.5;
  let soybeanHumidity = 12;

  // Показатели Сорной примеси
  let wheatHumiditySorn = 2;
  let sunflowerHumiditySorn = 3;
  let cornHumiditySorn = 2;
  let soybeanHumiditySorn = 2;

  inpSelect.addEventListener("change", () => {
    calculateDiscount();
    calculateDiscountImpurity();
  });

  // имут влаги
  inpEnterHumidity.addEventListener("input", () => {
    // для подсчета общей суммы грн
    calculateDiscount();
    // див показать
  });

  // импут мусора
  inpEnterImpurity.addEventListener("input", () => {
    calculateDiscountImpurity();
    // для подсчета общей суммы грн
    CountDiscountImpurity();
    // показать див
  });

  // Функция для рассчета скидки по влажности
  function calculateDiscount() {
    let grainType = inpSelect.value;
    let humidity = inpEnterHumidity.value;
    let discountPercentage;

    if (grainType === "wheat") {
      discountPercentage = wheatHumidity;
    } else if (grainType === "sunflower") {
      discountPercentage = sunflowerHumidity;
    } else if (grainType === "corn") {
      discountPercentage = cornHumidity;
    } else if (grainType === "soybeans") {
      discountPercentage = soybeanHumidity;
    }

    // Скидка в грн
    if (!isNaN(humidity) && !isNaN(discountPercentage)) {
      let Y = 150;
      let discount =
        ((humidity - discountPercentage) * Y * (100 - discountPercentage)) /
        (100 - discountPercentage);

      if (discount < 0) {
        discount = 0;
      }
      discountResult.textContent = `${discount.toFixed(2)} грн.`;
      CountDiscount(discount);
    } else {
      discountResult.textContent = "";
    }

    // Скидка в %
    if (!isNaN(humidity) && !isNaN(discountPercentage)) {
      let discountPercentResult =
        ((humidity - discountPercentage) / (100 - discountPercentage)) * 100;
      if (discountPercentResult < 0) {
        discountPercentResult = 0;
      }

      discountResultPercentOut.innerHTML = `${discountPercentResult.toFixed(
        2
      )}`;
      calculateDiscountImpurity(discountPercentResult);
    }
    // если значений нету
    humidity == ""
      ? (inpEnterHumidity.style.border = "1px solid red")
      : (inpEnterHumidity.style.border = "1px solid green");
  }

  // функиця обчисления скидки общей %+грн
  function CountDiscount(FirstValue) {
    let Y = 150;
    if (FirstValue !== null && FirstValue > 0) {
      let discountInHryvnia = FirstValue;
      let totalDiscount = (discountInHryvnia * Y) / 100;

      discountTotalHrivna.innerHTML = `${totalDiscount.toFixed(2)}грн.`;
    }
  }

  function CountDiscountImpurity(FirstValue) {
    let Y = 150;
    if (FirstValue !== null && FirstValue > 0) {
      let discountInHryvnia = FirstValue;
      let totalDiscount = (discountInHryvnia * Y) / 100;

      discountImpurityHrivnaTotalOut.innerHTML = `${totalDiscount.toFixed(
        2
      )}грн.`;
    }
  }

  // фУнкция расчета скидки по засорению
  function calculateDiscountImpurity() {
    // Переменнные которые соответсвуют типу зерна.
    let grainType = inpSelect.value;
    let inpEnterImpurityValue = inpEnterImpurity.value;
    let discountPercentage;
    let Y = 30;
    let base = 100;

    if (grainType == "wheat") {
      discountPercentage = wheatHumiditySorn;
    } else if (grainType == "sunflower") {
      discountPercentage = sunflowerHumiditySorn;
      Y = 45;
    } else if (grainType == "corn") {
      discountPercentage = cornHumiditySorn;
    } else if (grainType == "soybeans") {
      discountPercentage = soybeanHumiditySorn;
    }

    if (!isNaN(inpEnterImpurityValue) && !isNaN(discountPercentage)) {
      discountValueImpurity =
        ((inpEnterImpurityValue - discountPercentage) *
          Y *
          (100 - discountPercentage)) /
        (100 - inpEnterImpurityValue);


      if (discountValueImpurity < 0) {
        discountValueImpurity = 0;
      }

      discountImpurityHrivnaOut.innerHTML = `${discountValueImpurity.toFixed(
        2
      )}`;

      // перадал в фукнцию значиение грн что бы посчитать
      CountDiscountImpurity(discountValueImpurity);
    }
    if (!isNaN(inpEnterImpurityValue) && !isNaN(discountPercentage)) {
      let discountPercentImpurity =
        ((inpEnterImpurityValue - discountPercentage) /
          (100 - discountPercentage)) *
        100;

      if (discountPercentImpurity < 0) {
        discountPercentImpurity = 0;
      }

      discountImpurityPercentOut.innerHTML = `${discountPercentImpurity.toFixed(
        2
      )}%`;
    }

    inpEnterImpurity.value == ""
      ? (inpEnterImpurity.style.border = "1px solid red")
      : (inpEnterImpurity.style.border = "1px solid green");
  }
});
