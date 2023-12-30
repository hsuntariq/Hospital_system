<style>
    body {
        /* overflow: hidden !important; */
    }

    .admin-sidebar {
        height: 100vh;
        display: flex;
        flex-direction: column;
        gap: 2rem;
        font-size: 2rem;
        padding: 2rem;
        background-image: url('https://miro.medium.com/v2/resize:fit:1400/1*nyU2IcNL3TVxZ_GPkkmt2g.png');
        color: white;
        font-weight: bold;
        text-transform: capitalize;
    }

    li {
        margin: 1rem 0;
        transition: all 0.3s;
        cursor: pointer;
    }

    li:hover {
        /* background: lightgray; */
        color: black;
    }

    li i {
        margin-right: 1rem;
    }

    li a {
        text-decoration: none;
        color: white
    }
</style>
<div class="col-lg-3 admin-sidebar">
    <ul class="list-unstyled">
        <li><i class="bi bi-pc-display-horizontal"></i>
            <a href="/">Home</a>
        </li>
        @can('isAdmin')
            <li><i class="bi bi-pc-display-horizontal"></i>
                <a href="/dashboard">dashboard</a>
            </li>
            <li><i class="bi bi-person-circle"></i>
                <a href="/add-doctors">Add Employee</a>
            </li>
            <li><i class="bi bi-person-circle"></i>
                <a href="/view-doctors">View Doctors</a>
            </li>
            <li><i class="bi bi-gender-female"></i>nurse</li>
            <li><i class="bi bi-capsule"></i>pharmacist</li>
            <li><i class="bi bi-droplet-half"></i>laboratorist</li>
            <li><i class="bi bi-cash-coin"></i>accountant</li>
            <li><i class="bi bi-pc-display-horizontal"></i>
                <a href="/">Home</a>
            </li>
        @endcan

        <li><i class="bi bi-ethernet"></i>department</li>


        <li><i class="bi bi-person-wheelchair"></i>patient</li>

    </ul>
</div>
