(function() {
    
    var app = angular.module('myApp', ['tourPackages','ngRoute']);
    
    
    
    app.config(function($routeProvider){
        $routeProvider
            .when('/', {
                templateUrl:'template/landingPage.html'
            })
            .when('/CompanyProfile', {
                templateUrl:'template/CompanyProfile.html'
            })
            .when('/Package', {
                templateUrl:'template/Package.html'
            })
            .when('/Login', {
                templateUrl:'template/Login.html'
            })
            .when('/register', {
                templateUrl:'template/register.html'
            })
            .when('/thirdPage', {
                templateUrl:'template/thirdPage.html'
            }).otherwise({redirectTo: ''});
        
        //$locationProvider.html5Mode(true);
    });
    
    
    
    
               
}) ();