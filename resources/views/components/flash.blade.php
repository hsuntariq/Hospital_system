<style>
    .underlay {
        background: rgba(0, 0, 0, 0.6);
        z-index: 222;
        position: fixed;
        top: 0;
        height: 100vh;
        width: 100vw;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: all 0.3s;
    }

    .overlay {
        transition: all 0.3s;
    }
</style>
@if (session()->has('message'))
    <div class="underlay ">
        <div class="overlay text-center w-25 bg-white p-5 card border-0 rounded">
            <h6>
                {{ session('message') }}
            </h6>
            <button class="btn btn-info close-flash">
                OK
            </button>
        </div>
    </div>
@endif

<script>
    let myBtn = document.querySelector('.close-flash');
    let underlay = document.querySelector('.underlay');
    let overlay = document.querySelector('.overlay');

    myBtn.addEventListener('click', () => {
        underlay.style.scale = '0'
        overlay.style.scale = '0'
    })
</script>
