<template>
  <main>
    <HeroComponent />
    <div id="anchorCategories"></div>
    <CategoryComponent @click="getFilterRestaurant" />
    <section v-if="restaurantsFilter.length != 0 " class="container py-5" :class=" restaurantsFilter != '' ? '' : 'd-none' ">
      <h1 class="text-center">I nostri partner corrispondenti alla tua ricerca:</h1>
      <div v-if="isLoading">
        <LoaderComponent /> 
      </div>
      <div v-else class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3 justify-content-center">
        <RestaurantComponent v-for="restaurant in restaurantsFilter" :key="restaurant.id" :restaurant="restaurant"/>
      </div>
    </section>
    <section v-else>
      <div class="container my-5 text-center">
        <h1>Nessun Risultato</h1>
      </div>
    </section>
    <DownloadAppComponent />
    <div id="anchorPartner"></div>
    <section class="container py-5">
      <h1 class="text-center">I partner più amati....</h1>
      <div v-if="isLoading">
        <LoaderComponent /> 
      </div>
      <div v-else class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3  justify-content-center">
        <RestaurantComponent v-for="restaurant in restaurants" :key="restaurant.id" :restaurant="restaurant"/>
      </div>
      </section>
  </main>
</template>

<script>
import HeroComponent from "./SubComponentsMain/HeroComponent.vue";
import CategoryComponent from "./SubComponentsMain/CategoryComponent.vue";
import DownloadAppComponent from "./SubComponentsMain/DownloadAppComponent.vue";
import RestaurantComponent from "./SubComponentsMain/RestaurantComponent.vue";
import LoaderComponent from '../components/loader/LoaderComponent.vue';
import axios from "axios";

export default {
  components: {
    HeroComponent,
    CategoryComponent,
    DownloadAppComponent,
    RestaurantComponent,
    LoaderComponent,
  },
  data: function () {
    return {
      isLoading: true,
      restaurants: [],
      restaurantsFilter: [],
      categoryRestaurant: '',
    };
  },
  methods: {
    getFilterRestaurant(needle){
      this.restaurantsFilter = needle;
      console.log(needle)
    },
     getRestaurantsFilter(category) {
      category = this.$route.params.category;
       console.log(category);
       axios.get(`/api/restaurants/${category}`).then((response) => {
         this.restaurantsFilter = response.data.results;
      });
      console.log(this.restaurantsFilter)
     },

    getRestaurantsSponsor() {
      axios
        .get("/api/restaurants/sponsor")
        .then((response) => {
          //console.log(response.data.result);
          this.restaurants = response.data.results;
          this.isLoading = false;
        })
        .catch((error) => {
          console.error(error);
        });
    },
  },

  created() {
    this.getRestaurantsSponsor();
  },
};
</script>

<style>
</style>