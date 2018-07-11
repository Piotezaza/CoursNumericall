<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ImageRepository")
 */
class Image
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $path;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @var UploadedFile
     * @Assert\File(
     *  maxSize = "2M",
     * mimeTypes = {"image/jpg", "image/png", "image/gif"}
     * )
     */
    private $file;

    public function getId()
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(string $path): self
    {
        $this->path = $path;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get maxSize = "2M"
     *
     * @return  UploadedFile
     */ 
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set maxSize = "2M"
     *
     * @param  UploadedFile  $file  maxSize = "2M"
     *
     * @return  self
     */ 
    public function setFile(UploadedFile $file)
    {
        $this->file = $file;

        return $this;
    }
}
