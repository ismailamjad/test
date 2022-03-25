<template>
     <div class="main-header">
         
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#"> <img src="/assets/images/logo.png" class="img-fluid" /></a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                                <form class="d-flex">
                                    <input class="form-control me-2 bg-transparent" type="search" placeholder="Search" aria-label="Search" />
                                </form>
                                <ul class="navbar-nav justify-content-end mb-2 mb-lg-0">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle text-white d-flex align-items-center gap-2" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <div><img src="/assets/images/circle.png" /></div>
                                            <div>Marker</div>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li>
                                                <a class="dropdown-item" href="#">Another action</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
</template>

<script>
export default {
    name: 'TopBar'
}
</script>