 <style>
  @import url('https://fonts.googleapis.com/css2?family=Fuzzy+Bubbles&display=swap');

  #navbar {
  display: flex;
  align-items: center;
  position: sticky;
  top: 0px;
  left: 0px;
  z-index: 5;
}

#navbar::before {
  content: "";
  background-color: rgb(47, 0, 190);
  position: absolute;
  height: 100%;
  width: 100%;
  z-index: -1;
  /* opacity: .5; */
}

/* NAVIGATION BAR LOGO SECTION  */

#logo {
  margin: 0px 0px;
}

#logo img {
  height: 80px;
  margin: 0px;
  transition-property: all;
  transition-duration: .4s;
}

#logo img:hover {
  cursor: pointer;
  /* transform:scale(1.5); */
  transform: translateY(10px) scale(1.3);
}

/* NAVIGATION BAR LIST SECTION  */

#navbar ul {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 5px;
}

#navbar ul li {
  list-style: none;
  font-size: 1.2rem;
}

#navbar ul li a {
  color: rgb(255, 255, 255);
  display: block;
  padding: 3px 30px;
  text-decoration: none;
  border-radius: 30px;
  transition-property: all;
  transition-duration: .4s;
  /* font-family: 'Baloo Bhaijaan 2', cursive; */
  font-family: 'Fuzzy Bubbles', cursive;

}

#navbar ul li a:hover {
  color: rgb(47, 0, 190);
  background-color: white;
  transform: scale(1.2) translate3d(0px, -5px, 0px);
}
 </style>
 <!-- Navigation-->
 <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-shrink" id="navbar">
            <div class="container-fluid">
              <div id="logo">
                <a class="navbar-brand" href="#page-top"><img src="\tourism\img\Safar logo.png" alt="SAFAR"></a>
              </div>
                <!-- <a class="navbar-brand" href="#page-top"><span class="text-waring">SAFAR</span></a> -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="<?php echo $page !='home' ? './':''  ?>">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="./?page=packages">Packages</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo $page !='home' ? './':''  ?>#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo $page !='home' ? './':''  ?>#contact">Contact</a></li>
                        <?php if(isset($_SESSION['userdata'])): ?>
                          <li class="nav-item"><a class="nav-link" href="./?page=my_account"><i class="fa fa-user"></i> Hi, <?php  echo $_settings->userdata('firstname') ?>!</a></li>
                          <li class="nav-item"><a class="nav-link" href="logout.php"><i class="fa fa-sign-out-alt"></i></a></li>
                        <?php else: ?>
                          <li class="nav-item"><a class="nav-link" href="javascript:void(0)" id="login_btn">Login</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
<script>
  $(function(){
    $('#login_btn').click(function(){
      uni_modal("","login.php","large")
    })
    $('#navbarResponsive').on('show.bs.collapse', function () {
        $('#mainNav').addClass('navbar-shrink')
    })
    $('#navbarResponsive').on('hidden.bs.collapse', function () {
        if($('body').offset.top == 0)
          $('#mainNav').removeClass('navbar-shrink')
    })
  })
</script>