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
  
    import TopBar from '@/components/Header';
    import BottomBar from '@/components/BottomBar';
    import Footer from '@/components/Footer';



    export default {

        name: 'propertyListing',
        components: { TopBar, BottomBar, Footer},
        
    };
</script>
