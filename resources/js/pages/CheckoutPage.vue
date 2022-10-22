<template>
  <div class="form_page">
       <div class="order-controller container mt-5">
        <nav class="row row-cols-2">
            <h3 class="border-bottom">
                <a href="/Cart">
                     Il tuo ordine
                </a>
            </h3>
            <h3 class="border-bottom border-warning">
                <a href="/Checkout">
                     Vai al Checkout
                </a>
            </h3>
        </nav>

         <!-- COMPONENT CHECKOUT -->
        <div class="row">
            <form @submit.prevent="sendOrderEmail()" class="row">
                <div class="col-12 col-md-7">
                    <div class="form_content p-3 rounded my-5">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Il tuo nome *</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Inserisci il tuo nome" required>
                        </div>  
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email *</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Inserisci la tua email" required>
                        </div>  
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Telefono *</label>
                            <input type="tel" class="form-control" id="exampleFormControlInput1" placeholder="Inserisci il tuo numero di telefono" required>
                        </div>  
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Indirizzo di consegna *</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Inserisci il tuo indirizzo" required>
                        </div>  
                    </div>
                </div>
                <div class="col-12 col-md-5 mt-5">
                    <div>

                    </div>
                    <div class="m-4 bg-check text-center p-3 rounded">
                        <div class="border-bottom">
                            <h6>Totale</h6>
                            <h4>{{ totlaPrice.toFixed(2)}}</h4>
                        </div>
                        <div class="pt-2">
                            <div v-for="dish in dishes" :key="dish.id">
                                <span>{{dish.quantity}}°</span>
                                {{ dish.name }}
                            </div>
                        </div>
                        <div class="pt-2">
                            <button class="btn btn-outline-success" :disabled="isSent">
                                invia l'ordine
                            </button>
                        </div>
                        
                    </div>
                </div>
            </form>

        </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
    data:function(){
        return{
            name : '',
            email : '',
            telefono : '',
            indirizzo : '',
            arr: [],
            dishes: [],
            totlaPrice : 0,
            isSent : false
        }
    },
    mounted() {
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
      this.getTotal();
      
    }
  },
    methods:{
        sendOrderEmail(){
            console.warn('invio form');
            this.isSent = true;

            axios.post('api/checkout', {
                // 'name' : this.name,
                // 'email' : this.email,
                // 'telefono' : this.telefono,
                // 'indirizzo' : this.indirizzo,
            }).then((response)=>{
                console.log(response);
            }).catch((error)=>{
                console.warn(error);
            })
        },
          getTotal(){
        this.totlaPrice = 0,
        this.dishes.forEach(element => {
            let price = element.price 
            let quantity = element.quantity
            this.totlaPrice += price * quantity;
            
        })
        
    }
    }
}
</script>

<style scoped>
.bg-check{
    background-color: #ffbd59;
}
a{
    text-decoration: none;
    color: rgb(255, 255, 255);
}

.form_page{
    background: linear-gradient(rgba(0,0,0,.5), rgba(141, 140, 140, 0.5)), url("../../../public/assets/images/food-images-pictures-1600x1016.jpg");
    background-repeat: no-repeat;
    background-size: cover; 
    display: flex;
    align-items: center;
    height: 100%;
} 
</style>