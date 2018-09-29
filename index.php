

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
            <p>My journey as a developer started a year ago when I first started trying to use Javascript to create small games, that were full of bugs but none the less I found my interest in development.
            </p>
            <p>I’m now a trainee web developer at Mayden Academy and after my 16 week journey here I would like to go into web development.
            </p>
            <p><?php require 'pull_data.php';
                echo $final_output; ?>
            </p>
            <p>I want to create cool, clean and creative websites; as I believe simplicity is key to a good user experience. </p>
        </div>
    </section>
    <section id="project" class="pageThree">
        <div class="showcase">
            <div class="cards">
                <div class="projOne">
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