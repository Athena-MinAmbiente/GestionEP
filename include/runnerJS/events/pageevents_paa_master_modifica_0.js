
Runner.pages.PageSettings.addPageEvent('paa_master_modifica_0',Runner.pages.constants.PAGE_EDIT,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){var ctrla=Runner.getControl(pageid,'SYS_USER');ctrla.makeReadonly();var ctrlb=Runner.getControl(pageid,'PAA_ID_FK');ctrlb.makeReadonly();});