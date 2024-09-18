<x-app-layout>
    <x-slot name="header">

        <div class="fs-6" style="color:rgb(211, 86, 86)">Welcome,{{ Auth::user()->name }}</div>
    </x-slot>

</x-app-layout>
