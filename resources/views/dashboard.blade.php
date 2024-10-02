<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('SELAMAT DATANG YANG MULIA') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>

            <!-- Dashboard Grid Layout -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
                <!-- Card 1 -->
                <div class="bg-red-500 text-white p-6 rounded-lg shadow-lg">
                    <div class="flex items-center justify-center">
                        <i class="fas fa-project-diagram fa-3x"></i>
                    </div>
                    <h3 class="text-center text-2xl mt-4">Project Manager</h3>
                </div>

                <!-- Card 2 -->
                <div class="bg-blue-500 text-white p-6 rounded-lg shadow-lg">
                    <div class="flex items-center justify-center">
                        <i class="fas fa-users fa-3x"></i>
                    </div>
                    <h3 class="text-center text-2xl mt-4">Team Hub</h3>
                </div>

                <!-- Card 3 -->
                <div class="bg-purple-500 text-white p-6 rounded-lg shadow-lg">
                    <div class="flex items-center justify-center">
                        <i class="fas fa-code fa-3x"></i>
                    </div>
                    <h3 class="text-center text-2xl mt-4">Project Tracker</h3>
                </div>

                <!-- Card 4 -->
                <div class="bg-gray-800 text-white p-6 rounded-lg shadow-lg">
                    <div class="flex items-center justify-center">
                        <i class="fas fa-file-invoice-dollar fa-3x"></i>
                    </div>
                    <h3 class="text-center text-2xl mt-4">Billing Center</h3>
                </div>

                <!-- Card 5 -->
                <div class="bg-yellow-500 text-white p-6 rounded-lg shadow-lg">
                    <div class="flex items-center justify-center">
                        <i class="fas fa-search fa-3x"></i>
                    </div>
                    <h3 class="text-center text-2xl mt-4">Proposal Vault</h3>
                </div>

                <!-- Card 6 -->
                <div class="bg-green-500 text-white p-6 rounded-lg shadow-lg">
                    <div class="flex items-center justify-center">
                        <i class="fas fa-folder fa-3x"></i>
                    </div>
                    <h3 class="text-center text-2xl mt-4">Form Depository</h3>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
