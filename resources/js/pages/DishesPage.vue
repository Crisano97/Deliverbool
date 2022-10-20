<template>
  <div class="container">
      <div class="row">
        <h1>Questa è la pagina lista piatti</h1>
        <div class="row row-cols-1 row-cols-md-3">
            <DishCard v-for="dish in dishes" :key="dish.id" :dish="dish" :class="dish.visible === 1 ? '' : 'd-none'" />
        </div>
      </div>
    </div>
</template>

<script>
import DishCard from '../components/DishComponent/DishCardComponent.vue';
import axios from "axios";

export default {

  components: {
    DishCard,
  },

  data: function () {
    return {
       dishes:[],
    };
  },

  methods: {
    getDishes() {
      const id = this.$route.params.id;
      axios
        .get(`/api/dishes/${id}`)
        .then((response) => {
          this.dishes = response.data.results;
          console.log(response);
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

<style>

</style>
