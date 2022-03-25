<template>
    <section class="edit-profile">
        <TopBar />
        <BottomBar />
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <h2 class="f-18 mt-3">Edit Profile</h2>
                    <div>
                        
                    </div>  
                </div>
                <div class="col-lg-12">
                    <div class="card mt-4 mb-4">
                        <div class="card-body">
                            <form class="detail-form" @submit.prevent="updateUserInfo()" enctype="multipart/form-data">
                                     <input type="file" class="custom-file-input" id="customFile" ref="file" @change="handleFileObject()">
                                    <!-- <vue-upload-multiple-image
                                        @upload-success="uploadImageSuccess"
                                        @before-remove="beforeRemove"
                                        @edit-image="editImage"
                                        :data-image="image"
                                        idUpload="myIdUpload"
                                        editUpload="myIdEdit"
                                        :multiple ="false"
                                        dragText="Drag & Drop Image"
                                        browseText="Or Select"
                                        primaryText="Default"
                                        popupText ="This image will be displayed as default">
                                    </vue-upload-multiple-image> -->
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label class="f-18 mb-2 mt-3"
                                            >First Name</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control f-16"
                                            v-model="editform.f_name"
                                            placeholder="First Name"
                                        />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="f-18 mb-2 mt-3"
                                            >Last Name</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control f-16"
                                            v-model="editform.l_name"
                                            placeholder="Last Name"
                                        />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="f-18 mb-2 mt-3"
                                            >User Name</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control f-16"
                                            v-model="editform.user_name"
                                            placeholder="User Name"
                                        />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="f-18 mb-2 mt-3"
                                            >Mobile Number</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control f-16"
                                            v-model="editform.mobile_number"
                                            placeholder="Mobile Number"
                                        />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="f-18 mb-2 mt-3"
                                            >Email</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control f-16"
                                            disabled
                                            v-model="editform.email"
                                            placeholder="user@roamyhome.com"
                                        />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="f-18 mb-2 mt-3"
                                            >Specialized In</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control f-16"
                                            v-model="editform.specialized_in"
                                            placeholder="Homes"
                                        />
                                    </div>
                                    <div class="form-group">
                                        <label class="f-18 mb-2 mt-3"
                                            >Bio (Optional)</label
                                        >
                                        <textarea
                                            class="form-control f-16"
                                            rows="4"
                                            v-model="editform.Bio"
                                            placeholder="Describe"
                                        ></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    Update Profile
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <h2 class="f-18 mt-3">Update Password</h2>
                    <div class="card mt-4 mb-4">
                        <div class="card-body">
                            <form
                                class="detail-form"
                                @submit.prevent="updatePassword()"
                            >
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label class="f-18 mb-2 mt-3"
                                            >Current Password</label
                                        >
                                        <input
                                            id="current_password"
                                            type="password"
                                            class="form-control f-16"
                                            v-model="
                                                updatepasswordForm.current_password
                                            "
                                        />
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label class="f-18 mb-2 mt-3"
                                            >New Password</label
                                        >
                                        <input
                                            id="password"
                                            type="password"
                                            class="form-control f-16"
                                            v-model="
                                                updatepasswordForm.password
                                            "
                                        />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="f-18 mb-2 mt-3"
                                            >Confirm Password</label
                                        >
                                        <input
                                            id="password_confirmation"
                                            type="password"
                                            class="form-control f-16"
                                            v-model="
                                                updatepasswordForm.password_confirmation
                                            "
                                        />
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    Update Password
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <Footer />
    </section>
</template>

<script>

import VueUploadMultipleImage from 'vue-upload-multiple-image'

import TopBar from "@/Components/Header";
import BottomBar from "@/Components/BottomBar";
import Footer from "@/Components/Footer";

    export default {
        name: 'blank',
        components: { TopBar, BottomBar, Footer , VueUploadMultipleImage},
         props:['id' , 'profile'] ,
        data(){
            return{
                image: null,
                editform:{
                    f_name: null,
                    l_name: null,
                    user_name: null,
                    mobile_number: null,
                    email: null,
                    specialized_in: null,
                    Bio: null,
                    
                },
                 updatepasswordForm:this.$inertia.form({
                    current_password: '',
                    password: '',
                    password_confirmation: '',
                }),

            }
        },
        methods:{
             handleFileObject() {
        this.image = this.$refs.file.files[0]
        this.image = this.image.name
      },
            // frontend methods
            uploadImageSuccess(formData, index, fileList) {
                // this.files.push(formData.get("file"));
                this.image = formData.get('file');

                console.log('upload()',this.image);
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
                // this.files[index] = formData.get("file");
                console.log('edit data', formData, index, fileList)
            },

            //Backend Methods
            fetchUserInfo(){
                this.editform.f_name = this.profile.f_name;
                this.editform.l_name = this.profile.l_name;
                this.editform.user_name = this.profile.user_name;
                this.editform.mobile_number = this.profile.mobile_number;
                this.editform.email = this.profile.email;
                this.editform.specialized_in = this.profile.specialized_in;
                this.editform.Bio = this.profile.Bio;
                
            },
             updatePassword() {
                this.updatepasswordForm.put(route('user-password.update'), {
                    errorBag: 'updatePassword',
                    preserveScroll: true,
                    onSuccess: () => this.form.reset(),
                    onError: () => {
                        if (this.form.errors.password) {
                            this.form.reset('password', 'password_confirmation')
                            this.$refs.password.focus()
                        }

                        if (this.form.errors.current_password) {
                            this.form.reset('current_password')
                            this.$refs.current_password.focus()
                        }
                    }
                })
            },
            updateUserInfo(){
                const data = new FormData();
                data.append('image', this.image); 
                console.log(this.image);
                
                // console.log(data);
                this.$inertia.put(route('user.update' , this.id), this.editform, data);
            },

        },
        mounted() {
                this.fetchUserInfo();
                
        },

    };
</script>
