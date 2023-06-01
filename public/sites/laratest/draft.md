
# Tasks

## Ajouts de contenu bilingue

ajouter des pages françaises et anglaises en front et en back

## Breadcrumb
Ajouter le composant Breadcrumb sur toutes les pages de type article (evenements / breve / lettre / media etc.)
1. Faire en sorte que l’on puisse cliquer sur un lien de catégorie puis y être redirigé. Exemple quand on est sur un article media, le breadcrumb devrait être:

Médias → [Nom Article]

Lors du clic sur “Médias” il faudrait être redirigé sur : https://preprod.schuman.fr/medias

Activité



import Breadcrumb from "@/components/General/Breadcrumb";

{<Breadcrumb type_post="Europe et sociétés" theme_post="Mieux connaître l'Europe" post_name={t('FichePays') + fiche.pays}></Breadcrumb>}