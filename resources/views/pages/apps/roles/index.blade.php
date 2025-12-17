@extends('layouts.apps.master', ['title' => 'Data Roles'])

@section('content')
    <x-container>
        <div class="row row-cards">
            <div class="col-12">
                @can('roles-create')
                    <x-button
                        title="Tambah Data Role"
                        type="create"
                        :url="route('apps.roles.create')"
                    />
                @endcan
                <x-card-action title="Daftar Roles" url="{{ route('apps.roles.index') }}">
                    <x-table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Role</th>
                                <th>Permissions</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $i => $role)
                                <tr>
                                    <td>{{ $i + $roles->firstItem() }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td class="d-flex flex-wrap gap-1">
                                        @foreach ($role->permissions as $permission)
                                            <span class="btn btn-sm bg-teal text-white">{{ $permission->name }}</span>
                                        @endforeach
                                    </td>
                                    <td width="200px">
                                        @can('roles-update')
                                            <x-button
                                                title="Ubah Data"
                                                type="edit"
                                                :url="route('apps.roles.edit', $role->id)"
                                            />
                                        @endcan

                                        @can('roles-delete')
                                            <x-button
                                                title="Hapus Data"
                                                type="delete"
                                                :id="$role->id"
                                                :url="route('apps.roles.destroy', $role->id)"
                                            />
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </x-table>
                </x-card-action>
                <div class="d-none flex-sm-fill d-sm-flex align-items-center justify-content-sm-end mt-2">
                    <div>
                        {{ $roles->links('vendor.pagination.custom') }}
                    </div>
                </div>
            </div>
        </div>
    </x-container>
@endsection
