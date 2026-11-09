<?php
$level1 = ['colvert', 'colvert', 'leurre', 'robot', 'colvert'];
/**
 * @param string[] $levelConf
 * @return Duck[]
 */
function levelGenerator(array $levelConf): array{
	$ducks=[];
	foreach($levelConf as $index => $duck){
		$value = match($duck){
			'colvert' => new ColvertsDuck("$duck $index"),
			'leurre' => new BaitDuck("$duck $index"),
			'robot' => new RobotDuck("$duck $index"),
			default => throw new InvalidArgumentException("Type de canard inconnu : $duck")
		};
		$ducks[]= $value;
	}
	return $ducks;
}