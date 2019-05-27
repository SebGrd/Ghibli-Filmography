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

    <section id="films">
        <h2>Films</h2>

        <?php $filmId=0;
        foreach ($films as $film){ ?>
            <article class="film" id="film-<?php echo $filmId; ?>">

                <?php opdump($api->getPeopleList($film['id'])); ?>

                <h3><?php echo $film['title']; ?></h3>
                <p><?php echo $film['description']; ?></p>
                <p>Director : <strong><?php echo $film['director']; ?></strong></p>
                <p>Producer : <strong><?php echo $film['producer']; ?></strong></p>
                <p>Release date : <strong><?php echo $film['release_date']; ?></strong></p>
                <p>Score : <strong><?php echo $film['rt_score']; ?>%</strong></p>
            <article>
            <?php $filmId++;
        } ?>

        <pre><?php var_dump($films);?></pre>
    </section>

</main>