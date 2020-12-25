<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidationRole;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdmController extends Controller
{

    public function listRoles()
    {
        $role = Role::all();
        return view('site.adm.roles.listRoles', ['roles' => $role]);
    }

    public function CadasterShowRoles()
    {
        return view('site.adm.roles.showRoles');
    }

    public function CadasterRoles(ValidationRole $request)
    {
        $role = new Role();

        $role->name = $request->name;
        $role->guard_name = "web";

        if ($role->save()) {
            return redirect()->route('adm.roles.list')->with('notify-success', 'Cargo cadastrado');
        } else {
            return redirect()->route('adm.roles.list')->with('notify-error', 'Falha ao cadastrar');
        }
    }

    public function EditShowRoles(int $id)
    {

        $role = Role::where(['id' => $id])->first();

        if (empty($role)) {
            return redirect()->route('adm.roles.list')->with('notify-error', 'Cargo não encontrado');
        }

        return view('site.adm.roles.editRoles', ['role' => $role]);
    }

    public function editRoles(ValidationRole $request, int $id)
    {

        $role = Role::where(['id' => $id])->first();

        $role->name = $request->name;

        if ($role->save()) {
            return redirect()->route('adm.roles.list')->with('notify-success', 'Cargo atualizado');
        } else {
            return redirect()->route('adm.roles.list')->with('notify-error', 'Falha ao atualizar');
        }
    }

    public function listPermission()
    {
        $permission = Permission::all();
        return view('site.adm.permission.listPermission', ['permissions' => $permission]);
    }


    public function CadasterShowPermission()
    {
        return view('site.adm.permission.showPermission');
    }

    public function CadasterPermission(ValidationRole $request)
    {
        $permission = new Permission();

        $permission->name = $request->name;
        $permission->guard_name = "web";

        if ($permission->save()) {
            return redirect()->route('adm.permission.list')->with('notify-success', 'Permissão cadastrada');
        } else {
            return redirect()->route('adm.permission.list')->with('notify-error', 'Falha ao cadastrar');
        }
    }

    public function EditShowPermission(int $id)
    {

        $permission = Permission::where(['id' => $id])->first();

        if (empty($permission)) {
            return redirect()->route('adm.permission.list')->with('notify-error', 'Permissão não encontrada');
        }

        return view('site.adm.permission.editPermission', ['permission' => $permission]);
    }

    public function editPermission(ValidationRole $request, int $id)
    {

        $permission = Permission::where(['id' => $id])->first();

        $permission->name = $request->name;

        if ($permission->save()) {
            return redirect()->route('adm.permission.list')->with('notify-success', 'Permissão atualizada');
        } else {
            return redirect()->route('adm.permission.list')->with('notify-error', 'Falha ao atualizar');
        }
    }

    public function showSycnRolesPermissions(int $id)
    {
        $role = Role::where(['id' => $id])->first();

        if (empty($role)) {
            return redirect()->route('adm.roles.list')->with('notify-error', 'Cargo não encontrado');
        }

        $permissions = Permission::all();

        foreach ($permissions as $permission) {
            if ($role->hasPermissionTo($permission->id)) {
                $permission->can = true;
            } else {
                $permission->can = false;
            }
        }

        return view('site.adm.roles.sync', ['permissions' => $permissions, 'role' => $role]);
    }

    public function syncRolesPermissions(int $id, Request $request)
    {
        $role = Role::where(['id' => $id])->first();

        if (empty($role)) {
            return redirect()->route('adm.role.list')->with('notify-error', 'Cargo não encontrado');
        }

        $dados = $request->except('_token', '_method');

        foreach ($dados as $key => $value) {
            $permissions[] = Permission::where(['id' => $key])->first();
        }

        if (!empty($permissions)) {
            $role->syncPermissions($permissions);
        } else {
            $role->syncPermissions(null);
        }

        return redirect()->route('adm.roles.sync', ['id' => $role->id])->with('notify-success', 'Cargo e permissão sincronizada');
    }

    public function listUser()
    {
        $users = User::all();

        return view('site.adm.roles.listUser', ['users' => $users]);
    }


    public function showSycnRolesUser(int $id)
    {
        $user = User::where(['id' => $id])->first();

        if (empty($user)) {
            return redirect()->route('adm.roles.user.list')->with('notify-error', 'Usuário não encontrado');
        }

        $roles = Role::all();

        foreach ($roles as $role) {
            if ($user->hasRole($role->id)) {
                $role->can = true;
            } else {
                $role->can = false;
            }
        }

        return view('site.adm.roles.syncUser', ['roles' => $roles, 'user' => $user]);
    }

    public function SycnRolesUserGo(int $id, Request $request)
    {
        $user = User::where(['id' => $id])->first();

        if (empty($user)) {
            return redirect()->route('adm.role.listUser')->with('notify-error', 'Usuário não encontrado');
        }

        $dados = $request->except('_token', '_method');

        foreach ($dados as $key => $value) {
            $role[] = Role::where(['id' => $key])->first();
        }

        if (!empty($role)) {
            $user->syncRoles($role);
        } else {
            $user->syncRoles(null);
        }

        return redirect()->route('adm.roles.syncUser', ['id' => $user->id])->with('notify-success', 'Cargo e usuário sincronizada');
    }
}
