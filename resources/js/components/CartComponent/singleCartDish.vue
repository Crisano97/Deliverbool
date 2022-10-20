<template>
   <div class="row pt-5 p-3 text-white">
            <img class="img-fluid col-3" src="" alt="">
            <div class="col-6">
                <h3>Nome Prodotto</h3>
                <p>Ingredienti</p>
                <p>Descrizione</p>
            </div>
            <div class="col-3">
                    <label for="form-label">Quantità</label>
            <input class="form-control" type="number" value="1" min="1">
        </div>

    </div>
</template>

<script>
export default {
    data: function () {
    return {
       dishes:[],
    };
  },

  methods: {
    getDishes() {
      const id = this.$route.params.id;
      axios
        .get(`/api/dishes/${id}`)
        .then((response) => {
          this.dishes = response.data.results.dishes;
          this.restaurant = response.data.results.restaurant,
          this.categories = response.data.results.categories
          console.log(this.categories);
        //   this.isLoading = false;
        })
        .catch((error) => {
          console.error(error);
        });
    },
  },
  created() {
    this.getDishes();
  },
};

</script>

<style>

</style>