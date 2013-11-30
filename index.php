<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=en><![endif]--> 
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang=en><![endif]--> 
<!--[if IE 8]><html class="no-js lt-ie9" lang=en><![endif]--> 
<!--[if gt IE 8]><!--> <html class=no-js lang=en> <!--<![endif]-->
	<head>
		<meta charset="utf-8"/>   
		<meta name=description content="Brian Anders's Resume Website"> 
		<meta name=author content="Brian Anders"> 		
		<meta name="viewport" id="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,initial-scale=1.0" />
		<title>Brian Anders | Home</title>
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400|Quicksand|Josefin+Sans|Exo:400,200italic|Open+Sans:400,300|Jura:400,300|Raleway:200' rel='stylesheet' type='text/css'>
		<link rel="shortcut icon" href="favico.ico">

		<script src="js/libs/jquery-1.8.2.min.js"></script>
		<script src="js/libs/modernizr-2.5.3.min.js"></script>
		<script src="js/libs/settings.js"></script>

		<link rel="stylesheet" type="text/css" href="css/normalize.css">
		<link rel="stylesheet" type="text/css" href="css/all.css">
		<link rel="stylesheet" type="text/css" href="css/buttons.css">
		<link id="mainstyle" rel="stylesheet" type="text/css" href="css/styles/Main.css">

		<script type="text/javascript">
			$(document).ready(function(){

				$("#Home").slideDown();

			    var debug = false;
			
			    if(debug) { 
			    	setTimeout(function () {
				        window.location.reload();
				    }, 3000); 
			    }
			});
		</script>
	</head>
	<body>
		<a id="settings"><div id="insidesettings"></div></a>
		<div id="schangers" class="out">
			<strong>Styles</strong>

			<a class='scb selected' id="Main" value="Main">Main</a>

			<?php
				// open this directory 
				$myDirectory = opendir("./css/styles");

				// get each entry
				while($entryName = readdir($myDirectory)) {
					$dirArray[] = $entryName;
				}

				// close directory
				closedir($myDirectory);

				//	count elements in array
				$indexCount	= count($dirArray);

				// sort 'em
				sort($dirArray);

				// loop through the array of files and print them all
				for($index=0; $index < $indexCount; $index++) 
				{
					if (substr("$dirArray[$index]", 0, 1) != "." && $dirArray[$index] != "Main.css")
					{
						$value = substr($dirArray[$index], 0, strlen($dirArray[$index])-4);
						print("<a class='scb' id=\"$value\" value=\"$value\">$value</a>");
					}
				}

			?>
		</div>
		<header id="top">
			<div id="profilewrap"><img id="profile" src="img/5LayerProfile-940.png" alt="Profile Picture"></div>
			<h1>Brian Anders</h1>
			<h2>Programmer</h2>
			<div id="icons">
				<a target="_blank" title="My Facebook" id="facebook" href="http://www.facebook.com/anders.brian"></a>
				<a target="_blank" title="My Google+" id="googleplus" href="https://plus.google.com/u/0/103609977209431639131"></a>
				<a target="_blank" title="My Twitter" id="twitter" href="https://twitter.com/#!/imBrianAnders"></a>
				<a target="_blank" title="My LinkedIn" id="linkedin" href="http://www.linkedin.com/pub/brian-anders/16/7b8/35a"></a>
				<a id="gmail" title="Email Me" href="mailto:brian.steven.anders@gmail.com"></a>
				<a id="github" target="_blank" title="My Github" href="https://github.com/briananders"></a>
			</div>
		</header>
		<nav>
			<div id="navwrap">
				<a value="Home" class="selected">Home</a>
				<a value="AboutMe" >About Me</a>
				<a value="Experience" >Experience</a>
				<a value="Education" >Education</a>
				<a value="References" >References</a>
			</div>
		</nav>
		<div class="container" id="Home" >
			<div>
				<header>Welcome to my r&#xE9;sum&#xE9;</header>
				<p>
					This is the web version of my r&#xE9;sum&#xE9;. I created it to hopefully give you a more in-depth look at who I am and why you should hire me. Feel free to wander around.<br/>
					<br/>
					First of all, I am a tech enthusiast. I dream in code. It would be a huge mistake to overlook me or underestimate me. Give me a chance to blow you away with my skills and passion for my field.<br/>
					<br/>
					I am currently a fifth year Senior at <a href="http://www.graceland.edu/" target="_blank">Graceland University</a>, in <a href="http://www.lamoni-iowa.com/" target="_blank">Lamoni, Iowa</a>, pursuing a degree in Computer Science/Information Technology, a degree in Mathematics, and a minor in Web Design.
					<br/><br/>
					My formal <a href="docs/BrianAndersResume.pdf">r&#xE9;sum&#xE9;.pdf</a>
					<br/><br/>
					You can contact me at: 
					<br/>
					<a target="_blank" href="http://www.facebook.com/anders.brian">Facebook</a>, 
					<a target="_blank" href="https://plus.google.com/u/0/103609977209431639131">Google+</a>, 
					<a target="_blank" href="https://twitter.com/#!/imBrianAnders">Twitter</a>, 
					<a target="_blank" href="http://www.linkedin.com/pub/brian-anders/16/7b8/35a">LinkedIn</a>, 
					<a href="mailto:brian.steven.anders@gmail.com">Email</a>
					<br/>
					<br/>
					Or you can check out snippets of my code on <a target="_blank" href="https://github.com/briananders">GitHub</a>.
				</p>
				
				<footer></footer>
			</div>
		</div>
		<div class="container" id="AboutMe" >
			<div>
				<header>Web Design</header>
				<p>
					<img alt="Web Design" src="img/WebDesign.png"/>
					Web Design is fascinating.<br/>
					<br/>						
					Making this website was one of the most fun things I have ever done. It was certainly challenging and it is constantly evolving. I'm sure it is not as great as it could be, but it is a great pet project of mine. <br/>
					<br/>
					Working on this site allows me to hone my skills in the web sphere. I have worked a lot on many other web projects, but regrettably they are under FDAs with my previous employers. Invariably, the thing I spend the most time on is the CSS. The look of a website is crucial to whether or not it is seen as valuable. <br/>
					<br/>
					For instance, Craigslist is a pretty decent site for what it is used for, but I rarely visit it because I hate the way it looks. I think it is one of the ugliest websites I have ever seen. To me it is unacceptable that the people there don't seem to care about the aesthetic of their website design.<br/>
					<br/>
					To me, the web is the future of technology. I hope to ride this wave. I want to live on the bleeding edge of web technology. I want to make the websites that blow people out of the water with their elegant designs and flawless interfaces.
				</p>
				<footer></footer>
			</div>	
			<div>
				<header>User Experience</header>
				<p>
					<img alt="Mouse" src="img/Mouse.jpg"/>
					Throughout the years, I have built up this expectation in the world. All things should have a better interface. In my opinion, you cannot create a perfect interface unless it interfaces directly with your thoughts and intentions. <br/>
					<br/>
					Since that is not possible yet, I believe it is my mission (and should be everybody's mission), to try to make the world interface better. I find myself, all the time, saying "This has a bad interface." <br/>
					<br/>
					I spend a lot of time thinking about how some interface can be made better. Like iTunes; it's nice, but it's not perfect. I'm that crazy guy that looks at Apple products and thinks, "this could be better."
				</p>
				<footer></footer>
			</div>	
			<div>
				<header>Motorcycles</header>
				<p>
					<img alt="Motorcycle" src="img/Motorcycle.jpg"/>
					I own a Motorcycle. It is a 1999 Honda Nighthawk 750cc motorcycle. It is beautiful. Every now and then it is really nice to just hop on the bike and go for a ride in the countryside.
				</p>
				<footer></footer>
			</div>
			<div>
				<header>Playing Music</header>
				<p>
					<img alt="Drums" src="img/Drums.jpg"/>
					I play instruments.
					<br/><br/>
					When I was 4 years old, I started in the Suzuki program on the violin. After my 8th birthday, I started playing the piano. In 5th grade band, I started playing percussion. As you can see in the picture, I still play the drums. <br/><br/>
					I still play all my instruments, but the drums are easily what I am the best at and they are my favorite to play. 
				</p>
				<footer></footer>
			</div>
			<div>
				<header>Absorbing Music</header>
				<p>
					<img alt="Speakers" src="img/Speakers.jpg"/>
					I love music. I have a deep passion for music. I have an extensive music collection that I have been building up over many years. I have to have and iPod Classic to hold all my music and audio books. <br/>
					<br/>
					Some of my favorite bands include The Beatles, Foxy Shazam, Foo Fighters, Billy Joel, The Beach Boys, Awolnation, Blink 182, Lostprophets, Queens of the Stone Age, The Strokes, and many many more.<br/>
					<br/>
					I am also a big fan of classical and orchestral music. Some of my favorite orchestral music comes from movie soundtracks. Some examples would be John Williams works in Indiana Jones, Star Wars, and Jurassic Park. The work of Thomas Newman in Road to Perdition is one of my favorites too. 
				</p>
				<footer></footer>
			</div>	
			<div>
				<header>Movies</header>
				<p>
					<img alt="Movies" src="img/Movies.jpg"/>
					Fact: Movies are great. I am always trying to stay on top of the latest and greatest movie releases. I follow the movies of several directors. Some of my favorites include David Fincher, Steven Spielberg, J.J. Abrams, Guy Ritchie, and Christopher Nolan. I also follow the movies of some actors too.<br/>
					<br/>
					Movies allow one to experience the world through a different set of eyes. Movies have expanded my perspectives in countless ways. I believe that I would be a very different person without my history with film.
				</p>
				<footer></footer>
			</div>	
			
			<div>
				<header>Cranes</header>
				<p>
					<img alt="Crane" src="img/Crane.jpg"/>
					My Dad owns a crane business as a hobby. He grew up running cranes and couldn't give them up even after getting his Ph.D. and becoming a full time professor of Economics. <br/>
					<br/>
					Naturally, I followed in his footsteps and grew up work with the cranes. Working with the cranes has given me many excellent skills. Part of the reason that I am so great at communicating is due to all the different people that I meet while doing crane work all over Iowa and Missouri. <br/>
					<br/>
					You meet all sorts while doing crane work and to keep things from getting weird, you need to be able to relate to people and converse well. <br/>
					<br/>
					Another skill that seems a bit more obvious is my technical and mechanical knowledge. It isn't too difficult for me to take apart almost anything and put it back together. I am a general Mr. Fix-it for many of my friends and where I work.<br/>
					<br/>
					Surprisingly, the beginnings of my mathematical aptitude started with the cranes. There is a lot of math behind lifting things. Tensile strength of cables, hydraulic pressures, cylinder diameters and their pressure capacities, etc. It all comes down to finding or creating a mechanical advantage. 
				</p>
				<footer></footer>
			</div>
		</div>
		<div class="container" id="Experience" >
			<div id="Skills" class="outside">
				<header>Skills</header>
			
				<div class="inside">
					<div id="Technical" >
						<header class="show_hide">Technical Skills</header>
						
						<p class="hidden">
						
							Proficient in: HTML(5), CSS(3), JavaScript, Python, Java<br/>
							Familiar with: Php, C, C++, SQL, and Unix Script<br/>
							Software: iOS Development, Android Programming, Adobe Creative Suite, iTunes SDK, xCode<br/>
							Other Technologies: Mac OSX, Windows, and some Linux/Unix<br/>	
						
						</p>
						<footer></footer>
					</div>
					<div id="General" >
						<header class="show_hide">General Skills</header>
						
						<p class="hidden">
							Leadership<br/>
							Determination: I get things done. I meet deadlines.<br/>
							Communication: I can talk to people.<br/>
							Learnability: I believe that I can learn anything.<br/>
							Work Ethic: I work whatever hours are necessary<br/>
						
						</p>
						<footer></footer>
					</div>
					
					<footer></footer>
				</div>
				<footer></footer>
			</div>
			<div id="Work" class="outside">
				<header>Work Experience</header>
				
				<div class="inside">
					<div id="Principal" >
						<header class="show_hide">
							<span class="company">Principal Financial Group</span><br/>
							<span class="place">Des Moines, IA</span><br/>
							<span class="title">Corporate Services IT Java Development Intern</span>
							<span class="right">Summer 2012</span>
						</header>
						
						<p class="hidden">
							<img alt="Principal Logo" src="img/Principal.jpg" />
							
							This summer I received the opportunity to be an intern at <a target="blank" href="http://www.principal.com/">Principal Financial Group</a>. At Principal I was placed on the "CSS Corporate Services IT Java Team" which is a long way of saying that I made Java apps. The project I was working on is going to be a really important application when it finishes and they project that it will save the company several millions of dollars. The development cycle was almost a year, so I couldn't see it completed. <br/> 
							<br/>
							The project started when I got there, so I was a big part of making decisions for the app. We used lots of tech along with Java to get it rolling. We used the Spring Framework to do annotation-based operations, Maven to handle the dependencies, Dozer to do the class mapping, and Java Server Faces for the interface. We committed the code to our Subversion repository several times a day to keep the code straight between the developers. <br/> 
							<br/>
							Our project team decided that we would use a Scrum development methodology. There were only a handful of projects in the whole company doing Agile development when I was there. As a team, we split up the features for each sprint between the developers. I was assigned a few major features. I also tackled the majority of our JUnit tests. Along with Scrum, we were also trying out Test Driven Development in our project. For our JUnit tests we used EasyMock to mock the persistence rather than connecting to the real database.<br/>
							<br/>
							By the time I finished my internship, we had set up a strong foundation for the application. Most of our work was the hardest features, and the rest of the features will add on to what we already did.<br/>
							<br/>
							Working at Principal was a great experience. I learned a lot about corporate life, Java, and all those other technologies that I had never learned in classes at Graceland.<br/>
							<br/>
							Just like when I worked at Smith and Associates, I was under a FDA, so I can't share any specifics of the app or any of my code.
							
							
						</p>
						<footer></footer>
					</div>
					<div id="Smith" >
						<header class="show_hide">
							<span class="company">Smith and Associates</span><br/>
							<span class="place">Houston, TX</span><br/>
							<span class="title">Software Devlopment Intern</span>
							<span class="right">Summer 2011</span>
						</header>
						
						<p class="hidden">
							<img alt="Smith Logo" src="img/SmithLogo.png" />
							
							Over the summer of 2011 I had the great opportunity to intern at <a target="blank" href="http://www.smithweb.com">Smith and Associates</a> in Houston, Texas. Working for Smith and Associates gave me my first real in depth exposure to corporate web technologies. Most of what I used there was Java Server Faces. <br/>
							<br/>
							The assignment I was given for the summer was to go through their in-house web apps and fix them. This basically meant that I had to redo a lot of features. I spent all summer breaking their systems and then fixing them. It was an excellent learning experience. When I left, they said that I was one of the most productive interns they had ever hired. <br/>
							<br/>
							I was under a FDA, so I can't show any of my code from Smith. 
							
							
						</p>
						<footer></footer>
					</div>
					<div id="Coliseum" >
						<header class="show_hide">
							<span class="company">The Coliseum Theater</span><br/>
							<span class="place">Lamoni, IA</span><br/>
							<span class="title">Student Manager/Supervisor/Projectionist</span>
							<span class="right">Fall 2008 - Present</span>
						</header>
						
						<p class="hidden">
							<img alt="Film Projector" src="img/FilmProjector.png" />
							
							At the beginning of my freshmen year at Graceland, I started working at the Movie Theater in Lamoni. The Coliseum is a lot of fun. I was immediately put on the projector since I was good with my hands. At that time, we had a 32mm film projector. So, I had the pleasure of going through the system and checking all the safeties before each movie. I also was tasked with building the movies. <br/>
							<br/>
							If you are unfamiliar with the film industry, you order a movie from an agency, like Technicolor, and they send you a big metal canister full of 50 lbs. of film. The movie is in multiple reels so that it will transport more easily. You then have to splice the reels back together in the right order. If you put them in the wrong order, you may get the last 20 minutes of the movie somewhere in the middle of the movie and your customers are really confused about the direction that the movie took. The plot won't make sense and it's a mess.<br/>
							<br/>
							It wasn't long after being at the theater that they moved me up to the Supervisor position. As the Supervisor, my job was to sell tickets and keep all the money in order. I'm good at math, so that was a breeze. I still worked as the projectionist as needed.<br/>
							<br/>
							At the beginning of my junior year, we got a new manager and as the Coliseum hires only students as workers, we quickly realized that I new more about the workings of the theater than anyone else. So, I was promoted again to assistant manager. I still did supervisor and projection work as needed.<br/>
							<br/>
							At the beginning of my fifth year at Graceland, the manager quit to take on a bigger job. As I was clearly the most knowledgeable worker there, I was named Student Manager until they can hire a full time manager. I've been told to expect to be manager for the rest of my year at Graceland. I think I have been handling the new responsibilities well. I do the schedule, track hours, order all our supplies, along with many other tasks. Working at the theater has been a great challenge and an excellent place to grow in my leadership skills.		
							
						</p>
						<footer></footer>
					</div>
					<div id="STA" >
						<header class="show_hide">
							<span class="company">STA+</span><br/>
							<span class="place">Lamoni, IA</span><br/>
							<span class="title">Student Representative</span>
							<span class="right">Fall 2009 - Present</span>
						</header>
						
						<p class="hidden">
							<img alt="STA Badge" src="img/sta.jpg" />		
							
							At Graceland, one of the jobs I work is called STA+ (Student Technical Assistants Plus). The plus is there to include "everything else". At STA+ we help students, faculty, and staff with any tech problems they have. From things as small as "I need a data projector set up for my class at this location" to things as large as "we need you to totally rewire this smartcart for newer technology". It is a really great job and while working there, I have gotten to see all sides of technology. For instance, one of our last projects was to setup a server to broadcast announcements on a new channel at Graceland. At STA+ we get exposure to all sorts of technology. No discrimination; Mac OS, Windows, Linux, iOS devices, Androids, etc. We work with it all.
							
						</p>
						<footer></footer>
					</div>
					<div id="Anders" >
						<header class="show_hide">
							<span class="company">Anders Crane Service</span><br/>
							<span class="place">Lamoni, IA</span><br/>
							<span class="title">Operator/Mechanic</span>
							<span class="right">All My Life</span>
						</header>
						
						<p class="hidden">
							<img alt="Grove TM250" src="img/TM250.png" />
							
							
							My Dad owns a crane business as a hobby. He grew up running cranes and couldn't give them up even after getting his Ph.D. and becoming a full time professor of Economics. <br/>
							<br/>
							Naturally, I followed in his footsteps and grew up work with the cranes. Working with the cranes has given me many excellent skills. Part of the reason that I am so great at communicating is due to all the different people that I meet while doing crane work all over Iowa and Missouri. <br/>
							<br/>
							You meet all sorts while doing crane work and to keep things from getting weird, you need to be able to relate to people and converse well. <br/>
							<br/>
							Another skill that seems a bit more obvious is my technical and mechanical knowledge. It isn't too difficult for me to take apart almost anything and put it back together. I am a general Mr. Fix-it for many of my friends and where I work.<br/>
							<br/>
							Surprisingly, the beginnings of my mathematical aptitude started with the cranes. There is a lot of math behind lifting things. Tensile strength of cables, hydraulic pressures, cylinder diameters and their pressure capacities, etc. It all comes down to finding or creating a mechanical advantage.
							
							
						</p>
						<footer></footer>
					</div>
					<footer></footer>
				</div>
				<footer></footer>
			</div>
			<div id="P" class="outside">
				<header>Projects</header>
			
				<div class="inside">
					<div id="iTunes">
						<header class="show_hide">
							<span class="company">iTunes Scripting</span>
							<span class="right">Fall 2010 - Present</span>
						</header>
						
						<p class="hidden">
							<img alt="iTunes icon" src="img/iTunes.png" />
							Just because something is considered done, doesn't mean it is. iTunes is this way. I have written JScript and AppleScripts to do functionality that is not available in iTunes's main interface.
							<br/><br/>
							I also made a <a href="../iTunes_Javascript.php" target="_blank">website</a> for many of my scripts. They are not locked down, so feel free to take them and play with them on your own.
							<br/><br/>
							Recently, I have started working on rebuilding my JScripts using AppleScript. AppleScript is one of the goofiest languages I have ever used, but I figured it out within a few short hours. I haven't added any of my AppleScripts to my website because Mac users have <a href="http://dougscripts.com/" target="_blank">Doug's Applescripts</a>. 
						</p>
						<footer></footer>
					</div>
					<div id="iPhone" >
						<header class="show_hide">
							<span class="company">iPhone Apps</span>
							<span class="right">Fall 2011 - Present</span>
						</header>
						
						<p class="hidden">
							<img alt="iPhone 4" src="img/iPhone4.png" />
							
							As most people know, the iPhone is a very popular Apple device. The iPad come out and now it is one of the most popular Apple devices ever. There is a huge ecosystem for Apps that run on iOS (the OS of Apple iDevices). So, I decided to try my hand at Apps. <br/>
							<br/>
							XCode is the IDE made by Apple for the development of iOS Apps. Working in xCode was a really nice experience. I find that Objective-c is a really good language. It makes a lot of sense. XCode is also a great IDE. It work smoothly, quickly, and doesn't let you make mistakes. XCode also has a few great features that are majorly different than anything I've used while developing in any IDE. <br/>
							<br/>
							XCode has drag and drop features for storyboarding your app. I can literally play with that and have my whole app setup visually before ever touching code. It's excellent.<br/>
							<br/>
							Naturally, like with Android development, my first app was a hex color mixer. Three sliders for red, green, and blue. As you slide them around, the color changes in the app and it shows the hex code for that color. It's pretty basic, but it is a good app.<br/>
							<br/>
							I have made a few other apps, but nothing that I felt was worth being put on the App Store.
						
						</p>
						<footer></footer>
					</div>
					<div id="Robot" >
						<header class="show_hide">
							<span class="company">Robotics</span>
							<span class="right">Fall 2008 - Present</span>
						</header>
						
						<p class="hidden">
							<img alt="Testing our robot" src="img/RobotWork.jpg" />

							The Midwest Instruction and Computing Symposium is a regional conference where I am from. It is kind of a big deal to many Universities in the area. It's a conference for most of the time, but there is also a programming contest and a robotics
							contest. My junior year, <a href="http://www.alexcash.com" target="_blank">Alex Cash</a>, a good friend of mine, and I decided to team up
							and build a robot for the contest. We received Second place at the 2011 contest, our first year.
							<br/><br/>
							<a href="docs/RoboMazeMICS_2011.pdf">2011 MICS Rules</a><br/>
							<br/>
							<a href="docs/Robot_grid_world_2012.pdf">2012 MICS Rules</a>
							
							<br/><br/>
							
							Our <a href="http://www.youtube.com/embed/X8ftqeZnook">2011 Robot</a>  got us Second place at the MICS competition, our first year. 
							
							<br/><br/>
							
							Our robot was, easily, the most robust design at the competition. We had the strongest algorithm and we had	the sturdiest and most thought-out chasis.
							
							Our <a href="http://www.youtube.com/embed/uzuumELcttI">2012 Robot</a> solved the puzzles for a second year at MICS.
							
							The code for our solutions are on <a href="https://github.com/briananders/Robotics-Solutions" target="_blank">Github</a>.
							<br/><br/>
							
						</p>
						<footer></footer>
					</div>
					<div id="Android" >
						<header class="show_hide">
							<span class="company">Android Apps</span>
							<span class="right">Winter 2011</span>
						</header>
						
						<p class="hidden">
							<img alt="Droid Incredible" src="img/Droid.png" />
						
							I took a class on Android Programming. It was not very difficult. I found the work to be tedious and time consuming. I made a few cool apps, but nothing that I thought was play store worthy. Working with the Android SDK in Eclipse seemed a bit antiquated after working with xCode. Since I know Java, the programming wasn't hard, and since I know web design, the app interface setup wasn't difficult. <br/> 
							<br/> 
							My first basic app was just a box with three color sliders below for red, green, and blue. Based on where the sliders were situated, the box at the top would change colors and tell the hex code for that color. Pretty easy. <br/>
							<br/>
							Other apps I have done are for handy calculations. For instance, since I grew up working with cranes, I have an app that will calculate the lifting capacity of each of our cranes at different boom lengths and radii.
						
						</p>
						<footer></footer>
					</div>
					<div id="Fishtank" >
						<header class="show_hide">
							<span class="company">Fish Tank Computer</span>
							<span class="right">Spring 2010</span>
						</header>
						
						<p class="hidden">
							<img alt="Fish Tank Computer" src="img/Fishtank1.jpg" />
						
							For a class project, my Sophomore year (2009), we were given the assignment to take
							apart a computer and make it into something great. $300 in supplies later, including a 
							fish tank and 6 gallons of mineral oil, we had built a fish tank computer. Mineral oil is non-conductive. This allowed us to tear the shell off the tower and submerge the motherboard, power supply, etc. into the mineral oil. The mineral oil acts as a liquid coolant. Any moving parts, like the hard drive, had to remain outside the oil. <br/>
							<br/>
							Here's a <a href="http://www.youtube.com/embed/GNhxvhKoagg">video on youtube</a> of us during the project:<br/>

						</p>
						<footer></footer>
					</div>
					<div id="MAME" >
						<header class="show_hide">
							<span class="company">M.A.M.E.</span>
							<span class="right">Fall 2011 - Spring 2012</span>
						</header>
						
						<p class="hidden">
							<img alt="Arcade Grey" src="img/ArcadeGrey.png" />
						
							A friend of mine and I had the idea of building an arcade cabinet. The friend is <a href="http://www.alexcash.com">Alex Cash</a>, and during my senior year, we built an arcade cabinet from scratch. We applied to get money to buy all the necessary pieces for construction, like plywood and screws. The request was granted, and we went to work. In my garage, we built the shell for the arcade. We then got a computer and set it up for MAME (Multiple Arcade Machine Emulator). After installing multiple emulators, we added ROMs for old games. The Arcade current runs some 6000 different games.
						
						</p>
						<footer></footer>
					</div>
					<div id="Programming" >
						<header class="show_hide">
							<span class="company">Competitions</span>
							<span class="right">Fall 2008 - Present</span>
						</header>
						
						<p class="hidden">
							<img alt="Programming Contest" src="img/ProgrammingCompetition.JPG" />
						
							At Graceland, one of the cool computer things we do outside of class is go to programming competitions. We go to at least one each semester. We usually have to program in Java or C++, but sometimes we get to program in many other languages, like Python. <br/>
							<br/>
							At these contests, teams are given a set of around nine problems to solve. Between the three on a team, there is one computer. The teams have to work together to try to solve as many problems as they can within the time limit (usually around 5 hours).<br/>
							<br/>
							My team is consistently one of the strongest at these competitions. In 2012, we scored in the top 15%, which is really good.
						
						</p>
						<footer></footer>
					</div>
					<footer></footer>
				</div>
				<footer></footer>
			</div>
			<div id="Honors" class="outside">
				<header>Honors and Awards</header>
			
				<div class="inside">
					<div id="ACM" >
						<header class="show_hide">
							<span class="company">ACM President <br/> Vice President</span>
							<span class="right">Fall 2008 - Present</span>
						</header>
						
						<p class="hidden">
							<img alt="ACM" src="img/ACM.jpg" />
						
							The <a href="http://www.acm.org">Association for Computing Machinery (ACM)</a> is the world’s largest educational and scientific computing society. At Graceland University, we have an ACM chapter. I have been an ACM student member since my freshmen year. We meet weekly to discuss current events in tech, watch presenters, and do activities.<br/>
							<br/>
							Last year, my fourth year, I was elected as Vice President of our ACM chapter. Throughout the year I worked hand in hand with the President and Secretary to make ACM great. We setup lots of speakers to come and talk about their field, we had game nights, and generally we had a great time. One thing we did that was a little different than the usual campus club was to reserve an area of the school news paper, The Tower, for an ACM div. We called it "Tech Now" and every two weeks we would submit an div about current and/or important tech news. I wrote several divs that year and they were a smashing success, as were all the Tech Now divs.<br/>
							<br/>
							This year, I am ACM President. The year has gone really well so far. Everyone seems to be enjoying it. I managed to recruit a new bunch of freshmen to come to meetings and strengthen our department. Freshmen have been catching me on the sidewalk to tell me how fun the last meeting was. This year we have continued the "Tech Now" div in the paper. So far, I have written all the divs. It has still been a hit again.
						</p>
						<footer></footer>
					</div>
					<div id="Ackerley" >
						<header class="show_hide">
							<span class="company">Ackerley Scholarship</span>
							<span class="right">Fall 2008 - Present</span>
						</header>
						
						<p class="hidden">
							<img alt="Ackerley" src="img/Ackerley.jpg" />
						
							At Graceland University, there are a select group of students in the CS/IT department that are awarded a <a target="blank" href="http://www.graceland.edu/About-GU/Offices/Ackerley-Scholars/index">Scholarship</a> from the Ackerley program. The Ackerley scholars are the top students in the CS/IT department and are tasked with the responsibility of leading the rest of the students in the department. <br/>
							<br/>
							I was recruited upon arriving at Graceland and have continued to be a leader in the program since. Ackerley scholars are supposed to be getting people to come to ACM meetings, go to programming contests, and we are also constantly working on new projects. <br/>
							<br/>
							To remain an Ackerley scholar, there are academic requirements that include keeping a high GPA, participating in programming contests and regularly attending CS/IT events.
						
						</p>
						<footer></footer>
					</div>
					<div id="Eagle" >
						<header class="show_hide">
							<span class="company">Eagle Scout</span>
							<span class="right">December 21, 2005</span>
						</header>
						
						<p class="hidden">
							<img alt="Eagle Scout" src="img/Eagle%20Scout.jpg" />
							When I was very young, I started Cub Scouts as a Tiger Cub. Over the years I passed into the Boy Scouts, and after working diligently in the program, I excelled into becoming an Eagle Scout. To become an Eagle Scout, one is required to first move up the ranks, meeting the <a href="http://www.scouting.org/scoutsource/BoyScouts/AdvancementandAwards.aspx">requirements of each rank</a> and passing a board of review for each rank. <br/>
							<br/>
							One of the <a href="http://www.scouting.org/scoutsource/BoyScouts/AdvancementandAwards/eagle.aspx">requirements for Eagle rank</a> is to "plan, develop, and give leadership to others in a service project helpful to any religious institution, any school, or your community." My project was to build a big sandbox for one of the day care facilities in town. It was an 8'x8' box with a 14'x14'. I also had a 2' deep hole dug so that the sad was at ground level, yet deep enough for kids to have fun. I have been told that it was "one of the most intense eagle projects" they have ever seen. <br/>
							<br/>
							On December 21, 2005, I passed my board of review and became an Eagle Scout. You have to be under 18 to move up in rank. I know people that had their board of review the night before their 18th birthday. I was 15 when I gained Eagle rank. This left time for me to continue on and gain the bronze, gold, and silver palms. The palms are like gold stars on your Eagle rank. Each palm has their own requirements.
						
						</p>
						<footer></footer>
					</div>
					
					<footer></footer>
				</div>
				<footer></footer>
			</div>
		</div>
		<div class="container" id="Education" >
			<div class="education">
				<header>Graceland University</header>
				<p>
					<img alt="Graceland Administration Building" src="img/Graceland.jpg" />	
					Attended: Fall 2008 - Present<br/>
					Anticipated graduation date: May 2013<br/>
					B.S. Computer Science/Information Technology<br/>
					B.S. Mathematics<br/>
					Minor in Web Design<br/>
					Current GPA: 3.690<br/>
					<br/>
					Honor Role 12 consecutive Semesters<br/>
					Ackerley Scholar (2008-present)<br/>
					Active ACM Member (2008-present)<br/>
					Vice President of ACM chapter (2011-2012)<br/>
					President of ACM chapter (2012-2013)
				</p>
				<footer></footer>
			</div>	
			<div class="education">
				<header>Lamoni High School</header>
				<p>
					<img alt="Lamoni School Sign" src="img/LamoniSchools.jpg" />	
					Attended: Fall 2003 - Spring 2008<br/>
					Diploma<br/>
					GPA: 3.860<br/>
					<br/>
					Honor Role 8 consecutive Semesters<br/>
					Eagle Scout in the Boy Scouts of America
				</p>
				<footer></footer>
			</div>
		</div>
		<div class="container" id="References" >
			<div class="ref">
				<img class="Prof" id="Brunner" src="img/KevinBrunner.png" alt="Kevin Brunner" style="height:421px; width:280px; margin-right: 0px; margin-left: 0px;"/>
				
				<span>
					<strong>Kevin Brunner</strong>, Ph.D.,<br/>
					Associate Professor of Information Technology<br/>
					Ph: 641.784.5175<br/>
					<a href="mailto:brunner@graceland.edu">brunner@graceland.edu</a>
				</span>
				<footer></footer>
			</div>
			<div class="ref">
				<img class="Prof" id="JJones" src="img/JimJones.png" alt="Jim Jones"  style="height:421px; width:280px; margin-right: 0px; margin-left: 0px;"/>
				
				<span>
					<strong>James Jones</strong>, Ph.D.,<br/>
					Professor of Computer Science<br/>
					Ph: 641.784.5294<br/>
					<a href="mailto:jsjones@graceland.edu">jsjones@graceland.edu</a>
				</span>
				<footer></footer>
			</div>
			<div class="ref">
				<img class="Prof" id="Kioko" src="img/TonyKioko.png" alt="Tony Kioko"  title="He is a pretty private person" style="height:421px; width:280px; margin-right: 0px; margin-left: 0px;"/>
				
				<span>
					<strong>Tony Kioko</strong>,<br/>
					Senior IT Analyst<br/>
					Principal Financial Group<br/>
					Ph: 515.991.2676<br/>
					<a href="mailto:Kioko.Antonio@principal.com">Kioko.Antonio@principal.com</a>
				</span>
				<footer></footer>
			</div>
			<div class="ref">
				<img class="Prof" id="Cash" src="img/AlexCash.png" alt="Alex Cash"  style="height:421px; width:280px; margin-right: 0px; margin-left: 0px;"/>
				
				<span>
					<strong>Alex Cash</strong><br/>
					Frontend Engineer<br/>
					Nest Labs<br/>
					<a href="mailto:"></a>
				</span>
				<footer></footer>
			</div>	
		</div>

		<div id="footer">
			&#169; 2013 Brian Anders
		</div>

		<div id="validate">
			Validate:
			<a href="http://validator.w3.org/check?uri=referer" target="_blank">HTML5</a>
			<a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3" target="_blank">CSS3</a>
		</div>	
	</body>
</html>