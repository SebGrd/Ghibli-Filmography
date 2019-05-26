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
        <article class="film" id="id-film">
            <h3>Castle in the Sky</h3>
            <p>The orphan Sheeta inherited a mysterious crystal that links her to the mythical sky-kingdom of Laputa. With the help of resourceful Pazu and a rollicking band of sky pirates, she makes her way to the ruins of the once-great civilization. Sheeta and Pazu must outwit the evil Muska, who plans to use Laputa's science to make himself ruler of the world.</p>
            <p>Director : <strong>Hayao Miyazaki</strong></p>
            <p>Producer : <strong>Isao Takahata</strong></p>
            <p>Release date : <strong>1986</strong></p>
            <p>Score : <strong>96%</strong></p>
            <ul>
                <li>perso1</li>
                <li>perso2</li>
                <li>perso3</li>
            </ul>
            <ul>
                <li>race1</li>
                <li>race2</li>
            </ul>
<!--            URL POUR LES PERSO-->
<!--            https://ghibliapi.herokuapp.com/films/0440483e-ca0e-4120-8c50-4c8cd9b965d6-->
        </article>

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