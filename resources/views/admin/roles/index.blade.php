<x-admin-layout :breadcrumbs="[

   [
    'name' => 'Dashboards',
    'href' => route('admin.dashboard'),
   ],

    [ 'name' => 'Roles'],
]">
    @livewire('admin.datatables.role-table')

</x-admin-layout>
