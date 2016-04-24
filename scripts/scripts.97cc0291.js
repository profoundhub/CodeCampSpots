"use strict";
angular.module("portfolioApp", ["ngAnimate", "ngAria", "ngCookies", "ngMessages", "ngResource", "ngRoute", "ngSanitize", "ngTouch", "ui.sortable"]).config(["$routeProvider", function(a) {
  a.when("/", {
    templateUrl: "views/main.php",
    controller: "MainCtrl"
  }).when("/about", {
    templateUrl: "views/about.php",
    controller: "AboutCtrl"
  }).otherwise({
    redirectTo: "/"
  })
}]), angular.module("portfolioApp").controller("MainCtrl", ["$scope", function(a) {
  a.portfolios = [], a.addPortfolio = function() {
    a.portfolios.push(a.portfolio), a.portfolio = ""
  }, a.removePortfolio = function(b) {
    a.portfolios.splice(b, 1)
  }
}]), angular.module("portfolioApp").controller("AboutCtrl", ["$scope", function(a) {
  a.awesomeThings = ["HTML5 Boilerplate", "AngularJS", "Karma"]
}]);
