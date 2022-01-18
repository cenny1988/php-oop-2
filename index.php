<?php
/**
     * 
     *      Definire classe Persona:
     *          - ATTRIBUTI (private):
     *              - nome
     *              - cognome
     *              - dataNascita (stringa)
     *          - METODI:
     *              - costruttore che accetta nome e cognome
     *              - setter/getter per ogni variabile
     *              - printFullPerson: che stampa "nome cognome: dataNascita"
     *              - toString: che ritorna "nome cognome: dataNascita"
     * 
     * 
     *      Definire classe Employee che eredita da Persona:
     *          - ATTRIBUTI (private):
     *              - stipendio
     *              - dataAssunzione
     *          - METODI:
     *              - costruttore che accetta nome, cognome e stipendio
     *              - setter/getter per variabili 
     *              - printFullEmployee: che stampa "nome cognome: stipendio (dataAssunzione)"
     *              - toString: che ritorna "nome cognome: stipendio (dataAssunzione)"
     * 
*/
// classe persona
class Persona {
    private $nome;
    private $cognome;
    private $dataNascita;

    public function __construct($nome, $cognome){

        $this -> setNome($nome);
        $this -> setCognome($cognome);
    } 
// get set nome
    public function getNome(){

        return $this -> nome;
    }

    public function setNome($nome){

        $this -> nome = $nome;
    }
// get set cognome
    public function getCognome(){

        return $this -> cognome;
    }

    public function setCognome($cognome){

        $this -> cognome = $cognome;
    }
// get set data di nascita
    public function getDataNascita(){

        return $this -> dataNascita;
    }

    public function setDataNascita($dataNascita){

        $this -> dataNascita = $dataNascita;
    }

    public function printFullPerson(){

        return $this -> getNome() . " " . $this -> getCognome() . ": " . $this -> getDataNascita() . "<br>";
    }

    public function __toString(){

        return $this -> printFullPerson();
    }
}

// classe employee che eredita persona
class Employee extends Persona{

    private $stipendio;
    private $dataAssunzione;

    public function __construct($nome, $cognome, $stipendio){

        parent:: __construct($nome, $cognome);

        $this -> setStipendio($stipendio);
    }

    // get set stipendio
    public function getStipendio(){

        return $this -> stipendio;
    }

    public function setStipendio($stipendio){

        $this -> stipendio = $stipendio;
    }

    // get set data assunzione
    public function getDataAssunzione(){

        return $this -> dataAssunzione;
    }

    public function setDataAssunzione($dataAssunzione){

        $this -> dataAssunzione = $dataAssunzione;
    }

    public function printFullEmployee(){

        return $this -> getNome() . " " . $this -> getCognome() . ": " . $this -> getStipendio() . "€ (" . $this -> getDataAssunzione() . ")"; 
    }

    public function __toString(){

        return $this -> printFullEmployee();
    }
}

$person1 = new Persona("Gennaro", "Fusco");
$person1 -> setDataNascita("24/04/1988");

$person2 = new Persona("Maria", "Bianchi");
$person2 -> setDataNascita("10/02/1962");
echo $person1;
echo $person2;

$employee1 = new Employee("Giovanni", "Bruno", "25000");
$employee1 -> setDataNascita("27/06/1957");
$employee1 -> setDataAssunzione("27/06/1987");
echo $employee1;
?>