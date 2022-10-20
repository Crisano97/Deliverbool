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
                <DishCard v-for="dish in dishes" :key="dish.id" :dish="dish" :class="dish.visible === 1 ? '' : 'd-none'" />
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
    };
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
