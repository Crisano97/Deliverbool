<template>
  <!-- CATEGORIE -->
  <section >
    
    <!-- CARD CATEGORIE -->



        <!-- SLIDER CATEGORIE -->
        <div class="custom_container py-3 text-white d-md-none">
          <div class="scroll d-flex ">
              <div class="p-2 py-3" v-for="(category, index) in categories" :key="`category-${index}`">
               
                <label :for="category.id">
                  <div class="custom_category">
                    <img :src="category.image" class="img-fluid img-categoria-slider rounded-circle"  :class="selectedCategories.includes(category.id) ? 'border_golden active_color' : 'border_custom'">
                  </div>
                  <div class="m-1 text-center" >
                    <h5>{{category.name}}</h5>
                  </div> 
                </label>
                <input :id="category.id" class="mb-2 d-none" type="checkbox" name="categories[]" :value="category.id" v-model="selectedCategories" @change="getSelectedCategories()"  />
              </div>
            
    
          </div>

        </div>

    <div v-if="loading">
      <LoaderComponent />
    </div>
    <div v-else class="container my-5 d-none d-md-block">
      <div class="row row-cols-4 row-cols-lg-6">
          <div class="p-2 "  v-for="(category, index) in categories" :key="`category-${index}`">
            <div class="card" :class="selectedCategories.includes(category.id) ? 'border_golden' : 'border_custom' ">
              <label :for="category.id">
                  <div>
                    <img :src="category.image" class="card-img-top" :alt="category.name">
                  </div>
                  <div class="pt-4 text-center">
                    <h6>{{category.name}}</h6>
                  </div> 
              </label>
            <input :id="category.id" class="mb-2 d-none" type="checkbox" name="categories[]" :value="category.id" v-model="selectedCategories" @change="getSelectedCategories()" />
            </div>
          </div>
      </div>
    </div>
  </section>
</template>

<script>
import LoaderComponent from '../loader/LoaderComponent.vue';
import axios from 'axios';
export default {
  components:{
     LoaderComponent
  },
    data() {
        return {
            loading: true,
            url: "http://127.0.0.1:8000/api/v1/",
            restaurants: null,
            categories: [],
            restaurantsFilter:[],
            selectedCategories: [],
            click: false,
            categoryClicked: '',

        };
    },
    
    methods: {
    getCategories() {
    
      axios
        .get(`/api/categories`)
        .then((response) => {
          //console.log(response.data.result);
          this.categories = response.data.results;
          this.loading = false;
        })
        .catch((error) => {
          console.error(error);
        });
    },

          getSelectedCategories() {
            axios.get(`/api/restaurants?categories=${this.selectedCategories}`)
            
            .then((response) => {
                if(response.data.success) {
                    this.restaurantsFilter = response.data.results;
                }
                this.$emit('click', this.restaurantsFilter)
                console.log(this.selectedCategories)
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
div.custom_container{
  background-color: #758d75;
}
.scroll {
  overflow-x: scroll;
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

.active_color{
  color: #ffbd59;
}

.border_golden{
  border: 3px solid #ffbd59;
}
.img-categoria-slider {
  height: 10rem; 
  width: 10rem;
  object-fit: cover;
}

.img-categoria {
  width: 90px;
  object-fit: cover;
}

.card img{
  height: 11rem;
  object-fit: cover;
}


.custom_category{
  width: 10rem;
  /* object-fit: cover; */
}

.border_custom{
  border: 3px solid white ;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px,
    rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
}

</style>