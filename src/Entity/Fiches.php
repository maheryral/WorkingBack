<?php

namespace App\Entity;

use App\Repository\FichesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FichesRepository::class)
 */
class Fiches
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $semaine;

    /**
     * @ORM\Column(type="date")
     */
    private $date_fiche;

    /**
     * @ORM\Column(type="integer")
     */
    private $numdep;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $activite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $enseigne;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nomf;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $prenomf;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $sexef;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $telfixe;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $telmobile;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $adresef;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $codpost;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $fondm;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $prixv;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $jourfer;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $affairet;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $raisonv;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $statusf;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $nbresal;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $chiffred;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $dispof;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $observation;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $demarche;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $vendeurd;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $id_sem;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $etat;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $raison;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $fin_mois;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $agent;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSemaine(): ?string
    {
        return $this->semaine;
    }

    public function setSemaine(string $semaine): self
    {
        $this->semaine = $semaine;

        return $this;
    }

    public function getDateFiche(): ?\DateTimeInterface
    {
        return $this->date_fiche;
    }

    public function setDateFiche(\DateTimeInterface $date_fiche): self
    {
        $this->date_fiche = $date_fiche;

        return $this;
    }

    public function getNumdep(): ?int
    {
        return $this->numdep;
    }

    public function setNumdep(int $numdep): self
    {
        $this->numdep = $numdep;

        return $this;
    }

    public function getActivite(): ?string
    {
        return $this->activite;
    }

    public function setActivite(?string $activite): self
    {
        $this->activite = $activite;

        return $this;
    }

    public function getEnseigne(): ?string
    {
        return $this->enseigne;
    }

    public function setEnseigne(string $enseigne): self
    {
        $this->enseigne = $enseigne;

        return $this;
    }

    public function getNomf(): ?string
    {
        return $this->nomf;
    }

    public function setNomf(?string $nomf): self
    {
        $this->nomf = $nomf;

        return $this;
    }

    public function getPrenomf(): ?string
    {
        return $this->prenomf;
    }

    public function setPrenomf(?string $prenomf): self
    {
        $this->prenomf = $prenomf;

        return $this;
    }

    public function getSexef(): ?string
    {
        return $this->sexef;
    }

    public function setSexef(?string $sexef): self
    {
        $this->sexef = $sexef;

        return $this;
    }

    public function getTelfixe(): ?string
    {
        return $this->telfixe;
    }

    public function setTelfixe(?string $telfixe): self
    {
        $this->telfixe = $telfixe;

        return $this;
    }

    public function getTelmobile(): ?string
    {
        return $this->telmobile;
    }

    public function setTelmobile(?string $telmobile): self
    {
        $this->telmobile = $telmobile;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getAdresef(): ?string
    {
        return $this->adresef;
    }

    public function setAdresef(?string $adresef): self
    {
        $this->adresef = $adresef;

        return $this;
    }

    public function getCodpost(): ?string
    {
        return $this->codpost;
    }

    public function setCodpost(?string $codpost): self
    {
        $this->codpost = $codpost;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getFondm(): ?string
    {
        return $this->fondm;
    }

    public function setFondm(string $fondm): self
    {
        $this->fondm = $fondm;

        return $this;
    }

    public function getPrixv(): ?string
    {
        return $this->prixv;
    }

    public function setPrixv(?string $prixv): self
    {
        $this->prixv = $prixv;

        return $this;
    }

    public function getJourfer(): ?string
    {
        return $this->jourfer;
    }

    public function setJourfer(?string $jourfer): self
    {
        $this->jourfer = $jourfer;

        return $this;
    }

    public function getAffairet(): ?string
    {
        return $this->affairet;
    }

    public function setAffairet(?string $affairet): self
    {
        $this->affairet = $affairet;

        return $this;
    }

    public function getRaisonv(): ?string
    {
        return $this->raisonv;
    }

    public function setRaisonv(?string $raisonv): self
    {
        $this->raisonv = $raisonv;

        return $this;
    }

    public function getStatusf(): ?string
    {
        return $this->statusf;
    }

    public function setStatusf(?string $statusf): self
    {
        $this->statusf = $statusf;

        return $this;
    }

    public function getNbresal(): ?string
    {
        return $this->nbresal;
    }

    public function setNbresal(?string $nbresal): self
    {
        $this->nbresal = $nbresal;

        return $this;
    }

    public function getChiffred(): ?string
    {
        return $this->chiffred;
    }

    public function setChiffred(?string $chiffred): self
    {
        $this->chiffred = $chiffred;

        return $this;
    }

    public function getDispof(): ?string
    {
        return $this->dispof;
    }

    public function setDispof(?string $dispof): self
    {
        $this->dispof = $dispof;

        return $this;
    }

    public function getObservation(): ?string
    {
        return $this->observation;
    }

    public function setObservation(?string $observation): self
    {
        $this->observation = $observation;

        return $this;
    }

    public function getDemarche(): ?string
    {
        return $this->demarche;
    }

    public function setDemarche(?string $demarche): self
    {
        $this->demarche = $demarche;

        return $this;
    }

    public function getVendeurd(): ?string
    {
        return $this->vendeurd;
    }

    public function setVendeurd(?string $vendeurd): self
    {
        $this->vendeurd = $vendeurd;

        return $this;
    }

    public function getIdSem(): ?string
    {
        return $this->id_sem;
    }

    public function setIdSem(?string $id_sem): self
    {
        $this->id_sem = $id_sem;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(?string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getRaison(): ?string
    {
        return $this->raison;
    }

    public function setRaison(?string $raison): self
    {
        $this->raison = $raison;

        return $this;
    }

    public function getFinMois(): ?string
    {
        return $this->fin_mois;
    }

    public function setFinMois(?string $fin_mois): self
    {
        $this->fin_mois = $fin_mois;

        return $this;
    }

    public function getAgent(): ?string
    {
        return $this->agent;
    }

    public function setAgent(string $agent): self
    {
        $this->agent = $agent;

        return $this;
    }
}
