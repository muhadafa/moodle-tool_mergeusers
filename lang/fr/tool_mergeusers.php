<?php

/**
 * Define default English language strings for report
 * @author Forrest Gaston
 * @author Juan Pablo Torres Herrera
 * @author Shane Elliott, Pukunui Technology
 * @author Jordi Pujol-Ahulló, SREd, Universitat Rovira i Virgili
 * @link http://moodle.org/mod/forum/discuss.php?d=103425
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @package tool-mergeusers
 */

$string['pluginname'] = 'Fusionner des comptes utilisateur';
$string['header'] = 'Fusionner deux comptes utilisateur en un';
$string['header_help'] =
'<p>Etant donné un utilisateur à supprimer et un utilisateur à conserver, ceci fusionnera
 toutes les données utilisateur vers le compte de l\'utilisateur à conserver. Les deux utilisateurs
 doivent exister dans la base d\'utilisateurs de Moodle, et aucun compte n\'est supprimé par cet utilitaire
 (ceci est laissé au loisir de l\'administrateur).</p>
 <p><strong>N\'utilisez ceci que si vous en comprenez les implications, car les opérations réalisées ici ne sont pas
 réversibles !</strong></p>';
$string['usermergingheader'] = '&laquo;{$a->username}&raquo; (ID utilisateur = {$a->id})';
$string['errorsameuser'] = 'Impossible de fusionner le même utilisateur';
$string['mergeusers'] = 'Fusionner des comptes utilisateur';
$string['merging'] = 'Fusion';
$string['into'] = 'vers';
$string['newuserid'] = 'ID de l\'utilisateur à conserver';
$string['olduserid'] = 'ID de l\'utilisateur à supprimer';
$string['mergeusers:view'] = 'Fusionner les comptes utilisateur';
$string['tableok'] = 'Table {$a} : mise à jour OK';
$string['tableko'] = 'Table {$a} : mise à jour PAS OK!';
$string['logok'] = 'Voici les requêtes qui ont été faites sur la base de données:';
$string['logko'] = 'Les erreurs suivantes se sont produites :';
$string['logid'] = 'Pour référence ultérieure, ces données apparaissent dans le dossier avec l\'id {$a}.';
$string['dbok'] = 'La fusion a réussi';
$string['dbko_transactions'] = '<strong>La fusion a echoue!</strong> <br/>Votre
    moteur de base de données supporte les transactions. Par conséquent, sa
    base de données <strong>n\'a pas été modifié</strong>.';
$string['dbko_no_transactions'] = '<strong>La fusion a echoue!</strong> <br/> Votre
    moteur de base de données pas supporte les transactions. Par conséquent,
    votre base de données <strong>a été modifié </strong> et a été laissé dans
    un état incohérent. <br/>Vérifiez l\'enregistrement de la fusion et signale les
    erreurs aux développeurs de plugin et seront fixés prochainement. <br/>
    Une fois que vous mettez à jour le plug-in à la dernière version, qui
    présentera la solution correspondant, fusionner les réitérants et ainsi être
    menés à bien.';
$string['tableskipped'] = 'Pour des raisons de traçabilité ou de sécurité, la table
 <strong>{$a}</strong> n\'est pas traitée.<br />Pour supprimer ces entrées, supprimez l\'ancien
 compte utilisateur une fois la fusion réussie.';
$string['errordatabase'] = 'Erreur: Type de base de données {$a} non supporté.';
$string['invaliduser'] = 'Utilisateur non valide';
$string['cligathering:description'] = 'Entrez les ID utilisateur à fusionner : le premier (fromid) vers le second (toid).
Les données liées au premier utilisateur seront transférées vers le second, qui intégrera alors toutes les données.';
$string['cligathering:stopping'] = 'Pour interrompre, tapez Ctrl+C ou entrez -1 dans les deux champs (fromid et toid).';
$string['cligathering:fromid'] = 'ID de l\'utilisateur d\'origine    (fromid):';
$string['cligathering:toid'] =   'ID de l\'utilisateur de destination  (toid):';
$string['viewlog'] = 'Voir le journal des fusions';
$string['loglist'] = 'Il s\'agit de la liste des fusions, indiquant pour chacune si elle a été effectuée avec succès:';
$string['newuseridonlog'] = 'ID de l\'utilisateur conservé';
$string['olduseridonlog'] = 'ID d\'utilisateur supprimé';
$string['nologs'] = 'Pas de records de fusion d\'utilisateurs. Bon pour vous!';
$string['wronglogid'] = 'Il n\'existe aucun enregistrement correspondant à votre choix.';
$string['deleted'] = 'L\'utilisateur ID {$a} a été éliminé';
$string['errortransactionsonly'] = 'Erreur: Exiger des transactions, et votre
    base de données {$a} ne les supporte pas. Si nécessaire, vous pouvez
    configurer que les fusions sont faites sans transactions.
    Vérifiez les paramètres en fonction de vos besoins.';

// Settings page
$string['transactions_setting'] = 'Seules les transactions sont autorisées';
$string['transactions_setting_desc'] = 'Si cette option est activée,
    les utilisateurs fusion effectuée si la base de données prend en charge
    les transactions PAS (recommandé).
    Avec cette option activée, vous vous assurez que la base de données reste
    toujours cohérente, même si la fusion se termine avec des erreurs. <br />
    Si cette option est désactivée, vous aurez toujours réaliser la fusion des
    utilisateurs. En cas d\'erreur, l\'inscription de la fusion montrera quel
    était le problème. Si vous signalé cette erreur aux développeurs de ce
    plugin, avoir la solution bientôt. <br />
    Notez que ce plugin bien géré tout les tables de la base de données de
    Moodle, et aussi des plugins tiers. Par conséquent, si vous avez juste
    une installation de Moodle standard, vous pouvez exécuter ce plugin si
    calmement avec cette option activée com désactivé.';
$string['transactions_supported'] = 'Pour votre information, sur la base
    données <strong>prend en charge les transactions</strong>.';
$string['transactions_not_supported'] = 'Pour votre information, sur la base
    données <strong>ne prennent pas en charge les transactions</strong>.';
$string['excluded_exceptions'] = 'Exclure exceptions';
$string['excluded_exceptions_desc'] = 'Expérience dans ce domaine suggère
    que ces tables de base de données doivent être exclus du processus
    fusion. Voir le fichier README pour plus de détails. <br>
    Donc, si vous voulez appliquer le comportement par défaut, vous devez choisir
    \'{$ a}\' exclure du processus de fusion (recommandé). <br>
    Si vous préférez, vous pouvez choisir les tables que vous souhaitez inclure
    dans le processus de fusion (non recommandé).';
