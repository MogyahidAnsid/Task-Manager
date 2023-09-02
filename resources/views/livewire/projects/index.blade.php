<div x-data="Project" class="flex items-start">

    <div class="flex-1">
        <div class="text-gray-900 py-6 flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-extrabold tracking-normal">Projects</h1>
            </div>
    
            <x-primary-button @click="openProjectModal()">
                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.1" d="M6 12h6m6 0h-6m0 0V6m0 6v6"/>
                </svg>
                <span class="pr-1.5 pl-1 font-medium">New Project</span>
            </x-primary-button>

        </div>
    
        <!-- Tabs -->
        <div class="flex items-center justify-between  border-b">
            <div class="flex items-center space-x-7">
                <button class="text-sm pb-3 border-b-2 border-orange-500">All Projects ({{ $projects->count() }})</button>
                <button class="text-gray-500 text-sm pb-3">Completed</button>
                <button class="text-gray-500 text-sm pb-3">Archived</button>
                <button class="text-gray-500 text-sm pb-3">Closed</button>
            </div>
            <div class="flex items-center space-x-5">
                <button @click="toggleFilterDropDown()" class="text-gray-500 relative hover:text-orange-500 text-sm font-medium pb-3 flex items-center space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75"/>
                    </svg>
                    <span>Filters</span>

                    <div x-show="filterDropdown" 
                        @click.away="filterDropdown=false"
                        x-transition:enter="ease-out duration-200"
                        x-transition:enter-start="-translate-y-2"
                        x-transition:enter-end="translate-y-0"
                        class="absolute top-0 z-50 w-56 mt-5 -translate-x-1/2 left-1/2"
                        x-cloak>
                        <div class="p-1 mt-1 bg-white border rounded-md shadow-md border-neutral-200/70 text-neutral-700">
                            <a href="#_" class="relative flex cursor-default select-none hover:bg-neutral-100 items-center rounded px-2 py-1.5 text-sm outline-none transition-colors data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-2"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                <span>Profile</span>
                                <span class="ml-auto text-xs tracking-widest opacity-60">⇧⌘P</span>
                            </a>
                            <a href="#_" class="relative flex cursor-default select-none hover:bg-neutral-100 items-center rounded px-2 py-1.5 text-sm outline-none transition-colors data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-2"><rect width="20" height="14" x="2" y="5" rx="2"></rect><line x1="2" x2="22" y1="10" y2="10"></line></svg>
                                <span>Billing</span><span class="ml-auto text-xs tracking-widest opacity-60">⌘B</span>
                            </a>
                            <a href="#_" class="relative flex cursor-default select-none hover:bg-neutral-100 items-center rounded px-2 py-1.5 text-sm outline-none transition-colors data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-2"><path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                <span>Settings</span>
                                <span class="ml-auto text-xs tracking-widest opacity-60">⌘S</span>
                            </a>
                            <a href="#_" class="relative flex cursor-default select-none hover:bg-neutral-100 items-center rounded px-2 py-1.5 text-sm outline-none transition-colors data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-2"><rect width="20" height="16" x="2" y="4" rx="2" ry="2"></rect><path d="M6 8h.001"></path><path d="M10 8h.001"></path><path d="M14 8h.001"></path><path d="M18 8h.001"></path><path d="M8 12h.001"></path><path d="M12 12h.001"></path><path d="M16 12h.001"></path><path d="M7 16h10"></path></svg>
                                <span>Keyboard shortcuts</span>
                                <span class="ml-auto text-xs tracking-widest opacity-60">⌘K</span>
                            </a>
                            <div class="h-px my-1 -mx-1 bg-neutral-200"></div>
                            <div class="relative flex cursor-default select-none hover:bg-neutral-100 items-center rounded px-2 py-1.5 text-sm outline-none transition-colors data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-2"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                <span>Team</span>
                            </div>
                            <div class="relative group">
                                <div class="relative flex cursor-default select-none hover:bg-neutral-100 items-center rounded px-2 py-1.5 text-sm outline-none transition-colors data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-2"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><line x1="19" x2="19" y1="8" y2="14"></line><line x1="22" x2="16" y1="11" y2="11"></line></svg>
                                    <span>Invite users</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 ml-auto"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                </div>
                                <div data-submenu class="absolute top-0 right-0 invisible mr-1 duration-200 ease-out translate-x-full opacity-0 group-hover:mr-0 group-hover:visible group-hover:opacity-100">
                                    <div class="z-50 min-w-[8rem] overflow-hidden rounded-md border bg-white p-1 shadow-md animate-in slide-in-from-left-1 w-40">
                                        <div @click="filterDropdown=false" class="relative flex cursor-default select-none items-center rounded px-2 py-1.5 hover:bg-neutral-100 text-sm outline-none data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                                            <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg>
                                            <span>Email</span>
                                        </div>
                                        <div @click="filterDropdown=false" class="relative flex cursor-default select-none items-center rounded px-2 py-1.5 hover:bg-neutral-100 text-sm outline-none data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                                            <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                                            <span>Message</span>
                                        </div>
                                        <div class="h-px my-1 -mx-1 bg-neutral-200"></div>
                                        <div @click="filterDropdown=false" class="relative flex cursor-default select-none items-center rounded px-2 py-1.5 hover:bg-neutral-100 text-sm outline-none data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                                            <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" x2="12" y1="8" y2="16"></line><line x1="8" x2="16" y1="12" y2="12"></line></svg>
                                            <span>More...</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="relative flex cursor-default select-none hover:bg-neutral-100 items-center rounded px-2 py-1.5 text-sm outline-none transition-colors data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-2"><line x1="12" x2="12" y1="5" y2="19"></line><line x1="5" x2="19" y1="12" y2="12"></line></svg>
                                <span>New Team</span>
                                <span class="ml-auto text-xs tracking-widest opacity-60">⌘+T</span>
                            </div>
                            <div class="h-px my-1 -mx-1 bg-neutral-200"></div>
                            <a href="#_" class="relative text-center flex cursor-default select-none hover:bg-neutral-100 items-center rounded px-2 py-1.5 text-sm outline-none transition-colors focus:bg-accent focus:text-accent-foreground data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                                <span>Clear Filters</span>
                            </a>
                        </div>
                    </div>
                </button>

                <button @click="toggleExportDropDown()" class="text-gray-500 relative hover:text-orange-500 text-sm font-medium pb-3 flex items-center space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                            <path d="M4 6v6s0 3 7 3s7-3 7-3V6"/>
                            <path d="M11 3c7 0 7 3 7 3s0 3-7 3s-7-3-7-3s0-3 7-3Zm0 18c-7 0-7-3-7-3v-6m15 10v-6m0 0l3 3m-3-3l-3 3"/>
                        </g>
                    </svg>
                    <span>Export</span>

                    <div x-show="exportDropdown" 
                        @click.away="exportDropdown=false"
                        x-transition:enter="ease-out duration-200"
                        x-transition:enter-start="-translate-y-2"
                        x-transition:enter-end="translate-y-0"
                        class="absolute top-0 z-50 w-56 mt-5 -translate-x-1/2 left-1/2"
                        x-cloak>
                        <div class="p-1 mt-1 bg-white border rounded-md shadow-md border-neutral-200/70 text-neutral-700">
                            <a href="#_" class="relative flex cursor-default select-none hover:bg-neutral-100 items-center rounded px-2 py-1.5 text-sm outline-none transition-colors data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 256 256">
                                    <g fill="currentColor"><path d="M208 88h-56V32Z" opacity=".2"/>
                                        <path d="M48 180c0 11 7.18 20 16 20a14.24 14.24 0 0 0 10.22-4.66a8 8 0 0 1 11.56 11.06A30.06 30.06 0 0 1 64 216c-17.65 0-32-16.15-32-36s14.35-36 32-36a30.06 30.06 0 0 1 21.78 9.6a8 8 0 0 1-11.56 11.06A14.24 14.24 0 0 0 64 160c-8.82 0-16 9-16 20Zm79.6-8.69c-4-1.16-8.14-2.35-10.45-3.84c-1.25-.81-1.23-1-1.12-1.9a4.57 4.57 0 0 1 2-3.67c4.6-3.12 15.34-1.73 19.83-.56a8 8 0 0 0 4.14-15.48c-2.12-.55-21-5.22-32.84 2.76a20.58 20.58 0 0 0-9 14.95c-2 15.88 13.65 20.41 23 23.11c12.06 3.49 13.12 4.92 12.78 7.59c-.31 2.41-1.26 3.34-2.14 3.93c-4.6 3.06-15.17 1.56-19.55.36a8 8 0 0 0-4.31 15.44a61.34 61.34 0 0 0 15.19 2c5.82 0 12.3-1 17.49-4.46a20.82 20.82 0 0 0 9.19-15.23c2.19-17.31-14.32-22.14-24.21-25Zm83.09-26.84a8 8 0 0 0-10.23 4.84L188 184.21l-12.47-34.9a8 8 0 0 0-15.07 5.38l20 56a8 8 0 0 0 15.07 0l20-56a8 8 0 0 0-4.84-10.22ZM216 88v24a8 8 0 0 1-16 0V96h-48a8 8 0 0 1-8-8V40H56v72a8 8 0 0 1-16 0V40a16 16 0 0 1 16-16h96a8 8 0 0 1 5.66 2.34l56 56A8 8 0 0 1 216 88Zm-27.31-8L160 51.31V80Z"/>
                                    </g>
                                </svg>
                                <span class="ml-1">Export to CSV</span>
                                <span class="ml-auto text-xs tracking-widest opacity-60">⇧⌘P</span>
                            </a>
                            <a href="#_" class="relative flex cursor-default select-none hover:bg-neutral-100 items-center rounded px-2 py-1.5 text-sm outline-none transition-colors data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                                {{-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-2"><rect width="20" height="14" x="2" y="5" rx="2"></rect><line x1="2" x2="22" y1="10" y2="10"></line></svg> --}}
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 256 256">
                                    <path fill="currentColor" d="M200 24H72a16 16 0 0 0-16 16v24H40a16 16 0 0 0-16 16v96a16 16 0 0 0 16 16h16v24a16 16 0 0 0 16 16h128a16 16 0 0 0 16-16V40a16 16 0 0 0-16-16Zm-40 80h40v48h-40Zm40-16h-40v-8a16 16 0 0 0-16-16V40h56ZM72 40h56v24H72ZM40 80h104v96H40Zm32 112h56v24H72Zm72 24v-24a16 16 0 0 0 16-16v-8h40v48Zm-78.15-69.12L81.59 128l-15.74-18.88a8 8 0 0 1 12.3-10.24L92 115.5l13.85-16.62a8 8 0 1 1 12.3 10.24L102.41 128l15.74 18.88a8 8 0 0 1-12.3 10.24L92 140.5l-13.85 16.62a8 8 0 0 1-12.3-10.24Z"/>
                                </svg>
                                <span class="ml-1">Export to Excel</span><span class="ml-auto text-xs tracking-widest opacity-60">⌘B</span>
                            </a>
                        </div>
                    </div>
                </button>
                <div class="flex items-center space-x-2">
                    <button @click="toggleDisplayRow()" 
                        class="text-gray-500 hover:text-orange-500 text-sm font-medium pb-3 flex items-center space-x-1"
                        :class="{ 'text-orange-500' : isDisplayRow }">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 0 1 0 3.75H5.625a1.875 1.875 0 0 1 0-3.75Z"/>
                        </svg>
                    </button>
                    <button @click="toggleDisplayGrid()" 
                        class="text-gray-500 hover:text-orange-500 text-sm font-medium pb-3 flex items-center space-x-1"
                        :class="{ 'text-orange-500' : !isDisplayRow }">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 4.5v15m6-15v15m-10.875 0h15.75c.621 0 1.125-.504 1.125-1.125V5.625c0-.621-.504-1.125-1.125-1.125H4.125C3.504 4.5 3 5.004 3 5.625v12.75c0 .621.504 1.125 1.125 1.125Z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Project Content -->
        <div class="w-full mt-3" :class="{ 'grid grid-cols-3 gap-3' : !isDisplayRow}">
            @forelse ($projects as $project)
                <!-- Row Display -->
                <div x-data="{ moreOptionsDropdown }" x-show="isDisplayRow" class="my-2">
                    <div class="border p-3 relative hover:shadow-md hover:shadow-gray-200 transition-shadow group">                        
                        <div class="flex items-center justify-between">
                            <button class="flex items-center space-x-1">
                                <span class="font-medium">{{ $project->name }}</span>
                            </button>

                            <div class="flex items-center space-x-2 text-xs font-medium">
                                <button class="flex items-center space-x-1 bg-gray-50 p-1.5 rounded-md text-gray-800 border font-semibold">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6.906 4.537A.6.6 0 0 0 6 5.053v13.894a.6.6 0 0 0 .906.516l11.723-6.947a.6.6 0 0 0 0-1.032L6.906 4.537Z"/>
                                    </svg>
                                    <span class="font-medium">107:57:23</span>
                                </button>
                                <button class="border p-1.5 rounded-md flex items-center space-x-1 hover:bg-gray-50 transition-colors {{ $project->priority['color'] }}">
                                    <span>{{ $project->priority['label'] }}</span>
                                </button>
                                <button @click="toggleMoreOptions()" class="border p-1.5 rounded-md relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                                        <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12.5a.5.5 0 1 0 0-1a.5.5 0 0 0 0 1Zm-8 0a.5.5 0 1 0 0-1a.5.5 0 0 0 0 1Zm-8 0a.5.5 0 1 0 0-1a.5.5 0 0 0 0 1Z"/>
                                    </svg>

                                    <div x-show="moreOptionsDropdown" 
                                        @click.away="moreOptionsDropdown=false"
                                        x-transition:enter="ease-out duration-200"
                                        x-transition:enter-start="-translate-y-2"
                                        x-transition:enter-end="translate-y-0"
                                        class="absolute top-0 z-50 -right-5 w-56 mt-5"
                                        x-cloak>
                                        <div class="p-1 mt-1 bg-white border rounded-md shadow-md border-neutral-200/70 text-neutral-700">
                                            <a href="#_" class="relative flex cursor-default select-none hover:bg-neutral-100 items-center rounded px-2 py-1.5 text-sm outline-none transition-colors data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-2"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                                <span>Profile</span>
                                                <span class="ml-auto text-xs tracking-widest opacity-60">⇧⌘P</span>
                                            </a>
                                            <a href="#_" class="relative flex cursor-default select-none hover:bg-neutral-100 items-center rounded px-2 py-1.5 text-sm outline-none transition-colors data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-2"><rect width="20" height="14" x="2" y="5" rx="2"></rect><line x1="2" x2="22" y1="10" y2="10"></line></svg>
                                                <span>Billing</span><span class="ml-auto text-xs tracking-widest opacity-60">⌘B</span>
                                            </a>
                                            <a href="#_" class="relative flex cursor-default select-none hover:bg-neutral-100 items-center rounded px-2 py-1.5 text-sm outline-none transition-colors data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-2"><path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                                <span>Settings</span>
                                                <span class="ml-auto text-xs tracking-widest opacity-60">⌘S</span>
                                            </a>
                                            <a href="#_" class="relative flex cursor-default select-none hover:bg-neutral-100 items-center rounded px-2 py-1.5 text-sm outline-none transition-colors data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-2"><rect width="20" height="16" x="2" y="4" rx="2" ry="2"></rect><path d="M6 8h.001"></path><path d="M10 8h.001"></path><path d="M14 8h.001"></path><path d="M18 8h.001"></path><path d="M8 12h.001"></path><path d="M12 12h.001"></path><path d="M16 12h.001"></path><path d="M7 16h10"></path></svg>
                                                <span>Keyboard shortcuts</span>
                                                <span class="ml-auto text-xs tracking-widest opacity-60">⌘K</span>
                                            </a>
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div>

                        <div>
                            <p class="text-sm text-gray-500 py-3">{{ $project->description }}</p>
                            
                            <div class="flex items-center justify-between text-xss">
                                <div class="flex items-center space-x-3">
                                    <!-- Stack Avatar -->
                                    <div class="relative -space-x-3 flex">
                                        <button class="h-7 w-7 hover:z-50 hover:scale-125 rounded-full relative border-2 border-transparent hover:border-2 hover:border-orange-500">
                                            <img :src="`https://api.multiavatar.com/trlsas{{ $project->id }}.svg`" class="w-full h-full inset-0 absolute" alt="">
                                        </button>
                                        <button class="h-7 w-7 hover:z-50 hover:scale-125 rounded-full relative border-2 border-transparent hover:border-2 hover:border-orange-500">
                                            <img :src="`https://api.multiavatar.com/fdsfds{{ $project->id }}.svg`" class="w-full h-full inset-0 absolute" alt="">
                                        </button>
                                        <button class="h-7 w-7 hover:z-50 hover:scale-125 rounded-full relative border-2 border-transparent hover:border-2 hover:border-orange-500">
                                            <img src="https://api.multiavatar.com/2oekjoid2{{ $project->id }}.svg" class="w-full h-full inset-0 absolute" alt="">
                                        </button>
                                        <button class="h-7 w-7 hover:z-50 rounded-full relative border-transparent hover:bg-orange-200 bg-orange-50">
                                            <div class="flex items-center justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24">
                                                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.1" d="M6 12h6m6 0h-6m0 0V6m0 6v6"/>
                                                </svg>
                                            </div>
                                        </button>
                                    </div>
                                    
                                    <div class="flex items-center space-x-1">
                                        <div class="h-1.5 bg-orange-50 rounded-full w-24 overflow-hidden relative">
                                            <span :style="'width:' + 25 + '%'" class="absolute w-24 h-full duration-300 bg-orange-500 ease"></span>
                                        </div>
                                        <span class="text-gray-400">25% Complete</span>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <button class="flex items-center space-x-1 hover:bg-orange-50 p-1 rounded-md text-orange-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                                                <path d="M18 20a2 2 0 1 0 0-4a2 2 0 0 0 0 4ZM6 21V7"/>
                                                <path d="M6 7v2c0 3.5 2.5 9 8.5 9H16M6 7a2 2 0 1 0 0-4a2 2 0 0 0 0 4Z"/>
                                            </g>
                                        </svg>
                                        <span>Create subtask</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <button class="absolute hidden group-hover:block -z-0 bottom-2 w-full text-center text-sm text-gray-300 hover:text-orange-500 transition-colors">Show more</button>
                    </div>
                </div>

                <!-- Grid Display -->
                <div x-data="{ moreOptionsDropdown }" x-show="!isDisplayRow">
                    <div class="border p-3 transition-colors relative group">                        
                        <div class="flex items-center justify-between">
                            <h1 class="font-medium">Lorem ipsum dolor sit amet.</h1>

                            <div class="flex items-center space-x-2 text-xs font-medium">
                                <button @click="toggleMoreOptions()" class="border p-1 rounded-md relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                                        <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12.5a.5.5 0 1 0 0-1a.5.5 0 0 0 0 1Zm-8 0a.5.5 0 1 0 0-1a.5.5 0 0 0 0 1Zm-8 0a.5.5 0 1 0 0-1a.5.5 0 0 0 0 1Z"/>
                                    </svg>

                                    <div x-show="moreOptionsDropdown" 
                                        @click.away="moreOptionsDropdown=false"
                                        x-transition:enter="ease-out duration-200"
                                        x-transition:enter-start="-translate-y-2"
                                        x-transition:enter-end="translate-y-0"
                                        class="absolute top-0 z-50 -right-5 w-56 mt-5"
                                        x-cloak>
                                        <div class="p-1 mt-1 bg-white border rounded-md shadow-md border-neutral-200/70 text-neutral-700">
                                            <a href="#_" class="relative flex cursor-default select-none hover:bg-neutral-100 items-center rounded px-2 py-1.5 text-sm outline-none transition-colors data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-2"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                                <span>Profile</span>
                                                <span class="ml-auto text-xs tracking-widest opacity-60">⇧⌘P</span>
                                            </a>
                                            <a href="#_" class="relative flex cursor-default select-none hover:bg-neutral-100 items-center rounded px-2 py-1.5 text-sm outline-none transition-colors data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-2"><rect width="20" height="14" x="2" y="5" rx="2"></rect><line x1="2" x2="22" y1="10" y2="10"></line></svg>
                                                <span>Billing</span><span class="ml-auto text-xs tracking-widest opacity-60">⌘B</span>
                                            </a>
                                            <a href="#_" class="relative flex cursor-default select-none hover:bg-neutral-100 items-center rounded px-2 py-1.5 text-sm outline-none transition-colors data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-2"><path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                                <span>Settings</span>
                                                <span class="ml-auto text-xs tracking-widest opacity-60">⌘S</span>
                                            </a>
                                            <a href="#_" class="relative flex cursor-default select-none hover:bg-neutral-100 items-center rounded px-2 py-1.5 text-sm outline-none transition-colors data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-2"><rect width="20" height="16" x="2" y="4" rx="2" ry="2"></rect><path d="M6 8h.001"></path><path d="M10 8h.001"></path><path d="M14 8h.001"></path><path d="M18 8h.001"></path><path d="M8 12h.001"></path><path d="M12 12h.001"></path><path d="M16 12h.001"></path><path d="M7 16h10"></path></svg>
                                                <span>Keyboard shortcuts</span>
                                                <span class="ml-auto text-xs tracking-widest opacity-60">⌘K</span>
                                            </a>
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div>

                        <div>
                            {{-- <p class="text-sm text-gray-500 py-3">{{ $project->description }}</p> --}}
                            <p class="text-sm text-gray-500 py-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis, ex!</p>

                            <div class="flex items-center space-x-2 text-xs font-medium justify-between">
                                <!-- Stack Avatar -->
                                <div class="relative -space-x-3 flex">
                                    <button class="h-7 w-7 hover:z-50 hover:scale-125 rounded-full relative border-2 border-transparent hover:border-2 hover:border-orange-500">
                                        <img :src="`https://api.multiavatar.com/dfsl2oe2{{ $project->id }}.svg`" class="w-full h-full inset-0 absolute" alt="">
                                    </button>
                                    <button class="h-7 w-7 hover:z-50 hover:scale-125 rounded-full relative border-2 border-transparent hover:border-2 hover:border-orange-500">
                                        <img :src="`https://api.multiavatar.com/dgdfqop{{ $project->id }}.svg`" class="w-full h-full inset-0 absolute" alt="">
                                    </button>
                                    <button class="h-7 w-7 hover:z-50 hover:scale-125 rounded-full relative border-2 border-transparent hover:border-2 hover:border-orange-500">
                                        <img :src="`https://api.multiavatar.com/gdfecxq{{ $project->id }}.svg`" class="w-full h-full inset-0 absolute" alt="">
                                    </button>
                                    <button class="h-7 w-7 hover:z-50 rounded-full relative border-transparent hover:bg-orange-200 bg-orange-50">
                                        <div class="flex items-center justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.1" d="M6 12h6m6 0h-6m0 0V6m0 6v6"/>
                                            </svg>
                                        </div>
                                    </button>
                                </div>

                                <div class="flex items-center space-x-2 text-xs font-medium ">
                                    <button class="flex items-center space-x-1 bg-gray-50 p-1 rounded-md text-gray-800 border font-semibold">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6.906 4.537A.6.6 0 0 0 6 5.053v13.894a.6.6 0 0 0 .906.516l11.723-6.947a.6.6 0 0 0 0-1.032L6.906 4.537Z"/>
                                        </svg>
                                        <span class="font-medium">107:57:23</span>
                                    </button>
                                    <button class="border p-1 rounded-md flex items-center space-x-1 hover:bg-gray-50 transition-colors {{ $project->priority['color'] }}">
                                        <span>{{ $project->priority['label'] }}</span>
                                    </button>
                                </div>
                            </div>
                            
                            <div class="flex items-center justify-between text-xss mt-2">
                                <div class="flex items-center space-x-3">
                                    <div class="flex items-center space-x-1">
                                        <div class="h-1.5 bg-orange-50 rounded-full w-24 overflow-hidden relative">
                                            <span :style="'width:' + 25 + '%'" class="absolute w-24 h-full duration-300 bg-orange-500 ease"></span>
                                        </div>
                                        <span class="text-gray-400">25% Complete</span>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <button class="flex items-center space-x-1 hover:bg-orange-50 p-1 rounded-md text-orange-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                                                <path d="M18 20a2 2 0 1 0 0-4a2 2 0 0 0 0 4ZM6 21V7"/>
                                                <path d="M6 7v2c0 3.5 2.5 9 8.5 9H16M6 7a2 2 0 1 0 0-4a2 2 0 0 0 0 4Z"/>
                                            </g>
                                        </svg>
                                        <span>Create subtask</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        {{-- <button class="absolute hidden group-hover:block -z-0 bottom-2 w-full text-center text-sm text-gray-300 hover:text-orange-500 transition-colors">Show more</button> --}}
                    </div>
                </div>
            @empty
                <div class="text-center flex flex-col items-center py-20">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18 21a2 2 0 1 0 0-4a2 2 0 0 0 0 4ZM6 21a2 2 0 1 0 0-4a2 2 0 0 0 0 4Zm0-10v6m12 0V7s0-2-2-2h-4M4 7.243L6.121 5.12m0 0L8.243 3M6.12 5.121L4 3m2.121 2.121l2.122 2.122"/>
                    </svg>
                    <h1 class="font-medium text-lg mt-3">There are no project created at the moment!</h1>
                    <p class="text-gray-600 text-sm">Click <button @click="openProjectModal()" class="font-semibold text-orange-500 hover:underline">Create First Project</button> or just click the 'New Project' button above.</p>
                </div>
            @endforelse
        </div>
    </div>

    <!-- Right Sidebar -->
    <div class="bg-white w-[30rem] ml-7 border-l -mr-14 pb-7 h-screen">
        <div class="p-7">
            <h1 class="font-semibold tracking-tight text-lg">Design System</h1>

            <div class="text-gray-400 mt-3">
                <div class="space-y-4">
                    <div class="text-sm flex font-medium items-center space-x-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2">
                                <path d="M1 20v-1a7 7 0 0 1 7-7v0a7 7 0 0 1 7 7v1"/>
                                <path d="M13 14v0a5 5 0 0 1 5-5v0a5 5 0 0 1 5 5v.5"/>
                                <path stroke-linejoin="round" d="M8 12a4 4 0 1 0 0-8a4 4 0 0 0 0 8Zm10-3a3 3 0 1 0 0-6a3 3 0 0 0 0 6Z"/>
                            </g>
                        </svg>
                        <span>Assignee</span>
                    </div>
                    
                    <div class="text-sm flex font-medium items-center space-x-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-width="2" d="M3 17.4V6.6a.6.6 0 0 1 .6-.6h13.079c.2 0 .388.1.5.267l3.6 5.4a.6.6 0 0 1 0 .666l-3.6 5.4a.6.6 0 0 1-.5.267H3.6a.6.6 0 0 1-.6-.6Z"/>
                        </svg>
                        <span>Tags</span>
                    </div>

                    <div class="text-sm flex font-medium items-center space-x-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m5 15l.95-10.454A.6.6 0 0 1 6.548 4h13.795a.6.6 0 0 1 .598.654l-.891 9.8a.6.6 0 0 1-.598.546H5Zm0 0l-.6 6"/>
                        </svg>
                        <span>Priority</span>
                    </div>

                    <div class="text-sm flex font-medium items-center space-x-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12h3l3-9l6 18l3-9h3"/>
                        </svg>
                        <span>Status</span>
                    </div>

                    <div class="text-sm flex font-medium items-center space-x-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 4V2m0 2v2m0-2h-4.5M3 10v9a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-9H3Zm0 0V6a2 2 0 0 1 2-2h2m0-2v4m14 4V6a2 2 0 0 0-2-2h-.5"/>
                        </svg>
                        <span>Date</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tab -->
        <div class="border-b">
            <div class="text-sm px-7">
                <button class="px-2 py-1.5 rounded-tl-md rounded-tr-md font-medium border bg-white">Comment</button>
                <button class="px-2 py-1.5 rounded-tl-md rounded-tr-md font-medium border text-gray-600 hover:bg-gray-100 bg-gray-50">Timeline</button>
            </div>
        </div>
    </div>

    <div x-show="projectModal">
        <livewire:projects.form-modal />
    </div>
</div>

@push('alpine_script')
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('Project', () => ({
                projectModal: false,
                isDisplayRow: false,
                filterDropdown: false,
                exportDropdown: false,
                moreOptionsDropdown: false,

                openProjectModal() {
                    this.projectModal = true;
                },

                toggleDisplayRow() {
                    this.isDisplayRow = true;
                },

                toggleDisplayGrid(){
                    this.isDisplayRow = false;
                },

                toggleFilterDropDown() {
                    this.filterDropdown = !this.filterDropdown;
                },

                toggleExportDropDown() {
                    this.exportDropdown = !this.exportDropdown;
                },

                toggleMoreOptions(){
                    this.moreOptionsDropdown = !this.moreOptionsDropdown;
                }
            }));
        });
    </script>
@endpush