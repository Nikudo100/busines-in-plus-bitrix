
; /* Start:"a:4:{s:4:"full";s:65:"/local/templates/busines-in-plus/assets/js/main.js?17100773633922";s:6:"source";s:50:"/local/templates/busines-in-plus/assets/js/main.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
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



// Fancybox.bind('[data-fancybox="gallery"]', {
//   closeButton: true
// });


document.addEventListener("DOMContentLoaded", function() {
  var downloadBtn = document.querySelector('.download-brif');

    downloadBtn.addEventListener('click', function(event) {
        event.preventDefault();

        var url = '/upload/doc/brif.pdf'; // Путь к файлу на сервере
        var anchor = document.createElement('a');
        anchor.href = url;
        anchor.target = '_blank';
        anchor.download = 'brif.pdf'; // Имя файла при загрузке

        document.body.appendChild(anchor);
        anchor.click();
        document.body.removeChild(anchor);
    });

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


$(document).ready(function () {

  $(document).on('click', '.load-more-items', function () {

    var targetContainer = $('.events-page-row'),
      url = $('.load-more-items').attr('data-url');

    if (url !== undefined) {
      $.ajax({
        type: 'GET',
        url: $('.load-more-items').attr('data-url'),
        dataType: 'html',
        success: function (data) {
          console.log(targetContainer);
          $('.load-more-items').remove();

          var elements = $(data).find('.events-page-row-l-block'),
            pagination = $(data).find('.load-more-items');

          targetContainer.append(elements);
          $('#pag').append(pagination);

        }
      });
    }

  });

  $('.grid').masonry({
    itemSelector: '.grid-item',
    columnWidth: 160
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
; /* Start:"a:4:{s:4:"full";s:89:"/local/templates/.default/components/bitrix/menu/menu_footer/script.min.js?17100686754034";s:6:"source";s:70:"/local/templates/.default/components/bitrix/menu/menu_footer/script.js";s:3:"min";s:74:"/local/templates/.default/components/bitrix/menu/menu_footer/script.min.js";s:3:"map";s:74:"/local/templates/.default/components/bitrix/menu/menu_footer/script.map.js";}"*/
(function(e){if(!e.BX||BX.CatalogMenu)return;BX.CatalogMenu={items:{},idCnt:1,currentItem:null,overItem:null,outItem:null,timeoutOver:null,timeoutOut:null,getItem:function(e){if(!BX.type.isDomNode(e))return null;var i=!e.id||!BX.type.isNotEmptyString(e.id)?e.id="menu-item-"+this.idCnt++:e.id;if(!this.items[i])this.items[i]=new t(e);return this.items[i]},itemOver:function(e){var t=this.getItem(e);if(!t)return;if(this.outItem==t){clearTimeout(t.timeoutOut)}this.overItem=t;if(t.timeoutOver){clearTimeout(t.timeoutOver)}t.timeoutOver=setTimeout(function(){if(BX.CatalogMenu.overItem==t){t.itemOver()}},100)},itemOut:function(e){var t=this.getItem(e);if(!t)return;this.outItem=t;if(t.timeoutOut){clearTimeout(t.timeoutOut)}t.timeoutOut=setTimeout(function(){if(t!=BX.CatalogMenu.overItem){t.itemOut()}if(t==BX.CatalogMenu.outItem){t.itemOut()}},100)},removeHover:function(e){if(typeof e!=="object")return false;var t=e.parentNode.querySelectorAll('[data-role="bx-menu-item"]');for(var i=0;i<t.length;i++){if(e==t[i])continue;if(BX.hasClass(t[i],"bx-hover"))BX.removeClass(t[i],"bx-hover")}}};var t=function(e){this.element=e;this.popup=BX.findChild(e,{className:"bx_children_container"},false,false);this.isLastItem=BX.lastChild(this.element.parentNode)==this.element};t.prototype.itemOver=function(){if(!BX.hasClass(this.element,"bx-hover")){BX.addClass(this.element,"bx-hover");var e=BX.findChild(this.element,{className:"bx-nav-2-lvl-container"},true,false);if(e){var t=e.getBoundingClientRect().left+e.offsetWidth;if(t>document.body.clientWidth)e.style.right=0}}};t.prototype.itemOut=function(){BX.removeClass(this.element,"bx-hover")}})(window);BX.namespace("BX.Main.MenuComponent");BX.Main.MenuComponent.CatalogHorizontal=function(){var e=function(e,t){this.menuBlockId=e||"";this.itemImgDesc=t||"";this.resizeMenu();BX.bind(window,"resize",BX.proxy(this.resizeMenu,this))};e.prototype.clickInMobile=function(e,t){if(BX.findParent(e,{className:"bx-aside-nav"},true))return;t.preventDefault();e.onclick="";return false};e.prototype.toggleInMobile=function(e){var t=BX.findParent(e,{className:"bx-nav-parent"});var i=e.firstChild;if(BX.hasClass(t,"bx-opened")){BX.removeClass(t,"bx-opened");BX.removeClass(i,"fa-angle-down");BX.addClass(i,"fa-angle-left")}else{BX.addClass(t,"bx-opened");BX.addClass(i,"fa-angle-down");BX.removeClass(i,"fa-angle-left")}};e.prototype.resizeMenu=function(){var e=this.templateWrap;var t=document.body.querySelector("[data-role='bx-menu-mobile']");var i=document.body.querySelector("[data-role='bx-menu-button-mobile']");if(document.body.clientWidth<=767){if(!t){t=BX.create("div",{attrs:{className:"bx-aside-nav","data-role":"bx-menu-mobile"},children:[BX.clone(BX("ul_"+this.menuBlockId))]});document.body.insertBefore(t,document.body.firstChild)}if(!i){i=BX.create("div",{attrs:{className:"bx-aside-nav-control bx-closed","data-role":"bx-menu-button-mobile"},children:[BX.create("i",{attrs:{className:"fa fa-bars"}})],events:{click:function(){if(BX.hasClass(this,"bx-opened")){BX.removeClass(this,"bx-opened");BX.removeClass(t,"bx-opened");BX.addClass(this,"bx-closed");document.body.style.overflow="";BX.removeClass(document.body,"bx-opened")}else{BX.addClass(this,"bx-opened");BX.addClass(t,"bx-opened");BX.removeClass(this,"bx-closed");document.body.style.overflow="hidden";BX.addClass(document.body,"bx-opened")}}}});document.body.insertBefore(i,document.body.firstChild)}}else{BX.removeClass(t,"bx-opened");BX.removeClass(document.body,"bx-opened");document.body.style.overflow="";if(i)BX.removeClass(i,"bx-opened")}};e.prototype.changeSectionPicure=function(e,t){var i=BX.findParent(e,{className:"bx-nav-1-lvl"});if(!i)return;var o=i.querySelector("[data-role='desc-img-block']");if(!o)return;var n=BX.findChild(o,{tagName:"img"},true,false);if(n)n.src=this.itemImgDesc[t]["PICTURE"];var a=BX.findChild(o,{tagName:"a"},true,false);if(a)a.href=e.href;var s=BX.findChild(o,{tagName:"p"},true,false);if(s)s.innerHTML=this.itemImgDesc[t]["DESC"]};return e}();
/* End */
;; /* /local/templates/busines-in-plus/assets/js/main.js?17100773633922*/
; /* /local/templates/.default/components/bitrix/menu/menu_footer/script.min.js?17100686754034*/

//# sourceMappingURL=template_f43089ff102bacc64d54d5ae9963a6e9.map.js