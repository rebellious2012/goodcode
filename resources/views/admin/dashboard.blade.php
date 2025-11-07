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

    <!-- Visits Table -->
    <div class="mt-8">
        <h2 class="text-xl font-bold">Recent Visits</h2>
        <div class="mt-4 overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr class="w-full bg-gray-100 border-b">
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">IP Address</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User Agent</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">URL</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Referrer</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Visited At</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse ($visits as $visit)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $visit->ip_address }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ Str::limit($visit->user_agent, 50) }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ Str::limit($visit->url, 50) }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ Str::limit($visit->referrer, 30) }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $visit->visited_at->format('Y-m-d H:i:s') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-4 text-center text-gray-500">No visits yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="mt-4">
            {{ $visits->links() }}
        </div>
    </div>
</div>
@endsection
