
Runner.pages.PageSettings.addPageEvent('paa_master_msj',Runner.pages.constants.PAGE_ADD,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){var ctrl=Runner.getControl(pageid,'user');ctrl.makeReadonly();});