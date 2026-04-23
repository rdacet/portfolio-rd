# Portfolio — Romain Dacet

Thème WordPress personnel de **Romain Dacet**, étudiant en 1ʳᵉ année de BTS SIO option SISR au lycée Guy Mollet (Arras).

Le site présente mon CV, ma lettre de motivation, mes projets et ma veille technologique dans le cadre de ma recherche de stage (25 mai → 4 juillet 2026).

## Pages

- **Accueil** — navigation éditoriale numérotée
- **CV** — parcours, formations, compétences + PDF téléchargeable
- **Lettre de motivation** — texte + PDF intégré
- **Projets** — liste des projets, dont *Brasserie Terroir & Savoirs*
- **Veille technologique** — à compléter
- **Contact** — téléphone, email, formulaire WPForms

## Stack

- WordPress (thème custom, from scratch)
- PHP 8 · HTML5 · CSS3 · JavaScript vanilla
- Polices : Fraunces, Inter, JetBrains Mono (Google Fonts)
- Hébergement : InfinityFree

## Installation

1. Générer l'archive avec `make-zip.ps1` (dossier parent).
2. WordPress → **Apparence → Thèmes → Ajouter → Téléverser** → `portfolio-rd.zip`.
3. Créer les pages listées dans le tableau ci-dessous et leur assigner le **Modèle** correspondant via *Attributs de la page*.

| Titre                 | Slug                 | Modèle                                  |
|-----------------------|----------------------|-----------------------------------------|
| CV                    | `cv`                 | CV                                      |
| Lettre de motivation  | `lettre-motivation`  | Lettre de motivation                    |
| Projets               | `projets`            | Projets                                 |
| Brasserie T&S         | `projet-brasserie`   | Projet — Brasserie Terroir & Savoirs    |
| Veille technologique  | `veille`             | Veille technologique                    |
| Contact               | `contact`            | Contact                                 |

## Auteur

**Romain Dacet** — BTS SIO 2025-2026
