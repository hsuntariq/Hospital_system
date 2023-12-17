<x-layout>
    <div class="row align-items-center">

        <x-admin_sidebar />
        <div class="col-lg-9">
            <form action="/add-doctor" method="POST" class=" shadow p-4 col-lg-6 m-auto">
                @csrf
                <h1 class="text-center display-1">
                    Add Doctor
                </h1>
                <label for="">Doctor Name</label>
                <input class="form-control" type="text" placeholder="Add name..." name="name">
                <label for="">Doctor Specialisation</label>
                <input class="form-control" type="text" placeholder="Add specialisation..." name="spec">
                <button class="btn w-100 my-2 btn-success">
                    Add Doctor
                </button>
            </form>
        </div>
    </div>

</x-layout>
