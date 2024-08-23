
<header id="page-header" class="z-1 flex flex-none items-center pt-5">
    <div class="container mx-auto px-4 lg:px-8 xl:max-w-7xl">
        <div
            class="-mx-4 border-y border-slate-200 bg-white px-4 shadow-sm sm:rounded-lg sm:border lg:-mx-6 lg:px-6">
            <div class="flex justify-between py-2.5 lg:py-3.5">
                <!-- Left Section -->
                <div class="flex items-center gap-2 lg:gap-6">
                    <!-- Logo -->
                    <a href="javascript:void(0)"
                        class="group inline-flex items-center gap-1.5 text-lg font-bold tracking-wide text-slate-900 hover:text-slate-600">
                        <svg class="hi-mini hi-banknotes inline-block h-5 w-5 -rotate-45 text-violet-600 transition group-hover:scale-110"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M1 4a1 1 0 011-1h16a1 1 0 011 1v8a1 1 0 01-1 1H2a1 1 0 01-1-1V4zm12 4a3 3 0 11-6 0 3 3 0 016 0zM4 9a1 1 0 100-2 1 1 0 000 2zm13-1a1 1 0 11-2 0 1 1 0 012 0zM1.75 14.5a.75.75 0 000 1.5c4.417 0 8.693.603 12.749 1.73 1.111.309 2.251-.512 2.251-1.696v-.784a.75.75 0 00-1.5 0v.784a.272.272 0 01-.35.25A49.043 49.043 0 001.75 14.5z"
                                clip-rule="evenodd" />
                        </svg>
                        <span>Budget<span class="font-normal">Tracker</span></span>
                    </a>
                    <!-- END Logo -->

                    <!-- Desktop Navigation -->
                    <nav class="hidden items-center gap-1.5 lg:flex">
                        <x-layouts.header-item label="Dashboard" route="{{ route('dashboard') }}" active="dashboard"/>
                        <x-layouts.header-item label="Expenses" route="{{ route('expenses.index') }}" active="expenses.*"/>
                        <x-layouts.header-item label="Incomes" route="{{ route('incomes.index') }}" active="incomes.*"/>
                        <x-layouts.header-item label="Category" route="{{ route('categories.index') }}" active="categories.*"/>
                    </nav>
                    <!-- END Desktop Navigation -->
                </div>
                <!-- END Left Section -->

                <!-- Right Section -->
                <div class="flex items-center gap-2">
                    <!-- User Dropdown -->
                    <div class="relative inline-block">
                        <!-- Dropdown Toggle Button -->
                        <button x-on:click="userDropdownOpen = true" x-bind:aria-expanded="userDropdownOpen"
                            type="button" id="tk-dropdown-layouts-user"
                            class="inline-flex items-center justify-center gap-1 rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm font-semibold leading-5 text-slate-800 hover:border-violet-300 hover:text-violet-800 active:border-slate-200"
                            aria-haspopup="true">
                            <svg class="hi-mini hi-user-circle inline-block h-5 w-5 sm:hidden"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-5.5-2.5a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0zM10 12a5.99 5.99 0 00-4.793 2.39A6.483 6.483 0 0010 16.5a6.483 6.483 0 004.793-2.11A5.99 5.99 0 0010 12z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="hidden sm:inline">{{ auth()->user()->name }}</span>
                            <svg class="hi-mini hi-chevron-down hidden h-5 w-5 opacity-40 sm:inline-block"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <!-- END Dropdown Toggle Button -->

                        <!-- Dropdown -->
                        <div x-cloak x-show="userDropdownOpen"
                            x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                            x-transition:leave="transition ease-in duration-100"
                            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                            x-on:click.outside="userDropdownOpen = false" role="menu"
                            aria-labelledby="tk-dropdown-layouts-user"
                            class="absolute end-0 z-10 mt-2 w-48 rounded-lg shadow-xl ltr:origin-top-right rtl:origin-top-left">
                            <div class="divide-y divide-slate-100 rounded-lg bg-white ring-1 ring-black/5">
                                <div class="space-y-1 p-2.5">
                                    <a role="menuitem" href="javascript:void(0)"
                                        class="group flex items-center justify-between gap-2 rounded-lg px-2.5 py-2 text-sm font-medium text-slate-700 hover:bg-violet-50 hover:text-violet-800">
                                        <svg class="hi-mini hi-user-circle inline-block h-5 w-5 flex-none opacity-25 group-hover:opacity-50"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-5.5-2.5a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0zM10 12a5.99 5.99 0 00-4.793 2.39A6.483 6.483 0 0010 16.5a6.483 6.483 0 004.793-2.11A5.99 5.99 0 0010 12z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span class="grow">Account</span>
                                    </a>
                                    <a role="menuitem" href="javascript:void(0)"
                                        class="group flex items-center justify-between gap-2 rounded-lg px-2.5 py-2 text-sm font-medium text-slate-700 hover:bg-violet-50 hover:text-violet-800">
                                        <svg class="hi-mini hi-cog-6-tooth inline-block h-5 w-5 flex-none opacity-25 group-hover:opacity-50"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M7.84 1.804A1 1 0 018.82 1h2.36a1 1 0 01.98.804l.331 1.652a6.993 6.993 0 011.929 1.115l1.598-.54a1 1 0 011.186.447l1.18 2.044a1 1 0 01-.205 1.251l-1.267 1.113a7.047 7.047 0 010 2.228l1.267 1.113a1 1 0 01.206 1.25l-1.18 2.045a1 1 0 01-1.187.447l-1.598-.54a6.993 6.993 0 01-1.929 1.115l-.33 1.652a1 1 0 01-.98.804H8.82a1 1 0 01-.98-.804l-.331-1.652a6.993 6.993 0 01-1.929-1.115l-1.598.54a1 1 0 01-1.186-.447l-1.18-2.044a1 1 0 01.205-1.251l1.267-1.114a7.05 7.05 0 010-2.227L1.821 7.773a1 1 0 01-.206-1.25l1.18-2.045a1 1 0 011.187-.447l1.598.54A6.993 6.993 0 017.51 3.456l.33-1.652zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span class="grow">Settings</span>
                                    </a>
                                </div>
                                <div class="space-y-1 p-2.5">
                                    <form action="{{ route('logout')}}" method="post">
                                        @csrf
                                        <button type="submit" role="menuitem"
                                            class="group flex w-full items-center justify-between gap-2 rounded-lg px-2.5 py-2 text-start text-sm font-medium text-slate-700 hover:bg-violet-50 hover:text-violet-800">
                                            <svg class="hi-mini hi-lock-closed inline-block h-5 w-5 flex-none opacity-25 group-hover:opacity-50"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span class="grow">Sign out</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- END Dropdown -->
                    </div>
                    <!-- END User Dropdown -->
                    <livewire:megaphone ></livewire:megaphone>
                    <!-- Alerts -->
                    <a href="javascript:void(0)"
                        class="inline-flex items-center justify-center gap-2 rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm font-semibold leading-5 text-slate-800 hover:border-violet-300 hover:text-violet-800 active:border-slate-200">
                        <svg class="hi-outline hi-bell-alert inline-block h-5 w-5"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0M3.124 7.5A8.969 8.969 0 015.292 3m13.416 0a8.969 8.969 0 012.168 4.5" />
                        </svg>
                    </a>
                    <!-- END Alerts -->

                    <!-- Toggle Mobile Navigation -->
                    <div class="lg:hidden">
                        <button x-on:click="mobileNavOpen = !mobileNavOpen" type="button"
                            class="inline-flex items-center justify-center gap-2 rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm font-semibold leading-5 text-slate-800 hover:border-violet-300 hover:text-violet-800 active:border-slate-200">
                            <svg fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg"
                                class="hi-solid hi-menu inline-block h-5 w-5">
                                <path fill-rule="evenodd"
                                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <!-- END Toggle Mobile Navigation -->
                </div>
                <!-- END Right Section -->
            </div>

            <!-- Mobile Navigation -->
            <div x-cloak x-show="mobileNavOpen" class="lg:hidden">
                <nav class="flex flex-col gap-2 border-t border-slate-200 py-4">
                    <a href="javascript:void(0)"
                        class="group flex items-center gap-2 rounded-lg border border-violet-50 bg-violet-50 px-2.5 py-1.5 text-sm font-semibold text-violet-600">
                        <span>Dashboard</span>
                    </a>
                    <a href="javascript:void(0)"
                        class="group flex items-center gap-2 rounded-lg px-2.5 py-1.5 text-sm font-medium text-slate-800 hover:bg-violet-50 hover:text-violet-600 active:border-violet-100">
                        <span>Accounts</span>
                    </a>
                    <a href="javascript:void(0)"
                        class="group flex items-center gap-2 rounded-lg px-2.5 py-1.5 text-sm font-medium text-slate-800 hover:bg-violet-50 hover:text-violet-600 active:border-violet-100">
                        <span>Cards</span>
                    </a>
                    <a href="javascript:void(0)"
                        class="group flex items-center gap-2 rounded-lg px-2.5 py-1.5 text-sm font-medium text-slate-800 hover:bg-violet-50 hover:text-violet-600 active:border-violet-100">
                        <span>Profile</span>
                    </a>
                </nav>
            </div>
            <!-- END Mobile Navigation -->
        </div>
    </div>
</header>
