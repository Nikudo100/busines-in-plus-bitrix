{"version":3,"file":"youtube_mediaservice.map.js","names":["BX","namespace","Landing","MediaService","Youtube","url","settings","BaseMediaService","apply","this","arguments","matcher","Utils","Matchers","youtube","embedURL","previewURL","loadEmbedInfo","idPlace","params","autoplay","controls","loop","mute","rel","start","html5","validate","test","prototype","constructor","__proto__","getSettingsForm","form","UI","Form","BaseForm","getSettings","addField","Field","Dropdown","title","Loc","getMessage","description","selector","content","isBgVideoMode","parseInt","items","name","value","onChange","onAutoplayChange","disabled","muteField","setValue","disable","descriptionText","setDescription","removeDescription","enable","Unit","unit","placeholder","oembedUrl","ajax","method","dataType","onsuccess","result","height","width","isVertical","thumbnail_url"],"sources":["youtube_mediaservice.js"],"mappings":"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"}