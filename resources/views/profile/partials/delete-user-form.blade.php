<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Close sesión') }}
        </h2>

    </header>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="text-red-600">Logout</button>
    </form>
</section>
