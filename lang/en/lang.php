<?php
return [
    // welcome.blade.php
    "text_welcome_title" => "Welcome to the student platform of Collège de Maisonneuve.",
    "text_welcome_desc" => "This application allows you to view and manage student information.",
    "text_welcome_button" => "List of students",

    // layout/ --------------------------------------------------
    // layout.blade.php
    "nav_lang_title" => "Language",
    "nav_lang_fr_choice" => "French",
    "nav_lang_en_choice" => "English",

    "nav_el_studentlist" => "Student list",
    "nav_el_addstudent" => "Add new student",
    "nav_el_login" => "Login",
    "nav_el_logout" => "Logout",
    "footer_right" => "All rights reserved",

    // auth/ ----------------------------------------------------
    // create.blade.php
    "auth_title" => "Connection",
    "auth_button" => "Log in",
    "auth_email" => "Email",
    "auth_password" => "Password",

    // student/ -------------------------------------------------
    // index.blade.php
    "student_list_title" => "List of students",
    "student_list_button" => "Details",
    "student_list_error" => "No student to show",
    // reuse in other pages
    "student_list_address" => "Address",
    "student_list_phone" => "Phone number",
    "student_list_email" => "Email",
    "student_list_birthdate" => "Date of birth",
    "student_list_country" => "Country",

    // show.blade.php
    "student_show_edit" => "Edit",
    "student_show_delete" => "Delete this student",
    "student_modal_message" => "Are you sure you want to delete this student? :",
    // reuse in modal for forum
    "student_modal_title" => "Delete",
    "student_modal_cancel" => "Cancel",

    // edit.blade.php
    "student_edit" => "Edit",
    "student_edit_title" => "Edit a student",
    "student_edit_title_page" => "Modification of",
    // reuse in create.blade.php
    "student_edit_name" => "Name",
    "student_edit_country" => "Country of Residence",
    "student_edit_button" => "Save",

    // create.blade.php
    "student_add" => "Add a new student",
    "student_add_title" => "New student",
    "student_add_select" => "Select a country",

    // forum/ ---------------------------------------------------
    // index.blade.php
    "forum_login_message" => "To add an article you must log in",
    "forum_add_article" => "Add an article",
    "forum_no_article" => "No articles have been published",
    // Reuse in create.blade.php
    "forum_author" => "Author",

    // create.blade.php
    "forum_form_title_page" => "New article",
    "forum_form_under_title" => "Add an article",
    // Reuse in edit.blade.php
    "forum_form_title" => "Title",
    "forum_form_content" => "Content",
    "forum_form_lang" => "Article language",
    "forum_form_button" => "Save",
    "forum_form_placeholder" => "Write your article content...",

    // show.blade.php
    "forum_show_button" => "Return",

    // edit.blade.php
    "forum_edit_title_page" => "Edit",
    "forum_edit_under_title" => "Edit or delete this article",
    "forum_edit_modal_title" => "Delete this article",
    "forum_edit_modal_message" => "Are you sure you want to delete :",

    // document/ ------------------------------------------------
    // index.blade.php 
    "document_title_page" => "Document Directory",
    "document_title" => "Title",
    "document_author" => "Author",
    "document_file" => "File",
    "document_no_file" => "No documents found.",
    "document_modal_title" => "Delete this document",

    // create.blade.php 
    "document_add_title_page" => "Add a File",
    "document_add_new" => "New File",
    "document_add_lang" => "File Language",
    "document_add_fr" => "French",
    "document_add_en" => "English",
    "document_add_file" => "Document",
    "document_add_authorize" => "Allowed: pdf, zip, doc",
    "document_add_button" => "Add",

    // edit.blade.php 
    "document_edit_title_page" => "Edit a File",
    "document_edit_under_title" => "Edit",
    "document_edit_button" => "Update",
    "document_edit_current" => "Current file:",
    "document_edit_message" => "If you do not modify this field, your file will remain the same",

    // Controllers ----------------------------------------------

    // StudentController.php
    "success_add_student" => "New student successfully added!",
    "success_edit_student" => "Student edited",
    "success_delete_student" => "Student successfully deleted",

    // AuthController.php
    "success_login" => "Connected successfully",
    "succes_logout" => "Successfully disconnected",

    // ForumController.php
    "success_add_forum" => "Your article was successfully added",
    "success_edit_forum" => "Article edited successfully",
    "success_delete_forum" => "Article deleted successfully",

    // DocumentsController.php 
    "success_add_document" => "Your file was successfully added",
    "success_edit_document" => "File edited successfully",
    "success_delete_document" => "File deleted successfully",
];