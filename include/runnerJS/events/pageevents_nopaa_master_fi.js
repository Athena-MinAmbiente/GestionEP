
Runner.pages.PageSettings.addPageEvent('nopaa_master_fi',Runner.pages.constants.PAGE_ADD,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){var ctrl=Runner.getControl(pageid,'VALOR_VIGENCIA');ctrl.makeReadonly();});