<template>
  <section>
    <TopBar />
    <BottomBar />

    <div class="container my-3">
      <div class="row">
        <div class="col-md-12">
          <h2 class="f-18 primary-color mb-3">My Profile</h2>
        </div>
      </div>
      <div class="box-shadow
          p-3
          bg-white
          border-radius-05
          mb-3">
      <div
        class="
          d-grid
          profile-grid
          
        "
      >
        <div class="profile-img">
          <img src="/assets/images/property/img-01.png" alt="" />
        </div>

        <div class="person-info">
          <div class="person-name">
            <h2 class="f-22 mb-0">{{user.f_name + ' ' + user.l_name}}</h2>
          </div>
          <div class="rating mb-0">
            <span><i class="fas fa-star f-12"></i></span>
            <span><i class="fas fa-star f-12"></i></span>
            <span><i class="fas fa-star f-12"></i></span>
            <span><i class="fas fa-star f-12"></i></span>
            <span><i class="fas fa-star f-12"></i></span>
            <span class="f-12">(5)</span>
          </div>
          <div class="meta-info d-flex gap-md-3 gap-0 mb-0 flex-md-row flex-column">
            <div class="created-at">
              <p class="mb-0">
                <i class="fas fa-user-clock"></i> {{user.created_at}} 
                <!-- February 28, 2022 -->
              </p>
            </div>
            <div class="email">
              <p class="mb-0">
                <i class="fas fa-envelope"></i> {{user.email }}
              </p>
            </div>
          </div>
          <div class="profile-desc mb-0">
            <p class="m-0 p-0">
              {{user.Bio }}
            </p>
          </div>
        </div>
        <div class="action-btn">
          <div class="d-flex flex-column align-items-md-end align-items-start  gap-2">
            <Link :href="route('user.edit' ,user.id)" class="btn btn-primary w-25 gradient-color border-0">
              Edit Profile
            </Link>
            <span  type="button" @click="deleteUser(user.id)"  class="btn border-01 w-25">Delete Profile</span>
          </div>
        </div>
      </div>
      
      <div class="features mt-3">
        <hr class="m-0 p-0">
          <div class="d-flex">
              <div class="info-box p-4">
                  <p class="mb-0 text-center">Job Success</p>
                   <p class="fw-bold mb-0 text-center">100%</p>
              </div>
               <div class="info-box p-4">
                  <p class="mb-0 text-center">Total Earned </p>
                   <p class="fw-bold mb-0 text-center">$100k+</p>
              </div>
               <div class="info-box p-4">
                  <p class="mb-0 text-center">Jobs</p>
                   <p class="fw-bold mb-0 text-center">412</p>
              </div>
               <div class="info-box p-4">
                  <p class="mb-0 text-center">Hour Worked </p>
                   <p class="fw-bold mb-0 text-center">4800</p>
              </div>
               <div class="info-box p-4">
                  <p class="mb-0 text-center">Specialized In </p>
                   <p class="fw-bold mb-0 text-center">Homes</p>
              </div>
          </div>
           <hr class="m-0 p-0">
      </div>
      
      
      </div>
      <div class="box-shadow border-radius-05 bg-white py-3">
        <div class="px-3">
          <h2 class="f-22 mb-0">Customers Feedback</h2>
        </div>

        <div class="table-responsive property-tbl px-2 ">
          <table class="table px-0 width-600">
            <thead>
              <tr>
                <th scope="col" class="py-3" colspan="2" style="width: 180px">
                  Customer Name
                </th>
                <th scope="col" class="py-3" style="width: 200px">Rating</th>
                <th scope="col" class="py-3">Comments</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td colspan="2" style="width: 180px">Mark</td>
                <td style="width: 200px">
                  <span><i class="fas fa-star f-12"></i></span>
                  <span><i class="fas fa-star f-12"></i></span>
                  <span><i class="fas fa-star f-12"></i></span>
                  <span><i class="fas fa-star f-12"></i></span>
                  <span><i class="fas fa-star f-12"></i></span>
                </td>
                <td>
                  Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry. Lorem Ipsum has been the industry’s
                  standard dummy text ever since the 1500s, when an unknown
                  printer took a galley of type and scrambled it to make a type
                  specimen book.
                </td>
              </tr>
            </tbody>
          </table>
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
import { Link } from '@inertiajs/inertia-vue'
import { Inertia } from '@inertiajs/inertia'

export default {
    name: "blank",
    components: { TopBar, BottomBar, Footer , Link },
    props:['user'],
    methods:{
          deleteUser(id){
             Inertia.delete(id);
          }

          //Inertia.delete('user/' + id )  it is redirecting to user/user/id that is not defined
    }

};
</script>
