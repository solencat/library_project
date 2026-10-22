## **Exercice Super globale** 
File (use case login) :
Mettre en place l'import de fichier image au moment de l'inscription 
1. Ajouter dans le template `template_register.php` un input file avec name : `img_profil`
et l'attribut `enctype="multipart/form-data"` dans le formulaire.
2. Ajouter le nouveau champ **img_profil** dans la méthode create `UserRepository.php`,
3. Assigner le paramètre avec `getImgProfil()`
4. Ajouter une méthode `uploadFile` dans `UserService.php`
5. Compléter la logique comme dans la méthode inserBook ()
L'image sera renommée et déplacer dans `public/assets/img/profil`,
6. Vérifier si vous pouvez créer des utilisateurs avec une image de profil.