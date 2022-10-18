<template>
  <header>
    <nav class="navbar navbar-expand-lg">
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