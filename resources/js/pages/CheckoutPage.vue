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
            <div class="col-12 col-md-6">
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
                        <input type="tel" class="form-control" id="exampleFormControlInput1" placeholder="Inserisci il tuo numero di telefono">
                    </div>  
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Indirizzo di consegna *</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Inserisci il tuo indirizzo">
                    </div>  
                </div>
            </div>
            <div class="col-12 col-md-6 mt-5">
                <div>

                </div>
                <div class="m-4 bg-check text-center p-3 rounded">
                    <div class="border-bottom">
                        <h6>Totale</h6>
                        <h4>30.00$</h4>
                    </div>
                    <div class="pt-2">
                        <div>
                            <span>3°</span>
                            Nome piatto
                        </div>
                        <div>
                            <span>3°</span>
                            Nome piatto
                        </div>
                        <div>
                            <span>3°</span>
                            Nome piatto
                        </div>
                    </div>
                    <div class="pt-2">
                        <button class="btn btn-outline-success">
                            invia l'ordine
                        </button>
                    </div>
                    
                </div>
            </div>

        </div>
    </div>
  </div>
</template>

<script>
export default {

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