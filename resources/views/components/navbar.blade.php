<style>
  header{
    background: linear-gradient(#2DADAC,#3F9EBA,#4799BF);
    color: white;
    padding: 0.4rem;
  clip-path: polygon(7% 1%, 100% 0%, 100% 100%, 0% 100%);
    
  }

  .logo{
    flex:1
  }
  .items{
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
<div class="d-flex justify-content-around col-lg-8 mx-auto">
  <div class="logo">
    <img width="100px" src="https://media.istockphoto.com/id/1624291952/vector/medical-health-logo-design-illustration.jpg?s=612x612&w=0&k=20&c=RdOq1SRcWwS_12_c5Zg2_QOUz1GD-YwGvfRodtOPN5w=" alt="">
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
    <div class="menu">
      <ul class="list-unstyled d-flex gap-3">
        <li>Home</li>
        <li>about</li>
        <li>departments</li>
        <li>doctor</li>
        <li>services</li>
        <li>contact</li>
        <li>
          {{-- <form action="">
            <input type="search" name="search" placeholder="search..." id="">
          </form> --}}
        </li>
      </ul>
      
    </div>
  </div>
</div>