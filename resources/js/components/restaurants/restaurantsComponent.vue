<template>
    <div>
        <div v-if="isLoading">
           <LoaderComponent />
        </div>
        <div v-else class="container py-4">
            <h1 class="text-center pt-2 text-uppercase">I nostri partner</h1>
            <div class="row row-cols-3 justify-content-center">
                <div class="my_fit mb-4" v-for="restaurant in restaurants" :key="restaurant.id">
                    <RestaurantComponent class="ms_img" :restaurant="restaurant"/>
                </div>
           </div>
        </div>
    </div>
</template>

<script>
import RestaurantComponent from '../SubComponentsMain/RestaurantComponent.vue';
import LoaderComponent from '../loader/LoaderComponent.vue'
import axios from 'axios';

export default {
   components:{
    LoaderComponent,
    RestaurantComponent
   },

   data: function(){
    return{
        restaurants: [],
        isLoading: true,
    }
   },

   methods:{
    getRestaurants(){
        axios.get('api/allrestaurants').then((response) =>{
            this.restaurants = response.data.results;
            console.log(this.restaurants);
            this.isLoading = false;
        })
    },

    isValidUrl(str) {
            const regex = /(?:https?):\/\/(\w+:?\w*)?(\S+)(:\d+)?(\/|\/([\w#!:.?+=&%!\-\/]))?/;
            if(!regex .test(str)) {
                return false;
            } else {
                return true;
            }
    },
   },

   created(){
    this.getRestaurants();
   }
}
</script>

<style lang='scss' scoped>
.my_fit{
  width: fit-content;
}
  .ms_img{
  object-fit: cover;
  transition: 1s;
  &:hover{
      transform: scale(1.08);
  }
}

</style>