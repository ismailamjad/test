<template>
    <section class="overflow-hidden">
       <TopBar/>
        <BottomBar/>

        <div class="main-wrapper my-5">
            <div class="container">
                <div class="row">
                    <div class="sidebar">
                       <SideBar />
                    </div>
                    <div class="col-lg-9 col-md-12">
                        <div class="content-wrapper">
                        
                                <div class="grid-03 d-grid">
                                    <div class="card-box card-shadow border-radius-05" v-for="(property , index) in properties" :key="index">
                                        <div class="property-img">
                                            <img :src="property.image" class="img-fluid" />
                                        </div>
                                        <div class="content-box p-3">
                                            <div class="property-price mb-2">
                                                <h3 class="f-22 mb-0"><span>$</span>{{property.price}}</h3>
                                            </div>
                                            <div class="property-desc mb-2">
                                                <p class="m-0 p-0 f-18">{{property.description}}</p>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div class="bed-count">
                                                    <div class="icon">
                                                        <i class="fas fa-bed"></i>
                                                    </div>
                                                    <p class="m-0 p-0 f-16"><span>{{property.beds}}</span> beds</p>
                                                </div>
                                                <div class="bath-count">
                                                    <div class="icon">
                                                        <i class="fas fa-bath"></i>
                                                    </div>
                                                    <p class="m-0 p-0 f-16"><span>{{property.baths}}</span> baths</p>
                                                </div>
                                                <div class="square-ft">
                                                    <div class="icon">
                                                        <i class="fas fa-draw-square"></i>
                                                    </div>
                                                    <p class="m-0 p-0 f-16"><span>{{property.sqft}}</span> sqft</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           

                            <div class="row mt-4">
                                <div class="col-md-3">
                                    <div class="map card-shadow">

                                        <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d217853.49198912922!2d74.50393540029297!3d31.442745765609295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1647444406305!5m2!1sen!2s" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="map card-shadow">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
           <Footer/>
    </section>
 
</template>

<script>
  
    import Label from "@/Jetstream/Label";
    import Button from "@/Jetstream/Button";
    import TopBar from "@/Components/Header";
    import BottomBar from "@/Components/BottomBar";
    import Footer from "@/Components/Footer";
    import SideBar from "@/Components/Sidebar";



    export default {

        name: 'main',
        components: {Button, Label , TopBar, BottomBar, SideBar, Footer},
        data() {
            return {
                range: [20,1000],
                number: 10,
                size: [20, 10000],

                properties: [
                    {
                        image: "/assets/images/dashboard/img-01.jpg",
                        price: 150000,
                        description: "Keas 69 Str. 15234, Chalandri Athens, New York",
                        beds: 4,
                        baths: 3,
                        sqft: 2220,
                    },
                    {
                        image: "/assets/images/dashboard/img-02.jpg",
                        price: 110000,
                        description: "Keas 69 Str. 15234, Chalandri Athens, New York",
                        beds: 4,
                        baths: 3,
                        sqft: 2220,
                    },
                    {
                        image: "/assets/images/dashboard/img-03.jpg",
                        price: 120000,
                        description: "Keas 69 Str. 15234, Chalandri Athens, New York",
                        beds: 4,
                        baths: 3,
                        sqft: 2220,
                    },
                    {
                        image: "/assets/images/dashboard/img-01.jpg",
                        price: 150000,
                        description: "Keas 69 Str. 15234, Chalandri Athens, New York",
                        beds: 4,
                        baths: 3,
                        sqft: 2220,
                    },
                ],
            };
        },
    };
</script>
