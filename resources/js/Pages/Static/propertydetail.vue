<template>
<div>
    <TopBar/>
    <BottomBar/>
    <section class="property-detail-banner">
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <h2 class="f-18 mt-3">My Properties</h2>
                 <!-- Carousel -->
                    <div id="demo" class="carousel slide" data-bs-ride="carousel">

                    <!-- Indicators/dots -->
                    <!-- <div class="carousel-indicators">
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                    </div> -->

                    <!-- The slideshow/carousel -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/assets/images/property-banner.jpg" alt="Banner" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="/assets/images/property-banner.jpg" alt="Banner" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="/assets/images/property-banner.jpg" alt="Banner" class="d-block w-100">
                        </div>
                    </div>

                    <!-- Left and right controls/icons -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                    </div>
             </div>
         </div>
     </div>
    </section>

    <section class="property-detail-second mt-5 mb-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h3 class="f-28 mb-0">Lorem Ipsum Title</h3>
                </div>
                <div class="col-lg-6 d-flex justify-content-end align-items-center">
                    <h3 class="f-28">$10,000</h3>
                    <ul class="d-flex align-items-center detail-list">
                        <li class="ms-3">
                            <i class="fa-solid fa-heart"></i>
                        </li>
                        <li class="ms-3">
                            <i class="fa-solid fa-heart"></i>
                        </li>
                        <li class="ms-3">
                            <i class="fa-solid fa-heart"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="property-detail-bio">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="f-22">Property Bio</h4>
                            <p class="f-18">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <hr>
                            <h4 class="f-22">Neighborhood Bio</h4>
                            <p class="f-18">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <hr>
                        </div>
                    </div>

                    <div class="card mt-4">
                        <div class="card-body">
                            <h4 class="f-22 mb-4">Details</h4>
                            <div class="row">
                                <div class="col-lg-3">
                                    <p class="f-16"><b>Property Type:</b> Apartment</p>
                                </div>
                                <div class="col-lg-3">
                                    <p class="f-16"><b>Beds:</b> 04</p>
                                </div>
                                <div class="col-lg-3">
                                    <p class="f-16"><b>Baths:</b> 02</p>
                                </div>
                                <div class="col-lg-3">
                                    <p class="f-16"><b>Floors:</b> 02</p>
                                </div>
                                <div class="col-lg-3">
                                    <p class="f-16"><b>Lot Area:</b> 150 sqft</p>
                                </div>
                                <div class="col-lg-3">
                                    <p class="f-16"><b>Home Area:</b> 120 sqft</p>
                                </div>
                                <div class="col-lg-3">
                                    <p class="f-16"><b>Lote Dimension: </b> 05 X 20 X 15</p>
                                </div>
                                <div class="col-lg-3">
                                    <p class="f-16"><b>Primary Color: </b> Light Cream</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mt-4">
                        <div class="card-body">
                            <h4 class="f-22 mb-4">Location</h4>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3175952.1391823227!2d-107.7940365132569!3d38.9807237877463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x874014749b1856b7%3A0xc75483314990a7ff!2sColorado%2C%20USA!5e0!3m2!1sen!2s!4v1647523848192!5m2!1sen!2s" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>

                    <div class="card mt-4">
                        <div class="card-body">
                            <h4 class="f-22 mb-4">Page Views</h4>
                            <img src="/assets/images/download.svg" alt="">
                        </div>
                    </div>

                    <div class="card mt-4">
                        <div class="card-body">
                            <h4 class="f-22 mb-4">Comments</h4>
                            <div class="d-flex mb-4 mt-4">
                                <div class="flex-shrink-0">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-profiles/avatar-2.webp" alt="Generic placeholder image" class="img-fluid rounded-circle border border-dark border-3" style="width: 70px;">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <div class="d-flex flex-row mb-2">
                                        <h6 class="mb-0 me-2 f-22">User Name</h6>
                                            <ul class="mb-0 list-unstyled d-flex flex-row" style="color: #E2B600;">
                                                <li>
                                                <i class="fas fa-star fa-xs"></i>
                                                </li>
                                                <li>
                                                <i class="fas fa-star fa-xs"></i>
                                                </li>
                                                <li>
                                                <i class="fas fa-star fa-xs"></i>
                                                </li>
                                                <li>
                                                <i class="fas fa-star fa-xs"></i>
                                                </li>
                                                <li>
                                                <i class="fas fa-star fa-xs"></i>
                                                </li>
                                            </ul>
                                    </div>
                                    <span>February 02, 2022</span>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <hr>
                                </div>
                            </div>
                            <div class="d-flex mb-4 mt-4">
                                <div class="flex-shrink-0">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-profiles/avatar-2.webp" alt="Generic placeholder image" class="img-fluid rounded-circle border border-dark border-3" style="width: 70px;">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <div class="d-flex flex-row mb-2">
                                        <h6 class="mb-0 me-2 f-22">User Name</h6>
                                            <ul class="mb-0 list-unstyled d-flex flex-row" style="color: #E2B600;">
                                                <li>
                                                <i class="fas fa-star fa-xs"></i>
                                                </li>
                                                <li>
                                                <i class="fas fa-star fa-xs"></i>
                                                </li>
                                                <li>
                                                <i class="fas fa-star fa-xs"></i>
                                                </li>
                                                <li>
                                                <i class="fas fa-star fa-xs"></i>
                                                </li>
                                                <li>
                                                <i class="fas fa-star fa-xs"></i>
                                                </li>
                                            </ul>
                                    </div>
                                    <span>February 02, 2022</span>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mt-4">
                        <div class="card-body">
                            <h4 class="f-22 mb-2">Add a Review</h4>
                            <form class="detail-form">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="f-18 mb-2 mt-3" for="inputName">Name</label>
                                        <input type="text" class="form-control f-16" placeholder="Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="f-18 mb-2 mt-3" for="inputEmail4">Email</label>
                                        <input type="email" class="form-control f-16" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label class="f-18 mb-2 mt-3" for="exampleFormControlTextarea1">Message</label>
                                        <textarea class="form-control f-16" id="exampleFormControlTextarea1" rows="4" placeholder="Message"></textarea>
                                    </div>
                                    
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="f-22">Contact Agent</h4>
                            <div class="d-flex align-items-center mb-4 mt-4">
                                <div class="flex-shrink-0">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-profiles/avatar-2.webp" alt="Generic placeholder image" class="img-fluid rounded-circle border border-dark border-3" style="width: 70px;">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <div class="d-flex flex-column mb-2">
                                        <h6 class="mb-0 me-2 f-22">Agent Name</h6>
                                            <ul class="mb-0 list-unstyled d-flex flex-row" style="color: #E2B600;">
                                                <li>
                                                <i class="fas fa-star fa-xs"></i>
                                                </li>
                                                <li>
                                                <i class="fas fa-star fa-xs"></i>
                                                </li>
                                                <li>
                                                <i class="fas fa-star fa-xs"></i>
                                                </li>
                                                <li>
                                                <i class="fas fa-star fa-xs"></i>
                                                </li>
                                                <li>
                                                <i class="fas fa-star fa-xs"></i>
                                                </li>
                                            </ul>
                                    </div>
                                </div>
                            </div>

                            <form class="detail-form">
                                <div class="form-group">
                                    <label class="f-18 mb-2 mt-3" for="exampleInputName">Name</label>
                                    <input type="text" class="form-control f-16 " id="exampleInputName" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <label class="f-18 mb-2 mt-3" for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control f-16" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label class="f-18 mb-2 mt-3" for="exampleInputPhone">Phone</label>
                                    <input type="text" class="form-control f-16" id="exampleInputPhone" placeholder="Phone">
                                </div>
                                <div class="form-group">
                                    <label class="f-18 mb-2 mt-3" for="exampleInputMessage">Message</label>
                                    <textarea class="form-control f-16" id="exampleFormControlTextarea1" rows="4" placeholder="Message"></textarea>
                                </div>
                               
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <Footer />
</div>
</template>

<script>
import TopBar from "@/Components/Header";
import BottomBar from "@/Components/BottomBar";
import Footer from "@/Components/Footer";
export default {
         components: {
                     TopBar, BottomBar, Footer
                 },
}
</script>

