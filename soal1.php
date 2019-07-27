<?php

function biodata() {
	$biodata = [
		"name" => "M syifa udzihni alhamdi",
		"age" => 18,
		"address" => "Jl H tohir Tirto Pekalongan",
		"hobbies" => [
				"membaca,browsing"
		],
		"is_married" => false,
		"list_school" => [
					"year_in" => 2016,
					"year out" => 2019,
					"major" => "Rekayasa Perangkat Lunak"
		],
		"skills" => [
					"skill_name" => "PHP",
					"level" => "advanced"
		],
		"interest_in_coding" => true,
	];

		$json_data = json_encode($biodata);
		return $json_data;
	}

	echo biodata();
