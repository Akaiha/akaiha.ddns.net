$(function() {

	var $mainMenuItems = $("#main-content ul").children("li"),	//Récupère tous les éléments li
		mainMenuItemsCount = $mainMenuItems.length,	//Compte le nombre d'éléments li
		openedItemIndex = 0,	//De base, aucun item d'ouvert donc index à -1

		init = function() {

			bindEvents();

			if(validIndex(openedItemIndex)) {
				animateItem($mainMenuItems.eq(openedItemIndex), true, 750);
			};
		};

		bindEvents = function() {

			$mainMenuItems.children(".picture").click(function() {	//Attente du click sur une image
				var newIndex = $(this).parent().index();	//Set du nouvel index sur le parent de l'image
				checkAndAnimateItem(newIndex);
			});

			$(".button").hover(function(){	//Lorsque la souris entre ou sors de l'un des boutons, lui ajoute ou enlève la classe "hovered"
				$(this).addClass("hovered");
			}, 
			function() {
				$(this).removeClass("hovered");
			});

			$(".button").click(function(){
				var newIndex = $(this).index();
				checkAndAnimateItem(newIndex);
			});
		}

		validIndex = function(indexToCheck) {	//Retourne vrai ou faux si le nouvel index est dans les limites des items li du DOM

			return (indexToCheck >= 0) && (indexToCheck < mainMenuItemsCount);
		};

		animateItem = function($item, toOpen, speed) {	//Anime les items

			var $colorImage = $item.find(".color-picture"),	//On stocke les images en couleur pour les manipuler
			itemParameters = toOpen ? {width:"420px"}:{width:"140px"},	//Si l'image est à ouvrir ou si elle est à fermer, on change la largeur de l'item en conséquence
			colorImageParameters = toOpen ? {left:"0px"}:{left:"140px"};	// et on la change de position en conséquence

			$colorImage.animate(colorImageParameters, speed);	//On anime selon les paramètres
			$item.animate(itemParameters, speed);
		};

		checkAndAnimateItem = function(indexToCheckAndAnimate) {
			if(openedItemIndex === indexToCheckAndAnimate) {	//Si l'index de l'item ouvert est celui du "nouvel" index
				animateItem($mainMenuItems.eq(indexToCheckAndAnimate), false, 250);	//On a cliqué sur le même item alors on le ferme
				openedItemIndex = -1;	//On set le nouvel index sur -1 (aucun item ouvert)
			}
			else {	//Si le nouvel index est différent du l'index actuel
				if (validIndex(indexToCheckAndAnimate)) {	//et que le nouvel index est valide
					animateItem($mainMenuItems.eq(openedItemIndex), false, 250);	//On ferme l'item précédent
					openedItemIndex = indexToCheckAndAnimate;	//On définit le nouvel index sur le nouvel item
					animateItem($mainMenuItems.eq(openedItemIndex), true, 250);	//On ouvre le nouvel item
				}
			}
		};

	init();
});