<?php

	// create menu nodes arr
	$menuNodes = array();

	$menuNode = array();
	$menuNode["id"] = "1";
	$menuNode["name"] = "";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-th";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "2";
	$menuNode["name"] = "Administración";
		$menuNode["href"] = "external.php?url=".rawurlencode("../GestionEntidad/");
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "1";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "External";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-new-window";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Administración";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "3";
	$menuNode["name"] = "Planeación y Gestión";
		$menuNode["href"] = "external.php?url=".rawurlencode("../GestionEP/");
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "1";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "External";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-new-window";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Planeación y Gestión";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "4";
	$menuNode["name"] = "Recursos Físicos";
		$menuNode["href"] = "external.php?url=".rawurlencode("../GestionRF/");
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "1";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "External";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-new-window";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Recursos Físicos";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "5";
	$menuNode["name"] = "Gestión de Contratos";
		$menuNode["href"] = "external.php?url=".rawurlencode("../GestionContratos/");
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "1";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "External";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-new-window";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Gestión de Contratos";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "6";
	$menuNode["name"] = "Pagos | Hoja de Ruta";
		$menuNode["href"] = "external.php?url=".rawurlencode("../GestionPagos/");
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "1";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "External";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-new-window";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Pagos | Hoja de Ruta";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "7";
	$menuNode["name"] = "-------";
	$menuNode["href"] = "";
	$menuNode["type"] = "Separator";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "1";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "-------";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "8";
	$menuNode["name"] = "Contratistas | Proveedores";
	$menuNode["href"] = "../GestionContratistas/";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "1";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "External";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "NewWindow";

	$menuNode["icon"] = "glyphicon-share";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Contratistas | Proveedores";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "10";
	$menuNode["name"] = "PLANEACIÓN";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "PLANEACIÓN";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "11";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "Dashboard";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "10";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("Dashboard");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-hand-right";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "2";

		$menuNode["color"] = "";

	$menuNode["title"] = "Dashboard";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "104";
	$menuNode["name"] = "A. FUNCIONAMIENTO";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "10";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-folder-o";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "A. FUNCIONAMIENTO";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "13";
	$menuNode["name"] = "Programar presupuesto | Funcionamiento";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "000_global_fun";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "104";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-angle-double-right";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Programar presupuesto | Funcionamiento";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "100";
	$menuNode["name"] = "B. SERVICIO A LA DEUDA";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "000_global_sad";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "10";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-angle-double-right";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "B. SERVICIO A LA DEUDA";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "103";
	$menuNode["name"] = "C. INVERSION";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "10";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-folder-o";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "C. INVERSION";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "12";
	$menuNode["name"] = "Programar presupuesto | Inversión";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "000_global";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "103";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-angle-double-right";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Programar presupuesto | Inversión";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "14";
	$menuNode["name"] = "Monitoreo de actividades";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "q_recursos_gestor_c";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "103";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-angle-double-right";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Monitoreo de actividades";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "16";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "002_producto_mod_oap";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "10";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-angle-double-right";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Gestionar solicitudes de modificación";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "17";
	$menuNode["name"] = "REPORTE";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "10";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "REPORTE";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "18";
	$menuNode["name"] = "Administrar";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "10";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Administrar";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "19";
	$menuNode["name"] = "PROGRAMACIÓN";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "PROGRAMACIÓN";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "15";
	$menuNode["name"] = "Solicitar modificación a presupuesto";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "002_producto_m";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "19";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-angle-double-right";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Solicitar modificación a presupuesto";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "20";
	$menuNode["name"] = "CDP Integrado";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "paa_master_pscdp_integrado";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "19";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-angle-double-right";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "CDP Integrado";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "21";
	$menuNode["name"] = "PAA ( PUBLICAR EN SECOP )";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "19";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-folder-open";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "PAA ( PUBLICAR EN SECOP )";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "23";
	$menuNode["name"] = "A. FUNCIONAMIENTO";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "q_recursos_gestor_f";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "21";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-angle-double-right";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "A. FUNCIONAMIENTO";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "22";
	$menuNode["name"] = "C. INVERSIÓN";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "q_recursos_gestor_c1";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "21";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-angle-double-right";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "C. INVERSIÓN";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "24";
	$menuNode["name"] = "FUNCIONAMIENTO | ENTIDAD";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "q_recursos_gestor_f_all";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "21";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-angle-double-right";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "FUNCIONAMIENTO | ENTIDAD";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "25";
	$menuNode["name"] = "PAA INTEGRADOS";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "paa_master_integrado";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "21";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-angle-double-right";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "PAA INTEGRADOS";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "26";
	$menuNode["name"] = "NO PAA";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "19";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-folder-open";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "NO PAA";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "28";
	$menuNode["name"] = "A. FUNCIONAMIENTO";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "q_recursos_gestor_f2";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "26";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-angle-double-right";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "A. FUNCIONAMIENTO";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "27";
	$menuNode["name"] = "C. INVERSIÓN";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "q_recursos_gestor_c2";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "26";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-angle-double-right";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "C. INVERSIÓN";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "29";
	$menuNode["name"] = "REVISIÓN";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "REVISIÓN";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "30";
	$menuNode["name"] = "OAP";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "29";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "OAP";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "31";
	$menuNode["name"] = "INVERSIÓN";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "30";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "INVERSIÓN";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "32";
	$menuNode["name"] = "Nuevas solicitudes | PAA";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "paa_master_stat_0";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "31";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-angle-double-right";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Nuevas solicitudes | PAA";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "33";
	$menuNode["name"] = "Nuevas solicitudes | NOPAA";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "nopaa_master_stat_0";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "31";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-angle-double-right";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Nuevas solicitudes | NOPAA";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "34";
	$menuNode["name"] = "Reporte de desagregación";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "q_reporte_oaps_000 Report";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "31";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("Report");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-angle-double-right";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Reporte de desagregación";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "35";
	$menuNode["name"] = "FUNCIONAMIENTO";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "30";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "FUNCIONAMIENTO";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "36";
	$menuNode["name"] = "Nuevas solicitudes | PAA";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "paa_master_stat_0f";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "35";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-angle-double-right";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Nuevas solicitudes | PAA";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "37";
	$menuNode["name"] = "ADMINISTRATIVA";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "29";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "ADMINISTRATIVA";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "38";
	$menuNode["name"] = "PAA";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "37";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "PAA";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "39";
	$menuNode["name"] = "Nuevas solicitudes | PAA";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "paa_master_stat_1";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "38";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-angle-double-right";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Nuevas solicitudes | PAA";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "40";
	$menuNode["name"] = "SECRETARIA GENERAL";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "29";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "SECRETARIA GENERAL";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "41";
	$menuNode["name"] = "Solicitudes para aprobacion del Ordenador del Gasto";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "paa_master_stat_2";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "40";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-angle-double-right";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Solicitudes para aprobacion del Ordenador del Gasto";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "42";
	$menuNode["name"] = "PUBLICAR EN SECOP";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "29";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "PUBLICAR EN SECOP";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "43";
	$menuNode["name"] = "1. Exportar documento para publicar en SECOP";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "q_informe_export_secop";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "42";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-angle-double-right";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "1. Exportar documento para publicar en SECOP";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "44";
	$menuNode["name"] = "2. Autorizar solicitud de CDP";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "paa_master_stat_3";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "42";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-angle-double-right";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "2. Autorizar solicitud de CDP";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "45";
	$menuNode["name"] = "PAA No aprobados ";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "q_informe_export_secop_no_aprobadas";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "42";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-angle-double-right";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "PAA No aprobados ";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "46";
	$menuNode["name"] = "Reportes";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "29";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Reportes";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "47";
	$menuNode["name"] = "Reporte SECGEN | Inversión";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "q_info_paa_secgen_report_c";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "46";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("Report");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-angle-double-right";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Reporte SECGEN | Inversión";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "48";
	$menuNode["name"] = "Reporte SECGEN | Funcionamiento";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "q_info_paa_secgen_report_f";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "46";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("Report");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-angle-double-right";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Reporte SECGEN | Funcionamiento";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "49";
	$menuNode["name"] = "SEGUIMIENTO";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "SEGUIMIENTO";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "50";
	$menuNode["name"] = "INVERSION";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "49";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "INVERSION";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "51";
	$menuNode["name"] = "Programación por rubro";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "q_seg_prog_inversion_x_rubro_001";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "50";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-angle-double-right";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Programación por rubro";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "52";
	$menuNode["name"] = "Programación por inversión";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "q_seg_prog_inversion_001";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "50";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-angle-double-right";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Programación por inversión";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "53";
	$menuNode["name"] = "Gráfica de programación | Inversión";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "q_seg_prog_inversion_x_rubro_001 Chart";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "50";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("Chart");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-line-chart";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Gráfica de programación | Inversión";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "54";
	$menuNode["name"] = "FUNCIONAMIENTO";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "49";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "FUNCIONAMIENTO";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "55";
	$menuNode["name"] = "Programación por rubro";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "q_seg_prog_funcionamiento_001";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "54";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-angle-double-right";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Programación por rubro";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "56";
	$menuNode["name"] = "Gráfica de programación | Funcionamiento";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "q_seg_prog_funcionamiento_001 Chart";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "54";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("Chart");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-line-chart";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Gráfica de programación | Funcionamiento";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "57";
	$menuNode["name"] = "NOVEDADES";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "NOVEDADES";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "58";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "paa_master_stat_6";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "57";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-angle-double-right";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "No aprobadas | Devueltas | PAA";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "59";
	$menuNode["name"] = "CDP";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "57";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-menu-right";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "CDP";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "60";
	$menuNode["name"] = "Reporte de desagregación";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "q_reporte_oaps_000 Report";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "57";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("Report");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-angle-double-right";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Reporte de desagregación";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "61";
	$menuNode["name"] = "GLOBALES";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-cog";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "GLOBALES";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "62";
	$menuNode["name"] = "Dependencias";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "61";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Dependencias";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "63";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "divipola";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "61";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-chevron-right";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Divipola";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "64";
	$menuNode["name"] = "USUARIOS";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "USUARIOS";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "65";
	$menuNode["name"] = "Usuarios del sistema";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "funcionario";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "64";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-user";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Usuarios del sistema";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "66";
	$menuNode["name"] = "EJECUCIÓN PRESUPUESTAL";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "EJECUCIÓN PRESUPUESTAL";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "67";
	$menuNode["name"] = "SIIF";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "66";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "SIIF";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "92";
	$menuNode["name"] = "Fecha de actualizacion";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "global_fecha_actualiza_siif";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "67";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-angle-double-right";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Fecha de actualizacion";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "68";
	$menuNode["name"] = "-------";
	$menuNode["href"] = "";
	$menuNode["type"] = "Separator";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "67";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "-------";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "93";
	$menuNode["name"] = "Ejecución presupuestal agregada";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "009_ep_agregada";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "67";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-angle-double-right";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Ejecución presupuestal agregada";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "94";
	$menuNode["name"] = "Ejecución presupuestal desagregada";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "010_ep_desagregada";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "67";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-angle-double-right";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Ejecución presupuestal desagregada";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "95";
	$menuNode["name"] = "CDP";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "007_cdp";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "67";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-angle-double-right";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "CDP";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "96";
	$menuNode["name"] = "Compromisos | RP";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "006_compromisos";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "67";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-angle-double-right";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Compromisos | RP";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "97";
	$menuNode["name"] = "Obligaciones";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "011_obligaciones";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "67";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-angle-double-right";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Obligaciones";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "98";
	$menuNode["name"] = "Ordenes de pago";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "012_odp";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "67";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-angle-double-right";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Ordenes de pago";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "69";
	$menuNode["name"] = "SEP";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "66";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "SEP";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "70";
	$menuNode["name"] = "NO PAA";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "NO PAA";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "71";
	$menuNode["name"] = "MODIFICACIONES";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "MODIFICACIONES";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "72";
	$menuNode["name"] = "GESTION";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "GESTION";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "73";
	$menuNode["name"] = "Modificaciones";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "72";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Modificaciones";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "74";
	$menuNode["name"] = "Solicitudes de modificación";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "paa_master_modifica_0";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "73";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-angle-double-right";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Solicitudes de modificación";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "75";
	$menuNode["name"] = "CDP";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "72";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "CDP";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "76";
	$menuNode["name"] = "INVERSIÓN";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "75";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "INVERSIÓN";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "77";
	$menuNode["name"] = "PAA | Inversión";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "paa_master_stat_4_c";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "76";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-angle-double-right";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "PAA | Inversión";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "78";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "nopaa_master_c_s5";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "76";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-angle-double-right";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "NOPAA | Inversión";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "79";
	$menuNode["name"] = "FUNCIONAMIENTO";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "75";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "FUNCIONAMIENTO";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "80";
	$menuNode["name"] = "PAA | Funcionamiento";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "paa_master_stat_4_f";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "79";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-angle-double-right";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "PAA | Funcionamiento";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "81";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "nopaa_master_f_s5";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "79";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-angle-double-right";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "NOPAA | Funcionamiento";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "82";
	$menuNode["name"] = "INTEGRADOS";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "75";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "INTEGRADOS";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "83";
	$menuNode["name"] = "INTEGRADO | Inversion";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "nopaa_master_c_s5i";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "82";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-angle-double-right";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "INTEGRADO | Inversion";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "84";
	$menuNode["name"] = "INTEGRADO | Funcionamiento";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "nopaa_master_f_s5i";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "82";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-angle-double-right";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "INTEGRADO | Funcionamiento";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "85";
	$menuNode["name"] = "Estado de solicitud de CDP";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "scdp_event_type";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "75";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-angle-double-right";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Estado de solicitud de CDP";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "86";
	$menuNode["name"] = "Solicitudes CDP ";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "paa_master_pscdp_00";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "75";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-angle-double-right";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Solicitudes CDP ";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "87";
	$menuNode["name"] = "Gestionar solicitudes de CDP";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "paa_master_pscdp_0";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "75";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-angle-double-right";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Gestionar solicitudes de CDP";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "88";
	$menuNode["name"] = "Gestion de CDP";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "paa_master_pscdp_1";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "75";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-angle-double-right";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Gestion de CDP";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "89";
	$menuNode["name"] = "Administrar solicitudes PAA";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "paa_master_admin";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "72";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-angle-double-right";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Administrar solicitudes PAA";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "90";
	$menuNode["name"] = "Administrar solicitudes NO PAA";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "nopaa_master_admin";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "72";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-angle-double-right";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Administrar solicitudes NO PAA";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "91";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "Tablero_01";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "72";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("Dashboard");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Tablero 01";



	$menuNodes[] = $menuNode;
	$menuNodesCache[ "main" ] = $menuNodes;
?>