<?php $this->load->view('shared/header');?>
<?php $this->load->view('shared/menu_notlogged', $place);?>

<main class="page landing-page index">
    <section class="clean-block clean-hero"
             >
        <div class="text" style="color: black;">
            <h1 class="text-center" style="font-size: 44px;">Bienvenue sur la plateforme<br>Freelancer.com</h1>
            <p><br>Ce site web regroupe la majorité des freelances de France.&nbsp;<br>Que vous soyez Freelance dans l'informatique, la cuisine, le graphisme, tous les Freelances Français
                sont regroupés sur ce site.<br><br></p>
            <p>Vous cherchez un projet en tant que Freelance ?&nbsp;<br>Vous êtes une entreprise et cherchez un Freelance ?<br>Inscrivez-vous sur Freelancer.com !</p><a
                class="btn btn-outline-primary btn-lg" role="button" href="<?= base_url('registration') ?>" style="background-color: #fc8c14;color: #eeeeee;">Rejoignez-nous !</a></div>
    </section>
    <section class="clean-block clean-hero"
             style="/*background-image: url(&quot;../assets/img/dashboard.jpg?h=c37eb1ae60f21efc150ef3269e5983bf&quot;);*/color: rgba(0, 0, 0, 0.5);background-position: center;height: 100vh;opacity: 1;filter: blur(0px);">
        <div class="text" style="color: black;">
            <p class="text-left" style="margin: 100px 0;">Vous avez un projet, une idée, mais vous n'avez ni les compétences, ni les ressources humaines nécessaires ? En vous inscrivant,
                vous pourrez naviguer parmis plusieurs profils de freelanceurs compétents.&nbsp;</p>
            <p class="text-right"
               style="margin: 100px 0;">Vous cherchez un projet en tant que Freelance ?&nbsp;<br>Vous êtes une entreprise et cherchez un Freelance ?<br>Inscrivez-vous sur Freelancer.com !
            </p>
        </div>
    </section>
</main>
<footer class="page-footer dark">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <h5>Pour démarrer</h5>
                <ul>
                    <li><a href="<?= base_url('/') ?>">Page d'acueil</a></li>
                    <li><a href="<?= base_url('registration') ?>">S'enregistrer</a></li>
                    <li><a href="<?= base_url('login') ?>">Connexion</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h5>A propos de nous</h5>
                <ul>
                    <li><a>Informations sur Freelancer.com</a></li>
                    <li><a>Contactez-nous</a></li>
                    <li><a>Freelancer.com dans le quotidien "Le Monde"</a></li>
                    <li><a>Avis de la communauté</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h5>Support</h5>
                <ul>
                    <li><a>Assistance</a></li>
                    <li><a>Forums</a></li>
                    <li><a>FAQ</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h5>Termes légaux</h5>
                <ul>
                    <li><a>Copyrights</a></li>
                    <li><a>Règles de confidentialités</a></li>
                    <li><a>Conditions d'utilisations</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <p>© 2019 Copyright CESI-RIL17</p>
    </div>
</footer>

<?php $this->load->view('shared/footer');?>
