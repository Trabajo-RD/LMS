<div>

    <!-- Filters -->
    <div class="bg-gray-200 py-4 mb-16 z-0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex">
            <button class="bg-white shadow h-12 px-4 rounded text-gray-700 focus:outline-none mr-4" wire:click="resetFilters">
                <i class="fas fa-th text-sm mr-2"></i>Catálogo cursos
            </button>

            <!-- dropdown categories -->
            <div class="relative mr-4" x-data="{ open: false }">
                <button class="block bg-white shadow h-12 px-4 rounded text-gray-700 overflow-hidden focus:outline-none" x-on:click="open = true">
                    <i class="fas fa-tags text-sm mr-2"></i>Categoría<i class="fas fa-caret-down text-sm ml-2"></i>
                </button>
                <!-- dropdown body -->
                <div class="absolute right-0 w-40 mt-2 py-2 bg-white rounded shadow" x-show="open" x-on:click.away="open = false">
                    @foreach ($categories as $category)
                        <a class="cursor-pointer transition-colors duration-200 block px-4 py-2 text-normal text-gray-700 hover:bg-blue-600 hover:text-white" wire:click="$set('category_id', {{$category->id}} )" x-on:click="open = false">
                            {{ $category->name }}
                        </a>
                    @endforeach
                </div>
            </div>

            <!-- dropdown types -->
            <div class="relative mr-4" x-data="{ open: false }">
                <button class="block bg-white shadow h-12 px-4 rounded text-gray-700 overflow-hidden focus:outline-none" x-on:click="open = true">
                    <i class="fas fa-photo-video text-sm mr-2"></i>Tipo<i class="fas fa-caret-down text-sm ml-2"></i>
                </button>
                <!-- dropdown body -->
                <div class="absolute right-0 w-40 mt-2 py-2 bg-white rounded shadow" x-show="open" x-on:click.away="open = false">
                    @foreach ($types as $type)
                        <a class="cursor-pointer transition-colors duration-200 block px-4 py-2 text-normal text-gray-700 hover:bg-blue-600 hover:text-white" wire:click="$set('type_id', {{$type->id}} )" x-on:click="open = false">
                            {{ $type->name }}
                        </a>
                    @endforeach
                </div>
            </div>

            <!-- dropdown levels -->
            <div class="relative mr-4" x-data="{ open: false }">
                <button class="block bg-white shadow h-12 px-4 rounded text-gray-700 overflow-hidden focus:outline-none" x-on:click="open = true">
                    <i class="fas fa-layer-group text-sm mr-2"></i>Niveles<i class="fas fa-caret-down text-sm ml-2"></i>
                </button>
                <!-- dropdown body -->
                <div class="absolute right-0 w-40 mt-2 py-2 bg-white rounded shadow" x-show="open" x-on:click.away="open = false">
                    @foreach ( $levels as $level )
                        <a class="cursor-pointer transition-colors duration-200 block px-4 py-2 text-normal text-gray-700 hover:bg-blue-600 hover:text-white" wire:click="$set('level_id', {{$level->id}} )" x-on:click="open = false">
                            {{ $level->name }}
                        </a>
                    @endforeach
                </div>
            </div>

            <!-- dropdown modalities -->
            <div class="relative mr-4" x-data="{ open: false }">
                <button class="block bg-white shadow h-12 px-4 rounded text-gray-700 overflow-hidden focus:outline-none" x-on:click="open = true">
                    <i class="fas fa-laptop-house text-sm mr-2"></i>Modalidad<i class="fas fa-caret-down text-sm ml-2"></i>
                </button>
                <!-- dropdown body -->
                <div class="absolute right-0 w-40 mt-2 py-2 bg-white rounded shadow" x-show="open" x-on:click.away="open = false">
                    @foreach ($modalities as $modality)
                        <a class="cursor-pointer transition-colors duration-200 block px-4 py-2 text-normal text-gray-700 hover:bg-blue-600 hover:text-white" wire:click="$set('modality_id', {{$modality->id}} )" x-on:click="open = false">
                            {{ $modality->name }}
                        </a>
                    @endforeach
                </div>
            </div>

        </div>
    </div>

    <!-- Latest Courses -->
    <section class="mt-24">
        <h2 class="text-center font-display font-semibold text-gray-600 text-2xl sm:text-3xl md:text-4xl mb-6">Catálogo de cursos</h2>
        <p class="text-center text-gray-500 text-sm mb-6">Estos son los últimos cursos que hemos publicado para tí</p>
        <!-- courses -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            @foreach ( $courses as $course )
                <x-course-card :course="$course" />
            @endforeach
        </div>
    </section>

    <!-- Pagination -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-4 pb-8">
        {{ $courses->links() }}
    </div>

</div>
