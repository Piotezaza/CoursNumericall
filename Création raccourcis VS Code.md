# Créer des snippets sur Visual Studio Code

> Tout d'abord, remerciez Steve, c'est grâce à lui que vous avez ce petit tuto ! ~(˘▾˘~)

Les raccourcis *appellé `snippet`* sont utilisés pour gagner du temps. Par exemple, si tu commences à écrire `html` tu vas avoir l'auto-complétion avec des portions de code pré-enregistrées.

## Manip's

Une fois Visual Studio Code lancé :

### 1ère étape : **organisation de nos snippets**

- Cliques sur l'engrenage en bas à gauche de ton écran. Un menu s'affiche. 
- Cliques sur `Paramètres`.
- Dans `Paramètres utilisateur` colle ce bout de code à la fin *(n'oublies pas les virgules !)* : `"editor.snippetSuggestions": "top"`. Il permet de placer TES snippets tout en haut dans les suggestions.

### 2ème étape : **accéder au bon fichier pour le bon language**

- Cliques sur l'engrenage. 
- Cliques sur `Extraits de code de l'utilisateur`
- Sélectionne le language pour tes snippets. Ici on va prendre **PHP**.
- Un fichier `.json` va s'ouvrir et là on commence à prendre son pied \ (•◡•) /

### 3ème étape : **créer un snippet**

En soit, c'est écrit sur le fichier, mais on va reprendre pas à pas les étapes clés pour créer correctement un snippet. 

Chaque snippet doit contenir :

- Un *nom* : c'est juste le nom de ton snippet, rien de bien compliqué.
- Un *prefixe* : c'est ce que tu vas écrire pour appeler ton snippet. 
- Un *body* : la manière dont ton snipper va fonctionner.
- Une *description* : petit descriptif de ta fonction et/ou de ton snippet.

Voici l'apparence d'un snippet :

```
"NOM": {
	"prefix": "CE QUE TU VAS ÉCRIRE",
	"body": [
		"CE QUI VA APPARAÎTRE SUR UNE",
        "OU DEUX LIGNES"
	],
	"description": "TA DESCRIPTION"
}
```
---

**PREREQUIS**

Dans un snippet, tu as déjà remarqué, ton curseur se met **AUTOMATIQUEMENT** à des endroits **clés** pour te faire gagner du temps. Tu as juste à faire `TAB` pour naviguer entre les différents paramètres de ton raccourcis. 

Pour insérer un emplacement de curseur, il suffit d'écrire `${1:}`. 
- le `${}` indique qu'il va y avoir une intérraction avec le curseur, on y entre des paramètres comme expliqué en dessous.
- Le `1:` représente l'ordre de navigation de ton curseur. Si tu as qu'un emplacement, il faut quand même le mettre. Si tu en as plusieurs, il te suffit d'incrémenter à la mano tes numéros.

Tu as peut-être déjà remarqué mais des fois, t'as carrément un texte sélectionné qui apparaît ! ⚆ _ ⚆ 

---

**EXEMPLE :** on va faire un snippet pour la fonction `if()`
