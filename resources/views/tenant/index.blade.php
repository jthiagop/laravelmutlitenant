<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tenants') }}
            <x-btn-link class="ml-4 float-right" href="{{route('tenants.create')}}">Add Tenant</x-btn-link>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Domain
                </th>
                <th scope="col" class="px-6 py-3 text-right">
                    Açôes
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $tenants as $tenant )

            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                   {{$tenant->name}}
                </th>
                <td class="px-6 py-4">
                    {{$tenant->email}}

                </td>
                <td class="px-6 py-4">
                    @foreach ($tenant->domains as $domain )
                    {{$domain->domain}} {{$loop->last ? '' : ','}}
                    @endforeach

                </td>
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>

            </tr>
            @endforeach

        </tbody>
    </table>
</div>

        </div>
    </div>
</x-app-layout>
