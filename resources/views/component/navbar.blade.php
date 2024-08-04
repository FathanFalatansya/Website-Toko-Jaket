<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item p-1 mx-2 p-0">
          <a class="menu nav-link active" href="#">Home</a>
        </li>
        <li class="nav-item p-1 mx-2 p-0">
          <a class="menu nav-link" href="#">Product</a>
        </li>
        <li class="nav-item p-1 mx-2 p-0">
          <a class="menu nav-link" href="#">Testimonial</a>
        </li>
        <li class="nav-item p-1 mx-2 p-0">
          <a class="menu nav-link" href="#">Contact Us</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


<style scoped>
  .menu{
    text-transform: uppercase;
    text-decoration: none;
    letter-spacing: 0.15em;
    
    display: inline-block;
    padding: 15px 20px;
    position: relative;
  }

  .menu:after {    
    background: none repeat scroll 0 0 transparent;
    bottom: 0;
    content: "";
    display: block;
    height: 2px;
    left: 50%;
    position: absolute;
    background: black;
    transition: width 0.3s ease 0s, left 0.3s ease 0s;
    width: 0;
  }

  .menu:hover:after { 
    width: 100%; 
    left: 0; 
  }
</style>

<script>

</script>