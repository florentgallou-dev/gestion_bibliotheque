<?php

  require "dataBase.php"; 

class userManager {

  private PDO $bdd;

  // Récupère tous les utilisateurs
  public function getUsers() {

  }

  // Récupère un utilisateur par son id
  public function getUserById() {

  }

  // Récupère un utilisateur par son code personnel
  public function getUser() {

  }

  function __construct()
  {
      $this->bdd = DataBase::getBdd();
  }

}
