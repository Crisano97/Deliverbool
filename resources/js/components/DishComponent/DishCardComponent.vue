<template>
  <div class="p-2">
    <div class="card p-2">
      <img :src="dish.image" class="card-img-top" alt="..." />
      <div class="card-body text-center">
        <h5>{{ dish.name }}</h5>
      </div>
      <button class="btn btn-primary button-plus-dish">
        <i class="fas fa-plus"></i>
      </button>
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
.button-plus-dish {
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
</style>
