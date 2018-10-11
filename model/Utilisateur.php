<?php



class Utilisateur
{
    private $id;
    private $nom;
    private $prenom;
    private $email;
    private $telephone;
    private $password;
    private $role;
    private $cnxPDO;

    /**
     * Utilisateur constructor.
     * @param $id
     * @param $nom
     * @param $prenom
     * @param $email
     * @param $telephone
     * @param $password
     * @param $role
     */
    public function __construct($id=null, $nom=null, $prenom=null, $mail=null, $telephone=null, $password=null, $role=null)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $mail;
        $this->telephone = $telephone;
        $this->password = $password;
        $this->role = $role;
        $this->cnxPDO=ConnexionPDO::getInstance();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom): void
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->email;
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail): void
    {
        $this->email = $mail;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone($telephone): void
    {
        $this->telephone = $telephone;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param mixed $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }




    public function exists($email )
    {
        $req= $this->cnxPDO->prepare('SELECT COUNT(*) FROM utilisateur WHERE email =:email');
        $req->bindValue(':email', $email);
        $req->execute();

        return (bool) $req->fetchColumn();

    }

    public function connecter($email){

        $req = $this->cnxPDO->prepare('SELECT id,prenom,nom, password,role FROM utilisateur WHERE email = :email');
        $req->execute(array(
            'email' => $email));
        $resultat = $req->fetch();

        return $resultat;


    }

    /**
     * @return null|PDO
     */

    public function inscription($nom,$prenom,$email,$pass_hache,$token,$telephone) {

        $req = $this->cnxPDO->prepare('INSERT INTO utilisateur( nom,prenom,telephone, password, email, dateINS, token) VALUES(:Nom, :prenom,:telephone, :pass, :email, CURDATE(), :token)');
        $req->execute(array(
            'Nom' => $nom,
            'prenom' => $prenom,
            'email' => $email,
            'pass' => $pass_hache,
            'telephone'=>$telephone,
            'token'=> $token));

    }

    /**
     * @return null|PDO
     */
    public function validChange($email)
    {
        $bdd = new PDO('mysql:host=localhost;dbname=gestion_evenement;charset=utf8', 'root', '');

        $req = $this->cnxPDO->prepare('SELECT token, pseudo FROM utilisateur WHERE email = :email');
        $req->execute(array(
            'email' => $email));
        return $resultat = $req->fetch();
    }



    public function validConnected(){
        $req= $this->cnxPDO->prepare('SELECT COUNT(*) FROM utulistauer WHERE idt=:id AND nom=:nom AND prenom=:prenom AND mail =:mail ');
        $req->bindValue(':id', $this->id);
        $req->bindValue(':mail', $this->mail);
        $req->bindValue(':nom', $this->gnom);
        $req->bindValue(':prenom', $this->prenom);
        $req->execute();
        return (bool) $req->fetchColumn();
    }
    public function preChange($email,$token){



        $req = $this->cnxPDO->prepare('SELECT * FROM utilisateur WHERE email = :email and token= :token');
        $req->execute(array(
            'email' => $email,
            'token' => $token));
        return $resultat = $req->fetch();
    }
    public function changeMdp($pwd_hashe,$email1, $newtoken){
        $req = $this->cnxPDO->prepare('UPDATE  utilisateur SET pwd=:pwd_hashe,token= :token WHERE email= :email');
        $req->execute(array(
            'pwd_hashe' => $pwd_hashe,
            'email' => $email1,
            'token' => $newtoken));
    }
}









