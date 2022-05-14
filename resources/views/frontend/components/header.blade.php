<style>
     {
 font-family: 'Righteous', cursive;
}
.nav-bar {
  height: 70px;
  background:#068587;
}
 
.brand {
  position: absolute;
  padding-left: 20px;
  float: left;
  line-height: 70px;
  text-transform: uppercase;
  font-size: 1.4em;
}
.brand a img {
 max-height: 70px;
}
.brand a,
.brand a:visited {
  color: #ffffff;
  text-decoration: none;
}
 
.nav-container {
  max-width: 1000px;
  margin: 0 auto;
}
 
nav {
  float: right;
}
nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
}
nav ul li {
  float: left;
  position: relative;
}
nav ul li a,
nav ul li a:visited {
  display: block;
  padding: 0 20px;
  line-height: 70px;
  background: #068587;
  color: #ffffff;
  text-decoration: none;
}
nav ul li a:hover,
nav ul li a:visited:hover {
  background: #068587;
  color: #ffffff;
}
nav ul li a:not(:only-child):after,
nav ul li a:visited:not(:only-child):after {
  padding-left: 4px;
  content: ' ▾';
}
nav ul li ul li {
  min-width: 190px;
}
nav ul li ul li a {
  padding: 15px;
  line-height: 20px;
}
 
.nav-dropdown {
  position: absolute;
  display: none;
  z-index: 1;
  box-shadow: 0 3px 12px rgba(0, 0, 0, 0.15);
}
.nav-mobile {
  display: none;
  position: absolute;
  top: 0;
  right: 0;
  background: #262626;
  height: 70px;
  width: 70px;
}
 
@media only screen and (max-width: 798px) {
  .nav-mobile {
    display: block;
  }
 
  nav {
    width: 100%;
    padding: 70px 0 15px;
  }
  nav ul {
    display: none;
  }
  nav ul li {
    float: none;
  }
  nav ul li a {
    padding: 15px;
    line-height: 20px;
 padding-left: 25%;
 
  }
  nav ul li ul li a {
    padding-left: 30%;
  }
 
  .nav-dropdown {
    position: static;
  }
 .brand a img {
 max-height: 60px;
 margin-top: 5px;
 }
}
@media screen and (min-width: 799px) {
  .nav-list {
    display: block !important;
  }
}
#nav-toggle {
  position: absolute;
  left: 18px;
  top: 22px;
  cursor: pointer;
  padding: 10px 35px 16px 0px;
}
#nav-toggle span,
#nav-toggle span:before,
#nav-toggle span:after {
  cursor: pointer;
  border-radius: 1px;
  height: 5px;
  width: 35px;
  background: #ffffff;
  position: absolute;
  display: block;
  content: '';
  transition: all 300ms ease-in-out;
}
#nav-toggle span:before {
  top: -10px;
}
#nav-toggle span:after {
  bottom: -10px;
}
#nav-toggle.active span {
  background-color: transparent;
}
#nav-toggle.active span:before, #nav-toggle.active span:after {
  top: 0;
}
#nav-toggle.active span:before {
  transform: rotate(45deg);
}
#nav-toggle.active span:after {
  transform: rotate(-45deg);
}
 
article {
  max-width: 1000px;
  margin: 0 auto;
  padding: 10px;
}
  </style>
  
 

  <section class="nav-bar sticky-top">
    <div class="nav-container ms-auto">
      <div class="brand">
        <a href="">Book-Resistration</a>
      </div>
      <nav>
        <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
        <ul class="nav-list">
          <li>
            <a href="/home">Home</a>
          </li>
          <li>
            <a href="/about">About</a>
          </li>
          <li>
            <a href="/collections">Collections</a>
            <ul class="nav-dropdown">
              <li>
                <a href="#">General</a>
              </li>
              <li>
                <a href="#">periodicals</a>
              </li>
              <li>
                <a href="#">Maps and Photograps</a>
              </li>
              <li>
                <a href="#">Microfilms</a>
              </li>
              <li>
                <a href="#">Audio and Visual</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#!">Library</a>
       <ul class="nav-dropdown">
              <li>
                <a href="#">Photoshop</a>
              </li>
              <li>
                <a href="#">Illustrator</a>
              </li>
              <li>
                <a href="#">InDesign</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="/news">News & Notice</a>
          </li>
          <li>
            <a href="/contact">Contact Us</a>
          </li>
          <button type="button" class="btn btn-light rounded-pill position-relative align-items-center mt-2">
            <a href="/my_cart"><img src="images/shopping-cart (4).png" alt=""></a>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
              1
              <span class="visually-hidden">unread messages</span>
            </span>
          </button>
          
          
        </ul>
      </nav>
    </div>
    
  </section>

 
