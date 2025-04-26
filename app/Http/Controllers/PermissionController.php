<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    //
    public function index()
    {
        $permissions = Permission::get();
        return view('admin/role-permission.permission.index', [
            'permissions' => $permissions,
        ]);
    }
    public function create()
    {
        return view('admin/role-permission.permission.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => [
                'required',
                'string',
                'unique:permissions,name',
            ]
        ]);

        Permission::create([
            'name' => $request->name,
        ]);

        return redirect('admin/permissions')->with('status', 'Permission Created Successfully');
    }
    public function edit(Permission $permission)
    {
        // dd($permission);
        return view('admin/role-permission.permission.edit',[
            'permission' => $permission,
        ]);
    }
    public function update(Request $request, Permission $permission)
    {
        $request->validate([
            'name' => [
                'required',
                'string',
                'unique:permissions,name,' . $permission->id,
            ]
        ]);

        $permission->update([
            'name' => $request->name,
        ]);

        return redirect('admin/permissions')->with('status', 'Permission Updated Successfully');
    }
    public function destroy($permissionId)
    {
        $permission= Permission::find($permissionId);
        $permission->delete();
        return redirect('admin/permissions')->with('status', 'Permission Deleted Successfully');
    }
}
