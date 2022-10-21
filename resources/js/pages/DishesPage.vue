<template>
  <div>
         <!-- RISTORANTE FORMA -->
      <div class="bg-rest-container">
        <div class="container ">
           <div class="row">
            <div class="col-12 col-md-4">
                <SingleRestaurantComponent :restaurant="restaurant"/>
            </div>
            <div class="col-12 col-md-8 d-flex align-items-center">

              <div>
                <h4 class="text-white fst-italic">Grazie per aver scelto il nostro ristorante; spero che i nostri piatti ti piacciano.
                  Offiamo molte categorie : 
                  <span v-for="category in categories" :key="category.id" class="text-brand">
                     - {{ category.name }} 
                  </span>
                </h4>
                <h3 class="text-white pt-3"><span class="fw-bolder ">Indirizzo: </span>{{ restaurant.address }}</h3>
              </div>
                
            </div>
           </div>
        </div>
      </div>

      <div class="container">
        <div class="row p-4">
            <h1>Questa è la pagina lista piatti</h1>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
                <DishCard v-for="dish in dishes" :key="dish.id" :dish="dish" :class="dish.visible === 1 ? '' : 'd-none'" @click="addToCart()" />
            </div>
        </div>
      </div>

    </div>
</template>

<script>
import DishCard from '../components/DishComponent/DishCardComponent.vue';
import RestaurantComponent from '../components/SubComponentsMain/RestaurantComponent.vue';
import SingleRestaurantComponent from '../components/DishComponent/SingleRestaurantComponent.vue';
import axios from "axios";

export default {

  components: {
    DishCard,
    RestaurantComponent,
    SingleRestaurantComponent,
  },

  data: function () {
    return {
       dishes:[],
       restaurant:[],
       categories:[],
       cart: [],
        length: 0,
        total: 0,
    };
  },
   mounted(){

  },

  methods: {
    getDishes() {
      const id = this.$route.params.id;
      axios
        .get(`/api/dishes/${id}`)
        .then((response) => {
          this.dishes = response.data.results.dishes;
          this.restaurant = response.data.results.restaurant,
          this.categories = response.data.results.categories
          console.log(this.categories);
        //   this.isLoading = false;
        })
        .catch((error) => {
          console.error(error);
        });
    },

    addToCart(dish) {
                //? fixa il local storage al primo avvio o al clear in quanto risulta null
                if (this.cart == null) {
                    this.cart = [];
                }
                //? se il carrello e' vuoto pusha il piatto
                if (this.cart.length == 0) {
                    this.cart.push(dish);
                    this.length++;
                    localStorage.setItem("cart", JSON.stringify(this.cart));
                }
                //!  se il carrello non e' vuoto controlliamo che stiamo ordinando dallo stesso ristorante in caso contrario resettiamo il cart e pushamo il piatto
                else if (this.cart[0].restaurant_id != this.restaurant.id) {
                    const result = window.confirm(
                        'If you click add here we\'ll clear your cart, because our policy says "you can order from only one restaurant", Are you sure?'
                    );
                    if (result) {
                        this.cart = [];
                        localStorage.clear();
                        this.cart.push(dish);
                        this.length++;
                        localStorage.setItem("cart", JSON.stringify(this.cart));
                    }
                }
                //! pushamo il piatto aggiuntivo
                else {
                    this.cart.push(dish);
                    this.length++;
                    localStorage.setItem("cart", JSON.stringify(this.cart));
                }
                // this.total = this.total + dish.price;
                // localStorage.setItem("total", this.total);
            },


  },

  created() {
    this.getDishes();
    
  },
};
</script>

<style scoped>
.bg-rest-container{
  background-color: #758d75;
}
.text-brand{
  color: #ffbd59;
}

</style>
