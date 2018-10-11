<?php


class ParticipantEvent
{
    private $cnxPDO;

    /**
     * ParticipantEvent constructor.
     * @param $cnxPDO
     */
    public function __construct()
    {
        $this->cnxPDO = ConnexionPDO::getInstance();
    }
  public function addParticipation($idUser,$idEvent,$email){
      $req = $this->cnxPDO->prepare('INSERT INTO participation(idP,idE,email) VALUES(:idP,  :idE, :email)');
      $req->execute(array(
          'idP' => $idUser,
          'idE' => $idEvent,
          'email'=>$email
      ));
  }

    public function show()
    {

        $requete = "SELECT * FROM participation WHERE  etat=0 ";
        $req = $this->cnxPDO->prepare($requete);

        $reponse = $req->execute();
        if (!$reponse) {
            return null;
        } else {
        }
        $resultat = $req->fetchAll(PDO::FETCH_OBJ);
        return $resultat;
    }
    public function verif($idE,$idP){
        $requete = "SELECT * FROM participation WHERE  idE=:idE AND idP=:idP";
        $req = $this->cnxPDO->prepare($requete);

        $reponse = $req->execute( array(
            'idP'=>$idP,
            'idE'=>$idE
        ));
        if (!$reponse) {
            return null;
        } else {
        }
        $resultat = $req->fetch(PDO::FETCH_ASSOC);
        return $resultat;

    }
    public function update($id){

        $requete = "UPDATE participation SET etat=:etat where id=:id";
        $req = $this->cnxPDO->prepare($requete);
        $req->execute(
            array(
                'etat'=>1,
                'id'=>$id


            ));

    }

}