<template>
  <div id="app">
    <!-- Optional: Add a conditional rendering for the navbar if you want to hide it on certain pages -->
    <nav v-if="showNavbar" class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        
      </div>
    </nav>

    <!-- Router view to render the matched component -->
    <router-view />
  </div>
</template>

<script>
export default {
  name: 'App',
  computed: {
    showNavbar() {
      // Hide navbar on login and register pages
      return this.$route.name !== 'login' && this.$route.name !== 'register';
    },
  },
};
</script>

<style>
/* Global styles */
#app {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
}

.navbar {
  margin-bottom: 20px;
}
</style>