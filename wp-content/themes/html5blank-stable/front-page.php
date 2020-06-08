<!---------------------------------------->
<!---------------------------------------->
<!--- DEVELOPPEMENT PAR NCP MULTIMEDIA --->
<!------https://ncpmultimedia.com/-------->
<!------mail: ncpmedia21@gmail.com-------->
<!---------------------------------------->
<!---------------------------------------->
<?php get_header(); ?>
<section id="infosForm">

    <div id="logoContainer">
        <?php $headerlogo = get_field('logo', 'options'); ?>
        <a href="#"><img id="headerLogo" src="<?php echo esc_url($headerlogo['url']); ?>"
                alt="<?php echo esc_attr($headerlogo['alt']); ?>" /></a>
    </div>

    <div class="content col-9 centered">

        <div class="columns">
            <div class="col-7 text">
                <?php $infos = get_field('demande_infos');?>

                <h1><?php echo $infos['titre']; ?></h1>
                <h2><?php echo $infos['sous_titre']; ?></h2>
                <ul>
                    <li> <?php echo $infos['element_1']; ?> </li>
                    <li> <?php echo $infos['element_2']; ?> </li>
                    <li> <?php echo $infos['element_3']; ?> </li>
                </ul>


                <h3><?php echo $infos['titre_2']; ?></h3>

    
                    <div>
                        <p><?php echo $infos['texte_1']; ?></p>
                        <p><?php echo $infos['texte_2']; ?></p>
                        <p><?php echo $infos['texte_3']; ?></p>
                    </div>
    

                <p><?php echo $infos['texte_4']; ?></p>

            </div>

            <div class="col-1 gutter"></div>

            <div class="col-4 form form-container">
                <?php echo get_field('contact_form_2'); ?>
            </div>

        </div>
    </div>