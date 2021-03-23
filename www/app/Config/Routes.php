<?php
namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$db = \Config\Database::connect();
$session = \Config\Services::session();
$role_id = $session->get('user_role_id');
if (! empty($role_id)) {
    $sql = "SELECT 
		                auth_permission_resource.*,
		                auth_resource.*
	            FROM 
	                	auth_permission_resource left join auth_resource on auth_permission_resource.res_id = auth_resource.res_id
	            WHERE 
	                	auth_permission_resource.role_id = $role_id";
    $query = $db->query($sql);
    foreach ($query->getResult() as $rows) {
        // dinamic route
        // $routes->add($rows->res_route.$rows->res_match_in, $rows->res_class::$rows->res_method.$rows->res_match_out);
    }
}
/**
 * -----------------
 * Home
 * -----------------
 */

$routes->add('/set-new-game/(:any)', 'Api::setNewGame/$1');
$routes->add('/get-card-number/(:segment)/(:segment)', 'Api::getCardNumber/$1/$2');
$routes->add('/get-my-best/(:any)', 'Api::getMyBest/$1');
$routes->add('/get-global-best/(:any)', 'Api::getGlobalBest/$1');
$routes->add('/set-score/(:segment)/(:segment)', 'Api::setScore/$1/$2');

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}