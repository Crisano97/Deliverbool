<template>
  <div class="p-2">
    <div class="card p-3 h-100">
      <div class="box_iamge">
        <img :src="isValidUrl(dish.image) ? dish.image : '/storage/' + dish.image " class="card-img-top" alt="image-post">
      </div>
      <div class="card-body p-0 mt-2">
        <h5 class="fw-bold text-center">{{ dish.name }}</h5>
        <p class="text-start"><span class="fw-normal fw-semibold">Ingredienti:</span> {{ dish.ingredients }} </p>
      </div>
        <div class="d-flex justify-content-between">
          <p class="m-0 align-self-center ">€ {{ dish.price.toFixed(2) }}</p>
          <button class="btn btn-primary button-plus" @click="addItemToCart(dish)">
            <i class="fas fa-plus"></i>
          </button>
        </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    dish: Object,
  },

  data: function () {
    return {
      cart: [],
      totalPrice: 0,
      loaded: true,
      totalDish:0
    };
  },

  methods: {
     addItemToCart(dish){
      if(!this.cart.includes(dish)){
        this.cart.push(dish);
        dish.quantity = 1;
        this.totalDish+=dish.price;
        this.totalPrice+=dish.price;
      }      
      else{
        dish.quantity++;
        this.totalDish+=dish.price;
        this.totalPrice+=dish.price;
      }     
       this.$emit('click', this.cart)
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
 
    }
};
</script>

<style lang="scss" scoped>
.button-plus {
  color: black;
  background-color: rgb(56, 193, 114, 0.2);
  color: #38c172;
  border-radius: 20px;
  border: none;
  &:hover {
    background-color: #38c172;
    color: white;
  }
}

img{
  object-fit: contain;
  transition: 1s;
}
.card:hover img{
  transform: scale(1.08);
}
</style>
