<template>
  <!-- CATEGORIE -->
  <section class="mt-5">
    <h1 class="text-center">La selezione di delivebool...</h1>
    <!-- CARD CATEGORIE -->
    <div class="container my-5 d-none d-md-block">
      <div class="row row-cols-3 row-cols-lg-4">
        <div class="p-2" v-for="(category, index) in categories" :key="`category-${index}`">
          <input type="checkbox" name="categories[]" :value="category.name" v-model="form.categories" @change.prevent="getRestaurants(`${url}restaurants/searchCheck`,form) "/>
          <label for="">
            <div class="card p-2">
              <img :src="category.image" class="card-img-top" :alt="category.name">
              <div class="card-body text-center">
                <h5>{{category.name}}</h5>
              </div>
            </div>  
          </label>
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
                    this.restaurants = result.data.results.data;
                    this.pages.next_page_url =
                        result.data.results.next_page_url;
                    this.pages.prev_page_url =
                        result.data.results.prev_page_url;
                    this.loading = false;
                    console.log(this.restaurants)
                })
                .catch((error) => {
                    console.log(error);
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

.card img{
  height: 11rem;
  object-fit: cover;
}
</style>