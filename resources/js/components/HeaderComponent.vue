<template>
  <header>
    <!-- <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand logo-brand" href="/">
          <img
            class="img-brand border border-warning border-3 rounded-circle"
            src="../../../public/assets/images/DElivebool.png"
            alt=""
          />
          DeliveBool
        </a>
        
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <div class="d-flex justify-content-end w-100">
            <form class="d-flex" role="search">
              <div>
                <a href="/login">
                  <i class="fa-solid fa-user p-2 icon"></i>
                </a>
              </div>
              <div>
                <a href="/Cart">
                  <i class="fa-solid fa-store p-2 icon"></i>
                </a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </nav> -->

    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand logo-brand" href="/">
          <img
            class="img-brand border border-warning border-3 rounded-circle"
            src="../../../public/assets/images/DElivebool.png"
            alt=""
          />
          DeliveBool
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav d-flex justify-content-end w-100">
            <a class="nav-link" href="/login">
                  <i class="fa-solid fa-user p-2 icon"></i>Utente
            </a>
            <a class="nav-link" href="/Cart">
              <i class="fa-solid fa-store p-2 icon"></i>Carrello
            </a>
          </div>
        </div>
      </div>
    </nav>
  </header>
</template>

<script>
export default {};
</script>

<style scoped>
header {
  background-color: #ffbd59;
}
.logo-brand {
  font-family: "Bebas Neue", sans-serif;
  font-size: x-large;
}
.img-brand {
  width: 50px;
  object-fit: cover;
}
.icon {
  font-size: 20px;
  color: black;
}
</style>