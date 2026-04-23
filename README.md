# Portfolio — Romain Dacet

> Thème WordPress multi-pages pour le portfolio personnel de **Romain Dacet**, étudiant en BTS SIO. Style minimaliste, codé from scratch (PHP / HTML / CSS / JS Vanilla).

---

## Structure des pages

- **Accueil** (`front-page.php`) — hero + 6 cartes de navigation
- **CV** — template `template-cv.php` + PDF téléchargeable
- **Lettre de motivation** — template `template-lettre.php` + PDF
- **Projets** — template `template-projets.php` (liste des projets)
- **Projet Brasserie T&S** — template `template-projet-brasserie.php` (fiche détaillée)
- **Veille technologique** — template `template-veille.php` (à compléter)
- **Contact** — template `template-contact.php`

Chaque page WordPress créée dans l'admin peut se voir assigner un de ces templates via le bloc **Attributs de la page → Modèle**.

---

## Installation

1. **Zipper le thème** via le script parent :
   ```powershell
   & "C:\Users\romai\Documents\FICHIER\PROJET\Portfolio\theme\make-zip.ps1"
   ```
2. **WordPress → Apparence → Thèmes → Ajouter → Téléverser** → `portfolio-rd.zip` → **Installer** → **Activer**.
3. **Réglages → Lecture** → « Une page statique » → Page d'accueil = une nouvelle page `Accueil`.
4. **Créer les pages WP suivantes** (admin → Pages → Ajouter) en prenant soin pour chacune de choisir le **Modèle** correspondant dans le bloc *Attributs de la page* :

   | Titre de la page          | Slug                  | Modèle à choisir                        |
   |---------------------------|-----------------------|-----------------------------------------|
   | CV                        | `cv`                  | CV                                      |
   | Lettre de motivation      | `lettre-motivation`   | Lettre de motivation                    |
   | Projets                   | `projets`             | Projets                                 |
   | Brasserie T&S             | `projet-brasserie`    | Projet — Brasserie Terroir & Savoirs    |
   | Veille technologique      | `veille`              | Veille technologique                    |
   | Contact                   | `contact`             | Contact                                 |

5. **Apparence → Menus** → créer un menu `Principal` contenant ces pages + « Accueil », et l'assigner à l'emplacement **Menu principal**. (Fallback intégré si tu oublies cette étape.)

6. **Déposer la photo** de profil dans `wp-content/themes/portfolio-rd/assets/img/photo.jpg` (carré, ~600×600).

7. **Formulaire de contact** : installer **WPForms Lite**, créer un formulaire, noter son ID, l'écrire dans `template-contact.php` (remplace `22`).

---

## Contenu à compléter

- `template-projet-ap.php` — remplir contexte, objectifs, technos, bilan.
- `template-veille.php` — choisir un thème, lister sources, rédiger synthèses.
- Ajouter d'autres projets : éditer `prd_get_projects()` dans `functions.php`, puis créer un nouveau template `template-projet-<slug>.php` sur le modèle de `template-projet-brasserie.php`.

---

## Arborescence

```
portfolio-rd/
├── style.css
├── functions.php
├── header.php
├── footer.php
├── front-page.php
├── page.php
├── index.php
├── template-cv.php
├── template-lettre.php
├── template-projets.php
├── template-projet-brasserie.php
├── template-projet-ap.php
├── template-veille.php
├── template-contact.php
├── README.md
└── assets/
    ├── js/main.js
    ├── img/ (photo.jpg à ajouter)
    └── pdf/
        ├── cv.pdf
        └── lettre-de-motivation.pdf
```

---

**Auteur :** Romain Dacet — BTS SIO — 2026
