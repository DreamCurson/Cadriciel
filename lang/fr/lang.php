<?php
// https://laravel.com/docs/12.x/localization

return [
    // welcome.blade.php
    "text_welcome_title" => "Bienvenue sur la plateforme des étudiants du Collège de Maisonneuve.",
    "text_welcome_desc" => "Cette application vous permet de consulter et gérer les informations des étudiants.",
    "text_welcome_button" => "Liste des étudiants",

    // layout/ --------------------------------------------------
    // layout.blade.php
    "nav_lang_title" => "Language",
    "nav_lang_fr_choice" => "Français",
    "nav_lang_en_choice" => "Anglais",

    "nav_el_studentlist" => "Liste des étudiants",
    "nav_el_addstudent" => "Ajouter un étudiant",
    "nav_el_login" => "Se connecter",
    "nav_el_logout" => "Se deconnecter",
    "footer_right" => "Tous droits réservés",

    // auth/ ----------------------------------------------------
    // create.blade.php
    "auth_title" => "Connexion",
    "auth_button" => "Se connecter",
    "auth_email" => "Adresse courriel",
    "auth_password" => "Mot de passe",

    // student/ -------------------------------------------------
    // index.blade.php
    "student_list_title" => "Liste des étudiants",
    "student_list_button" => "Détails",
    "student_list_error" => "Aucun étudiant n'existe",
    // réutilisation dans les autres pages 
    "student_list_address" => "Adresse",
    "student_list_phone" => "Téléphone",
    "student_list_email" => "Email",
    "student_list_birthdate" => "Date de naissance",
    "student_list_country" => "Pays",

    // show.blade.php
    "student_show_edit" => "Modifier",
    "student_show_delete" => "Supprimer l'étudiant(e)",
    "student_modal_message" => "Êtes-vous sûr de supprimer cet(te) élève? :",
    // reutilisé dans la modale du forum
    "student_modal_title" => "Supprimer",
    "student_modal_cancel" => "Annuler",

    // edit.blade.php
    "student_edit" => "Modifier",
    "student_edit_title" => "Modifier un élève",
    "student_edit_title_page" => "Modification de",
    // réutilisation dans create.blade.php
    "student_edit_name" => "Nom",
    "student_edit_country" => "Pays de résidence",
    "student_edit_button" => "Enregistrer",

    // create.blade.php
    "student_add" => "Ajouter un élève",
    "student_add_title" => "Nouvel(le) élève",
    "student_add_select" => "Sélectionner un pays",

    // forum/ ---------------------------------------------------
    // index.blade.php
    "forum_login_message" => "Pour ajouter un article vous devez vous connecter",
    "forum_add_article" => "Ajouter un article",
    "forum_no_article" => "Aucun article n'a été publié",
    // Réutilisé dans create.blade.php
    "forum_author" => "Auteur",

    // create.blade.php
    "forum_form_title_page" => "Nouvel article",
    "forum_form_under_title" => "Ajouter un article",
    // Reuse in edit.blade.php
    "forum_form_title" => "Titre",
    "forum_form_content" => "Contenu",
    "forum_form_lang" => "Langue de l'article",
    "forum_form_button" => "Enregistrer",
    "forum_form_placeholder" => "Écrivez le contenu de votre article...",

    // show.blade.php
    "forum_show_button" => "Retour",

    // edit.blade.php
    "forum_edit_title_page" => "Modifier",
    "forum_edit_under_title" => "Modifier ou supprimer l'article",
    "forum_edit_modal_title" => "Supprimer l'article",
    "forum_edit_modal_message" => "Êtes vous sûr de supprimer :",

    // document/ ------------------------------------------------
    // index.blade.php 
    "document_title_page" => "Répertoire des documents",
    "document_title" => "Titre",
    "document_author" => "Auteur",
    "document_file" => "Fichier",
    "document_no_file" => "Aucun document trouvé.",
    "document_modal_title" => "Supprimer ce document",

    // create.blade.php 
    "document_add_title_page" => "Ajouter un fichier",
    "document_add_new" => "Nouveau fichier",
    "document_add_lang" => "Langue du document",
    "document_add_fr" => "Français",
    "document_add_en" => "Anglais",
    "document_add_file" => "Document",
    "document_add_authorize" => "Autorisé : pdf, zip, doc",
    "document_add_button" => "Ajouter",

    // edit.blade.php 
    "document_edit_title_page" => "Modifier un fichier",
    "document_edit_under_title" => "Modifier",
    "document_edit_button" => "Modifier",
    "document_edit_current" => "Fichier courant :",
    "document_edit_message" => "Si vous ne modifier pas ce champ votre document restera le même",

    // Controllers ----------------------------------------------
 
    // StudentController.php
    "success_add_student" => "Nouvel(le) élève ajouté avec succès!",
    "success_edit_student" => "Élève modifié avec succès",
    "success_delete_student" => "Élève supprimé avec succès",

    // AuthController.php
    "success_login" => "Connecté avec succès",
    "succes_logout" => "Déconnecté avec succès",

    // ForumController.php
    "success_add_forum" => "Votre article à été ajouté avec succès",
    "success_edit_forum" => "Votre article à été modifié avec succès",
    "success_delete_forum" => "Article supprimé avec succès",

    // DocumentsController.php 
    "success_add_document" => "Votre document à été ajouté avec succès",
    "success_edit_document" => "Votre document à été modifié avec succès",
    "success_delete_document" => "Document supprimé avec succès",

];