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
                    Add Employee
                </h1>
                <label for="">Employee Name</label>
                <input class="form-control" type="text" placeholder="Add name..." name="name">
                @error('name')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                @enderror
                <label for="">Employee Email</label>
                <input class="form-control" type="email" placeholder="Add email..." name="email">
                @error('email')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                @enderror
                <label for="">Employee Password</label>
                <input class="form-control" type="password" placeholder="Add password..." name="password">
                @error('password')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                @enderror
                <label for="">Employee Age</label>
                <input class="form-control" type="number" placeholder="Add age..." name="age">
                @error('age')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                @enderror
                <label for="">Employee Phone</label>
                <input class="form-control" type="text" placeholder="Add phone..." name="phone">
                @error('phone')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                @enderror
                <label for="">Employee Address</label>
                <input class="form-control" type="text" placeholder="Add address..." name="address">
                @error('address')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                @enderror
                <label for="">Employee Experience</label>
                <input class="form-control" type="text" placeholder="Add Experience..." name="exp">
                @error('exp')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                @enderror
                <label for="">Employee Status</label>
                <select name="status" class="form-control" id="">
                    <option value="available">Available</option>
                    <option value="unavailable">Unavailable</option>
                </select>
                @error('status')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                @enderror
                <label for="">Employee Specialization</label>
                <input class="form-control" type="text" placeholder="Add Experience..." name="spec">
                @error('spec')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                @enderror
                <label for="">Role</label>
                <select class="form-control" name="role" id="">
                    <option value="1">Doctor</option>
                    <option value="3">Nurse</option>
                    <option value="4">pharmacist</option>
                    <option value="5">laboratorist</option>
                    <option value="6">Accountant</option>

                </select>
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
