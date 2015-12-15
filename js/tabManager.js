(function() {
  
    var app = angular.module('tabManager', []);
 

  app.controller('TabController', ['$scope', function($scope) {
    $scope.tab = 1;
    
   $scope.selectTab = function(i){
       $scope.tab = i;
    };
    
    $scope.isSelected = function(s){
       return $scope.tab === s;
    };
      
      
      
  }]);
    
})();
