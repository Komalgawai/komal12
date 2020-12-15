var Product=function (name,price){
    this.name=name;
    this.price=price;
    this.Pricedetails=function(){
        console.log("Name is",this.name,"and Price",this.price)
    }
    }
    
    var pro=new Product('komal',5000)
    pro.Pricedetails();

    Product.prototype.discount=1000;
    console.log("Discount is:",pro.discount)
    Product.prototype.discountprice=function(){
        
        console.log("New price",((this.price)-(this.discount)))
    }

    pro.discountprice();


    