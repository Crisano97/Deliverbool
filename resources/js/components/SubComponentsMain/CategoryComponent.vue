<template>
  <!-- CATEGORIE -->
  <section class="mt-5">
    <div class="text_category">
      <h1 class="text-center">La selezione di delivebool...</h1>
    </div>
    <!-- CARD CATEGORIE -->
    <div class="container my-5 d-none d-md-block">
      <div class="row row-cols-3 row-cols-lg-4">
          <div class="p-2" v-for="(category, index) in categories" :key="`category-${index}`">
            <div class="card">
            <label for="">
                <div>
                  <img :src="category.image" class="card-img-top" :alt="category.name">
                </div>
                <div class="m-1 text-center">
                  <h5>{{category.name}}</h5>
                </div> 
            </label>
            <input class="mb-2" type="checkbox" name="categories[]" :value="category.name" v-model="form.categories" @change="$emit('change', restaurantsFilter)" @change.prevent="getRestaurants(`${url}restaurants/searchCheck`,form) "/>
            </div>
          </div>
      </div>
    </div>
  </section>
</template>

<script>
import axios from 'axios';
export default {
    data() {
        return {
            loading: false,
            url: "http://127.0.0.1:8000/api/v1/",
            restaurants: null,
            categories: [],
            restaurantsFilter:[],
            pages: {
                prev_page_url: null,
                next_page_url: null,
            },
            form: {
                categories: [],
            },
        };
    },
    
    methods: {
    getCategories() {
    
      axios
        .get(`/api/categories`)
        .then((response) => {
          //console.log(response.data.result);
          this.categories = response.data.results;
          
        })
        .catch((error) => {
          console.error(error);
        });
    },

        getRestaurants(url, param) {
            this.loading = true;
            axios.get(url, { mode: "cors", params: param })
                .then((result) => {
                    this.restaurantsFilter = result.data.results.data;
                    this.pages.next_page_url =
                        result.data.results.next_page_url;
                    this.pages.prev_page_url =
                        result.data.results.prev_page_url;
                    this.loading = false;
                    console.log(this.restaurantsFilter)
                })
                .catch((error) => {
                    console.log(error);
                });
        },

    //   getRestaurantsFilter(category) {
    //   category = this.$route.params.category;
    //   console.log(category);
    //   axios.get(`/api/restaurants/${category}`).then((response) => {
    //     this.restaurantsFilter = response.data.results;
    //     console.log(this.restaurantsFilter);
    //   });
    // },

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

.card img{
  height: 11rem;
  object-fit: cover;
}
</style>