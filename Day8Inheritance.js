function Shape(len,bre){
    this.len=len;
    this.bre=bre;
    this.AreaOfRect=function(){
        console.log('Area of rect is:=',this.len*this.bre);
        console.log('Perimeter of rect:=',(2*(this.len+this.bre)));
    }
}

 function Triangle(base,height){
     Shape.call(this,base,height);
      this.AreaOfTriangle=function(){
         console.log('Area of Triangle is:= ',base*height/2);
     }
 }
   
var obj1=new Shape(50,50);
obj1.AreaOfRect();


var obj2=new Triangle(50,50);
obj2.AreaOfTriangle();  