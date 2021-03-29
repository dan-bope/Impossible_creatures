# COMPTE RENDU IMPOSSIBLE CREATURE SOUS LARAVEL 7

## Pour que le projet fonctionne vous devez :

1. telecharger un IDE : de preference Visual studio code ou phpstorm.

2. ouvrir le projet dans l'IDE de votre preference.

3. Avoir composer au préalable installé.

4. Avoir php 7.2 ou 7.3 ou 7.4 au préalable installé dans le but d'utiliser le serveur de developpement intégré de PHP pour servir l'application (projet).

5. lancer la commande : php artisan serve, cette commande  permet de demarrer un serveur de developpement.

6. Vous devez configurer le fichier .env dans le but d'établir la communication entre le projet et votre base de données.

7. Lancer la commande : php artisan migrate pour lancer les migrations.

8. Lancer la commande : composer dump-autoload pour regenerer le chargeur automatique de composer.

9. Lancer la commande : php artisan db:seed pour ensemencer la base de données.  

10. Avoir POSTMAN au préalable installé pour pouvoir tester les requetes. 

## TESTE : SOUS FORME D'UN JSON

## ENDPOINTS, REQUETES ET REPONSES


### UTILISATEURS

### 1. **type : POST** 
       URL : /api/create_user

### donnée : 
            {
                "name": "Bobo",
                "email": "arthur@gmail.com",
                "password": "654321",
                "quantite_argent": 50,
                "quantite_points": 140,
                "inventaire_animals": [
                    {
                        "animal": "canard"
                    },
                    {
                        "animal": "poulet"
                    },
                    {
                        "animal": "porc"
                    },
                    {
                        "animal": "sanglier"
                    }
                ],
                "liste_especes": [
                    {
                        "espece": "porsan"
                    },
                    {
                        "animal": "canpou"
                    },
                    {
                        "espece": "poupo"
                    }
                ],
                        "vendeur": 1,
                        "acheteur": 1
            }

##### N.B : 

tous les champs sont required et seul le champ email qui exige un email.

### Reponses :

201 en cas du succès et 400 en cas d'erreur.

### 2. **type : POST**
    URL : /api/login_user

### donnée :

            {
                 "email" : "arthur@gmail.com",
                 "password" : "654321"
            }
            
### Reponses :

200 en cas du succès et 400 en cas d'erreur.

### 3. **type : GET**
       URL  : /api/print_user

### Reponses : 

200 : JSON Array(Users) exemple du resultat :

    [
        {
            "id": 1,
            "name": "Bope",
            "email": "bope@gmail.com",
            "quantite_argent": 45,
            "quantite_points": 40,
            "inventaire_animals": [
                {
                    "animal": "chat"
                },
                {
                    "animal": "chien"
                },
                {
                    "animal": "zebre"
                },
                {
                    "animal": "Anze"
                }
            ],
            "liste_especes": [
                {
                    "espece": "chaien"
                },
                {
                    "espece": "chize"
                },
                {
                    "espece": "chaze"
                }
            ],
            "vendeur": 1,
            "acheteur": 0,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 2,
            "name": "Rowandja",
            "email": "row@gmail.com",
            "quantite_argent": 25,
            "quantite_points": 10,
            "inventaire_animals": [
                {
                    "animal": "Antiloppe"
                },
                {
                    "animal": "Zebre"
                }
            ],
            "liste_especes": [
                {
                    "espece": "Anze"
                },
                {
                    "espece": "ZeAnt"
                }
            ],
            "vendeur": 1,
            "acheteur": 1,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 3,
            "name": "Bope",
            "email": "iyolo@gmail.com",
            "quantite_argent": 25,
            "quantite_points": 30,
            "inventaire_animals": [
                {
                    "animal": "Hippopotamus"
                },
                {
                    "animal": "gorille"
                }
            ],
            "liste_especes": [
                {
                    "espece": "Higo"
                }
            ],
            "vendeur": 0,
            "acheteur": 1,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 4,
            "name": "Maeva",
            "email": "maeva@gmail.com",
            "quantite_argent": 25,
            "quantite_points": 80,
            "inventaire_animals": [
                {
                    "animal": "Gorille"
                },
                {
                    "animal": "Chevre"
                },
                {
                    "animal": "rhileo"
                }
            ],
            "liste_especes": [
                {
                    "espece": "GoChe"
                }
            ],
            "vendeur": 1,
            "acheteur": 1,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 5,
            "name": "Fadhyl",
            "email": "djoi@gmail.com",
            "quantite_argent": 25,
            "quantite_points": 110,
            "inventaire_animals": [
                {
                    "animal": "lion"
                },
                {
                    "animal": "cheval"
                }
            ],
            "liste_especes": [
                {
                    "espece": "lionche"
                }
            ],
            "vendeur": 1,
            "acheteur": 1,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 6,
            "name": "Guarino",
            "email": "ema@gmail.com",
            "quantite_argent": 25,
            "quantite_points": 22,
            "inventaire_animals": [
                {
                    "animal": "serpent"
                },
                {
                    "animal": "souris"
                },
                {
                    "animal": "chize"
                }
            ],
            "liste_especes": [
                {
                    "espece": "sersou"
                }
            ],
            "vendeur": 0,
            "acheteur": 1,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 7,
            "name": "LeBlond",
            "email": "koffi@gmail.com",
            "quantite_argent": 25,
            "quantite_points": 30,
            "inventaire_animals": [
                {
                    "animal": "chat"
                },
                {
                    "animal": "serpent"
                }
            ],
            "liste_especes": [
                {
                    "espece": "chaser"
                },
                {
                    "espece": "serchat"
                }
            ],
            "vendeur": 1,
            "acheteur": 1,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 8,
            "name": "Lamotte",
            "email": "jeamarc@gmail.com",
            "quantite_argent": 25,
            "quantite_points": 14,
            "inventaire_animals": [
                {
                    "animal": "Gorille"
                },
                {
                    "animal": "Buffle"
                }
            ],
            "liste_especes": [
                {
                    "espece": "GoBu"
                }
            ],
            "vendeur": 0,
            "acheteur": 1,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 9,
            "name": "Lamotte",
            "email": "alice@gmail.com",
            "quantite_argent": 25,
            "quantite_points": 5,
            "inventaire_animals": [
                {
                    "animal": "rhinoceros"
                },
                {
                    "animal": "leopard"
                }
            ],
            "liste_especes": [
                {
                    "espece": "rhileo"
                },
                {
                    "espece": "leorhi"
                }
            ],
            "vendeur": 1,
            "acheteur": 1,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 10,
            "name": "Nyate",
            "email": "oblack@gmail.com",
            "quantite_argent": 25,
            "quantite_points": 18,
            "inventaire_animals": [
                {
                    "animal": "rat"
                },
                {
                    "animal": "souris"
                },
                {
                    "animal": "chize"
                }
            ],
            "liste_especes": [
                {
                    "espece": "rasou"
                }
            ],
            "vendeur": 0,
            "acheteur": 1,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 11,
            "name": "Bobo",
            "email": "arthur@gmail.com",
            "quantite_argent": 50,
            "quantite_points": 140,
            "inventaire_animals": [
                {
                    "animal": "canard"
                },
                {
                    "animal": "poulet"
                },
                {
                    "animal": "porc"
                },
                {
                    "animal": "sanglier"
                }
            ],
            "liste_especes": [
                {
                    "espece": "porsan"
                },
                {
                    "animal": "canpou"
                },
                {
                    "espece": "poupo"
                }
            ],
            "vendeur": 1,
            "acheteur": 1,
            "created_at": "2021-03-28T12:46:14.000000Z",
            "updated_at": "2021-03-28T12:46:14.000000Z"
        }
]
    

### 4. **type : GET** 
       URL  : /api/print_x_users/{point}/users

### Exemple : /api/print_x_users/2/users

### Reponses :

200 : JSON(ARRAY) en cas de success et 400 en cas d'erreur

    [
        {
            "id": 11,
            "name": "Bobo",
            "email": "arthur@gmail.com",
            "quantite_argent": 50,
            "quantite_points": 140,
            "inventaire_animals": [
                {
                    "animal": "canard"
                },
                {
                    "animal": "poulet"
                },
                {
                    "animal": "porc"
                },
                {
                    "animal": "sanglier"
                }
            ],
            "liste_especes": [
                {
                    "espece": "porsan"
                },
                {
                    "animal": "canpou"
                },
                {
                    "espece": "poupo"
                }
            ],
            "vendeur": 1,
            "acheteur": 1,
            "created_at": "2021-03-28T12:46:14.000000Z",
            "updated_at": "2021-03-28T12:46:14.000000Z"
        },
        {
            "id": 5,
            "name": "Fadhyl",
            "email": "djoi@gmail.com",
            "quantite_argent": 25,
            "quantite_points": 110,
            "inventaire_animals": [
                {
                    "animal": "lion"
                },
                {
                    "animal": "cheval"
                }
            ],
            "liste_especes": [
                {
                    "espece": "lionche"
                }
            ],
            "vendeur": 1,
            "acheteur": 1,
            "created_at": null,
            "updated_at": null
        }
    ]

        
### 5. **type : GET**
         URL  : /api/print_user_vendeur/{id}/vendeurs : affiche les vendeurs

### Reponses :

200 : JSON Array(Users) exemple du resultat :

    [
        {
            "id": 1,
            "name": "Bope",
            "email": "bope@gmail.com",
            "quantite_argent": 45,
            "quantite_points": 40,
            "inventaire_animals": [
                {
                    "animal": "chat"
                },
                {
                    "animal": "chien"
                },
                {
                    "animal": "zebre"
                },
                {
                    "animal": "Anze"
                }
            ],
            "liste_especes": [
                {
                    "espece": "chaien"
                },
                {
                    "espece": "chize"
                },
                {
                    "espece": "chaze"
                }
            ],
            "vendeur": 1,
            "acheteur": 0,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 2,
            "name": "Rowandja",
            "email": "row@gmail.com",
            "quantite_argent": 25,
            "quantite_points": 10,
            "inventaire_animals": [
                {
                    "animal": "Antiloppe"
                },
                {
                    "animal": "Zebre"
                }
            ],
            "liste_especes": [
                {
                    "espece": "Anze"
                },
                {
                    "espece": "ZeAnt"
                }
            ],
            "vendeur": 1,
            "acheteur": 1,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 4,
            "name": "Maeva",
            "email": "maeva@gmail.com",
            "quantite_argent": 25,
            "quantite_points": 80,
            "inventaire_animals": [
                {
                    "animal": "Gorille"
                },
                {
                    "animal": "Chevre"
                },
                {
                    "animal": "rhileo"
                }
            ],
            "liste_especes": [
                {
                    "espece": "GoChe"
                }
            ],
            "vendeur": 1,
            "acheteur": 1,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 5,
            "name": "Fadhyl",
            "email": "djoi@gmail.com",
            "quantite_argent": 25,
            "quantite_points": 110,
            "inventaire_animals": [
                {
                    "animal": "lion"
                },
                {
                    "animal": "cheval"
                }
            ],
            "liste_especes": [
                {
                    "espece": "lionche"
                }
            ],
            "vendeur": 1,
            "acheteur": 1,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 7,
            "name": "LeBlond",
            "email": "koffi@gmail.com",
            "quantite_argent": 25,
            "quantite_points": 30,
            "inventaire_animals": [
                {
                    "animal": "chat"
                },
                {
                    "animal": "serpent"
                }
            ],
            "liste_especes": [
                {
                    "espece": "chaser"
                },
                {
                    "espece": "serchat"
                }
            ],
            "vendeur": 1,
            "acheteur": 1,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 9,
            "name": "Lamotte",
            "email": "alice@gmail.com",
            "quantite_argent": 25,
            "quantite_points": 5,
            "inventaire_animals": [
                {
                    "animal": "rhinoceros"
                },
                {
                    "animal": "leopard"
                }
            ],
            "liste_especes": [
                {
                    "espece": "rhileo"
                },
                {
                    "espece": "leorhi"
                }
            ],
            "vendeur": 1,
            "acheteur": 1,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 11,
            "name": "Bobo",
            "email": "arthur@gmail.com",
            "quantite_argent": 50,
            "quantite_points": 140,
            "inventaire_animals": [
                {
                    "animal": "canard"
                },
                {
                    "animal": "poulet"
                },
                {
                    "animal": "porc"
                },
                {
                    "animal": "sanglier"
                }
            ],
            "liste_especes": [
                {
                    "espece": "porsan"
                },
                {
                    "animal": "canpou"
                },
                {
                    "espece": "poupo"
                }
            ],
            "vendeur": 1,
            "acheteur": 1,
            "created_at": "2021-03-28T12:46:14.000000Z",
            "updated_at": "2021-03-28T12:46:14.000000Z"
        }
    ]
 
 
 
 
### ESPECES

### 6. **type : GET** 
          URL : /api/print_espece

### Reponses :

200 : JSON Array(Especes) en cas du succes et 400 en cas d'erreur

        [
            {
                "id": 1,
                "name": "chaien",
                "deux_epeces_parents": [
                    {
                        "parent1": "chat"
                    },
                    {
                        "parent2": "chien"
                    }
                ],
                "users_inventaire": 1,
                "created_at": null,
                "updated_at": null,
                "deleted_at": null
            },
            {
                "id": 2,
                "name": "Anze",
                "deux_epeces_parents": [
                    {
                        "parent1": "Antiloppe"
                    },
                    {
                        "parent2": "zebre"
                    }
                ],
                "users_inventaire": 2,
                "created_at": null,
                "updated_at": null,
                "deleted_at": null
            },
            {
                "id": 3,
                "name": "rasou",
                "deux_epeces_parents": [
                    {
                        "parent1": "rat"
                    },
                    {
                        "parent2": "souris"
                    }
                ],
                "users_inventaire": 10,
                "created_at": null,
                "updated_at": null,
                "deleted_at": null
            },
            {
                "id": 4,
                "name": "chize",
                "deux_epeces_parents": [
                    {
                        "parent1": "chien"
                    },
                    {
                        "parent2": "zebre"
                    }
                ],
                "users_inventaire": 2,
                "created_at": null,
                "updated_at": null,
                "deleted_at": null
            },
            {
                "id": 5,
                "name": "Higo",
                "deux_epeces_parents": [
                    {
                        "parent1": "Hippopotamus"
                    },
                    {
                        "parent2": "gorille"
                    }
                ],
                "users_inventaire": 3,
                "created_at": null,
                "updated_at": null,
                "deleted_at": null
            },
            {
                "id": 6,
                "name": "sersou",
                "deux_epeces_parents": [
                    {
                        "parent1": "serpent"
                    },
                    {
                        "parent2": "souris"
                    }
                ],
                "users_inventaire": 6,
                "created_at": null,
                "updated_at": null,
                "deleted_at": null
            },
            {
                "id": 7,
                "name": "rhileo",
                "deux_epeces_parents": [
                    {
                        "parent1": "rhinoceros"
                    },
                    {
                        "parent2": "leopard"
                    }
                ],
                "users_inventaire": 9,
                "created_at": null,
                "updated_at": null,
                "deleted_at": null
            },
            {
                "id": 8,
                "name": "leorhi",
                "deux_epeces_parents": [
                    {
                        "parent1": "leopard"
                    },
                    {
                        "parent2": "rhinoceros"
                    }
                ],
                "users_inventaire": 9,
                "created_at": null,
                "updated_at": null,
                "deleted_at": null
            },
            {
                "id": 9,
                "name": "lionche",
                "deux_epeces_parents": [
                    {
                        "parent1": "lion"
                    },
                    {
                        "parent2": "cheval"
                    }
                ],
                "users_inventaire": 5,
                "created_at": null,
                "updated_at": null,
                "deleted_at": null
            }
]
        
### 7. **type : GET**
       URL exigé : /api/print_especes_users/{id}/users

        
### Reponses :

200 : JSON Array(Especes) en cas du succes et 400 en cas d'erreur

    [
        {
            "id": 1,
            "name": "chaien",
            "deux_epeces_parents": [
                {
                    "parent1": "chat"
                },
                {
                    "parent2": "chien"
                }
            ],
            "users_inventaire": 1,
            "created_at": null,
            "updated_at": null,
            "deleted_at": null
        }
    ]

### 8. **type : POST**
         URL  : /api/create_espece

### donnée :

    {
        "name": "zechien",
        "deux_epeces_parents": [
            {
                "parent1": "zebre"
            },
            {
                "parent2": "chien"
            }
        ],
        "users_inventaire": 1
    }
        
### Reponses :

200 : JSON Array(Especes) en cas du succes et 400 en cas d'erreur

### 9. **type : PUT**
         URL  : /api/update_espece/{id}

### donnée :

/api/update_espece/1

    {
        "name": "Bouba"
    }

### Reponses : 

200 en cas du succès et 400 en cas d'erreur.

### 10. **type : DELETE**
          URL  : /api/supprime_espece/{id}

### Reponses :

##### Exemple : /api/supprime_espece/1

200 : en cas de succes et 400 en cas d'erreur
    
    
### ANIMALS

### 11. **type : GET**
          URL  : /api/print_animal

### Reponses : 

200 : JSON Array(Animal) 

        [
            {
                "id": 1,
                "especes": "chaien",
                "id_users_cree": 1,
                "id_users_proprietaire": 1,
                "created_at": null,
                "updated_at": null,
                "deleted_at": null
            },
            {
                "id": 2,
                "especes": "Anze",
                "id_users_cree": 2,
                "id_users_proprietaire": 1,
                "created_at": null,
                "updated_at": null,
                "deleted_at": null
            },
            {
                "id": 3,
                "especes": "chize",
                "id_users_cree": 1,
                "id_users_proprietaire": 10,
                "created_at": null,
                "updated_at": null,
                "deleted_at": null
            },
            {
                "id": 4,
                "especes": "chize",
                "id_users_cree": 1,
                "id_users_proprietaire": 6,
                "created_at": null,
                "updated_at": null,
                "deleted_at": null
            },
            {
                "id": 5,
                "especes": "rhileo",
                "id_users_cree": 9,
                "id_users_proprietaire": 4,
                "created_at": null,
                "updated_at": null,
                "deleted_at": null
            },
            {
                "id": 6,
                "especes": "lionche",
                "id_users_cree": 5,
                "id_users_proprietaire": 4,
                "created_at": null,
                "updated_at": null,
                "deleted_at": null
            },
            {
                "id": 7,
                "especes": "lionche",
                "id_users_cree": 5,
                "id_users_proprietaire": 3,
                "created_at": null,
                "updated_at": null,
                "deleted_at": null
            },
            {
                "id": 8,
                "especes": "rhileo",
                "id_users_cree": 9,
                "id_users_proprietaire": 8,
                "created_at": null,
                "updated_at": null,
                "deleted_at": null
            }
]
        
### 12. **type : GET**
          URL  : /api/print_animaux_users/{id}/users

### Reponses :

200 : JSON Array(Animals) :

    [
        {
            "id": 1,
            "especes": "chaien",
            "id_users_cree": 1,
            "id_users_proprietaire": 1,
            "created_at": null,
            "updated_at": null,
            "deleted_at": null
        },
        {
            "id": 3,
            "especes": "chize",
            "id_users_cree": 1,
            "id_users_proprietaire": 10,
            "created_at": null,
            "updated_at": null,
            "deleted_at": null
        },
        {
            "id": 4,
            "especes": "chize",
            "id_users_cree": 1,
            "id_users_proprietaire": 6,
            "created_at": null,
            "updated_at": null,
            "deleted_at": null
        }
    ]
    
### 13. **type : GET**
          URL  : /api/print_users_animaux_possedes/{animal}/users

        
### Reponses : 

200 : JSON Array(Animals) :

    [
        {
            "id": 3,
            "especes": "chize",
            "id_users_cree": 1,
            "id_users_proprietaire": 10,
            "created_at": null,
            "updated_at": null,
            "deleted_at": null
        },
        {
            "id": 4,
            "especes": "chize",
            "id_users_cree": 1,
            "id_users_proprietaire": 6,
            "created_at": null,
            "updated_at": null,
            "deleted_at": null
        }
    ]

### 14. **type : POST**
          URL  : /api/create_animal

### Donnée :
    
    {
        "especes": "chaien",
        "id_users_cree": 1,
        "id_users_proprietaire": 1
    }
        
### Reponses :

201 : JSON Array(Animals) :

    {
        "especes": "chaien",
        "id_users_cree": 1,
        "id_users_proprietaire": 1,
        "updated_at": "2021-03-28T14:43:07.000000Z",
        "created_at": "2021-03-28T14:43:07.000000Z",
        "id": 9
    }

### 15. **type : PUT**
          URL  : /api/update_animal/{id}

### donnée :

    {
        "especes": "bobo"
    }

### Reponse :

200 : en cas de succes et 400 en cas d'erreur.


### 16. **type : DELETE**
          URL  : /api/supprime_animal/{id}

### Reponse :

200 : en cas de succes et 400 en cas d'erreur.


### TRANSACTIONS

### 17. **type : GET**
          URL  : /api/print_Alltrabsactions

### Reponse :

200 : en cas de succes et 400 en cas d'erreur.

    [
        {
            "id": 1,
            "id_users_vendeur": 1,
            "id_animal_vendu": 3,
            "prix": 15,
            "date_mise_en_vente": "10-06-2002",
            "id_users_acheteur": 10,
            "date_achat": "10-06-2003",
            "created_at": null,
            "updated_at": null,
            "deleted_at": null
        },
        {
            "id": 2,
            "id_users_vendeur": 1,
            "id_animal_vendu": 4,
            "prix": 15,
            "date_mise_en_vente": "10-06-2020",
            "id_users_acheteur": 6,
            "date_achat": "10-06-2021",
            "created_at": null,
            "updated_at": null,
            "deleted_at": null
        }
    ]

### 18. **type : POST**
          URL  : /api/create_Transaction

### Donnée :

    {
        "id_users_vendeur": 1,
        "id_animal_vendu": 3,
        "prix": 15,
        "date_mise_en_vente": "10-06-2002",
        "id_users_acheteur": 10,
        "date_achat": "10-06-2003"
    }

### Reponse : 

201 : JSON Array(Transactions) :


    {
        "id_users_vendeur": 1,
        "id_animal_vendu": 3,
        "prix": 15,
        "date_mise_en_vente": "10-06-2002",
        "id_users_acheteur": 10,
        "date_achat": "10-06-2003",
        "updated_at": "2021-03-28T15:13:07.000000Z",
        "created_at": "2021-03-28T15:13:07.000000Z",
        "id": 3
    }

### 19. **type : GET**
          URL  : /api/print_TransactionByUser/{id}

### Response : 

201 : JSON Array(Transactions) :

    [
        {
            "id": 1,
            "id_users_vendeur": 1,
            "id_animal_vendu": 3,
            "prix": 15,
            "date_mise_en_vente": "10-06-2002",
            "id_users_acheteur": 10,
            "date_achat": "10-06-2003",
            "created_at": null,
            "updated_at": null,
            "deleted_at": null
        },
        {
            "id": 2,
            "id_users_vendeur": 1,
            "id_animal_vendu": 4,
            "prix": 15,
            "date_mise_en_vente": "10-06-2020",
            "id_users_acheteur": 6,
            "date_achat": "10-06-2021",
            "created_at": null,
            "updated_at": null,
            "deleted_at": null
        },
        {
            "id": 3,
            "id_users_vendeur": 1,
            "id_animal_vendu": 3,
            "prix": 15,
            "date_mise_en_vente": "10-06-2002",
            "id_users_acheteur": 10,
            "date_achat": "10-06-2003",
            "created_at": "2021-03-28T15:13:07.000000Z",
            "updated_at": "2021-03-28T15:13:07.000000Z",
            "deleted_at": null
        }
    ]
    

### 20. **type : PUT**
          URL  : /api/mise_a_jour_transaction/{id}

### Données

    {
        "id_users_vendeur": 3,
        "id_animal_vendu": 5,
        "prix": 25
    }

### Reponse : 
200 : en cas de succes et 400 en cas d'erreur.


### 21. **type : DELETE**
          URL  : /api/annuler_transaction/{id}

### Reponse :

200 : en cas de succes et 400 en cas d'erreur.

