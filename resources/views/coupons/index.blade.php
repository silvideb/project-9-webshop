<x-base-layout>
    <div class="container mx-auto p-6 bg-white shadow-lg rounded-lg">

        <!-- Centered Heading -->
        <h1 class="text-3xl font-bold text-gray-800 text-center mb-6">Overzicht Kortingsbonnen</h1>

        <!-- Success Message -->
        @if (session('success'))
            <div class="text-green-500 bg-green-100 p-4 rounded-md mb-6">
                {{ session('success') }}
            </div>
        @endif

        <!-- Create Coupon Button -->
        <div class="mb-6 text-center">
            <a href="{{ route('coupons.create') }}" class="bg-blue-500 text-white px-6 py-3 rounded-md hover:bg-blue-600 transition duration-200 ease-in-out">
                Nieuwe kortingsbon aanmaken
            </a>
        </div>

        <!-- Coupons Table -->
        <div class="overflow-x-auto">
            <table class="min-w-full table-auto border-collapse border border-gray-300">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-4 py-2 border text-left text-sm text-gray-600">ID</th>
                        <th class="px-4 py-2 border text-left text-sm text-gray-600">Kortingscode</th>
                        <th class="px-4 py-2 border text-left text-sm text-gray-600">Type</th>
                        <th class="px-4 py-2 border text-left text-sm text-gray-600">Kortingswaarde</th>
                        <th class="px-4 py-2 border text-left text-sm text-gray-600">Startdatum</th>
                        <th class="px-4 py-2 border text-left text-sm text-gray-600">Einddatum</th>
                        <th class="px-4 py-2 border text-left text-sm text-gray-600">Acties</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($coupons as $coupon)
                    <tr class="hover:bg-gray-100 transition duration-200 ease-in-out">
                        <td class="px-4 py-2 border text-sm text-gray-800">{{ $coupon->id }}</td>
                        <td class="px-4 py-2 border text-sm text-gray-800">{{ $coupon->code }}</td>
                        <td class="px-4 py-2 border text-sm text-gray-800">{{ ucfirst($coupon->discount_type) }}</td>
                        <td class="px-4 py-2 border text-sm text-gray-800">{{ $coupon->discount_value }}</td>
                        <td class="px-4 py-2 border text-sm text-gray-800">{{ $coupon->start_date ?? 'Onbekend' }}</td>
                        <td class="px-4 py-2 border text-sm text-gray-800">{{ $coupon->end_date ?? 'Onbekend' }}</td>
                        <td class="px-4 py-2 border text-sm text-gray-800">
                            <!-- Edit Link -->
                            <a href="{{ route('coupons.edit', $coupon->id) }}" class="text-blue-500 hover:text-blue-700 transition duration-200 ease-in-out">Bewerken</a>

                            <!-- Delete Form -->
                            <form action="{{ route('coupons.destroy', $coupon->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Weet je zeker dat je deze kortingsbon wilt verwijderen?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 transition duration-200 ease-in-out">
                                    Verwijderen
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-base-layout>
