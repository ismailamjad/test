<template>
    <section class="edit-profile">
        <TopBar/>
        <BottomBar/>
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <h2 class="f-18 mt-3">Edit Profile</h2>
                    <div>
                           <vue-upload-multiple-image
      @upload-success="uploadImageSuccess"
      @before-remove="beforeRemove"
      @edit-image="editImage"
      :data-images="images"
      idUpload="myIdUpload"
      editUpload="myIdEdit"
      :multiple ="false"
      dragText="Drag & Drop Image"
      browseText="Or Select"
      primaryText="Default"
       popupText ="This image will be displayed as default"
      ></vue-upload-multiple-image>
                    </div>  
                </div>
                <div class="col-lg-12">
                    <div class="card mt-4 mb-4">
                        <div class="card-body">
                            <form class="detail-form">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label class="f-18 mb-2 mt-3">First Name</label>
                                        <input type="text" class="form-control f-16" placeholder="First Name">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="f-18 mb-2 mt-3">Last Name</label>
                                        <input type="text" class="form-control f-16" placeholder="Last Name">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="f-18 mb-2 mt-3">User Name</label>
                                        <input type="text" class="form-control f-16" placeholder="User Name">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="f-18 mb-2 mt-3">Mobile Number</label>
                                        <input type="text" class="form-control f-16" placeholder="Mobile Number">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="f-18 mb-2 mt-3">Email</label>
                                        <input type="text" class="form-control f-16" placeholder="user@roamyhome.com">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="f-18 mb-2 mt-3">Specialized In</label>
                                        <input type="text" class="form-control f-16" placeholder="Homes">
                                    </div>
                                    <div class="form-group">
                                        <label class="f-18 mb-2 mt-3">Bio (Optional)</label>
                                        <textarea class="form-control f-16" rows="4" placeholder="Describe"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <Footer/>
    </section>
</template>

<script>
  import VueUploadMultipleImage from 'vue-upload-multiple-image'

    import TopBar from '@/components/Header';
    import BottomBar from '@/components/BottomBar';
    import Footer from '@/components/Footer';



    export default {

        name: 'blank',
        components: { TopBar, BottomBar, Footer,     VueUploadMultipleImage
},
methods: {
    uploadImageSuccess(formData, index, fileList) {
      console.log('data', formData, index, fileList)
      // Upload image api
      // axios.post('http://your-url-upload', formData).then(response => {
      //   console.log(response)
      // })
    },
    beforeRemove (index, done, fileList) {
      console.log('index', index, fileList)
      var r = confirm("remove image")
      if (r == true) {
        done()
      } else {
      }
    },
    editImage (formData, index, fileList) {
      console.log('edit data', formData, index, fileList)
    }
  }
}
        
  
</script>
