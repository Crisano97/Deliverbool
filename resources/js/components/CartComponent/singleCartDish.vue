<template>
  <div class="row">
    <div class="col-12 col-lg-8">
      <div v-if="dishes.length > 0" class="row pt-5 p-3 text-white form_content rounded">
        <div class="row pt-3" v-for="dish in dishes" :key="dish.id">
          <img
            :src="
              isValidUrl(dish.image) ? dish.image : '/storage/' + dish.image
            "
            class="img-fluid col-12 col-md-4 col-lg-5 m_o_fit"
            alt="image"
          />
          <div class="col-12 col-md-5 col-lg-4">
            <h3>{{ dish.name }}</h3>
            <p>{{ dish.ingredients }}</p>
            <p>€ {{ dish.price.toFixed(2) }}</p>
          </div>
          <div class="col-6 col-md-2">
            <label for="form-label">Quantità</label>
            <input
              :id="dish.id"
              class="form-control"
              type="number"
              :value="dish.quantity"
              min="1"
              @change="changeQuantity(dish, dish.id)"
            />
          </div>
          <div class="col-6 col-md-1 trash text-end" @click="removeDish(dish)">
            <i class="fa-solid fa-trash-can"></i>
          </div>

        </div>
      </div>
      <div v-else class="row p-3">
          <h5>Il tuo carrello è vuoto!</h5>
      </div>
    </div>

    <div class="col-12 col-lg-4">
      <div class="m-4 bg-check text-center p-3 rounded">
        <div class="border-bottom">
          <h6>Totale</h6>
          <h4>€ {{ totlaPrice.toFixed(2) }}</h4>
        </div>
        <div class="row">
          <div class="container">
            <div class="p-3">
              <a href="/checkout" class="btn btn-success"
                >Vai al Checkout</a
              >
            </div>
            <div class="p-3">
              <a
                href="/Cart"
                class="btn btn-outline-danger"
                @click="clearCart()"
                >Svuota il carello</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  data: function () {
    return {
      arr: [],
      dishes: [],
      totlaPrice: 0,
    };
  },
  mounted() {
    if (localStorage.cart) {
      let dishesArray = JSON.parse(localStorage.getItem("cart"));
      console.log(dishesArray);
      dishesArray.forEach((element) => {
        this.arr.push(element); // Some array I got from async call

        this.dishes = Array.from(new Set(this.arr.map((a) => a.id))).map(
          (id) => {
            return this.arr.findLast((a) => a.id === id);
          }
        );
      });
      this.getTotal();
    }
  },
  methods: {
    isValidUrl(str) {
      const regex =
        /(?:https?):\/\/(\w+:?\w*)?(\S+)(:\d+)?(\/|\/([\w#!:.?+=&%!\-\/]))?/;
      if (!regex.test(str)) {
        return false;
      } else {
        return true;
      }
    },

    removeDish(dish) {
      const prodIndex = this.dishes.indexOf(dish);
      this.dishes.splice(prodIndex, 1);
      localStorage.setItem("cart", JSON.stringify(this.dishes));
      this.getTotal();
    },
    changeQuantity(dish, dishId) {
      let value = document.getElementById(dishId).value;
      const prodIndex = this.dishes.indexOf(dish);
      this.dishes[prodIndex]["quantity"] = value;
      this.getTotal();
      localStorage.setItem("cart", JSON.stringify(this.dishes));
    },

    // Funzione che svuota il carrello
    clearCart() {
      localStorage.clear("cart");
    },
    getTotal() {
      (this.totlaPrice = 0),
        this.dishes.forEach((element) => {
          let price = element.price;
          let quantity = element.quantity;
          this.totlaPrice += price * quantity;
        });
    },
  },
  created() {},
};
</script>

<style scoped>
.m_o_fit{
  object-fit: contain;
}
.bg-check {
  background-color: #ffbd59;
}
a {
  text-decoration: none;
  color: rgb(255, 255, 255);
}
.trash {
  cursor: pointer;
}
</style>