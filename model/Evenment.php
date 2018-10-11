<?php


class Evenment
{
    /**
     * @return null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param null $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    private $nom;
    private $id;
    private $dteD;
    private $dteF;
    private $lieu;
    private $nbDePlace;
    private $nbParticipant;
    private $nbRestant;
    private $cnxPDO;

    /**
     * Evenment constructor.
     * @param $nom
     * @param $dteD
     * @param $dteF
     * @param $lieu
     * @param $nbDePlace
     * @param $nbParticipant
     * @param $nbRestant
     */
    public function __construct($id=null,$nom = null, $dteD = null, $dteF = null, $lieu = null, $nbDePlace = null, $nbParticipant = null, $nbRestant = null)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->dteD = $dteD;
        $this->dteF = $dteF;
        $this->lieu = $lieu;
        $this->nbDePlace = $nbDePlace;
        $this->nbParticipant = $nbParticipant;
        $this->nbRestant = $nbRestant;
        $this->cnxPDO = ConnexionPDO::getInstance();
    }


    /**
     * @return mixed
     */
    public function getNbParticipant()
    {
        return $this->nbParticipant;
    }

    /**
     * @param mixed $nbParticipant
     */
    public function setNbParticipant($nbParticipant): void
    {
        $this->nbParticipant = $nbParticipant;
    }

    /**
     * @return mixed
     */
    public function getNbRestant()
    {

        return $this->nbRestant;

    }

    /**
     * @param mixed $nbRestant
     */
    public function setNbRestant($nbRestant): void
    {
        $this->nbRestant = $nbRestant;
    }

    /**
     * @return null
     */
    public static function getNom()
    {
        return self::$nom;
    }

    /**
     * @param null $nom
     */
    public static function setNom($nom): void
    {
        self::$nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getDteD()
    {
        return $this->dteD;
    }

    /**
     * @param mixed $dteD
     */
    public function setDteD($dteD): void
    {
        $this->dteD = $dteD;
    }

    /**
     * @return mixed
     */
    public function getDteF()
    {
        return $this->dteF;
    }

    /**
     * @param mixed $dteF
     */
    public function setDteF($dteF): void
    {
        $this->dteF = $dteF;
    }

    /**
     * @return mixed
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * @param mixed $lieu
     */
    public function setLieu($lieu): void
    {
        $this->lieu = $lieu;
    }

    /**
     * @return mixed
     */
    public function getNbDePlace()
    {
        return $this->nbDePlace;
    }

    /**
     * @param mixed $nbDePlace
     */
    public function setNbDePlace($nbDePlace): void
    {
        $this->nbDePlace = $nbDePlace;
    }
    public function update($idE,$nbRestant)
    {

        $requete = "UPDATE evenement SET nbRestant=:nbRestant where id=:id";
        $req = $this->cnxPDO->prepare($requete);
        $req->execute(
            array(
                'nbRestant' => ($nbRestant - 1),
                'id' => $idE


            ));
    }

    public function showValid()
    {

        $requete = "SELECT * FROM evenement WHERE  dteF > CURDATE() AND nbRestant > 0";
        $req = $this->cnxPDO->prepare($requete);

        $reponse = $req->execute();
        if (!$reponse) {
            return null;
        } else {
        }
        $evenements = $req->fetchAll(PDO::FETCH_OBJ);
        return $evenements;
    }
    public function show($idE)
    {

        $requete = "SELECT * FROM evenement WHERE id= :idE ";
        $req = $this->cnxPDO->prepare($requete);

        $reponse = $req->execute(array(
            'idE'=>$idE
        ));
        if (!$reponse) {
            return null;
        } else {
        }
        return $evenements = $req->fetch(PDO::FETCH_ASSOC);

    }
    public function showArchive()
    {

        $requete = "SELECT * FROM evenement WHERE  dteF < CURDATE() ";
        $req = $this->cnxPDO->prepare($requete);

        $reponse = $req->execute();
        if (!$reponse) {
            return null;
        } else {
        }
        $evenements = $req->fetchAll(PDO::FETCH_OBJ);

        return $evenements;
    }

    public function addEvent($nom,$dteD,$dteF,$lieu,$nbDePlace)
    {
        $req = $this->cnxPDO->prepare('INSERT INTO evenement(nom,  dteD, dteF, lieu, nbDePlace,nbRestant) VALUES(:nom,  :dteD, :dteF, :lieu, :nbDePlace,:nbRestant)');
        $req->execute(array(
            'nom' => $nom,
            'dteD' => $dteD,
            'dteF' => $dteF,
            'lieu' => $lieu,
            'nbDePlace'=>$nbDePlace,
            'nbRestant'=>$nbDePlace
            ));

    }
}