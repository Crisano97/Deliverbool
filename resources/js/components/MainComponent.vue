<template>
  <main>
    <HeroComponent />
    <CategoryComponent />
    <DownloadAppComponent />
    <RestaurantComponent />
  </main>
</template>

<script>
import HeroComponent from './SubComponentsMain/HeroComponent.vue';
import CategoryComponent from './SubComponentsMain/CategoryComponent.vue';
import DownloadAppComponent from './SubComponentsMain/DownloadAppComponent.vue';
import RestaurantComponent from './SubComponentsMain/RestaurantComponent.vue';

export default {
  components: {
    HeroComponent,
    CategoryComponent,
    DownloadAppComponent,
    RestaurantComponent
  }
};
</script>

<style>

</style>