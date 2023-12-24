<x-layout>
    <div class="row">
        <x-admin_sidebar />
        <div class="col-lg-9">
            <div class="card w-50 m-auto text-center p-5">
                <img width="300px" class="d-block mx-auto" src="{{ asset('/storage/' . $doc->image) }}" alt="">
                <h1>
                    Dr. {{ $doc->name }}
                </h1>
                <h2 class="text-secondary">Experience:{{ $doc->exp }}</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, molestiae? Voluptatem sed dolor
                    ipsum, excepturi quas, enim voluptate aperiam magni a est officiis tenetur voluptatum inventore
                    nobis incidunt et, mollitia quaerat impedit necessitatibus veritatis! Ut magni dolore sit culpa
                    obcaecati.</p>

            </div>
        </div>
    </div>
</x-layout>
