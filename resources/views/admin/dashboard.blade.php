<x-layout>
    <div class="row">
        <x-admin_sidebar />
        <div class="col-lg-9">
            <div class="row">

                @foreach ($data as $key => $item)
                    {{-- {{ $key }} --}}
                    <x-card :title="$key" :icon="$item['icon']" />
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
