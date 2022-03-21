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
            <a class="btn border f-18"><i class="fa fa-plus"> </i> Add New</a>
          </div>
          <div class="content-wrapper box-shadow bg-white border-radius-05">
            <div class="table-responsive property-tbl">
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
                  <tr>
                    <td class="align-middle px-3" scope="row">1</td>
                    <td class="align-middle px-3 mobile-width" colspan="5" style="width: 270px" >
                        <div class="d-flex align-items-center mobile-width"> 
                        <div class="property-img"><img src="/assets/images/property/img-01.png" /></div>
                        <div class="content-box p-3">
                                           
                                            <div class="property-desc mb-2">
                                                <h3 class="m-0 p-0 f-22">
                                                    Keas 69 Str. 15234, Chalandri Athens, New York
                                                </h3>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div class="bed-count">
                                                    <div class="icon">
                                                        <i class="fas fa-bed"></i>
                                                    </div>
                                                    <p class="m-0 p-0 f-16"><span>4</span> beds</p>
                                                </div>
                                                <div class="bath-count">
                                                    <div class="icon">
                                                        <i class="fas fa-bath"></i>
                                                    </div>
                                                    <p class="m-0 p-0 f-16"><span>4</span> baths</p>
                                                </div>
                                                <div class="square-ft">
                                                    <div class="icon">
                                                        <i class="fas fa-draw-square"></i>
                                                    </div>
                                                    <p class="m-0 p-0 f-16"><span>200</span> sqft</p>
                                                </div>
                                            </div>
                                        </div>
                        </div>
                         
                        
                        </td>
                    <td class="align-middle px-3">15000</td>
                    <td class="align-middle px-3"><img src="/assets/images/property/qr-code.png" /></td>
                    <td class="align-middle px-3"> <a href="#" class="text-dark"><i class="fas fa-edit"></i></a> <a href="#" class="text-dark"><i class="far fa-trash-alt"></i></a></td>
                  </tr>
                    <tr>
                    <td class="align-middle px-3" scope="row">1</td>
                    <td class="align-middle px-3 mobile-width" colspan="5" style="width: 270px" >
                        <div class="d-flex align-items-center mobile-width"> 
                        <div class="property-img"><img src="/assets/images/property/img-01.png" /></div>
                        <div class="content-box p-3">
                                           
                                            <div class="property-desc mb-2">
                                                <h3 class="m-0 p-0 f-22">
                                                    Keas 69 Str. 15234, Chalandri Athens, New York
                                                </h3>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div class="bed-count">
                                                    <div class="icon">
                                                        <i class="fas fa-bed"></i>
                                                    </div>
                                                    <p class="m-0 p-0 f-16"><span>4</span> beds</p>
                                                </div>
                                                <div class="bath-count">
                                                    <div class="icon">
                                                        <i class="fas fa-bath"></i>
                                                    </div>
                                                    <p class="m-0 p-0 f-16"><span>4</span> baths</p>
                                                </div>
                                                <div class="square-ft">
                                                    <div class="icon">
                                                        <i class="fas fa-draw-square"></i>
                                                    </div>
                                                    <p class="m-0 p-0 f-16"><span>200</span> sqft</p>
                                                </div>
                                            </div>
                                        </div>
                        </div>
                         
                        
                        </td>
                    <td class="align-middle px-3">15000</td>
                    <td class="align-middle px-3"><img src="/assets/images/property/qr-code.png" /></td>
                    <td class="align-middle px-3"> <a href="#" class="text-dark"><i class="fas fa-edit"></i></a> <a href="#" class="text-dark"><i class="far fa-trash-alt"></i></a></td>
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

export default {
  name: "propertyListing",
  components: { TopBar, BottomBar, SideBar, Footer },
};
</script>
