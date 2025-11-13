<x-admin-layout :breadcrumbs="[

   [
    'name' => 'Dashboards',
    'href' => route('admin.dashboard'),
   ],
   [
    'name' => 'Roles',
    'href' => route('adminusuarios.index'),
   ],

    [ 'name' => 'Nuevo'],
]">

{{-- <x-wire-card>
    <form action="{{ route('adminroles.store') }}" method="POST">
        @csrf
        <x-wire-input label="Nombre" name="name" placeholder="Nombre del rol" value="{{ old('name')}}"
        >
        </x-wire-input> 
         <div class ="flex justify-end mt-4"><x-wire-button type="submit" blue>Guardar</x-wire-button>
        </div>
    </form>
</x-wire-card> --}}

</x-admin-layout>