<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KLD PARADISE</title>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
</head>



<!-- TEST 2 -->
<!-- COMMENT TEST -->
 




<body>

  <header>
    <div class="container content flex_space">
      <div class="logo">
        <h1>KLD PARADISE</h1>
      </div>
  
      <div class="navlinks">
        <ul id="menulist" class="menu-hidden">
          <li><a href="#">home</a></li>
          <li><a href="#about">about</a></li>
          <li><a href="#rooms">rooms</a></li>
          <li><a href="#contact">contact</a></li>
          <li><button class="primary-btn" onclick="openModal('signUpModal')">Sign Up</button></li>
        </ul>
        <span class="fa fa-bars" id="burger" onclick="menutoggle()"></span>
      </div>
    </div>
  </header>
  
  
  

<script>
function menutoggle() {
  const menu = document.getElementById("menulist");
  const burger = document.getElementById("burger");
  
  menu.classList.toggle("menu-visible");
  burger.classList.toggle("active");

  // Change burger icon to X
  if (burger.classList.contains("active")) {
    burger.classList.remove("fa-bars");
    burger.classList.add("fa-times");
  } else {
    burger.classList.remove("fa-times");
    burger.classList.add("fa-bars");
  }
}

// Close the menu when a link is clicked and revert the icon back to burger
const links = document.querySelectorAll('#menulist a, #menulist button');
links.forEach(link => {
  link.addEventListener('click', () => {
    const menu = document.getElementById("menulist");
    const burger = document.getElementById("burger");

    menu.classList.remove("menu-visible"); // Close the menu
    // Ensure the burger icon returns to the original state (burger)
    burger.classList.remove("fa-times");
    burger.classList.add("fa-bars");
    burger.classList.remove("active"); // Reset active state
  });
});


</script>














  <!-- Sign-Up Modal -->
  <div id="signUpModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal('signUpModal')">&times;</span>
      <h2>Sign Up</h2>
      <form>
        <input type="text" placeholder="Enter Username" required>
        <input type="email" placeholder="Enter Email" required>
        <input type="password" placeholder="Enter Password" required>
        <input type="password" placeholder="Confirm Password" required>
        <br>
        <button type="submit" class="primary-btn">Sign Up</button>
      </form>
      <p>Already have an account? <a href="#" onclick="switchModal('signUpModal', 'loginModal')">Click here to login</a></p>
    </div>
  </div>
  
  <!-- Login Modal -->
  <div id="loginModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal('loginModal')">&times;</span>
      <h2>Login</h2>
      <form>
        <input type="email" placeholder="Enter Email" required>
        <input type="password" placeholder="Enter Password" required>
        <br>
        <button type="submit" class="primary-btn">Login</button>
      </form>
    </div>
  </div>
  
<script>
// Open the modal
function openModal(modalId) {
  document.getElementById(modalId).style.display = 'block';
}

// Close the modal
function closeModal(modalId) {
  document.getElementById(modalId).style.display = 'none';
}

// Switch between modals (sign-up and login)
function switchModal(closeModalId, openModalId) {
  closeModal(closeModalId);
  openModal(openModalId);
}

// Close modal if clicked outside the modal content
window.onclick = function(event) {
  const signUpModal = document.getElementById('signUpModal');
  const loginModal = document.getElementById('loginModal');
  
  if (event.target == signUpModal) {
    closeModal('signUpModal');
  }
  
  if (event.target == loginModal) {
    closeModal('loginModal');
  }
}


</script>


  <section class="home" >
    <div class="content">
      <div class="">
        <div class="item">
          <img src="images/banner-1.png" alt="">
          <div class="text">
            <h1>Paradise isn't a place,<br> It's a feeling.</h1>
           
            <div class="flex">
              <button class="primary-btn">READ MORE</button>
              <button class="secondary-btn">CONTACT US</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"
  referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous"
  referrerpolicy="no-referrer"></script>
<script>
  $('.owl-carousel').owlCarousel({
    loop: true,
    margin: 0,
    nav: true,
    dots: false,
    navText: ["<i class = 'fa fa-chevron-left'></i>", "<i class = 'fa fa-chevron-right'></i>"],
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 1
      },
      1000: {
        items: 1
      }
    }
  })
</script>



  <section class="book">
    <div class="container flex_space">
      <div class="text">
        <h1> <span>Book </span> Your Rooms </h1>
      </div>
      <div class="form">
        <form class="grid">
          <input type="date" placeholder="Araival Date">
          <input type="date" placeholder="Departure Date">
          <input type="number" placeholder="Adults">
          <input type="number" placeholder="Childern">
          <input type="submit" value="CHECK AVAILABILITY">
        </form>
      </div>
    </div>
  </section>



  <section class="about top" id="about">
    <div class="container flex">
      <div class="left">
        <div class="heading">
          <h1>WELCOME</h1>
          <h2>Crowny Hotel</h2>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
          aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <button class="primary-btn">See more</button>
      </div>
      <div class="right">
        <img src="./img/./kld.jpg" alt="">
      </div>
    </div>
  </section>

  <section class="counter top">
    <div class="container grid">
      <div class="box">
        <h1>2500</h1>
        <hr>
        <span>Customer</span>
      </div>
      <div class="box">
        <h1>1250</h1>
        <hr>
        <span>Happy Customer</span>
      </div>
      <div class="box">
        <h1>150</h1>
        <hr>
        <span>Expert Technicians</span>
      </div>
      <div class="box">
        <h1>3550</h1>
        <hr>
        <span>Desktop Reaired</span>
      </div>
    </div>
  </section>


  <section class="rooms">
    <div class="container top">
      <div class="heading">
        <h1>EXPOLRE</h1>
        <h2>Our Rooms</h2>
        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        </p>
      </div>

      <div class="content mtop">
        <div class="owl-carousel owl-carousel1 owl-theme">
          <div class="items">
            <div class="image">
              <img src="images/room-1.png" alt="">
            </div>
            <div class="text">
              <h2>SINGLE/PENTHOUSE</h2>
              <div class="rate flex">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>1 - 2 Person
              </p>
              <div class="button flex">
                <button class="primary-btn">BOOK NOW</button>
                <h3>$250 </h3>
              </div>
            </div>
          </div>
          <div class="items">
            <div class="image">
              <img src="images/room-2.png" alt="">
            </div>
            <div class="text">
              <h2>DOUBLE</h2>
              <div class="rate flex">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>2 - 3 Person
              </p>
              <div class="button flex">
                <button class="primary-btn">BOOK NOW</button>
                <h3>$250</h3>
              </div>
            </div>
          </div>
          <div class="items">
            <div class="image">
              <img src="images/room-3.png" alt="">
            </div>
            <div class="text">
              <h2>HOTEL</h2>
              <div class="rate flex">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>5 - 4 Person
              </p>
              <div class="button flex">
                <button class="primary-btn">BOOK NOW</button>
                <h3>$250 </h3>
              </div>
            </div>
          </div>
          <div class="items">
            <div class="image">
              <img src="images/room-4.png" alt="">
            </div>
            <div class="text">
              <h2>DELUXE</h2>
              <div class="rate flex">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>5 - 6 Person
              </p>
              <div class="button flex">
                <button class="primary-btn">BOOK NOW</button>
                <h3>$250</h3>
              </div>
            </div>
          </div>
          <div class="items">
            <div class="image">
              <img src="images/room-5.png" alt="">
            </div>
            <div class="text">
              <h2>FAMILY</h2>
              <div class="rate flex">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>6 - 7 Person
              </p>
              <div class="button flex">
                <button class="primary-btn">BOOK NOW</button>
                <h3>$250</h3>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
    $('.owl-carousel1').owlCarousel({
      loop: true,
      margin: 40,
      nav: false, 
      dots: false,
      autoplay: true, 
      autoplayTimeout: 2000, 
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 2,
          margin: 10,
        },
        1000: {
          items: 3
        }
      }
    });
  </script>
  



  <section class="Customer top">
    <div class="container">
      <div class="owl-carousel owl-carousel2 owl-theme">
        <div class="item">
          <i class="fa-solid fa-quote-right"></i>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <h3>MANOY</h3>
        
        </div>
        <div class="item">
          <i class="fa-solid fa-quote-right"></i>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <h3>RAVEN</h3>
        
        </div>
        <div class="item">
          <i class="fa-solid fa-quote-right"></i>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <h3>BOSSING</h3>
       
        </div>
      </div>
    </div>
  </section>
  <script>
    $('.owl-carousel2').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      dots: true,
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 1,
        },
        1000: {
          items: 1
        }
      }
    })
  </script>





  <footer>
    <div class="container grid">
      <div class="box">
       <h1 style="padding-bottom: 20px;">KLD PARADISE</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
          aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <div class="icon">
          <i class="fa fa-facebook-f"></i>
          <i class="fa fa-instagram"></i>
          <i class="fa fa-twitter"></i>
          <i class="fa fa-youtube"></i>
        </div>
      </div>

      <div class="box">
        <h2>Links</h2>
        <ul>
          <li>Home</li>
          <li>About Us</li>
          <li>Contact Us</li>
        </ul>
      </div>

      <div class="box">
        <h2>Contact Us</h2>
        <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
        </p>
        <i class="fa fa-location-dot"></i>
        <label>1201 park street, Avenue, Dhanmondy, Dhaka. </label> <br>
        <i class="fa fa-phone"></i>
        <label>[88] 657 524 332</label> <br>
        <i class="fa fa-envelope"></i>
        <label>info@dentar.com</label> <br>
      </div>
    </div>
  </footer>




  
  <script src="https://kit.fontawesome.com/032d11eac3.js" crossorigin="anonymous"></script>
</body>

</html>