<template>
    
     <div class="left-wrapper">
                            <div class="sidebar border-radius-05">
                                <div class="property-type">

                                </div>
                               <div class="price-range mb-3">
                                   <h2 class="f-22 white-color" >Price Range</h2>
                                <VueSimpleRangeSlider
                                    style="width: 300px"
                                    :min="0"
                                    :max="1000000"
                                    :logarithmic="true"
                                    v-model="range"


                                />
                               </div>
                                <div class="property-room mb-3">
                                    <h2 class="f-22 white-color">Property Rooms</h2>
                                   <div class="row">
                                       <div class="col-md-6">
                                           <label class="white-color"> Bed Rooms</label>

                                           <select class="form-select" aria-label="Default select example">
                                               <option selected>01</option>
                                               <option value="2">02</option>
                                               <option value="3">03</option>
                                               <option value="4">04</option>
                                           </select>
                                       </div>
                                       <div class="col-md-6">
                                           <label class="white-color"> Bath Rooms</label>

                                           <select class="form-select" aria-label="Default select example">
                                               <option selected>01</option>
                                               <option value="2">02</option>
                                               <option value="3">03</option>
                                               <option value="4">04</option>
                                           </select>
                                       </div>
                                   </div>
                                </div>
                                      <div class="availability mb-3">
                                          <h2 class="f-22 white-color">Availibility</h2>

                                          <div class="form-check d-flex justify-content-between ps-0">
                                           <label class="form-check-label white-color " for="flexRadioDefault1">
                                               Ready to Move
                                           </label>
                                           <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">

                                       </div>
                                       <div class="form-check d-flex justify-content-between ps-0">
                                           <label class="form-check-label white-color" for="flexRadioDefault2">
                                               Within 06 Months
                                           </label>
                                           <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>

                                       </div>

                                          <div class="form-check d-flex justify-content-between ps-0">
                                              <label class="form-check-label white-color " for="flexRadioDefault1">
                                                  Within 01 Year
                                              </label>
                                              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">

                                          </div>

                                          <div class="form-check d-flex justify-content-between ps-0">
                                              <label class="form-check-label white-color " for="flexRadioDefault1">
                                                  More than 01 Year
                                              </label>
                                              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">

                                          </div>
                                   </div>
                                <div class="price-range mb-3">
                                    <h2 class="f-22 white-color" >Property Size</h2>
                                    <span> 0 - 2,500 sqft</span>
                                    <VueSimpleRangeSlider
                                        style="width: 300px"
                                        :min="0"
                                        :max="1000000"
                                        :logarithmic="false"
                                        v-model="size"


                                    />
                                </div>
                                <div class="filters d-flex align-items-center justify-content-between mb-3">
                                    <p class="f-18 white-color mb-0 pb-0" >Reset Filters</p>
                                     <button class="btn btn-light px-4">Apply </button>
                                </div>


                            </div>

                        </div>
</template>

<script>
  import VueSimpleRangeSlider from 'vue-simple-range-slider';
    import 'vue-simple-range-slider/dist/vueSimpleRangeSlider.css'
export default {
    name: 'SiderBar',
    components: {
      VueSimpleRangeSlider

    },

      data() {
            return {
                range: [20,1000],
                number: 10,
                size: [20, 10000],

            }
      }
}
</script>