
Runner.pages.PageSettings.addPageEvent('paa_master_pscdp_f',Runner.pages.constants.PAGE_ADD,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){var ctrl=Runner.getControl(pageid,'UNIDAD_CONTRATACION');ctrl.makeReadonly();});