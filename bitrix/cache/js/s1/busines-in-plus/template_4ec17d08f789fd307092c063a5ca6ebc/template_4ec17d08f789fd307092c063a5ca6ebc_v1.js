
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
; /* Start:"a:4:{s:4:"full";s:92:"/local/templates/.default/components/bitrix/menu/bootstrap_menu/script.min.js?17095693544044";s:6:"source";s:73:"/local/templates/.default/components/bitrix/menu/bootstrap_menu/script.js";s:3:"min";s:77:"/local/templates/.default/components/bitrix/menu/bootstrap_menu/script.min.js";s:3:"map";s:77:"/local/templates/.default/components/bitrix/menu/bootstrap_menu/script.map.js";}"*/
(function(e){if(!e.BX||BX.CatalogMenu)return;BX.CatalogMenu={items:{},idCnt:1,currentItem:null,overItem:null,outItem:null,timeoutOver:null,timeoutOut:null,getItem:function(e){if(!BX.type.isDomNode(e))return null;var o=!e.id||!BX.type.isNotEmptyString(e.id)?e.id="menu-item-"+this.idCnt++:e.id;if(!this.items[o])this.items[o]=new t(e);return this.items[o]},itemOver:function(e){var t=this.getItem(e);if(!t)return;if(this.outItem==t){clearTimeout(t.timeoutOut)}this.overItem=t;if(t.timeoutOver){clearTimeout(t.timeoutOver)}t.timeoutOver=setTimeout(function(){if(BX.CatalogMenu.overItem==t){t.itemOver()}},100)},itemOut:function(e){var t=this.getItem(e);if(!t)return;this.outItem=t;if(t.timeoutOut){clearTimeout(t.timeoutOut)}t.timeoutOut=setTimeout(function(){if(t!=BX.CatalogMenu.overItem){t.itemOut()}if(t==BX.CatalogMenu.outItem){t.itemOut()}},100)},removeHover:function(e){if(typeof e!=="object")return false;var t=e.parentNode.querySelectorAll('[data-role="bx-menu-item"]');for(var o=0;o<t.length;o++){if(e==t[o])continue;if(BX.hasClass(t[o],"bx-hover"))BX.removeClass(t[o],"bx-hover")}}};var t=function(e){this.element=e;this.popup=BX.findChild(e,{className:"bx_children_container"},false,false);this.isLastItem=BX.lastChild(this.element.parentNode)==this.element};t.prototype.itemOver=function(){if(!BX.hasClass(this.element,"bx-hover")){BX.addClass(this.element,"bx-hover");var e=BX.findChild(this.element,{className:"bx-nav-2-lvl-container"},true,false);if(e){var t=e.getBoundingClientRect().left+e.offsetWidth;if(t>document.body.clientWidth)e.style.right=0}}};t.prototype.itemOut=function(){BX.removeClass(this.element,"bx-hover")}})(window);BX.namespace("BX.Main.MenuComponent");BX.Main.MenuComponent.CatalogHorizontal=function(){var e=function(e,t){this.menuBlockId=e||"";this.itemImgDesc=t||"";this.resizeMenu();BX.bind(window,"resize",BX.proxy(this.resizeMenu,this))};e.prototype.clickInMobile=function(e,t){if(!BX.hasClass(e,"bx-hover")){t.preventDefault()}};e.prototype.toggleInMobile=function(e){var t=BX.findParent(e,{className:"bx-nav-parent"});var o=e.firstChild;if(BX.hasClass(t,"bx-opened")){BX.removeClass(t,"bx-opened");BX.removeClass(o,"bx-nav-angle-top");BX.addClass(o,"bx-nav-angle-bottom")}else{BX.addClass(t,"bx-opened");BX.addClass(o,"bx-nav-angle-top");BX.removeClass(o,"bx-nav-angle-bottom")}};e.prototype.resizeMenu=function(){var e=this.templateWrap;var t=document.body.querySelector("[data-role='bx-menu-mobile']");var o=document.body.querySelector("[data-role='bx-menu-button-mobile']");var i=document.body.querySelector("[data-role='bx-menu-button-mobile-position']");if(document.body.clientWidth<=767){if(!t){t=BX.create("div",{attrs:{className:"bx-aside-nav","data-role":"bx-menu-mobile"},children:[BX.clone(BX("ul_"+this.menuBlockId))]});document.body.insertBefore(t,document.body.firstChild)}if(!o){o=BX.create("div",{attrs:{className:"bx-aside-nav-control bx-closed","data-role":"bx-menu-button-mobile"},children:[BX.create("i",{attrs:{className:"bx-nav-bars"}})],events:{click:function(){if(BX.hasClass(this,"bx-opened")){BX.removeClass(this,"bx-opened");BX.removeClass(t,"bx-opened");BX.addClass(this,"bx-closed");document.body.style.overflow="";BX.removeClass(document.body,"bx-opened")}else{BX.addClass(this,"bx-opened");BX.addClass(t,"bx-opened");BX.removeClass(this,"bx-closed");document.body.style.overflow="hidden";BX.addClass(document.body,"bx-opened")}}}});i.appendChild(o)}}else{BX.removeClass(t,"bx-opened");BX.removeClass(document.body,"bx-opened");document.body.style.overflow="";if(o)BX.removeClass(o,"bx-opened")}};e.prototype.changeSectionPicure=function(e,t){var o=BX.findParent(e,{className:"bx-nav-1-lvl"});if(!o)return;var i=o.querySelector("[data-role='desc-img-block']");if(!i)return;var n=BX.findChild(i,{tagName:"img"},true,false);if(n)n.src=this.itemImgDesc[t]["PICTURE"];var a=BX.findChild(i,{tagName:"a"},true,false);if(a)a.href=e.href;var s=BX.findChild(i,{tagName:"p"},true,false);if(s)s.innerHTML=this.itemImgDesc[t]["DESC"]};return e}();
/* End */
;; /* /local/templates/busines-in-plus/assets/js/main.js?17095558742513*/
; /* /local/templates/.default/components/bitrix/menu/bootstrap_menu/script.min.js?17095693544044*/

//# sourceMappingURL=template_4ec17d08f789fd307092c063a5ca6ebc.map.js