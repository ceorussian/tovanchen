<template>
  <div class="wrapper">
    <SidebarTop></SidebarTop>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Chat realtime</span>
      </a>

      <!-- Sidebar -->
      <SidebarLeft></SidebarLeft>
      <!-- /.sidebar -->
    </aside>

    <div class="content-wrapper">
      <section class="content pt-3">
        <div class="container-fluid  card pa-3">
          <router-view></router-view>
        </div>
        
      </section>
      <!-- /.content -->
    </div>
    <Footer></Footer>
  </div>
</template>
<script>
import SidebarTop from "./layouts/SidebarTop";
import SidebarLeft from "./layouts/SidebarLeft";
import Footer from "./layouts/Footer";
import { mapGetters, mapActions, mapMutations } from "vuex";
  export default {
    components: {
      SidebarTop,
      SidebarLeft,
      Footer
    },
    methods: {
      ...mapActions('user', ['getMeRequest'])
    },
    mounted(){
      this.getMeRequest();
    }
    
  }
</script>