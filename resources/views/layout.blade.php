<!DOCTYPE html>
<html>
	<head>
		<script src="/jquery/jquery-2.2.1.js"></script>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="/css/myStyle.css">
		
		<title> Assignment1 with Laravel </title>
	</head>
	<body>
	<!-- Page Header Start -->
		<div class="container-fluid">
			<div id="header">	
				<div class="row">	<!-- Row Start -->
					<div class="col-md-4 head">		<!-- header part 1 Start -->
						<div class="row">		<!-- Row Start -->
							<div class="col-md-2" >
								<svg>
									<circle cx="10" cy="10" r="5"
									  stroke="black" stroke-width="1" fill="yellow" />
									<circle cx="26" cy="10" r="5"
									  stroke="black" stroke-width="1" fill="red" />
									<circle cx="42" cy="10" r="5"
									  stroke="black" stroke-width="1" fill="green" />
								  	Sorry, your browser does not support inline SVG.
								</svg>
							</div>
							<div class="col-md-6" >
								<div class="row">	<!-- Row Start -->
									<div class="col-md-offset-2 col-md-2 head_p1">	
										<img src="images/dubl-arow-right.png">
									</div>

									<div class="col-md-offset-1 col-md-2 head_p1">
										<img  src="images/black-arow.png">
									</div>

									<div class="col-md-offset-1 col-md-2 head_p1">
										<img  src="images/dubl-arow-left.png">
									</div>
								</div>		<!-- Row Ends -->
							</div>
							
							<div class="col-md-4 head_p1">
								<input  type="range" id="r1" >
							</div>

						</div>	<!-- Row Ends -->
					</div>		<!-- header part1 Ends -->

					<div class="col-md-4 head">		<!-- header part 2 Start -->
						<div class="row">	<!-- Row Start -->
							<div class="col-md-offset-5 col-md-1" id="head_apple">
								<img  src="images/apple.png">
							</div>	
							
							<div class="col-md-offset-5 col-md-1 head_R" >
								<img src="images/list.png">
							</div>	
						</div>	<!-- Row Ends -->
					</div>		<!-- header part 2 Ends -->

					<div class="col-md-4 head" >	<!-- header part 3 Start -->
						<div class="row" >	<!-- Row Start -->
							<div class="col-md-offset-1 col-md-3 head_p2">
								<img  src="images/user.png">	
									hamza
								<img  src="images/down-arow2.png">
							</div>

							<div class="col-md-1 head_p2 " id="sImg" >
								<img  src="images/search.png">
							</div>
								
							<div class="col-md-6 head_p2 " >
								<input type="search"  placeholder="search" id="s1" >
							</div>

							<div class="col-md-1 head_R" >
								<img  src="/images/dubl-arow.png">
							</div>
						</div>	<!-- Row Ends -->
					</div>		<!-- header part 3 Ends -->
				</div>		<!-- Row Ends -->
			</div>	<!-- Page Header Ends -->
			
			<nav>	<!-- Page Nav start -->
				<div class="row">	<!--  row start-->
					<div   class="col-md-4 nav_p_1">
						<img class="nav_p_1" src="/images/music.png">
						<img class="nav_p_1" src="/images/vedio.png">
						<img class="nav_p_1" src="/images/screen.png">
						<img class="nav_p_1" src="/images/dotes.png">
					</div>
					
					<div class="col-md-4">
						<div class="row ">	<!-- row start-->
							<div  class="col-md-offset-3 col-md-3 nav_p_2_1">
								<a  href="">MY MUSIC</a>
							</div>
							
							<div class="col-md-3 nav_p_2_2" >
								<div id="nav_p_2_2">
									<a  href="">Playlist</a>	
								</div>
							</div>
						</div><!-- row End -->
					</div>
					
					<div class="col-md-4">
						<div class="row">	<!-- row Start --> 	
							<div class="col-md-offset-1 col-md-2 nav_p_3">
								SortBy: 				
							</div>
							<div class="col-md-4 nav_p_3">
								<a href="javascript:void(0)" class="sort" 
								data-value="artistName" id="sortArtist">Artist</a>
								&nbsp&nbsp&nbsp
								|
								&nbsp&nbsp&nbsp
								<a href="javascript:void(0)" class="sort" data-value="rating" id="sortRating">Rating</a>	
							</div>
							<div class=" col-md-5 nav_p_3">	
								&nbsp&nbsp						
								<span class="btn btn-info btn-xs"id="createAlbum">Create Album</span>&nbsp&nbsp<img class="img-thumbnail"
								src="images/down-arow2.png"  id="sortOrder">
							</div>
						</div>	<!-- row End -->
					</div>
				</div>		<!-- row End -->
			</nav>
			<!-- nav Ends -->
			
			<div class="row "> 
				<!-- aside Start -->
				<div class="col-md-2">
					<aside>
						<div class="sidebar">
							Library
						</div>
						<ul class="ul_lib">
							<li><a class="li_a" href="">Music</a> </li>
						</ul>
						<div class="sidebar">
							Playlists
						</div>
						<ul id="ul_G">
							<li><a class="li_a" href="">Genius</a> </li>
						</ul>
						<ul class="ul_Plist1 ">
							<li><a class="li_a " href="#">90's Music</a></li>
					  		<li><a class="li_a" href="#">Classical Music</a></li>
					  		<li><a class="li_a" href="#">Music Videos</a></li>
					  		<li><a class="li_a" href="#">My Top Rated</a></li>
					    	<li><a class="li_a" href="#">Recently Added</a></li>
							<li><a class="li_a" href="#">Recently Played</a></li>
							<li><a class="li_a" href="#">Top 25 Most Played</a></li>
						</ul>

						<ul class="ul_Plist2">
							<li><a class="li_a" href="#">iTunes ArtWork Screen... ...</a></li>
					  		<li><a class="li_a" href="#">iTunes ArtWork Screen... ...</a></li>
					  		<li><a class="li_a" href="#">iTunes ArtWork Screen... ...</a></li>
					  		<li><a class="li_a" href="#">iTunes ArtWork Screen... ...</a></li>
					    	<li><a class="li_a" href="#">iTunes ArtWork Screen... ...</a></li>
							<li><a class="li_a" href="#">iTunes ArtWork Screen... ...</a></li>
							<li><a class="li_a" href="#">iTunes ArtWork Screen... ...</a></li>
							<li><a class="li_a" href="#">iTunes ArtWork Screen... ...</a></li>
							<li><a class="li_a" href="#">Playlist</a></li>
						</ul>
						<div id="bottom_div_aside">
							<img src="/images/pkus.png">
							<img src="/images/setting2.png">
						</div>
					</aside>
				</div>
				<!-- aside Ends -->
				<div class="col-md-10 body">
				
					<div id="createAlbumForm">
					
						<form id="createform" method="POST" action="/create" 
						enctype="multipart/data">
							{{ csrf_field() }}
							<meta name="create" content="{{csrf_token()}}">
								
							<span>Song name:</span> &nbsp <input type="text" id="C1" /> &nbsp&nbsp
							<span>artist name :</span> &nbsp<input type="text" id="C2" /> 
							&nbsp&nbsp&nbsp&nbsp
							
							<span>rating:</span> &nbsp 
							<select id="CR" > 
							  <option value="0" selected>0</option>
							  <option value="1">1</option>
							  <option value="2">2</option>
							  <option value="3">3</option>
							  <option value="4">4</option>
							  <option value="5">5</option>
							</select>
							<br><br>
							<input type="file" name="file" >
							 <input class=" btn btn-primary btn-xs submitt" type="submit" 
							name="submit" value="Create">
						</form>
						<button class=" btn btn-primary btn-xs submitt" type="submit"
						 value="cancleC" >
						 Cancle
						</button>
					</div>

					<div class="updateAlbumForm" >
						<form id="updateform" method="POST" action="/update" 
							enctype="multipart/data">
							{{ csrf_field() }}
							<meta name="update" content="{{csrf_token()}}">
							{{ method_field('PATCH')}}
							<span>Song name:</span> &nbsp <input id="U1"type="text"/> &nbsp&nbsp
							<span>artist name :</span> &nbsp <input id="U2" type="text"/> 
							&nbsp&nbsp
							<span>rating:</span> &nbsp <select id="UR"> &nbsp
							  <option value="0" selected>0</option>
							  <option value="1">1</option>
							  <option value="2">2</option>
							  <option value="3">3</option>
							  <option value="4">4</option>
							  <option value="5">5</option>
							</select>
							&nbsp&nbsp&nbsp&nbsp<br><br>
							    <input type="file" name="file1">
							<input class="btn btn-primary btn-xs submitt" type="submit"name="submit"  value="Update">
						</form>
						<button class=" btn btn-primary btn-xs submitt" type="submit"       value="cancleU" >Cancle</button>
					</div>

					<div class="row " id="body">
						@yield('mainBody')
					</div>
				</div>
			</div>		<!-- row ends -->
		
			<div class="row">
				<footer class="col-md-12">
					<div>90 Albums, 40 Minutes, 47.9MB</div>		
				</footer>
			</div>
		</div>	<!-- container div ends -->
		
		<!-- /////SCRIPT/////// -->
		<script type="text/javascript"  src="/jquery/myJquery.js" ></script>
		
	</body>
</html>