
Runner.pages.PageSettings.addPageEvent('000_global',Runner.pages.constants.PAGE_ADD,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){var ctrl=Runner.getControl(pageid,'TIPO');ctrl.makeReadonly();});Runner.pages.PageSettings.addPageEvent('000_global',Runner.pages.constants.PAGE_EDIT,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){var ctrl=Runner.getControl(pageid,'TIPO');ctrl.makeReadonly();});Runner.pages.PageSettings.addPageEvent('000_global',Runner.pages.constants.PAGE_LIST,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){if(proxy["updated"]){Swal.fire({position:'top',icon:'success',title:'La información se ha modificado!',showConfirmButton:false,timer:2500})}
if(proxy["added"]){Swal.fire({position:'top',icon:'success',title:'Se ha creado un nuevo registro',showConfirmButton:false,timer:2500})}});