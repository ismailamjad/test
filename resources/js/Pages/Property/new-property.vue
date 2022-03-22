<template>
<div>
       <TopBar/>
    <BottomBar/>
    <section class="property-detail-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="f-18 mt-3">Add New Property</h2>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="f-22">Add Media</h4>
                            <div class="select-images">
                                         <UploadImages  @changed="handleImages" v-model="form.files"/>

                            </div>
                        </div>
                    </div>

                    <div class="card mt-4">
                        <div class="card-body">
                            <h4 class="f-22">Property Info</h4>
                                <form class="detail-form" @submit.prevent="submitform()">
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label class="f-18 mb-2 mt-3">Title</label>
                                            <input type="text" v-model="form.title" class="form-control f-16" placeholder="First Name">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="f-18 mb-2 mt-3">Property Type</label>
                                            <input type="text" v-model="form.type" class="form-control f-16" placeholder="Apartment ">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="f-18 mb-2 mt-3">Price</label>
                                            <input type="text" v-model="form.price" class="form-control f-16" placeholder="$5000">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="f-18 mb-2 mt-3">Beds</label>
                                            <input type="text" v-model="form.beds" class="form-control f-16" placeholder="4">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="f-18 mb-2 mt-3">Baths</label>
                                            <input type="text" v-model="form.baths" class="form-control f-16" placeholder="2">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="f-18 mb-2 mt-3">Floors</label>
                                            <input type="text" v-model="form.floors" class="form-control f-16" placeholder="2">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="f-18 mb-2 mt-3">Lot Area</label>
                                            <input type="text" v-model="form.lot_area" class="form-control f-16" placeholder="150 sqft">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="f-18 mb-2 mt-3">Home Area</label>
                                            <input type="text" v-model="form.home_area" class="form-control f-16" placeholder="120 sqft">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="f-18 mb-2 mt-3">Lot Dimension</label>
                                            <input type="text" v-model="form.lot_dimension" class="form-control f-16" placeholder="5 X 20 X 15">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="f-18 mb-2 mt-3">Primary Color</label>
                                            <input type="text" v-model="form.primary_color" class="form-control f-16" placeholder="Light Cream Color">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="f-18 mb-2 mt-3">Secondary Color</label>
                                            <input type="text" v-model="form.secondary_color" class="form-control f-16" placeholder="Dark Cream Color">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="f-18 mb-2 mt-3">Visit Active Time</label>
                                            <input type="text" v-model="form.visit_active_time" class="form-control f-16" placeholder="10:00 am - 03:00 pm">
                                        </div>
                                        <div class="form-group">
                                            <label class="f-18 mb-2 mt-3">Property Bio</label>
                                            <textarea class="form-control f-16" v-model="form.description" rows="4" placeholder="Describe"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="f-18 mb-2 mt-3">Neighborhood Bio</label>
                                            <textarea class="form-control f-16" rows="4" v-model="form.neighborhood_desc" placeholder="Describe"></textarea>
                                        </div>
                                        <h2 class="f-22 mt-4 f-semi">Location</h2>
                                        <div class="form-group col-md-4">
                                            <label class="f-18 mb-2 mt-3">Address Line 1</label>
                                            <input type="text" v-model="form.address_1" class="form-control f-16" placeholder="Address">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="f-18 mb-2 mt-3">Address Line 2</label>
                                            <input type="text"  v-model="form.address_2" class="form-control f-16" placeholder="Address">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Create Now</button>
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
import UploadImages from "vue-upload-drop-images"
import TopBar from "@/Components/Header";
import BottomBar from "@/Components/BottomBar";
import Footer from "@/Components/Footer";
import SideBar from "@/Components/Sidebar";
import { Inertia } from '@inertiajs/inertia'

export default {
        components: {
                    UploadImages, TopBar, BottomBar , Footer , SideBar
                },
        props:{},

        data(){
            return{
                form:{
                    title: null,
                    type: null,
                    price: null,
                    beds: null,
                    floors: null,
                    baths: null,
                    lot_area: null,
                    lot_dimension: null,
                    home_area: null,
                    primary_color: null,
                    secondary_color: null,
                    description: null,
                    neighborhood_desc: null,
                    address_1: null,
                    address_2: null,
                    visit_active_time: null,
                    // files: [],
                }
            }
        },
        methods:{
            handleImages(files){
                console.log(files);
                // this.form.files.push(...files);
                console.log('data()',this.files);
            },
            
            
            uploadimage(e){

                this.form.image = e.target.files[0];
            },

            submitform(){
                let data = new FormData();
                data.append('title', this.form.title);
                data.append('type', this.form.type);
                data.append('price', this.form.price);
                data.append('beds', this.form.beds);
                data.append('baths', this.form.baths);
                data.append('floors', this.form.floors);
                data.append('lot_area', this.form.lot_area);
                data.append('home_area', this.form.home_area);
                data.append('lot_dimension', this.form.lot_dimension);
                data.append('primary_color', this.form.primary_color);
                data.append('secondary_color', this.form.secondary_color);
                data.append('description', this.form.description);
                data.append('neighborhood_desc', this.form.neighborhood_desc);
                data.append('address_1', this.form.address_1);
                data.append('address_2', this.form.address_2);
                data.append('visit_active_time', this.form.visit_active_time);
                // data.append('images[]', this.images);
 
                this.$inertia.post(route('property.store'),data);
            }
        }           
}
</script>