<?php
class Transporteur {

    private $id;
    private $nom;
    private $prenom;
    private $passwd;
    private $email;
    private $adress;
    private $numeroTelephone;
    private $trajets;
    private $statutCertificat;
    private $note;
    private $transactions;

    public function __construct($id,$nom, $prenom, $passwd, $email , $adress, $numeroTelephone,$trajets,$note)
    {
    $this->id=$id;
    $this->nom=$nom;
    $this->prenom=$prenom;
    $this->passwd=$passwd;
    $this->email=$email ;
    $this->adress=$adress;
    $this->numeroTelephone=$numeroTelephone;
    $this->trajets=$trajets;
    $this->note=$note;
    
    }
    
    public function demanderCertificat(){
        $this->statutCertificat= "en cours de traitement";
    }

    public function setStatut($statut){
        $this->statutCertificat=$statut;
    }
    public function addTransaction(){
           
    }
    public function getTransactions(){
        return $this->transactions;
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
    public function setId($id)
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
    public function setNom($nom)
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
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getPasswd()
    {
        return $this->passwd;
    }

    /**
     * @param mixed $passwd
     */
    public function setPasswd($passwd)
    {
        $this->passwd = $passwd;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * @param mixed $adress
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;
    }

    /**
     * @return mixed
     */
    public function getNumeroTelephone()
    {
        return $this->numeroTelephone;
    }

    /**
     * @param mixed $numeroTelephone
     */
    public function setNumeroTelephone($numeroTelephone)
    {
        $this->numeroTelephone = $numeroTelephone;
    }

    /**
     * @return mixed
     */
    public function getTrajets()
    {
        return $this->trajets;
    }

    /**
     * @param mixed $trajets
     */
    public function setTrajets($trajets)
    {
        $this->trajets = $trajets;
    }

    /**
     * @return mixed
     */
    public function getStatutCertificat()
    {
        return $this->statutCertificat;
    }

    /**
     * @param mixed $statutCertificat
     */
    public function setStatutCertificat($statutCertificat)
    {
        $this->statutCertificat = $statutCertificat;
    }

    /**
     * @return mixed
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param mixed $note
     */
    public function setNote($note)
    {
        $this->note = $note;
    }



}
?>