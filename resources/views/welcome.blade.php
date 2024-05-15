<!DOCTYPE html>
<html>

<head>
  <title>ONATO Portfolio</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: "Montserrat", sans-serif
    }

    .w3-row-padding img {
      margin-bottom: 12px
    }

    /* Set the width of the sidebar to 120px */
    .w3-sidebar {
      width: 120px;
      background: #222;
    }

    /* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
    #main {
      margin-left: 120px
    }

    /* Remove margins from "page content" on small screens */
    @media only screen and (max-width: 600px) {
      #main {
        margin-left: 0
      }
    }
  </style>
</head>

<body class="w3-black">

  <!-- Icon Bar (Sidebar - hidden on small screens) -->
  <nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
    <!-- Avatar image in top left corner -->
    <img
      src="https://scontent.fmnl9-4.fna.fbcdn.net/v/t39.30808-6/360166989_939512187128702_663139126402205378_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeG6NaYzwLaWm9zhFfla7kGaj5VfkPSPOS-PlV-Q9I85L0q50VcsElgv3vksq34C7dgsqG5FHlk8Wq23Yyt5toMJ&_nc_ohc=_0bKKIIAKFYQ7kNvgFZ96_H&_nc_ht=scontent.fmnl9-4.fna&oh=00_AYDNTdht15HXw35gVmbtiBZzzCIoF9j-qjlzIaNDXRoxzA&oe=6649DFDD"
      style="width:100%">
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
      <i class="fa fa-home w3-xxlarge"></i>
      <p>HOME</p>
    </a>
    <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
      <i class="fa fa-user w3-xxlarge"></i>
      <p>ABOUT</p>
    </a>
    <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
      <i class="fa fa-eye w3-xxlarge"></i>
      <p>PHOTOS</p>
    </a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
      <i class="fa fa-envelope w3-xxlarge"></i>
      <p>CONTACT</p>
    </a>
  </nav>

  <!-- Navbar on small screens (Hidden on medium and large screens) -->
  <div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
    <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
      <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
      <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
      <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">PHOTOS</a>
      <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
    </div>
  </div>

  <!-- Page Content -->
  <div class="w3-padding-large" id="main">
    <!-- Header/Home -->
    <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
      <h1 class="w3-jumbo"><span class="w3-hide-small">I'm</span> John Michael Onato</h1>
      <p>A Web Developer and Designer.</p>
      <img
        src="https://scontent.fmnl9-4.fna.fbcdn.net/v/t39.30808-6/360166989_939512187128702_663139126402205378_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeG6NaYzwLaWm9zhFfla7kGaj5VfkPSPOS-PlV-Q9I85L0q50VcsElgv3vksq34C7dgsqG5FHlk8Wq23Yyt5toMJ&_nc_ohc=_0bKKIIAKFYQ7kNvgFZ96_H&_nc_ht=scontent.fmnl9-4.fna&oh=00_AYDNTdht15HXw35gVmbtiBZzzCIoF9j-qjlzIaNDXRoxzA&oe=6649DFDD"
        alt="" class="w3-image" width="992" height="1108">
    </header>

    <!-- About Section -->
    <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
      <h2 class="w3-text-light-grey"></h2>
      <hr style="width:200px" class="w3-opacity">
      <p>
        John Michael Onato
      </p>
      <p>
        A Bachelor of Science in Information Technology student.
      </p>
      <p>
        I am currently studying at the Saint Louis College.
      </p>
      <p>
        Located at City of San Fernando, La Union.
      </p>
      <h3 class="w3-padding-16 w3-text-light-grey">My Skills</h3>
      <p class="w3-wide">A web Developer</p>
      <div class="w3-white">
        <div class="w3-dark-grey" style="height:28px;width:85%"></div>
      </div>
      <p class="w3-wide">A web designer</p>
      <div class="w3-white">
        <div class="w3-dark-grey" style="height:28px;width:60%"></div>
      </div><br>

      <div class="w3-row w3-center w3-padding-16 w3-section w3-light-grey">
        <div class="w3-quarter w3-section">
          <span class="w3-xlarge">3</span><br>
          Partners
        </div>
        <div class="w3-quarter w3-section">
          <span class="w3-xlarge">5</span><br>
          Projects Done
        </div>
        <div class="w3-quarter w3-section">
          <span class="w3-xlarge">10</span><br>
          Happy Clients
        </div>
        <div class="w3-quarter w3-section">
          <span class="w3-xlarge">30</span><br>
          Meetings
        </div>
      </div>

      <!-- Portfolio Section -->
      <div class="w3-padding-64 w3-content" id="photos">
        <h2 class="w3-text-light-grey">My Photos</h2>
        <hr style="width:200px" class="w3-opacity">

        <!-- Grid for photos -->
        <div class="w3-row-padding" style="margin:0 -16px">
          <div class="w3-half">
            <img
              src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSXf1Fg65XNPH2np168FQlyZPWVxa7b5QnWdjVDzrTiKQ&s"
              style="width:100%">
            <img
              src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRcmVENr1CMHefeL8b8D-230EQZYAuk9FLGIB8CcrkoRw&s"
              style="width:100%">
            <img src="https://i.pinimg.com/originals/65/b7/43/65b743cb3fcf0e32690826bfefc6a63c.jpg" style="width:100%">
            <img
              src="https://i1.adis.ws/i/canon/canon-get-inspired-urban-nature-photography-tips-1-1920x1080-tint?$og-image$"
              style="width:100%">

          </div>

          <div class="w3-half">
            <img src="https://iso.500px.com/wp-content/uploads/2016/10/stock-photo-159358357.jpg" style="width:100%">
            <img
              src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTeVKtv6ofT3IAEzjUw273oNTQWbabrtAl0e8dRXmekgA&s"
              style="width:100%">
            <img
              src="https://marketplace.canva.com/EAFu6-hPDWQ/1/0/1600w/canva-black-simple-capture-dream-photography-logo-iM9z3aAKDwU.jpg"
              style="width:100%">
          </div>
          <!-- End photo grid -->
        </div>
        <!-- End Portfolio Section -->
      </div>

      <!-- Contact Section -->
      <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
        <h2 class="w3-text-light-grey">Contact Me</h2>
        <hr style="width:200px" class="w3-opacity">

        <div class="w3-section">
          <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Napaset, Luna, La Union</p>
          <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone: +63 9501119376</p>
          <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email:
            onatojohnmichael23@gmail.com</p>
        </div><br>
        <p>Let's get in touch. Send me a message:</p>

        <form action="/action_page.php" target="_blank">
          <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
          <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="Email"></p>
          <p><input class="w3-input w3-padding-16" type="text" placeholder="Subject" required name="Subject"></p>
          <p><input class="w3-input w3-padding-16" type="text" placeholder="Message" required name="Message"></p>
          <p>
            <button class="w3-button w3-light-grey w3-padding-large" type="submit">
              <i class="fa fa-paper-plane"></i> SEND MESSAGE
            </button>
          </p>
        </form>
        <!-- End Contact Section -->
      </div>

      <!-- Footer -->
      <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
        <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank"
            class="w3-hover-text-green">w3.css</a></p>
        <!-- End footer -->
      </footer>

      <!-- END PAGE CONTENT -->
    </div>

</body>

</html>