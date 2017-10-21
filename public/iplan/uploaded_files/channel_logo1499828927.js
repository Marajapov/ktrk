
var myApp = angular.module("myModule", []);

myApp.controller("titleController", function($scope) {
	
	$scope.message = "HELLO WORLD!!!";
	
});

myApp.controller("myController", function($scope) {
	$scope.message = "HELLO WORLD";
	
	var ulut = [
	
	{name: "pocoyo", category: "Monologue", dt: new Date("January 1, 1980"), gender: "Male", salary: 34322.54, pic: "images/poco.jpg"},
	{name: "pepe", category: "Monologue", dt: new Date("May 11, 1999"), gender: "Male", salary: 124332, pic: "images/poco.jpg"},
	{name: "deaThNote", category: "Fantasy", dt: new Date("August 31, 1933"), gender: "Female", salary: 233412.12, pic: "images/poco.jpg"},
	{name: "Pikachu ", category: "UNKNOWN", dt: new Date("October 21, 1911"), gender: "Female", salary: 44344, pic: "images/poco.jpg"},
	];
	
	var countries = [
	{name: "UK", cities:[ {name:"London"}, {name:"Manchester"}, {name:"Winchester"} ] },
	{name: "China", cities:[ {name:"Beijing"}, {name:"Guanzhou"}, {name:"Shanhai"} ] },
	{name: "Russia", cities:[ {name:"Moscow"}, {name:"Omsk"}, {name:"Tomsk"} ] },
	];
	
	var voting = [
	{name:"Aibek", like:0, dislike:0}, {name:"Mirbek", like:0, dislike:0}, {name:"Nurbek", like:0, dislike:0}, {name:"Bakyt", like:0, dislike:0}, {name:"Azat", like:0, dislike:0}
	];
	
	$scope.ulut = ulut;
	$scope.countries = countries;
	$scope.voting = voting;
	
	$scope.incrementLike = function(technology){technology.like++; };
	$scope.incrementDisLike = function(technology){technology.dislike++; };
	$scope.myLimit = 3;
	$scope.orderBy="name";
	
});

