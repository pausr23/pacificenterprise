@extends('admin.layout')

@section('content')
    <!-- Main Container -->
    <div class="h-screen bg-gradient-to-r secondary-color flex flex-col items-center justify-center px-4 sm:px-6 lg:px-8 relative">

        <!-- Logo Section (Mobile Only) -->
        <div class="block md:hidden absolute top-0 left-0 right-0 flex justify-center items-center h-1/4">
            <img
                class="w-64 sm:w-48 md:w-56"
                src="https://i.ibb.co/KX69vv5/Pacific-Enterprise.png"
                alt="Pacific-Enterprise"
            />
        </div>

        <!-- Content Wrapper -->
        <div class="w-full max-w-4xl grid grid-cols-1 md:grid-cols-2 items-center bg-purple-600 rounded-lg shadow-lg overflow-hidden">

            <!-- Left Image Section -->
            <div class="hidden md:block p-6">
                <img
                    class="w-full h-auto transition-transform duration-500 ease-in-out transform hover:scale-105"
                    src="https://i.ibb.co/KX69vv5/Pacific-Enterprise.png"
                    alt="Pacific-Enterprise"
                />
            </div>

            <!-- Right Login Section -->
            <div class="p-8 md:p-12 bg-gray-50 relative">
                <!-- Login Header -->
                <h1 class="text-3xl font-bold text-center text-purple-700 mb-8">
                    Login
                </h1>

                <!-- Login Form -->
                <form class="space-y-6" action="{{ route('admin.login.submit') }}" method="POST">
                    @csrf

                    <!-- Username Input -->
                    <div class="relative">
                        <input
                            type="text"
                            name="username"
                            class="w-full py-3 px-4 border border-gray-300 rounded-lg shadow-sm focus:ring-purple-500 focus:border-purple-500 text-gray-700 placeholder-gray-400"
                            placeholder="Username"
                            required
                        />
                    </div>

                    <!-- Password Input -->
                    <div class="relative">
                        <input
                            type="password"
                            name="password"
                            class="w-full py-3 px-4 border border-gray-300 rounded-lg shadow-sm focus:ring-purple-500 focus:border-purple-500 text-gray-700 placeholder-gray-400"
                            placeholder="Password"
                            required
                        />
                    </div>

                    <!-- Submit Button -->
                    <button
                        type="submit"
                        class="w-full py-3 px-4 bg-purple-600 text-white font-medium rounded-lg shadow-sm hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 transition-all"
                    >
                        Login
                    </button>
                </form>

                <!-- Error Message -->
                @if ($errors->has('login_error'))
                    <div class="mt-4 text-center text-red-500">
                        {{ $errors->first('login_error') }}
                    </div>
                @endif

                <!-- Loading Spinner -->
                <div id="spinner" class="hidden justify-center items-center mt-6">
                    <div class="w-6 h-6 border-4 border-t-transparent border-purple-600 rounded-full animate-spin"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Spinner Script -->
    <script>
        document.querySelector('form').addEventListener('submit', function () {
            document.getElementById('spinner').classList.remove('hidden');
        });
    </script>
@endsection
