<style>

</style>
<x-layout>
    <x-flash />
    <div class="row align-items-center">

        <x-admin_sidebar />
        <div class="col-lg-9">
            <form enctype="multipart/form-data" action="/add-doctor" method="POST" class=" shadow p-4 col-lg-6 m-auto">
                @csrf
                <h1 class="text-center display-1">
                    Add Doctor
                </h1>
                <label for="">Doctor Name</label>
                <input class="form-control" type="text" placeholder="Add name..." name="name">
                @error('name')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                @enderror
                <label for="">Doctor Email</label>
                <input class="form-control" type="email" placeholder="Add email..." name="email">
                @error('email')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                @enderror
                <label for="">Doctor Password</label>
                <input class="form-control" type="password" placeholder="Add password..." name="password">
                @error('password')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                @enderror
                <label for="">Doctor Age</label>
                <input class="form-control" type="text" placeholder="Add age..." name="age">
                @error('age')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                @enderror
                <label for="">Doctor Phone</label>
                <input class="form-control" type="text" placeholder="Add phone..." name="phone">
                @error('phone')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                @enderror
                <label for="">Doctor Address</label>
                <input class="form-control" type="text" placeholder="Add address..." name="address">
                @error('address')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                @enderror
                <label for="">Doctor Experience</label>
                <input class="form-control" type="text" placeholder="Add Experience..." name="exp">
                @error('exp')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                @enderror
                <label for="">Doctor Status</label>
                <select name="status" class="form-control" id="">
                    <option value="available">Available</option>
                    <option value="unavailable">Unavailable</option>
                </select>
                @error('status')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                @enderror
                <label for="">Doctor Specialization</label>
                <input class="form-control" type="text" placeholder="Add Experience..." name="spec">
                @error('spec')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                @enderror
                <label for="">Role</label>
                <input type="number" value="1" readonly name="role" class="form-control">
                <label for="">Doctor Image</label>
                <input class="form-control" type="file" placeholder="Add specialisation..." name="image">
                @error('image')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                @enderror
                <button class="btn w-100 my-2 btn-success">
                    Add Doctor
                </button>
            </form>
        </div>
    </div>

</x-layout>
