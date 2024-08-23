<div class="container mx-auto p-4 lg:p-8 xl:max-w-7xl space-y-4">
    <div x-init="initFlowbite();">
    <div id="date-range-picker" date-rangepicker class="flex flex-row justify-end items-center">
        <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                </svg>
            </div>
            <input id="datepicker-range-start" name="start" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date start">
        </div>
        <span class="mx-4 text-gray-500">to</span>
        <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                </svg>
            </div>
            <input id="datepicker-range-end" name="end" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date end">
        </div>
    </div>
    </div>

    <div class="grid grid-cols-1 gap-4 md:grid-cols-3 lg:gap-8">
        <div class="flex flex-col rounded-lg border bg-white md:col-span-3">
            <div
                class="flex flex-col items-center justify-between gap-4 border-b border-slate-100 p-5 text-center sm:flex-row sm:text-start">
                <div>
                    <h2 class="mb-0.5 font-semibold">Expenses</h2>
                    <h3 class="text-sm font-medium text-slate-600">
                        {{ $expenses->total() }} expenses found!
                    </h3>
                </div>
                <div>
                    <x-widgets.buttons.danger label="Import" icon="arrow-right-down-line" data-modal-target="expense-import-modal" data-modal-toggle="expense-import-modal"/>
                    <x-widgets.buttons.success label="Export" icon="arrow-right-up-line" wire:click='export'/>
                    <x-widgets.buttons.primary label="New Expenses" icon="add-box-line" data-modal-target="expense-create-modal" data-modal-toggle="expense-create-modal"/>
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
                            @forelse ($expenses as $expense)
                                <x-widgets.table.row>
                                    <x-widgets.table.cell>{{ $expense->date }}</x-widgets.table.cell>
                                    <x-widgets.table.cell class="font-medium text-rose-500 hover:text-rose-700">{{ $expense->amount }}</x-widgets.table.cell>
                                    <x-widgets.table.cell>
                                        @if($expense->category->type == 'Both')
                                            <x-widgets.badge.primary>{{ $expense->category->name }}</x-widgets.badge.primary>
                                        @elseif($expense->category->type == 'Expense')
                                            <x-widgets.badge.danger>{{ $expense->category->name }}</x-widgets.badge.danger>
                                        @else
                                            <x-widgets.badge.success>{{ $expense->category->name }}</x-widgets.badge.success>
                                        @endif
                                    </x-widgets.table.cell>
                                    <x-widgets.table.cell>
                                        {{ $expense->remark }}
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
                {{ $expenses->links('livewire::tailwind') }}
            </div>
    </div>
</div>

@push('layouts')
    <livewire:expense.expense-create-page />
    <livewire:expense.expense-import-page />
@endpush

@push('scripts')
@endpush
