<?php
//Main
Breadcrumbs::register('main', function($breadcrumbs)
{
    $breadcrumbs->push('Main Page', route('manage.dashboard'));
});
//Manage
Breadcrumbs::register('manage', function($breadcrumbs)
{
    $breadcrumbs->push('Manage Dashboard', route('manage.dashboard'));
});
//Profile
Breadcrumbs::register('profile', function($breadcrumbs)
{
    $breadcrumbs->parent('manage');
    $breadcrumbs->push('Profile', url('profile'));
});
//UserCompany
Breadcrumbs::register('userscompany', function($breadcrumbs)
{
    $breadcrumbs->parent('manage');
    $breadcrumbs->push('Users Company', url('company/users'));
});
//ProfileCompany
Breadcrumbs::register('profilecompany', function($breadcrumbs)
{
    $breadcrumbs->parent('manage');
    $breadcrumbs->push('Profile Company', url('company/users'));
});
//Object
Breadcrumbs::register('object', function($breadcrumbs)
{
    $breadcrumbs->parent('manage');
    $breadcrumbs->push('Objects', url('object/show'));
});
//CreateObject
Breadcrumbs::register('createobject', function($breadcrumbs)
{
    $breadcrumbs->parent('object');
    $breadcrumbs->push('Create Object', url('object/register'));
});

//AdminBradCrumbs
Breadcrumbs::register('admin', function($breadcrumbs)
{
    $breadcrumbs->push('Admin Panel', route('admin.manage'));
});
Breadcrumbs::register('settings', function($breadcrumbs)
{
    $breadcrumbs->parent('admin');
    $breadcrumbs->push('Settings',route('admin.settings'));
});
Breadcrumbs::register('createuser', function($breadcrumbs)
{
    $breadcrumbs->parent('admin');
    $breadcrumbs->push('Create User',route('admin.users.create'));
});
Breadcrumbs::register('showusers', function($breadcrumbs)
{
    $breadcrumbs->parent('admin');
    $breadcrumbs->push('List Users',route('admin.users.show'));
});
//EndAdminBradCrumbs

//ManagerBreadcrumbs
Breadcrumbs::register('distributors', function($breadcrumbs)
{
    $breadcrumbs->parent('manage');
    $breadcrumbs->push('Distributors', route('manager.users'));
});
//EndManagerBreadcrumbs


