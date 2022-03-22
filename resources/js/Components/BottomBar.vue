<template>
    <div class="bottom-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-shadow">
                            <nav class="navbar navbar-expand-lg navbar-light bg-light border-radius-05">
                                <div class="container-fluid">
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav me-auto gap-3 mb-2 mb-lg-0">
                                            <li class="nav-item">
                                                <Link :href="route('dashboard')" class="nav-link active primary-color f-18" aria-current="page" ><i class="fas fa-th"></i> Home</Link>
                                            </li>
                                            <li class="nav-item">
                                                <Link :href="route('property.index')" class="nav-link secondary-color f-18"><i class="fas fa-city"></i> My Properties</Link>
                                            </li>
                                            <li class="nav-item">
                                                <Link :href="route('profile.show')" class="nav-link secondary-color f-18" ><i class="fas fa-user"></i> Profile</Link>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue'
export default {
    name: "BottomBar",
    components: { Link },
}
</script>