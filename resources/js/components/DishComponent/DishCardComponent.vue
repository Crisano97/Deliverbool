<template>
  <div class="p-2">
    <div class="card p-3 h-100">
      <div class="box_iamge">
       <img :src="dish.image" class="card-img-top" alt="..."  />
      </div>
      <div class="card-body p-0 mt-2">
        <h5 class="fw-bold text-center">{{ dish.name }}</h5>
        <p class="text-start"><span class="fw-normal fw-semibold">Ingredienti:</span> {{ dish.ingredients }} </p>
      </div>
        <div class="d-flex justify-content-between">
          <p class="m-0 align-self-center ">€ {{ dish.price.toFixed(2) }}</p>
          <button class="btn btn-primary button-plus">
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

    };
  },

  methods: {
   
  },
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
