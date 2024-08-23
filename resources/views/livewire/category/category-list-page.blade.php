<div class="container mx-auto p-4 lg:p-8 xl:max-w-7xl">
    <div class="grid grid-cols-1 gap-4 md:grid-cols-3 lg:gap-8">
        <div class="flex flex-col rounded-lg border bg-white md:col-span-3">
            <div
                class="flex flex-col items-center justify-between gap-4 border-b border-slate-100 p-5 text-center sm:flex-row sm:text-start">
                <div>
                    <h2 class="mb-0.5 font-semibold">Categories</h2>
                    <h3 class="text-sm font-medium text-slate-600">
                        {{ $categories->total() }} categories found!
                    </h3>
                </div>
                <div>
                    <x-widgets.buttons.primary label="Create category" route=""/>
                </div>
            </div>
            <div class="p-5">
                <!-- Responsive Table Container -->
                <div class="min-w-full overflow-x-auto rounded">
                    <!-- Alternate Responsive Table -->
                    <x-widgets.table.container>
                        <x-slot:head>
                            <x-widgets.table.heading>Icon</x-widgets.table.heading>
                            <x-widgets.table.heading>Name</x-widgets.table.heading>
                            <x-widgets.table.heading>Type</x-widgets.table.heading>
                        </x-slot:head>
                        <x-slot:body>
                            @forelse ($categories as $category)
                                <x-widgets.table.row>
                                    <x-widgets.table.cell> <i class="ri-{{ $category->icon }}"></i> </x-widgets.table.cell>
                                    <x-widgets.table.cell>{{ $category->name }}</x-widgets.table.cell>
                                    <x-widgets.table.cell>
                                        @if($category->type == 'Both')
                                            <x-widgets.badge.primary>{{ $category->type }}</x-widgets.badge.primary>
                                        @elseif($category->type == 'Expense')
                                            <x-widgets.badge.danger>{{ $category->type }}</x-widgets.badge.danger>
                                        @else
                                            <x-widgets.badge.success>{{ $category->type }}</x-widgets.badge.success>
                                        @endif
                                    </x-widgets.table.cell>
                                </x-widgets.table.row>
                            @empty

                            @endforelse
                        </x-slot:body>
                    </x-widgets.table.container>
                    <!-- END Alternate Responsive Table -->
                </div>
                <!-- END Responsive Table Container -->
                {{ $categories->links('livewire::tailwind') }}
            </div>


    </div>

</div>
