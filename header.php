<header>  
  <img class="logo1" src="images/logo-1.png">
  <nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
    <i class="fa fa-bars" aria-hidden="true"></i>
    </label>
    <ul>        
        <li><a href="index">home</a></li>
        <li><a href="aboutUs">about us</a></li>
        <li><a href="ourService">Our Services</a></li>
        <li><a href="contactUs">contact us</a></li>
        <li><a href="contactUs">media</a></li>
    </ul>
  </nav>           
  <img class="logo2" src="images/logo-1.png">      
</header>
<script>
    window.addEventListener("scroll", function(){
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
    })
</script>