<template>
  <div class="form_page">
       <div class="order-controller container mt-5">
        <nav class="row row-cols-2">
            <h1 class="border-bottom border-warning">
                <a href="/Cart">
                     Il tuo ordine
                </a>
            </h1>
            <h1 class="border-bottom">
                <a href="/Checkout">
                     Vai al Checkout
                </a>
            </h1>
        </nav>

        <!-- COMPONENT LISTA ORDINE -->
        <div class="row">
            <div class="col-12 col-md-8 col-lg-8">
                <singleCartDish class="form_content rounded m-3"/>
            </div>
            <div class="col-12 col-md-4">
                <div class="m-4 bg-check text-center p-3 rounded">
                    <div class="border-bottom">
                        <h6>Totale</h6>
                        <h4>30.00$</h4>
                    </div>
                    <div class="p-3">
                        <a href="/Checkout" class="btn btn-outline-success">Vai al Checkout</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
  </div>
</template>

<script>
import singleCartDish from '../components/CartComponent/singleCartDish.vue';
export default {
  components: {
    singleCartDish
  }
}
</script>

<style scoped>
.bg-check{
    background-color: #ffbd59;
}
a{
    text-decoration: none;
    color: rgb(255, 255, 255);
}

.form_page{
    background: linear-gradient(rgba(0,0,0,.5), rgba(141, 140, 140, 0.5)), url("../../../public/assets/images/food-images-pictures-1600x1016.jpg");
    background-repeat: no-repeat;
    background-size: cover; 
    display: flex;
    align-items: center;
    height: 100%;
} 
</style>