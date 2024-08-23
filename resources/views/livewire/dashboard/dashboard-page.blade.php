<div>
    <!-- Page Heading -->
    <div class="container mx-auto px-4 pt-6 lg:px-8 lg:pt-8 xl:max-w-7xl">
        <div
            class="flex flex-col gap-2 text-center sm:flex-row sm:items-center sm:justify-between sm:text-start">
            <div class="grow">
                <h1 class="mb-1 text-xl font-bold">Welcome {{ auth()->user()->name }}!</h1>
                <h2 class="text-sm font-medium text-slate-500">
                    Manage your budget easily
                </h2>
            </div>
            <div
                class="flex flex-none items-center justify-center gap-2 rounded px-2 sm:justify-end sm:bg-transparent sm:px-0">
                <x-widgets.buttons.danger label="New Expenses" data-modal-target="expense-create-modal" data-modal-toggle="expense-create-modal"/>
                <x-widgets.buttons.primary label="New Incomes" data-modal-target="income-create-modal" data-modal-toggle="income-create-modal"/>
            </div>
        </div>
        <hr class="mt-6 lg:mt-8" />
    </div>
    <!-- END Page Heading -->

    <!-- Page Section -->
    <div class="container mx-auto p-4 lg:p-8 xl:max-w-7xl space-y-4">
        <div class="flex md:flex md:flex-grow flex-row justify-end space-x-1">
            <x-widgets.forms.input-select wire:model='filter' wire:change="filterSelected">
                <option value="week">This week</option>
                <option value="month">This month</option>
                <option value="year">This year</option>
            </x-widgets.forms.input-select>
        </div>
        <div class="grid grid-cols-1 gap-4 md:grid-cols-3 lg:gap-8">
            <!-- Quick Statistics -->
            <a href="#"
                class="flex flex-col rounded-lg border border-slate-200 bg-white hover:border-slate-300 active:border-violet-300">
                <div class="flex grow items-center justify-between p-5">
                    <dl>
                        <dt class="text-2xl font-bold">{{ Number::currency($totalExpenses ?? 0) }}</dt>
                        <dd class="text-sm font-medium text-slate-500">
                            Total Expenses
                        </dd>
                    </dl>
                    <div
                        class="flex h-12 w-12 items-center justify-center rounded-xl border border-rose-100 bg-rose-50 text-rose-500">
                        <svg class="hi-outline hi-arrow-trending-down inline-block h-6 w-6"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M2.25 6L9 12.75l4.286-4.286a11.948 11.948 0 014.306 6.43l.776 2.898m0 0l3.182-5.511m-3.182 5.51l-5.511-3.181" />
                        </svg>
                    </div>

                </div>
                <div class="border-t border-slate-100 px-5 py-3 text-xs font-medium text-slate-500">
                    <p>{{ $selectedLabel }}</p>
                </div>
            </a>
            <a href="#"
                class="flex flex-col rounded-lg border border-slate-200 bg-white hover:border-slate-300 active:border-emerald-300">
                <div class="flex grow items-center justify-between p-5">
                    <dl>
                        <dt class="text-2xl font-bold">{{ Number::currency($totalIncomes ?? 0) }}</dt>
                        <dd class="text-sm font-medium text-slate-500">Total Incomes</dd>
                    </dl>
                    <div
                        class="flex h-12 w-12 items-center justify-center rounded-xl border border-emerald-100 bg-emerald-50 text-emerald-500">
                        <svg class="hi-outline hi-arrow-trending-up inline-block h-6 w-6"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                        </svg>
                    </div>
                </div>
                <div class="border-t border-slate-100 px-5 py-3 text-xs font-medium text-slate-500">
                    <p>{{ $selectedLabel }}</p>
                </div>
            </a>
            <a href="#"
                class="flex flex-col rounded-lg border border-slate-200 bg-white hover:border-slate-300 active:border-rose-300">
                <div class="flex grow items-center justify-between p-5">
                    <dl>
                        <dt class="text-2xl font-bold">{{ Number::currency($totalIncomes - $totalExpenses ) }}</dt>
                        <dd class="text-sm font-medium text-slate-500">Balance</dd>
                    </dl>
                    <div
                        class="flex h-12 w-12 items-center justify-center rounded-xl border border-violet-100 bg-violet-50 text-violet-500">
                        <svg class="hi-outline hi-currency-dollar inline-block h-6 w-6"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
                <div class="border-t border-slate-100 px-5 py-3 text-xs font-medium text-slate-500">
                    <p>{{ $selectedLabel }}</p>
                </div>
            </a>
            <!-- END Quick Statistics -->

            <!-- Transactions -->

            <!-- END Transactions -->
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 lg:gap-8">
            <div class="flex flex-col rounded-lg border bg-white">
                <div
                    class="flex flex-col items-center justify-between gap-4 border-b border-slate-100 p-5 text-center sm:flex-row sm:text-start">
                    <div>
                        <h2 class="mb-0.5 font-semibold">Expenses</h2>
                        <h3 class="text-sm font-medium text-slate-600">
                            All your recent transactions in one place
                        </h3>
                    </div>
                    <div>
                        <a wire:navigate href="{{ route('expenses.index') }}"
                            class="inline-flex items-center justify-center gap-2 rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm font-semibold leading-5 text-slate-800 hover:border-violet-300 hover:text-violet-800 active:border-slate-200">
                            View transactions
                        </a>
                    </div>
                </div>
                <div class="p-5">
                    <!-- Responsive Table Container -->
                    <div class="min-w-full overflow-x-auto rounded">

                        <x-widgets.table.container>
                            <x-slot:head>
                                <x-widgets.table.heading>Name</x-widgets.table.heading>
                                <x-widgets.table.heading>Amount</x-widgets.table.heading>
                            </x-slot:head>
                            <x-slot:body>
                                @forelse ($expenses as $category)
                                    <x-widgets.table.row>
                                        <x-widgets.table.cell class="text-black">
                                            <i class="ri-{{ $category->icon }} mr-2"></i>{{ $category->name }}
                                        </x-widgets.table.cell>
                                        <x-widgets.table.cell class="font-medium text-rose-500 hover:text-rose-700">
                                            {{ $category->expenses->sum('amount') }}
                                        </x-widgets.table.cell>
                                    </x-widgets.table.row>
                                @empty

                                @endforelse
                            </x-slot:body>
                        </x-widgets.table.container>

                    </div>
                    <!-- END Responsive Table Container -->
                </div>
            </div>

            <div class="flex flex-col rounded-lg border bg-white">
                <div
                    class="flex flex-col items-center justify-between gap-4 border-b border-slate-100 p-5 text-center sm:flex-row sm:text-start">
                    <div>
                        <h2 class="mb-0.5 font-semibold">Incomes</h2>
                        <h3 class="text-sm font-medium text-slate-600">
                            All your recent transactions in one place
                        </h3>
                    </div>
                    <div>
                        <a wire:navigate href="{{ route('incomes.index') }}"
                            class="inline-flex items-center justify-center gap-2 rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm font-semibold leading-5 text-slate-800 hover:border-violet-300 hover:text-violet-800 active:border-slate-200">
                            View transactions
                        </a>
                    </div>
                </div>
                <div class="p-5">
                    <!-- Responsive Table Container -->
                    <div class="min-w-full overflow-x-auto rounded">

                        <x-widgets.table.container>
                            <x-slot:head>
                                <x-widgets.table.heading>Name</x-widgets.table.heading>
                                <x-widgets.table.heading>Amount</x-widgets.table.heading>
                            </x-slot:head>
                            <x-slot:body>
                                @forelse ($incomes as $category)
                                    <x-widgets.table.row>
                                        <x-widgets.table.cell class="text-black">
                                            <i class="ri-{{ $category->icon }} mr-2"></i>{{ $category->name }}
                                        </x-widgets.table.cell>
                                        <x-widgets.table.cell class="font-medium text-violet-500 hover:text-violet-700">
                                            {{ $category->incomes->sum('amount') }}
                                        </x-widgets.table.cell>
                                    </x-widgets.table.row>
                                @empty

                                @endforelse
                            </x-slot:body>
                        </x-widgets.table.container>

                    </div>
                    <!-- END Responsive Table Container -->
                </div>
            </div>
        </div>
    </div>
    <!-- END Page Section -->
</div>

@push('layouts')
    <livewire:expense.expense-create-page />
    <livewire:income.income-create-page />
@endpush
