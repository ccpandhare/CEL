<!DOCTYPE HTML>
	<HEAD>
		<TITLE><? echo $defined; ?>CEL BITS Pilani</TITLE>
		<!--Stylesheets-->
		<LINK REL="stylesheet" HREF="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
		<LINK REL="STYLESHEET" HREF="style.css" />
		
		<!--Favicon-->
		<LINK REL="ICON" HREF="favicon.jpg" />
		
		<!--Meta Tags-->
		<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8" />
		<META NAME="Keywords" CONTENT="CEL, conquest, BITS Pilani, entrepreneurship, business plan competition, conclave, Global Conference, startup, ventures, mentors, August 2010, participate, international bplan competition, incubation" />
		<META NAME="Description" CONTENT="Center for Entrepreneurial Leadership" />
		<META NAME="Designer" CONTENT="Chinmay Pandhare" />
		<META NAME="Viewport" CONTENT="width=device-width, iniial-scale=1" />
		
	</HEAD>
	
	<BODY>
		<NAV CLASS="navbar navbar-default navbar-fixed-top">
			<DIV CLASS="close">
				<SPAN CLASS="glyphicon glyphicon-resize-vertical" ARIA-HIDDEN="true" STYLE="position:fixed; right:10px; top:15px; display:none;">
			</DIV>
			<DIV CLASS="container text-center">
				<DIV CLASS="navbar-header">
					<A CLASS="navbar-brand" HREF="#" STYLE="width:100%; min-width:169px">CEL | BITS Pilani</A>
				</DIV>
				<UL CLASS="nav navbar-nav">
					<LI CLASS="<? if($home) echo 'active'; ?>"><A HREF="index.php">Home</A></LI>
					<LI CLASS="<? if($about) echo 'active'; ?>"><A HREF="about.php">About</A></LI>
					<LI CLASS="<? if($projects) echo 'active'; ?>"><A HREF="projects.php">Projects</A></LI> 
					<LI CLASS="<? if($startups) echo 'active'; ?>"><A HREF="startups.php">Startups</A></LI>
					<LI CLASS="<? if($contactus) echo 'active'; ?>"><A HREF="contactus.php">Conatct Us</A></LI>
					<LI CLASS="<? if($associate) echo 'active'; ?>"><A HREF="associate.php">Associate</A></LI>
				</UL>
			</DIV>
		</NAV>
		<NAV CLASS="navbar navbar-default" STYLE="opacity:0">
			<DIV CLASS="container">
				<DIV CLASS="navbar-header">
					<A CLASS="navbar-brand" HREF="#">CEL | BITS Pilani</A>
				</DIV>
				<UL CLASS="nav navbar-nav">
					<LI CLASS="<? if($home) echo 'active'; ?>"><A HREF="index.php">Home</A></LI>
					<LI CLASS="<? if($about) echo 'active'; ?>"><A HREF="about.php">About</A></LI>
					<LI CLASS="<? if($projects) echo 'active'; ?>"><A HREF="projects.php">Projects</A></LI> 
					<LI CLASS="<? if($startups) echo 'active'; ?>"><A HREF="startups.php">Startups</A></LI>
					<LI CLASS="<? if($contactus) echo 'active'; ?>"><A HREF="contactus.php">Conatct Us</A></LI>
					<LI CLASS="<? if($associate) echo 'active'; ?>"><A HREF="associate.php">Associate</A></LI>
				</UL>
			</DIV>
		</NAV>
