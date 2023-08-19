<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm sticky-top z-index-3">
    <div class="container">
        <a class="navbar-brand fw-bold me-5 fs-3 h-font" href="/Hwebsite/">SH HOTEL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active me-2" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="room.php">Rooms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="facilities.php">Facilities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="about.php">About</a>
                </li>


            </ul>
            <div class="d-flex gap-2">
                <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
                <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->

                <button type="button" class="btn btn-outline-dark shadow-none " data-bs-toggle="modal"
                    data-bs-target="#loginModel">
                    Login
                </button>
                <button type="button" class="btn btn-outline-dark shadow-none " data-bs-toggle="modal"
                    data-bs-target="#registerModel">
                    Register
                </button>
            </div>
        </div>
    </div>
</nav>
<div class="modal fade" id="loginModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="">
                <div class="modal-header d-flex align-item-center justify-content-center">
                    <h5 class="modal-title fs-5"><i class="bi bi-person-circle"></i> User Login </h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control">

                    </div>
                    <div class="mb-3">
                        <label class="form-label"></label>
                        <input type="password" class="form-control">
                    </div>
                    <div class="d-flex gap-3 text-align-center justify-content-between mb-2">
                        <button type=" submit" class="btn btn-primary">Login</button>
                        <a href="javascript: void(0)" class="text-decoration-none text-secondary">Don't have
                            password</a>
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>
<div class="modal fade " id="registerModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">
            <form action="">
                <div class="modal-header d-flex align-item-center justify-content-center">
                    <h5 class="modal-title fs-5"><i class="bi bi-person-lines-fill"></i> Register </h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="mb-3">

                                <label class="form-label"> FULL NAME </label>
                                <input type="text" class="form-control">

                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">EMAIL</label>
                                <input type="email" class="form-control">
                            </div>
                        </div>

                    </div>
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="mb-3">

                                <label class="form-label">PHONE</label>
                                <input type="text" class="form-control">

                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">PICTURE</label>
                                <input type="file" class="form-control">
                            </div>
                        </div>

                    </div>

                    <div class="row align-items-center">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">PINCODE</label>
                                <input type="text" name="" id="" class="form-control">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">

                                <label class="form-label"> DATE OF BIRTH </label>
                                <input type="date" name="" id="" class="form-control">

                            </div>
                        </div>


                    </div>
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">ADDRESS</label>
                                <textarea name="" id="" cols="30" rows="2" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">PASSWORD</label>
                                <input type="text" name="" id="" class="form-control">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">

                                <label class="form-label">C PASSWORD</label>
                                <input type="text" name="" id="" class="form-control">

                            </div>
                        </div>
                    </div>
                    <div class="d-flex gap-3 text-align-center justify-content-between mb-2">
                        <button type=" submit" class="btn btn-primary">Register</button>
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>