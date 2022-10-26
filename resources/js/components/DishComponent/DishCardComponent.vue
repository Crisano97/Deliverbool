<template>
  <div v-if="dish.visible != 0" class="p-2">
    <div class="card p-3 h-100">
      <div class="box_image">
        <img :src="isValidUrl(dish.image) ? dish.image : '/storage/uploads/' + dish.image " class="card-img-top" alt="image-post">
      </div>
      <div class="card-body p-0 mt-2">
        <h5 class="fw-bold text-center">
          {{ dish.name }}
        </h5>
          <span class="box_popUp">
            <span class="popUpText" :id="dish.id">Per scegliere la quantità dei piatti vai al carello</span>
          </span>
        <p class="text-start"><span class="fw-normal fw-semibold">Ingredienti:</span> {{ dish.ingredients }} </p>
      </div>
        <div class="d-flex justify-content-between">
          <p class="m-0 align-self-center ">€ {{ dish.price.toFixed(2) }}</p>
          <button class="btn btn-primary button-plus" @click="$emit('addToCart', dish), popUp()">
            <i class="fas fa-plus"></i>
          </button>
        </div>
        
    </div>
  </div>
  <div v-else class="p-2">
    <div class="card p-3 h-100 border-danger border border-3 ">
      <div class="box_image">
        <img :src="isValidUrl(dish.image) ?  dish.image : '/storage/uploads/' + dish.image " class="card-img-top" alt="image-post">
      </div>
      <div class="card-body p-0 mt-2">
        <h5 class="fw-bold text-center">
          {{ dish.name }}
        </h5>
          <span class="box_popUp">
            <span class="popUpText" :id="dish.id">Per scegliere la quantità dei piatti vai al carello</span>
          </span>
        <p class="text-start"><span class="fw-normal fw-semibold">Ingredienti:</span> {{ dish.ingredients }} </p>
      </div>
        <div class="d-flex justify-content-between">
          <p class="m-0 align-self-center"><del> € {{ dish.price.toFixed(2) }}</del></p>
          <!-- <button class="btn btn-primary button-plus" @click="$emit('addToCart', dish), popUp()">
            <i class="fas fa-plus"></i>
          </button> -->
          <span class="fst-italic">Prodotto non disponibile</span>
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
      loaded: true,
        length: 0,
        total: 0,
    };
  },
mounted(){
  
  },
  methods: {
      addToCart(dish) {
                //? fixa il local storage al primo avvio o al clear in quanto risulta null
                if (this.cart == null) {
                    this.cart = [];
                }
                //? se il carrello e' vuoto pusha il piatto
                if (this.cart.length == 0) {

                    this.cart.push(dish);
                    dish.amount = 1
                    console.log(this.cart)
                    localStorage.setItem("cart", JSON.stringify(this.cart));
                }
                //!  se il carrello non e' vuoto controlliamo che stiamo ordinando dallo stesso ristorante in caso contrario resettiamo il cart e pushamo il piatto
                else if (this.cart[0].restaurant_id != this.$route.params.id) {
                    const result = window.confirm(
                        "E' già presente un carello per un diverso ristorante; Puoi ordinare da un solo ristorante , facendo click su OK il tuo carello verrà svuotato"
                    );
                    if (result) {
                        this.cart = [];
                        localStorage.clear();
                        this.cart.push(dish);
                        dish.amount = 1
                        localStorage.setItem("cart", JSON.stringify(this.cart));
                     
                    }
                }
                //! pushamo il piatto aggiuntivo
                else {
                    this.cart.push(dish);
                    dish.amount = 1
                    localStorage.setItem("cart", JSON.stringify(this.cart));
                    console.log(this.cart)
                }
                // this.total = this.total + dish.price;
                // localStorage.setItem("total", this.total);
                this.$emit('click', this.cart);
            },
    isValidUrl(str) {
            const regex = /(?:https?):\/\/(\w+:?\w*)?(\S+)(:\d+)?(\/|\/([\w#!:.?+=&%!\-\/]))?/;
            if(!regex .test(str)) {
                return false;
            } else {
                return true;
            }
    },
    popUp(){
      let popup = document.getElementById(this.dish.id);
      popup.classList.add("show");
      if (popup.classList.contains("show")){
        setTimeout(() => popup.classList.remove("show"), 5000);
      }
    }
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

.card{
  box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px,
    rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
}

.box_popUp{
  margin-top: 5px;
  text-align: end;
  font-size: 13px;
  color: #ffbd59;
}

.popUpText {
  display: none;
}
.popUpText.show {
  display: block;
}
</style>
