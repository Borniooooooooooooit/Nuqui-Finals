<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

        <!-- Welcome and Login Message -->
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                {{ __("You're logged in!") }}
            </div>
        </div>

        <!-- Profile Viewing Section -->
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6">
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Profile Information</h3>
                <div class="space-y-4">
                    <div class="flex items-center space-x-4">
                        <span class="font-medium text-gray-700">First Name:</span>
                        <span class="text-gray-900">{{ Auth::user()->first_name }}</span>
                    </div>
                    <div class="flex items-center space-x-4">
                        <span class="font-medium text-gray-700">Middle Name:</span>
                        <span class="text-gray-900">{{ Auth::user()->middle_name ?? 'N/A' }}</span>
                    </div>
                    <div class="flex items-center space-x-4">
                        <span class="font-medium text-gray-700">Last Name:</span>
                        <span class="text-gray-900">{{ Auth::user()->last_name }}</span>
                    </div>
                    <div class="flex items-center space-x-4">
                        <span class="font-medium text-gray-700">Email:</span>
                        <span class="text-gray-900">{{ Auth::user()->email }}</span>
                    </div>
                    <div class="flex items-center space-x-4">
                        <span class="font-medium text-gray-700">Joined:</span>
                        <span class="text-gray-900">{{ Auth::user()->created_at->format('F j, Y') }}</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Option to Update Profile Information -->
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <a href="{{ route('profile.edit') }}" class="text-blue-500 hover:text-blue-700">Edit Profile Information</a>
            </div>
        </div>

    </div>
</div>

</x-app-layout>
