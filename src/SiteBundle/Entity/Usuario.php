<?php
	
	namespace SiteBundle\Entity;
	
	use Doctrine\ORM\Mapping as ORM;
	
	/**
	 * Usuario
	 * 
	 * @ORM\Table(name="usuario")
	 * @ORM\Entity(repositoryClass="SiteBundle\Repository\UsuarioRepository")
	 */
	class Usuario {
		
		/**
		 * 
		 * @var int @ORM\Column(name="id", type="integer")
		 * @ORM\Id
		 * @ORM\GeneratedValue(strategy="AUTO")
		 */
		private $id;
		
		/**
		 * 
		 * @var string @ORM\Column(name="nome", type="string", length=255)
		 */
		private $nome;
		
		/**
		 * 
		 * @var string @ORM\Column(name="senha", type="string", length=255)
		 */
		private $senha;
		
		/**
		 * 
		 * @var string @ORM\Column(name="email", type="string", length=255)
		 */
		private $email;
		
		/**
		 * Get id
		 * 
		 * @return int
		 */
		public function getId() {
			return $this->id;
		}
		
		/**
		 * Set nome
		 * 
		 * @param string $nome
		 * 
		 * @return Usuario
		 */
		public function setNome($nome) {
			$this->nome = $nome;
			
			return $this;
		}
		
		/**
		 * Get nome
		 * 
		 * @return string
		 */
		public function getNome() {
			return $this->nome;
		}
		
		/**
		 * Set senha
		 * 
		 * @param string $senha
		 * 
		 * @return Usuario
		 */
		public function setSenha($senha) {
			$this->senha = $senha;
			
			return $this;
		}
		
		/**
		 * Get senha
		 * 
		 * @return string
		 */
		public function getSenha() {
			return $this->senha;
		}
		
		/**
		 * Set email
		 * 
		 * @param string $email
		 * 
		 * @return Usuario
		 */
		public function setEmail($email) {
			$this->email = $email;
			
			return $this;
		}
		
		/**
		 * Get email
		 * 
		 * @return string
		 */
		public function getEmail() {
			return $this->email;
		}
	}
