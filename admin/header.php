<!-- NAV BAR -->

<span  class="uk-margin-small-left uk-margin-small-top" uk-icon="menu" style="margin-left:10px" uk-toggle="target: #offcanvas-usage"></span> 
<div id="offcanvas-usage" uk-offcanvas>
                <div class="uk-offcanvas-bar">
                <h3>OUTILS ADMINISTRATEUR</h3>
                    <button class="uk-offcanvas-close" type="button" uk-close></button>
                    <form action="listofvehicles.php" method="get">
                    <!-- Filter option for prov status-->
                        <ul uk-accordion>
                            <li class="uk-open">
                                <a class="uk-accordion-title uk-text-muted uk-text-small" style="text-size:4px;" href="#"><span class="uk-margin-small-right" uk-icon="icon: thumbnails"></span>View</a>
                                <div class="uk-accordion-content">
                                    <ul class="uk-nav uk-dropdown-nav">
                                        <li><a href="dashboard.php">Tableau de bord</a></li>
                                        <li><a href="contact_admin.php" uk-toggle>Contact</a></li>
                                        <li><a href="schedule.php" uk-toggle>Demande d'essai</a></li>
                                        <li><a href="admin_profile.php">Profile administration</a></li>
                                        <li><a href="listofvehicles.php">Liste des vehicules</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li class="uk-open">
                                <a class="uk-accordion-title uk-text-muted uk-text-small" style="text-size:4px;" href="#"><span class="uk-margin-small-right" uk-icon="icon: table"></span>Options</a>
                                <div class="uk-accordion-content">
                                    <ul class="uk-nav uk-dropdown-nav">
                                        <li><a href="register_admin.php">Ajout d'un nouveau administrateur</a></li>
                                        <li><a href="add_contact.php" uk-toggle>Ajout d'un nouveau contact</a></li>
                                        <li><a href="add_schedule.php" uk-toggle>Ajout d'une demande d'essai</a></li>
                                        <li><a href="add_vehicle.php">Ajout d'un nouveau vehicule</a></li>
                                        <li><a href="accueil.php">Modifier la page accueil</a></li>
                                        <li><a href="services_admin.php">Modifier la page service</a></li>
                                        <li><a href="reset-password_admin.php">Réinitialiser mot de passe</a></li>
                                        <li><a href="logout.php">Déconnexion</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>

        <a href="logout.php" class="uk-margin-small-right uk-margin-small-top uk-align-right uk-icon-link" uk-icon="sign-out" uk-tooltip="title: Logout"></a>
