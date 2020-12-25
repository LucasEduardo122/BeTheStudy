<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ['App\Http\Controllers\HomeController', 'index'])->name('home');
Route::get('/home', ['App\Http\Controllers\HomeController', 'index'])->name('home.index');

Route::get('/entrar' , ['App\Http\Controllers\AuthController', 'login'])->name('login');
Route::post('/entrar/go', ['App\Http\Controllers\AuthController', 'logar'])->name('login.go');

Route::get('/sair' , ['App\Http\Controllers\AuthController', 'logout'])->name('logout');

Route::get('/cadastrar' , ['App\Http\Controllers\AuthController', 'register'])->name('register');
Route::post('/cadastrar/go', ['App\Http\Controllers\AuthController', 'registerUser'])->name('register.go');

Route::get('/cursos', ['App\Http\Controllers\CourseController', 'index'])->name('course');

Route::get('/cursos/{name}', ['App\Http\Controllers\CourseController', 'course'])->name('course.index');

Route::get('/cursos/{name}/aula/{uri}', ['App\Http\Controllers\CourseController', 'aula'])->name('course.aula');

Route::get('/contato', ['App\Http\Controllers\HomeController', 'contact'])->name('contact');

Route::get('/perfil', ['App\Http\Controllers\ProfileController', 'profile'])->name('profile');

//Adm

Route::get('/adicionar-curso' , ['App\Http\Controllers\ProfileController', 'registerCourse'])->name('registerCourse')->middleware('role:Administrador');
Route::post('/adicionar-curso/go' , ['App\Http\Controllers\ProfileController', 'registerCourseGo'])->name('registerCourseGo')->middleware('role:Administrador');

Route::get('/listar-cursos' , ['App\Http\Controllers\ProfileController', 'listCourse'])->name('listCourse')->middleware('role:Administrador');

Route::get('/perfil-curso/editar/{name}' , ['App\Http\Controllers\ProfileController', 'editCourse'])->name('listCourse.edit')->middleware('role:Administrador');

Route::get('/perfil-curso/editar/{name}/adicionar-video' , ['App\Http\Controllers\ProfileController', 'registerVideo'])->name('listCourse.edit.registervideo')->middleware('role:Administrador');
Route::post('/perfil-curso/editar/{id}/adicionar-video/go' , ['App\Http\Controllers\ProfileController', 'registerVideoGo'])->name('listCourse.edit.registervideoGo')->middleware('role:Administrador');

Route::get('/adicionar-cargos', ['App\Http\Controllers\AdmController','CadasterShowRoles'])->name('adm.roles')->middleware('role:Administrador');
Route::post('/adicionar-cargos/go', ['App\Http\Controllers\AdmController','CadasterRoles'])->name('adm.roles.go')->middleware('role:Administrador');

Route::get('/listar-cargos', ['App\Http\Controllers\AdmController','listRoles'])->name('adm.roles.list')->middleware('role:Administrador');

Route::get('/editar-cargo/{id}', ['App\Http\Controllers\AdmController','EditShowRoles'])->name('adm.roles.edit')->middleware('role:Administrador');
Route::put('/editar-cargo/{id}/go', ['App\Http\Controllers\AdmController','editRoles'])->name('adm.roles.edit.go')->middleware('role:Administrador');

Route::get('/adicionar-permissoes', ['App\Http\Controllers\AdmController','CadasterShowPermission'])->name('adm.permission')->middleware('role:Administrador');
Route::post('/adicionar-permissoes/go', ['App\Http\Controllers\AdmController','CadasterPermission'])->name('adm.permission.go')->middleware('role:Administrador');

Route::get('/listar-permissoes', ['App\Http\Controllers\AdmController','listPermission'])->name('adm.permission.list')->middleware('role:Administrador');

Route::get('/editar-permissao/{id}', ['App\Http\Controllers\AdmController','EditShowPermission'])->name('adm.permission.edit')->middleware('role:Administrador');
Route::put('/editar-permissao/{id}/go', ['App\Http\Controllers\AdmController','editPermission'])->name('adm.permission.edit.go')->middleware('role:Administrador');

Route::get('/sincronizar-permissao/{id}', ['App\Http\Controllers\AdmController','showSycnRolesPermissions'])->name('adm.roles.sync')->middleware('role:Administrador');
Route::put('/sincronizar=permissao/{id}/go', ['App\Http\Controllers\AdmController','syncRolesPermissions'])->name('adm.roles.sync.go')->middleware('role:Administrador');

Route::get('/listar-usuarios', ['App\Http\Controllers\AdmController','listUser'])->name('adm.roles.user.list')->middleware('role:Administrador')->middleware('role:Administrador');
Route::get('/sincronizar-usuarios-cargo/{id}', ['App\Http\Controllers\AdmController','showSycnRolesUser'])->name('adm.roles.syncUser')->middleware('role:Administrador');
Route::put('/sincronizar-usuarios/{id}/go', ['App\Http\Controllers\AdmController','SycnRolesUserGo'])->name('adm.roles.syncUser.go')->middleware('role:Administrador');
