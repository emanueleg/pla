<?php
// French language-texts by Olivier Briat (nospam@briat.org)
// Read our wiki on how to translate: https://bitbucket.org/phpliteadmin/public/wiki/Localization
$lang = array(
	"direction" => "LTR",
	"date_format" => '\à G\hi \l\e d/m/Y (T)',  // see http://php.net/manual/en/function.date.php for what the letters stand for
	"ver" => "version",
	"for" => "pour",
	"to" => "à",
	"go" => "Exécuter",
	"yes" => "Oui",
	"sql" => "SQL",
	"csv" => "CSV",
	"csv_tbl" => "Table à laquelle le CSV se rapporte",
	"srch" => "Rechercher",
	"srch_again" => "Effectuer une autre recherche",
	"login" => "Identification",
	"logout" => "Se déconnecter",
	"view" => "Vue",
	"confirm" => "Confirmer",
	"cancel" => "Annuler",
	"save_as" => "Enregistrer sous",
	"options" => "Options",
	"no_opt" => "Pas d'options",
	"help" => "Aide",
	"installed" => "Installé",
	"not_installed" => "Non installé",
	"done" => "Effectué",
	"insert" => "Insérer",
	"export" => "Exporter",
	"import" => "Importer",
	"rename" => "Renommer",
	"empty" => "Vider",
	"drop" => "Supprimer",
	"tbl" => "Table",
	"chart" => "Graphique",
	"err" => "ERREUR",
	"act" => "Action",
	"rec" => "Enregistrements",
	"col" => "Colonne",
	"cols" => "Colonnes",
	"rows" => "ligne(s)",
	"edit" => "Éditer",
	"del" => "Effacer",
	"add" => "Ajouter",
	"backup" => "Sauvegarder le fichier de la base",
	"before" => "Avant",
	"after" => "Après",
	"passwd" => "Mot de passe",
	"passwd_incorrect" => "Mot de passe incorrecte.",
	"chk_ext" => "Vérification des extensions PHP SQLite supportées",
	"autoincrement" => "Auto-incrémentation",
	"not_null" => "Non NULL",
	"attention" => "Attention",
	
	"sqlite_ext" => "Extension SQLite",
	"sqlite_ext_support" => "Il semble qu'aucune des extensions de la bibliothèque SQLite supportées n'est disponible dans votre installation de PHP. Vous ne pourrez pas utiliser %s tant que vous n'aurez pas installé l'une d'entre elles.",
	"sqlite_v" => "Version de SQLite",
	"sqlite_v_error" => "Il semble que votre base est en version %s de SQLite mais que votre installation de PHP ne contient pas l'extension nécessaire pour gérer cette version. Pour régler le problème, vous pouvez soit effacer la base et autoriser  %s à la créer automatiquement, soit la recréer manuellement en version %s de SQLite.",
	"report_issue" => "Le problème ne peut être diagnostiqué correctement. Merci d'ouvrir une rapport d'incident à",
	"sqlite_limit" => "Due à des limitations de SQLite, seules le nom du champ et le type de données peuvent être modifiées.",
	
	"php_v" => "Version de PHP",
	
	"db_dump" => "Export de base",
	"db_f" => "Fichier de la base de données",
	"db_ch" => "Changer de base",
	"db_event" => "Événement de la base",
	"db_name" => "Nom de la base",
	"db_rename" => "Renommer la base",
	"db_renamed" => "La base '%s' a été renommée en",
	"db_del" => "Effacer la base",
	"db_path" => "Chemin de la base",
	"db_size" => "Taille de la base",
	"db_mod" => "Dernière modification de la base",
	"db_create" => "Créer une nouvelle base",
	"db_vac" => "La base, '%s', a été VACUUMed.",
	"db_not_writeable" => "La base, '%s', n'existe pas et n'a pu être créer car le répertoire cible, '%s', n'est pas inscriptible. L'application ne peut être utilisée tant que vous ne l'aurez pas rendu inscriptible.",
	"db_setup" => "Il y a un problème pour paramétrer votre base, %s. Une tentative pour trouver l'origine du problème va être lancée, cela devrait vous aider à le réparer",
	"db_exists" => "Une base, un fichier ou répertoire portant ce nom (%s) existe déjà.",
	
	"exported" => "Exportée",
	"struct" => "Structure",
	"struct_for" => "structure pour",
	"on_tbl" => "pour la table",
	"data_dump" => "Export de base pour",
	"backup_hint" => "Conseil : Pour sauvegarder votre base, la méthode la plus simple est de %s.",
	"backup_hint_linktext" => "Télécharger le fichier de la base",
	"total_rows" => "un total de %s lignes",
	"total" => "Total",
	"not_dir" => "Le répertoire pour la recherche de bases que vous avez spécifié n'existe pas ou n'est pas un répertoire.",
	"bad_php_directive" => "Il semble que la directive PHP, 'register_globals' est activée. C'est mal. Vous devez la désactiver avant de continuer.",
	"page_gen" => "Page générée en %s seconds.",
	"powered" => "Propulsé par",
	"remember" => "Se souvenir de moi",
	"no_db" => "Bienvenu dans %s. Il semble que vous ayez choisi un répertoire dans lequel rechercher une base à gérer. Mais, %s ne trouve pas de base SQLite valide. Utilisez le formulaire ci-dessous pour créer votre première base.",
	"no_db2" => "Le répertoire que vous avez sélectionné ne contient pas de base à gérer et il n'est pas inscriptible. Cela signifie que vous ne pouvez pas créer de nouvelle base avec %s. Vous devez soit rendre ce répertoire inscriptible, soit charger manuellement la base dans ce répertoire.",
	
	"create" => "Créer",
	"created" => "créée",
	"create_tbl" => "Créer une nouvelle table",
	"create_tbl_db" => "Créer une nouvelle table pour la base",
	"create_trigger" => "Création d'un nouveau déclencheur sur la table",
	"create_index" => "Création d'un nouvel Index sur la table",
	"create_index1" => "Créer un Index",
	"create_view" => "Créer une nouvelle vue pour la base",
	
	"trigger" => "Déclencheur",
	"triggers" => "Déclencheurs",
	"trigger_name" => "Nom du Déclencheur",
	"trigger_act" => "Action du Déclencheurs",
	"trigger_step" => "Étapes du Déclencheur (terminées par un point virgule)",
	"when_exp" => "Expression WHEN  (taper l'expression sans 'WHEN')",
	"index" => "Index",
	"indexes" => "Index",
	"index_name" => "Nom de l'Index",
	"name" => "Nom",
	"unique" => "Unique",
	"seq_no" => "Seq. N°",
	"emptied" => "vidée",
	"dropped" => "supprimée",
	"renamed" => "renommée en",
	"altered" => "modifiée avec succès",
	"inserted" => "insérée(s)",
	"deleted" => "effacée(s)",
	"affected" => "affectée(s)",
	"blank_index" => "Le nom de l'Index ne peut être vide.",
	"one_index" => "Vous devez spécifier au moins une colonne Index.",
	"docu" => "Documentation",
	"license" => "Licence",
	"proj_site" => "Site du projet",
	"bug_report" => "C'est peut être une erreur, merci de la signaler à ",
	"return" => "Retour",
	"browse" => "Naviguer",
	"fld" => "Champ",
	"fld_num" => "Nombre de champs",
	"fields" => "Champs",
	"type" => "Type",
	"operator" => "Opérateur",
	"val" => "Valeur",
	"update" => "Mise à jour",
	"comments" => "Commentaires",
	
	"specify_fields" => "Vous devez spécifier le nombre de champs de la table.",
	"specify_tbl" => "Vous devez spécifier un nom de table.",
	"specify_col" => "Vous devez spécifier une colonne.",
	
	"tbl_exists" => "Une table du même nom existe déjà.",
	"show" => "Afficher",
	"show_rows" => "Affiche %s ligne(s). ",
	"showing" => "Affichage de",
	"showing_rows" => "Affichage des lignes",
	"query_time" => "(Traitement en %s sec)",
	"syntax_err" => "Il y a un problème dans la syntaxe de votre requête, elle n'a pas été exécutée.",
	"run_sql" => "Exécuter une ou des requêtes SQL sur la base '%s'",
	
	"ques_empty" => "Êtes-vous sûr de vouloir vider la table '%s' ?",
	"ques_drop" => "Êtes-vous sûr de vouloir supprimer la table '%s' ?",
	"ques_drop_view" => "Êtes-vous sûr de vouloir supprimer la vue '%s' ?",
	"ques_del_rows" => "Êtes-vous sûr de vouloir supprimer la ou les ligne(s) %s de la table '%s' ?",
	"ques_del_db" => "Êtes-vous sûr de vouloir effacer la base '%s'?",
	"ques_column_delete" => "Êtes-vous sûr de vouloir effacer la ou les colonne(s) %s de la table '%s' ?",
	"ques_del_index" => "Êtes-vous sûr de vouloir effacer l'index '%s' ?",
	"ques_del_trigger" => "Êtes-vous sûr de vouloir effacer le déclencheur '%s' ?",
	#todo: translate
	"ques_primarykey_add" => "Are you sure you want to add a primary key for the column(s) %s in table '%s'?",
	
	"export_struct" => "Exporter avec la structure",
	"export_data" => "Exporter avec les données",
	"add_drop" => "Ajouter  DROP TABLE",
	"add_transact" => "Ajouter TRANSACTION",
	"fld_terminated" => "Champs terminés par",
	"fld_enclosed" => "Champs délimités par",
	"fld_escaped" => "Champs échappés par",
	"fld_names" => "Nom des champs dans la première ligne",
	"rep_null" => "Replacer NULL par",
	"rem_crlf" => "Supprimer les caractères CRLF des champs",
	"put_fld" => "Placer le nom des champs dans la première ligne",
	"null_represent" => "NULL représentée par",
	"import_suc" => "L'import s'est correctement déroulé.",
	"import_into" => "Importer dans",
	"import_f" => "Fichier à importer",
	"rename_tbl" => "Renommer la table '%s' en",
	
	"rows_records" => "ligne(s) à partir de l'Enregistrement # ",
	"rows_aff" => "ligne(s) affectée(s). ",
	
	"as_a" => "comme un",
	"readonly_tbl" => "'%s' est une Vue, cela veux dire que c'est une déclaration SELECT traitée comme une table en lecture seule. Vous ne pouvez pas l'éditer ou y insérer des enregistrements.",
	"chk_all" => " Tout cocher",
	"unchk_all" => "Tout décocher",
	"with_sel" => "avec la sélection",
	
	"no_tbl" => "Pas de table dans la base.",
	"no_chart" => "Si vous lisez cela, c'est que le graphique n'a pu être généré. Les données que vous essayez de visualiser ne sont peut être pas approprié pour un graphique.",
	"no_rows" => "Il n'y a pas d'enregistrements dans la table pour la plage que vous avez sélectionné.",
	"no_sel" => "Vous n'avez rien sélectionné.",
	
	"chart_type" => "Type de graphique",
	"chart_bar" => "Barres",
	"chart_pie" => "Camembert",
	"chart_line" => "Lignes",
	"lbl" => "Labels",
	"empty_tbl" => "Cette table est vide.",
	"click" => "Cliquer ici",
	"insert_rows" => "pour insérer des lignes.",
	"restart_insert" => "Recommencer l'insertion avec ",
	"ignore" => "Ignorer",
	"func" => "Fonction",
	"new_insert" => "Insérer comme une nouvelle ligne",
	"save_ch" => "Enregistrer les modifications",
	"def_val" => "Valeur par défaut",
	"prim_key" => "Clé primaire",
	"tbl_end" => "champ(s) à la fin de la table",
	"query_used_table" => "Requête utiliser pour créer cette table",
	"query_used_view" => "Requête utiliser pour créer cette Vue",
	"create_index2" => "Créer un index sur",
	"create_trigger2" => "Créer un nouveau déclencheur",
	"new_fld" => "Ajout de nouveau champ(s) sur la table '%s'",
	"add_flds" => "Ajouter des champs",
	"edit_col" => "Édition de la colonne '%s'",
	"vac" => "Nettoyer",
	"vac_desc" => "Les bases de grande taille ont parfois besoin d'être nettoyer (VACUUMed) pour réduire leur empreinte sur le serveur. Cliquer sur le bouton ci-dessous pour nettoyer la base '%s'.",
	"event" => "Evénement",
	"each_row" => "Pour chaque ligne",
	"define_index" => "Définir les propriétés de l'Index",
	"dup_val" => "Valeurs dupliquées",
	"allow" => "Autorisé",
	"not_allow" => "Non autorisé",
	"asc" => "Ascendant",
	"desc" => "Descendant",
	"warn0" => "Vous avez été prévenu.",
	"warn_passwd" => "Vous utilisez le mot de passe par défaut, cela est risqué. Vous pouvez le modifier facilement en haut du fichier %s.",
	"counting_skipped" => "Le dénombrement des enregistrements n'a pas été effectué pour certaines tables car votre base de données est volumineuse et certaines de ses tables n'ont pas de clés primaires rendant leur dénombrement particulièrement long à calculer. Ajoutez une clé primaires à ses tables ou %sforcer le dénombrement%s.",
	"sel_state" => "Choisir une déclaration",
	"delimit" => "Délimiteur",
	"back_top" => "Retour au haut de la page",
	"choose_f" => "Choisir un fichier",
	"instead" => "Au lieu de ",
	"define_in_col" => "Définir le(s) colonne(s) de l'index",
	
	"delete_only_managed" => "Vous ne pouvez qu'effacer les bases gérées par cet outil !",
	"rename_only_managed" => "Vous ne pouvez que renommer les bases gérées par cet outil !",
	"db_moved_outside" => "Vous avez soit essayé de déplacer la base dans un répertiure où elle ne peut plus être administrée, soit la vérification a échouée doit à un manque de droits.",
	"extension_not_allowed" => "L'extension fournie ne fait pas partie de la liste des extensions autorisées. Merci d'utiliser une de celles-ci",
	"add_allowed_extension" => "Vous pouvez ajouter des extensions à cette liste en ajoutant votre extension à \$allowed_extensions dans la configuration.",
	"directory_not_writable" => "Le fichier de la base est bien inscriptible, mais pour le modifier, le répertoire parent doit être également inscriptible. Cela est dû au fait que SQLite place à l'intérieur de celui-ci des fichiers temporaire de verrouillage.",
	"tbl_inexistent" => "La table %s n'existe pas",

	// errors that can happen when ALTER TABLE fails. You don't necessarily have to translate these.
	"alter_failed" => "L'ALTERation de la table %s a échouée",
	"alter_tbl_name_not_replacable" => "impossible de remplacer le nom de la table avec un nom temporaire",
	"alter_no_def" => "pas de définition pour ALTER",
	"alter_parse_failed" =>"impossible d'analyser votre définition ALTER",
	"alter_action_not_recognized" => "L'action ALTER n'a pas été reconnue",
	"alter_no_add_col" => "aucune colonne à ajouter n'a été détectée dans la déclaration ALTER ",
	"alter_pattern_mismatch"=>"La structure ne correspond pas à votre déclaration initiale de CREATE TABLE",
	"alter_col_not_recognized" => "impossible de reconnaitre le nouvel ou ancien nom de la colonne",
	"alter_unknown_operation" => "opération ALTER inconnue !",
	
	/* Help documentation */
	"help_doc" => "Aide",
	"help1" => "Extensions de la bibliothèque SQLite",
	"help1_x" => "%s utilise les extensions de la bibliothèque PHP permettant d'accéder à des bases de données SQLite. Actuellement, %s supporte PDO, SQLite3, et SQLiteDatabase. PDO et SQLite3 fonctionne avec la version 3 de SQLite, alors que SQLiteDatabase ne fonctionne qu'avec la version 2. Donc, si votre installation PHP inclus plus d'une extension de la bibliothèque SQLite, PDO et SQLite3 prendront le pas, permettant ainsi d'utiliser la meilleure technologie. Néanmoins, si vous avez des bases de données en version 2 de SQLite, %s forcera l'utilisation de SQLiteDatabase pour ces bases seules. Toutes les bases n'ont pas besoin d'être de même version. Au cours de la création de bases de données, l'extension la plus performante sera bien entendu utilisée.",
	"help2" => "Création d'une nouvelle base",
	"help2_x" => "À la création d'une nouvelle base de données, en cas d'oubli, l'extension appropriée (.db, .db3, .sqlite, etc.) sera automatiquement ajouté au nom saisie. La base sera créée dans le répertoire que vous avez spécifié comme variable \$directory.",
	"help3" => "Tables comparées aux Vues",
	"help3_x" => "Sur la page principale de la base est présente une liste de tables et de Vues. Les Vues étant en lecture seules, certaines opérations seront désactivées. Celles-ci n'apparaitront donc pas là où elles devraient être dans la ligne d'une Vue. Si vous souhaitez modifier les données d'une Vue, vous devrez supprimer cette Vue et en créer une nouvelle avec la déclaration SELECT appropriée pour interroger d'autres tables. Pour plus d'information, voir <a href='http://en.wikipedia.org/wiki/View_(database)' target='_blank'>http://en.wikipedia.org/wiki/View_(database)</a>",
	"help4" => "Écrire une déclaration SELECT pour une nouvelle Vue",
	"help4_x" => "À la création d'une nouvelle Vue, vous devez écrire une déclaration SQL SELECT qui permettra d'en utiliser ses données. Une Vue est tout simplement une table en lecture seul qui peut être accédée et lue comme une table standard, excepté qu'elle ne peur pas être modifiée via une insertion, une modification de colonne ou de ligne. Elle fournie juste un moyen pratique de lire des données.",
	"help5" => "Export de la structure dans un fichier SQL",
	"help5_x" => "Au cours du processus d'export vers un fichier SQL, vous pouvez faire le choix d'inclure les requêtes responsables de la création de la table et ses colonnes.",
	"help6" => "Export des données dans un fichier SQL",
	"help6_x" => "Au cours du processus d'export vers un fichier SQL, vous pouvez faire le choix d'inclure les requêtes qui rempliront la ou les tables avec les enregistrement actuels.",
	"help7" => "Ajout d'un Drop Table au fichier d'export SQL",
	"help7_x" => "Au cours du processus d'export vers un fichier SQL, vous pouvez faire le choix d'inclure les requêtes qui supprimeraient des tables existantes avant leur ajout, ce qui éviterait les erreurs gérer par la tentative de créer un table déjà existante.",
	"help8" => "Ajout de Transaction au fichier d'export SQL",
	"help8_x" => "Au cours du processus d'export vers un fichier SQL, vous pouvez faire le choix de placer les requêtes dans des TRANSACTION, ainsi en cas d'erreur lors de l'import du fichier, la base pourra être rétablie dans son état précédent, empêchant des données partiellement à jour d'être inscrite dans la base.",
	"help9" => "Ajout des commentaires au fichier d'export SQL",
	"help9_x" => "Au cours du processus d'export vers un fichier SQL, vous pouvez faire le choix d'inclure des commentaires expliquant chaque étape de celui-ci, donnant ainsi une meilleur compréhension à un utilisateur de ce qui se passe."
	
	);
?>
