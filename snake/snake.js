var snake;
var apple;
var snakeGame;

window.onload = function() //Créé le jeu et les éléments au chargement de la fenêtre
{
	snakeGame = new snakeGame(900, 600, 30, 100);
	snake = new Snake([[6,4] , [5,4] , [4,4]], "right");
	apple = new Apple([10,10]);
	snakeGame.init(snake, apple);
}

document.onkeydown = function handleKeyDown(event) //Récupère les évents clavier
{
	var key = event.keyCode;
	var newDirection;
	switch(key) 
	{
		case 37: //flèche de gauche
			newDirection = "left";
			break;
		case 38: //flèche du haut
			newDirection = "up";
			break;
		case 39: //flèche du bas
			newDirection = "right";
			break;
		case 40: //flèche de droite
			newDirection = "down";
			break;
		case 32: //barre d'espace
			snake = new Snake([[6,4] , [5,4] , [4,4]], "right");
			apple = new Apple([10,10]);
			snakeGame.init(snake, apple);
			return;
		default:
			return;
	}
	snakeGame.snake.setDirection(newDirection); //Appel de la fonction en envoyant la nouvelle direction du serpent
}

function snakeGame(canvasWidth, canvasHeight, blockSize, delay)
{
	this.canvas = document.createElement('canvas');
	this.canvas.width = canvasWidth;
	this.canvas.height = canvasHeight;
	//Style du Canvas
	this.canvas.style.border = "30px solid gray";
	this.canvas.style.margin = "50px auto";
	this.canvas.style.display = "block";
	this.canvas.style.backgroundColor = "#ddd"
	//===============
	document.body.appendChild(this.canvas);
	this.context = this.canvas.getContext("2d");
	this.blockSize = blockSize;
	this.delay = delay;
	this.snake;
	this.apple;
	this.widthInBlocks = canvasWidth/blockSize;
	this.heightInBlocks = canvasHeight/blockSize;
	this.score;
	var instance = this; //Instance du jeu
	var timeout;

	this.init = function(snake, apple) //Initialise le jeu
	{
		this.snake = snake;
		this.apple = apple;
		this.score = 0;
		clearTimeout(timeout)
		refreshCanvas();
	};

	var refreshCanvas = function () //Rafraîchit le canvas
	{ 
		//Déplacement du serpent
		instance.snake.advance();
		//Si il y a eu collision
		if(instance.checkCollision()) 
		{
			instance.gameOver();
		}
		//Si pas de collisions
		else 
		{
			//Si le serpent a mangé la pomme
			if(instance.snake.isEatingApple(instance.apple) === true) 
			{
				instance.snake.ateApple = true;
				instance.score += 1
				do 
				{
					instance.apple.setNewPosition(instance.widthInBlocks, instance.heightInBlocks);
				}
				while(instance.apple.checkNewPosition(instance.snake))
			}

			instance.context.clearRect(0,0,instance.canvas.width, instance.canvas.height); //Effacement du canvas entier	
			instance.drawScore() //Affiche le score
			instance.snake.draw(instance.context, instance.blockSize); //Dessin du serpent			
			instance.apple.draw(instance.context, instance.blockSize); //Dessin de la pomme			
			timeout = setTimeout(refreshCanvas, delay); //rafraîchit le canvas après le delay (ms) donné
		}
	};

	this.checkCollision = function() //Vérifie s'il y a eu collision avec le mur ou le corps du serpent
	{
		// Variables de collision mur ou corps du serpent
		var wallCollision = false;
		var selfCollision = false;
		var head = this.snake.body[0];
		var rest = this.snake.body.slice(1);
		var headX = head[0];
		var headY = head[1];
		var minX = 0;
		var minY = 0;
		var maxX = this.widthInBlocks - 1;
		var maxY = this.heightInBlocks - 1;
		var xError = headX < minX || headX > maxX;
		var yError = headY < minY || headY > maxY;
		// Si la tête est sortie du canvas
		if(xError || yError) 
		{
			wallCollision = true;
		}
		// Si les coordonnées de la tête sont égales aux coordonnées de l'un des bloc du corps
		for(i = 0; i < rest.length ; i++) 
		{
			if(headX === rest[i][0] && headY === rest[i][1]) 
			{
				selfCollision = true;
			}
		}

		return wallCollision || selfCollision;
	};

	this.gameOver = function() 
	{
		this.context.save();
		//Style du Game Over
		this.context.font ="bold 25px sans-serif";
		this.context.fillStyle = "gray";
		this.context.textAlign = "center";
		this.context.baseLine = "middle";
		//===================
		var centreX = this.canvas.width / 2;
		var centreY = this.canvas.height / 2;
		this.context.fillText("Game Over !", centreX, centreY + 50);
		this.context.fillText("Appuyez sur espace pour rejouer", centreX, centreY + 80);
		this.context.restore();
	};

	this.drawScore = function() 
	{
		this.context.save();
		//Style du Score
		this.context.font ="bold 200px sans-serif";
		this.context.fillStyle = "gray";
		this.context.textAlign = "center";
		this.context.baseLine = "middle";
		//===============
		var centreX = this.canvas.width / 2;
		var centreY = this.canvas.height / 2;
		this.context.fillText(this.score.toString(), centreX, centreY);
		this.context.restore();
	};

}

function Snake(body, direction) //Prototype du serpent
{
	this.body = body;
	this.direction = direction
	this.ateApple = false;

	this.draw = function(context, blockSize) //Dessine le serpent
	{
		context.save();
		context.fillStyle = "#ff0000";
		for(i = 0; i < this.body.length; i++) 
		{
			var x = this.body[i][0] * blockSize;
			var y = this.body[i][1] * blockSize;
			context.fillRect(x, y, blockSize, blockSize);
		}
		context.restore();
	};

	this.advance = function() //Fonction de déplacement du serpent
	{
		var nextPosition = this.body[0].slice(); //Copie de la position actuelle de la tête
		//incrémentation de x ou y en fonction de la nouvelle direction du serpent
		switch(this.direction)
		{
			case "left":
				nextPosition[0] -= 1;
				break;
			case "right":
				nextPosition[0] += 1;
				break;
			case "up":
				nextPosition[1] -= 1;
				break;
			case "down":
				nextPosition[1] += 1;
				break;
			default:
				throw("Invalid Direction");
		};

		this.body.unshift(nextPosition); //Ajout à la première place de l'array de la nouvelle position de la tête
		if (!this.ateApple) //Si le serpent n'a pas mangé la pomme
			this.body.pop(); //Suppression du dernier élément de l'array (queue du serpent)
		else 
			this.ateApple = false;
	}

	this.setDirection = function(newDirection) //Fonction de changement de direction du serpent
	{
		var allowedDirections; //Définit les direction autorisées en fonction de la direction actuelle
		switch(this.direction) 
		{
			case "left":
			case "right":
				allowedDirections = ["up","down"];
				break;
			case "up":
			case "down":
				allowedDirections = ["right","left"]
				break;
			default:
				throw("Invalid Direction");
		}

		if(allowedDirections.indexOf(newDirection) > -1) 
		{
			this.direction = newDirection;
		}
	}

	this.isEatingApple = function(appleToEat) //Détermine si la pomme a été mangée
	{
		var head = this.body[0]; //Position de la tête
		//Si la tête est aux mêmes coordonnées que la pomme à manger
		if (head[0] === appleToEat.position[0] && head[1] === appleToEat.position[1])
			return true;
		else 
			return false;
	}

}

function Apple(position) //Prototype de la pomme
{
	this.position = position;

	this.draw = function(context, blockSize) //Dessine la pomme
	{
		context.save();
		context.fillStyle = "#33cc33";
		context.beginPath();
		var radius = blockSize/2;
		var x = this.position[0]*blockSize + radius;
		var y = this.position[1]*blockSize + radius;
		context.arc(x,y,radius,0,Math.PI*2, true);
		context.fill();
		context.restore();
	};

	this.setNewPosition = function(widthInBlocks, heightInBlocks) //Définit la nouvelle position de la pomme
	{
		var newX = Math.round(Math.random() *(widthInBlocks - 1));
		var newY = Math.round(Math.random() *(heightInBlocks - 1));
		this.position = [newX, newY];
	};
	
	this.checkNewPosition = function(snakeToCheck) //Vérifie que la pomme se trouve à un nouvel endroit correct (pas sur le serpent)
	{
		var isOnSnake = false;
		for(i = 0; i < snakeToCheck.body.length; i++) 
		{
			if(this.position[0] === snakeToCheck.body[i][0] && this.position[1] === snakeToCheck.body[i][1])
			{
				isOnSnake = true;
			}
		}
		return isOnSnake;
	};
}