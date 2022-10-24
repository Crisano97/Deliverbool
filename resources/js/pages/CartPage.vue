<template>
  <div class="form_page">
    <div class="order-controller container mt-5"  :class="arr.length < 1 ? 'vh-100' : 'h-100'">
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
            arr: [],
            restaurant_id : 0,
            
      }
  },
   mounted() {
    if (localStorage.cart) {
      let dishesArray = JSON.parse(localStorage.getItem("cart"));
      console.log(dishesArray)
      dishesArray.forEach((element) => {
        this.restaurant_id = element.restaurant_id;
        console.log(this.restaurant_id);
       this.arr.push(element); // Some array I got from async call

        this.dishes = Array.from(new Set(this.arr.map(a => a.id)))
        .map(id => {
        return this.arr.findLast(a => a.id === id)
        }) 
      });
      this.getTotal();
      
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