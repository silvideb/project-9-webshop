<x-base-layout>
    <div class="container mx-auto p-6 bg-white shadow-lg rounded-lg">
        <!-- Heading -->
        <h1 class="text-3xl font-bold text-gray-800 text-center mb-6">Rollen Overzicht</h1>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="min-w-full table-auto border-collapse border border-gray-300">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-4 py-2 border text-left text-sm text-gray-600">ID</th>
                        <th class="px-4 py-2 border text-left text-sm text-gray-600">Naam</th>
                        <th class="px-4 py-2 border text-left text-sm text-gray-600">Aangemaakt op</th>
                        <th class="px-4 py-2 border text-left text-sm text-gray-600">Bewerkt op</th>
                        <th class="px-4 py-2 border text-left text-sm text-gray-600">Acties</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($roles as $role)
                    <tr class="hover:bg-gray-100 transition duration-200 ease-in-out">
                        <td class="px-4 py-2 border text-sm text-gray-800">{{ $role->id }}</td>
                        <td class="px-4 py-2 border text-sm text-gray-800">{{ $role->name }}</td>
                        <td class="px-4 py-2 border text-sm text-gray-800">{{ $role->created_at }}</td>
                        <td class="px-4 py-2 border text-sm text-gray-800">{{ $role->updated_at }}</td>
                        <td class="px-4 py-2 border text-sm text-gray-800">
                            <form action="{{ route('roles.destroy', $role->id) }}" method="POST" onsubmit="return confirm('Weet je zeker dat je deze rol wilt verwijderen?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 transition duration-200 ease-in-out">
                                    Verwijderen
                                </button>
                            </form>
                        </td>
                        <td class="px-4 py-2 border text-sm text-gray-800">
                            <a href="{{ route('roles.edit', $role->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-200 ease-in-out">
                                Bewerken
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
        <div class="mt-6 flex justify-center">
            <a href="{{ route('roles.create') }}" class="bg-green-500 text-white px-6 py-3 rounded-md hover:bg-green-600 transition duration-200 ease-in-out">
                Maak een nieuwe role
            </a>
        </div>
    </div>
</x-base-layout>
