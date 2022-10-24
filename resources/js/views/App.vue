<template>
  <section>
       <HeaderComponent :dish="dish"/>
       <router-view @click="getNDish()"></router-view>
       <FooterComponent />
  </section>
</template>
<script>
import HeaderComponent from '../components/HeaderComponent.vue';
import FooterComponent from '../components/FooterComponent.vue';
export default {
    components : {
        HeaderComponent,
        FooterComponent,
    },
    data: function(){
      return{
        dish:[],
      }
    },
    methods:{
      getNDish(needle){
        this.dish.push(needle);
      }
    }
}
</script>

<style>
</style>