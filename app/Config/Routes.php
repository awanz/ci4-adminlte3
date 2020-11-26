<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
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

// Dashboard
$routes->get('dashboard', function () {
    $data['title'] = "AdminLTE 3 | Dashboard";
    $data['breadcrumb_title'] = "Dashboard";
    $breadcrumb =   array(
                        array(
                            'title' => 'Home',
                            'link' => 'dashboard'
                        ),
                        array(
                            'title' => 'Dashboard v1',
                            'link' => null
                        )
                    );
    $data['breadcrumb'] = $breadcrumb;
    return view('dashboard/index', $data);
});

$routes->get('dashboard/v2', function () {
    $data['title'] = "AdminLTE 3 | Dashboard v2";
    $data['breadcrumb_title'] = "Dashboard v2";
    $breadcrumb =   array(
                        array(
                            'title' => 'Home',
                            'link' => 'dashboard'
                        ),
                        array(
                            'title' => 'Dashboard v2',
                            'link' => null
                        )
                    );
    $data['breadcrumb'] = $breadcrumb;
    return view('dashboard/v2', $data);
});

$routes->get('dashboard/v3', function () {
    $data['title'] = "AdminLTE 3 | Dashboard 3";
    $data['breadcrumb_title'] = "Dashboard v3";
    $breadcrumb =   array(
                        array(
                            'title' => 'Home',
                            'link' => 'dashboard'
                        ),
                        array(
                            'title' => 'Dashboard v3',
                            'link' => null
                        )
                    );
    $data['breadcrumb'] = $breadcrumb;
    return view('dashboard/v3', $data);
});

// Charts
$routes->get('charts/chartjs', function () {
    $data['title'] = "AdminLTE 3 | ChartJS";
    $data['breadcrumb_title'] = "ChartJS";
    $breadcrumb =   array(
                        array(
                            'title' => 'Home',
                            'link' => 'dashboard'
                        ),
                        array(
                            'title' => 'ChartJS',
                            'link' => null
                        )
                    );
    $data['breadcrumb'] = $breadcrumb;
    return view('charts/chartjs', $data);
});

$routes->get('charts/float', function () {
    $data['title'] = "AdminLTE 3 | Flot Charts";
    $data['breadcrumb_title'] = "Flot Charts";
    $breadcrumb =   array(
                        array(
                            'title' => 'Home',
                            'link' => 'dashboard'
                        ),
                        array(
                            'title' => 'Flot',
                            'link' => null
                        )
                    );
    $data['breadcrumb'] = $breadcrumb;
    return view('charts/flot', $data);
});

$routes->get('charts/inline', function () {
    $data['title'] = "AdminLTE 3 | Inline Charts";
    $data['breadcrumb_title'] = "Inline Charts";
    $breadcrumb =   array(
                        array(
                            'title' => 'Home',
                            'link' => 'dashboard'
                        ),
                        array(
                            'title' => 'Inline Charts',
                            'link' => null
                        )
                    );
    $data['breadcrumb'] = $breadcrumb;
    return view('charts/inline', $data);
});


// UI Elements
$routes->get('ui/buttons', function () {
    $data['title'] = "AdminLTE 3 | Buttons";
    $data['breadcrumb_title'] = "Buttons";
    $breadcrumb =   array(
                        array(
                            'title' => 'Home',
                            'link' => 'dashboard'
                        ),
                        array(
                            'title' => 'Buttons',
                            'link' => null
                        )
                    );
    $data['breadcrumb'] = $breadcrumb;
    return view('elements/buttons', $data);
});

$routes->get('ui/general', function () {
    $data['title'] = "AdminLTE 3 | General UI";
    $data['breadcrumb_title'] = "General UI";
    $breadcrumb =   array(
                        array(
                            'title' => 'Home',
                            'link' => 'dashboard'
                        ),
                        array(
                            'title' => 'General',
                            'link' => null
                        )
                    );
    $data['breadcrumb'] = $breadcrumb;
    return view('elements/general', $data);
});

$routes->get('ui/icons', function () {
    $data['title'] = "AdminLTE 3 | Icons";
    $data['breadcrumb_title'] = "Icons";
    $breadcrumb =   array(
                        array(
                            'title' => 'Home',
                            'link' => 'dashboard'
                        ),
                        array(
                            'title' => 'Icons',
                            'link' => null
                        )
                    );
    $data['breadcrumb'] = $breadcrumb;
    return view('elements/icons', $data);
});

$routes->get('ui/modals', function () {
    $data['title'] = "AdminLTE 3 | Modals & Alerts";
    $data['breadcrumb_title'] = "Modals & Alerts";
    $breadcrumb =   array(
                        array(
                            'title' => 'Home',
                            'link' => 'dashboard'
                        ),
                        array(
                            'title' => 'Modals & Alerts',
                            'link' => null
                        )
                    );
    $data['breadcrumb'] = $breadcrumb;
    return view('elements/modals', $data);
});

$routes->get('ui/navbar', function () {
    $data['title'] = "AdminLTE 3 | Navbar & Tabs";
    $data['breadcrumb_title'] = "Navbar & Tabs <small>new</small>";
    $breadcrumb =   array(
                        array(
                            'title' => 'Home',
                            'link' => 'dashboard'
                        ),
                        array(
                            'title' => 'Navbar & Tabs',
                            'link' => null
                        )
                    );
    $data['breadcrumb'] = $breadcrumb;
    return view('elements/navbar', $data);
});

$routes->get('ui/ribbons', function () {
    $data['title'] = "AdminLTE 3 | UI Ribbons";
    $data['breadcrumb_title'] = "Ribbons";
    $breadcrumb =   array(
                        array(
                            'title' => 'Home',
                            'link' => 'dashboard'
                        ),
                        array(
                            'title' => 'Ribbons',
                            'link' => null
                        )
                    );
    $data['breadcrumb'] = $breadcrumb;
    return view('elements/ribbons', $data);
});

$routes->get('ui/sliders', function () {
    $data['title'] = "AdminLTE 3 | Sliders";
    $data['breadcrumb_title'] = "Sliders";
    $breadcrumb =   array(
                        array(
                            'title' => 'Home',
                            'link' => 'dashboard'
                        ),
                        array(
                            'title' => 'Sliders',
                            'link' => null
                        )
                    );
    $data['breadcrumb'] = $breadcrumb;
    return view('elements/sliders', $data);
});

$routes->get('ui/timeline', function () {
    $data['title'] = "AdminLTE 3 | Timeline";
    $data['breadcrumb_title'] = "Timeline";
    $breadcrumb =   array(
                        array(
                            'title' => 'Home',
                            'link' => 'dashboard'
                        ),
                        array(
                            'title' => 'Timeline',
                            'link' => null
                        )
                    );
    $data['breadcrumb'] = $breadcrumb;
    return view('elements/timeline', $data);
});

// Forms
$routes->get('form/general', function () {
    $data['title'] = "AdminLTE 3 | General Form Elements";
    $data['breadcrumb_title'] = "General Form";
    $breadcrumb =   array(
                        array(
                            'title' => 'Home',
                            'link' => 'dashboard'
                        ),
                        array(
                            'title' => 'General Form',
                            'link' => null
                        )
                    );
    $data['breadcrumb'] = $breadcrumb;
    return view('forms/general', $data);
});

$routes->get('form/advanced', function () {
    $data['title'] = "AdminLTE 3 | Advanced form elements";
    $data['breadcrumb_title'] = "Advanced Form";
    $breadcrumb =   array(
                        array(
                            'title' => 'Home',
                            'link' => 'dashboard'
                        ),
                        array(
                            'title' => 'Advanced Form',
                            'link' => null
                        )
                    );
    $data['breadcrumb'] = $breadcrumb;
    return view('forms/advanced', $data);
});

$routes->get('form/editors', function () {
    $data['title'] = "AdminLTE 3 | Editors";
    $data['breadcrumb_title'] = "Text Editors";
    $breadcrumb =   array(
                        array(
                            'title' => 'Home',
                            'link' => 'dashboard'
                        ),
                        array(
                            'title' => 'Text Editors',
                            'link' => null
                        )
                    );
    $data['breadcrumb'] = $breadcrumb;
    return view('forms/editors', $data);
});

$routes->get('form/validation', function () {
    $data['title'] = "AdminLTE 3 | Validation Form";
    $data['breadcrumb_title'] = "Validation";
    $breadcrumb =   array(
                        array(
                            'title' => 'Home',
                            'link' => 'dashboard'
                        ),
                        array(
                            'title' => 'Validation',
                            'link' => null
                        )
                    );
    $data['breadcrumb'] = $breadcrumb;
    return view('forms/validation', $data);
});

// Tables
$routes->get('table/simple', function () {
    $data['title'] = "AdminLTE 3 | Simple Tables";
    $data['breadcrumb_title'] = "Simple Tables";
    $breadcrumb =   array(
                        array(
                            'title' => 'Home',
                            'link' => 'dashboard'
                        ),
                        array(
                            'title' => 'Simple Tables',
                            'link' => null
                        )
                    );
    $data['breadcrumb'] = $breadcrumb;
    return view('tables/simple', $data);
});

$routes->get('table/datatables', function () {
    $data['title'] = "AdminLTE 3 | DataTables";
    $data['breadcrumb_title'] = "DataTables";
    $breadcrumb =   array(
                        array(
                            'title' => 'Home',
                            'link' => 'dashboard'
                        ),
                        array(
                            'title' => 'DataTables',
                            'link' => null
                        )
                    );
    $data['breadcrumb'] = $breadcrumb;
    return view('tables/data', $data);
});

$routes->get('table/jsgrid', function () {
    $data['title'] = "AdminLTE 3 | jsGrid";
    $data['breadcrumb_title'] = "jsGrid";
    $breadcrumb =   array(
                        array(
                            'title' => 'Home',
                            'link' => 'dashboard'
                        ),
                        array(
                            'title' => 'jsGrid',
                            'link' => null
                        )
                    );
    $data['breadcrumb'] = $breadcrumb;
    return view('tables/jsgrid', $data);
});

// Gallery
$routes->get('pages/gallery', function () {
    $data['title'] = "AdminLTE 3 | Gallery";
    $data['breadcrumb_title'] = "Gallery";
    $breadcrumb =   array(
                        array(
                            'title' => 'Home',
                            'link' => 'dashboard'
                        ),
                        array(
                            'title' => 'Gallery',
                            'link' => null
                        )
                    );
    $data['breadcrumb'] = $breadcrumb;
    return view('pages/gallery', $data);
});

// Calendar
$routes->get('pages/calendar', function () {
    $data['title'] = "AdminLTE 3 | Calendar";
    $data['breadcrumb_title'] = "Calendar";
    $breadcrumb =   array(
                        array(
                            'title' => 'Home',
                            'link' => 'dashboard'
                        ),
                        array(
                            'title' => 'Calendar',
                            'link' => null
                        )
                    );
    $data['breadcrumb'] = $breadcrumb;
    return view('pages/calendar', $data);
});

// Wigets
$routes->get('pages/widgets', function () {
    $data['title'] = "AdminLTE 3 | Widgets";
    $data['breadcrumb_title'] = "Widgets";
    $breadcrumb =   array(
                        array(
                            'title' => 'Home',
                            'link' => 'dashboard'
                        ),
                        array(
                            'title' => 'Widgets',
                            'link' => null
                        )
                    );
    $data['breadcrumb'] = $breadcrumb;
    return view('pages/widgets', $data);
});

// Mailbox
$routes->get('pages/inbox', function () {
    $data['title'] = "AdminLTE 3 | Mailbox";
    $data['breadcrumb_title'] = "Inbox";
    $breadcrumb =   array(
                        array(
                            'title' => 'Home',
                            'link' => 'dashboard'
                        ),
                        array(
                            'title' => 'Inbox',
                            'link' => null
                        )
                    );
    $data['breadcrumb'] = $breadcrumb;
    return view('pages/mailbox/mailbox', $data);
});

$routes->get('pages/compose', function () {
    $data['title'] = "AdminLTE 3 | Compose Message";
    $data['breadcrumb_title'] = "Compose";
    $breadcrumb =   array(
                        array(
                            'title' => 'Home',
                            'link' => 'dashboard'
                        ),
                        array(
                            'title' => 'Compose',
                            'link' => null
                        )
                    );
    $data['breadcrumb'] = $breadcrumb;
    return view('pages/mailbox/compose', $data);
});

$routes->get('pages/read', function () {
    $data['title'] = "AdminLTE 3 | Read Mail";
    $data['breadcrumb_title'] = "Compose";
    $breadcrumb =   array(
                        array(
                            'title' => 'Home',
                            'link' => 'dashboard'
                        ),
                        array(
                            'title' => 'Compose',
                            'link' => null
                        )
                    );
    $data['breadcrumb'] = $breadcrumb;
    return view('pages/mailbox/read-mail', $data);
});

// Projects
$routes->get('pages/project', function () {
    $data['title'] = "AdminLTE 3 | Projects";
    $data['breadcrumb_title'] = "Projects";
    $breadcrumb =   array(
                        array(
                            'title' => 'Home',
                            'link' => 'dashboard'
                        ),
                        array(
                            'title' => 'Projects',
                            'link' => null
                        )
                    );
    $data['breadcrumb'] = $breadcrumb;
    return view('pages/projects/index', $data);
});

$routes->get('pages/project/add', function () {
    $data['title'] = "AdminLTE 3 | Project Add";
    $data['breadcrumb_title'] = "Project Add";
    $breadcrumb =   array(
                        array(
                            'title' => 'Home',
                            'link' => 'dashboard'
                        ),
                        array(
                            'title' => 'Project Add',
                            'link' => null
                        )
                    );
    $data['breadcrumb'] = $breadcrumb;
    return view('pages/projects/add', $data);
});

$routes->get('pages/project/edit', function () {
    $data['title'] = "AdminLTE 3 | Project Edit";
    $data['breadcrumb_title'] = "Project Edit";
    $breadcrumb =   array(
                        array(
                            'title' => 'Home',
                            'link' => 'dashboard'
                        ),
                        array(
                            'title' => 'Project Edit',
                            'link' => null
                        )
                    );
    $data['breadcrumb'] = $breadcrumb;
    return view('pages/projects/edit', $data);
});

$routes->get('pages/project/detail', function () {
    $data['title'] = "AdminLTE 3 | Project Detail";
    $data['breadcrumb_title'] = "Project Detail";
    $breadcrumb =   array(
                        array(
                            'title' => 'Home',
                            'link' => 'dashboard'
                        ),
                        array(
                            'title' => 'Project Detail',
                            'link' => null
                        )
                    );
    $data['breadcrumb'] = $breadcrumb;
    return view('pages/projects/detail', $data);
});

// Pages
$routes->get('404', function () {
    $data['title'] = "AdminLTE 3 | 404 Page not found";
    $data['breadcrumb_title'] = "404 Page";
    $breadcrumb =   array(
                        array(
                            'title' => 'Home',
                            'link' => 'dashboard'
                        ),
                        array(
                            'title' => '404 Page',
                            'link' => null
                        )
                    );
    $data['breadcrumb'] = $breadcrumb;
    return view('pages/404', $data);
});

$routes->get('500', function () {
    $data['title'] = "AdminLTE 3 | 500 Page Error";
    $data['breadcrumb_title'] = "500 Page Error";
    $breadcrumb =   array(
                        array(
                            'title' => 'Home',
                            'link' => 'dashboard'
                        ),
                        array(
                            'title' => '500 Page Error',
                            'link' => null
                        )
                    );
    $data['breadcrumb'] = $breadcrumb;
    return view('pages/500', $data);
});

$routes->get('pages/contacts', function () {
    $data['title'] = "AdminLTE 3 | Contacts";
    $data['breadcrumb_title'] = "Contacts";
    $breadcrumb =   array(
                        array(
                            'title' => 'Home',
                            'link' => 'dashboard'
                        ),
                        array(
                            'title' => 'Contacts',
                            'link' => null
                        )
                    );
    $data['breadcrumb'] = $breadcrumb;
    return view('pages/contacts', $data);
});

$routes->get('pages/profile', function () {
    $data['title'] = "AdminLTE 3 | Profile";
    $data['breadcrumb_title'] = "Profile";
    $breadcrumb =   array(
                        array(
                            'title' => 'Home',
                            'link' => 'dashboard'
                        ),
                        array(
                            'title' => 'Profile',
                            'link' => null
                        )
                    );
    $data['breadcrumb'] = $breadcrumb;
    return view('pages/profile', $data);
});

$routes->get('pages/ecommerce', function () {
    $data['title'] = "AdminLTE 3 | E-commerce";
    $data['breadcrumb_title'] = "E-commerce";
    $breadcrumb =   array(
                        array(
                            'title' => 'Home',
                            'link' => 'dashboard'
                        ),
                        array(
                            'title' => 'E-commerce',
                            'link' => null
                        )
                    );
    $data['breadcrumb'] = $breadcrumb;
    return view('pages/ecommerce', $data);
});

$routes->get('pages/invoice', function () {
    $data['title'] = "AdminLTE 3 | Invoice";
    $data['breadcrumb_title'] = "Invoice";
    $breadcrumb =   array(
                        array(
                            'title' => 'Home',
                            'link' => 'dashboard'
                        ),
                        array(
                            'title' => 'Invoice',
                            'link' => null
                        )
                    );
    $data['breadcrumb'] = $breadcrumb;
    return view('pages/invoice', $data);
});

$routes->get('pages/invoice/print', function () {
    $data['title'] = "AdminLTE 3 | Invoice Print";
    $data['breadcrumb_title'] = "Invoice Print";
    $breadcrumb =   array(
                        array(
                            'title' => 'Home',
                            'link' => 'dashboard'
                        ),
                        array(
                            'title' => 'Invoice Print',
                            'link' => null
                        )
                    );
    $data['breadcrumb'] = $breadcrumb;
    return view('pages/invoice_print', $data);
});

$routes->get('pages/blank', function () {
    $data['title'] = "AdminLTE 3 | Blank";
    $data['breadcrumb_title'] = "Blank";
    $breadcrumb =   array(
                        array(
                            'title' => 'Home',
                            'link' => 'dashboard'
                        ),
                        array(
                            'title' => 'Blank',
                            'link' => null
                        )
                    );
    $data['breadcrumb'] = $breadcrumb;
    return view('blank', $data);
});

$routes->get('pages/starter', function () {
    $data['title'] = "AdminLTE 3 | Starter";
    $data['breadcrumb_title'] = "Starter";
    $breadcrumb =   array(
                        array(
                            'title' => 'Home',
                            'link' => 'dashboard'
                        ),
                        array(
                            'title' => 'Starter',
                            'link' => null
                        )
                    );
    $data['breadcrumb'] = $breadcrumb;
    return view('pages/starter', $data);
});

$routes->get('login', function () {
    $data['title'] = "AdminLTE 3 | Login";
    return view('pages/login', $data);
});

$routes->get('register', function () {
    $data['title'] = "AdminLTE 3 | Registration Page";
    return view('pages/register', $data);
});

$routes->get('recovery-password', function () {
    $data['title'] = "AdminLTE 3 | Recovery Password";
    return view('pages/recovery_password', $data);
});

$routes->get('forgot-password', function () {
    $data['title'] = "AdminLTE 3 | Forgot Password";
    return view('pages/forgot_password', $data);
});

$routes->get('pages/pace', function () {
    $data['title'] = "AdminLTE 3 | Pace";
    $data['breadcrumb_title'] = "Pace";
    $breadcrumb =   array(
                        array(
                            'title' => 'Home',
                            'link' => 'dashboard'
                        ),
                        array(
                            'title' => 'Pace',
                            'link' => null
                        )
                    );
    $data['breadcrumb'] = $breadcrumb;
    return view('pages/pace', $data);
});

$routes->get('pages/language-menu', function () {
    $data['title'] = "AdminLTE 3 | Language Menu";
    $data['breadcrumb_title'] = "Language Menu";
    $breadcrumb =   array(
                        array(
                            'title' => 'Home',
                            'link' => 'dashboard'
                        ),
                        array(
                            'title' => 'Language Menu',
                            'link' => null
                        )
                    );
    $data['breadcrumb'] = $breadcrumb;
    return view('pages/language_menu', $data);
});

$routes->get('pages/legacy-user-menu', function () {
    $data['title'] = "AdminLTE 3 | Legacy User Menu";
    $data['breadcrumb_title'] = "Language Menu";
    $breadcrumb =   array(
                        array(
                            'title' => 'Home',
                            'link' => 'dashboard'
                        ),
                        array(
                            'title' => 'Language Menu',
                            'link' => null
                        )
                    );
    $data['breadcrumb'] = $breadcrumb;
    return view('pages/legacy_user_menu', $data);
});

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
