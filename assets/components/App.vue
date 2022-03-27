<template>
  <main>
    <Spinner />
    <NavBar />
    <Carrousel />
    <Home />
  </main>
</template>
<script>
import Spinner from "./utilities/Spinner";
import Home from "./Home";
import NavBar from "./utilities/NavBar";
import Carrousel from "./utilities/Carrousel";
export default {
  name: "App",
  components: {
    Carrousel,
    NavBar,
    Home,
    Spinner
  }
}
</script>
