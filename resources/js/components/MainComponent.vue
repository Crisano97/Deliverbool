<template>
  <main>
    <HeroComponent />
    <CategoryComponent @click="getFilterRestaurant" />
    <section class="container py-5" :class=" restaurantsFilter != '' ? '' : 'd-none' ">
      <h1 class="text-center">I nostri partner....</h1>
      <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3 justify-content-center">
        <RestaurantComponent v-for="restaurant in restaurantsFilter" :key="restaurant.id" :restaurant="restaurant"/>
      </div>
    </section>
    <DownloadAppComponent />
    <section class="container py-5">
      <h1 class="text-center">I partner più amati....</h1>
        <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3  justify-content-center">
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
import axios from "axios";

export default {
  components: {
    HeroComponent,
    CategoryComponent,
    DownloadAppComponent,
    RestaurantComponent,
  },
  data: function () {
    return {
      restaurants: [],
      restaurantsFilter: [],
      categoryRestaurant: '',
    };
  },
  methods: {
    getFilterRestaurant(needle){
      this.restaurantsFilter = needle;
      console.log(this.restaurantsFilter);
    },
    // getRestaurantsFilter(category) {
    //   category = this.$route.params.category;
    //   console.log(category);
    //   axios.get(`/api/restaurants/${category}`).then((response) => {
    //     this.restaurantsFilter = response.data.results;
    //     console.log(this.restaurants);
    //   });
    // },

    getRestaurantsSponsor() {
      axios
        .get("/api/restaurants/sponsor")
        .then((response) => {
          //console.log(response.data.result);
          this.restaurants = response.data.results;
          console.log(this.restaurants);
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