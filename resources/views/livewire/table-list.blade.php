    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full text-left text-sm font-light">
                        <thead class="border-b font-medium dark:border-neutral-500">
                            <tr>
                                <th scope="col" class="px-6 py-4">#</th>
                                <th scope="col" class="px-6 py-4">Name</th>
                                <th scope="col" class="px-6 py-4">Correo</th>
                                <th scope="col" class="px-6 py-4">Telefono</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr class="border-b dark:border-neutral-500">
                                    <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $user->num_empleado }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $user->name }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $user->email }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $user->phone }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="my-2">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
