<template>
  <main>
    <HeroComponent />

 
        <CategoryComponent />
     



    <DownloadAppComponent />
  <section class="container py-5">
      <h1 class="text-center">I partner più amati....</h1>
      <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3">
        <RestaurantComponent  v-for="restaurant in restaurants" :key="restaurant.id" :restaurant="restaurant"/>
       </div>
    </section>
  </main>
</template>

<script>
import HeroComponent from './SubComponentsMain/HeroComponent.vue';
import CategoryComponent from './SubComponentsMain/CategoryComponent.vue';
import DownloadAppComponent from './SubComponentsMain/DownloadAppComponent.vue';
import RestaurantComponent from './SubComponentsMain/RestaurantComponent.vue';
 import axios from 'axios';

export default {
  components: {
    HeroComponent,
    CategoryComponent,
    DownloadAppComponent,
    RestaurantComponent
  },
    data: function(){
      return {
        restaurants: []
      }
    },
    methods: {

     

    getRestaurantsFilter(category){
      category = this.$route.params.category
      console.log(category);
        axios.get(`/api/restaurants/${category}`).then((response)=>{
          this.restaurants = response.data.results;
          console.log(this.restaurants)
      });
    },

    getRestaurants(){
      axios.get('/api/restaurants/sponsor')
          .then((response) => {
          //console.log(response.data.result);
          this.restaurants = response.data.results;
          console.log(response)
          })
          .catch((error) => {
            console.error(error);
          });
        },
    },

  created() {
    this.getRestaurants();
  },

}

</script>

<style>

</style>