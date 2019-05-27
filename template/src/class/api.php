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
                $personInfo = array(
                    'id' => $person['id'],
                    'name' => $person['name'],
                    'gender' => $person['gender'],
                    'age' => $person['age'],
                    'eye_color' => $person['eye_color'],
                    'hair_color' => $person['hair_color'],
                    'species' => $person['species'],
                    'url' => $person['url']
                );
                array_push($personInFilm, $personInfo);
            }

        }
        return $personInFilm;
    }
}