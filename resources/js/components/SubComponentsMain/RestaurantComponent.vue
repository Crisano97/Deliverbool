<template>
  <!-- CARD RISTORANTI IN VOGA -->
    <section class="container py-5">
      <h1 class="text-center">I partner più amati....</h1>
      <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3">
        <!-- CARD -->
        <div class="px-4 my-5">
          <div class="rest-card position-relative">
            <img
              src="../../../../public/assets/images/pizza.png"
              class="card-img-top border rounded-pill"
              alt="..."
            />
            <div
              class="
                text-center
                card
                p-3
                position-absolute
                top-100
                start-50
                translate-middle
                card-title
              "
            >
              <h5 class="">NOME RISTORANTE</h5>
            </div>
          </div>
        </div>
      </div>
    </section>
</template>

<script>
export default {

}
</script>

<style>
/* CARD RISTORANTE */
.rest-card img {
  width: 100%;
  object-fit: cover;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px,
    rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
}
.card-title {
  box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px,
    rgba(0, 0, 0, 0.3) 0px 30px 60px -30px,
    rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
}
</style>