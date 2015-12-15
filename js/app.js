(function() {
    
    var app = angular.module('myApp', ['tourPackages','packageDetail', 'dashboard','ngRoute', 'ui.bootstrap']);
    
    
    
    app.config(function($routeProvider){
        $routeProvider
            .when('/', {
                templateUrl:'template/landingPage.html'
            })
            .when('/AboutUs', {
                templateUrl:'template/CompanyProfile.html',
                
            })
            .when('/Package/:param', {
                templateUrl:'template/Package.html'
            })
            .when('/Login', {
                templateUrl:'template/login.html'
            })
            .when('/Register', {
                templateUrl:'template/register.html'
            })
            .when('/ResetPassword', {
                templateUrl:'template/resetPassword.html'
            })
            .when('/Dashboard', {
                templateUrl:'template/dashboard.html'
            })
            .when('/ContactUs', {
                templateUrl:'template/contact.html'
            })
            .when('/thirdPage', {
                templateUrl:'template/thirdPage.html'
            }).otherwise({redirectTo: ''});
        
        //$locationProvider.html5Mode(true);
    });
    
    app.controller('CarouselController', function ($scope) {
          $scope.myInterval = 5000;
          $scope.noWrapSlides = false;
          $scope.slides = slides;
          $scope.addSlide = function() {
            var newWidth = 600 + slides.length + 1;
            slides.push({
              image: '//placekitten.com/' + newWidth + '/300',
              text: ['More','Extra','Lots of','Surplus'][slides.length % 4] + ' ' +
                ['Cats', 'Kittys', 'Felines', 'Cutes'][slides.length % 4]
            });
          };
          
    });
    
    var slides = [
        {
            image: 'Bandung.jpg',
            text: 'Welcome to Bandung'
        },
        {
            image: 'golf-1920x1080-004.jpg',
            text: 'Bandung Golf Tour'
        }
    ];
              
    
                
    
    
    
    
               
}) ();