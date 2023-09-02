<div @keydown.escape.window="projectModal = false" class="fixed top-0 left-0 z-[99] flex items-center justify-center w-screen h-screen" x-cloak>
    <div x-show="projectModal"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="ease-in duration-300"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        @click="projectModal=false" class="absolute inset-0 h-full bg-black/40 backdrop-blur-sm bg-opacity-70"></div>
    <div x-show="projectModal"
        x-trap.inert.noscroll="projectModal"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0 -translate-y-2 sm:scale-95"
        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave-end="opacity-0 -translate-y-2 sm:scale-95"
        class="relative w-[50rem] bg-white border shadow-lg p-5 border-neutral-200 sm:max-w-2xl sm:rounded-lg">
        <div class="flex items-center justify-between">
            <h3 class="font-semibold">Create Project</h3>
            <button @click="projectModal=false">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        
        <div class="relative w-auto text-sm py-3 space-y-3">
            <div>
                <x-input-label for="title" :value="__('Project Title')" />

                <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" required />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="flex items-center space-x-2 justify-between">
                <div class="flex-1">
                    <x-input-label for="status" :value="__('Status')" />

                    <x-select-option id="status" class="mt-1 w-full bg-gray-50" :options="['active', 'inactive', 'pending', 'completed']" />
    
                    <x-input-error :messages="$errors->get('status')" class="mt-2" />
                </div>

                <div class="flex-1">
                    <x-input-label for="priority" :value="__('Priority')" />
    
                    <x-select-option id="priority" class="mt-1 w-full bg-gray-50" :options="['active', 'inactive', 'pending', 'completed']" />
    
                    <x-input-error :messages="$errors->get('priority')" class="mt-2" />
                </div>
            </div>

            <div>
                <x-input-label for="assign" :value="__('Assign')" />

                <x-text-input id="assign" class="block mt-1 w-full" type="text" name="assign" required />

                <x-input-error :messages="$errors->get('assign')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="title" :value="__('Write description')" />

                <div class="mt-1">
                    <input id="x" type="hidden" name="content">
                    <trix-editor input="x"></trix-editor>
                </div>
            </div>
        </div>

        <div class="flex flex-col-reverse sm:flex-row sm:justify-end sm:space-x-2">
            <button @click="projectModal=false" type="button" class="inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium transition-colors border rounded-md focus:outline-none focus:ring-2 focus:ring-neutral-100 focus:ring-offset-2">Cancel</button>
            <button @click="projectModal=false" type="button" class="inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium text-white transition-colors border border-transparent rounded-md focus:outline-none focus:ring-2 focus:ring-neutral-900 focus:ring-offset-2 bg-neutral-950 hover:bg-neutral-900">Save Project</button>
        </div>
    </div>
</div>

@push('alpine_script')
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    <script>
        window.addEventListener('livewire:load', () => {
            Livewire.on('closeProjectModal', () => {
                options: ['active', 'inactive', 'pending', 'completed']
            })
        })
    </script>
@endpush