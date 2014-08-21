<div class="row header">
      <div class="small-6 small-centered columns">
        <h1><a href="http://www.azharkhan.net">AZHAR KHAN</a></h1>
        <h5 class="subheader">Full Stack Developer | Music Fan | Superhero | Dreamer</h5>
      </div>
    </div>

    <ul class="small-block-grid-5 nav">
      <li <?php if(basename($_SERVER["PHP_SELF"]) == "index.php") echo 'class="active"'; ?>><a href="/"><i class="icon-user icon-large"></i><label>About</label></a></li>
      <li <?php if(basename($_SERVER["PHP_SELF"]) == "resume.html") echo 'class="active"'; ?>><a href="/resume.html"><i class="icon-briefcase icon-large"></i><label>Resume</label></a></li>
      <li><a href="/blog"><i class="icon-pencil icon-large"></i><label>Blog</label></a></li>
      <li <?php if(basename($_SERVER["PHP_SELF"]) == "music.php") echo 'class="active"'; ?>><a href="/music"><i class="icon-music icon-large"></i><label>Music</label></a></li>
      <li <?php if(basename($_SERVER["PHP_SELF"]) == "talk.php") echo 'class="active"'; ?>><a href="/talk"><i class="icon-bullhorn icon-large"></i><label>Talk</label></a></li>
    </ul>