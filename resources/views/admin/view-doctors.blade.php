<x-layout>
    <style>
        .doc-img {
            /* width: 200px;
            height: 200px; */
            object-fit: cover;
            border-radius: 50%;
            border: 1px solid var(--bs-info)
        }

        .my-card {
            height: 250px !important;
            /* width: 100% !important; */
        }
    </style>
    <div class="row ">
        <x-admin_sidebar />
        <div class="col-lg-9 my-5">
            <div class="row container mx-auto">

                @foreach ($doctors as $item)
                    <div class="col-lg-4">
                        <div class="card my-card p-3 border-info">
                            <div class="row">
                                <div class="col-sm-6">
                                    <img width="150px" height="150px" class="doc-img d-block m-auto"
                                        src="{{ asset('/storage/' . $item->image) }}" alt="">
                                </div>
                                <div class="col-sm-6">
                                    <h3>Dr. {{ $item->name }}</h3>
                                    <h5 class="text-secondary">
                                        {{ $item->spec }}
                                    </h5>
                                    <h6 class="text-secondary" style="">
                                        Experience: {{ $item->exp }}
                                    </h6>
                                    <h6 class="d-flex align-items-center text-capitalize">
                                        <i
                                            class="bi bi-dot fs-1 
                                            {{ $item->status == 'available' ? 'text-success' : 'text-danger' }}
                                        "></i>
                                        {{ $item->status }}
                                    </h6>
                                </div>
                            </div>
                            <a href="/single-doctor/{{ $item->id }}" class="btn btn-info">
                                See Details
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
