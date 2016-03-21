<?php

// Back end module
array_insert($GLOBALS['BE_MOD']['content'], 3, array
(
		'services' => array
		(
				'tables' => array('tl_services_category', 'tl_services'),
				'icon'   => 'system/modules/custom_category/html/icon.gif'
		)
));

// Front end module
array_insert($GLOBALS['FE_MOD']['miscellaneous'], 0, array
(
		'custom_category' => 'ModuleCustomCategory'
));

?>