
Runner.pages.PageSettings.addPageEvent('006_compromisos',Runner.pages.constants.PAGE_IMPORT,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){var popup=Runner.displayPopup({url:"global_fecha_actualiza_siif_edit.php?editid1=1",header:'Fijar fecha de actualización',afterCreate:function(win){popup.setWidth(700);popup.setHeight(900);}});});