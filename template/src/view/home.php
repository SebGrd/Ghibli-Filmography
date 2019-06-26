
<main id="home">

    <aside id="sidebar">
        <h2>Films list</h2>
        <ol>
        <?php $filmId=0;
        foreach ($films as $film){ ?>
            <li><a href="#film-<?php echo $filmId ?>"><?php echo $film['title']; ?></a></li>
        <?php $filmId++;
        } ?>
        </ol>
    </aside>

    <button class="hamburger hamburger--collapse open-mobile-btn" type="button">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
    </button>
    <nav class="mobile-menu">
        <div class="m-menu-header">
            <h2>Films list</h2>
            <button class="close-mobile-btn"><i class="fas fa-times"></i></button>
        </div>
        <ol>
            <?php $filmId=0;
            foreach ($films as $film){ ?>
                <li><a href="#film-<?php echo $filmId ?>" class="mobile-link"><?php echo $film['title']; ?></a></li>
                <?php $filmId++;
            } ?>
        </ol>
    </nav>

    <section id="films">
        <h2>Films</h2>

        <?php $filmId=0;
        foreach ($films as $film){ ?>
            <article class="film" id="film-<?php echo $filmId; ?>">
                <header>
                    <h3><?php echo $film['title']; ?></h3>
                </header>
                <div class="film-body">
                    <p><?php echo $film['description']; ?></p>
                    <p>Director : <strong><?php echo $film['director']; ?></strong></p>
                    <p>Producer : <strong><?php echo $film['producer']; ?></strong></p>
                    <p>Release date : <strong><?php echo $film['release_date']; ?></strong></p>
                    <p>Score : <strong><?php echo $film['rt_score']; ?>%</strong></p>

                </div>


            </article>
            <?php $filmId++;
        } ?>

    </section>

</main>

<script src="template/js/jquery.js"></script>
<script src="template/js/app.js"></script>