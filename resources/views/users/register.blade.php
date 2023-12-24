<style>
    .reg {
        display: flex;
        justify-content: center;
        align-content: center;
        /* height: 100vh; */
    }
</style>
<x-layout>
    <x-flash />
    <div class="container shadow p-5">
        <div class="row reg  my-2">
            <h1 class="text-center  display-1">
                Register
            </h1>
            <div class="col-lg-6">
                <img width="100%" src="./hospital.jpg" alt="">
            </div>
            <div class="col-lg-6">
                <form action="/register" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control">
                    <label for="">Age</label>
                    <input type="number" name="age" class="form-control">
                    <label for="">Phone</label>
                    <input type="text" name="phone" class="form-control">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control">
                    <label for="">Address</label>
                    <input type="text" name="address" class="form-control">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control">
                    <label for="">Image</label>
                    <input type="file" name="image" class="form-control">
                    <button class="btn my-2 w-100 text-white fw-bolder" style="background: #40743C;
">
                        Register
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
