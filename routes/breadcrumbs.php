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

