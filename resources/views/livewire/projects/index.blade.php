<div x-data="Project" class="flex items-start">

    <div class="flex-1">
        <div class="text-gray-900 py-6 flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-extrabold tracking-normal">Projects</h1>
            </div>
    
            <button @click="openProjectModal()" class="inline-flex items-center justify-center h-10 px-3 py-2 text-sm font-medium text-white transition-colors border border-transparent rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2 bg-orange-600 hover:bg-orange-500">
                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.1" d="M6 12h6m6 0h-6m0 0V6m0 6v6"/>
                </svg>
                <span class="pr-1.5 pl-1 font-medium">New Project</span>
            </button>
        </div>
    
        <!-- Tabs -->
        <div class="flex items-center justify-between  border-b">
            <div class="flex items-center space-x-7">
                <button class="text-sm pb-3 border-b-2 border-orange-500">All Projects (0)</button>
                <button class="text-gray-500 text-sm pb-3">Completed</button>
                <button class="text-gray-500 text-sm pb-3">Archived</button>
                <button class="text-gray-500 text-sm pb-3">Closed</button>
            </div>
            <div class="flex items-center space-x-5">
                <button class="text-gray-500 hover:text-orange-500 text-sm font-medium pb-3 flex items-center space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6h18M7 12h10m-6 6h2"/>
                    </svg>
                    <span>Filters</span>
                </button>
                <button class="text-gray-500 hover:text-orange-500 text-sm font-medium pb-3 flex items-center space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                            <path d="M4 6v6s0 3 7 3s7-3 7-3V6"/>
                            <path d="M11 3c7 0 7 3 7 3s0 3-7 3s-7-3-7-3s0-3 7-3Zm0 18c-7 0-7-3-7-3v-6m15 10v-6m0 0l3 3m-3-3l-3 3"/>
                        </g>
                    </svg>
                    <span>Export</span>
                </button>
            </div>
        </div>

        <!-- Project Content -->
        <div class="w-full">
            @forelse ($projects as $project)
                <div>
                    <div class="border p-3 my-2 transition-colors relative group">                        
                        <div class="flex items-center justify-between">
                            <button class="flex items-center space-x-1">
                                <span class="font-medium">Search inspiration for upcoming event</span>
                            </button>

                            <div class="flex items-center space-x-2 text-xs font-medium">
                                <button class="flex items-center space-x-1 bg-gray-50 p-1.5 rounded-md text-gray-800 border font-semibold">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6.906 4.537A.6.6 0 0 0 6 5.053v13.894a.6.6 0 0 0 .906.516l11.723-6.947a.6.6 0 0 0 0-1.032L6.906 4.537Z"/>
                                    </svg>
                                    <span class="font-medium">107:57:23</span>
                                </button>
                                <button class="border p-1.5 rounded-md flex items-center space-x-1 hover:bg-gray-50 transition-colors">
                                    <span class="h-2 w-2 bg-red-500 rounded-full"></span>
                                    <span>High Priority</span>
                                </button>
                                <button class="border p-1.5 rounded-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                                        <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12.5a.5.5 0 1 0 0-1a.5.5 0 0 0 0 1Zm-8 0a.5.5 0 1 0 0-1a.5.5 0 0 0 0 1Zm-8 0a.5.5 0 1 0 0-1a.5.5 0 0 0 0 1Z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div>
                            <p class="text-sm text-gray-500 py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis animi in magni libero aliquam, ut quisquam sit ex quasi beatae! Quas ipsa tempore soluta alias magni. Hic obcaecati sed, corporis ab aspernatur vero quia illum quas veritatis unde rem quaerat ipsam reprehenderit, facilis veniam facere! Molestiae consectetur dolor aliquid voluptatum...</p>
                            
                            <div class="flex items-center justify-between text-xss">
                                <div class="flex items-center space-x-3">
                                    <!-- Stack Avatar -->
                                    <div class="relative -space-x-3">
                                        <button class="h-7 w-7 hover:z-50 hover:scale-125 rounded-full relative border-2 border-transparent hover:border-2 hover:border-orange-500 bg-red-50">
                                            <img src="https://api.multiavatar.com/JohnDoe.svg" class="w-full h-full inset-0 absolute" alt="">
                                        </button>
                                        <button class="h-7 w-7 hover:z-50 hover:scale-125 rounded-full relative border-2 border-transparent hover:border-2 hover:border-orange-500 bg-red-50">
                                            <img src="https://api.multiavatar.com/Art.svg" class="w-full h-full inset-0 absolute" alt="">
                                        </button>
                                        <button class="h-7 w-7 hover:z-50 hover:scale-125 rounded-full relative border-2 border-transparent hover:border-2 hover:border-orange-500 bg-red-50">
                                            <img src="https://api.multiavatar.com/Jane.svg" class="w-full h-full inset-0 absolute" alt="">
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

                openProjectModal() {
                    this.projectModal = true;
                },

                init() {
                    console.log('Project Initialized');
                }
            }));
        });
    </script>
@endpush