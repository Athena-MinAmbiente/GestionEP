
Runner.pages.PageSettings.addPageEvent('nopaa_master_stat_0',Runner.pages.constants.PAGE_EDIT,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){var ctrlb=Runner.getControl(pageid,'ACT_ID');ctrlb.makeReadonly();var ctrla=Runner.getControl(pageid,'PAAID_INTEGRADO');ctrla.makeReadonly();var ctrle=Runner.getControl(pageid,'responsable');ctrle.makeReadonly();var ctrlo=Runner.getControl(pageid,'PAA_ID');ctrlo.makeReadonly();var ctrlu=Runner.getControl(pageid,'CDP_INTEGRADO');ctrlu.makeReadonly();});