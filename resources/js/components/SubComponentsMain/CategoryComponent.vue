<template>
  <!-- CATEGORIE -->
  <section class="mt-5">
    <h1 class="text-center">La selezione di delivebool...</h1>
    <!-- SLIDER CATEGORIE -->
    <div class="scroll d-flex d-md-none">
      <div class="mx-3 my-3">
        <a class="" href="#">
          <img
            class="img-categoria border border-warning border-3 rounded-circle"
            src="../../../../public/assets/images/pizza.png"
            alt=""
          />
        </a>
      </div>
    </div>
    <!-- CARD CATEGORIE -->
    <div class="container my-5 d-none d-md-block">
      <div class="row row-cols-3 row-cols-lg-4">
        <div class="p-2" v-for="category in categories" :key="category.id">
          <div class="card p-2">
            <img :src="category.image" class="card-img-top" alt="..."/>
            <div class="card-body text-center">
              <h5>{{category.name}}</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import axios from 'axios';
export default {
    data: function(){
      return {
          categories: [],
      }
    },
    
    methods: {
    getCategories() {
    
      axios
        .get(`/api/categories`)
        .then((response) => {
          //console.log(response.data.result);
          this.categories = response.data.results;
          console.log(response)
        })
        .catch((error) => {
          console.error(error);
        });
    },
  },

  created() {
    this.getCategories();
  },

}
</script>

<style>
/* MAIN CATEGORIE */
.scroll {
  overflow-x: scroll;
  background-color: #758d75;
}
/* width */
.scroll::-webkit-scrollbar {
  width: 5px;
  height: 8px;
}
/* Track */
.scroll::-webkit-scrollbar-track {
  background: #758d75;
}
/* Handle */
.scroll::-webkit-scrollbar-thumb {
  background: #ffbd59;
  border: 1px;
  border-radius: 25px;
}
.img-categoria {
  width: 90px;
  object-fit: cover;
}
</style>