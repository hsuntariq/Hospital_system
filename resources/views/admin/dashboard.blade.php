<x-layout>
    <div class="row">
        <x-admin_sidebar />
        <div class="col-lg-9">
            <div class="row">

                @foreach ($data as $key => $item)
                    {{-- {{ $key }} --}}
                    <x-card :title="$key" :icon="$item['icon']" :count="$item['value']" />
                @endforeach
            </div>
            <div class="d-flex">
                <div class="w-25" style="width: 300px;height:300px">
                    {{!! $chart->container() !!}}
                </div>
                <div class="w-25 "style="width: 300px;height:300px">
                    {{!! $chart2->container() !!}}
                </div>
                <div class="w-25 "style="width: 300px;height:300px">
                    {{!! $chart3->container() !!}}
                </div>
            </div>
        </div>
    </div>
    {!! $chart->script() !!}
    {!! $chart2->script() !!}
    {!! $chart3->script() !!}

</x-layout>
