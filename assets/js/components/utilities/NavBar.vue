<template>
  <div>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
      <a
        href="/"
        class="navbar-brand d-flex align-items-center px-4 px-lg-5"
      >


        <img class="img-fluid" width="45" src="/images/logo.png" alt="Logo" />
        <h2 class="m-0 text-primary"><i class="fa fa-book me-3" />Rioxygen</h2>
      </a>
      <button
        type="button"
        class="navbar-toggler me-4"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
      >
        <span class="navbar-toggler-icon" />
      </button>
      <div
        id="navbarCollapse"
        class="collapse navbar-collapse"
      >
        <div class="navbar-nav ms-auto p-4 p-lg-0">
          <a
            href="/"
            class="nav-item nav-link active"
          >Home</a>
          <a
            href="#about"
            class="nav-item nav-link"
          >About Us</a>
          <a
            href="#services"
            class="nav-item nav-link"
          >Services</a>
          <a
            href="#contact"
            class="nav-item nav-link"
          >Contact</a>
        </div>
        <a
          href=""
          class="btn btn-primary py-4 px-lg-5 d-none d-lg-block"
        >Client area<i class="fa fa-arrow-right ms-3" /></a>
      </div>
    </nav>
    <!-- Navbar End -->
  </div>
</template>
<script>
export default {
  name: "NavBar",
}
</script>