<?php


class api
{
    public $baseUrl = 'https://ghibliapi.herokuapp.com/';

    function getFilms(){
        $apiUrl = $this->baseUrl.'films';

        $json = file_get_contents($apiUrl);
        $tab = json_decode($json, true);

        return $tab;
    }

    function getPeopleList($filmId){

        $json = file_get_contents($this->baseUrl.'people/');
        $peoples = json_decode($json, true);

        $personInFilm = array();

        foreach ($peoples as $person){

            if($person['films'][0] == $this->baseUrl.'films/'.$filmId){
                echo 'MATCH ';
                $personInfo = array(
                    $person['id'],
                    $person['name'],
                    $person['gender'],
                    $person['age'],
                    $person['eye_color'],
                    $person['hair_color'],
                    $person['species'],
                    $person['url']
                );
                array_push($personInFilm, $personInfo);
            }

        }
        return $personInFilm;
    }
}