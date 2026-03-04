<?php
include("connexion.php");

$message_sent = false;
$error_message = "";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Portfolio | Développeur FullStack & UI/UX Designer</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body data-bs-spy="scroll" data-bs-target="#navbar-main" data-bs-offset="100">

    <!-- Navbar -->
    <nav id="navbar-main" class="navbar navbar-expand-lg fixed-top navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">PORTFOLIO<span>.</span></a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navContent">
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#hero">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#formations">Formations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#experiences">Expériences</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projets">Projets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header id="hero" class="hero-section d-flex align-items-center">
        <div class="container text-center text-lg-start">
            <div class="row align-items-center">
                <div class="col-lg-7 reveal">
                    <span class="hero-tagline d-block">Bienvenue sur mon portfolio</span>
                    <h1 class="display-1 fw-bold">Développeur FullStack <br><span>& Designer UI/UX</span></h1>
                    <p class="lead text-muted mb-4 pe-lg-5">
                        Je crée des expériences numériques modernes, performantes et centrées sur l'utilisateur. Passionné par le code propre et les designs élégants.
                    </p>
                    <div class="d-flex gap-3 justify-content-center justify-content-lg-start">
                        <a href="#projets" class="btn btn-primary btn-lg rounded-pill px-4">Voir mes Projets</a>
                        <a href="#contact" class="btn btn-outline-light btn-lg rounded-pill px-4">Me Contacter</a>
                    </div>
                </div>
                <div class="col-lg-5 position-relative d-none d-lg-block">
                    <div class="hero-bg-accent"></div>
                </div>
            </div>
        </div>
    </header>

    <!-- Sections Content -->
    <main>
        <!-- Formations -->
        <section id="formations" class="section-padding">
            <div class="container text-center">
                <div class="section-header reveal mb-5">
                    <span class="subtitle">Formations</span>
                    <h2 class="display-5">Mon Parcours</h2>
                    <div class="underline mx-auto"></div>
                </div>
                <div class="row g-4 mt-3">
                    <div class="col-md-4 reveal">
                        <div class="formation-card">
                            <span class="badge rounded-pill mb-3">2023 - 2024</span>
                            <h3>Master en Développement Web</h3>
                            <p class="school text-cyan">Université du Numérique</p>
                            <p class="text-muted">Spécialisation dans les architectures web modernes et les environnements de production.</p>
                        </div>
                    </div>
                    <div class="col-md-4 reveal" style="transition-delay: 0.2s">
                        <div class="formation-card">
                            <span class="badge rounded-pill mb-3">2021 - 2023</span>
                            <h3>Licence Informatique</h3>
                            <p class="school text-cyan">École Polytechnique</p>
                            <p class="text-muted">Bases solides en algorithmique et conception logicielle efficace.</p>
                        </div>
                    </div>
                    <div class="col-md-4 reveal" style="transition-delay: 0.4s">
                        <div class="formation-card">
                            <span class="badge rounded-pill mb-3">2020</span>
                            <h3>Baccalauréat Scientifique</h3>
                            <p class="school text-cyan">Lycée des Sciences</p>
                            <p class="text-muted">Option Mathématiques et Sciences de l'Ingénieur. Mention Très Bien.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Expériences -->
        <section id="experiences" class="section-padding bg-darker">
            <div class="container">
                <div class="section-header text-center reveal mb-5">
                    <span class="subtitle">Professionnel</span>
                    <h2 class="display-5">Mon Expérience</h2>
                    <div class="underline mx-auto"></div>
                </div>
                
                <div class="timeline mt-5">
                    <div class="timeline-item reveal">
                        <div class="timeline-content">
                            <span class="date text-indigo fw-bold">2024 - Présent</span>
                            <h3>Développeur Front-end Senior</h3>
                            <h4 class="h5 text-muted mb-3">Tech Solutions SAS</h4>
                            <ul class="list-unstyled">
                                <li>Intégration d'interfaces web complexes.</li>
                                <li>Optimisation de la performance globale.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="timeline-item reveal">
                        <div class="timeline-content">
                            <span class="date text-indigo fw-bold">2022 - 2023</span>
                            <h3>Développeur Web Full-stack</h3>
                            <h4 class="h5 text-muted mb-3">Creative Agency</h4>
                            <ul class="list-unstyled">
                                <li>Développement de solutions complètes (Back & Front).</li>
                                <li>Conception UI/UX sur Figma.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projets -->
        <section id="projets" class="section-padding">
            <div class="container text-center">
                <div class="section-header reveal mb-5">
                    <span class="subtitle">Portfolio</span>
                    <h2 class="display-5">Mes Projets</h2>
                    <div class="underline mx-auto"></div>
                </div>

                <!-- Filtres -->
                <div class="filters mb-5 reveal">
                    <button class="btn btn-filter active px-4 py-2" data-filter="all">Tous</button>
                    <button class="btn btn-filter px-4 py-2" data-filter="web">Web</button>
                    <button class="btn btn-filter px-4 py-2" data-filter="mobile">Mobile</button>
                    <button class="btn btn-filter px-4 py-2" data-filter="desktop">Desktop</button>
                </div>

                <div class="row g-4 projets-grid">
                    <!-- Cinephoria -->
                    <div class="col-md-6 col-lg-4 projet-item reveal" data-category="web mobile desktop">
                        <div class="projet-card-inner">
                            <div class="projet-img" style="background: linear-gradient(135deg, #00c6ff 0%, #0072ff 100%)">
                                <div class="overlay">
                                    <a href="#" class="btn btn-light rounded-pill">Voir le Projet</a>
                                </div>
                            </div>
                            <div class="p-4 text-start">
                                <span class="text-cyan small fw-bold text-uppercase">Web • Mobile • Desktop</span>
                                <h3 class="h5 mt-1">Cinephoria</h3>
                                <p class="text-muted small">Gestion de cinémas (PHP MVC, Flutter API, Python Tkinter).</p>
                            </div>
                        </div>
                    </div>
                    <!-- Super Bowl -->
                    <div class="col-md-6 col-lg-4 projet-item reveal" data-category="web mobile desktop">
                        <div class="projet-card-inner">
                            <div class="projet-img" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%)">
                                <div class="overlay">
                                    <a href="#" class="btn btn-light rounded-pill">Voir le Projet</a>
                                </div>
                            </div>
                            <div class="p-4 text-start">
                                <span class="text-cyan small fw-bold text-uppercase">Web • Mobile • Desktop</span>
                                <h3 class="h5 mt-1">Super Bowl</h3>
                                <p class="text-muted small">Paris sportifs (Web, React Mobile, Python Tkinter Desktop).</p>
                            </div>
                        </div>
                    </div>
                    <!-- SoigneMoi -->
                    <div class="col-md-6 col-lg-4 projet-item reveal" data-category="web">
                        <div class="projet-card-inner">
                            <div class="projet-img" style="background: linear-gradient(135deg, #5ee7df 0%, #b490ca 100%)">
                                <div class="overlay">
                                    <a href="#" class="btn btn-light rounded-pill">Voir le Projet</a>
                                </div>
                            </div>
                            <div class="p-4 text-start">
                                <span class="text-cyan small fw-bold text-uppercase">Web</span>
                                <h3 class="h5 mt-1">SoigneMoi</h3>
                                <p class="text-muted small">Site web médical pour la prise de rendez-vous (PHP).</p>
                            </div>
                        </div>
                    </div>
                    <!-- E-commerce React -->
                    <div class="col-md-6 col-lg-4 projet-item reveal" data-category="web">
                        <div class="projet-card-inner">
                            <div class="projet-img" style="background: linear-gradient(135deg, #f6d365 0%, #fda085 100%)">
                                <div class="overlay">
                                    <a href="#" class="btn btn-light rounded-pill">Voir le Projet</a>
                                </div>
                            </div>
                            <div class="p-4 text-start">
                                <span class="text-cyan small fw-bold text-uppercase">Web</span>
                                <h3 class="h5 mt-1">E-Shop</h3>
                                <p class="text-muted small">Plateforme e-commerce luxueuse (React).</p>
                            </div>
                        </div>
                    </div>
                    <!-- Maoulida -->
                    <div class="col-md-6 col-lg-4 projet-item reveal" data-category="web">
                        <div class="projet-card-inner">
                            <div class="projet-img" style="background: linear-gradient(135deg, #84fab0 0%, #8fd3f4 100%)">
                                <div class="overlay">
                                    <a href="#" class="btn btn-light rounded-pill">Voir le Projet</a>
                                </div>
                            </div>
                            <div class="p-4 text-start">
                                <span class="text-cyan small fw-bold text-uppercase">Web</span>
                                <h3 class="h5 mt-1">Maoulida</h3>
                                <p class="text-muted small">Portail politique comorien moderne.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Conciergerie -->
                    <div class="col-md-6 col-lg-4 projet-item reveal" data-category="web">
                        <div class="projet-card-inner">
                            <div class="projet-img" style="background: linear-gradient(135deg, #a1c4fd 0%, #c2e9fb 100%)">
                                <div class="overlay">
                                    <a href="#" class="btn btn-light rounded-pill">Voir le Projet</a>
                                </div>
                            </div>
                            <div class="p-4 text-start">
                                <span class="text-cyan small fw-bold text-uppercase">Web</span>
                                <h3 class="h5 mt-1">Yodd Conciergerie</h3>
                                <p class="text-muted small">Service de conciergerie privée (React).</p>
                            </div>
                        </div>
                    </div>
                    <!-- Gestion de Bibliothèque -->
                    <div class="col-md-6 col-lg-4 projet-item reveal" data-category="web">
                        <div class="projet-card-inner">
                            <div class="projet-img" style="background: linear-gradient(135deg, #fccb90 0%, #d57eeb 100%)">
                                <div class="overlay">
                                    <a href="#" class="btn btn-light rounded-pill">Voir le Projet</a>
                                </div>
                            </div>
                            <div class="p-4 text-start">
                                <span class="text-cyan small fw-bold text-uppercase">Web</span>
                                <h3 class="h5 mt-1">E-Bibliothèque</h3>
                                <p class="text-muted small">Système de gestion de bibliothèque (Django).</p>
                            </div>
                        </div>
                    </div>
                    <!-- Banque MVC -->
                    <div class="col-md-6 col-lg-4 projet-item reveal" data-category="web">
                        <div class="projet-card-inner">
                            <div class="projet-img" style="background: linear-gradient(135deg, #e0c3fc 0%, #8ec5fc 100%)">
                                <div class="overlay">
                                    <a href="#" class="btn btn-light rounded-pill">Voir le Projet</a>
                                </div>
                            </div>
                            <div class="p-4 text-start">
                                <span class="text-cyan small fw-bold text-uppercase">Web</span>
                                <h3 class="h5 mt-1">Bank App MVC</h3>
                                <p class="text-muted small">Application bancaire sécurisée (PHP MVC).</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact -->
        <section id="contact" class="section-padding">
            <div class="container">
                <div class="section-header text-center reveal mb-5">
                    <span class="subtitle">Get in touch</span>
                    <h2 class="display-5">Contactez-moi</h2>
                    <div class="underline mx-auto"></div>
                </div>

                <div class="row g-5 align-items-center">
                    <div class="col-lg-5 reveal">
                        <h3>Discutons de votre projet</h3>
                        <p class="text-muted mb-4">Je suis ouvert à de nouvelles opportunités passionnantes.</p>
                        <div class="d-flex align-items-center mb-3">
                            <div class="icon-box me-3">📍</div>
                            <div>
                                <h4 class="h6 mb-0">Localisation</h4>
                                <p class="text-muted mb-0 small">Paris, France (Remote)</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="icon-box me-3">📧</div>
                            <div>
                                <h4 class="h6 mb-0">Email</h4>
                                <p class="text-muted mb-0 small">hello@mondomaine.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 reveal">
                        <form id="contactForm" method="POST" class="contact-form p-4 rounded-4 shadow-lg">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <input type="text" name="nom" class="form-control" placeholder="Nom" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="col-12">
                                    <input type="text" name="sujet" class="form-control" placeholder="Sujet" required>
                                </div>
                                <div class="col-12">
                                    <textarea name="message" class="form-control" rows="5" placeholder="Votre message" required></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary w-100 py-3 rounded-3">Envoyer le Message</button>
                                </div>
                                <?php if ($message_sent): ?>
                                <div id="formStatus" class="col-12 text-center mt-3">
                                    <span class="text-success fw-bold small">Message envoyé ! Merci.</span>
                                </div>
                                <?php
elseif (!empty($error_message)):
?>
                                <div id="formStatus" class="col-12 text-center mt-3">
                                    <span class="text-danger fw-bold small"><?php echo $error_message; ?></span>
                                </div>
                                <?php
endif;
?>
                            </div>
                        </form>
                            <?php

if (!empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['sujet']) && !empty($_POST['message'])) {

    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $sujet = $_POST['sujet'];
    $message_content = $_POST['message'];

    try {
        $sql = "INSERT INTO messages (nom, email, sujet, message) VALUES (:nom, :email, :sujet, :message)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':nom' => $nom,
            ':email' => $email,
            ':sujet' => $sujet,
            ':message' => $message_content
        ]);
        $message_sent = true;
    }
    catch (PDOException $e) {
        $error_message = "Erreur lors de l'envoi : " . $e->getMessage();
    }
}
else {
    $error_message = "Veuillez remplir tous les champs.";
}

?>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer py-5 border-top border-secondary">
        <div class="container">
            <div class="row align-items-center text-center text-md-start">
                <div class="col-md-4 mb-3 mb-md-0">
                    <a class="navbar-brand footer-logo" href="#">PORTFOLIO<span>.</span></a>
                </div>
                <div class="col-md-4 mb-3 mb-md-0 text-center">
                    <p class="text-muted small mb-0">© 2026 Tous droits réservés.</p>
                </div>
                <div class="col-md-4 text-md-end">
                    <div class="social-links">
                        <a href="#" class="btn btn-sm btn-outline-secondary rounded-circle me-2">Li</a>
                        <a href="#" class="btn btn-sm btn-outline-secondary rounded-circle me-2">Gh</a>
                        <a href="#" class="btn btn-sm btn-outline-secondary rounded-circle">Tw</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="js/script.js"></script>
</body>
</html>
