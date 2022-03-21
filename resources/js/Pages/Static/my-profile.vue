<template>
    <section>
       <TopBar/>
        <BottomBar/>

        <div class="container">
           <div class="row">
               <div class="col-md-12">
                   <h2 class="f-18 primary-color mb-3">My Profile</h2>
               </div>
           </div>
            <div class="d-grid profile-grid box-shadow p-3 bg-white border-radius-05">
             
                   <div class="profile-img">
                       <img src="/assets/images/property/img-01.png" alt="">
                   </div>
            
               <div class="person-info">
                <div class="person-name">
                    <h2 class="f-22 mb-0">John Simon</h2>
                </div>
                 <div class="rating mb-0">
                    <span><i class="fas fa-star f-12"></i></span>
                    <span><i class="fas fa-star f-12"></i></span>
                    <span><i class="fas fa-star f-12"></i></span>
                    <span><i class="fas fa-star f-12"></i></span>
                    <span><i class="fas fa-star f-12"></i></span>
                    <span class="f-12">(5)</span>

                </div>
                <div class="meta-info d-flex gap-3 mb-0">
                <div class="created-at"> <p class="mb-0"> February 28, 2022</p></div>
                <div class="email"> <p class="mb-0">user@roamyhome.com</p></div>
                
                </div>
                <div class="profile-desc mb-0">
                     <p class="m-0 p-0">
                         Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                     </p>
                    
                 </div>

               </div>
               <div class="action-btn">
                   <div class="d-flex flex-column align-items-end gap-2">
                  <button class="btn btn-primary w-25">Edit Profile</button>
                  <button class="btn btn-primary w-25">Delete Profile</button>
                   </div>
               </div>
           </div>
        </div>
           <Footer/>
    </section>
 
</template>

<script>
  
    import TopBar from '@/components/Header';
    import BottomBar from '@/components/BottomBar';
    import Footer from '@/components/Footer';



    export default {

        name: 'blank',
        components: { TopBar, BottomBar, Footer},
        
    };
</script>
