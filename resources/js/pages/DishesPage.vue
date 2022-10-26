<template>
  <div>
    
    <div >
      <div v-if="isLoading">
       <LoaderComponent/>
      </div>
         <!-- RISTORANTE FORMA -->
      <div v-else class="bg-rest-container py-4">
        <div class="container ">
           <div class="row">
            <div class="col-12 col-md-5">
                <SingleRestaurantComponent :restaurant="restaurant"/>
            </div>
            <div class="col-12 col-md-7 d-flex align-items-center">

              <div>
                <h1 class="text-white fst-italic">Grazie per aver scelto il nostro ristorante! 
                  <span class="d-block my-2">Le nostre categorie : </span>
                  <span v-for="category in categories" :key="category.id" class="ml-3 text-brand">
                      &bull; {{ category.name }} 
                  </span>
                </h1>
                <h3 class="text-white pt-3"><span class="fw-bolder ">Indirizzo: </span>{{ restaurant.address }}</h3>
              </div>
                
            </div>
           </div>
        </div>
      </div>

      <div class="container custom_padding">
        <!-- <h1>Questa è la pagina lista piatti</h1> -->
        <div class="row p-4">
            <div v-if="dishes.length > 0" class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
                <DishCard v-for="dish in dishes" :key="dish.id" :dish="dish" :class="dish.visible === 1 ? '' : 'd-none'"  @addToCart="addToCart($event)" />
            </div>
            <div v-else class="text-center pt-5 custom_padding">
              <h1>Al momento non sono disponibili piatti per questo ristorante</h1>
            </div>
        </div>
      </div>

    </div>
  </div>
</template>

<script>
import DishCard from '../components/DishComponent/DishCardComponent.vue';
import RestaurantComponent from '../components/SubComponentsMain/RestaurantComponent.vue';
import SingleRestaurantComponent from '../components/DishComponent/SingleRestaurantComponent.vue';
import LoaderComponent from '../components/loader/LoaderComponent.vue';
import swal from 'sweetalert';
import axios from "axios";

export default {

  components: {
    DishCard,
    RestaurantComponent,
    SingleRestaurantComponent,
    LoaderComponent
  },

  data: function () {
    return {
      isLoading: true,
       dishes:[],
       restaurant:[],
       categories:[],
       cart: [],
        length: 0,
        total: 0,
    };
  },
   mounted(){
    if (localStorage.cart) {
            this.cart = JSON.parse(localStorage.getItem("cart"));
        };
  },

  methods: {
    getDishes() {
      const id = this.$route.params.id;
      axios
        .get(`/api/dishes/${id}`)
        .then((response) => {
          console.log(response.data.results)
          if (response.data.results.dishes) {
            this.dishes = response.data.results.dishes;
            this.restaurant = response.data.results.restaurant,
            this.categories = response.data.results.categories,
            this.isLoading = false;
          } else {
            this.restaurant = response.data.results.restaurant,
            this.categories = response.data.results.categories,
            this.isLoading = false;
          }
          
          console.log(this.categories);
        //   this.isLoading = false;
        })
        .catch((error) => {
          console.error(error);
        });
    },

    addToCart(dish) {
                //? fixa il local storage al primo avvio o al clear in quanto risulta null
                if (this.cart == null) {
                    this.cart = [];
                }
                //? se il carrello e' vuoto pusha il piatto
                if (this.cart.length == 0) {
                    this.cart.push(dish);
                    dish.quantity = 1;
                    localStorage.setItem("cart", JSON.stringify(this.cart));
                     this.$emit('click', this.cart);
                }
                //!  se il carrello non e' vuoto controlliamo che stiamo ordinando dallo stesso ristorante in caso contrario resettiamo il cart e pushamo il piatto
                else if (this.cart[0].restaurant_id != this.$route.params.id) {
                      const result = window.swal({
                      title: "E\' già presente un carello per un diverso ristorante!",
                      text: "Facendo click su OK il tuo carello verrà svuotato",
                      icon: "warning",
                      buttons: true,
                      dangerMode: true,
                    })
                    .then((willDelete) => {
                      if (willDelete) {
                        swal("Il carello è stato aggiornato ", {
                          icon: "success",
                        });
                          this.cart = [];
                        localStorage.clear();
                        this.cart.push(dish);
                         dish.quantity = 1;
                        localStorage.setItem("cart", JSON.stringify(this.cart));
                        this.$emit('click', this.cart);
                      } else {
                        swal("Il tuo carello è al sicuro! Concludi il tuo ordine");
                      }
                    });
                    // const result = window.confirm(
                    //     'E\' già presente un carello per un diverso ristorante; Puoi ordinare da un solo ristorante , facendo click su OK il tuo carello verrà svuotato'
                    // );
                    // if (result) {
                    //     this.cart = [];
                    //     localStorage.clear();
                    //     this.cart.push(dish);
                    //      dish.quantity = 1;
                    //     localStorage.setItem("cart", JSON.stringify(this.cart));
                    //     this.$emit('click', this.cart);
                    // }
                }
                //! pushamo il piatto aggiuntivo
                else {
                    this.cart.push(dish);
                     dish.quantity = 1;
                    localStorage.setItem("cart", JSON.stringify(this.cart));
                    this.$emit('click', this.cart);
                }
               
                // this.total = this.total + dish.price;
                // localStorage.setItem("total", this.total);
            },
  },

  created() {
    this.getDishes();
    
  },
};
</script>

<style scoped>
.my_h{
  height: 30vh;
}
.bg-rest-container{
  background-color: #758d75;
}
.text-brand{
  color: #ffbd59;
}

</style>
