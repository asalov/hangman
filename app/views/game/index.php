	
	<div ng-controller="GameController">
		<div class="game-category" ng-hide="gameStarted">
			<h2>Choose category</h2>
			<div class="btn-group btn-group-lg" role="group">
				<?php foreach($this->get('categories') as $cat): ?>
					<button type="button" class="btn btn-default" 
					ng-click="startGame(<?php echo esc($cat->id); ?>)"><?php echo esc($cat->name); ?></button>
				<?php endforeach; ?>
			</div>			
		</div>
		<div class="game-board" ng-show="gameStarted">
			<div class="row">
				<div class="word-area col-md-8">
					<div class="panel panel-default">
		  				<div class="panel-heading">{{ clue }}</div>
		  				<div class="panel-body word-to-guess ng-cloak">{{ hiddenWord }}</div>
					</div>		
				</div>
				<div class="col-md-4 drawing" ng-show="errorCount > 0">
					<img ng-src="img/hang{{ errorCount }}.png" alt="Hangman">
				</div>								
			</div>
			<div class="row">
				<div class="btn-group letters col-md-4" role="group">
				<?php foreach($this->get('alphabet') as $letter): ?>
					<button class="btn btn-default" type="button" 
					ng-disabled="disabledLetters.indexOf('<?php echo esc($letter); ?>') > -1"
					ng-click="guessLetter('<?php echo esc($letter); ?>')"><?php echo esc(strtoupper($letter)); ?></button>
				<?php endforeach; ?>
				</div>				
				<div class="col-md-4">
					<div class="guess-count">Guesses left: {{ 5 - errorCount }}</div>
					<div class="form-group form-inline">
						<label for="fullWord">Guess word:</label>
						<input class="form-control" type="text" id="fullWord" name="fullWord" ng-model="fullWord">
						<button class="btn btn-success" ng-disabled="fullWord.length < 5" ng-click="guessWord(fullWord)">Guess</button>
					</div>					
				</div>
			</div>
		</div>
		<div class="user-stats">
			<h2>Game statistics</h2>
			<ul class="list-group">
				<li class="list-group-item" ng-repeat="(name, val) in stats">
					{{ name | underscore_replace }}
				<span type="text" class="badge">{{ val }}</span>
				</li>
			</ul>		
		</div>		
	</div>