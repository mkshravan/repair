<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'index';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['about-us'] = 'index/about';
$route['contact-us'] = 'index/contact';
$route['computer-repair-in-ranchi'] = 'index/computer_repair';
$route['laptop-repair-in-ranchi'] = 'index/laptop_repair';
$route['printer-repair-in-ranchi'] = 'index/printer_repair';

$route['admin'] = 'login/index';
$route['admin/login'] = 'login/login';
$route['admin/logout'] = 'login/logout';

$route['admin/dashboard'] = 'dashboard';

$route['admin/complaints/index'] = 'complaints/index';
$route['admin/complaints/add'] = 'complaints/add';
$route['admin/complaints/closed'] = 'complaints/closed';
$route['admin/complaints/edit/(:num)'] = 'complaints/edit/$1';

$route['admin/quotation/index'] = 'quotation/index';

$route['admin/quotation/add'] = 'quotation/add';

$route['admin/quotation/edit/(:num)'] = 'quotation/edit/$1';

$route['admin/quotation/printQuotation/(:any)'] = 'quotation/printQuotation/$1';

$route['admin/quotation/quotationApprovalList'] = 'quotation/quotationApprovalList';

$route['admin/quotation/quotationApprovalAdd'] = 'quotation/quotationApprovalAdd';

$route['admin/quotation/printQuotationApproval/(:any)'] = 'quotation/printQuotationApproval/$1';

$route['admin/invoice/index'] = 'invoice/index';
$route['admin/invoice/add'] = 'invoice/add';
$route['admin/invoice/printInvoice/(:any)'] = 'invoice/printInvoice/$1';

$route['admin/report/date_to_date_quotation'] = 'report/date_to_date_quotation';

$route['admin/report/date_to_date_tax_invoice'] = 'report/date_to_date_tax_invoice';

$route['admin/report/cancel_quotation'] = 'report/cancel_quotation';

$route['admin/inventory/index'] = 'inventory/index';

$route['admin/inventory/add'] = 'inventory/add';

$route['admin/inventory/edit/(:num)'] = 'inventory/edit/$1';

$route['admin/user/index'] = 'user/index';

$route['admin/user/add'] = 'user/add';

$route['admin/user/edit/(:num)'] = 'user/edit/$1';

$route['admin/user/remove/(:num)'] = 'user/remove/$1';