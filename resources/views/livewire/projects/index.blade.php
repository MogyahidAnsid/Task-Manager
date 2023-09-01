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
                <button class="text-sm pb-3 border-b-2 border-orange-500">All Projects (25)</button>
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
    </div>

        <!-- Add Modal -->
        <div class="bg-white w-[30rem] ml-7 -mr-14 pb-7 h-screen">
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
                    <button class="px-2 py-1.5 rounded-tl-md rounded-tr-md font-medium border text-gray-600 bg-gray-50">Timeline</button>
                </div>
            </div>
        </div>
    
    <!-- Add Modal -->
    <div x-show="projectModal" @keydown.escape.window="projectModal = false" class="fixed top-0 left-0 z-[99] flex items-center justify-center w-screen h-screen" x-cloak>
        <div x-show="projectModal"
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="ease-in duration-300"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            @click="projectModal=false" class="absolute inset-0 w-full h-full bg-white backdrop-blur-sm bg-opacity-70"></div>
        <div x-show="projectModal"
            x-trap.inert.noscroll="projectModal"
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 -translate-y-2 sm:scale-95"
            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave-end="opacity-0 -translate-y-2 sm:scale-95"
            class="relative w-full bg-white border shadow-lg p-5 border-neutral-200 sm:max-w-lg sm:rounded-lg">
            <div class="flex items-center justify-between">
                <h3 class="text-lg font-semibold">Create Project</h3>
                {{-- <button @click="projectModal=false" class="absolute top-0 right-0 flex items-center justify-center w-8 h-8 mt-5 mr-5 text-gray-600 rounded-full hover:text-gray-800 hover:bg-gray-50">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>  
                </button> --}}
            </div>
            <div class="relative w-auto pb-8">
                <p>This is placeholder text. Replace it with your own content.</p>
            </div>
            <div class="flex flex-col-reverse sm:flex-row sm:justify-end sm:space-x-2">
                <button @click="projectModal=false" type="button" class="inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium transition-colors border rounded-md focus:outline-none focus:ring-2 focus:ring-neutral-100 focus:ring-offset-2">Cancel</button>
                <button @click="projectModal=false" type="button" class="inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium text-white transition-colors border border-transparent rounded-md focus:outline-none focus:ring-2 focus:ring-neutral-900 focus:ring-offset-2 bg-neutral-950 hover:bg-neutral-900">Continue</button>
            </div>
        </div>
    </div>
    {{-- <template x-teleport="body">
    </template> --}}
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