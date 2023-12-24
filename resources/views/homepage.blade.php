<style>
    .front-page {
        background-image: url('https://miro.medium.com/v2/resize:fit:1400/1*nyU2IcNL3TVxZ_GPkkmt2g.png');
    }
</style>
<x-layout>
    <x-flash />
    <x-navbar />


    <div class="front-page">
        <div class="col-lg-9 mx-auto">
            <div class="row align-items-center text-white">
                <div class="col-lg-6">
                    <h3><i><u>Diagnosis</u></i></h3>
                    <h1 class="display-2 fw-bolder">Personal Care for your healthy living</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed ipsum vero ea distinctio possimus
                        consequatur quis earum, voluptate eos minus delectus id, et odit vitae enim quia expedita autem
                        eveniet!</p>

                    <!-- Button trigger modal -->
                    @auth

                        <button type="button" class="btn btn px-5 rounded-pill btn-dark text-capitalize text-white"
                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Book Now
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header text-center ">
                                        <h1 class="modal-title text-center text-dark fs-5" id="exampleModalLabel">PNY
                                            hospital</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-dark">
                                        <h2 class="text-center">Book An Appointment</h2>
                                        <form action="/book-appointment" method="POST">
                                            @csrf
                                            <label for="">Name</label>
                                            <input type="text" name="name" class="form-control"
                                                placeholder="Please enter your name...">
                                            @error('name')
                                                <p class="text-danger fw-bolder">
                                                    {{ $message }}
                                                </p>
                                            @enderror
                                            <label for="">Age</label>
                                            <input type="number" name="age" class="form-control"
                                                placeholder="Please enter your age...">
                                            @error('age')
                                                <p class="text-danger fw-bolder">
                                                    {{ $message }}
                                                </p>
                                            @enderror
                                            <label for="">Contact</label>
                                            <input type="number" name="contact" class="form-control"
                                                placeholder="Please enter your phone number...">
                                            @error('contact')
                                                <p class="text-danger fw-bolder">
                                                    {{ $message }}
                                                </p>
                                            @enderror
                                            <label for="">email</label>
                                            <input type="text" name="email" class="form-control"
                                                placeholder="Please enter your email...">
                                            @error('email')
                                                <p class="text-danger fw-bolder">
                                                    {{ $message }}
                                                </p>
                                            @enderror
                                            <label for="">disease</label>
                                            <input type="text" name="disease" class="form-control"
                                                placeholder="Please enter your disease...">
                                            @error('disease')
                                                <p class="text-danger fw-bolder">
                                                    {{ $message }}
                                                </p>
                                            @enderror
                                            <label for="">Time</label>
                                            <input class="form-control" type="datetime-local" name='datetime'
                                                placeholder="Enter time">
                                            @error('datetime')
                                                <p class="text-danger fw-bolder">
                                                    {{ $message }}
                                                </p>
                                            @enderror
                                            <label for="">Doctor</label>
                                            <select name="doc_id" class="form-control" id="">
                                                @foreach ($doctors as $item)
                                                    <option value="{{ $item->id }}">
                                                        Dr.{{ $item->name }}
                                                    </option>
                                                @endforeach

                                            </select>
                                            @error('doctor')
                                                <p class="text-danger fw-bolder">
                                                    {{ $message }}
                                                </p>
                                            @enderror
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">
                                                    Book
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endauth
                    @guest

                        <button type="button" class="btn btn px-5 rounded-pill btn-dark text-capitalize text-white"
                            data-bs-toggle="modal" data-bs-target="#registerModal">
                            Sign Up
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header text-center ">
                                        <h1 class="modal-title text-center text-dark fs-5" id="exampleModalLabel">PNY
                                            hospital</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-dark">
                                        <h2 class="text-center">Register Now</h2>
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
                                            <button class="btn my-2 w-100 text-white fw-bolder"
                                                style="background: #40743C;
">
                                                Register
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endguest

                </div>
                <div class="col-lg-6">
                    <img width="100%" src="./doctor.png" alt="">
                </div>
            </div>
        </div>
    </div>


</x-layout>
