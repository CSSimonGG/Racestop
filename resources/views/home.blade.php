<x-app-layout>
    <h1 class="text-red-600 font-bold">Welcome</h1>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button>Logout</button>
    </form>
</x-app-layout>
