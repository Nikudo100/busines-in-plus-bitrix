{"version":3,"file":"script.map.js","names":["exports","main_core","main_core_events","_templateObject","_templateObject2","_classPrivateMethodInitSpec","obj","privateSet","_checkPrivateRedeclaration","add","_classPrivateMethodGet","receiver","fn","has","TypeError","_classPrivateFieldInitSpec","privateMap","value","set","privateCollection","namespace","Reflection","_items","WeakMap","Config","options","_this","this","babelHelpers","classCallCheck","defineProperty","writable","scopes","forEach","item","config","classPrivateFieldGet","push","BX","Ui","Form","ConfigItem","popupContainer","componentId","_scopeId","_members","_node","_selectedItems","_moduleId","_openPopupEvent","_reinitDialogEvent","_drawMembers","WeakSet","_createMember","_createPlusButton","_showPopup","_addEvents","_getSelectedItems","_removeEvents","_adjust","_EventEmitter","inherits","_this2","possibleConstructorReturn","getPrototypeOf","call","assertThisInitialized","setEventNamespace","classPrivateFieldSet","concat","drawingIconsLimit","_drawMembers2","addToAccessCodesHandler","delegate","onAddToAccessCodes","removeFromAccessCodesHandler","onRemoveFromAccessCodes","closePopupHandler","onClosePopup","addCustomEvent","onGridUpdate","bind","setTimeout","onCustomEvent","openDialogWhenInit","createClass","key","params","_adjust2","event","isOpen","_removeEvents2","_this3","ajax","runComponentAction","data","moduleId","scopeId","accessCodes","_getSelectedItems2","then","result","onMemberSelect","state","EventEmitter","emit","onDialogClose","onMemberUnselect","i","member","appendChild","_createMember2","_createPlusButton2","children","avatar","Tag","render","taggedTemplateLiteral","url","Text","encode","name","Dom","create","attrs","class","_this4","events","click","_showPopup2","_addEvents2","selectorInstance","Main","selectorManagerV2","controls","itemsSelected","id","bindNode","selectorId","selectedItems","subscribe","items","type","toUpperCase","unsubscribe","members","firstChild","removeChild","window","Event"],"sources":["script.js"],"mappings":"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"}