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
        <div class="flex items-start justify-between">
            <div>
                <h3 class="font-semibold">Create Project</h3>
                <p class="text-sm text-gray-500">Please fill all the fields below.</p>
            </div>
            <button @click="projectModal=false">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        
        <div class="relative w-auto py-3 space-y-3 text-sm">
            {{-- <div class="flex p-4 mb-4 text-sm text-red-800 rounded bg-red-50 dark:text-red-400" role="alert">
                <svg class="flex-shrink-0 inline w-4 h-4 mr-3 mt-[2px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">Danger</span>
                <div>
                    <span class="font-medium">Ensure that these requirements are met:</span>
                        <ul class="mt-1.5 ml-4 list-disc list-inside">
                        <li>At least 10 characters (and up to 100 characters)</li>
                        <li>At least one lowercase character</li>
                        <li>Inclusion of at least one special character, e.g., ! @ # ?</li>
                    </ul>
                </div>
            </div> --}}
            <div>
                <x-input-label for="title" :value="__('Project Title')" />

                <x-text-input id="title" class="block w-full mt-1" type="text" name="title" required />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="flex items-center justify-between space-x-2">
                <div class="flex-1">
                    <x-input-label for="status" :value="__('Status')" />

                    <x-select-option id="status" class="w-full mt-1 bg-gray-50 text-sm">
                        <option value="" selected disabled class="text-gray-400">-- Select Status --</option>
                        @foreach (\App\Enum\ProjectStatusEnum::cases() as $status)
                            <option value="{{ $status->value }}">{{ $status->label() }}</option>
                        @endforeach
                    </x-select-option>
    
                    <x-input-error :messages="$errors->get('status')" class="mt-2" />
                </div>

                <div class="flex-1">
                    <x-input-label for="priority" :value="__('Priority')" />
    
                    <x-select-option id="priority" class="w-full mt-1 bg-gray-50 text-sm">
                        <option value="" selected disabled>-- Select Priority --</option>
                        @foreach (\App\Enum\PriorityEnum::cases() as $priority)
                            <option value="{{ $priority->value }}">{{ $priority->label() }}</option>
                        @endforeach
                    </x-select-option>
    
                    <x-input-error :messages="$errors->get('priority')" class="mt-2" />
                </div>
            </div>

            <div>
                <x-input-label for="assign" :value="__('Assign')" />

                <x-text-input id="assign" class="block w-full mt-1" type="text" name="assign" required />

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
            
            <x-primary-button wire:click="save" wire:loading.attr="disabled" wire:loading.class="bg-orange-300 hover:bg-orange-300">
                <span wire:loading.remove>Save Project</span>

                <svg wire:loading xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"><path fill="currentColor" d="M12,4a8,8,0,0,1,7.89,6.7A1.53,1.53,0,0,0,21.38,12h0a1.5,1.5,0,0,0,1.48-1.75,11,11,0,0,0-21.72,0A1.5,1.5,0,0,0,2.62,12h0a1.53,1.53,0,0,0,1.49-1.3A8,8,0,0,1,12,4Z"><animateTransform attributeName="transform" dur="0.75s" repeatCount="indefinite" type="rotate" values="0 12 12;360 12 12"/></path></svg>
                <span wire:loading class="ml-1">Saving</span>
            </x-primary-button>
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