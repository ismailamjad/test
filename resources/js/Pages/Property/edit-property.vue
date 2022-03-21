<template>
<div>
       <TopBar/>
    <BottomBar/>
    <section class="property-detail-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="f-18 mt-3">Update Property</h2>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="f-22">Add Media</h4>
                            <div class="select-images">
                                <UploadImages  @changed="handleImages"/>
                            </div>
                        </div>
                    </div>

                    <div class="card mt-4">
                        <div class="card-body">
                            <h4 class="f-22">Property Info</h4>
                                <form class="detail-form" @submit.prevent="updateProperty()">
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label class="f-18 mb-2 mt-3">Title</label>
                                            <input type="text" v-model="editform.title" class="form-control f-16" placeholder="First Name">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="f-18 mb-2 mt-3">Property Type</label>
                                            <input type="text" v-model="editform.type" class="form-control f-16" placeholder="Apartment ">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="f-18 mb-2 mt-3">Price</label>
                                            <input type="text" v-model="editform.price" class="form-control f-16" placeholder="$5000">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="f-18 mb-2 mt-3">Beds</label>
                                            <input type="text" v-model="editform.beds" class="form-control f-16" placeholder="4">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="f-18 mb-2 mt-3">Baths</label>
                                            <input type="text" v-model="editform.baths" class="form-control f-16" placeholder="2">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="f-18 mb-2 mt-3">Floors</label>
                                            <input type="text" v-model="editform.floors" class="form-control f-16" placeholder="2">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="f-18 mb-2 mt-3">Lot Area</label>
                                            <input type="text" v-model="editform.lot_area" class="form-control f-16" placeholder="150 sqft">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="f-18 mb-2 mt-3">Home Area</label>
                                            <input type="text" v-model="editform.home_area" class="form-control f-16" placeholder="120 sqft">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="f-18 mb-2 mt-3">Lot Dimension</label>
                                            <input type="text" v-model="editform.lot_dimension" class="form-control f-16" placeholder="5 X 20 X 15">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="f-18 mb-2 mt-3">Primary Color</label>
                                            <input type="text" v-model="editform.primary_color" class="form-control f-16" placeholder="Light Cream Color">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="f-18 mb-2 mt-3">Secondary Color</label>
                                            <input type="text" v-model="editform.secondary_color" class="form-control f-16" placeholder="Dark Cream Color">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="f-18 mb-2 mt-3">Visit Active Time</label>
                                            <input type="text" v-model="editform.visit_active_time" class="form-control f-16" placeholder="10:00 am - 03:00 pm">
                                        </div>
                                        <div class="form-group">
                                            <label class="f-18 mb-2 mt-3">Property Bio</label>
                                            <textarea class="form-control f-16" v-model="editform.description" rows="4" placeholder="Describe"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="f-18 mb-2 mt-3">Neighborhood Bio</label>
                                            <textarea class="form-control f-16" rows="4" v-model="editform.neighborhood_desc" placeholder="Describe"></textarea>
                                        </div>
                                        <h2 class="f-22 mt-4 f-semi">Location</h2>
                                        <div class="form-group col-md-4">
                                            <label class="f-18 mb-2 mt-3">Address Line 1</label>
                                            <input type="text" v-model="editform.address_1" class="form-control f-16" placeholder="Address">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="f-18 mb-2 mt-3">Address Line 2</label>
                                            <input type="text"  v-model="editform.address_2" class="form-control f-16" placeholder="Address">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update Now</button>
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
        props:['id' , 'property'] ,

        data(){
            return{
                editform:{
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
                }
            }
        },
        methods:{

            updateProperty(){
                // console.log(this.id);
                this.$inertia.put(route('property.update' , this.id),this.editform);
            },

            FetchPropertyValues(){
                this.editform.title = this.property.title;
                this.editform.type = this.property.type;
                this.editform.price = this.property.price;
                this.editform.beds = this.property.beds;
                this.editform.floors = this.property.floors;
                this.editform.baths = this.property.baths;
                this.editform.lot_area = this.property.lot_area;
                this.editform.lot_dimension = this.property.lot_dimension;
                this.editform.home_area = this.property.home_area;
                this.editform.primary_color = this.property.primary_color;
                this.editform.secondary_color = this.property.secondary_color;
                this.editform.description = this.property.description;
                this.editform.neighborhood_desc = this.property.neighborhood_desc;
                this.editform.address_1 = this.property.address_1;
                this.editform.address_2 = this.property.address_2;
                this.editform.visit_active_time = this.property.visit_active_time;
            },


//for image

            handleImages(files){
                let data = new FormData();
                console.log(files);
                    for (let i = 0; i < files.length; i++) {
                        data.append(files[i].name, files[i])
                }
                Inertia.post('uploadImages', this.data);
                // console.log(files);
            },
            uploadimage(e){
                this.form.image = e.target.files[0];
            },
        },
        
        mounted() {
                this.FetchPropertyValues();
        },
}
</script>