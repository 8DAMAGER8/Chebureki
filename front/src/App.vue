<script setup>
import { RouterLink, RouterView } from 'vue-router'
</script>

<template>
  <header>
        <nav class="navbar nav justify-content-center" style="background-color: #e3f2fd;">
            <form class="container-fluid justify-content-start">
                <RouterLink to="/" class="btn btn-outline-success me-2" >Список чебуреков</RouterLink>
                <RouterLink to="/about" class="btn btn-outline-success me-2" >Добавить чебурек</RouterLink>
            </form>
        </nav>
  </header>

  <RouterView />
</template>

<style scoped>
header {
  line-height: 1.5;
  max-height: 100vh;
}



@media (min-width: 1024px) {
  header {
    display: flex;
    place-items: center;
    padding-right: calc(var(--section-gap) / 2);
  }


  header .wrapper {
    display: flex;
    place-items: flex-start;
    flex-wrap: wrap;
  }
}
</style>
