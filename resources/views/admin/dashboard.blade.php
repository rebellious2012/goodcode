@extends('admin.layouts.app')

@section('content')
<div class="p-8">
    <h1 class="text-2xl font-bold">Welcome to the Admin Dashboard</h1>
    <p class="mt-2 text-gray-600">This page is protected by authentication.</p>

    <!-- Logout Button -->
    <div class="mt-6">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="px-4 py-2 font-medium text-white bg-red-600 rounded-md hover:bg-red-700">
                Logout
            </button>
        </form>
    </div>
</div>
@endsection
