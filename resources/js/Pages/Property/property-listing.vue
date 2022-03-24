<template>
  <section>
    <TopBar />
    <BottomBar />

    <div class="container">
      <div class="row py-4">
        <div class="col-lg-3">
          <SideBar />
        </div>
        <div class="col-lg-9">
          <div class="add-new-btn text-end mb-2">
            <Link :href="route('property.create')" class="btn border f-18"><i class="fa fa-plus"> </i> Add New</Link>
          </div>
          <div class="content-wrapper box-shadow bg-white border-radius-05">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th class="align-middle py-4 px-3" scope="col">Sr#</th>
                    <th class="align-middle py-4 px-3" scope="col" colspan="5">Property</th>
                    <th class="align-middle py-4 px-3" scope="col">Price</th>
                    <th class="align-middle py-4 px-3" scope="col">PDF</th>
                    <th class="align-middle py-4 px-3" scope="col">Action</th>

                  </tr>
                </thead>
                <tbody >
                  <tr class="px-3" v-for="(property, index) in properties" :key="property.id">
                    <td class="align-middle px-3" scope="row">{{index +1}}</td>
                    <td class="align-middle px-3 mobile-width" colspan="5" style="width: 250px" >
                        <div class="d-flex align-items-center mobile-width"> 
                        <div class="property-img"><img src="/assets/images/property/img-01.png" /></div>
                        <div class="content-box p-3">
                                           
                                            <div class="property-desc mb-2">
                                                <h3 class="m-0 p-0 f-22">
                                                    {{property.title}} 
                                                </h3>
                                            </div>
                                            <div class="d-flex justify-content-between gap-3">
                                                <div class="bed-count">
                                                    <div class="icon">
                                                        <i class="fas fa-bed"></i>
                                                    </div>
                                                    <p class="m-0 p-0 f-16"><span> {{property.beds}} </span> beds</p>
                                                </div>
                                                <div class="bath-count">
                                                    <div class="icon">
                                                        <i class="fas fa-bath"></i>
                                                    </div>
                                                    <p class="m-0 p-0 f-16"><span> {{property.baths}} </span> baths</p>
                                                </div>
                                                <div class="square-ft">
                                                    <div class="icon">
                                                        <i class="fas fa-draw-square"></i>
                                                    </div>
                                                    <p class="m-0 p-0 f-16"><span>{{property.home_area}} </span> sqft</p>
                                                </div>
                                            </div>
                                        </div>
                        </div>
                         
                        
                        </td>
                    <td class="align-middle px-3">{{property.price}}</td>
                    <td class="align-middle px-3"><img :src="property.qr_code" /></td>
                    <!-- <td class="align-middle px-3">{{property.qr_code}}</td> -->
                    <td class="align-middle px-3">  <Link :href="route('property.edit' ,property.id)" class="text-dark"><i class="fas fa-edit"></i></Link><span type="button" @click="deleteProperty(property.id)"  class="text-dark"><i class="far fa-trash-alt"></i></span></td>
                  </tr>
                
               
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <Footer />
  </section>
</template>

<script>

import TopBar from "@/Components/Header";
import BottomBar from "@/Components/BottomBar";
import Footer from "@/Components/Footer";
import SideBar from "@/Components/Sidebar";
import { Inertia } from '@inertiajs/inertia'
import { Link } from '@inertiajs/inertia-vue'

export default {
  name: "propertyListing", 
  components: { TopBar, BottomBar, SideBar, Footer , Link},
  props:[ 'properties'] , 

  methods:{
    deleteProperty(id){
      Inertia.delete('property/'+ id);
    }
  }
};
</script>
