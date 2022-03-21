<template>
    <section>
       <TopBar/>
        <BottomBar/>

        <div class="contrainer">
           
        </div>
           <Footer/>
    </section>
 
</template>

<script>
  
import TopBar from "@/Components/Header";
import BottomBar from "@/Components/BottomBar";
import Footer from "@/Components/Footer";



    export default {

        name: 'blank',
        components: { TopBar, BottomBar, Footer},
        
    };
</script>
