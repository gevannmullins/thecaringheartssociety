<style>
.cd-nav-trigger {
  position: fixed;
  z-index: 3;
  left: 5%;
  top: 20px;
  height: 54px;
  width: 54px;
  background-color: #243040;
  border-radius: 50%;
  /* image replacement */
  overflow: hidden;
  text-indent: 100%;
  white-space: nowrap;
  -webkit-transition: -webkit-transform 0.5s;
  -moz-transition: -moz-transform 0.5s;
  transition: transform 0.5s;
}
.cd-nav-trigger .cd-nav-icon {
  /* icon created in CSS */
  position: absolute;
  left: 50%;
  top: 50%;
  bottom: auto;
  right: auto;
  -webkit-transform: translateX(-50%) translateY(-50%);
  -moz-transform: translateX(-50%) translateY(-50%);
  -ms-transform: translateX(-50%) translateY(-50%);
  -o-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
  width: 22px;
  height: 2px;
  background-color: #ffffff;
}
.cd-nav-trigger .cd-nav-icon::before, .cd-nav-trigger .cd-nav-icon:after {
  /* upper and lower lines of the menu icon */
  content: '';
  position: absolute;
  top: 0;
  right: 0;
  width: 100%;
  height: 100%;
  background-color: inherit;
  /* Force Hardware Acceleration in WebKit */
  -webkit-transform: translateZ(0);
  -moz-transform: translateZ(0);
  -ms-transform: translateZ(0);
  -o-transform: translateZ(0);
  transform: translateZ(0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-transition: -webkit-transform 0.5s, width 0.5s, top 0.3s;
  -moz-transition: -moz-transform 0.5s, width 0.5s, top 0.3s;
  transition: transform 0.5s, width 0.5s, top 0.3s;
}
.cd-nav-trigger .cd-nav-icon::before {
  -webkit-transform-origin: right top;
  -moz-transform-origin: right top;
  -ms-transform-origin: right top;
  -o-transform-origin: right top;
  transform-origin: right top;
  -webkit-transform: translateY(-6px);
  -moz-transform: translateY(-6px);
  -ms-transform: translateY(-6px);
  -o-transform: translateY(-6px);
  transform: translateY(-6px);
}
.cd-nav-trigger .cd-nav-icon::after {
  -webkit-transform-origin: right bottom;
  -moz-transform-origin: right bottom;
  -ms-transform-origin: right bottom;
  -o-transform-origin: right bottom;
  transform-origin: right bottom;
  -webkit-transform: translateY(6px);
  -moz-transform: translateY(6px);
  -ms-transform: translateY(6px);
  -o-transform: translateY(6px);
  transform: translateY(6px);
}
.no-touch .cd-nav-trigger:hover .cd-nav-icon::after {
  top: 2px;
}
.no-touch .cd-nav-trigger:hover .cd-nav-icon::before {
  top: -2px;
}
.cd-nav-trigger svg {
  position: absolute;
  top: 0;
  left: 0;
}
.cd-nav-trigger circle {
  /* circle border animation */
  -webkit-transition: stroke-dashoffset 0.4s 0s;
  -moz-transition: stroke-dashoffset 0.4s 0s;
  transition: stroke-dashoffset 0.4s 0s;
}
.navigation-is-open .cd-nav-trigger {
  /* rotate trigger when navigation becomes visible */
  -webkit-transform: rotate(180deg);
  -moz-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  -o-transform: rotate(180deg);
  transform: rotate(180deg);
}
.navigation-is-open .cd-nav-trigger .cd-nav-icon::after,
.navigation-is-open .cd-nav-trigger .cd-nav-icon::before {
  /* animate arrow --> from hamburger to arrow */
  width: 50%;
  -webkit-transition: -webkit-transform 0.5s, width 0.5s;
  -moz-transition: -moz-transform 0.5s, width 0.5s;
  transition: transform 0.5s, width 0.5s;
}
.navigation-is-open .cd-nav-trigger .cd-nav-icon::before {
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  transform: rotate(45deg);
}
.navigation-is-open .cd-nav-trigger .cd-nav-icon::after {
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  transform: rotate(-45deg);
}
.no-touch .navigation-is-open .cd-nav-trigger:hover .cd-nav-icon::after, .no-touch .navigation-is-open .cd-nav-trigger:hover .cd-nav-icon::before {
  top: 0;
}
.navigation-is-open .cd-nav-trigger circle {
  stroke-dashoffset: 0;
  -webkit-transition: stroke-dashoffset 0.4s 0.3s;
  -moz-transition: stroke-dashoffset 0.4s 0.3s;
  transition: stroke-dashoffset 0.4s 0.3s;
}
@media only screen and (min-width: 1170px) {
  .cd-nav-trigger {
    top: 40px;
  }
}

.cd-nav {
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background-color: #243040;
  visibility: hidden;
  -webkit-transition: visibility 0s 0.7s;
  -moz-transition: visibility 0s 0.7s;
  transition: visibility 0s 0.7s;
}
.cd-nav .cd-navigation-wrapper {
  /* all navigation content */
  height: 100%;
  overflow-y: auto;
  -webkit-overflow-scrolling: touch;
  padding: 40px 5% 40px calc(5% + 80px);
  /* Force Hardware Acceleration in WebKit */
  -webkit-transform: translateZ(0);
  -moz-transform: translateZ(0);
  -ms-transform: translateZ(0);
  -o-transform: translateZ(0);
  transform: translateZ(0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-transform: translateX(-50%);
  -moz-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  -o-transform: translateX(-50%);
  transform: translateX(-50%);
  -webkit-transition: -webkit-transform 0.7s;
  -moz-transition: -moz-transform 0.7s;
  transition: transform 0.7s;
  -webkit-transition-timing-function: cubic-bezier(0.86, 0.01, 0.77, 0.78);
  -moz-transition-timing-function: cubic-bezier(0.86, 0.01, 0.77, 0.78);
  transition-timing-function: cubic-bezier(0.86, 0.01, 0.77, 0.78);
}
.navigation-is-open .cd-nav {
  visibility: visible;
  -webkit-transition: visibility 0s 0s;
  -moz-transition: visibility 0s 0s;
  transition: visibility 0s 0s;
}
.navigation-is-open .cd-nav .cd-navigation-wrapper {
  -webkit-transform: translateX(0);
  -moz-transform: translateX(0);
  -ms-transform: translateX(0);
  -o-transform: translateX(0);
  transform: translateX(0);
  -webkit-transition: -webkit-transform 0.5s;
  -moz-transition: -moz-transform 0.5s;
  transition: transform 0.5s;
  -webkit-transition-timing-function: cubic-bezier(0.82, 0.01, 0.77, 0.78);
  -moz-transition-timing-function: cubic-bezier(0.82, 0.01, 0.77, 0.78);
  transition-timing-function: cubic-bezier(0.82, 0.01, 0.77, 0.78);
}
.cd-nav h2 {
  position: relative;
  margin-bottom: 1.7em;
  font-size: 1.3rem;
  font-weight: 800;
  color: #080b0f;
  text-transform: uppercase;
}
.cd-nav h2::after {
  /* bottom separation line */
  content: '';
  position: absolute;
  left: 0;
  bottom: -20px;
  height: 1px;
  width: 60px;
  background-color: currentColor;
}
.cd-nav .cd-primary-nav {
  margin-top: 60px;
}
.cd-nav .cd-primary-nav li {
  margin: 1.6em 0;
}
.cd-nav .cd-primary-nav a {
  font-family: "Merriweather", serif;
  font-size: 2.4rem;
  color: rgba(255, 255, 255, 0.3);
  display: inline-block;
}
.cd-nav .cd-primary-nav a.selected {
  color: #ffffff;
}
.no-touch .cd-nav .cd-primary-nav a:hover {
  color: #ffffff;
}
.cd-nav .cd-contact-info {
  margin-top: 80px;
}
.cd-nav .cd-contact-info li {
  font-family: "Merriweather", serif;
  margin-bottom: 1.5em;
  line-height: 1.2;
  color: rgba(255, 255, 255, 0.3);
}
.cd-nav .cd-contact-info a {
  color: #ffffff;
}
.cd-nav .cd-contact-info span {
  display: block;
}
.cd-nav .cd-contact-info li, .cd-nav .cd-contact-info a, .cd-nav .cd-contact-info span {
  font-size: 1.6rem;
}
@media only screen and (min-width: 1170px) {
  .cd-nav .cd-navigation-wrapper {
    padding: 62px 20%;
  }
  .cd-nav .cd-navigation-wrapper::after {
    clear: both;
    content: "";
    display: table;
  }
  .cd-nav .cd-half-block {
    width: 50%;
    float: left;
  }
  .cd-nav .cd-primary-nav {
    margin-top: 0;
  }
  .cd-nav h2 {
    font-size: 1.5rem;
    margin-bottom: 5.6em;
  }
  .cd-nav .cd-primary-nav li {
    margin: 2em 0;
  }
  .cd-nav .cd-primary-nav a {
    font-size: 4.4rem;
  }
  .cd-nav .cd-contact-info {
    margin-top: 120px;
    text-align: right;
  }
  .cd-nav .cd-contact-info li {
    margin-bottom: 2.4em;
  }
  .cd-nav .cd-contact-info li, .cd-nav .cd-contact-info a, .cd-nav .cd-contact-info span {
    font-size: 2rem;
  }
}

.no-js main {
  height: auto;
  overflow: visible;
}

.no-js .cd-nav {
  position: static;
  visibility: visible;
}
.no-js .cd-nav .cd-navigation-wrapper {
  height: auto;
  overflow: visible;
  padding: 100px 5%;
  -webkit-transform: translateX(0);
  -moz-transform: translateX(0);
  -ms-transform: translateX(0);
  -o-transform: translateX(0);
  transform: translateX(0);
}

</style>
<!-- Sticky header -->
  <header class="header-outer" style="border-bottom:2px solid #ffffff">
    <div class="header-inner responsive-wrapper">
      <div class="header-logo">
        <!-- <img src="https://assets.codepen.io/285131/acme-2.svg" /> -->
        <img id="headerLogo" src="https://thecaringheartssociety.co.za/assets/thecaringheartlogo.png" />
        
        <h3 id="header">The Caring Hearts Society</h3>
      </div>
      <nav class="header-navigation">
        <a href="/">HOME</a>
        <a href="/whoweare">WHO WE ARE</a>
        <a href="/waystogive">WAYS TO GIVE</a>
        <a href="/campaign">CAMPAIGNS</a>
        <a href="/contact">CONTACT</a>
        <!-- <button id="menu_button" onclick="myFunction()">MENU</button> -->
        <button class="cd-nav-trigger">Menu
          <span class="cd-nav-icon"></span>

          <svg x="0px" y="0px" width="54px" height="54px" viewBox="0 0 54 54">
            <circle fill="transparent" stroke="#656e79" stroke-width="1" cx="27" cy="27" r="25" stroke-dasharray="157 157" stroke-dashoffset="157"></circle>
          </svg>
        </button>

      </nav>

    </div>
  </header>

  <div id="cd-nav" class="cd-nav">
		<div class="cd-navigation-wrapper">
			<div class="cd-half-block">
				<h2>Navigation</h2>

				<nav>
					<ul class="cd-primary-nav">
            <li><a href="/">HOME</a></li>
            <li><a href="/whoweare">WHO WE ARE</a></li>
            <li><a href="/waystogive">WAYS TO GIVE</a></li>
            <li><a href="/campaign">CAMPAIGNS</a></li>
            <li><a href="/contact">CONTACT</a></li>
					</ul>
				</nav>
			</div><!-- .cd-half-block -->
    </div>
  </div>
<!--
  <div class="topnav">
  <a href="#home" class="active">Logo</a>
  <div id="myLinks">
    <a href="#news">News</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
  </div>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
-->


<script>
jQuery(document).ready(function($){
	var isLateralNavAnimating = false;
	
	//open/close lateral navigation
	$('.cd-nav-trigger').on('click', function(event){
		event.preventDefault();
		//stop if nav animation is running 
		if( !isLateralNavAnimating ) {
			if($(this).parents('.csstransitions').length > 0 ) isLateralNavAnimating = true; 
			
			$('body').toggleClass('navigation-is-open');
			$('.cd-navigation-wrapper').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
				//animation is over
				isLateralNavAnimating = false;
			});
		}
	});
});
</script>


