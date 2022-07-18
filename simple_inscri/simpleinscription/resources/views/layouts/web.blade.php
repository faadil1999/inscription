<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset("css/style.css")}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script
        src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous"></script>
</head>
<body>
        
    <div class="main" >

        @yield('main')

    </div>

		@yield('down_main')
    <script>
		// just for the demos, avoids form submit
		jQuery.validator.setDefaults({
		  	debug: false,
		  	success:  function(label){
				  
        		label.attr('id', 'valid');
   		 	},
		});
		$( "#myform" ).validate({
		  	rules: {
			    password: "required",
		    	password_confirmation: {
		      		equalTo: "#password"
		    	}
		  	},
		  	messages: {
		  		first_name: {
		  			required: "Please enter a firstname"
		  		},
		  		last_name: {
		  			required: "Please enter a lastname"
		  		},
		  		email: {
		  			required: "Please provide an email"
		  		},
                tel : {
                    required: "Please provide a tel number"
                }
		  		password: {
	  				required: "Please enter a password"
		  		},
		  		password_confirmation: {
		  			required: "Please enter a password",
		      		equalTo: "Wrong Password"
		    	}
		  	}
		});
	</script>

<style>
    .btn-default{
        background-color: transparent;
        color:black;
        border-color: #0B0CAC;
    }

    .btn-default:hover {
        background-color: #0B0CAC;
        color:#fff;
        border-color: #0B0CAC;
    }

	.btn-default2{
		background-color: transparent;
		color: #ad1457;
		padding: 5px 150px 5px 150px;
		decoration:none;
		border-color:#ad1457
	}
	.btn-default2:hover{
		background-color: #ad1457;
		color: #fff;
		
	}

	.btn-default3{
		background-color: transparent;
		padding: 5px 150px 5px 150px;
		color: #00695c;
		decoration:none;
		border-color:#00695c
	}

	.btn-default3:hover {
		background-color: #00695c;
		color: #fff;
		
	}


 </style>

<footer class="site-footer text-center">
	<div class="container_footer">
	  <div class="row">
		<div class="col-sm-12 col-md-12">
		  <h6 style="font-style: italic;font-size:20px;">AmbInnov</h6>
		  {{-- <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur aspernatur perspiciatis delectus exercitationem consequatur at reiciendis doloribus amet incidunt nam, magni voluptate deleniti dolores ipsam cumque quisquam maxime, recusandae alias.</p>
		 --}}Innov est une plateforme qui vous permet à la fois de vous former en ligne et de monétiser votre savoir-faire. <br>
		 <a type="button" href="https://innov-em.com/about" target="_blank" class="btn btn-outline btn-default2 rounded-pill my-2">A propos</a>
		  
		</div>

		<div class="col-sm-12 col-md-12">
		
			<a type="button" href="https://innov-em.com/contact-us"  target="_blank" class="btn btn-outline btn-default3 rounded-pill my-3">Contact</a>
			{{-- <ul class="footer-links">
			  <li><a href="#">About Us</a></li>
			  <li><a href="#/">Contact Us</a></li>
			  <li><a href="#">Contribute</a></li>
			  <li><a href="#">Privacy Policy</a></li>
			  <li><a href="#">Sitemap</a></li>
			</ul> --}}
		  </div>
		
		<div class="col-md-12 col-sm-12">
			<ul class="social-icons">
			  <li><a class="facebook" href="https://www.facebook.com/Innov-EM-100592019196442/"><i class="zmdi zmdi-facebook"></i></a></li>
			  <li><a class="twitter" href="https://twitter.com/innov_em1"><i class="zmdi zmdi-twitter"></i></a></li>
			  <li><a class="dribbble" href="https://www.instagram.com/innov_em/"><i class="zmdi zmdi-instagram"></i></a></li>
			  <li><a class="linkedin" href="https://www.linkedin.com/in/innov-em/"><i class="zmdi zmdi-linkedin"></i></a></li>   
			</ul>
		  </div>
		
	  </div>
	  <hr>
	</div>
	{{-- <div class="container_footer">
	  <div class="row">
		<div class="col-md-8 col-sm-6 col-xs-12">
		  <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
	   <a href="#">Innov-EM</a>.
		  </p>
		</div>

		<div class="col-md-4 col-sm-6 col-xs-12">
		  <ul class="social-icons">
			<li><a class="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
			<li><a class="twitter" href="#"><i class="zmdi zmdi-twitter"></i></a></li>
			<li><a class="dribbble" href="#"><i class="zmdi zmdi-dribbble"></i></a></li>
			<li><a class="linkedin" href="#"><i class="zmdi zmdi-linkedin"></i></a></li>   
		  </ul>
		</div>
	  </div>
	</div> --}}
</footer>

	<style>
		.site-footer
		{
		background-color:#26272b;
		padding:45px 50px 0 20px;
		font-size:15px;
		line-height:24px;
		color:#737373;
		margin-top: 10px;
		}
		
		.site-footer h6
		{
		color:#fff;
		font-size:16px;
		/* text-transform:uppercase; */
		margin-top:5px;
		letter-spacing:2px
		}
		.site-footer a
		{
		color:#737373;
		}
		/* .site-footer a:hover
		{
		color:#3366cc;
		text-decoration:none;
		} */
		.footer-links
		{
		padding-left:0;
		list-style:none
		}
		.footer-links li
		{
		display:block
		}
		.footer-links a
		{
		color:#737373
		}
		.footer-links a:active,.footer-links a:focus,.footer-links a:hover
		{
		color:#3366cc;
		text-decoration:none;
		}
		.footer-links.inline li
		{
		display:inline-block
		}
		.site-footer .social-icons
		{
		text-align:center
		}
		.site-footer .social-icons a
		{
		width:40px;
		height:40px;
		line-height:40px;
		margin-left:6px;
		margin-right:0;
		border-radius:100%;
		background-color:#33353d
		}
		.copyright-text
		{
		margin:0
		}
		@media (max-width:991px)
		{
		.site-footer [class^=col-]
		{
			margin-bottom:30px
		}
		}
		@media (max-width:767px)
		{
		.site-footer
		{
			padding-bottom:0
		}
		.site-footer .copyright-text,.site-footer .social-icons
		{
			text-align:center
		}
		}
		.social-icons
		{
			padding-left:0;
			margin-bottom:0;
			list-style:none
		}
		.social-icons li
		{
			display:inline-block;
			margin-bottom:4px
		}
		.social-icons li.title
		{
			margin-right:15px;
			/* text-transform:uppercase; */
			color:#96a2b2;
			font-weight:700;
			font-size:13px
		}
		.social-icons a{
			background-color:#eceeef;
			color:#818a91;
			font-size:16px;
			display:inline-block;
			line-height:44px;
			width:44px;
			height:44px;
			text-align:center;
			margin-right:8px;
			border-radius:100%;
			-webkit-transition:all .2s linear;
			-o-transition:all .2s linear;
			transition:all .2s linear
		}
		.social-icons a:active,.social-icons a:focus,.social-icons a:hover
		{
		color:#fff;
		background-color:#29aafe
		}
		.social-icons.size-sm a
		{
		line-height:34px;
		height:34px;
		width:34px;
		font-size:14px
		}
		.social-icons a.facebook:hover
		{
		background-color:#3b5998
		}
		.social-icons a.twitter:hover
		{
		background-color:#00aced
		}
		.social-icons a.linkedin:hover
		{
		background-color:#007bb6
		}
		.social-icons a.dribbble:hover
		{
		background-color:#ea4c89
		}
		@media (max-width:767px)
		{
		.social-icons li.title
		{
			display:block;
			margin-right:0;
			font-weight:600
		}
		}
		
	</style>
</body>
</html>