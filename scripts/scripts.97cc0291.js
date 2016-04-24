"use strict";
angular.module("mytodoApp", ["ngAnimate", "ngAria", "ngCookies", "ngMessages", "ngResource", "ngRoute", "ngSanitize", "ngTouch", "ui.sortable"]).config(["$routeProvider", function(a) {
  a.when("/", {
    templateUrl: "views/main.html",
    controller: "MainCtrl"
  }).when("/about", {
    templateUrl: "views/about.html",
    controller: "AboutCtrl"
  }).otherwise({
    redirectTo: "/"
  })
}]), angular.module("mytodoApp").controller("MainCtrl", ["$scope", function(a) {
  a.todos = [], a.addTodo = function() {
    a.todos.push(a.todo), a.todo = ""
  }, a.removeTodo = function(b) {
    a.todos.splice(b, 1)
  }
}]), angular.module("mytodoApp").controller("AboutCtrl", ["$scope", function(a) {
  a.awesomeThings = ["HTML5 Boilerplate", "AngularJS", "Karma"]
}]);
