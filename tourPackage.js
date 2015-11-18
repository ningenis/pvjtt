(function() {
  var app = angular.module('tourPackages', []);
 

  app.controller('PackageController', function() {
    this.viewIndex = 0;
    this.itemPerPage = 6;
    this.products = packages;
    this.viewProducts = packages.slice(this.viewIndex*this.itemPerPage,(this.viewIndex+1)*this.itemPerPage);  
    
    this.nextPage = function(){
        
        if ((this.itemPerPage*(this.viewIndex)+1)  < (this.products.length)){
            
            //this.viewProducts = {};
            this.viewIndex += 1;
            this.viewProducts = packages.slice(this.viewIndex*this.itemPerPage,(this.viewIndex+1)*this.itemPerPage); 
            
        } 
    };
      
    this.previousPage = function(){
        
        if (this.viewIndex > 0){
            
            //this.viewProducts = {};
            this.viewIndex -= 1;
            this.viewProducts = packages.slice(this.viewIndex*this.itemPerPage,(this.viewIndex+1)*this.itemPerPage); 
            
        } 
    };
      
      
  });

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
