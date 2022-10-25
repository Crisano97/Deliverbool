<template>
    <div>
        <div v-if="isLoading">
           <LoaderComponent />
        </div>
        <div v-else class="container">
            <div class="row">
                <div class="col-3 m-3 p-4 " v-for="restaurant in restaurants" :key="restaurant.id">
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
  .ms_img{
  object-fit: cover;
  transition: 1s;
  height: 10rem;
  width: 10rem;
  &:hover{
      transform: scale(1.08);
  }
}

</style>