
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>SAMA Grocery Store</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<script src="loginvalid ate.js"></script>
		<style>
			.asearch{
				color: white;
			}
			@media screen and (max-width:480px){
				#search{width:80%;}
				#search_btn{width:30%;float:right;margin-top:-32px;margin-right:10px;}
			}
			input.login{
				width:250px;
				color:black;
				}
				.fp{
				color:white; 
				list-style:none;
				}
				.submit{
				color:blue;
				}
				.error{
					color:red;
				}
		</style>
		<style>
			.home {
					padding-top: 40px;
					display: flex;
					align-items: center;
					justify-content: center;
					flex-wrap: wrap;
				}
				
				.home .image {
					flex: 1 1 40rem;
					padding-top: 5rem;
				}
				
				.home .image img {
					width: 100%;
				}
				
				.home .content {
					flex: 1 1 40rem;
				}
				
				.home .content span {
					font-size: 3rem;
					color: #666;
				}
				
				.home .content h3 {
					font-size: 5rem;
					color: var(--black);
				}
				.banner-container {
					padding: 100px;
                display: flex;
                flex-wrap: wrap;
                gap: 1.5rem;
            }
            
            .banner-container .banner {
                flex: 1 1 40rem;
                height: 25rem;
                overflow: hidden;
                position: relative;
            }
            
            .banner-container .banner img {
                height: 100%;
                width: 100%;
                object-fit: cover;
            }
            
            .banner-container .banner .content {
                position: absolute;
                top: 50%;
                left: 4%;
                transform: translateY(-50%);
            }
            
            .banner-container .banner .content h3 {
                font-size: 3rem;
                color: var(--black);
            }
            
            .banner-container .banner .content p {
                font-size: 2rem;
                color: #333;
            }
            
            .banner-container .banner:hover img {
                transform: scale(1.2) rotate(-5deg);
            }
            
            .features .box-container {
				padding: 0px 80px 0px 70px;
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
                gap: 1.5rem;
            }
			.ourfeatures{
				padding: 0px px 0px 70px;
                display: grid;
				align-items: ;
                grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
                gap: 1.5rem;
			}
            
            .features .box-container .box {
                padding: 3rem 2rem;
                background: #fff;
                outline: var(--outline);
                outline-offset: -1rem;
                text-align: center;
                box-shadow: var(--box-shadow);
            }
            
            .features .box-container .box:hover {
                outline: var(--outline-hover);
                outline-offset: 0rem;
            }
            
            .features .box-container .box img {
                margin: 1rem 0;
                height: 15rem;
            }
            
            .features .box-container .box h3 {
                font-size: 2.5rem;
                line-height: 1.8;
                color: var(--black);
            }
            
            .features .box-container .box p {
                font-size: 1.5rem;
                line-height: 1.8;
                color: var(--light-color);
                padding: 1rem 0;
            }
    	</style>
	</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.php" class="navbar-brand">SAMA Grocery Store</a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<!-- <li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li> -->
				<li><a href="#products">Product</a></li>
				<li style="width:300px;left:10px;top:10px;"><input type="text" class="form-control" id="search" value="search sama products"></li>
				<li style="top:10px;left:20px;"><button class="btn btn-primary" id="search_btn"><a class="asearch" href="#products">search</a></button></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Cart</a>
					<div class="dropdown-menu" style="width:400px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">PImage</div>
									<div class="col-md-3">Name</div>
									<div class="col-md-3">Price</div>
								</div>
							</div>
							<div class="panel-body"></div>
							<div class="panel-footer"></div>
						</div>
					</div>
				</li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown">SignIn</a>
					<ul class="dropdown-menu">
						<div style="width:400px;">
							<div class="panel panel-primary">
								 <div class="panel-heading"><h3><center>Login</center></h3></div>
                 <div class="panel-heading">
                      <form method="post" action="login.php">
					  <p><label class="login">Username:</label></p><p><input class="login" type="text" name="username" id="username" required></p>
                      <p><label class="login">Password:</label></p><p><input class="login" type="password" name="password" id="pwd" required></p>
                      <p><input type="submit" value="login" class="submit" name="submit" id="s"/>
					  </form>     
                 </div>
                 <div class="panel-footer" id="e_msg"></div>
							</div>
						</div>
					</ul>
				</li>
				<li><a href="reg.html">SignUp</a></li>
			</ul>
		</div>
	</div>
</div>	
	<section class="home" id="Home">

        <div class="image">
            <img src="image/home-img.png" alt=" ">
        </div>

        <div class="content ">
            <span>fresh and organic</span>
            <h3>your daily need products</h3>

        </div>

    </section>
	<section class="banner-container ">

        <div class="banner ">
            <img src="image/banner-1.jpg " alt=" ">
            <div class="content ">
                <h3>special offer</h3>
                <p>upto 45% off</p>
                <a href="# " class="btn ">check out</a>
            </div>
        </div>

        <div class="banner ">
            <img src="image/banner-2.jpg " alt=" ">
            <div class="content ">
                <h3>limited offer</h3>
                <p>upto 50% off</p>
                <a href="# " class="btn ">check out</a>
            </div>
        </div>

    </section>
	<section class="features" id="Features ">

        <h1 style="text-align:center;">Our Features</h1>

        <div class="box-container ">

            <div class="box ">
                <img src="image/feature-img-1.png " alt=" ">
                <h3>fresh and organic</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>

            </div>

            <div class="box ">
                <img src="image/feature-img-2.png " alt=" ">
                <h3>free delivery</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>

            </div>

            <div class="box ">
                <img src="image/feature-img-3.png " alt=" ">
                <h3>easy payments</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
            </div>

        </div>

    </section>



	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2 col-xs-12">
				<div id="get_category">
				</div>
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Categories</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> -->
				<div id="get_brand">
				</div>
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Brand</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> -->
			</div>
			<div class="col-md-8 col-xs-12">
				<div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
				</div>
				<div class="panel panel-info">
					<div class="panel-heading" id="products">Products</div>
					<div class="panel-body">
						<div id="get_product">
							<!--Here we get product jquery Ajax Request-->
						</div>
						<!--<div class="col-md-4">
							<div class="panel panel-info">
								<div class="panel-heading">Samsung Galaxy</div>
								<div class="panel-body">
									<img src="product_images/images.JPG"/>
								</div>
								<div class="panel-heading">$.500.00
									<button style="float:right;" class="btn btn-danger btn-xs">AddToCart</button>
								</div>
							</div>
						</div> -->
					</div>
					
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
</body>
</html>
















































