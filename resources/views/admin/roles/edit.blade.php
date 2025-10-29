<x-admin-layout :breadcrumbs="[

   [
    'name' => 'Dashboards',
    'href' => route('admin.dashboard'),
   ],
   [
    'name' => 'Roles',
    'href' => route('adminroles.index'),
   ],

    [ 'name' => 'Editar'],
]">
@livewire('admin.datatables.role-table')


</x-admin-layout>