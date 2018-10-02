
<?php require 'pull_data.php';?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Gideon Spektor</title>
</head>
<body>
    <nav>
        <a href="#"><img src="logo.png" alt="gideon spektor logo"/></a>
        <div class="navRight">
             <ul>
                 <li><a href="#about" class="navText">About me</a></li>
                 <li><a href="#project" class="navText">Projects</a></li>
                 <li><a href="#contact" class="navText">Contact</a></li>
            </ul>
        </div>
        <div class="dropdown">
                <a href="#about" class="navText">About me</a>
                <a href="#project" class="navText">Projects</a>
                <a href="#contact" class="navText">Contact</a>
        </div>
    </nav>
    <section class="pageOne">
           <div class="home">
                 <h1>Gideon Spektor</h1><br>
                 <h2>Trainee Full Stack Developer</h2>
                 <a class="button" href="#project">See my work</a>
           </div>
    </section>
    <section id="about" class="pageTwo">
        <div class="me">
            <h1>About Me</h1>
            <p>Hi I’m Gideon.</p>
            <p><?php echo $bio;?></p>
            <p><?php echo $life_now;?></p>
            <p><?php echo $goals;?></p>
        </div>
    </section>
    <section id="project" class="pageThree">
        <div class="showcase">
            <div class="cards">
                <div class="projOne">
<!--                    --><?php //portfolio_output($db,'project1');?>
                </div>
                Project one
            </div>
            <div class="cards">
                <div class="projOne">
                 </div>
                 Project two
            </div>
          <div class="cards">
                <div class="projOne">
                </div>
                Project three
          </div>
            <div class="cards">
                <div class="projOne">
                </div>
                Project four
            </div>
            <div class="cards">
                <div class="projOne">
                </div>
                Project five
            </div>
            <div class="cards">
                <div class="projOne">
                </div>
                Project six
            </div>
        </div>
    </section>
    <section id="contact" class="pageFour">
            <div class="myInfo">
                <h1>Contact</h1>
                <p>Give me a call</p>
                <p>07867511476</p>
                <p>Send me an email</p>
                <a class="email" href="mailto:gidspektor@gmail.com">gidspektor@gmail.com</a>
                <a href="https://www.linkedin.com/in/gideon-spektor-33abb4163"><img src="images/linkd.png" alt="linked in icon"/></a>
                <a href="https://github.com/gidspektor" target="_top"><img src="images/git.png" alt="github icon"/></a>
            </div>
    </section>
</body>
</html>