<template>
  <main>
    <spinner />
    <nav-bar />
    <carrousel />
  </main>
</template>
<script>
import Spinner from "./utilities/Spinner";
import NavBar from "./utilities/NavBar";
import Carrousel from "./utilities/Carrousel";
export default {
  name: "App",
  components: {
    Carrousel,
    NavBar,
    Spinner
  }
}
</script>
