
<?php
	require_once("action/EquipeAction.php");
	$action = new EquipeAction();
	$action->execute();
	require_once("partial/header.php");
?>

            <!-- CONTENT -->
            <div id="content">
                <div id="page-header" class="style-1">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4">

                                <h4>Équipe du CRISPESH</h4>

                            </div><!-- col -->
                            <div class="col-sm-8">
                                <ol class="breadcrumb">
                                    <li>
                                        <a href="index">Accueil</a>
                                    </li>
                                    <li class="active">
                                        <a href="equipe">Équipe du CRISPESH</a>
                                    </li>
                                </ol>
                            </div><!-- col -->
                        </div><!-- row -->
                    </div><!-- container -->
                </div><!-- page-header -->

                <div class="container">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="widget widget-categories">
                                <ul>
                                    <li>
                                        <a href="equipe_personnel_admin">Personnel administratif</a>
                                    </li>
                                    <li>
                                        <a href="equipe_personnel_scientifique">Personnel scientifique</a>
                                    </li>
                                    <li>
                                        <a href="equipe_etudiants">Étudiants (Assistants de recherche et stagiaires)</a>
                                    </li>
                                    <li>
                                        <a href="equipe_chercheurs">Chercheuses et chercheurs affiliés</a>
                                    </li>
                                    <li>
                                        <a href="equipe_conseil">Le conseil d’administration</a>
                                    </li>
                                    <li>
                                        <a href="equipe_emplois">Emplois au CRISPESH</a>
                                    </li>
                                </ul>
                            </div><!-- widget-categories -->
                        </div><!-- col -->
                        <div class="col-sm-7">
                            <div class="col-sm-12">
                                <h1>Équipe du CRISPESH</h1>
                                <p>Dans la réalisation de son mandat, le CRISPESH contribue à la formation de la relève scientifique. Pour ce faire, il embauche, à même ses projets, des étudiants de niveau collégial et universitaire à titre d’assistants de recherche. De plus, il accueille des stagiaires universitaires de deuxième et de troisième cycle qui s’intéressent aux questions qui touchent l’inclusion des personnes en situation de handicap.</p>
                            </div>
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->

<?php
	require_once("partial/footer.php");
