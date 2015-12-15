(function() {
  
    var app = angular.module('tourPackages', []);
    
 
    app.controller('PackageListController', ['$scope', '$routeParams', function($scope, $routeParams) {
        $scope.param = $routeParams.param;          
        $scope.products = tours;
        $scope.viewIndex = 0;
        $scope.itemPerPage = 4;
        
        $scope.viewProducts = $scope.products.slice($scope.viewIndex*$scope.itemPerPage,($scope.viewIndex+1)*$scope.itemPerPage);  

        $scope.nextPage = function(){

            if (($scope.itemPerPage*($scope.viewIndex)+1)  < ($scope.products.length)){

                //this.viewProducts = {};
                $scope.viewIndex += 1;
                $scope.viewProducts = $scope.products.slice($scope.viewIndex*$scope.itemPerPage,($scope.viewIndex+1)*$scope.itemPerPage); 

            } 
        };

        $scope.previousPage = function(){

            if ($scope.viewIndex > 0){

                //this.viewProducts = {};
                $scope.viewIndex -= 1;
                $scope.viewProducts = $scope.products.slice($scope.viewIndex*$scope.itemPerPage,($scope.viewIndex+1)*$scope.itemPerPage); 

            } 
        };
        
        //Fungsi untuk mengambil gambar thumbnail untuk paket. Jika tidak ada menggunakan gambar noImage.jpg
        $scope.getImage = function(pr){
            if (pr.imageURL == null){
                return 'noImage.jpg'
            } else {
                return pr.imageURL[0];
            }

        }
    }]);
    
    
    app.controller('PackageController', ['$scope', '$routeParams', function($scope, $routeParams) {
        $scope.param = $routeParams.param;          
        $scope.products = tours;
        $scope.product;
        //Nanti diganti dengan akses ke database
        $scope.getProduct = function(){
            var pr;
            for (var i = 0;i<$scope.products.length;i++){
                var prId = $scope.products[i].id;
                if (prId == $scope.param){
                    pr = $scope.products[i];
                    break;
                }
            }
            $scope.product = pr;
        };
        
        
        
    }]);
    
    app.controller('GalleryController', ['$scope', function($scope) {
        $scope.galleries = tours[0].imageURL;
        $scope.thumbnail;
        
        $scope.getThumbnail = function(){
           return $scope.galleries[0];
        };
        
        $scope.setGalleries = function(pr){
            $scope.galleries = pr.imageURL;
            
        };
        
        $scope.setThumbnail = function(url){
           $scope.thumbnail = url;
        };
        
        $scope.thumbnail = $scope.galleries[0];
        
        
        
        
    }]);

    //Sementara untuk data paket seperti ini dulu sampai database selesai
  var tours = [
    {
        id: 'BTP5D4N',
        name: 'Bandung Tour Packages (5D4N)',
        imageURL: ['forest.jpg','shady-forest.jpg','Forest-Green-Wallpaper.jpg'],
        description: "Package A description...",
        descriptionLong: "Shopping in Bandung is quite an affair and there are many markets around the city to fulfill your shopping needs. Discover your 5 Days 4 Nites in Bandung. Bandung is one of the best place in entire Indonesia to have inexpensive but quality food. Make sure that you have not missed on getting experience of the city life that goes on in Bandung before leaving.",
        itineraries: ["Arrival Bandung - Meet our greet representative, Bandung city tour, Hotel Check-in.",
                     "Bandung Volcano Tour and Shopping - Visit Tangkuban Perahu, Cihideung Flower Village, Shopping in Bandung",
                     "Shopping Day -  Pasar Baru, Dago Factory Outlets, and Riau Factory Outlets.",
                     "Bandung Tour and Art Culture - Paris van Java, Visit Saung Angklung Udjo Performance",
                     "Bandung & Theme Park Tour -  Visit Trans Studio and Bandung Tour",
                     "Departure from Bandung - Free tour, and departure at Bandung airport."],
        price: 2500000
    }, {
        id: 'BGP4D3N',
        name: 'Bandung Golf Package (4D3N)',
        imageURL: ['green-golf-course-1348-1920x1080.jpg','golf-1920x1080-004.jpg'],
        description: "Package B description...",
        descriptionLong: "Bandung Golf Package for play at Golf Courses around Bandung. Bandung Indah Golf Club, Dago Endah Golf Club, Mountain View Golf Club, Bandung Giri Gahana.",
        itineraries:["Arrival in Bandung - Upon arrival in Husein Sastra Negara Bandung Airport,you will be meet and greet by our representative and we will transfer you to hotel for check in and free at your own leisure",
                     "Breakfast at hotel - After finish your breakfast, assemble at lobby and we will transfer you to One of Bandung Golf Club in Bandung for your tee at the golf course. After finish your golfing, we will transfer you back to hotel and free at your own leisure.",
                     "Golf Club - Breakfast at hotel. After finish your breakfast, assemble at lobby and we will transfer you to One of Bandung Golf Club in Bandung for your tee at the golf course. After finish your golfing, we will transfer you back to hotel and free at your own leisure.",
                     "Departure - Breakfast at hotel.After breakfast free at your own leisure until you will be transfer to airport for your flight departure back to your next destination."            
        ],        
        price: 3500000
    },{
        id: 'BSG001',
        name: 'Bandung Sight Seeing One Day Tour Package',
        imageURL: ["gedung-sate.jpg","DSC_31012015Bandros-Bandung.jpg"],
        descriptionLong: "Visit any interesting places in Bandung downtown like Gedung Sate, Factory Outlets Areas (in Jalan Dago, Jalan Riau, Jalan Setiabudi), Bandung Shopping Malls, the Groote Postweg, Geological Museum, Bandung Uniques market (like Cibadyut leather industy center, Cihampelas for Jeans Street, Palasari as specialized market for Books, Pasar Baru as a clothing market, Jalan Surapati specialized for T-Shirt industrial area). Historical building places",
        description: "Discover the unique of Bandung in One Day with our Bandung sightseeing Tour Package program.",
        itineraries:[
            'Visit any interesting places in Bandung downtown like Gedung Sate, Factory Outlets Areas (in Jalan Dago, Jalan Riau, Jalan Setiabudi), Bandung Shopping Malls, etc.'
        ],
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
