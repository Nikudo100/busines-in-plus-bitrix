{"version":3, "file":"template_71efee5f8efce11d1249152d4844ea5a.js", "sections": [{"offset": { "line": 164, "column": 0 }, "map": {"version":3,"sources":["/local/templates/.default/components/bitrix/menu/menu_footer/script.js"],"names":["window","BX","CatalogMenu","items","idCnt","currentItem","overItem","outItem","timeoutOver","timeoutOut","getItem","item","type","isDomNode","id","isNotEmptyString","this","CatalogMenuItem","itemOver","menuItem","clearTimeout","setTimeout","itemOut","removeHover","curItem","parentNode","querySelectorAll","i","length","hasClass","removeClass","element","popup","findChild","className","isLastItem","lastChild","prototype","addClass","popupRightEdge","getBoundingClientRect","left","offsetWidth","document","body","clientWidth","style","right","namespace","Main","MenuComponent","CatalogHorizontal","menuBlockId","itemImgDesc","resizeMenu","bind","proxy","clickInMobile","event","findParent","preventDefault","onclick","toggleInMobile","parentObj","arrow","firstChild","templateWrap","menuMobile","querySelector","menuMobileButton","create","attrs","data-role","children","clone","insertBefore","events","click","overflow","changeSectionPicure","itemId","curLi","imgDescObj","imgObj","tagName","src","linkObj","href","descObj","innerHTML"],"mappings":"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","file":"script.map.js"}}]}