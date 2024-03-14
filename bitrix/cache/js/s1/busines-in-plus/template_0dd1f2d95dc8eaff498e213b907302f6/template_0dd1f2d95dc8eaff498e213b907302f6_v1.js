
; /* Start:"a:4:{s:4:"full";s:65:"/local/templates/busines-in-plus/assets/js/main.js?17095558742513";s:6:"source";s:50:"/local/templates/busines-in-plus/assets/js/main.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
// Import our custom CSS
// import '../scss/style.scss'
// import '../js/libs/swiper/swiper-bundle.min.css'
// import '../js/libs/swiper/swiper-bundle.min.js'
// import '../js/libs/swiper/swiper-6.5.0.min.js'
// import { Fancybox } from "@fancyapps/ui";
// import "@fancyapps/ui/dist/fancybox/fancybox.css";
// Import all of Bootstrap's JS
// import * as bootstrap from 'bootstrap'

// Fancybox = fans


Fancybox.bind('[data-fancybox="gallery"]', {
  closeButton: true
});


document.addEventListener('DOMContentLoaded', function () {
  const opportunities = document.querySelectorAll('.opportunities-list-li');

  opportunities.forEach(function (opportunity) {
    opportunity.addEventListener('click', function () {
      opportunities.forEach(function (item) {
        item.classList.remove('active');
      });

      this.classList.add('active');
    });
  });
});

//tab
document.addEventListener("DOMContentLoaded", function () {
  var tabs = document.querySelectorAll('.why-tabs-tab');
  var contents = document.querySelectorAll('.why-content');

  tabs.forEach(function (tab, index) {
    tab.addEventListener('click', function () {
      tabs.forEach(function (tab) {
        tab.classList.remove('active');
      });
      contents.forEach(function (content) {
        content.classList.remove('active');
      });
      this.classList.add('active');
      contents[index].classList.add('active');
    });
  });
});



// Получаем все точки
// const points = document.querySelectorAll('.point');
// // Создаем SVG элемент для линий
// const linesSVG = document.querySelector('.lines');

// // Создаем линии между точками
// for (let i = 0; i < points.length - 1; i++) {
//   const x1 = parseFloat(points[i].style.left) + 5; // Центр точки x
//   const y1 = 200 - parseFloat(points[i].style.bottom) - 5; // Центр точки y
//   const x2 = parseFloat(points[i + 1].style.left) + 5;
//   const y2 = 200 - parseFloat(points[i + 1].style.bottom) - 5;

//   // Создаем линию и устанавливаем координаты
//   const line = document.createElementNS('http://www.w3.org/2000/svg', 'line');
//   line.setAttribute('x1', x1);
//   line.setAttribute('y1', y1);
//   line.setAttribute('x2', x2);
//   line.setAttribute('y2', y2);

//   // Добавляем линию в SVG элемент
//   linesSVG.appendChild(line);
// }
/* End */
;
; /* Start:"a:4:{s:4:"full";s:90:"/bitrix/components/bitrix/menu/templates/horizontal_multilevel/script.min.js?1709407544407";s:6:"source";s:72:"/bitrix/components/bitrix/menu/templates/horizontal_multilevel/script.js";s:3:"min";s:76:"/bitrix/components/bitrix/menu/templates/horizontal_multilevel/script.min.js";s:3:"map";s:76:"/bitrix/components/bitrix/menu/templates/horizontal_multilevel/script.map.js";}"*/
var jshover=function(){var e=document.getElementById("horizontal-multilevel-menu");if(!e)return;var t=e.getElementsByTagName("li");for(var n=0;n<t.length;n++){t[n].onmouseover=function(){this.className+=" jshover"};t[n].onmouseout=function(){this.className=this.className.replace(new RegExp(" jshover\\b"),"")}}};if(window.attachEvent)window.attachEvent("onload",jshover);
/* End */
;; /* /local/templates/busines-in-plus/assets/js/main.js?17095558742513*/
; /* /bitrix/components/bitrix/menu/templates/horizontal_multilevel/script.min.js?1709407544407*/

//# sourceMappingURL=template_0dd1f2d95dc8eaff498e213b907302f6.map.js