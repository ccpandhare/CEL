<? $startups = 1; $defined="Startups | "; require 'top.php'; ?>
		<STYLE>
			.row div{
				height:150px;
				//border:1px solid white;
				//padding:20px;
				//box-sizing:border-box;
			}
			.row div a{
				display:block;
				width:100%;
				height:100%;
				color:#fff;
				background-size:75% auto;
			}
			a:hover, a:visited, a:active{
				color:#fff;
				text-decoration:none;
			}
			.row div a span{
				display:block;
				position:absolute;
				width:90%;
				left:5%;
				padding:10px 20px;
				bottom:0;
				background:rgba(0,0,0,0.5);
				text-align:center;
				font-weight:bold;
			}
		</STYLE>
		<DIV CLASS="container text-justify">
			<H1>Startups</H1>
			<P>Over the past eight years, CEL has helped several startups come out of its members and out of the students of BITS Pilani who have benefited from the resources offered by CEL in one way or the other. Featured here is a list of the startups that have been associated with CEL and its partner organizations.</P>
			<DIV CLASS="row text-center" STYLE="margin-top:50px;">
				<?
					$startupslist = array(
						array("Anaya","http://www.anayalabs.com","anaya.jpg"),
						array("GharPay","http://www.gharpay.in","gharpay.jpg"),
						array("Vita Beans","http://www.vitabeans.com","vitabeans.png"),
						array("Grass Routes","http://www.yofa.org","gr.JPG"),
						array("Next Gen","http://www.nextgenpms.com","nextgen.png"),
						array("Parivartan Foundation","http://www.parivartanfoundation.org","parivartan.jpg"),
						array("Entrance Corner","http://www.entrancecorner.com","entrancecorner.gif"),
						array("Dream Juices","http://www.dreamjuices.net","dreamjuices.jpg"),
						array("eSwasthya","http://www.mobilemedics.net","eswasthya.jpg"),
						array("Grey Orange Robotics","http://www.greyorangerobotics.com","greyorange.jpg"),
						array("Phyzok","http://www.physok.com","phyzok.gif"),
					);
					
					foreach($startupslist as $startup){
						echo '<DIV CLASS="col-xs-6 col-sm-4 col-md-3"><A HREF="'.$startup[1].'" STYLE="background:url('."'"."startups/".$startup[2]."'".') center center no-repeat"><SPAN CLASS="fadein">'.$startup[0].'</SPAN></A></DIV>';
					}
				?>
			</DIV>
		</DIV>
		
<? require 'bottom.php'; ?>
