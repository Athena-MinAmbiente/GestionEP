
Runner.pages.PageSettings.addPageEvent('paa_master_pscdp_0',Runner.pages.constants.PAGE_EDIT,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){var ctrl=Runner.getControl(pageid,'USER_REG');ctrl.makeReadonly();var ctrla=Runner.getControl(pageid,'UNIDAD_CONTRATACION');ctrla.makeReadonly();pageObj.hideField('UEJ');pageObj.hideField('RUBRO');pageObj.hideField('PRODUCTO');pageObj.hideField('ACTIVIDAD');pageObj.hideField('DESC_PAA');pageObj.hideField('DESC_CDP');var ctrl=Runner.getControl(pageid,"UNIDAD_CONTRATACION");if(ctrl.getValue()=="PAA"){pageObj.showField('UEJ');pageObj.showField('RUBRO');pageObj.showField('PRODUCTO');pageObj.showField('ACTIVIDAD');pageObj.showField('DESC_PAA');pageObj.hideField('DESC_CDP');}else if(ctrl.getValue()=="NOPAA"){pageObj.hideField('UEJ');pageObj.hideField('RUBRO');pageObj.hideField('PRODUCTO');pageObj.hideField('ACTIVIDAD');pageObj.hideField('DESC_PAA');pageObj.showField('DESC_CDP');};});Runner.pages.PageSettings.addPageEvent('paa_master_pscdp_0',Runner.pages.constants.PAGE_VIEW,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){pageObj.hideField('UEJ');pageObj.hideField('RUBRO');pageObj.hideField('PRODUCTO');pageObj.hideField('ACTIVIDAD');pageObj.hideField('DESC_PAA');pageObj.hideField('DESC_CDP');var ctrl=Runner.getControl(pageid,"UNIDAD_CONTRATACION");if(ctrl.getValue()=="PAA"){pageObj.showField('UEJ');pageObj.showField('RUBRO');pageObj.showField('PRODUCTO');pageObj.showField('ACTIVIDAD');pageObj.showField('DESC_PAA');pageObj.hideField('DESC_CDP');}else if(ctrl.getValue()=="NOPAA"){pageObj.hideField('UEJ');pageObj.hideField('RUBRO');pageObj.hideField('PRODUCTO');pageObj.hideField('ACTIVIDAD');pageObj.hideField('DESC_PAA');pageObj.showField('DESC_CDP');}});