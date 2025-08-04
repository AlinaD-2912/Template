# 🖥️ Template PHP – Site de vente de produits tech    
Un projet PHP éducatif qui simule un site de vente de produits technologiques (smartphones, laptops, écrans). L'objectif principal était d’apprendre à manipuler dynamiquement des objets et des pages à l’aide d’un système de front controller.
**Template Php** 
## Objectif du projet
Ce projet a été réalisé dans un cadre d’apprentissage pour mettre en œuvre :

- Un front controller pour centraliser le routage des pages via les URL.

- La réutilisation d’un header et d’un footer sur toutes les pages via include.

- Le chargement dynamique de contenus à partir de données objet (produits) en PHP.

- Un formulaire de contact dont les données sont enregistrées dans un fichier .txt.

Le site simule une boutique de produits tech sans base de données.
## Pages du site
- **Catalogue** : Affiche une liste dynamique d’objets produits (ex. téléphones, laptops). Chaque produit a un nom, une description, un prix et une quantité. Les objets sont manipulés directement en PHP.
- **Contact** : Formulaire permettant aux visiteurs de contacter l’entreprise. Les données saisies sont enregistrées dans un fichier texte (messages.txt), illustrant la gestion de formulaires en PHP.
- **Panier** : Panier simple utilisant les sessions PHP. L'utilisateur peut ajouter/modifier des produits au panier à partir du catalogue.
## Site en ligne
[Accéder au site](https://template-php.kesug.com)
## Technologies utilisées
- PHP
- CSS
- Hack 
## Comment utiliser
Pour visualiser le site en ligne, cliquez simplement sur le lien ci-dessus. 
Pour l’exécuter en local :
```bash
git clone https://github.com/AlinaD-2912/Template.git
cd Template.git
à partir du répertoire Template, écrivez le code dans le terminal
php -S localhost:8000
