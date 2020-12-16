function show(name,brand,cost){
    return function(discount){
           
        return console.log("Name ",name,"Brand",brand,"Cost",cost,"Discount",discount);
    }
};

var result=show('TV','sony',9000);
result(5000);
