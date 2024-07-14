<?php

namespace App\Modelo;

use App\Almacen\IAlmacenPalabras;
use DateTime;

/**
 * Clase que representa una partida del juego del ahorcado
 */
class Partida {

    /**
     * @var int $id Identificador de la partida
     */
    private ?int $id;

    /**
     * @var int $numErrores Número de errores cometidos en la partida
     */
    private int $numErrores = 0;

    /**
     * @var string $palabraSecreta Palabra secreta usada en la partida
     */
    private string $palabraSecreta;

    /**
     * @var string $palabraDescubierta Estado de la palabra según va siendo descubierta. Por ejemplo c_c_e
     */
    private string $palabraDescubierta;

    /**
     * @var string $letras Lista de jugadas que ha realizado el jugador en la partida
     */
    private string $letras = "";

    /**
     * @var int $manNumErrores Número de errores permitido en la partida
     */
    private int $maxNumErrores;

    /**
     * 
     * @var $inicio Fecha y Hora del inicio de la partida
     */
    private string $inicio;

    /**
     * 
     * @var $fin Fecha y Hora del fin de la partida
     */
    private ?string $fin;

    /**
     * @var int $idUsuario Identificador del usuario
     */
    private ?int $idUsuario;

    /**
     * Constructor de la clase Hangman
     * 
     * @param AlmacenPalabrasInterface $almacen Almacen de donde obtener palabras para el juego
     * @param int $maxNumErrores Número maximo de errores
     * 
     * @returns Hangman
     */
    public function __construct(IAlmacenPalabras $almacen = null, int $maxNumErrores = null) {
        if (func_num_args() > 0) {
            $this->setPalabraSecreta(strtoupper($almacen->obtenerPalabraAleatoria()));
            // Inicializa la estado de la palabra descubierta a una secuencia de guiones, uno por letra de la palabra oculta
            $this->setPalabraDescubierta(preg_replace('/\w+?/', '_', $this->getPalabraSecreta()));
            $this->maxNumErrores = $maxNumErrores;
            $this->setInicio((new DateTime('now'))->format('d/m/Y'));
        }
    }

    /**
     * Recupera el identificador de la partida
     * 
     * @returns id de la partida
     */
    public function getId(): ?int {
        return $this->id;
    }

    /**
     * Establece el id de la partida
     * 
     * @param int $id ifd de la partida
     * 
     * @returns void
     */
    public function setId(int $id): void {
        $this->id = $id;
    }

    /**
     * Recupera la palabra secreta de la partida
     * 
     * @returns string Palabra secreta de la partida
     */
    public function getPalabraSecreta(): string {
        return $this->palabraSecreta;
    }

    /**
     * Establece la palabra secreta de la partida
     * 
     * @param string $palabraSecreta Palabra secreta de la partida
     * 
     * @returns void
     */
    public function setPalabraSecreta(string $palabraSecreta): void {
        $this->palabraSecreta = $palabraSecreta;
    }

    /**
     * Recupera el estado de la palabra descubierta de la partida
     * 
     * @returns string Estado de la palabra descubierta de la partida
     */
    public function getPalabraDescubierta(): string {
        return $this->palabraDescubierta;
    }

    /**
     * Establece el estado de la palabra descubierta de la partida
     * 
     * @param string $palabraDescubierta El estado de la palabra descubierta de la partida
     * 
     * @returns void
     */
    public function setPalabraDescubierta(string $palabraDescubierta): void {
        $this->palabraDescubierta = $palabraDescubierta;
    }

    /**
     * Recupera el listado de letras jugadas en la partida
     * 
     * @returns string Listado de letras jugadas en la partida
     */
    public function getLetras(): string {
        return $this->letras;
    }

    /**
     * Establece el listado de letras jugadas en la partida
     * 
     * @param string $letras Listado de letras jugadas en la partida
     * 
     * @returns void
     */
    public function setLetras(string $letras): void {
        $this->letras = $letras;
    }

    /**
     * Recupera el número máximo de errores de la partida
     * 
     * @returns int Número máximo de errores de la partida
     */
    public function getMaxNumErrores(): int {
        return $this->maxNumErrores;
    }

    /**
     * Establece el número máximo de errores de la partida
     * 
     * @param int $maxNumErrores Número máximo de errores de la partida
     * 
     * @returns void
     */
    public function setMaxNumErrores(int $maxNumErrores): void {
        $this->maxNumErrores = $maxNumErrores;
    }

    /**
     * Recupera el número de errores cometido en la partida
     * 
     * @returns int Número de errores cometido en la partida
     */
    public function getNumErrores(): int {
        return $this->numErrores;
    }

    /**
     * Establece el número de errores cometido en la partida
     * 
     * @param int $numErrores Número de errores cometido en la partida
     * 
     * @returns void
     */
    public function setNumErrores(int $numErrores): void {
        $this->numErrores = $numErrores;
    }

    /**
     * Recupera la fecha y hora del inicio de la partida
     * 
     * @param string $fin Hora y fecha del inicio de la partida
     * 
     * 
     * @returns string Hora y fecha del inicio de la partida
     */
    public function getInicio(): string {
        return $this->inicio;
    }

    /**
     * Establece la fecha y hora del inicio de la partida
     * 
     * @param string $inicio Hora y fecha del inicio de la partida
     * 
     * 
     * @returns void
     */
    public function setInicio(string $inicio): void {
        $this->inicio = $inicio;
    }

    /**
     * Recupera la fecha y hora del fin de la partida
     * 
     * @returns string Hora y fecha del inicio de la partida
     */
    public function getFin(): string {
        return $this->fin;
    }

    /**
     * Establece la fecha y hora del fin de la partida
     * 
     * @param string $fin Hora y fecha del fin de la partida
     * 
     * 
     * @returns void
     */
    public function setFin(string $fin): void {
        $this->fin = $fin;
    }

    /**
     * Recupera el identificador del usuario de la partida
     * 
     * @returns id del usuario de la partida
     */
    public function getIdUsuario(): ?int {
        return $this->idUsuario;
    }

    /**
     * Establece el id del usuario de la partida
     * 
     * @param int $idUsuario id del usuario
     * 
     * @returns void
     */
    public function setIdUsuario(int $idUsuario): void {
        $this->idUsuario = $idUsuario;
    }

    /**
     * Determina si una letra jugada es válida para el juego. Una letra es válida si se trata de una
     * letra en minúsculas o mayúsculas y si no ha sido jugada anteriormente
     * 
     * @param string $letra Letra elegida por el jugador
     * 
     * @returns bool Indica si la letra es válisa
     */
    public function esLetraValida(string $letra): bool {
        return ((strpos($this->getLetras(), strtoupper($letra)) === false) &&
                preg_match("/^[A-Za-z]$/", $letra));
    }

    /**
     * Comprueba la letra elegida por el jugador, modifica el estado de la palabra descubierta y añade la letra
     * 
     * @param string $letra Letra elegida por el jugador
     * 
     * @returns string El estado de la palabra descubierta
     */
    public function compruebaLetra(string $letra): string {
        $nuevaPalabraDescubierta = implode(array_map(function ($letraSecreta, $letraDescubierta) use ($letra) {
                    return ((strtoupper($letra) === $letraSecreta) ? $letraSecreta : $letraDescubierta);
                }, str_split($this->getPalabraSecreta()), str_split($this->getPalabraDescubierta())));
        if ($nuevaPalabraDescubierta == $this->getPalabraDescubierta()) {
            $this->numErrores++;
        } else {
            $this->setPalabraDescubierta($nuevaPalabraDescubierta);
        }
        $this->setLetras("{$this->getLetras()}$letra");
        return ($nuevaPalabraDescubierta);
    }

    /**
     * Comprueba si la palabra oculta el juego ya ha sido descubierta
     * 
     * @returns bool Verdadero si ya ha sido descubierta y falso en caso contrario
     */
    public function esPalabraDescubierta(): bool {
        // Si ya no hay guiones en la palabra descubierta
        return (!(strstr($this->getPalabraDescubierta(), "_")));
    }

    /**
     * Comprueba si la partida se ha acabado
     * 
     * @returns bool Verdadero si ya se ha acabado y falso en caso contrario
     */
    public function esFin(): bool {
        return ($this->esPalabraDescubierta() || ($this->getNumErrores() === $this->getMaxNumErrores()));
    }
}