<?php
$tree = [
	[
		'id'		=> 1,
		'parent_id'	=> 0,
		'title'		=> 'Beggining',
		'children'	=> [
			[
				'id'		=> 1,
				'parent_id'	=> 1,
				'title'		=> 'north',
				'children'	=> [
					[
						'id'		=> 1,
						'parent_id'	=> 1,
						'title'		=> 'Window'
					],
					[
						'id'		=> 1,
						'parent_id'	=> 1,
						'title'		=> 'Bottle'
					],
					[
						'id'		=> 1,
						'parent_id'	=> 1,
						'title'		=> 'Ashtray'
					]
				]
			],
			[
				'id'		=> 2,
				'parent_id'	=> 1,
				'title'		=> 'south',
				'children'	=> [
					[
						'id'		=> 1,
						'parent_id'	=> 2,
						'title'		=> 'Locked Door'
					],
					[
						'id'		=> 1,
						'parent_id'	=> 2,
						'title'		=> 'Doormat'
					]
				]
			],
			[
				'id'		=> 3,
				'parent_id'	=> 1,
				'title'		=> 'east',
				'children'	=> [
					[
						'id'		=> 1,
						'parent_id'	=> 3,
						'title'		=> 'Bed'
						'children'	=> [						
							[	
								'id'		=> 1,
								'parent_id'	=> 1,
								'title'		=> 'Mattress'
								'children'	=> [
									[	
										'id'		=> 1,
										'parent_id'	=> 1,
										'title'		=> 'Key'
									]
								]
							]
						]
					]
				]
			],
			[
				'id'		=> 4,
				'parent_id'	=> 1,
				'title'		=> 'west',
				'children'	=> [
				]
			],
		]
	]
]
?>