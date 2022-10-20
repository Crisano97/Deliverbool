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
                <a href="/checkout">
                     Vai al Checkout
                </a>
            </h1>
        </nav>

        <!-- COMPONENT LISTA ORDINE -->
        <singleCartDish class="form_content rounded m-3"/>

    </div>
  </div>
</template>

<script>
import singleCartDish from '../components/CartComponent/singleCartDish.vue';
export default {
  components: {
    singleCartDish
  },
  data : function(){
      return{
          carrello: [],
      }
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