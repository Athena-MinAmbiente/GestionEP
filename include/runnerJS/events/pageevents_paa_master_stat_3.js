
Runner.pages.PageSettings.addPageEvent('paa_master_stat_3',Runner.pages.constants.PAGE_EDIT,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){var ctrl=Runner.getControl(pageid,'ACT_ID');ctrl.makeReadonly();var ctrla=Runner.getControl(pageid,'registrado_por');ctrla.makeReadonly();var ctrlb=Runner.getControl(pageid,'TIPOSOL');ctrlb.makeReadonly();var ctrlc=Runner.getControl(pageid,'TIPO');ctrlc.makeReadonly();var ctrld=Runner.getControl(pageid,'PROD_ID');ctrld.makeReadonly();});