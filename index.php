<?php $title = 'Influential People'; ?>
<?php $style = 'css/home.css'; ?>
<?php $top = 'css/top.css'; ?>
<?php include "inc/top.php"; ?>	
<?php include "inc/nav.php";?>

<section class="container">

	<h2>Introduction</h2>
	<p>Throughout history, a lot of people have made significant contributions to the prosperity of human beings in the domains of politics, music, and religion. When you think about this topic, there might be a lot of names come to your mind, and everyone would come up with their own lists of famous people that important to the world. Now we will introduce the life stories and contributions of some influential people to you.</p>

	<div class="slider">
			<img class="flexible" src="images/Politician.jpg" alt="Politician">
			<img class="flexible" src="images/pl.jpg" alt="Pianists">
			<img class="flexible" src="images/rf.jpg" alt="ReligiousFigure">
	</div>

	<div class="main">
	<section class="excerpt">
		<h2 class="inline">Influential Politicians</h2>
		<div class="inline">2020 Democratic Presidential Candidates</div>
		<p>A lot of candidates have decided to run for president of the United States in the upcoming 2020 elections.  I wanted to focus on three notable U.S. senators (Elizabeth Warren, Kirsten Gillibrand, adn Kamala Harris), who have decided to run and recently announced their candidacy and/or intention to run.  All three women are older than 50 years old, are U.S. senators from relatively large and well-known states (Massachusetts, New York, and California), and are heavily experienced with public service.  The senators are ordered by date of candidacy announcement.  The domain is 2020 Presidential Candidates.</p>
		<section class="photo">
		<a href="politians.php#ewarren">
		<figure data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="2000" data-aos-delay="300" data-aos-easing="linear">
			<img src="images/ewarren.jpg" alt="Elizabeth Warren">
			<figcaption>Elizabeth Warren</figcaption>
		</figure>
		</a>
		<a href="politians.php#kg">
		<figure data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="2000" data-aos-delay="300" data-aos-easing="linear">
			<img src="images/kg.jpg" alt="Kirsten Gillibrand">
			<figcaption>Kirsten Gillibrand</figcaption>
		</figure>
		</a>
		<a href="politians.php#kh">
		<figure data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="2000" data-aos-delay="300" data-aos-easing="linear">
			<img src="images/kharris.jpg" alt="Kamala Harris">
			<figcaption>Kamala Harris</figcaption>
		</figure>
		</a>
		</section>
	</section>

	<section class="excerpt">
		<h2 class="inline">Influential Pianists</h2>
		<div class="inline">Contributers for Classical Music</div>
		<p>Who are the greatest pianists who've ever lived? That's the question we put to the Classic FM presenters and – after much heated debate – these are my most favorite artists. Mozart could be considered the first "concert pianist" as he performed widely on the piano. Composers Beethoven and Clementi from the classical era were also famed for their playing, as were, from the romantic era, Liszt, Brahms, Chopin, Mendelssohn and Rachmaninoff. From that era, leading performers less known as composers were Clara Schumann and Hans von Bülow. However, we do not have modern audio recordings of most of these pianists.</p>
		<section class="photo">
			<a href="pianists.php#fc">
			<figure data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="2000" data-aos-delay="300" data-aos-easing="linear">
				<img src="images/fc1.jpg" alt="Frédéric Chopin">
				<figcaption>Frédéric Chopin</figcaption>
			</figure>
			</a>
			<a href="pianists.php#sr">
			<figure data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="2000" data-aos-delay="300" data-aos-easing="linear">
				<img src="images/sr1.jpg" alt="Sergei Rachmaninov">
				<figcaption>Sergei Rachmaninov</figcaption>
			</figure>
			</a>
			<a href="pianists.php#gg">
			<figure data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="2000" data-aos-delay="300" data-aos-easing="linear">
				<img src="images/gg.jpg" alt="Glenn Gould">
				<figcaption>Glenn Gould</figcaption>
			</figure>
			</a>
		</section>
	</section>

	<section class="excerpt">
		<h2 class="inline">Religious Figures</h2>
		<div class="inline">Leaders of the Three Famous Religions</div>
		<p>Religion and spirituality are two things that are probably the most difficult to define in definite terms. It would be wrong to say that spirituality and religion don’t go hand in hand because they do; the only difference is that while religion is an organized system that pays homage to a god, spirituality is something that does not always need a deity to define the parameters of the person’s spiritual conduct. Throughout history there have been people who have played the roles of, both, spiritual and religious leaders for their societies. Some of them have done such exemplary work, with such dedication, that their work, and in turn they themselves, were recognized the world over for their societies. Let's look for more information about these people and others.  Their work is still beneficial and influential in modern society.</p>
        <section class="photo">
        	<a href="religious-figures.php#jesus">
			<figure data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="2000" data-aos-delay="300" data-aos-easing="linear">
				<img src="images/jesus.jpg" alt="Jesus">
				<figcaption>Jesus</figcaption>
			</figure>
			</a>
			<a href="religious-figures.php#mo">
			<figure data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="2000" data-aos-delay="300" data-aos-easing="linear">
				<img src="images/Mohammad.jpg" alt="Sergei Rachmaninov">
				<figcaption>Mohammad</figcaption>
			</figure>
			</a>
			<a href="religious-figures.php#bud">
			<figure data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="2000" data-aos-delay="300" data-aos-easing="linear">
				<img src="images/budda.jpg" alt="Glenn Gould">
				<figcaption>Buddha</figcaption>
			</figure>
			</a>
		</section>
	</section>
	</div>
</section>

<?php include "inc/js.php"; ?>

<script src="sss/sss.js"></script>
<script>
$('.slider').sss();
</script>

</body>
</html>
