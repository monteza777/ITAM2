<?php
Route::get('/', function () { return redirect('/admin/home'); });

// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('auth.login');
$this->post('login', 'Auth\LoginController@login')->name('auth.login');
$this->post('logout', 'Auth\LoginController@logout')->name('auth.logout');

// Change Password Routes...
$this->get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
$this->patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', 'HomeController@index');
    Route::get('/calendar', 'Admin\SystemCalendarController@index'); 
  
    Route::resource('roles', 'Admin\RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    Route::resource('users', 'Admin\UsersController');
    Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);
    Route::resource('user_actions', 'Admin\UserActionsController');
    Route::resource('servers', 'Admin\ServersController');
    Route::post('servers_mass_destroy', ['uses' => 'Admin\ServersController@massDestroy', 'as' => 'servers.mass_destroy']);
    Route::get('archives', ['uses' => 'Admin\ServersController@archives', 'as' => 'servers.archives']);
    Route::get('restore/{id}', ['uses' => 'Admin\ServersController@restore', 'as' => 'servers.restore']);
    Route::get('servers_ar/{id}', ['uses' => 'Admin\ServersController@viewArchive', 'as' => 'servers.servers_ar']);
    Route::delete('permanentDelete/{id}', ['uses' => 'Admin\ServersController@permanentDelete', 'as' => 'servers.permanentDelete']);
    Route::resource('server_details', 'Admin\ServerDetailsController');

});
