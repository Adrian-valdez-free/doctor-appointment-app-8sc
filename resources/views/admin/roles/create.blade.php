<x-admin-layout :breadcrumbs="[

   [
    'name' => 'Dashboards',
    'href' => route('admin.dashboard'),
   ],
   [
    'name' => 'Roles',
    'href' => route('adminroles.index'),
   ],

    [ 'name' => 'Nuevo'],
]">

</x-admin-layout>