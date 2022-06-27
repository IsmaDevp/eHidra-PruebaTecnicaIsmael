<div class="flex space-x-4 items-center">
    <div x-data="{ 'showModal': false }" @keydown.escape="showModal = false">
        <!-- Trigger for Modal -->
        <button type="button" @click="showModal = true"><i class='bx bxs-info-square'></i></button>

        <!-- Modal -->
        <div class="fixed inset-0 z-30 flex items-center justify-center overflow-auto bg-black bg-opacity-50"
            x-show="showModal">
            <!-- Modal inner -->
            <div class="max-w-3xl px-6 py-4 mx-auto text-left bg-white rounded shadow-lg" @click.away="showModal = false"
                x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90"
                x-transition:enter-end="opacity-100 scale-100">
                <!-- Title / Close-->
                <div class="flex items-center justify-between">
                    <h5 class="mr-3 text-black max-w-none">Acerca de {{ $user->name }}</h5>

                    <button type="button" class="z-50 cursor-pointer" @click="showModal = false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- content -->
                <div class="flex flex-col space-y-3">
                    <div class="flex space-x-4">
                        <h3 class="font-bold">ID:</h3>
                        <p>{{ $user->id }}</p>
                    </div>

                    <div class="flex space-x-4">
                        <h3 class="font-bold">Name:</h3>
                        <p>{{ $user->name }}</p>
                    </div>

                    <div class="flex space-x-4">
                        <h3 class="font-bold">Email:</h3>
                        <p>{{ $user->email }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--editar-->
    <div x-data="{ 'showModal': false }" @keydown.escape="showModal = false">
        <!-- Trigger for Modal -->
        <button type="button" @click="showModal = true"><i class='bx bx-edit-alt'></i></i></button>

        <!-- Modal -->
        <div class="fixed inset-0 z-30 flex items-center justify-center overflow-auto bg-black bg-opacity-50"
            x-show="showModal">
            <!-- Modal inner -->
            <div class="max-w-3xl px-6 py-4 mx-auto text-left bg-white rounded shadow-lg"
                @click.away="showModal = false" x-transition:enter="motion-safe:ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                <!-- Title / Close-->
                <div class="flex items-center justify-between">
                    <h5 class="mr-3 text-black max-w-none">Acerca de {{ $user->name }}</h5>

                    <button type="button" class="z-50 cursor-pointer" @click="showModal = false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- content -->
                <form action="{{ route('gestion.update', $user->id) }}" method="POST"
                    class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    @csrf
                    @method('PUT')

                    <div class="flex flex-col">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                            Username
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            type="text"type="text" name="name" value="{{ old('name', $user->name) }}">
                            @error('name')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror

                        <label class="block text-gray-700 text-sm font-bold mb-2 mt-5" for="password">
                            Email
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            type="text" type="text" name="email" value="{{ old('email', $user->email) }}">
                            @error('email')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror

                        <button
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-5"
                            type="submit">
                            Edit
                        </button>


                    </div>

                </form>

            </div>
        </div>
    </div>


    @include('datatables::delete', ['value' => $user->id])
</div>
