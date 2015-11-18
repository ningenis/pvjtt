(function() {
  
    var app = angular.module('tourPackages', []);
 

  app.controller('PackageController', ['$scope', function($scope) {
    $scope.viewIndex = 0;
    $scope.itemPerPage = 6;
    $scope.products = packages;
    $scope.viewProducts = packages.slice($scope.viewIndex*$scope.itemPerPage,($scope.viewIndex+1)*$scope.itemPerPage);  
    
    $scope.nextPage = function(){
        
        if (($scope.itemPerPage*($scope.viewIndex)+1)  < ($scope.products.length)){
            
            //this.viewProducts = {};
            $scope.viewIndex += 1;
            $scope.viewProducts = packages.slice($scope.viewIndex*$scope.itemPerPage,($scope.viewIndex+1)*$scope.itemPerPage); 
            
        } 
    };
      
    $scope.previousPage = function(){
        
        if ($scope.viewIndex > 0){
            
            //this.viewProducts = {};
            $scope.viewIndex -= 1;
            $scope.viewProducts = packages.slice($scope.viewIndex*$scope.itemPerPage,($scope.viewIndex+1)*$scope.itemPerPage); 
            
        } 
    };
      
      
  }]);

  var packages = [
    {
      name: 'Package A',
      description: "Package A description...",
      price: 2500000
    }, {
      name: 'Package B',
      description: "Package B description...",
      price: 3500000
    },{
      name: 'Package C',
      description: "Package C description...",
      price: 4010000
    }, {
      name: 'Package D',
      description: "Package A description...",
      price: 2500000
    }, {
      name: 'Package E',
      description: "Package B description...",
      price: 3500000
    }, {
      name: 'Package F',
      description: "Package C description...",
      price: 4010000
    }, {
      name: 'Package G',
      description: "Package C description...",
      price: 4010000
    }   

  ];
})();
