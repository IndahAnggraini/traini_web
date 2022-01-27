<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="/assets/css/login.css">
    {{-- <link rel="stylesheet" href="/assets/img/css/script.css"> --}}
    {{-- <link rel="stylesheet" href="/assets/img/css/scriptdua.css"> --}}
</head>
<body>
<div class="card signup_v4 mb-30">
    <div class="card-body" id="app">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation"> <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a> </li>
            <li class="nav-item" role="presentation"> <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a> </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                <h4 class="text-center mt-4 mb-4" style="text-transform: uppercase;">Login</h4>
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-12"> <label for="inputName">Your Email</label>
                            <input type="text" class="form-control" placeholder="Enter your email" required="" v-model="email">
                        </div>
                        <div class="form-group col-md-12"> <label for="inputName">Your Password</label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Enter your password" required="" v-model="pass">
                        </div>
                        <div class="form-group col-md-12">
                            <div class="d-flex flex-wrap justify-content-between align-items-center">
                                <div class="custom-checkbox d-block"> <label class="custom-control custom-checkbox checkbox-lg"> <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <div class="custom-control-label" for="customCheck1">Remember Password</div>
                                    </label> </div> <a href="#" target="_blank">Forgot Password?</a>
                            </div>
                        </div>
                    </div>
                    <div class="mt-2 mb-3"> <button class="btn btn-primary full-width" type="button" @click="submitLogin">Login</button> </div>
                </form>
                <div class="social-area">
                    <h3 class="title">Or</h3>
                    <p class="text">Sign In with social media</p>
                    <ul class="social-links">
                        <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>
                        <li> <a href="/auth/google"> <i class="fab fa-google-plus-g"></i> </a> </li>
                    </ul>
                </div>
            </div>
            <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                <h4 class="text-center mt-4 mb-4" style="text-transform: uppercase;">Register</h4>
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputName">Your Name</label>
                            <input type="text" class="form-control"  placeholder="Enter your name" required="" v-model="name">
                        </div>

                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputName">Your Level</label>
                            <select class="form-control" v-model="level">
                                <option value="">== Pilih Jenis Member ==</option>
                                <option value="penulis">Penulis</option>
                                <option value="pembaca">Pembaca</option>
                            </select>
                        </div>

                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12"> <label for="inputName">Your Email Address</label>
                            <input type="email" class="form-control" placeholder="Enter your email address" required="" v-model="email">
                        </div>

                        <div class="form-group col-md-12"> <label for="inputName">Your Password</label>
                            <input type="password" class="form-control"  placeholder="Enter your password" required="" v-model="pass">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12"> <label for="inputName">Your Confirm Password</label>
                            <input type="password" class="form-control"  placeholder="Enter your confirm password" required="" v-model="cpass">
                        </div>

                    </div>
                    <div class="form-group form-row">
                        <div class="col-md-12"> <label class="custom-control custom-checkbox checkbox-lg"> <input type="checkbox" class="custom-control-input">
                                <div class="custom-control-label" for="customCheck1">I agree with <a href="#" target="_blank">terms and conditions</a></div>
                            </label> </div>
                    </div>
                    <hr class="mt-3 mb-4">
                    <div class="col-12">
                        <div class="d-flex flex-wrap justify-content-between align-items-center">
                            <div class="custom-checkbox d-block"> <a href="https://demochecks.com/demo/fickrr/login" class="nav-link-inline font-size-sm">Already have an account? Login</a>
                            </div>
                             <button class="btn btn-primary mt-3 mt-sm-0" type="button" @click="submitRegister">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
{{-- <script src="/assets/img/js/satu.js"></script> --}}
{{-- <script src="/assets/img/js/dua.js"></script> --}}

<script src="/assets/js/vue3.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.js"></script>

<script>
const App = {
    data() {
        return {
            name:'',
            email:'',
            pass:'',
            cpass:'',
            level:'',
        }
    },
    methods: {
        submitRegister() {
            if(this.level && this.name && this.email && this.pass && this.cpass && (this.pass == this.cpass)) {
                console.log("ini submitRegister");
                console.log(this.name);

                let formData = new FormData();
                formData.append('name', this.name);
                formData.append('email', this.email);
                formData.append('pass', this.pass);
                formData.append('cpass', this.cpass);
                formData.append('level', this.level);

                axios.post('/submit-register', formData)
                .then(r => {
                    console.log("sukses register");
                    console.log(r.data);
                    //window berfungsi untk pindah halaman
                    window.location.href="/login/";
                });
            } else {
                console.log('gagal submitRegister');
            }
        },
        submitLogin() {
            if(this.email && this.pass) {
                console.log("ini submitLogin");

                let formData = new FormData();
                formData.append('email', this.email);
                formData.append('pass', this.pass);

                axios.post('/submit-login', formData)
                .then(r => {
                    console.log("sukses login");
                    // console.log(r);
                    if(r.data.page){
                        console.log(r.data.page);
                        window.location.href=r.data.page;
                    }
                });
            } else {
                console.log('gagal submitLogin');
            }
        },
    }
}

Vue.createApp(App).mount('#app');
</script>


</body>
</html>
