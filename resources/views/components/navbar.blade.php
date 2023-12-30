<style>
    header {
        background: linear-gradient(#2DADAC, #3F9EBA, #4799BF);
        color: white;
        padding: 0.4rem;
        clip-path: polygon(7% 1%, 100% 0%, 100% 100%, 0% 100%);

    }

    .logo {
        flex: 1
    }

    .items {
        flex: 2;
        /* display: flex */
        position: relative;
    }

    /* .items::before{
       content: '';
    height: 100%;
    transform: rotate(55deg);
    top: -20%;
    width: 2px;
    left: 10px;
    background: #1BB89D;
    position: absolute;
  } */
</style>
<div class="d-flex justify-content-around col-lg-9 align-items-center mx-auto">
    <div class="logo">
        <img width="100px"
            src="https://media.istockphoto.com/id/1624291952/vector/medical-health-logo-design-illustration.jpg?s=612x612&w=0&k=20&c=RdOq1SRcWwS_12_c5Zg2_QOUz1GD-YwGvfRodtOPN5w="
            alt="">
    </div>
    <div class="items">
        <header>
            <div class="d-flex">
                <div class="left d-flex gap-3 ms-auto">
                    <h6>Phone 04950438504</h6>
                    <h6>Mon-Fri(8am-6pm)</h6>
                    <h6>test@mail.com</h6>
                </div>
                <div class="right">
                    <h6>cart</h6>
                </div>
            </div>
        </header>
        <div class="menu d-flex  justify-content-center">
            <ul class="list-unstyled d-flex gap-3 align-items-center">
                <li>
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li>about</li>
                <li>departments</li>
                <li>doctor</li>
                <li>services</li>
                <li>contact</li>
                @auth

                    <li>
                        <a href="/appointments">Your appointments</a>
                    </li>
                @endauth
                @can('isAdmin')
                    <li>
                        <a class="nav-link" href="/dashboard"> dashboard</a>
                    </li>
                @endcan
                <li>
                    {{-- <form action="">
            <input type="search" name="search" placeholder="search..." id="">
          </form> --}}
                </li>
                @auth

                    <div class="dropdown ms-auto">
                        <div class="ms-auto justify-self-end dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img width="50px" height="50px" style="border-radius:50% "
                                src="{{ asset('./storage/' . auth()->user()->image) }}" alt="">
                        </div>
                        <ul class="dropdown-menu p-2 text-start">
                            <li><a class="text-start p-0 dropdown-item text-capitalize fw-bolder" href="#">
                                    Salam {{ auth()->user()->name }}
                                </a></li>
                            <li class="text-start p-0"><a class="text-start p-0 dropdown-item" href="#">
                                    Update Profile
                                </a></li>
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit" class=" btn btn-danger w-75 mx-auto d-block rounded-pill my-2"
                                        href="#">
                                        Logout
                                    </button>
                            </li>
                            </form>
                        </ul>
                    </div>
                @endauth
                @guest

                    <li>

                        <form action="/login" class="shadow  p-2 rounded d-flex gap-1 align-items-center mt-3"
                            style="width:90%" method="POST">
                            @csrf
                            <input type="email" name="email" placeholder="Email" class="form-control align-self-center">
                            <input type="password" name="password" placeholder="Password"
                                class="form-control align-self-center">
                            <button style="width:400px" class=" btn btn-info">
                                Sign In
                            </button>
                        </form>
                    </li>
                @endguest


            </ul>

        </div>
    </div>
</div>
