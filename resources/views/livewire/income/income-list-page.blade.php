<div class="container mx-auto p-4 lg:p-8 xl:max-w-7xl">
    <div class="grid grid-cols-1 gap-4 md:grid-cols-3 lg:gap-8">
        <div class="flex flex-col rounded-lg border bg-white md:col-span-3">
            <div
                class="flex flex-col items-center justify-between gap-4 border-b border-slate-100 p-5 text-center sm:flex-row sm:text-start">
                <div>
                    <h2 class="mb-0.5 font-semibold">Incomes</h2>
                    <h3 class="text-sm font-medium text-slate-600">
                        {{ $incomes->total() }} incomes found!
                    </h3>
                </div>
                <div>
                    <x-widgets.buttons.danger label="Import" icon="arrow-right-down-line" data-modal-target="income-import-modal" data-modal-toggle="income-import-modal"/>
                    <x-widgets.buttons.success label="Export" icon="arrow-right-up-line" wire:click='export'/>
                    <x-widgets.buttons.primary label="New Incomes" data-modal-target="income-create-modal" data-modal-toggle="income-create-modal"/>
                </div>
            </div>
            <div class="p-5">
                <!-- Responsive Table Container -->
                <div class="min-w-full overflow-x-auto rounded">
                    <!-- Alternate Responsive Table -->
                    <x-widgets.table.container>
                        <x-slot:head>
                            <x-widgets.table.heading>Date/Time</x-widgets.table.heading>
                            <x-widgets.table.heading>Amount</x-widgets.table.heading>
                            <x-widgets.table.heading>Type</x-widgets.table.heading>
                            <x-widgets.table.heading>Remark</x-widgets.table.heading>
                            <x-widgets.table.heading></x-widgets.table.heading>
                        </x-slot:head>
                        <x-slot:body>
                            @forelse ($incomes as $income)
                                <x-widgets.table.row>
                                    <x-widgets.table.cell>{{ $income->date }}</x-widgets.table.cell>
                                    <x-widgets.table.cell class="font-medium text-rose-500 hover:text-rose-700">{{ $income->amount }}</x-widgets.table.cell>
                                    <x-widgets.table.cell>
                                        @if($income->category->type == 'Both')
                                            <x-widgets.badge.primary>{{ $income->category->name }}</x-widgets.badge.primary>
                                        @elseif($income->category->type == 'Expense')
                                            <x-widgets.badge.danger>{{ $income->category->name }}</x-widgets.badge.danger>
                                        @else
                                            <x-widgets.badge.success>{{ $income->category->name }}</x-widgets.badge.success>
                                        @endif
                                    </x-widgets.table.cell>
                                    <x-widgets.table.cell>
                                        {{ $income->remark }}
                                    </x-widgets.table.cell>
                                    <x-widgets.table.cell>
                                        
                                    </x-widgets.table.cell>
                                </x-widgets.table.row>
                            @empty
                                
                            @endforelse
                        </x-slot:body>
                    </x-widgets.table.container>
                    <!-- END Alternate Responsive Table -->
                </div>
                <!-- END Responsive Table Container -->
                {{ $incomes->links('livewire::tailwind') }}
            </div>
    </div>
</div>

@push('layouts')
    <livewire:income.income-create-page />
    <livewire:income.income-import-page />
@endpush
