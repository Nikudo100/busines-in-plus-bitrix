{"version":3,"file":"text.bundle.map.js","names":["this","BX","Landing","exports","main_core","landing_node_base","landing_node_tableeditor","escapeText","Utils","matchers","Matchers","changeTagName","textToPlaceholders","Text","Base","constructor","options","super","currentNode","type","tableBaseFontSize","onClick","bind","onPaste","onDrop","onInput","onKeyDown","onMousedown","onMouseup","bindEvents","node","Event","document","onAllowInlineEdit","setAttribute","Loc","getMessage","onChange","preventAdjustPosition","preventHistory","call","UI","Panel","EditorPanel","getInstance","adjustPosition","History","push","event","code","onBackspaceDown","clearTimeout","inputTimeout","key","keyCode","which","test","top","window","navigator","userAgent","ctrlKey","metaKey","setTimeout","lastValue","getValue","isTable","tableFontSize","parseInt","getComputedStyle","srcElement","getPropertyValue","textContent","Dom","hasClass","addClass","removeClass","onEscapePress","isEditable","hide","disableEdit","preventDefault","clipboardData","getData","sourceText","encodedText","encode","isLinkPasted","prepareToLink","formattedHtml","replaceAll","execCommand","text","onDocumentClick","fromNode","EventEmitter","emit","manifest","group","allowInlineEdit","Main","isControlsEnabled","stopPropagation","enableEdit","querySelectorAll","forEach","table","hasAttribute","prepareNewTable","textOnly","StylePanel","isShown","show","buttons","nodeTableContainerList","tableContainer","tableEditor","unselect","Tool","ColorPicker","hideAll","requestAnimationFrame","target","nodeName","parentElement","range","createRange","selectNode","getSelection","removeAllRanges","addRange","addTableButtons","isContentEditable","length","nodeTableContainer","TableEditor","Node","getDesignButton","isHeader","getChangeTagButton","onChangeHandler","onChangeTag","contentEditable","designButton","Button","Design","html","attrs","title","onDesignShow","insertBefore","isAllowInlineEdit","getField","field","setValue","innerHTML","content","Field","selector","name","changeTagButton","value","preventSave","isSavePrevented","querySelector","cloneNode","prepareTable","headerTag","nodeIsTable","contains","tdTag","remove","neededButtons","setTd","tableButtons","getTableButtons","tableAlignButtons","isCell","isButtonAddRow","isButtonAddCol","isNeedTablePanel","hideButtons","nodeTableList","nodeTable","isSelectedAll","tableButton","parentNode","children","getAmountTableRows","neededButton","childNodes","childNodesArray","childNodesArrayPrepare","childNode","nodeType","neededPosition","indexOf","rows","row","rowChildPrepare","rowChildNode","getAmountTableCols","th","closest","insertAfter","activeAlignButtonId","setActiveAlignButtonId","undefined","count","isIdentical","tableAlignButton","id","layout","alignButtons","ChangeTag","toLowerCase","activateItem","AlignTable","TableColorAction","DeleteElementTable","StyleTable","CopyTable","DeleteTable","data","changeOptionsHandler","then","catch","setClassesForRemove","className","element","selection","position","getRangeAt","startOffset","focusNode","Type","isNil","firstChild","focusNodeParent","allowedNodeName","Set","has","focusNodeContainer","createElement","append","contentNode","after","reg","Boolean"],"sources":["text.bundle.js"],"mappings":"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"}