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
        <form class="row" @submit.prevent="payement()">
            <div class="row custom_padding align-items-center">
                <div class="col-12 col-md-7 mt-3 ">
                    <div class="form_content p-3 rounded">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Il tuo nome *</label>
                            <input minlength="3" type="text" class="form-control"  v-model="name" id="exampleFormControlInput1" placeholder="Inserisci il tuo nome" required>
                            <small id="emailHelp" class="form-text text-muted">Inserisci più di 3 caratteri (a-z,
                            A-Z)</small>
                        </div>  
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email *</label>
                            <input type="email" class="form-control" v-model="email" id="exampleFormControlInput1" placeholder="Inserisci la tua email" required>
                            <small id="emailHelp" class="form-text text-muted">(e.g.
                                            nomeutente@gmail.com)</small>
                        </div>  
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Telefono *</label>
                            <input pattern="[0-9]{10}" type="tel" class="form-control" v-model="telefono" id="exampleFormControlInput1" placeholder="Inserisci il tuo numero di telefono" required>
                            <small id="emailHelp" class="form-text text-muted">ES.3923346509</small>
                        </div>  
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Indirizzo di consegna *</label>
                            <input minlength="5" type="text" class="form-control" v-model="indirizzo" id="exampleFormControlInput1" placeholder="Inserisci il tuo indirizzo" required>
                            <small id="emailHelp" class="form-text text-muted">Inserisci più di 5 caratteri (a-z,
                            A-Z,0-9)</small>
                        </div>  
                    </div>
                </div>
                <div class="col-12 col-md-5">
                    <div>

                    </div>
                    <div class="card mt-3 card-braintree">
                            
                            
                            <div id="dropin-container"></div>
                            <div class="d-flex justify-content-center">
                                <button id="submit-button" type="submit" class="btn btn-success col-3">Acquista</button>
                            </div>
                        </div>
                </div>
            </div>

        </form>
    </div>
  </div>
</template>

<script>
import swal from 'sweetalert';
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
            isSent : false,
            restaurant_id : 0,
            allDone: false,
            tokenApi: "",
        }
    },
    mounted() {
    if (localStorage.cart) {
      let dishesArray = JSON.parse(localStorage.getItem("cart"));
      console.log(dishesArray)
      dishesArray.forEach((element) => {
        this.restaurant_id = element.restaurant_id;
        console.log(this.restaurant_id);
       this.arr.push(element); // Some array I got from async call

        this.dishes = Array.from(new Set(this.arr.map(a => a.id)))
        .map(id => {
        return this.arr.findLast(a => a.id === id)
        }) 
      });
      this.getTotal();
      
    }
    
  
    // let button = document.querySelector('#submit-button');

    braintree.dropin.create({
    authorization: 'sandbox_nd3mh676_bhbntb535qfyp2wx',
    selector: '#dropin-container'
    // }, function (err, instance) {
    //     button.addEventListener('click', function () {
    //             instance.requestPaymentMethod(function (err, payload) {
    //                 // Submit payload.nonce to your server
    //     });
    // })
    });
    axios.get("/api/order/generate").then((result)=>{this.tokenApi = result.data.token; console.log(this.tokenApi)})
  },
    methods:{
        payement(){
            axios.post("/api/order/make/payment", {
                token: 'fake-valid-nonce',
                amount: this.totlaPrice,
            }).then((result)=>{
                window.swal("Good job!", "il pagamento è avenuto con successo", "success");
                if((result.data.success === true)){
                    let order = [];
                this.arr.forEach((element)=>{
                    order.push(JSON.stringify(element));
                })
                axios.post("/api/order/save",{
                    customer_name: this.name,
                    customer_email: this.email,
                    customer_phone_number: this.telefono,
                    customer_address: this.indirizzo,
                    order: order,
                    total_price: this.totlaPrice, 
                    restaurant_id: this.restaurant_id,
                    
                }).then((results)=>console.log(results)).catch(error => {
                    window.swal("ERRORE!", "ALCUNI DEI CAMPI INSERITI NON SONO VALIDI, RIPROVA", "warning");
                    console.log("ERRRR:: ",error.response.data);
                });
                    this.$router.push({path: '/payementSuccess'})
                }
            }).catch(error => {
                    console.log("ERRRR:: ",error.response.data);
                    window.swal("ERRORE!", "ALCUNI DEI CAMPI INSERITI NON SONO VALIDI, RIPROVA", "warning")
                });
        },
        onError(error) {
            let message = error.message;
            // Whoops, an error has occured while trying to get the nonce
        },

        beforeBuy() {
            let my_btn = document.getElementById("v-btn");
            my_btn.click();
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
.card-braintree {
    background-color: #ffbd59;
    padding: 5px;
}
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