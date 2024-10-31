<?php
/*
 * Plugin Name: Registre RGPD CVMH
 * Description: Extension pour le registre RGPD
 * Version: 1.0.1
 * Author: CVMH solutions
 * Author URI: https://www.agence-web-cvmh.fr
 * License: GPLv2 or later
 */

defined( 'ABSPATH' ) or exit;

define( 'CVMH_RRGPD_VERSION'       , '0.1' );

/*
 * Chargement de l'extension
 */
add_action( 'admin_menu', 'cvmh_rrgpd_register_page' );
function cvmh_rrgpd_register_page() {
    add_menu_page( 'Registre RGPD', 'Registre RGPD', 'edit_pages', 'cvmh_rrgpd', 'cvmh_rrgpd_page', 'dashicons-shield', 999 );
}
function cvmh_rrgpd_page() { ?>
    <div class="wrap">
        <h1>Registre RGPD</h1>
        <p>La CNIL vous demande de tenir un registre permettant de recenser les traitements de données personnelles mis en œuvre par votre structure, que vous soyez une société, une association, un entrepreneur individuel...</p>
        <p>Ce registre concerne l'ensemble de vos activités qui induisent un traitement de données personnelles. Ainsi, si vous avez des salariés, vous traitez des données personnelles liées à la gestion des paies. Si vous avez des commerciaux ou/et que vous vendez des services ou des produits, vous traitez des données prospects ou clients...</p>
        <p>Le registre RGPD concerne donc l'ensemble de vos actions, ce que la CNIL appelle des « activités » qui induisent un traitement de données personnelles. Le registre RGPD dépasse donc le simple cadre de votre site internet. C'est un document unique qui concerne l'ensemble des activités de votre société.</p>
        <p>Concernant votre site internet, celui-ci est bien sûr concerné par le registre RGPD. Dans votre registre, vous devrez décrire les activités de votre site qui induisent un traitement de données personnelles. Voici quelques exemples :<br />
            &nbsp;&nbsp;&nbsp;- Vente en ligne<br />
            &nbsp;&nbsp;&nbsp;- Gestion des questions des visiteurs (formulaire de contact)<br />
            &nbsp;&nbsp;&nbsp;- Fourniture de PDF (téléchargement de documents PDF assujetit à la fourniture de données personnelles)<br />
            &nbsp;&nbsp;&nbsp;- Lettre d'information, Newsletter<br />
            &nbsp;&nbsp;&nbsp;- Création de comptes utilisateurs permettant l'accès à des services spécifiques<br />
            &nbsp;&nbsp;&nbsp;- Fourniture de devis (via un formulaire)<br />
            &nbsp;&nbsp;&nbsp;- …</p>
        <p>Pour chacune de ces activités, vous devez lister les types de données collectées (voir les exemples dans le document fourni sur cette page).</p>
        <p>Pour chacune de ces activités, vous devez préciser la durée de conservation des données s'y rattachant. Pour cela, référez vous aux durées standards enoncées dans l'onglet « politique de confidentialité » intégré dans votre site internet. Vous retrouverez également ces durées dans les mentions que nous avons intégrées dans chacun de vos formulaires collectant des données sur votre site internet.</p>
        <p>Si les données collectées sont stockées sur votre site, leur durée de conservation sera automatiquement gérée. Si vous deviez décider de conserver ces données au delà de ces durées standards, il vous appartiendrait de la faire en dehors du site internet. De la même façon, il vous appartient de gérer cette durée de conservation des données au travers de vos boites mails ou de tout autre système de traitement de données extérieur au site internet.</p>
        <p>Pour chacune de vos activités, il vous sera demandé de spécifier les mesures prises pour sécuriser les données. Concenant les activités liées à votre site internet, et uniquement pour celles-ci, vous pourrez préciser les informations suivantes :<br />
            &nbsp;&nbsp;&nbsp;- Datacentres placés sous protection (clôtures barbelées, vidéo-surveillance, détection de mouvements, badges RFID nominatifs...)<br />
            &nbsp;&nbsp;&nbsp;- Gestion des risques incendie (conformité N4)<br />
            &nbsp;&nbsp;&nbsp;- Réseau entièrement redondé<br />
            &nbsp;&nbsp;&nbsp;- Présence humaine dans les datacentres 24/7/365<br />
            &nbsp;&nbsp;&nbsp;- ALimentation électrique doublée et groupes électrogènes<br />
            &nbsp;&nbsp;&nbsp;- Centres de données géographiquement distants<br />
            &nbsp;&nbsp;&nbsp;- Protection anti-DDoS<br />
            &nbsp;&nbsp;&nbsp;- utilisation du protocole HTTPS</p>
        <p>Ce registre des activitées de traitement des données personnelles doit être mis à jour au fil de l'eau. Si vous ajoutez des fonctionnalités dans votre site, ou si vous procédez à des changements quels qu'ils soient, pensez à contrôler la conformité de votre registre vis à vis de votre site. Bien sûr, cela est valable pour toutes vos activités d'une façon générale, qu'elles passent ou non par votre site internet.</p>
        <p>Pour faciliter la création de votre registre, nous avez à votre disposition le registre standard de la CNIL téléchargeable à l'adresse suivante : <a href="https://www.agence-web-cvmh.fr/registre_rgpd_basique.pdf" target="_blank">https://www.agence-web-cvmh.fr/registre_rgpd_basique.pdf</a></p>
    </div><?php
}