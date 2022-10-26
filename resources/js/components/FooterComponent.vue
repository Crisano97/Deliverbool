<template>
  <footer>
    <div class="container pb-4">
      <div class="row">
        <div class="p-5 col-6 col-lg-4">
          <h5>Scopri e ordina</h5>
          <ul class="p-0">
            <li>
              <a href="/">Home</a>
            </li>
            <li>
              <a href="/allrestaurants">I nostri partner</a>
            </li>
          </ul>
        </div>

        <div class="p-5 col-6 col-lg-4">
          <h5>Seguici</h5>
          <ul class="p-0">
            <li>
              <a href="#">Facebook</a>
            </li>
            <li>
              <a href="#">Twitter</a>
            </li>
            <li>
              <a href="#">Instagram</a>
            </li>
          </ul>
        </div>

        <div class="p-5 col-12 col-lg-4">
          <h5 class="text-center">Scarica la nostra app</h5>
          <div class="d-flex justify-content-evenly pt-3">
            <div>
              <!-- <a href=""> -->
              <i class="fa-brands fa-apple banner-icon"></i>
              <!-- </a> -->
            </div>
            <div>
              <!-- <a href=""> -->
              <i class="fa-brands fa-google-play banner-icon"></i>
              <!-- </a> -->
            </div>
          </div>
        </div>
      </div>

      <section class="arrow_up">
        <a href="#anchorHeader"><i class="fa-solid fa-chevron-up"></i></a>
      </section>
    </div>
  </footer>
</template>

<script>
export default {};
</script>

<style scoped lang="scss">
footer {
  background-color: #2e3333;
  color: white;
}
li {
  padding: 0;
  list-style: none;
  font-size: 0.8rem;
  margin-top: 0.5rem;
}
a {
  color: white;
  text-decoration: none;
}

.banner-icon {
  font-size: 70px;
  color: #758d75;
}

.arrow_up {
  text-align: end;
  padding: 1rem;
  border-radius: 5px;
  a {
    background-color: rgba(128, 128, 128, 0.5);
    border-radius: 0.5rem;
    padding: 1rem;
  }
}
</style>