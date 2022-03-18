<template>
    <section>
        <div class="main-header">
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#"> <img src="/assets/images/logo.png" class="img-fluid" /></a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                                <form class="d-flex">
                                    <input class="form-control me-2 bg-transparent" type="search" placeholder="Search" aria-label="Search" />
                                </form>
                                <ul class="navbar-nav justify-content-end mb-2 mb-lg-0">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle text-white d-flex align-items-center gap-2" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <div><img src="/assets/images/circle.png" /></div>
                                            <div>Marker</div>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li>
                                                <a class="dropdown-item" href="#">Another action</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="bottom-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-shadow">
                            <nav class="navbar navbar-expand-lg navbar-light bg-light border-radius-05">
                                <div class="container-fluid">
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav me-auto gap-3 mb-2 mb-lg-0">
                                            <li class="nav-item">
                                                <a class="nav-link active primary-color f-18" aria-current="page" href="#"><i class="fas fa-th"></i> Home</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link secondary-color f-18" href="#"><i class="fas fa-city"></i> My Properties</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link secondary-color f-18" href="#"><i class="fas fa-user"></i> Profile</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-wrapper my-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 d-lg-block d-none">
                        <div class="left-wrapper"></div>
                    </div>
                    <div class="col-lg-9 col-md-12">
                        <div class="content-wrapper">
                            <div class="row">
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
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="map card-shadow">

                                        <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d217853.49198912922!2d74.50393540029297!3d31.442745765609295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1647444406305!5m2!1sen!2s" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="map card-shadow">
                                        <!-- <v-chart :options="lineChart" autoresize width="100%" /> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>


    export default {

        name: 'main',
        data() {
            return {

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
