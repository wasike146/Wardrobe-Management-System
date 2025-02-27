

<template>
  <div>
      <h1>Wardrobe</h1>
      
      <router-link to="/login">Login</router-link> |
      <router-link to="/register">Register</router-link>
  </div>

</template>


<script>
import ClothingItemList from '../components/ClothingItemList.vue';

export default {
  components: {
      ClothingItemList,
  },
};
</script>