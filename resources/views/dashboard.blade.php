<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-4 lg:p-10">
                    <div class="card lg:card-side bordered">
                        <figure>
                            <img src="https://picsum.photos/id/1005/400/250">
                        </figure>
                        <div class="card-body">
                            <h2 class="card-title">Horizontal</h2>
                            <p>Rerum reiciendis beatae tenetur excepturi aut pariatur est eos. Sit sit necessitatibus veritatis sed
                                molestiae voluptates incidunt iure sapiente.</p>
                            <div class="card-actions">
                                <button class="btn btn-primary">Get Started</button>
                                <button class="btn btn-ghost">More info</button>
                            </div>
                        </div>
                    </div>
                    <div class="card lg:card-side bordered">
                        <figure>
                            <img src="https://picsum.photos/id/1005/400/250">
                        </figure>
                        <div class="card-body">
                            <h2 class="card-title">Horizontal
                                <div class="badge mx-2">NEW</div>
                            </h2>
                            <p>Rerum reiciendis beatae tenetur excepturi aut pariatur est eos. Sit sit necessitatibus veritatis sed
                                molestiae voluptates incidunt iure sapiente.</p>
                            <div class="card-actions">
                                <button class="btn btn-primary">Get Started</button>
                                <button class="btn btn-ghost">More info</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
