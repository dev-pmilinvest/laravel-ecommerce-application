@extends('site.app')
@section('title', 'MENTIONS LEGALES')
@section('content')

<section class="section-content bg padding-y border-top" id="site">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    @if (Session::has('message'))
                        <p class="alert alert-success">{{ Session::get('message') }}</p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                <h1 class="title-page">MENTIONS LEGALES</h1>
                <p>Mise à jour le 23/01/2020.</p>
            <h2>1. PRÉSENTATION DU SITE</h2>
            
            <p>Conformément aux dispositions des articles 6-III et 19 de la Loi n° 2004-575 du 21 juin 2004 pour la Confiance dans l’économie numérique, dite L.C.E.N., nous portons à la connaissance des utilisateurs et visiteurs du site www.argel7.com les informations suivantes :</p>
            
            <h3>EDITEUR DU SITE</h3>
            <pre>
            Site Argel7.com
            par Laboratoire NaturAvignon
            315 Rue Marcel Demonque
            84140 AVIGNON Montfavet
            France
            Tél : 04.88.70.00.25
            Adresse mail de contact : contact@argel7.com
            
            Responsable éditorial : Samuel Lecomte
            
            LABNAT est une SARL au capital de 50 000€
            RCS : Avignon 450 309 976
            FR 76450309976
        </pre>
            
             
            
            <h3>HEBERGEUR</h3>
            <pre>
            O2Switch
            222-224 Boulevard Gustave Flaubert
            63000 Clermont-Ferrand
            FRANCE
            Téléphone : 04 44 44 60 40
</pre>
            <h2>2. DESCRIPTION DU SITE</h2>
            
            <p>Le site www.argel7.com est un site e-commerce. Il offre la possibilité à ses visiteurs d’acheter des produits sur Internet : le site permet d’obtenir des informations détaillées sur le produit Argel7® de la marque Laboratoire NaturAvignon, de procéder à une commande, d’effectuer un paiement, et de se faire livrer.</p>
            
            <p>Le site s’efforce de fournir des informations aussi précises que possible. Toutes les informations sont données sous réserve de modifications ayant été apportées depuis leur mise en ligne.</p>
            <h2>3. GESTION ET PROTECTION DES DONNEES PERSONNELLES</h2>
            
            <h3>COLLECTE DES DONNEES</h3>
            <ul>
                <li>Dans le cadre de la relation commerciale avec l’utilisateur, LAB NAT est amené à collecter et traiter des données à caractère personnel le concernant.</li>
                <li>Pour des besoins de statistiques et d’affichage, le présent site utilise des cookies. Pour certains d’entre eux, le consentement de l’utilisateur est nécessaire. Pour bénéficier de l’ensemble des fonctionnalités proposé par le site, il est conseillé de garder l’activation des différentes catégories de cookies.</li>
            </ul>

            <p>Le paramétrage du logiciel de navigation permet d’informer de la présence de cookie et éventuellement, de refuser de la manière décrite à l’adresse suivante : www.cnil.fr. Le refus d’installation d’un cookie peut entraîner l’impossibilité d’accéder à certains services.</p>
            
            <p>L’utilisateur peut toutefois configurer son ordinateur de la manière suivante, pour refuser l’installation des cookies :</p>
            <ul>
                <li>Sous Internet Explorer : onglet outil / options internet. Cliquez sur Confidentialité et choisissez Bloquer tous les cookies. Validez sur Ok.</li>
                <li>Sous Chrome : menu / paramètres / paramètres avancés / paramètres du site / Cookies et données du site. Décocher « Autoriser les sites à enregistrer et à lire les données des cookies.»</li>
                <li>Sous Firefox : menu / options / vie privée et sécurité / personnalisé. Cocher « Cookies » et désélectionner « Tous les cookies »</li>
                <li>Des données personnelles peuvent également être recueillies au travers des technologies standard d’Internet et appareils mobiles.</li>
            </ul>    

            
             
            
            <h3>TRAITEMENT DES DONNEES PERSONNELLES</h3>
            <p>Aucune information personnelle n’est publiée à l’insu de l’utilisateur, échangée, transférée, cédée ou vendue sur un support quelconque à des tiers.</p>
            <p>Ces traitements s’effectuent conformément aux dispositions légales et réglementaires relatives aux traitements de données à caractère personnel et, en particulier, la Loi n° 78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés, modifiée par la loi n° 2018-493 du 20 juin 2018, le Règlement (UE) 2016/679 du Parlement européen et du Conseil du 27 avril 2016 relatif à la Protection des personnes physiques à l’égard du traitement de données à caractère personnel et à la libre circulation de ces données (dit « RGPD »), ainsi que toute autre disposition législative ou réglementaire en vigueur.</p>
            
             
            
            <h3>DROIT D’ACCES</h3>
            <p>Les données personnelles sont traitées au sein de l’Union Européenne. Conformément à la loi informatique et libertés du 6 Janvier 1978 modifiée, l’utilisateur dispose d’un droit d’accès, de rectification, de portabilité, d’opposition, d’effacement et d’un droit permettant de limiter le traitement de ces données.</p>
            <p>Ces droits peuvent être exercés à tout moment et sans frais en adressant une demande par email (contact@argel7.com) ou par courrier (Laboratoire Natur’Avignon – BP 51022 – 84096 Avignon Cedex 9), accompagné de la copie d’une pièce d’identité. Une réclamation peut également être adressée à la CNIL.</p>
            
             
            
            <h3>DUREE DE CONSERVATION</h3>
            <p>Vos données personnelles sont conservées pendant une durée conforme aux dispositions légales ou proportionnelles aux finalités pour lesquelles elles ont été enregistrées.
            <h2>4. PROPRIETE INTELLECTUELLE</h2>
            
            <p>Les marques « Laboratoire Natur’Avignon » et « ARGEL7 » sont la propriété de la société LAB NAT. Elles sont déposées auprès de l’INPI en sa totalité, ainsi que l’ensemble des droits y afférents. Toute reproduction, intégrale ou partielle, est systématiquement soumise à l’autorisation des propriétaires.</p>
            
            <p>Laboratoire Natur’Avignon n’autorise pas la reproduction des textes, photos, illustrations, vidéos, logos, marques, noms de produits et graphismes mis en ligne sur son site Internet. Tous ces contenus sont la propriété de la société LAB NAT et couverts par le droit d’auteur, à l’exception des marques, logos ou contenus appartenant à d’autres sociétés partenaires ou auteurs. Toute utilisation de ceux-ci sans accord préalable fera l’objet d’une action en contrefaçon.</p>
 
                </div>
            </div>

</div>
</section>
            


@stop