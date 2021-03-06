<?php
	$serveur='mysql:host=front-ha-mysql-01.shpv.fr';
	$bdd='dbname=wiyhousp_recettes';
	$user='wiyhousp_root';
	$mdp='Rootmdp1';

	// �vite que le message mysql ne s'affiche
	try
	{
	$mycnx = new PDO($serveur.';'.$bdd, $user,$mdp);
	}
	catch (PDOException $e)
	{
		throw new Exception("Erreur � la connexion \n" . $e->getMessage()); 
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	/**
	* Classe d'acc�s aux donn�es.
	*de type singleton
	*qui utilise les services de la classe PDO
	*/
	class Connexion{
		private static $monPdo;
		
		/**
		* Constructeur priv� vide
		*/
		private  function __construct(){
			Connexion::$monPdo = null;
		}
		/** 
		*M�thode statique qui renvoie l'unique instance de Connexion
		**/
		public static function getInstance(){
			if( Connexion :: $monPdo == null){
				try{
					$serveur='mysql:host=front-ha-mysql-01.shpv.fr';
					$bdd='dbname=wiyhousp_recettes';
					$user='wiyhousp_root';
					$mdp='Rootmdp1';
					Connexion::$monPdo = new PDO($serveur.';'.$bdd, $user,$mdp);
					Connexion::$monPdo->query("SET CHARACTER SET utf8");
				}catch (PDOException $e){
					throw new Exception("Erreur � la connexion \n" . $e->getMessage()); 
				}
			}
		return Connexion::$monPdo;
		}
		
	}
?>