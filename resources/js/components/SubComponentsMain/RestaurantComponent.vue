<template>
  <!-- CARD RISTORANTI IN VOGA -->
    <div class="m_fit">
        <div class="px-4 my-5">
          <router-link class="text-black" :to="'/dishes/' + restaurant.id">
            <div class="rest-card position-relative">
              <img  :src="isValidUrl(restaurant.image) ? restaurant.image : '/storage/' + restaurant.image " class="card-img-top border rounded-pill" alt="image-restaurant">
              <div
                class="card position-absolute top-100 start-50 translate-middle card-title text-center">
                <h5>{{ restaurant.name }}</h5>
                <div>
                  <span v-for="category in restaurant.categories" :key="category.id">
                    {{category.name}}
                  </span>
                </div>
              </div>
            </div>
          </router-link>
        </div>
    </div>
        <!-- CARD -->
</template>

<script>
export default {
  props:{
    restaurant : Object,
  },
  data: function(){
    return {
      products_in_cart : [],
      cart : [],
    }
  },
 
  methods:{
    isValidUrl(str) {
            const regex = /(?:https?):\/\/(\w+:?\w*)?(\S+)(:\d+)?(\/|\/([\w#!:.?+=&%!\-\/]))?/;
            if(!regex .test(str)) {
                return false;
            } else {
                return true;
            }
        },

  }
  
}
</script>

<style>
.rest-card{
  width: 15rem;
  height: 15rem;
}
/* CARD RISTORANTE */
.rest-card img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px,
    rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
}
.card-title {
  width: 14rem;
  padding: 0.5rem;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px,
    rgba(0, 0, 0, 0.3) 0px 30px 60px -30px,
    rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
}

.m_fit{
  width: fit-content;
}

</style>