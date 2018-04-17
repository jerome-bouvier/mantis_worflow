<?php

	/* Nouveau Workflow */
	$g_status_enum_string                = '10:new,20:feedback,30:acknowledged,40:confirmed,50:assigned,70:waiting_for_prod,80:resolved,90:closed';
	$g_status_colors['waiting_for_prod'] = '#31b2c5';
	
	//Redéfinition du workflow pour chaque statut de bug en y rajoutant notre nouvelle étape
	$g_status_enum_workflow[NEW_]='20:feedback,30:acknowledged,40:confirmed,50:assigned,70:waiting for prod,80:resolved';
	$g_status_enum_workflow[FEEDBACK] ='10:new,30:acknowledged,40:confirmed,50:assigned,70:waiting for prod,80:resolved';
	$g_status_enum_workflow[ACKNOWLEDGED] ='20:feedback,40:confirmed,50:assigned,70:waiting for prod,80:resolved';
	$g_status_enum_workflow[CONFIRMED] ='20:feedback,50:assigned,70:waiting for prod,80:resolved';
	$g_status_enum_workflow[ASSIGNED] ='20:feedback,70:waiting for prod,80:resolved,90:closed';
	$g_status_enum_workflow[RESOLVED] ='50:assigned,90:closed';
	$g_status_enum_workflow[CLOSED] ='50:assigned';
	
	//Rajout de notre nouveau statut (la clé du tableau correspond à notre constante définie dans custom_constant_inc.php )
	$g_status_enum_workflow[PROD] ='20:feedback,50:assigned,70:waiting for prod,80:resolved';
?>
