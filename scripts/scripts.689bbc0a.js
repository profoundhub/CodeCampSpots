"use strict";
angular.module("mytodoApp", ["ngAnimate", "ngAria", "ngCookies", "ngMessages", "ngResource", "ngRoute", "ngSanitize", "ngTouch", "ui.sortable", "LocalStorageModule"]).config(["localStorageServiceProvider", function(a) {
  a.setPrefix("ls")
}]).config(["$routeProvider", function(a) {
  a.when("/", {
    templateUrl: "views/main.html",
    controller: "MainCtrl"
  }).when("/about", {
    templateUrl: "views/about.html",
    controller: "AboutCtrl"
  }).otherwise({
    redirectTo: "/"
  })
}]), angular.module("mytodoApp").controller("MainCtrl", ["$scope", "localStorageService", function(a, b) {
  var c = b.get("todos");
  a.todos = c || [], a.$watch("todos", function() {
    b.set("todos", a.todos)
  }, !0), a.addTodo = function() {
    a.todos.push(a.todo), a.todo = ""
  }, a.removeTodo = function(b) {
    a.todos.splice(b, 1)
  }
}]), angular.module("mytodoApp").controller("AboutCtrl", ["$scope", function(a) {
  a.awesomeThings = ["HTML5 Boilerplate", "AngularJS", "Karma"]
}]);
