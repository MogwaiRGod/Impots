# Interface de calcul d'impôts (chers)
> Exercice de POO. Interface permettant au client d'entrer son nom et ses revenus totaux de l'année précédente. 
> Le script calcule l'impôt qu'il doit et l'affiche directement sur la page.

## Auteur
Diane (MogwaiRGod)

## Technologies

| JS | HTML | PHP |
|:--:|:--:|:--:|

# Architecture
Le projet suit une architecture MVC

```mermaid
  graph TD;
    A[Model] --> B(Impot.php)
    C[views] --> D[style]
    D --> E(style.css)
    F(index.html)
    G(script.php)
 ```
 
## Model
```mermaid
  classDiagram
    class Impot { 
      String nom
      int revenu
      float taux
      __construct(String nm, int rev) : void
      calculImpot() : float
      afficheImpot() : String
    }
```
