<style>
body { 
  background-color: #161E31; 
  font-family: "Raleway-SemiBold";
  overflow: hidden;
}

.blob1 {
  position: absolute;
  left:0;
  width: 35%;
}

.blob2 {
  display: flex;
  position: absolute;
  top: 60%;
  left: 90%;
  width: 18%;
}

.container {
  filter: drop-shadow(8px 8px rgba(45, 45, 45, 0.544));
}
@media (min-width: 375px) and (max-width: 800px ) {
  body {
    overflow: hidden;
  }
  .blob1 {
    position: relative;
    width: 60%;
   }
  .blob2 {
    position: absolute;
    left: 50%;
    padding: auto;
    width: 46%;
  }
}

@font-face {
    font-family: "Raleway-SemiBold";
    src: url('assets/Raleway-SemiBold.ttf');
  }
</style>
<div class="tk-blob blob1" style="--time: 30s; --amount: 8; --fill: #26293C;">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 747.2 726.7">
    <path d="M539.8 137.6c98.3 69 183.5 124 203 198.4 19.3 74.4-27.1 168.2-93.8 245-66.8 76.8-153.8 136.6-254.2 144.9-100.6 8.2-214.7-35.1-292.7-122.5S-18.1 384.1 7.4 259.8C33 135.6 126.3 19 228.5 2.2c102.1-16.8 213.2 66.3 311.3 135.4z"></path>
  </svg>
</div>
<div class="tk-blob blob2" style="--time: 10s; --amount: 10; --fill: #26293C;">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 317.5 353.7">
    <path d="M291.8 55.3c30.4 39.9 30.7 102 17 160.4-13.8 58.3-41.6 112.9-84 130.9s-99.3-.6-137-30C50.2 287.1 32 246.9 17 200.5 2.1 154.1-9.6 101.4 11.5 63.6 32.6 25.8 86.6 2.8 143.8.2c57.2-2.6 117.6 15.2 148 55.1z"></path>
  </svg>
</div>

<div class="container justify-content-center position-absolute top-50 start-50 translate-middle">
    <div class="row justify-content-center">
      <div class="col-11 col-md-6 col-lg-4 text-center text-light" style="background-color:#2D3250">
      <div class="text-center mt-4">
          <img src="assets/img/logo amikom 1.png" style="width:15%; position:center" alt="">
        </div>
        <p class="text-center mt-1"><b>Universitas Amikom </b>Yogyakarta</p>
              <form action="<?php echo site_url('Login/autentikasi');?>" method="POST" class="my-5 mx-3" class="input-group">
                  <div class="my-3">
                    <img src="assets/img/vector.png" alt="">
                    <input class="input-login" placeholder="email" name="email" type="email" name="email" id="email">
                  </div>
                  <div>
                    <img src="assets/img/vector (1).png" alt="">
                    <input class="input-login" placeholder="Password" name="pass" type="password" name="password" id="password">
                  </div>
                  <input type="submit" class="btn shadow my-5" style="width: 50%; background-color:#FF9F36; color:#F8F9FA">
                  <p>Belum punya akun? Hubungi saya</p>
              </form>
      </div>
      <div class="col-11 col-md-6 col-lg-4" style="background-image: url(assets/img/Cybersecurity.jpeg); background-size: cover; background-position: center center;">
      </div>
    </div>
</div>
