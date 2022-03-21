<template>
  <div>

<div>
  <div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1">
      <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium leading-6 text-gray-900">Add property</h3>
        <p class="mt-1 text-sm text-gray-600">This information will be displayed publicly so be careful what you share.</p>
      </div>
    </div>
    <div class="mt-5 md:mt-0 md:col-span-2">
      <form  @submit.prevent="uploadFile" enctype=" multipart/form-data" method="post">
        <div class="shadow sm:rounded-md sm:overflow-hidden">
          <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
            <div class="grid grid-cols-3 gap-6">
              <div class="col-span-6 sm:col-span-3">
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="title" id="title" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" v-model="form.title" >
              </div>
            </div>

            <div class="grid grid-cols-3 gap-6">
              <div class="col-span-6 sm:col-span-3">
                <label for="type" class="block text-sm font-medium text-gray-700">type</label>
                <input type="text" name="type" id="type" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" v-model="form.type" >
              </div>
            </div>

            <div class="grid grid-cols-3 gap-6">
              <div class="col-span-6 sm:col-span-3">
                <label for="price" class="block text-sm font-medium text-gray-700">price</label>
                <input type="text" name="price" id="price" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" v-model="form.price" >
              </div>
            </div>

            <div class="grid grid-cols-3 gap-6">
              <div class="col-span-6 sm:col-span-3">
                <label for="beds" class="block text-sm font-medium text-gray-700">beds</label>
                <input type="text" name="beds" id="beds" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" v-model="form.beds" >
              </div>
            </div>

            <div class="grid grid-cols-3 gap-6">
              <div class="col-span-6 sm:col-span-3">
                <label for="floors" class="block text-sm font-medium text-gray-700">floors</label>
                <input type="text" name="floors" id="floors" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" v-model="form.floors" >
              </div>
            </div>
            <div class="grid grid-cols-3 gap-6">
              <div class="col-span-6 sm:col-span-3">
                <label for="baths" class="block text-sm font-medium text-gray-700">baths</label>
                <input type="text" name="baths" id="baths" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" v-model="form.baths" >
              </div>
            </div>
            <div class="grid grid-cols-3 gap-6">
              <div class="col-span-6 sm:col-span-3">
                <label for="lot_area" class="block text-sm font-medium text-gray-700">lot_area</label>
                <input type="text" name="lot_area" id="lot_area" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" v-model="form.lot_area" >
              </div>
            </div>
            <div class="grid grid-cols-3 gap-6">
              <div class="col-span-6 sm:col-span-3">
                <label for="lot_dimension" class="block text-sm font-medium text-gray-700">lot_dimension</label>
                <input type="text" name="lot_dimension" id="lot_dimension" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" v-model="form.lot_dimension" >
              </div>
            </div>
            <div class="grid grid-cols-3 gap-6">
              <div class="col-span-6 sm:col-span-3">
                <label for="home_area" class="block text-sm font-medium text-gray-700">home_area</label>
                <input type="text" name="home_area" id="home_area" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" v-model="form.home_area" >
              </div>
            </div>
            <div class="grid grid-cols-3 gap-6">
              <div class="col-span-6 sm:col-span-3">
                <label for="primary_color" class="block text-sm font-medium text-gray-700">primary_color</label>
                <input type="text" name="primary_color" id="primary_color" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" v-model="form.primary_color" >
              </div>
            </div>
<div class="grid grid-cols-3 gap-6">
              <div class="col-span-6 sm:col-span-3">
                <label for="secondary_color" class="block text-sm font-medium text-gray-700">secondary_color</label>
                <input type="text" name="secondary_color" id="secondary_color" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" v-model="form.secondary_color" >
              </div>
            </div>

<div class="grid grid-cols-3 gap-6">
              <div class="col-span-6 sm:col-span-3">
                <label for="location" class="block text-sm font-medium text-gray-700">location</label>
                <input type="text" name="location" id="location" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" v-model="form.location" >
              </div>
            </div>

<div class="grid grid-cols-3 gap-6">
              <div class="col-span-6 sm:col-span-3">
                <label for="description" class="block text-sm font-medium text-gray-700">description</label>
                <textarea id="description" name="description" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="you@example.com" v-model="form.description" ></textarea>
              </div>
            </div>

<div class="grid grid-cols-3 gap-6">
              <div class="col-span-6 sm:col-span-3">
                <label for="neighborhood_desc" class="block text-sm font-medium text-gray-700">neighborhood_desc</label>
                <textarea id="neighborhood_desc" name="neighborhood_desc" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="you@example.com" v-model="form.neighborhood_desc" ></textarea>
              </div>
            </div>



           
            <div>
              <label class="block text-sm font-medium text-gray-700"> Photo </label>
              <!-- <input type="file" @change="uploadFile" name="image" multiple> -->
              <input type="file" name="image" ref="files" @change="uploadimage" multiple/>
            </div>

            
          </div>
          <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="hidden sm:block" aria-hidden="true">
  <div class="py-5">
    <div class="border-t border-gray-200"></div>
  </div>
</div>




  </div>
</template>

<script>
// import { Inertia } from '@inertiajs/inertia'

// export default {  
//     props:{},
//      data(){
//          return{
//              form:{
//                 title: null,
//       type: null,
//       price: null,
//       beds: null,
//       floors: null,
//       baths: null,
//       lot_area: null,
//       lot_dimension: null,
//       home_area: null,
//       primary_color: null,
//       secondary_color: null,
//       description: null,
//       neighborhood_desc: null,
//       location: null,
//       images: [],
//              }
//          }
//      },
//      methods:{
//          uploadimage(e){
//              console.log(this.$refs.files.files);
//              for(let i = 0; i < this.$refs.files.files.length; i++){
//                 //  console.log(this.$refs.files.files[i]);
//                   this.form.images[i] = this.$refs.files.files[i]  ;
//                     // console.log(this.form.images[i]);
//                  this.images.push(this.$refs.files.files[i]);
                 
//              }
//             //  this.form.image = e.target.files;
//          },
//           submitform(){
            
//              let data = new FormData();
//               data.append('title', this.form.title);
//               data.append('price', this.form.desc);
//               let self = this;

//               for (let i = 0; i < this.images.length; i++) {
//                  let file = self.images[i];
//                   let a = data.append('files['+i+']', file);
//                     console.log(a);
//               }

//               const config = {
//                   headers: {"content-type" : "multipart/form-data"}
//               }
//              this.$inertia.post('post/create',data , config);
//          },


//             testing(event){
//           // console.dir(event.target.files)
//           // console.log(event);
//           this.images= event.target.files;
//           console.log(this.images);
//         },

//         uploadFile(){
//           // alert("triger");
//           var data = new FormData();
//           //send multiple images
//           // var files = event.target.files;
//             data.append("images[]" , files[i]);
//           data.append("title" , title );
//           Inertia.post(route('property.store'), this.form);
//           /*
//         //save image locally api
//           Inertia.post(route('upload'), data);
//           */

//         }
//      }
//     }
</script>