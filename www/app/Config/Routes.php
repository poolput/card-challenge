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
 

/**
 * -----------------
 * API
 * -----------------
 */
$routes->add('/get-location', 'Api::getLocation');
$routes->add('/get-total-location', 'Api::getTotalLocation');
$routes->add('/get-period', 'Api::getPeriod');
$routes->add('/get-summary-staff', 'Api::getSummaryStaff');
$routes->add('/get-summary-location', 'Api::getSummaryLocation');
$routes->add('/get-visitor', 'Api::getSummaryVisitor');
$routes->add('/get-summary-density-date', 'Api::getSummaryDensityDate');
$routes->add('/get-summary-density-location', 'Api::getSummaryDensityLocation');

$routes->add('/get-analysis-comparison', 'Api::getAnalysisComparison');
$routes->add('/get-analysis-conversion-rate', 'Api::getAnalysisConversionRate');
$routes->add('/get-analysis-conversion-rate-summary', 'Api::getAnalysisConversionRateSummary');
$routes->add('/get-analysis-time-inside', 'Api::getAnalysisTimeInside');

$routes->add('/get-week', 'Api::getWeek');
$routes->add('/get-branch-selectbox', 'Api::getBranchBox');

$routes->add('/get-summary-passing', 'Api::getSummaryPassing');
$routes->add('/get-visitor-7days', 'Api::getVisitor7Days');
$routes->add('/get-visitor-top-event', 'Api::getVisitorTopEvent');
$routes->add('/get-day-part', 'Api::getDayPart');

/**
 * -----------------
 * Authentication
 * -----------------
 */
$routes->add('/login', 'Authentication::login');
$routes->add('/logout', 'Authentication::logout');
$routes->add('/forget-password', 'Authentication::forgetPassword');
$routes->add('/reset-password', 'Authentication::resetPassword');
$routes->add('/get-role', 'Authentication::ajaxGetRole');

/**
 * -----------------
 * users
 * -----------------
 */
$routes->add('/users', 'Users::index');
$routes->add('/users/add', 'Users::add');
$routes->add('/users/delete/(:num)', 'Users::delete/$1');
$routes->add('/users/edit/(:num)', 'Users::edit/$1');
$routes->add('/get-user', 'Users::ajaxGetUser');

$routes->add('/role', 'Role::index');
$routes->add('/role/add', 'Role::add');
$routes->add('/role/delete/(:num)', 'Role::delete/$1');
$routes->add('/role/edit/(:num)', 'Role::edit/$1');

$routes->add('/permission', 'Permission::index');
$routes->add('/permission/edit/(:num)', 'Permission::edit/$1');

/**
 * -----------------
 * company
 * -----------------
 */
$routes->add('/information', 'Information::index');
$routes->add('/information/add', 'Information::add');
$routes->add('/information/edit/(:num)', 'Information::edit/$1');
$routes->add('/information/delete/(:num)', 'Information::delete/$1');

/**
 * -----------------
 * branch
 * -----------------
 */

$routes->add('/branch', 'Branch::index');
$routes->add('/get-branch', 'Branch::ajaxGetBranch');
$routes->add('/branch/add', 'Branch::add');
$routes->add('/branch/edit/(:num)', 'Branch::edit/$1');
$routes->add('/branch/delete/(:any)', 'Branch::delete/$1');

/**
 * -----------------
 * branch group
 * -----------------
 */
$routes->add('/branch-group', 'BranchGroup::index');
$routes->add('/branch-group/add', 'BranchGroup::add');
$routes->add('/branch-group/edit/(:num)', 'BranchGroup::edit/$1');
$routes->add('/branch-group/update', 'BranchGroup::update');
$routes->add('/branch-group/delete/(:any)', 'BranchGroup::delete/$1');
$routes->add('/branch-group/getbranchbygroup', 'BranchGroup::getbranchbygroup');

$routes->add('/branch-group/get-group-block', 'BranchGroup::getGroupBlock');
/**
 * -----------------
 * camera location
 * -----------------
 */

/**
 * -----------------
 * camera-group
 * -----------------
 */
$routes->add('/camera-group', 'CameraGroup::index');
$routes->add('/camera-group/add', 'CameraGroup::add');
$routes->add('/camera-group/edit/(:any)', 'CameraGroup::edit/$1');
$routes->add('/camera-group/delete/(:any)', 'CameraGroup::delete/$1');
$routes->add('/camera-group/get-camera-branch-data', 'CameraGroup::getCameraBranchData');

/**
 * -----------------
 * camera
 * -----------------
 */
$routes->add('/camera', 'Camera::index');
$routes->add('/camera/add', 'Camera::add');
$routes->add('/camera/edit/(:any)', 'Camera::edit/$1');
$routes->add('/camera/delete/(:any)', 'Camera::delete/$1');
$routes->add('status', 'Camera::status');

/**
 * -----------------
 * Heatmap Group
 * -----------------
 */
$routes->add('/heatmap-group', 'HeatmapGroup::index');
$routes->add('/heatmap-group/add', 'HeatmapGroup::add');
$routes->add('/heatmap-group/edit/(:any)', 'HeatmapGroup::edit/$1');
$routes->add('/heatmap-group/delete/(:any)', 'HeatmapGroup::delete/$1');
$routes->add('/heatmap-group/get-camera-branch', 'HeatmapGroup::getCameraByBranch');

/**
 * -----------------
 * Heatmap Camera
 * -----------------
 */
$routes->add('/heatmap-camera', 'HeatmapCamera::index');
$routes->add('/heatmap-camera/add', 'HeatmapCamera::add');
$routes->add('/heatmap-camera/edit/(:any)', 'HeatmapCamera::edit/$1');
$routes->add('/heatmap-camera/delete/(:any)', 'HeatmapCamera::delete/$1');

/**
 * -----------------
 * Heatmap Range
 * -----------------
 */
$routes->add('/heatmap', 'HeatmapRange::index');
$routes->add('/heatmap/add', 'HeatmapRange::add');
$routes->add('/heatmap/get-range-branch', 'HeatmapRange::getRangeByBranch');

/**
 * -----------------
 * Task Scheduler
 * -----------------
 */
$routes->add('/task-scheduler', 'TaskScheduler::index');
$routes->add('/task-scheduler/add', 'TaskScheduler::add');

/**
 * -----------------
 * summary
 * -----------------
 */
$routes->add('/summary-visitor', 'Summary::visitor');
$routes->add('/summary-location', 'Summary::location');
$routes->add('/summary-density-date', 'Summary::densityByDate');
$routes->add('/summary-density-location', 'Summary::densityByLocation');
$routes->add('/summary-day-part', 'Summary::daypart');
$routes->add('/summary-passing', 'Summary::passing');

/**
 * -----------------
 * Analysis
 * -----------------
 */
$routes->add('/comparison', 'Analysis::comparison');
$routes->add('/time-inside', 'Analysis::timeInside');

/**
 * -----------------
 * Configuration
 * -----------------
 */
$routes->add('/configuration', 'Configuration::config');

/**
 * -----------------
 * Daypart
 * -----------------
 */
$routes->add('/day-part', 'DayPart::index');

/**
 * -----------------
 * Migration
 * -----------------
 */
$routes->add('/migration/staff', 'Migration::staff');
$routes->add('/migration/conversion-rate', 'Migration::conversionRate');

/**
 * -----------------
 * Migrate
 * -----------------
 */
$routes->add('/migrate/group', 'Migrate::group');

/**
 * -----------------
 * Floorplan
 * -----------------
 */
$routes->add('/floorplan', 'Floorplan::index');
$routes->add('/floorplan-list', 'Floorplan::list');
$routes->add('/floorplan-table', 'Floorplan::floorplanTable');
$routes->add('/floorplan/add/(:any)', 'Floorplan::add/$1');
$routes->add('/floorplan/edit/(:any)/(:any)', 'Floorplan::edit/$1/$2');
$routes->add('/floorplan/delete/(:any)', 'Floorplan::delete/$1');
$routes->add('/floorplan/get-perimeter/(:any)', 'Floorplan::getAreaPerimeter/$1');
$routes->add('/floorplan/get-floorplan-by-branch/(:any)', 'Floorplan::getFloorplanByBranch/$1');
$routes->add('/floorplan/get-cameragroup-by-floorplan/(:any)', 'Floorplan::getCameraGroupUnderFloorplan/$1');
$routes->add('/floorplan/get-floorplan-data/(:any)', 'Floorplan::getFloorplanData/$1');

/**
 * -----------------
 * Floorplan Counter
 * -----------------
 */
$routes->add('/floorplan-counter', 'Floorplan::index');


/**
 * -----------------
 * Upload File
 * -----------------
 */
$routes->add('/upload-file/(:any)', 'Uploads::ajaxUploadFile/$1');

/**
 * -----------------
 * Conversion Rate
 * -----------------
 */
$routes->add('/conversion-rate', 'Analysis::conversionRate');
$routes->add('/conversion-rate-summary', 'Analysis::conversionRateSummary');

$routes->add('/conversion-rate/setting', 'Setting::conversionRate');

/**
 * -----------------
 * Export
 * -----------------
 */
$routes->add('/floorplan-report', 'Floorplan::export');

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