<template>
  <header>
    <!-- <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand logo-brand" href="/">
          <img
            class="img-brand border border-warning border-3 rounded-circle"
            src="../../../public/assets/images/DElivebool.png"
            alt=""
          />
          DeliveBool
        </a>
        
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <div class="d-flex justify-content-end w-100">
            <form class="d-flex" role="search">
              <div>
                <a href="/login">
                  <i class="fa-solid fa-user p-2 icon"></i>
                </a>
              </div>
              <div>
                <a href="/Cart">
                  <i class="fa-solid fa-store p-2 icon"></i>
                </a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </nav> -->

    <nav id="anchorHeader" class="navbar navbar-expand-lg px-4">
      <div class="container-fluid">
        <a id="anchorHome" class="navbar-brand logo-brand d-flex align-items-center" href="/">
          <img
            class="img-brand border border-warning border-3 rounded-circle"
            src="../../../public/assets/images/DElivebool.png"
            alt=""
          />
          <span class="ml-2">DeliveBool</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav d-flex justify-content-end w-100">
            <a class="nav-link" href="/allrestaurants">
                  <i class="fa-solid fa-utensils p-2 icon"></i>Ristoranti
            </a>
            <a class="nav-link" href="/login">
                  <i class="fa-solid fa-user p-2 icon"></i>Utente
            </a>
            <a class="nav-link" href="/Cart">
              <i class="fa-solid fa-store p-2 icon position-relative">
                <div class="position-absolute top-0 end-0">
                  <div v-if="dish.length > 0" class="cart-value border border-warning rounded-circle d-flex justify-content-center">{{ dish.length }}</div>
                  <div v-else class="cart-value border border-warning rounded-circle d-flex justify-content-center">{{ dishes.length }}</div>
                </div>
              </i>Carrello
            </a>
          </div>
        </div>
      </div>
    </nav>
  </header>
</template>

<script>
export default {
  props:{
    dish: Array,
  },
  data: function(){
    return {
      arr:[],
      dishes:[],
    }
  },
  mounted(){
    if (localStorage.cart) {
      let dishesArray = JSON.parse(localStorage.getItem("cart"));
      console.log(dishesArray)
      dishesArray.forEach((element) => {
       this.arr.push(element); // Some array I got from async call

        this.dishes = Array.from(new Set(this.arr.map(a => a.id)))
        .map(id => {
        return this.arr.findLast(a => a.id === id)
        }) 
      });
    }
  }
}
</script>

<style scoped>
header {
  background-color: #ffbd59;
}
.logo-brand {
  font-family: 'Livvic', sans-serif;
  font-size: x-large;
}
.img-brand {
  width: 50px;
  object-fit: cover;
}
.icon {
  font-size: 20px;
  color: black;
}
.cart-value{
  color: black;
  background: #758d75;
  margin-left: 8px;
  font-size: 13px;
  padding: 2px;
  width: 17px;
}
</style>