<?php if (!defined('BASEPATH'))exit('No direct script access allowed');

$route['translate_uri_dashes'] = FALSE;

/*
| -------------------------------------------------------------------
|  Rotas do admin.
| -------------------------------------------------------------------
*/
$route['default_controller']    = 'main';
$route['admin'] 				= 'admin/dashboard';
$route['admin/login']			= 'admin/logon/index';
$route['admin/logout']			= 'admin/logon/out';
$route['admin/recovery']		= 'admin/logon/recovery';
$route['admin/recovery/(:any)'] = 'admin/logon/recovery/$1';
$route['404_override'] 			= '';

/*
| -------------------------------------------------------------------
|  Rotas do Setup
| -------------------------------------------------------------------
*/
$route['setup'] 				= 'setup/main';
$route['setup/migrate'] 		= 'setup/main/migrate';
$route['setup/migrate/(:any)'] 	= 'setup/main/migrate/$1';
$route['setup/firstadmin'] 		= 'setup/main/firstadmin';

/*
| -------------------------------------------------------------------
|  Rotas do site
| -------------------------------------------------------------------
*/
$route['posts'] 				= 'main/posts';
$route['posts/(:any)'] 			= 'main/posts/$1';
$route['posts/(:any)/(:any)'] 	= 'main/posts/$1';
$route['post/(:any)'] 			= 'main/post/$1';
$route['events']				= 'main/events';
$route['event/(:any)'] 			= 'main/post/$1';
$route['search']				= 'main/search';
$route['albuns'] 				= 'main/albuns';
$route['album/(:any)/(:any)'] 	= 'main/album/$1';
$route['foto/(:any)/(:any)'] 	= 'main/foto/$2';
$route['videos'] 				= 'main/videos';
$route['video/(:any)/(:any)'] 	= 'main/video/$1';
$route['newsletter'] 			= 'main/newsletter';
$route['contato'] 				= 'main/contato';
$route['rss']               	= 'main/rss';

/* End of file routes.php */
/* Location: ./application/config/routes.php */
