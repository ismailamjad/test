<template>
    <div>
        <h4 class="f-22">Contact Agent</h4>
        <div class="d-flex align-items-center mb-4 mt-4">
            <div class="flex-shrink-0">
                <img
                    src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-profiles/avatar-2.webp"
                    alt="Generic placeholder image"
                    class="img-fluid rounded-circle border border-dark border-3"
                    style="width: 70px;"
                />
            </div>
            <div class="flex-grow-1 ms-3">
                <div class="d-flex flex-column mb-2">
                    <h6 class="mb-0 me-2 f-22">Agent Name</h6>
                    <ul
                        class="mb-0 list-unstyled d-flex flex-row"
                        style="color: #E2B600;">
                        <li>
                            <i class="fas fa-star fa-xs"></i>
                        </li>
                        <li>
                            <i class="fas fa-star fa-xs"></i>
                        </li>
                        <li>
                            <i class="fas fa-star fa-xs"></i>
                        </li>
                        <li>
                            <i class="fas fa-star fa-xs"></i>
                        </li>
                        <li>
                            <i class="fas fa-star fa-xs"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <form class="detail-form"  @submit.prevent="ContactAgent">
            <div class="form-group">
                <label class="f-18 mb-2 mt-3" for="exampleInputName"
                    >Name</label>
                <input
                    type="text" v-model="agentForm.name"
                    class="form-control f-16 "
                    id="exampleInputName"
                    placeholder="Name"/>
            </div>
            <div class="form-group">
                <label class="f-18 mb-2 mt-3" for="exampleInputEmail1"
                    >Email</label
                >
                <input
                    type="email" v-model="agentForm.email"
                    class="form-control f-16"
                    id="exampleInputEmail1"
                    aria-describedby="emailHelp"
                    placeholder="Email"
                />
            </div>
            <div class="form-group">
                <label class="f-18 mb-2 mt-3" for="exampleInputPhone"
                    >Phone</label
                >
                <input
                    type="text" v-model="agentForm.phone"
                    class="form-control f-16"
                    id="exampleInputPhone"
                    placeholder="Phone"
                />
            </div>
            <div class="form-group">
                <label class="f-18 mb-2 mt-3" for="exampleInputMessage"
                    >Message</label
                >
                <textarea v-model="agentForm.message"
                    class="form-control f-16"
                    id="exampleFormControlTextarea1"
                    rows="4"
                    placeholder="Message"
                ></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>
</template>

<script>
export default {
    name: "AgentForm",

     data: () => ({
               
            agentForm: {
                name: null ,
                email: null,
                phone: null,
                message: null
                }
            }),
    methods:{
        ContactAgent() {
            let data = new FormData();
            data.append('name', this.agentForm.name);
            data.append('email', this.agentForm.email);
            data.append('phone', this.agentForm.phone);
            data.append('message', this.agentForm.message);
            data.append('property_id', 1);
            //working on id should be dynamic
            console.log(this.$route.params.id);
            this.$inertia.post('/property/'+ 1 + '/contact',data).then(response => {
            this.$toaster.success('Your toaster success message.');
            });
        },
       
    },

};
</script>
