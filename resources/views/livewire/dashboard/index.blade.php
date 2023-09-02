<div>
    <div class="py-6 text-gray-900">
        <h1 class="font-semibold text-lg">Overview</h1>
    </div>
</div>

@push('alpine_script')
    <script>
        document.addEventListener('alpine:init', () => {
            console.log('Dashboard!');
        });
    </script>
@endpush